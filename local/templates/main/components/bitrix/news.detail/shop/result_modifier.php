<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$arResult['PRICES'] = CCatalogProduct::GetOptimalPrice(
    $arResult['ID'],
    1,
    $USER->GetUserGroupArray(),
);

$arResult['IS_DELIVERY'] = in_array(getParentSect($arResult['IBLOCK_ID'], $arResult['IBLOCK_SECTION_ID']), $arParams['IS_DELIVERY']);

if ($arResult['PROPERTIES']['LENGTH']['VALUE']) {
    if ($arResult['DETAIL_TEXT']) {
        $arResult['DETAIL_TEXT'] = '<div class="product-body__txt" itemprop="description">' . $arResult['DETAIL_TEXT'] . '</div>';
    }
} else {
    foreach ($arParams['DESCRIPTION_BLOCK_PROPS'] as $data) {
        if (!$arResult['PROPERTIES'][$data['CODE']]['VALUE']) {
            continue;
        }

        if ($arParams['DESCR_BLOCK_CONTAINER_START'][$data['CODE']]) {
            $arResult['DETAIL_TEXT'] .= html_entity_decode($arParams['DESCR_BLOCK_CONTAINER_START'][$data['CODE']]);
        }

        include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/properties/' . $data['TEMPLATE'] . '.php');

        if ($arParams['DESCR_BLOCK_CONTAINER_END'][$data['CODE']]) {
            $arResult['DETAIL_TEXT'] .= html_entity_decode($arParams['DESCR_BLOCK_CONTAINER_END'][$data['CODE']]);
        }
    }
}

if ($arResult['PROPERTIES']['LENGTH']['VALUE'] && in_array($arResult['IBLOCK_SECTION_ID'], $arParams['DRAWING'])) {
    $arResult['DRAWING'] = true;
}

if ($arParams['BASKET_ITEMS'][$arResult['ID']]) {
    $arResult['BASKET']['CLASS'] = ' in-cart';
    $arResult['BASKET']['TEXT']['DESKTOP'] = 'В корзине';
    $arResult['BASKET']['ATTR'] = '';
} else {
    $arResult['BASKET']['TEXT']['DESKTOP'] = 'Добавить в корзину';
    $arResult['BASKET']['ATTR'] = 'data-type="basket"';
}

if ($arResult['PROPERTIES']['GALLERY']['VALUE']) {
    foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $index => $imgId) {
        $arResult['GALLERY'][] = [
            'BIG' => CFile::ResizeImageGet($imgId, $arParams['IMG_SIZE_BIG'])['src'],
            'SMALL' => CFile::ResizeImageGet($imgId, $arParams['IMG_SIZE_SMALL'])['src'],
        ];
    }
} else {
    $arResult['GALLERY'][] = [
        'BIG' => CATALOG_PLUG . '335x335.png',
        'SMALL' => CATALOG_PLUG . '335x335.png',
    ];
}

foreach ($arParams['FEATURE'] as $entity => $data) {
    foreach ($data['PROPS'] as $code => $propData) {
        if ($arResult['PROPERTIES'][$code]['VALUE']) {
            $arResult['IS_FEATURE'][$entity]++;
        }
    }
}

$arResult['SIMILAR'] = [
    'FIELD' => $arParams['SIMILAR'],
    'VALUE' => $arResult['PROPERTIES'][$arParams['SIMILAR']]['VALUE'],
];

$arResult['ITEM'] = [
    'ID' => $arResult['ID'],
    'IBLOCK_SECTION_ID' => $arResult['IBLOCK_SECTION_ID'],
    'DETAIL_PAGE_URL' => $arResult['DETAIL_PAGE_URL'],
    'NAME' => $arResult['NAME'],
    'PRICE' => $arResult['CATALOG_PRICE_1'],
    'CURRENCY' => $arResult['CATALOG_CURRENCY_1'],
    'PROPERTIES' => $arResult['PROPERTIES'],
    'IMG' => CFile::ResizeImageGet($arResult['PROPERTIES']['GALLERY']['VALUE'][0], $arParams['PREVIEW_PICTURE_SIZE'])['src'] ?: CATALOG_PLUG . '335x335.png',
];

$this->__component->SetResultCacheKeys(['SIMILAR', 'ITEM']);
