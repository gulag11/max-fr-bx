<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['ITEMS'] as $key => $item) {
    if ($arParams['favor']) {
        if (in_array($item['ID'], $arParams['favor'])) {
            $arResult['ITEMS'][$key]['favor_actv'] = true;
        }
    }

    $arResult['ITEMS'][$key]['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
        $item['PROPERTIES']['GALLERY']['VALUE'][0],
        $arParams['IMG_SIZE']
    )['src'] ?: CATALOG_PLUG . '335x335.png';

    $arPrice = explode('.', $item['CATALOG_PRICE_1']);

    if ($arParams['BASKET_ITEMS'][$item['ID']]) {
        $arResult['ITEMS'][$key]['BASKET']['CLASS'] = ' in-cart';
        $arResult['ITEMS'][$key]['BASKET']['TEXT']['DESKTOP'] = 'В корзине';
        $arResult['ITEMS'][$key]['BASKET']['TEXT']['MOBILE'] = 'В корзине';
        $arResult['ITEMS'][$key]['BASKET']['ATTR'] = '';
    } else {
        $arResult['ITEMS'][$key]['BASKET']['TEXT']['DESKTOP'] = 'Добавить в корзину';
        $arResult['ITEMS'][$key]['BASKET']['TEXT']['MOBILE'] = 'В корзину';
        $arResult['ITEMS'][$key]['BASKET']['ATTR'] = 'data-type="basket"';
    }

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

    foreach ($item['PROPERTIES']['point']['VALUE_XML_ID'] as $key2 => $point) {
        if ($point == 'NEW') {
            $class = 'label-black';
        } elseif ($point == 'LIMITED') {
            $class = 'label-brown';
        }
        $arResult['ITEMS'][$key]['ar_point'][$key2]['val'] = $point;
        $arResult['ITEMS'][$key]['ar_point'][$key2]['class'] = $class;
    }
}

if ($arParams['link_sec']) {
    $arResult['link_sec'] = $arParams['link_sec'];
} else {
    $arResult['link_sec'] = '/shop/';
}
