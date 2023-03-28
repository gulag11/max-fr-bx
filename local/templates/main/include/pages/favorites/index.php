<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
$ajaxPagen = $request->getQuery('ajax'); ?>
<section class="section--first" data-type="favor-list">
	<?php if ($favorAjaxList) {
		$APPLICATION->RestartBuffer();
	} ?>
	<div class="container" data-container="base">
		<div class="category-page-head">
			<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		</div>
		<div class="category-top favorites-top" data-aos="fade-up">
			<div class="category-top__line">
				<div class="category-title-block">
					<h1 class="category-title h2"><?php $APPLICATION->ShowTitle(false) ?></h1>
					<?php $APPLICATION->ShowViewContent('favor_count_elem'); ?>
				</div>
			</div>
		</div>
		<?php
		if ($arFavor) :

			foreach ($arFavor as $key => $item) {
				$arFavorIDs[$key] = $key;
			}

			$filterFavor = [
				'ID' => $arFavorIDs,
			];

			$APPLICATION->IncludeComponent(
				'bitrix:news.list',
				'shop_section_favor',
				[
					'AJAX' => $ajaxPagen,
					'FAVOR_COUNT_FULL' => count($arFavor),
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
						'PREVIEW_PICTURE',
						'DESCRIPTION',
						'CATALOG_GROUP_1',
					],
					'MODALS' => [
						'ADD_TO_CART' => 'add_to_cart',
					],
					'BASKET_ITEMS' => $bItemsData,
					'IMG_SIZE' => [
						'width' => 177,
						'height' => 167,
					],
					'FILE_404' => '',
					'FILTER_NAME' => 'filterFavor',
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
					'PAGER_TEMPLATE' => 'show_more',
					'PAGER_TITLE' => 'Новости',
					'PARENT_SECTION' => '',
					'PARENT_SECTION_CODE' => '',
					'PREVIEW_TRUNCATE_LEN' => '',
					'PROPERTY_CODE' => [
						'point',
						'manufacturer',
						'country',
						'fortress',
					],
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
					'COMPONENT_TEMPLATE' => 'shop_section_favor'
				],
				false
			);

		else : ?>
			<div class="cart-empty-block" data-aos="fade-up">
				<div class="cart-empty-block__ttl" data-aos="fade-up">В Избранном пока ничего нет</div>
				<div class="cart-empty-block__txt favorites-emty-txt" data-aos="fade-up">
					Добавляйте товары с помощью
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4 9.66791C4 4.88005 10.375 3.14238 12.5 7.4929C14.625 3.14238 21 4.88011 21 9.66796C21 14.4558 12.5 20 12.5 20C12.5 20 4 14.4558 4 9.66791Z" stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
					</svg>
				</div>
				<a class="button button--brown-border cart-empty-block__btn" href="/shop/" data-aos="fade-up">Перейти в каталог</a>
			</div>
		<?php endif; ?>
	</div>
	<?php if ($favorAjaxList) {
		die();
	} ?>
</section>
<section class="section shop-section">
	<?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/slider/viewed.php'); ?>
</section>