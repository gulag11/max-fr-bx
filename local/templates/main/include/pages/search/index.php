<?php

use Bitrix\Iblock\ElementTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$modals = [
    'add_to_cart',
];
?>
<section class="section--first">
    <div class="container">
        <div class="category-page-head">
            <div class="breadcrumbs" data-aos="fade-up">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#" tabindex="0">Главная</a></li>
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#" tabindex="0">Магазин</a></li>
                    <li class="breadcrumbs__item">
                        <div class="breadcrumbs__txt">Результаты поиска</div>
                    </li>
                </ul>
            </div>
        </div>
        <?php

        $APPLICATION->IncludeComponent(
            "bitrix:search.page",
            "base",
            Array(
                "PROPS" => [
                    "COUNTRY",
                    "GALLERY",
                    "MANUFACTURER",
                    "FORTRESS",
                    "VL",
                    "COLOR",
                    "SUGAR",
                    "LABEL",
                ],
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
                "BASKET_ITEMS" => $bItemsData,
                "IMG_SIZE" => [
                    "width" => 177,
                    "height" => 167,
                ],
                "FIELDS" => [
                    "IBLOCK_SECTION_ID",
                    "CATALOG_PRICE_1",
                ],
                "TAGS_SORT" => "NAME",
                "PATH_TO_USER_PROFILE" => "",
                "AJAX_MODE" => "N",
                "RESTART" => "N",
                "NO_WORD_LOGIC" => "N",
                "USE_LANGUAGE_GUESS" => "Y",
                "CHECK_DATES" => "Y",
                "DEFAULT_SORT" => "rank",
                "FILTER_NAME" => "searchFilter",
                "arrFILTER" => array("iblock_Content"),
                "arrFILTER_iblock_Content" => array(
                    0 => "7",
                ),
                "SHOW_WHERE" => "Y",
                "arrWHERE" => array(),
                "SHOW_WHEN" => "Y",
                "PAGE_RESULT_COUNT" => "4",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "0",
                "DISPLAY_TOP_PAGER" => "Y",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_TEMPLATE" => "",
            )
        );
        ?>
    </div>
</section>
<section class="section shop-section">
    <?php

    $ids = [
        427,
        1031,
        458,
        1022,
    ];

    $filter = [];

    foreach ($ids as $id) {
        $filter['ID'][] = ElementTable::getRow([
            'filter' => [
                'IBLOCK_SECTION_ID' => $id,
            ],
            'select' => [
                'ID',
            ],
        ])['ID'];
    }

    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "catalog_slider",
        [
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
            "BASKET_ITEMS" => $bItemsData,
            "IMG_SIZE" => [
                "width" => 177,
                "height" => 167,
            ],
            "favor" => $arFavor,
            "ENTITY_NAME" => "Рекомендуем",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "",
            "IBLOCK_ID" => IB_ID_SHOP,
            "NEWS_COUNT" => 4,
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "NAME",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "filter",
            "FIELD_CODE" => [
                'CATALOG_PRICE_1',
            ],
            "PROPERTY_CODE" => [
                'LABEL',
                'MANUFACTURER',
                'COUNTRY',
            ],
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "Y",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "86400",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "Y",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        ]
    );
    ?>
</section>
<section class="section--bottom">
    <?php

    $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "slider",
        [
            "IMG_SIZE" => [
                "width" => 300,
                "height" => 396,
            ],
            "ENTITY_NAME" => "Другие категории товаров",
            "FILTER_NAME" => "",
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
