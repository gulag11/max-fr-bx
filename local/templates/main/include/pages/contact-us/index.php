<?php 

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} 

Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?apikey=9eaf2d45-34a5-4620-bac6-0482e9335845&amp;lang=ru_RU"></script>'); 
?>
<section class="section--first section--bottom">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="contacts-block">
			<div class="contacts-block__top mob-line" data-aos="fade-up">
				<div class="big-titles only-desktop" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
					<div class="big-titles__txt">Клуб располагается в самом центре Петербурга напротив Исаакиевского собора,<br />недалеко от Невского проспекта, Дворцовой площади и Мариинского театра</div>
				</div>
				<div class="big-titles only-mobile" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
					<div class="big-titles__txt">Клуб располагается в самом центре<br />Петербурга напротив Исаакиевского собора</div>
				</div><button class="button button--brown contacts-block__top-btn only-mobile" data-popup-button="1" data-aos="fade-up">Забронировать стол</button>
				<div class="scroll-down only-desktop" data-aos="fade-up">
					<div class="scroll-down__line"></div>
				</div>
			</div>
			<div class="contacts-block__row">
				<div class="contacts-block__col">
					<?php if ($arOptions['UF_ADDRESS']) :
						$arAddress = explode(',', $arOptions['UF_ADDRESS']); ?>
						<div class="contacts-block__item" data-aos="fade-up">
							<div class="contacts-block__item-ttl">Адрес</div>
							<div class="contacts-block__item-txt">
								<?php foreach ($arAddress as $key => $addres) {
									echo ($addres);
									echo ('<br>');
								} ?>
							</div>
						</div>
					<?php endif;
					if ($arOptions['UF_WORK_MODE']) : ?>
						<div class="contacts-block__item" data-aos="fade-up">
							<div class="contacts-block__item-ttl">режим работы</div>
							<div class="contacts-block__item-txt">
								<?php foreach ($arOptions['UF_WORK_MODE'] as $key => $mode) {
									echo ($mode);
									echo ('<br>');
								} ?>
							</div>
						</div>
					<?php endif; ?>
					<button class="button button--brown contacts-block__col-btn only-desktop" data-popup-button="1" data-aos="fade-up">Забронировать стол</button>
				</div>
				<div class="contacts-block__col">
					<?php if ($arOptions['UF_PHONE']) : ?>
						<div class="contacts-block__item" data-aos="fade-up">
							<div class="contacts-block__item-ttl">телефон</div>
							<a class="contacts-block__item-txt" href="tel:<?= $arOptions['UF_PHONE_F']; ?>" data-nolink=""><?= $arOptions['UF_PHONE']; ?></a>
						</div>
					<?php endif;
					if ($arOptions['UF_EMAIL']) : ?>
						<div class="contacts-block__item" data-aos="fade-up">
							<div class="contacts-block__item-ttl">e-mail</div>
							<a class="contacts-block__item-txt" href="mailto:<?= $arOptions['UF_EMAIL']; ?>" data-nolink=""><?= $arOptions['UF_EMAIL']; ?></a>
						</div>
					<?php endif;
					if ($arSocLinks) : ?>
						<div class="contacts-block__item contacts-block__socials" data-aos="fade-up">
							<?php foreach ($arSocLinks as $code => $item) : ?>
								<a class="icon-circle" href="<?= $item['link'] ?>" target="_blank" data-nolink="">
									<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/soc_con_svg_' . $item['file']; ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="contacts-block__map" data-aos="fade-up">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-bg-photo rent-section-bg">
	<div class="big-titles white-ttl" data-aos="fade-up">
		<div class="big-titles__subttl">под ваше мероприятие</div>
		<h2 class="big-titles__ttl h1">Аренда клуба</h2>
	</div>
	<div class="two-cols-block__txt txt-white only-desktop" data-aos="fade-up">Учитывая индивидуальные предпочтения и особенности Вашего мероприятия мы предлагаем на <br>выбор аренду как определенной зоны, так и закрытие всего клуба</div>
	<div class="two-cols-block__txt txt-white only-mobile" data-aos="fade-up">Учитывая индивидуальные предпочтения и особенности Вашего мероприятия мы предлагаем на <br>выбор аренду как определенной зоны, так и закрытие всего клуба</div><button class="button button--brown button--on-black" data-popup-button="8" data-aos="fade-up">Получить консультацию</button>
</section>
<?php $APPLICATION->IncludeComponent(
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

$filterShopCons = [
	'SECTION_ID' => [
		427, // Сигары
		344, // Крепкие напитки
		343 // Вина
	]
];

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'shop_slider',
	[
		'MODALS' => [
			'ADD_TO_CART' => 'add_to_cart',
		],
		'BASKET_ITEMS' => $bItemsData,
		'IMG_SIZE' => [
			'width' => 177,
			'height' => 167, 
		],
		'favor' => $arFavor,
		'sbttl' => 'более 1000 товаров в наличии',
		'ttl' => 'Магазин',
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
		'FILTER_NAME' => 'filterShopCons',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_SHOP,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '12',
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
		'PROPERTY_CODE' => [],
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
		'COMPONENT_TEMPLATE' => 'shop_slider'
	],
	false
);

include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>