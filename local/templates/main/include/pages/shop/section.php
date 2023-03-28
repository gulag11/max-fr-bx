<?php

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?apikey=9eaf2d45-34a5-4620-bac6-0482e9335845&amp;lang=ru_RU"></script>');

$ajax = $request->getQuery('ajax');
$filterRequestJSON = $request->getQuery('filter');
$sortRequest = $request->getQuery('sort');
$searchRequest = $request->getQuery('q');
$filter = [];
$phpFilter = false;

if ($filterRequestJSON) {
    if (is_array($filterRequestJSON)) {
        $filterRequest = $filterRequestJSON;
    } else {
        $filterRequest = json_decode($filterRequestJSON, true);
    }

    if ($filterRequest) {
        $phpFilter = true;
    }

    foreach ($filterRequest['FORTRESS'] as $key => $data) {
        $data = json_decode($data);
        if (!is_array($data)) {
            break;
        }

        unset($filterRequest['FORTRESS'][$key]);
        foreach ($data as $val) {
            $filterRequest['FORTRESS'][] = $val;
        }
    }

    $operators = [
        'PRICE' => '><',
        'THICKNESS' => '><',
        'LENGTH' => '><',
    ];

    $customFilterField = [
        'PRICE' => 'CATALOG_PRICE_1',
    ];

    foreach ($filterRequest as $code => $value) {
        $filter[$operators[$code] . ($customFilterField[$code] ?: 'PROPERTY_' . $code)] = $value;
    }
}

$sort = [
    'FIELD' => 'PROPERTY_FORTRESS',
    'BY' => 'DESC',
];

if ($sortRequest) {
    $sort['FIELD'] = $sortRequest['field'];
    $sort['BY'] = $sortRequest['by'];
}
?>
<section class="section--first section--bottom">
    <div class="container" data-container="base">
        <div class="category-page-head" data-category-page>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
        </div>
        <div class="category-top" data-aos="fade-up">
            <div class="category-top__line">
                <div class="category-title-block">
                    <h1 class="category-title h2"><?= $APPLICATION->ShowTitle('h1') ?></h1>
                    <div class="category-items-count" data-type="replace-elem" data-field="count-title"><?= $APPLICATION->ShowViewContent('catalog_count'); ?></div>
                </div>
                <form class="category-search only-desktop" action="/search/" method="get" data-search-block>
                    <label class="category-search__label">
                        <input class="category-search__input" type="search" name="q" placeholder="Поиск по каталогу">
                    </label>
                    <button class="category-search__button" type="submit">
                        <svg class="search-icon" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.3807 13L16.1111 17M2.95262 2.95262C5.55612 0.349126 9.77722 0.349126 12.3807 2.95262C14.9842 5.55612 14.9842 9.77722 12.3807 12.3807C9.77722 14.9842 5.55612 14.9842 2.95262 12.3807C0.349126 9.77722 0.349126 5.55612 2.95262 2.95262Z" stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <?php

            $APPLICATION->ShowViewContent('collections');

            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "buttons",
                [
                    "CUSTOM_SECTION_SORT" => [
                        "SORT" => "ASC",
                    ],
                    "FILTER_NAME" => "",
                    "SHOW_PARENT_NAME" => "Y",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => 7,
                    "SECTION_ID" => "",
                    "SECTION_CODE" => $path[2],
                    "SECTION_URL" => "",
                    "COUNT_ELEMENTS" => "Y",
                    "TOP_DEPTH" => "1",
                    "SECTION_FIELDS" => "",
                    "SECTION_USER_FIELDS" => "",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "Y"
                ]
            );

            if ($searchRequest) {
                $obj = new \CSearch;
                $obj->Search(
                    [
                        'MODULE_ID' => 'iblock',
                        'QUERY' => $searchRequest,
                        'PARAM1' => 'Content',
                        'PARAM2' => IB_ID_SHOP,
                        'PARAMS' => [
                            'iblock_section' => $GLOBALS['SECTION']['ID'],
                        ],
                    ]
                );

                while ($arData = $obj->Fetch()) {
                    $filter['ID'][] = $arData['ITEM_ID'];
                }
            }

            if (in_array($ajax, ['filter', 'sort'])) {
                $APPLICATION->RestartBuffer();
            }

            $APPLICATION->IncludeComponent(
                'bitrix:news.list',
                'shop_section',
                [
                    'PHP_FILTER' => $phpFilter,
                    'CARD_PROPS' => [
                        'CIGARETTES' => [
                            [
                                'CODE' => 'FORTRESS',
                                'TEMPLATE' => 'sigar_container',
                            ],
                        ],
                        'WINE' => [
                            [
                                'CODE' => 'COLOR',
                            ],
                            [
                                'CODE' => 'SUGAR',
                            ],
                            [
                                'CODE' => 'VL',
                            ],
                        ],
                        'ALCO' => [
                            [
                                'CODE' => 'VL',
                            ],
                        ],
                    ],
                    'SECT_SELECT_PROPS' => [
                        427 => 'CIGARETTES',
                        428 => 'CIGARETTES',
                        569 => 'CIGARETTES',
                        1031 => 'WINE',
                        1032 => 'WINE',
                        402 => 'WINE',
                        1022 => 'ALCO',
                        1023 => 'ALCO',
                        1024 => 'ALCO',
                        1025 => 'ALCO',
                        1026 => 'ALCO',
                        1027 => 'ALCO',
                        357 => 'ALCO',
                        1028 => 'ALCO',
                        1029 => 'ALCO',
                        1030 => 'ALCO',
                    ],
                    'FIELDS_ORDER' => [
                        [
                            'NAME' => 'Рекомендуем',
                            'FIELD' => 'propertysort_LABEL',
                            'BY' => 'DESC',
                        ],
                        [
                            'NAME' => 'Новинки',
                            'FIELD' => 'PROPERTY_LABEL',
                            'BY' => 'DESC',
                        ],
                        [
                            'NAME' => 'По возрастанию цены',
                            'FIELD' => 'CATALOG_PRICE_1',
                            'BY' => 'ASC',
                        ],
                        [
                            'NAME' => 'По убыванию цены',
                            'FIELD' => 'CATALOG_PRICE_1',
                            'BY' => 'DESC',
                        ],
                    ],
                    'BASKET_ITEMS' => $bItemsData,
                    'MODALS' => [
                        'ADD_TO_CART' => 'add_to_cart',
                    ],
                    'DEFAULT_FILTER' => $filter,
                    'IMG_SIZE' => [
                        'width' => 148,
                        'height' => 164,
                    ],
                    'AJAX' => $ajax,
                    'favor' => $arFavor,
                    'ACTIVE_DATE_FORMAT' => 'd F Y',
                    'ADD_SECTIONS_CHAIN' => 'Y',
                    'AJAX_MODE' => 'N',
                    'AJAX_OPTION_ADDITIONAL' => '',
                    'AJAX_OPTION_HISTORY' => 'N',
                    'AJAX_OPTION_JUMP' => 'N',
                    'AJAX_OPTION_STYLE' => 'N',
                    'CACHE_FILTER' => 'N',
                    'CACHE_GROUPS' => 'N',
                    'CACHE_TIME' => '36000000',
                    'CACHE_TYPE' => 'A',
                    'CHECK_DATES' => 'N',
                    'DETAIL_URL' => '',
                    'DISPLAY_BOTTOM_PAGER' => 'Y',
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_NAME' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'N',
                    'DISPLAY_TOP_PAGER' => 'N',
                    'FIELD_CODE' => [
                        'NAME',
                        'PREVIEW_PICTURE',
                        'DESCRIPTION',
                    ],
                    'FILE_404' => '',
                    'FILTER_NAME' => 'filter',
                    'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                    'IBLOCK_ID' => IB_ID_SHOP,
                    'IBLOCK_TYPE' => 'content',
                    'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                    'INCLUDE_SUBSECTIONS' => 'Y',
                    'MESSAGE_404' => '',
                    'NEWS_COUNT' => 12,
                    'PAGER_BASE_LINK_ENABLE' => 'N',
                    'PAGER_DESC_NUMBERING' => 'N',
                    'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                    'PAGER_SHOW_ALL' => 'N',
                    'PAGER_SHOW_ALWAYS' => 'N',
                    'PAGER_TEMPLATE' => 'show_more',
                    'PAGER_TITLE' => '',
                    'PARENT_SECTION' => '',
                    'PARENT_SECTION_CODE' => $path[2],
                    'PREVIEW_TRUNCATE_LEN' => '',
                    'PROPERTY_CODE' => [
                        'MANUFACTURER',
                        'COUNTRY',
                    ],
                    'SET_BROWSER_TITLE' => 'Y',
                    'SET_LAST_MODIFIED' => 'N',
                    'SET_META_DESCRIPTION' => 'Y',
                    'SET_META_KEYWORDS' => 'Y',
                    'SET_STATUS_404' => 'Y',
                    'SET_TITLE' => 'N',
                    'SHOW_404' => 'Y',
                    'SORT_BY1' => $sort['FIELD'],
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER1' => $sort['BY'],
                    'SORT_ORDER2' => 'ASC',
                    'STRICT_SECTION_CHECK' => 'N',
                    'COMPONENT_TEMPLATE' => 'shop_section',
                    'ALL_FILTERS' => 5,
                    'FILTERS' => [
                        'PRICE' => [
                            'NAME' => 'Цена',
                            'TEMPLATE' => 'range',
                            'SIDEBAR_TEMPLATE' => 'range',
                            'COMPARE_ENTITY' => 'range',
                        ],
                        'COUNTRY' => [
                            'NAME' => 'Страна',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'MANUFACTURER' => [
                            'NAME' => 'Производитель',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'FORTRESS' => [
                            'NAME' => 'Крепость',
                            'TEMPLATE' => 'points',
                            'SIDEBAR_TEMPLATE' => 'points',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'SMOK_TIME' => [
                            'NAME' => 'Время курения',
                            'TEMPLATE' => 'checkbox',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                            'SORT' => 'ASC',
                        ],
                        'FORMAT' => [
                            'NAME' => 'Формат',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'LENGTH' => [
                            'NAME' => 'Длина',
                            'TEMPLATE' => 'range',
                            'SIDEBAR_TEMPLATE' => 'range',
                            'COMPARE_ENTITY' => 'range',
                        ],
                        'THICKNESS' => [
                            'NAME' => 'Толщина',
                            'TEMPLATE' => 'range',
                            'SIDEBAR_TEMPLATE' => 'range',
                            'COMPARE_ENTITY' => 'range',
                        ],
                        'WINE_TYPE' => [
                            'NAME' => 'Тип вина',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'VL' => [
                            'NAME' => 'Объем',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'ALCO_STRENGTH' => [
                            'NAME' => 'Крепкость алкоголя',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'TANK' => [
                            'NAME' => 'Выдержан в емкости',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'TASTING' => [
                            'NAME' => 'Дегустационные характеристики',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'GASTRO' => [
                            'NAME' => 'Гастрономия',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'METHOD' => [
                            'NAME' => 'Способ производства',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'DECANTATION' => [
                            'NAME' => 'Декантация',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'APELLACION' => [
                            'NAME' => 'Аппелласьон',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'VINTAGE' => [
                            'NAME' => 'Винтаж',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'CATEGORY' => [
                            'NAME' => 'Категория',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'KOSHER' => [
                            'NAME' => 'Кошерность',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'STYLE' => [
                            'NAME' => 'Стилистика',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'POTENCIAL' => [
                            'NAME' => 'Потенциал хранения',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'SUGAR' => [
                            'NAME' => 'Содержание сахара',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'COLOR' => [
                            'NAME' => 'Цвет',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'GRAPE' => [
                            'NAME' => 'Виноград',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'YEAR' => [
                            'NAME' => 'Год',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'EXTRACT' => [
                            'NAME' => 'Выдержка',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'SERIES' => [
                            'NAME' => 'Серия',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'REGION' => [
                            'NAME' => 'Регион',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                        'TYPE' => [
                            'NAME' => 'Тип',
                            'TEMPLATE' => 'checkbox_search',
                            'SIDEBAR_TEMPLATE' => 'button_list',
                            'COMPARE_ENTITY' => 'items',
                        ],
                    ],
                ],
                false
            );

            if (in_array($ajax, ['filter', 'sort'])) {
                $APPLICATION->ShowViewContent('modal_filter_shop');
                exit;
            }
            ?>
        </div>
</section>
<section>
    <?php

    $filter = [
        '!CODE' => $path[2],
    ];

    $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "slider",
        [
            "FILTER_NAME" => "filter",
            "SHOW_PARENT_NAME" => "Y",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => IB_ID_SHOP,
            "SECTION_ID" => "",
            "SECTION_CODE" => "",
            "SECTION_URL" => "",
            "COUNT_ELEMENTS" => "Y",
            "TOP_DEPTH" => "1",
            "SECTION_FIELDS" => "",
            "SECTION_USER_FIELDS" => "",
            "ADD_SECTIONS_CHAIN" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_GROUPS" => "Y"
        ]
    );
    ?>
</section>
<section class="section shop-section">
    <?php

    if ($_SESSION['VIEWED']) {
        require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/slider/viewed.php');
    }
    ?>
</section>
<?php

$filter = [
    '!IBLOCK_SECTION_ID' => 3,
];

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'info_list',
    [
        'ajax' => $ajax,
        'sec_class' => 'section--bottom',
        'ACTIVE_DATE_FORMAT' => 'd F Y',
        'ADD_SECTIONS_CHAIN' => 'Y',
        'AJAX_MODE' => 'N',
        'AJAX_OPTION_ADDITIONAL' => '',
        'AJAX_OPTION_HISTORY' => 'N',
        'AJAX_OPTION_JUMP' => 'N',
        'AJAX_OPTION_STYLE' => 'N',
        'CACHE_FILTER' => 'N',
        'CACHE_GROUPS' => 'N',
        'CACHE_TIME' => '36000000',
        'CACHE_TYPE' => 'N',
        'CHECK_DATES' => 'N',
        'DETAIL_URL' => '',
        'DISPLAY_BOTTOM_PAGER' => 'Y',
        'DISPLAY_DATE' => 'Y',
        'DISPLAY_NAME' => 'Y',
        'DISPLAY_PICTURE' => 'Y',
        'DISPLAY_PREVIEW_TEXT' => 'N',
        'DISPLAY_TOP_PAGER' => 'N',
        'FIELD_CODE' => [
            'NAME',
            'DETAIL_PICTURE',
            'DISPLAY_ACTIVE_FROM'
        ],
        'FILE_404' => '',
        'FILTER_NAME' => 'filter',
        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
        'IBLOCK_ID' => IB_ID_INFO,
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'N',
        'MESSAGE_404' => '',
        'NEWS_COUNT' => '3',
        'PAGER_BASE_LINK_ENABLE' => 'N',
        'PAGER_DESC_NUMBERING' => 'N',
        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
        'PAGER_SHOW_ALL' => 'N',
        'PAGER_SHOW_ALWAYS' => 'N',
        'PAGER_TEMPLATE' => '.default',
        'PAGER_TITLE' => 'Новости',
        'PARENT_SECTION' => '',
        'PARENT_SECTION_CODE' => '',
        'PREVIEW_TRUNCATE_LEN' => '',
        'PROPERTY_CODE' => ['read_time'],
        'SET_BROWSER_TITLE' => 'N',
        'SET_LAST_MODIFIED' => 'N',
        'SET_META_DESCRIPTION' => 'N',
        'SET_META_KEYWORDS' => 'N',
        'SET_STATUS_404' => 'Y',
        'SET_TITLE' => 'N',
        'SHOW_404' => 'Y',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER1' => 'DESC',
        'SORT_ORDER2' => 'ASC',
        'STRICT_SECTION_CHECK' => 'N',
        'COMPONENT_TEMPLATE' => 'info_list'
    ],
    false
);
