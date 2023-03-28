<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

foreach ($arResult['ITEMS'] as $index => $item) {
    $arResult['ITEMS'][$index]['PREVIEW_PICTURE'] = CFile::ResizeImageGet($item['PROPERTIES']['GALLERY']['VALUE'][0], $arParams['IMG_SIZE'])['src'] ?: CATALOG_PLUG . '335x335.png';

    if ($arParams['BASKET_ITEMS'][$item['ID']]) {
        $arResult['ITEMS'][$index]['BASKET']['CLASS'] = ' in-cart';
        $arResult['ITEMS'][$index]['BASKET']['TEXT']['DESKTOP'] = 'В корзине';
        $arResult['ITEMS'][$index]['BASKET']['TEXT']['MOBILE'] = 'В корзине';
        $arResult['ITEMS'][$index]['BASKET']['ATTR'] = '';
    } else {
        $arResult['ITEMS'][$index]['BASKET']['TEXT']['DESKTOP'] = 'Добавить в корзину';
        $arResult['ITEMS'][$index]['BASKET']['TEXT']['MOBILE'] = 'В корзину';
        $arResult['ITEMS'][$index]['BASKET']['ATTR'] = 'data-type="basket"';
    }
}
