<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$arResult['TEMPLATE'] = $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/search/' . ($arResult['SEARCH'] ? 'no_empty.php' : 'empty.php');
$arResult['COUNT'] = count($arResult['SEARCH']);

$filter = [];

if (!$arResult['SEARCH']) {
    return;
}

foreach ($arResult['SEARCH'] as $index => $item) {
    unset($arResult['SEARCH'][$index]);

    $filter['IBLOCK_ID'][] = $item['PARAM2'];
    $filter['ID'][] = $item['ITEM_ID'];
    $arResult['SEARCH'][$item['ITEM_ID']] = [
        'NAME' => $item['TITLE'],
        'DETAIL_PAGE_URL' => $item['URL'],
    ];

    if ($arParams['BASKET_ITEMS'][$item['ITEM_ID']]) {
        $arResult['SEARCH'][$item['ITEM_ID']]['BASKET']['CLASS'] = ' in-cart';
        $arResult['SEARCH'][$item['ITEM_ID']]['BASKET']['TEXT']['DESKTOP'] = 'В корзине';
        $arResult['SEARCH'][$item['ITEM_ID']]['BASKET']['TEXT']['MOBILE'] = 'В корзине';
        $arResult['SEARCH'][$item['ITEM_ID']]['BASKET']['ATTR'] = '';
    } else {
        $arResult['SEARCH'][$item['ITEM_ID']]['BASKET']['TEXT']['DESKTOP'] = 'Добавить в корзину';
        $arResult['SEARCH'][$item['ITEM_ID']]['BASKET']['TEXT']['MOBILE'] = 'В корзину';
        $arResult['SEARCH'][$item['ITEM_ID']]['BASKET']['ATTR'] = 'data-type="basket"';
    }
}

$rsData = CIBlockElement::GetList(
    [],
    $filter,
    false,
    false,
    array_merge(['ID', 'IBLOCK_ID'], $arParams['FIELDS'])
);

while ($arData = $rsData->GetNextElement()) {
    $fields = $arData->GetFields();
    $fields = [
        'ID' => $fields['ID'],
        'IBLOCK_SECTION_ID' => $fields['IBLOCK_SECTION_ID'],
        'PRICE' => (int) $fields['CATALOG_PRICE_1'],
        'CURRENCY' => CURRENCY_FORMAT[$fields['CATALOG_CURRENCY_1']],
    ];

    foreach ($arParams['PROPS'] as $code) {
        $property = $arData->GetProperty($code);

        switch ($property['PROPERTY_TYPE']) {
            case 'F':
                $property['VALUE'] = CFile::ResizeImageGet($property['VALUE'][0], $arParams['IMG_SIZE'])['src'] ?: CATALOG_PLUG . '335x335.png';
                break;
        }

        if (!$property['VALUE']) {
            continue;
        }

        $fields['PROPERTIES'][$property['CODE']] = [
            'NAME' => $property['NAME'],
            'VALUE' => $property['VALUE'],
        ];
    }

    foreach ($fields as $code => $val) {
        $arResult['SEARCH'][$fields['ID']][$code] = $val;
    }
}
