<?php

use Curl\Curl,
    Bitrix\Main\Loader,
    Bitrix\Catalog\Model\Product,
    Bitrix\Catalog\Model\Price;

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
set_time_limit(0);

$_SERVER['DOCUMENT_ROOT'] = '/home/c/cd85014/freud_new/public_html';

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$curl = new Curl;
$curl->setHeader('Content-Type', 'text/xml');
$curl->setOpt(CURLOPT_SSL_VERIFYHOST , 0);
$curl->setOpt(CURLOPT_SSL_VERIFYPEER , 0);
$curl->setOpt(CURLOPT_USERPWD , 'HTTP_USER:41022');
$curl->post('https://80.254.20.38:12555/rk7api/v0/xmlinterface.xml', getXmlRkMethod('CATEGLIST', 'WithMacroProp="1" PropMask="Items.(Ident, Name)"'));

if ($curl->error) {
    echo $curl->errorCode . ': ' . $curl->errorMessage;

    exit;
}

$responseArray = json_decode(json_encode($curl->response), TRUE);

$shopSectId = null;

foreach ($responseArray['RK7Reference']['Items']['Item'] as $index => $item) {
    if ($item['@attributes']['Name'] === 'Магазин') {
        $shopSectId = $item['@attributes']['Ident'];
        break;
    }
}


$curl = new Curl;
$curl->setHeader('Content-Type', 'text/xml');
$curl->setOpt(CURLOPT_SSL_VERIFYHOST, 0);
$curl->setOpt(CURLOPT_SSL_VERIFYPEER, 0);
$curl->setOpt(CURLOPT_USERPWD, 'HTTP_USER:41022');
$curl->post('https://80.254.20.38:12555/rk7api/v0/xmlinterface.xml', getXmlRkMethod('MenuItems', 'WithMacroProp="1" PropMask="Items.(Ident, Name, Status, Code, HighLevelGroup1, PRICETYPES*)"'));

if ($curl->error) {
    echo $curl->errorCode . ': ' . $curl->errorMessage;

    exit;
}

$responseArray = json_decode(json_encode($curl->response), TRUE);

Loader::IncludeModule('iblock');

$ids = [];
$rsData = CIBlockElement::GetList(
    [],
    [
        'IBLOCK_ID' => [
            IB_ID_SHOP,
            IB_ID_RK_CATALOG,
        ],
    ],
    false,
    false,
    [
        'ID',
        'ACTIVE',
        'PROPERTY_RK_ID',
    ]
);

while ($arData = $rsData->fetch()) {
    $ids[$arData['PROPERTY_RK_ID_VALUE']] = $arData;
}

$errors = '';

foreach ($responseArray['RK7Reference']['Items']['Item'] as $index => $item) {
    if ($index == 0 || $item['@attributes']['HighLevelGroup1'] !== $shopSectId) {
        continue;
    }

    $active = $item['@attributes']['Status'] === 'rsActive' ? 'Y' : 'N';

    if ($ids[$item['@attributes']['Ident']]['ACTIVE'] != $active) {
        $el = new CIBlockElement;
        $result = $el->update($ids[$item['@attributes']['Ident']]['ID'], [
            'ACTIVE' => $active,
        ]);

        if ($result) {
            echo 'Изменен статус элемента с ID: ' . $ids[$item['@attributes']['Ident']]['ID'] . '<br>';
        } else {
            $error = $el->LAST_ERROR;
            echo $error;
            $errors .= $error;
        }
    }

    $price = (int) $item['@attributes']['PRICETYPES-3'];

    if (strlen($price > 2) && strlen($price) < 10) {
        $price = substr($price, 0, -2);
    } else {
        $price = 0;
    }

    if ($ids[$item['@attributes']['Ident']]) {
        if (!$price) {
            continue;
        }

        $primary = Price::getList([
            'filter' => [
                'PRODUCT_ID' => $ids[$item['@attributes']['Ident']]['ID'],
            ],
            'select' => [
                'ID',
            ],
        ])->fetch()['ID'];

        $resultUpdatePrice = Price::update(
            $primary,
            [
                'PRICE' => $price,
            ]
        );

        if (!$resultUpdatePrice->isSuccess()) {
            $resultAddPrice = Price::add([
                'PRODUCT_ID' => $ids[$item['@attributes']['Ident']]['ID'],
                'CATALOG_GROUP_ID' => 1,
                'CURRENCY' => 'RUB',
                'PRICE' => $price,
            ]);

            if (!$resultAddPrice->isSuccess()) {
                $error = 'Ошибка добавление цены для товара с ID: ' . $ids[$item['@attributes']['Ident']]['ID'] . '<br>';

                foreach ($resultAddPrice->getErrorMessages() as $errorMess) {
                    $error .= "$errorMess<br>";
                }

                echo $error;
                $errors .= $error;
            }
        }
    } else {
        $el = new CIBlockElement;

        $resultAdding = $el->Add([
            'NAME' => $item['@attributes']['Name'],
            'IBLOCK_ID' => IB_ID_RK_CATALOG,
            'CODE' => CUtil::translit($item['@attributes']['Name'], 'ru', ['replace_space' => '-', 'replace_other' => '-',]),
            'PROPERTY_VALUES' => [
                'RK_ID' => $item['@attributes']['Ident'],
                'ART' => $item['@attributes']['Code'],
                'VIEW_NAME' => $item['@attributes']['Name'],
            ],
        ]);

        if ($resultAdding) {
            echo 'Добавлен новый элемент с р кипера. ID - ' . $resultAdding . '<br>';
        } else {
            $error = 'Ошибка при добавлении нового товара с р кипера. ID товара в кипере: ' . $item['@attributes']['Ident'] . '<br>';
            $error .= $el->LAST_ERROR;
            echo $error;
            $errors .= $error;
        }

        if (!$price) {
            continue;
        }

        $resultAddPrice = Price::add([
            'PRODUCT_ID' => $resultAdding,
            'CATALOG_GROUP_ID' => 1,
            'CURRENCY' => 'RUB',
            'PRICE' => $price,
        ]);

        if (!$resultAddPrice->isSuccess()) {
            $error = 'Ошибка добавление цены для товара с ID: ' . $resultAdding . '<br>';

            foreach ($resultAddPrice->getErrorMessages() as $errorMess) {
                $error .= "$errorMess<br>";
            }

            echo $error;
            $errors .= $error;
        }
    }
}

if (!$errors) {
    return;
}

file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/local/logs/rk_exchange.txt', (new DateTime)->format('d.m.Y H:i:s') . '<br>' . $errors, FILE_APPEND);
