<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} 
$APPLICATION->SetTitle("Меню");
?>
<section class="section--first section--grey-extra">
    <div class="container">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
        <div class="about-block">
            <div class="menu-main-bg lounge-main-section" data-aos="fade-up">
                <div class="big-titles white-ttl" data-aos="fade-up">
                    <div class="big-titles__subttl">ресторан</div>
                    <h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
                </div>
                <button class="button button--brown button--on-black" data-popup-button="1" data-aos="fade-up">Забронировать стол</button>
            </div>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:catalog.section.list',
                'menu_in',
                [
                    'cur' => $path[2],
                    'ADD_SECTIONS_CHAIN' => 'Y',
                    'CACHE_FILTER' => 'N',
                    'CACHE_GROUPS' => 'N',
                    'CACHE_TIME' => '36000000',
                    'CACHE_TYPE' => 'N',
                    'COUNT_ELEMENTS' => 'Y',
                    'COUNT_ELEMENTS_FILTER' => 'CNT_ACTIVE',
                    'FILTER_NAME' => '',
                    'IBLOCK_ID' => IB_ID_MENU,
                    'IBLOCK_TYPE' => 'Restaurant',
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
                    'SECTION_URL' => '#SITE_DIR#/restaurant/#SECTION_CODE#/',
                    'SECTION_USER_FIELDS' => [],
                    'SHOW_PARENT_NAME' => 'Y',
                    'TOP_DEPTH' => '1',
                    'VIEW_MODE' => 'LINE',
                    'COMPONENT_TEMPLATE' => 'menu_in'
                ],
                false
            );
            ?>
        </div>
    </div>
</section>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:catalog.section.list',
    'menu_list',
    [
        'ADD_SECTIONS_CHAIN' => 'Y',
        'CACHE_FILTER' => 'N',
        'CACHE_GROUPS' => 'N',
        'CACHE_TIME' => '36000000',
        'CACHE_TYPE' => 'N',
        'COUNT_ELEMENTS' => 'Y',
        'COUNT_ELEMENTS_FILTER' => 'CNT_ACTIVE',
        'FILTER_NAME' => '',
        'IBLOCK_ID' => IB_ID_MENU,
        'IBLOCK_TYPE' => 'Restaurant',
        'SECTION_CODE' => $path[2],
        'SECTION_FIELDS' => [
            'CODE',
            'NAME',
            'PICTURE',
            'SECTION_CODE',
            'SORT',
            'DESCRIPTION',
            'UF_TYPE',
            'UF_SUBTITLE'
        ],
        'SECTION_ID' => '',
        'SECTION_URL' => '#SITE_DIR#/restaurant/#SECTION_CODE#/',
        'SECTION_USER_FIELDS' => [],
        'SHOW_PARENT_NAME' => 'Y',
        'TOP_DEPTH' => '1',
        'VIEW_MODE' => 'LINE',
        'COMPONENT_TEMPLATE' => 'menu_list'
    ],
    false
);

include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>