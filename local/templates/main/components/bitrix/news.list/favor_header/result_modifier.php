<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$countCurSec = count($arResult['ELEMENTS']);

if ($countCurSec == 1) {
    $arResult['count_cur'] .= ' товар';
} elseif ($countCurSec < 5) {
    $arResult['count_cur'] .= ' товара';
} else {
    $arResult['count_cur'] .= ' товаров';
}

$select = [ 
    'NAME',
    'ID',
    'CATALOG_GROUP_1',
    'IBLOCK_ID',
];

$filter = [
    'IBLOCK_ID' => IB_ID_SHOP,
    'SECTION_ID' => $arResult['SECTION']['PATH'][0]['ID'],
    'ACTIVE' => 'Y',
];

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
        $item['PROPERTIES']['GALLERY']['VALUE'][0],
        $arParams['IMG_SIZE']
    )['src'] ?: CATALOG_PLUG . '335x335.png';

    foreach ($item['PROPERTIES']['point']['VALUE_XML_ID'] as $key2 => $point) {
        if ($point == 'NEW') {
            $class = 'label-black';
        } elseif ($point == 'LIMITED') {
            $class = 'label-brown';
        }
        $arResult['ITEMS'][$key]['ar_point'][$key2]['val'] = $point;
        $arResult['ITEMS'][$key]['ar_point'][$key2]['class'] = $class;
    }

    $arPrice = explode('.', $item['CATALOG_PRICE_1']);
    $arResult['ITEMS'][$key]['price'] = number_format($arPrice[0], 0, '', ' ');
    $arResult['ITEMS'][$key]['cur'] = $item['CATALOG_CURRENCY_1'];

    $arPropWine = [
        'color',
        'sugar',
        'volume'
    ];

    foreach ($arPropWine as $key2 => $code) {
        if ($item['PROPERTIES'][$code]['VALUE']) {
            $arResult['ITEMS'][$key]['csv'][] = $item['PROPERTIES'][$code]['VALUE'];
        }
    }
}
