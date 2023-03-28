<?php

use Curl\Curl,
    Bitrix\Main\Loader;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$curl = new Curl;
$curl->setHeader('Content-Type', 'text/xml');
$curl->setOpt(CURLOPT_SSL_VERIFYHOST , 0);
$curl->setOpt(CURLOPT_SSL_VERIFYPEER , 0);
$curl->setOpt(CURLOPT_USERPWD , 'HTTP_USER:41022');
$curl->post('https://80.254.20.38:12555/rk7api/v0/xmlinterface.xml', getXmlRkMethod('CATEGLIST', 'WithMacroProp="1" PropMask="Items.(Ident)"'));

if ($curl->error) {
    echo $curl->errorCode . ': ' . $curl->errorMessage;

    exit;
}

$responseArray = json_decode(json_encode($curl->response), TRUE);

//Loader::IncludeModule('iblock');
//
//$rsData = CIBlockSection::GetList(
//    [],
//    [
//        'IBLOCK_ID' => IB_ID_RK_CATALOG,
//    ],
//    false,
//    [
//        'ID',
//        'UF_RK_ID',
//    ]
//);
//
//$ibSects = [];
//
//while ($arData = $rsData->Fetch()) {
//    $ibSects[$arData['UF_RK_ID']] = $arData['ID'];
//}

//exit;

foreach ($responseArray['RK7Reference']['Items']['Item'] as $index => $item) {
    if ($index == 0) {
        continue;
    }

    echo '<pre>';
    var_dump($item);
    echo '</pre>';

//    $sect = new CIBlockSection;
//
//    if (!$sect->Update(
//        $ibSects[$item['@attributes']['Ident']],
//        [
//            'IBLOCK_SECTION_ID' => $ibSects[$item['@attributes']['Parent']],
//        ]
//    )) {
//        echo $sect->LAST_ERROR;
//    }

//    if (!$sect->Add([
//        'IBLOCK_ID' => IB_ID_RK_CATALOG,
//        'ACTIVE' => 'Y',
//        'CODE' => Cutil::translit($item['@attributes']['Name'], 'ru', ['replace_space' => '-', 'replace_other' => '-']),
//        'NAME' => $item['@attributes']['Name'],
//        'UF_RK_ID' => $item['@attributes']['Ident'],
//    ])) {
//        echo $sect->LAST_ERROR;
//    }
}
