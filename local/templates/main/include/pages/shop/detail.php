<?php

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	exit;
}

$modals = [
	'map',
	'delivery_payment',
    'add_to_cart',
];

Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?apikey=9eaf2d45-34a5-4620-bac6-0482e9335845&amp;lang=ru_RU"></script>'); 
?>
<section class="section--first section--bottom">
	<div class="container" data-type="item">
		<?php
		include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php';


		$detailID = $APPLICATION->IncludeComponent(
			'bitrix:news.detail',
			'shop',
			[
                'IS_DELIVERY' => [
                    429,
                    458,
                ],
                'DESCR_BLOCK_CONTAINER_START' => [
                    'GASTRO' => '<div class="gastronomy-block">',
                ],
                'DESCR_BLOCK_CONTAINER_END' => [
                    'PRODUCTS' => '</div>',
                ],
                'DESCRIPTION_BLOCK_PROPS' => [
                    [
                        'CODE' => 'TASTING',
                        'TEMPLATE' => 'description',
                    ],
                    [
                        'CODE' => 'GASTRO',
                        'TEMPLATE' => 'description',
                    ],
                    [
                        'CODE' => 'PRODUCTS',
                        'TEMPLATE' => 'products',
                    ],
                    [
                        'CODE' => 'STYLE',
                        'TEMPLATE' => 'description',
                    ],
                ],
                'DRAWING' => [427, 428],
                'BASKET_ITEMS' => $bItemsData,
                'PREVIEW_PICTURE_SIZE' => [
                    'width' => 177,
                    'height' => 167,
                ],
                'IMG_SIZE_BIG' => [
                    'width' => 405,
                    'height' => 330,
                ],
                'IMG_SIZE_SMALL' => [
                    'width' => 43,
                    'height' => 52,
                ],
                'FEATURE' => [
                    'BASE' => [
                        'NAME' => 'Основные',
                        'PROPS' => [
                            'MANUFACTURER' => [
                                'TEMPLATE' => 'link',
                            ],
                            'COUNTRY' => [
                                'TEMPLATE' => 'svg',
                            ],
                            'FORTRESS' => [
                                'TEMPLATE' => 'point',
                            ],
                            'FORMAT' => [
                                'TEMPLATE' => 'base',
                                'TOOLTIP' => [
                                    'TEMPLATE' => 'base',
                                    'TEXT' => 'Формат — это определенное сочетание формы, длины и диаметра сигары',
                                ]
                            ],
                            'SMOK_TIME' => [
                                'TEMPLATE' => 'base',
                                'ADDITIONAL_NAME' => ', мин.',
                            ],
                            'THICKNESS' => [
                                'TEMPLATE' => 'base',
                                'ADDITIONAL_NAME' => ', мм',
                            ],
                            'COLOR' => [
                                'TEMPLATE' => 'base',
                            ],
                            'SUGAR' => [
                                'TEMPLATE' => 'base',
                            ],
                            'YEAR' => [
                                'TEMPLATE' => 'base',
                            ],
                            'VL' => [
                                'TEMPLATE' => 'base',
                            ],
                        ],
                    ],
                    'ADDITIONAL' => [
                        'NAME' => 'Состав',
                        'PROPS' => [
                            'WRAPPER' => [
                                'TEMPLATE' => 'base',
                            ],
                            'SHEET' => [
                                'TEMPLATE' => 'base',
                            ],
                            'FILLING' => [
                                'TEMPLATE' => 'base',
                            ],
                            'TWIST' => [
                                'TEMPLATE' => 'base',
                            ],
                            'CATEGORY' => [
                                'TEMPLATE' => 'base',
                            ],
                            'DECANTATION' => [
                                'TEMPLATE' => 'base',
                            ],
                            'POTENCIAL' => [
                                'TEMPLATE' => 'base',
                            ],
                            'TANK' => [
                                'TEMPLATE' => 'base',
                            ],
                            'APELLACION' => [
                                'TEMPLATE' => 'base',
                            ],
                            'WINE_TYPE' => [
                                'TEMPLATE' => 'base',
                            ],
                        ],
                    ],
                ],
                'SIMILAR' => 'MANUFACTURER',
				'UF_PAGE' => 'Страница - '.$host.''.$arPath.'',
				'ACTIVE_DATE_FORMAT' => 'j F Y',
				'ADD_ELEMENT_CHAIN' => 'Y',
				'ADD_SECTIONS_CHAIN' => 'Y',
				'AJAX_MODE' => 'N',
				'AJAX_OPTION_ADDITIONAL' => '',
				'AJAX_OPTION_HISTORY' => 'N',
				'AJAX_OPTION_JUMP' => 'N',
				'AJAX_OPTION_STYLE' => 'N',
				'BROWSER_TITLE' => '-',
				'CACHE_GROUPS' => 'N',
				'CACHE_TIME' => '36000000',
				'CACHE_TYPE' => 'N',
				'CHECK_DATES' => 'Y',
				'DETAIL_URL' => '',
				'DISPLAY_BOTTOM_PAGER' => 'Y',
				'DISPLAY_DATE' => 'Y',
				'DISPLAY_NAME' => 'Y',
				'DISPLAY_PICTURE' => 'N',
				'DISPLAY_PREVIEW_TEXT' => 'N',
				'DISPLAY_TOP_PAGER' => 'N',
				'ELEMENT_CODE' => $path['4'],
				'ELEMENT_ID' => '',
				'FIELD_CODE' => [
					'NAME',
					'DETAIL_PICTURE',
					'DETAIL_TEXT',
					'PREVIEW_PICTURE',
					'CATALOG_PRICE_1',
				],
				'FILE_404' => '',
				'IBLOCK_ID' => IB_ID_SHOP,
				'IBLOCK_TYPE' => 'content',
				'IBLOCK_URL' => '',
				'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
				'MESSAGE_404' => '',
				'META_DESCRIPTION' => '-',
				'META_KEYWORDS' => '-',
				'PAGER_BASE_LINK_ENABLE' => 'N',
				'PAGER_SHOW_ALL' => 'N',
				'PAGER_TEMPLATE' => '.default',
				'PAGER_TITLE' => 'Страница',
				'PROPERTY_CODE' => [
					'THICKNESS',
					'SMOK_TIME',
					'FORMAT',
					'FORTRESS',
					'COUNTRY',
					'MANUFACTURER',
					'ART',
					'LENGTH',
				],
				'SET_BROWSER_TITLE' => 'Y',
				'SET_CANONICAL_URL' => 'N',
				'SET_LAST_MODIFIED' => 'N',
				'SET_META_DESCRIPTION' => 'Y',
				'SET_META_KEYWORDS' => 'Y',
				'SET_STATUS_404' => 'Y',
				'SET_TITLE' => 'Y',
				'SHOW_404' => 'Y',
				'STRICT_SECTION_CHECK' => 'N',
				'USE_PERMISSIONS' => 'N',
				'USE_SHARE' => 'N'
			]
		); ?>
	</div>
</section>
<?php if ($GLOBALS['SIMILAR']) : ?>
	<section class="section--bottom shop-section">
		<?php

		$similarFilter = [
			'PROPERTY_' . $GLOBALS['SIMILAR']['FIELD'] => $GLOBALS['SIMILAR']['VALUE'],
		];

        $sectPropsSelect = [
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
        ];

		$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"catalog_slider",
			[
                "CARD_PROPS" => $sectPropsSelect['CARD_PROPS'],
                "SECT_SELECT_PROPS" => $sectPropsSelect['SECT_SELECT_PROPS'],
                "BASKET_ITEMS" => $bItemsData,
				"IMG_SIZE" => [
					"width" => 177,
					"height" => 167,
				],
				"favor" => $arFavor,
				"ENTITY_NAME" => "Другие товары " . $GLOBALS['SIMILAR']['VALUE'],
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
				"FILTER_NAME" => "similarFilter",
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
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_LAST_MODIFIED" => "Y",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
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
<?php endif; ?>
<?php

if ($_SESSION['VIEWED']) :
    $arParams = [
        'CARD_PROPS' => $sectPropsSelect['CARD_PROPS'],
        'SECT_SELECT_PROPS' => $sectPropsSelect['SECT_SELECT_PROPS'],
    ];
    require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/controller/viewed/basket.php');
?>
	<section class="section--bottom shop-section">
		<?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/slider/viewed.php'); ?>
	</section>
<?php endif; ?>
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
		'SET_STATUS_404' => 'N',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'N',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'ASC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'info_list'
	],
	false
);
