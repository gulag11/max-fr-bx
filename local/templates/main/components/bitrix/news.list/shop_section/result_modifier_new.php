<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$arResult['FILTERS'] = $arParams['FILTERS'];
$arResult['COUNT'] = $arResult['NAV_RESULT']->NavRecordCount;
$arResult['ENDING'] = ending($arResult['NAV_RESULT']->NavRecordCount, 'товар', [0 => 'ов', 2 => 'а', 3 => 'а', 4 => 'а', 'more' => 'ов'], [5, 9]);

foreach ($arResult['ITEMS'] as $index => $item) {
    $arResult['ITEMS'][$index]['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
        $item['PROPERTIES']['GALLERY']['VALUE'][0],
        $arParams['IMG_SIZE'],
        BX_RESIZE_IMAGE_PROPORTIONAL
    )['src'] ?: CATALOG_PLUG . '335x335.png';

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

    $arResult['ITEMS'][$index]['PRICES'] = CCatalogProduct::GetOptimalPrice(
        $item['ID'],
        1,
        $USER->GetUserGroupArray(),
    );
}

$arResult['CUR_SECT'] = $arResult['SECTION']['PATH'][array_key_last($arResult['SECTION']['PATH'])];

$props = CIBlockSection::GetList(
    [],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ID' => $arResult['CUR_SECT']['ID'],
    ],
    false,
    [
        'ID',
        'UF_SELECT_FILTERS',
    ]
)->Fetch()['UF_SELECT_FILTERS'];

$rsData = getEntityHlTable(COLLECTIONS_HL_ID)::getList([
    'filter' => [
        'UF_SECT' => $arResult['CUR_SECT']['ID'],
    ],
    'select' => [
        'UF_NAME',
        'UF_CONDITIONS',
        'UF_FIELD',
    ],
]);

while ($arData = $rsData->fetch()) {
    if ($arData['UF_FIELD']) {
        $arData['DATA'] = [
            $arData['UF_FIELD'] => $arData['UF_CONDITIONS'],
        ];
    } else {
        foreach ($arData['UF_CONDITIONS'] as $index => $condition) {
            unset($arData['UF_CONDITIONS'][$index]);
            $arData['UF_CONDITIONS'][$condition] = $condition;
        }
    }

    $arResult['COLLECTIONS'][] = $arData;
}

$filter = $arParams['PHP_FILTER'] ? [] : $arParams['DEFAULT_FILTER'];
$filter['IBLOCK_ID'] = $arParams['IBLOCK_ID'];
$filter['ACTIVE'] = 'Y';

if ($arResult['SECTION']) {
    $filter['SECTION_ID'] = $arResult['CUR_SECT']['ID'];
    $filter['INCLUDE_SUBSECTIONS'] = 'Y';
}

$rsData = CIBlockElement::GetList(
    [],
    $filter,
    false,
    false,
    [
        'IBLOCK_ID',
        'ID',
        'CATALOG_PRICE_1',
    ]
);

if ($arParams['PHP_FILTER']) {
    $filterable = [
        'LENGTH', 'THICKNESS'
    ];

    while ($arData = $rsData->GetNextElement()) {
        $fields = $arData->GetFields();
        $itemProps = [
            '><CATALOG_PRICE_1' => $fields['CATALOG_PRICE_1'],
        ];

        foreach ($props as $code) {
            $prop = $arData->GetProperty($code);

            if (!$prop['VALUE']) {
                continue;
            }

            $itemProps[$prop['CODE']] = $prop['VALUE'];

            if (!$arResult['COLLECTIONS']) {
                continue;
            }

            foreach ($arResult['COLLECTIONS'] as $index => $collection) {
                if ($collection['UF_FIELD']) {
                    continue;
                }

                if (!$collection['UF_CONDITIONS'][$prop['VALUE']]) {
                    continue;
                }

                $arResult['COLLECTIONS'][$index]['DATA'][$prop['CODE']][$prop['VALUE']] = $prop['VALUE'];
            }
        }

        if (!$itemProps) {
            continue;
        }

        $check = false;

        foreach ($arParams['DEFAULT_FILTER'] as $field => $values) {
            if ($field[0] . $field[1] === '><') {
                if ($itemProps[$field] > $values[0] && $itemProps[$field] < $values[1]) {
                    $check = true;
                } else {
                    $check = false;
                }
            } else {
                if (in_array($itemProps[mb_substr($field, 9)], $values)) {
                    $check = true;
                } else {
                    $check = false;
                    break;
                }
            }
        }

        if ($check) {
            $arResult['FILTERS']['PRICE']['VALUES'][] = [
                'VALUE' => (int)$fields['CATALOG_PRICE_1'],
                'COUNT' => 1,
            ];

            foreach ($itemProps as $code => $propVal) {
                if (is_array($arResult['FILTERS'][$code]['VALUES'])) {
                    if (!in_array($propVal, array_column($arResult['FILTERS'][$code]['VALUES'], 'VALUE'))) {
                        $arResult['FILTERS'][$code]['VALUES'][] = [
                            'VALUE' => $propVal,
                            'COUNT' => 1,
                        ];
                    } else {
                        $valueKey = array_search($propVal, array_column($arResult['FILTERS'][$code]['VALUES'], 'VALUE'));
                        $arResult['FILTERS'][$code]['VALUES'][$valueKey]['COUNT']++;

                        if ($arResult['FILTERS'][$code]['VALUES'][$valueKey]['DISABLE']) {
                            unset($arResult['FILTERS'][$code]['VALUES'][$valueKey]['DISABLE']);
                        }
                    }
                }
            }
        } else {
            foreach ($itemProps as $code => $propVal) {
                if (in_array($code, $filterable)) {
                    continue;
                }

                if (is_array($arResult['FILTERS'][$code]['VALUES'])) {
                    if (!in_array($propVal, array_column($arResult['FILTERS'][$code]['VALUES'], 'VALUE'))) {
                        $arResult['FILTERS'][$code]['VALUES'][] = [
                            'DISABLE' => ' style="opacity: 0.3; pointer-events: none;"',
                            'VALUE' => $propVal,
                            'COUNT' => 0,
                        ];
                    }
                }
            }
        }
    }
} else {
    while ($arData = $rsData->GetNextElement()) {
        $fields = $arData->GetFields();

        if (!$arResult['FILTERS']['PRICE']['VALUES']) {
            $arResult['FILTERS']['PRICE']['VALUES'][] = [
                'VALUE' => (int)$fields['CATALOG_PRICE_1'],
                'COUNT' => 1,
            ];
        } else {
            if (!in_array((int)$fields['CATALOG_PRICE_1'], array_column($arResult['FILTERS']['PRICE']['VALUES'], 'VALUE'))) {
                $arResult['FILTERS']['PRICE']['VALUES'][] = [
                    'VALUE' => (int)$fields['CATALOG_PRICE_1'],
                    'COUNT' => 1,
                ];
            }
        }

        foreach ($props as $code) {
            $prop = $arData->GetProperty($code);

            if (!$prop['VALUE'] || !$arResult['FILTERS'][$prop['CODE']]) {
                continue;
            }
            if (!$arResult['FILTERS'][$prop['CODE']]['VALUES']) {
                $arResult['FILTERS'][$prop['CODE']]['VALUES'][] = [
                    'VALUE' => $prop['VALUE'],
                    'COUNT' => 1,
                ];
            } else {
                if (!in_array($prop['VALUE'], array_column($arResult['FILTERS'][$prop['CODE']]['VALUES'], 'VALUE'))) {
                    $arResult['FILTERS'][$prop['CODE']]['VALUES'][] = [
                        'VALUE' => $prop['VALUE'],
                        'COUNT' => 1,
                    ];
                } else {
                    $arResult['FILTERS'][$prop['CODE']]['VALUES'][array_search($prop['VALUE'], array_column($arResult['FILTERS'][$prop['CODE']]['VALUES'], 'VALUE'))]['COUNT']++;
                }
            }

            if (!$arResult['COLLECTIONS']) {
                continue;
            }

            foreach ($arResult['COLLECTIONS'] as $index => $collection) {
                if ($collection['UF_FIELD']) {
                    continue;
                }

                if (!$collection['UF_CONDITIONS'][$prop['VALUE']]) {
                    continue;
                }

                $arResult['COLLECTIONS'][$index]['DATA'][$prop['CODE']][$prop['VALUE']] = $prop['VALUE'];
            }
        }
    }
}

foreach ($arResult['COLLECTIONS'] as $index => $data) {
    foreach ($data['DATA'] as $field => $val) {
        if ($field === 'FORTRESS') {
            $arResult['COLLECTIONS'][$index]['CUSTOM_FIELD'] = 'Крепость: ' . (int) $val . ' из 5';
            break;
        }
    }
}

foreach ($arResult['FILTERS'] as $code => $data) {
    if (!$data['VALUES']) {
        unset($arResult['FILTERS'][$code]);

        continue;
    }

    $sort = $arResult['FILTERS'][$code]['SORT'];

    if (!$sort) {
        continue;
    }

    usort($arResult['FILTERS'][$code]['VALUES'], function ($a, $b) use ($sort) {
        if ($sort === 'ASC') {
            return $a['VALUE'] - $b['VALUE'];
        } else {
            return $b['VALUE'] - $a['VALUE'];
        }
    });
}

if ($arResult['FILTERS']['MANUFACTURER']) {
    $arr = [];

    foreach ($arResult['FILTERS']['MANUFACTURER']['VALUES'] as $data) {
        $arr[] = $data['VALUE'];
    }

    natcasesort($arr);

    foreach ($arr as $key => $value) {
        $data = $arResult['FILTERS']['MANUFACTURER']['VALUES'][$key];
        unset($arResult['FILTERS']['MANUFACTURER']['VALUES'][$key]);
        $arResult['FILTERS']['MANUFACTURER']['VALUES'][] = $data;
    }
}

if ($arResult['FILTERS']['FORTRESS']) {
    $filterResult = [
        'FORTRESS' => [],
    ];

    foreach ($arResult['FILTERS']['FORTRESS']['VALUES'] as $index => $val) {
        unset($arResult['FILTERS']['FORTRESS']['VALUES'][$index]);

        $filterResult['FORTRESS'][(int)$val['VALUE']]['VALUE'][] = $val['VALUE'];
        $filterResult['FORTRESS'][(int)$val['VALUE']]['COUNT'] += $val['COUNT'];

        if (!$val['DISABLE']) {
            $filterResult['FORTRESS'][(int)$val['VALUE']]['DISABLE'] = '';
        }

        if ($filterResult['FORTRESS'][(int)$val['VALUE']]['DISABLE'] !== '') {
            $filterResult['FORTRESS'][(int)$val['VALUE']]['DISABLE'] = $val['DISABLE'];
        }
    }

    krsort($filterResult['FORTRESS']);
    $arResult['FILTERS']['FORTRESS']['VALUES'] = $filterResult['FORTRESS'];
}

foreach (['LENGTH', 'THICKNESS', 'PRICE'] as $code) {
    if ($arResult['FILTERS'][$code]['VALUES']) {
        $arResult['FILTERS'][$code]['VALUES'] = getDataRange($arResult['FILTERS'][$code]['VALUES']);
    }
}

$arResult['ALL_FILTERS'] = $arParams['AJAX'] || (count($arResult['FILTERS']) > $arParams['ALL_FILTERS']);
$arResult['DROP_MODAL_CLASS'] = [
    'data-price-filter',
    'data-producer-filter',
    'data-country-filter',
    'data-strong-filter',
    'data-duration-filter',
    'data-format-filter',
];

$arResult['FIELDS_ORDER'] = $arParams['FIELDS_ORDER'];

$this->__component->SetResultCacheKeys(['SECTION']);
