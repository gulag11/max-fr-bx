<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$countCurSec = count($arResult['ELEMENTS']);

$arResult['count_cur'] = $countCurSec;
if ($countCurSec == 1) {
    $arResult['count_cur'] .= ' товар';
} elseif ($countCurSec < 5) {
    $arResult['count_cur'] .= ' товара';
} else {
    $arResult['count_cur'] .= ' товаров';
}

$filter = [];
$filter = [
    'IBLOCK_ID' => IB_ID_SHOP,
    'ACTIVE' => 'Y',
    'SECTION_ID' => $arResult['SECTION']['PATH'][0]['ID'],
];

$select = [];
$select = [
    'ID',
    'NAME',
    'SECTION_PAGE_URL',
];

$SectList = CIBlockSection::GetList([], $filter, 'CNT_ACTIVE', $select);
while ($SectListGet = $SectList->GetNext()) {
    $arResult['sections'][$SectListGet['ID']] = $SectListGet;
}

$arFilterType = [
    'cigars' => [
        'manufacturer',
        'country',
        'strength',
        'smoking_time',
        'format',
        'cover_sheet',
        'binding_sheet',
        'filling',
        'joint',
        'cigar_size',
        'diameter',
    ],
    'wine' => [
        'manufacturer',
        'country',
        'region',
        'color',
        'sugar',
    ],
];

$parentSecCode = $arParams['PARENT_SECTION_CODE'];

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

$arFilter = [
    'price' => [
        'name' => 'Цена',
        'value' => [
            'min' => 1000000000,
            'max' => 0,
        ],
        'type' => 'count',
        'filter_attr' => 'data-price-filter',
    ],
    'manufacturer' => [
        'value' => [],
        'type' => 'list',
        'filter_attr' => 'data-producer-filter',
        'search' => 'Поиск по производителю',
        'placeholder' => 'Введите производителя',
    ],
    'country' => [
        'value' => [],
        'type' => 'list',
        'filter_attr' => 'data-country-filter',
        'search' => 'Поиск по стране',
        'placeholder' => 'Введите страну',
    ],
    'strength' => [
        'value' => [],
        'type' => 'dot',
        'filter_attr' => 'data-strong-filter',
    ],
    'smoking_time' => [
        'value' => [],
        'type' => 'list',
        'filter_attr' => 'data-duration-filter',
        'search' => 'Поиск по времени курения',
        'placeholder' => 'Введите время курения',
    ],
    'format' => [
        'value' => [],
        'type' => 'list',
        'filter_attr' => 'data-format-filter',
        'search' => 'Поиск по формату',
        'placeholder' => 'Введите формат',
    ],
    'cover_sheet' => [
        'value' => [],
        'type' => 'list',
    ],
    'binding_sheet' => [
        'value' => [],
        'type' => 'list',
    ],
    'filling' => [
        'value' => [],
        'type' => 'list',
    ],
    'joint' => [
        'value' => [],
        'type' => 'list',
    ],
    'cigar_size' => [
        'value' => [],
        'type' => 'list',
    ],
    'diameter' => [
        'value' => [],
        'type' => 'list',
    ],
    'region' => [
        'value' => [],
        'type' => 'list',
        'filter_attr' => 'data-strong-filter',
        'search' => 'Поиск по региону',
        'placeholder' => 'Введите регион',
    ],
    'color' => [
        'value' => [],
        'type' => 'list',
        'filter_attr' => 'data-duration-filter',
        'search' => 'Поиск по цвету',
        'placeholder' => 'Введите цвет',
    ],
    'sugar' => [
        'value' => [],
        'type' => 'list',
        'filter_attr' => 'data-format-filter',
        'search' => 'Поиск по сахару',
        'placeholder' => 'Введите сахар',
    ],
];


$rsData = CIBlockElement::GetList([], $filter, false, [], $select);
while ($arData = $rsData->GetNextElement()) {
    $field = $arData->GetFields();
    $props = $arData->GetProperties();

    $arElements[$field['ID']]['field'] = $field;
    $arElements[$field['ID']]['props'] = $props;

    $arPrice = explode('.', $field['CATALOG_PRICE_1']);

    if ($arFilter['price']['value']['min'] > $arPrice[0]) {
        $arFilter['price']['value']['min'] = $arPrice[0];
    }
    if ($arFilter['price']['value']['max'] < $arPrice[0]) {
        $arFilter['price']['value']['max'] = $arPrice[0];
    }


    foreach ($arFilterType[$parentSecCode] as $key => $codeProp) {
        if ($props[$codeProp]['VALUE']) {
            if ($codeProp == 'manufacturer') {
                $arFilter['manufacturer']['name'] = $props['manufacturer']['NAME'];
                $arFilter['manufacturer']['value'][] = $props['manufacturer']['DESCRIPTION'];
            } else {
                $arFilter[$codeProp]['name'] = $props[$codeProp]['NAME'];
                $arFilter[$codeProp]['value'][] = $props[$codeProp]['VALUE'];
            }

            if ($props[$codeProp]['HINT']) {
                $arFilter[$codeProp]['hint'] = $props[$codeProp]['HINT'];
            }
        }
    }
}

foreach ($arFilter as $code => $arFil) {
    if (empty($arFil['value'])) {
        unset($arFilter[$code]);
    }
}

foreach ($arFilter as $code => $arFil) {
    $arFilter[$code]['value_f'] = array_count_values($arFil['value']);
}

$arResult['filter'] = $arFilter;

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
        $item['PROPERTIES']['GALLERY']['VALUE'][0],
        $arParams['IMG_SIZE']
    )['src'] ?: CATALOG_PLUG . '335x335.png';

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

$countF = $arParams['FAVOR_COUNT_FULL'];

switch ($countF) {
    case $countF < 2:
        $arParams['FAVOR_COUNT_FULL'] .= ' товар';
        break;
    case (($countF < 5) && ($countF > 1)):
        $arParams['FAVOR_COUNT_FULL'] .= ' товара';
        break;
    case $countF > 4:
        $arParams['FAVOR_COUNT_FULL'] .= ' товаров';
        break;
}
