<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arFavor = $_SESSION['FAVOR'];

if (is_array($arFavor)) {
    $countFavor = count($arFavor);
}

if ($countFavor == 1) {
    $arFavorInfo['count_cur'] .= ' товар';
} elseif ($countFavor < 5) {
    $arFavorInfo['count_cur'] .= ' товара';
} else {
    $arFavorInfo['count_cur'] .= ' товаров';
}

foreach ($arFavor as $key => $item) {
    $arFavor[$key]['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
        $item['PROPERTIES']['GALLERY']['VALUE'][0],
        ['width' => 100, 'height' => 100]
    )['src'] ?: CATALOG_PLUG . '335x335.png';

    foreach ($item['PROPERTIES']['point']['VALUE_XML_ID'] as $key2 => $point) {
        if ($point == 'NEW') {
            $class = 'label-black';
        } elseif ($point == 'LIMITED') {
            $class = 'label-brown';
        }
        $arFavor[$key]['ar_point'][$key2]['val'] = $point;
        $arFavor[$key]['ar_point'][$key2]['class'] = $class;
    }

    $arPrice = explode('.', $item['CATALOG_PRICE_1']);
    $arFavor[$key]['price'] = number_format($arPrice[0], 0, '', ' ');
    $arFavor[$key]['cur'] = $item['CATALOG_CURRENCY_1'];

    $arPropWine = [
        'color',
        'sugar',
        'volume'
    ];

    foreach ($arPropWine as $key2 => $code) {
        if ($item['PROPERTIES'][$code]['VALUE']) {
            $arFavor[$key]['csv'][] = $item['PROPERTIES'][$code]['VALUE'];
        }
    }
}
