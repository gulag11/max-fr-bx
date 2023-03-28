<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<section class="section--first">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="contacts-block">
			<div class="contacts-block__top">
				<div class="big-titles only-desktop" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
					<div class="big-titles__txt">Элегантный дизайн сертификата создаст наилучшие<br />впечатления о подарке</div>
				</div>
				<div class="big-titles only-mobile" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
					<div class="big-titles__txt">Элегантный дизайн сертификата создаст<br />наилучшие впечатления о подарке</div>
				</div>
				<div class="scroll-down only-desktop" data-aos="fade-up">
					<div class="scroll-down__line"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section--bottom lounge-section">
	<div class="container">
		<div class="certificates-block">
			<div class="certificates-block__row">
				<div class="certificates-block__info">
					<div class="small-titles only-desktop" data-aos="fade-up">
						<h3 class="small-titles__ttl h2">Сертификат<br />на ужин в ресторане</h3>
					</div>
					<div class="small-titles only-mobile" data-aos="fade-up">
						<h3 class="small-titles__ttl h2">Сертификат на<br />ужин в ресторане</h3>
					</div>
					<div class="certificates-block__txt" data-aos="fade-up">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/gift-certificate/include/txt_1.php'
							]
						); ?>
					</div>
					<button class="button button--brown certificates-block__btn" data-popup-button="15" data-aos="fade-up">Заказать сертификат</button>
					<div class="certificates-block__note" data-aos="fade-up">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/gift-certificate/include/txt_2.php'
							]
						); ?>
					</div>
				</div>
				<div data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/certificates-col-2.webp" type="image/webp" />
						<img class="certificates-block__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/certificates-col-2.jpg" alt="" />
					</picture>
				</div>
			</div>
			<div class="certificates-block__row">
				<div data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/certificates-col-1.webp" type="image/webp" />
						<img class="certificates-block__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/certificates-col-1.jpg" alt="" />
					</picture>
				</div>
				<div class="certificates-block__info">
					<div class="small-titles only-desktop" data-aos="fade-up">
						<h3 class="small-titles__ttl h2">Сертификат<br />на сигары и алкоголь</h3>
					</div>
					<div class="small-titles only-mobile" data-aos="fade-up">
						<h3 class="small-titles__ttl h2">Сертификат на<br />сигары и алкоголь</h3>
					</div>
					<div class="certificates-block__txt" data-aos="fade-up">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/gift-certificate/include/txt_3.php'
							]
						); ?>
					</div>
					<button class="button button--brown certificates-block__btn" data-popup-button="7" data-aos="fade-up">Заказать сертификат</button>
					<div class="certificates-block__note" data-aos="fade-up">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/gift-certificate/include/txt_4.php'
							]
						); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'rules_visit_club',
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
		'FIELD_CODE' => ['NAME',],
		'FILE_404' => '',
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_RULES_VISIT_CLUB,
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
		'PROPERTY_CODE' => ['li'],
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
		'COMPONENT_TEMPLATE' => 'rules_visit_club'
	],
	false
); ?>
<div class="mob-section-border"></div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>