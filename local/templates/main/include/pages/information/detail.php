<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} ?>

<section class="section--first">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php';

		$infoId = $APPLICATION->IncludeComponent(
			'bitrix:news.detail',
			'info',
			[
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
				'FIELD_CODE' => ['NAME', 'DETAIL_PICTURE', 'DETAIL_TEXT'],
				'FILE_404' => '',
				'IBLOCK_ID' => IB_ID_INFO,
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
					'read_time',
				],
				'SET_BROWSER_TITLE' => 'Y',
				'SET_CANONICAL_URL' => 'N',
				'SET_LAST_MODIFIED' => 'N',
				'SET_META_DESCRIPTION' => 'N',
				'SET_META_KEYWORDS' => 'N',
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
<?php
$filterInfoOther = [
	'!ID' => $infoId,
];

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'info_other',
	[
		'ajax' => $ajax,
		'ACTIVE_DATE_FORMAT' => 'd F Y',
		'ADD_SECTIONS_CHAIN' => 'N',
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
		'FILTER_NAME' => 'filterInfoOther',
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
		'PARENT_SECTION_CODE' => $path[2],
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
		'SORT_ORDER1' => 'ASC',
		'SORT_ORDER2' => 'DESC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'info_other'
	],
	false
);

$filterShop = [
	'SECTION_ID' => [
		427 // Сигары
	]
];

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'shop_slider',
	[
		'MODALS' => [
			'ADD_TO_CART' => 'add_to_cart',
		],
		'favor' => $arFavor,
		'IMG_SIZE' => [
			'width' => 234,
			'height' => 221,
		],
		'sbttl' => '',
		'ttl' => '',
		'ttl2' => 'Онлайн-каталог сигар',
		'ACTIVE_DATE_FORMAT' => 'j F Y',
		'ADD_SECTIONS_CHAIN' => 'N',
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
			'PREVIEW_TEXT',
			'CATALOG_PRICE_1'
		],
		'FILE_404' => '',
		'FILTER_NAME' => 'filterShop',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_SHOP,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '9',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => 'cigars',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => ['country'],
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'N',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'Y',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'Y',
		'SORT_BY1' => 'SORT',
		'SORT_BY2' => 'ACTIVE_FROM',
		'SORT_ORDER1' => 'ASC',
		'SORT_ORDER2' => 'DESC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'shop_slider'
	],
	false
);

include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>