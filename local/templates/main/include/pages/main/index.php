<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<section class="section--bottom section--main-page section--grey relative">
	<div class="container">
        <div class="first-screen-container">
            <div class="first-screen__video-container"><img class="only-mobile" src="<?=SITE_TEMPLATE_PATH?>/assets/images/main-vid-poster.jpeg" alt=""><video class="first-screen__video" loop muted playsinline data-main-video poster="<?=SITE_TEMPLATE_PATH?>/assets/images/main-vid-poster.jpeg" src=""></video><video class="first-screen__video left" loop muted playsinline data-main-video poster="<?=SITE_TEMPLATE_PATH?>/assets/images/main-vid-poster.jpeg" src=""></video></div>
            <h1 class="first-screen__ttl"><span class="from-right" data-transition>Профессор</span><br><span class="from-left" data-transition>Фрейд</span></h1>
            <div class="first-screen">
                <div class="first-screen__col1" data-video-show></div>
                <div class="first-screen__col2">
                    <div class="first-screen__txt" data-fade-up="" data-transition>Для ценителей комфорта,<br>приватности и высокого сервиса</div>
                </div>
                <div class="first-screen__col3">
                    <div class="first-screen__col3-bg"></div>
                    <div class="first-screen__col3-transp" data-video-show></div>
                </div><span class="first-screen__ttl--small" data-fade-up="" data-transition>частный клуб</span><button class="button button--brown only-mobile first-screen__mob-btn" data-fade-up="" data-transition="data-transition" data-popup-button="1">Забронировать</button>
            </div>
        </div>
		<div class="first-screen__bottom" data-aos="fade-up">
			<div class="first-screen__bottom-col"></div>
			<div class="scroll-down">
				<button class="button--clean scroll-down__txt" data-anchor-btn="1">узнать больше</button>
				<div class="scroll-down__line"></div>
			</div>
			<div class="first-screen__bottom-col"></div>
		</div>
	</div>
</section>
<section class="section section--black">
	<div class="container">
		<div data-anchor-target="1"></div>
		<div class="big-titles white-ttl" data-aos="fade-up">
			<div class="big-titles__subttl">профессор фрейд</div>
			<h2 class="big-titles__ttl h1">О клубе</h2>
		</div>
		<div class="main-page-block__cols" data-aos="fade-up">
			<div class="main-page-block__col">
				<?php $APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/main/include/about_1.php'
					]
				); ?>
			</div>
			<div class="main-page-block__col">
				<?php $APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/main/include/about_2.php'
					]
				); ?>
			</div>
		</div>
		<div class="main-page-block__bottom" data-aos="fade-up">
			<a class="main-page-block__bottom-links" href="/about-us/humidor-room/">
				Хьюмидорная комната
				<div class="arrow only-mobile">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</div>
			</a>
			<a class="main-page-block__bottom-links" href="/about-us/cigar-lounge/">
				Сигарный лаунж
				<div class="arrow only-mobile">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</div>
			</a>
			<a class="main-page-block__bottom-links" href="/about-us/cabinet/">
				Кабинет Фрейда
				<div class="arrow only-mobile">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</div>
			</a>
			<a class="main-page-block__bottom-links" href="/about-us/vinoteka/">
				Винотека в формате bar&amp;shop
				<div class="arrow only-mobile">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</div>
			</a>
		</div>
	</div>
</section>
<section class="section lounge-section">
	<div class="container">
		<div class="two-cols-block">
			<div class="two-cols-block__col">
				<div>
					<div class="big-titles only-desktop" data-aos="fade-up">
						<div class="big-titles__subttl">стиль Gentlemen's club</div>
						<h2 class="big-titles__ttl h1">Сигарный<br />лаунж</h2>
					</div>
					<div class="big-titles only-mobile" data-aos="fade-up">
						<div class="big-titles__subttl">стиль Gentlemen's club</div>
						<h2 class="big-titles__ttl h1">Сигарный лаунж</h2>
					</div>
					<div class="two-cols-block__txt" data-aos="fade-up">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/main/include/two-cols-txt.php'
							]
						); ?>
					</div>
				</div>
				<div data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/main-lounge-1.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-lounge-1.jpg" alt="" />
					</picture>
				</div>
			</div>
			<div class="two-cols-block__col">
				<div data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/main-lounge-2.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/main-lounge-2.jpg" alt="" />
					</picture>
				</div>
				<div class="txt-block">
					<div class="two-cols-block__txt" data-aos="fade-up">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/main/include/two-cols-txt_2.php'
							]
						); ?>
					</div>
					<div data-aos="fade-up">
						<a class="two-cols-block__link" href="/about-us/cigar-lounge/">узнать больше</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-bg-photo relative">
    <div class="section-bg-vid"><video class="section-bg-vid__video" loop muted playsinline preload="none" src=""></video></div>
	<div class="big-titles white-ttl relative" data-aos="fade-up">
		<div class="big-titles__subttl">место для деловых встреч</div>
		<h2 class="big-titles__ttl h1">Деловая обстановка</h2>
	</div>
	<div class="two-cols-block__txt txt-white relative only-desktop" data-aos="fade-up">
		<?php $APPLICATION->IncludeComponent(
			'bitrix:main.include',
			'',
			[
				'AREA_FILE_SHOW' => 'file',
				'AREA_FILE_SUFFIX' => 'inc',
				'EDIT_TEMPLATE' => '',
				'PATH' => '/main/include/two-cols-txt-3.php'
			]
		); ?>
	</div>
	<div class="two-cols-block__txt txt-white relative only-mobile" data-aos="fade-up">
		<?php $APPLICATION->IncludeComponent(
			'bitrix:main.include',
			'',
			[
				'AREA_FILE_SHOW' => 'file',
				'AREA_FILE_SUFFIX' => 'inc',
				'EDIT_TEMPLATE' => '',
				'PATH' => '/main/include/two-cols-txt-4.php'
			]
		); ?>
	</div>
	<div data-aos="fade-up">
		<button class="button button--brown relative" data-popup-button="1">Забронировать стол</button>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="restaurant-block">
			<div class="restaurant-block__col">
				<div class="big-titles" data-aos="fade-up">
					<div class="big-titles__subttl">строгость и элегантность</div>
					<h2 class="big-titles__ttl h1">Ресторан</h2>
					<div class="big-titles__txt">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/main/include/restaurant-txt.php'
							]
						); ?>
					</div>
				</div>
				<div class="restaurant-block__btn" data-aos="fade-up">
					<a class="two-cols-block__link" href="/restaurant/">узнать больше</a>
				</div>
			</div>
			<?php $APPLICATION->IncludeComponent(
				'bitrix:news.list',
				'main_slider',
				[
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
					'FIELD_CODE' => ['PREVIEW_PICTURE'],
					'FILE_404' => '',
					'FILTER_NAME' => '',
					'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
					'IBLOCK_ID' => IB_ID_CLUB_SLIDER,
					'IBLOCK_TYPE' => 'content',
					'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
					'INCLUDE_SUBSECTIONS' => 'N',
					'MESSAGE_404' => '',
					'NEWS_COUNT' => '120',
					'PAGER_BASE_LINK_ENABLE' => 'N',
					'PAGER_DESC_NUMBERING' => 'N',
					'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
					'PAGER_SHOW_ALL' => 'N',
					'PAGER_SHOW_ALWAYS' => 'N',
					'PAGER_TEMPLATE' => '.default',
					'PAGER_TITLE' => 'Новости',
					'PARENT_SECTION' => '',
					'PARENT_SECTION_CODE' => 'main',
					'PREVIEW_TRUNCATE_LEN' => '',
					'PROPERTY_CODE' => [],
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
					'COMPONENT_TEMPLATE' => 'main_slider'
				],
				false
			); ?>
		</div>
	</div>
</section>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php';

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'reviews',
	[
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
		'FIELD_CODE' => ['NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT'],
		'FILE_404' => '',
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_REVIEWS,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '120',
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
		'PROPERTY_CODE' => ['rating'],
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
		'COMPONENT_TEMPLATE' => 'reviews'
	],
	false
);

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'shop_slider',
	[
		'favor' => $arFavor,
		'sbttl' => 'более 1000 товаров в наличии',
		'ttl' => 'Магазин',
		'ttl2' => '',
		'favor' => $arFavor,
		'MODALS' => [
			'ADD_TO_CART' => 'add_to_cart',
		],
		'BASKET_ITEMS' => $bItemsData,
		'IMG_SIZE' => [
			'width' => 234,
			'height' => 221,
		],
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
		'FILTER_NAME' => '',
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
		'PARENT_SECTION_CODE' => '',
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
?>
