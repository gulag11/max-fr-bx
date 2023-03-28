<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->SetViewTarget('modal');
include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/modals/' . $arParams['MODALS']['ADD_TO_CART'] . '.php');
$this->EndViewTarget();
?>
<?php if ($arParams['AJAX'] === 'pagen') {
	$APPLICATION->RestartBuffer();
} ?>
<div class="category-body" data-aos="fade-up" data-container="items" data-type="pagen-append">
	<?php foreach ($arResult['ITEMS'] as $key => $item) :
		if ($item['ID']) : ?>
			<input type="hidden" data-field="count-price" value="<span data-type='count'>1</span> шт. х <span data-type='price'><?= (int)$item['CATALOG_PRICE_1'] ?></span> <?= CURRENCY_FORMAT[$item['CATALOG_CURRENCY_1']] ?>">
			<div class="catalog-card" data-type="item">
				<div class="catalog-card__top">
					<div class="catalog-card__labels">
						<?php foreach ($item['PROPERTIES']['LABEL']['VALUE'] as $value) : ?>
							<div class="catalog-card__labels-item label-<?= LABEL_COLOR[mb_strtolower($value)] ?>"><?= $value ?></div>
						<?php endforeach; ?>
						<?php if ($asd) : ?>
							<div class="catalog-card__labels-item label-red">−30%</div>
						<?php endif; ?>
					</div>
					<button class="button--clean catalog-card__fav active" data-type="favor-add" data-id="<?= $item['ID'] ?>">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4 9.66791C4 4.88005 10.375 3.14238 12.5 7.4929C14.625 3.14238 21 4.88011 21 9.66796C21 14.4558 12.5 20 12.5 20C12.5 20 4 14.4558 4 9.66791Z" stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
						</svg>
					</button>
					<a href="<?= $item['DETAIL_PAGE_URL'] ?>">
						<picture>
							<source srcset="<?= $item['PREVIEW_PICTURE'] ?>" type="image/webp" />
							<img src="<?= $item['PREVIEW_PICTURE'] ?>" data-field-img alt="" />
						</picture>
					</a>
				</div>
				<a class="catalog-card__bottom" href="<?= $item['DETAIL_PAGE_URL'] ?>">
					<div>
						<?php if ($item['PROPERTIES']['manufacturer']['DESCRIPTION']) : ?>
							<div class="catalog-card__brand"><?= $item['PROPERTIES']['manufacturer']['DESCRIPTION'] ?></div>
						<?php endif; ?>
						<div class="catalog-card__title" data-field="name"><?= $item['NAME'] ?></div>
					</div>
					<div class="catalog-card__info">
						<div>
							<?php if ($item['PROPERTIES']['country']['VALUE']) : ?>
								<div class="catalog-card__country">
									<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/italy_flag.php'; ?>
									<?= $item['PROPERTIES']['country']['VALUE'] ?>
								</div>
							<?php endif;
							if ($item['PROPERTIES']['strength']['VALUE']) :
								$chek = $item['PROPERTIES']['strength']['VALUE']; ?>
								<div class="catalog-card__strong">
									<?= $item['PROPERTIES']['strength']['NAME'] ?>
									<?php for ($i = 1; $i <= 5; $i++) : ?>
										<div class="point <?php if ($i <= $chek) : ?>active<?php endif; ?>"></div>
									<?php endfor; ?>
								</div>
							<?php endif;
							if ($item['csv']) :
								$keyLast = array_key_last($item['csv']); ?>
								<div class="catalog-card__txt">
									<?php foreach ($item['csv'] as $key2 => $item) {
										echo ($item);
										if ($key2 != $keyLast) {
											echo (', ');
										}
									} ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="catalog-card__price">
							<div>
								<span class="current"><span data-type="price" data-field="price"><?= (int)$item['CATALOG_PRICE_1'] ?></span> <?= CURRENCY_FORMAT[$item['CATALOG_CURRENCY_1']] ?></span>
								<?php if ($asd) : ?><span class="old">13 820 ₽</span><?php endif; ?>
							</div>
							<svg class="added-to-cart only-desktop" width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.21051 11.6842C8.21051 11.6842 8.21051 10.2633 8.21051 8.84213C8.21051 5.05259 12.9473 5.05265 12.9473 8.84213C12.9473 10.7369 12.9473 11.6842 12.9473 11.6842M4.89473 9.7895L16.2631 9.78953L18.1579 24L3 24L4.89473 9.7895Z" stroke="#B69659" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
								<circle cx="20.5" cy="9.5" r="9.5" fill="#B69659"></circle>
								<path d="M15.5 9.5L18.5 12.5L25.5 6.5" stroke="white" stroke-width="1.2" stroke-linecap="round"></path>
							</svg>
						</div>
					</div>
				</a>
				<div class="catalog-card__btn-container"> 
					<button class="button button--brown catalog-card__btn only-desktop" <?= $item['BASKET']['ATTR'] ?> data-event="add" data-id="<?= $item['ID'] ?>" tabindex="-1"><?= $item['BASKET']['TEXT']['DESKTOP'] ?>
					</button>
					<button class="button button--brown catalog-card__btn only-mobile" <?= $item['BASKET']['ATTR'] ?> data-event="add" data-id="<?= $item['ID'] ?>" tabindex="-1"><?= $item['BASKET']['TEXT']['MOBILE'] ?>
					</button>
				</div>
			</div>
	<?php endif;
	endforeach; ?>
</div>
<?php if ($arResult['NAV_STRING']) {
	echo $arResult['NAV_STRING'];
} ?>
<?php if ($arParams['AJAX'] === 'pagen') {
	die();
} ?>
<?php $this->SetViewTarget('favor_count_elem'); ?>
<div class="category-items-count"><?= $arParams['FAVOR_COUNT_FULL'] ?></div>
<?php $this->EndViewTarget();
