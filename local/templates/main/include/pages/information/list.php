<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} 
$ajaxPagen = $request->getQuery('ajax');
?>
<section class="section--first">
    <div class="container">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
        <div class="contacts-block articles-head">
            <div class="contacts-block__top">
                <div class="big-titles articles-ttls" data-aos="fade-up">
                    <div class="big-titles__subttl">профессор фрейд</div>
                    <h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
                    <div class="big-titles__txt">Расскажем подробно обо всех тонкостях<br />и нюансах</div>
                </div>
                <div class="scroll-down only-desktop" data-aos="fade-up">
                    <div class="scroll-down__line"></div>
                </div>
            </div>
        </div>
        <?php $APPLICATION->ShowViewContent('filter'); ?>
    </div>
</section>
<?php $APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'info',
    [
        'AJAX' => $ajaxPagen,
        'path' => $path[2],
        'ACTIVE_DATE_FORMAT' => 'd.m.Y',
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
        'NEWS_COUNT' => '8',
        'PAGER_BASE_LINK_ENABLE' => 'N',
        'PAGER_DESC_NUMBERING' => 'N',
        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
        'PAGER_SHOW_ALL' => 'N',
        'PAGER_SHOW_ALWAYS' => 'N',
        'PAGER_TEMPLATE' => 'show_more',
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
        'SORT_ORDER1' => 'DESC',
        'SORT_ORDER2' => 'ASC',
        'STRICT_SECTION_CHECK' => 'N',
        'COMPONENT_TEMPLATE' => 'info'
    ],
    false
);

$APPLICATION->IncludeComponent(
    'bitrix:catalog.section.list',
    'shop',
    [
        'ADD_SECTIONS_CHAIN' => 'N',
        'CACHE_FILTER' => 'N',
        'CACHE_GROUPS' => 'N',
        'CACHE_TIME' => '36000000',
        'CACHE_TYPE' => 'N',
        'COUNT_ELEMENTS' => 'Y',
        'COUNT_ELEMENTS_FILTER' => '',
        'FILTER_NAME' => 'sectionsFilter',
        'IBLOCK_ID' => IB_ID_SHOP,
        'IBLOCK_TYPE' => 'Content',
        'SECTION_CODE' => '',
        'SECTION_FIELDS' => [
            'CODE',
            'NAME',
            'PICTURE',
            'SECTION_CODE',
            'SORT',
            'DESCRIPTION'
        ],
        'SECTION_ID' => '',
        'SECTION_URL' => '#SITE_DIR#/shop/#SECTION_CODE#/',
        'SECTION_USER_FIELDS' => [],
        'SHOW_PARENT_NAME' => 'Y',
        'TOP_DEPTH' => '1',
        'VIEW_MODE' => 'LINE',
        'COMPONENT_TEMPLATE' => 'shop'
    ],
    false
);

include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>