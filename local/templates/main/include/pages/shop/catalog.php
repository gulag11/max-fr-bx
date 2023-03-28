<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	exit;
}

$modals = [
    'add_to_cart',
];
?>
<section class="section--first">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="shop-page-head">
			<div class="big-titles shop-page-head__titles only-desktop" data-aos="fade-up">
				<div class="big-titles__subttl">более 1000 товаров в наличии</div>
				<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				<div class="big-titles__txt">В нашем интернет-магазине вы найдете коллекцию лучших сигар,<br />терпкого алкоголя и ярких вин</div>
			</div>
			<div class="big-titles shop-page-head__titles only-mobile" data-aos="fade-up">
				<div class="big-titles__subttl">более 1000 товаров в наличии</div>
				<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				<div class="big-titles__txt">В нашем интернет-магазине вы найдете<br />коллекцию лучших сигар, терпкого<br />алкоголя и ярких вин</div>
			</div>
			<?php

            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "shop_catalog",
                [
                    "FILTER_NAME" => "",
                    "SHOW_PARENT_NAME" => "Y",
                    "IBLOCK_TYPE" => "",
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
                    "CACHE_GROUPS" => "Y",
                    "IMG_SIZE" => [
                        "width" => 460,
                        "height" => 608,
                    ],
                ]
            );
            ?>
		</div>
	</div>
</section>
<section class="section shop-section">
	<?php

    if ($_SESSION['VIEWED']) {
        include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/slider/viewed.php');
    }
    ?>
</section>
<?php $APPLICATION->IncludeComponent(
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
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_INFO,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '5',
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
		'SORT_ORDER1' => 'ASC',
		'SORT_ORDER2' => 'DESC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'info_list'
	],
	false
); ?>
