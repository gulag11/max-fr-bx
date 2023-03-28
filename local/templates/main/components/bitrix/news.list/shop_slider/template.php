<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->SetViewTarget('modal');
include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/modals/' . $arParams['MODALS']['ADD_TO_CART'] . '.php');
$this->EndViewTarget();
if ($arResult['ITEMS']) :
?>
	<section class="section shop-section">
		<div class="container">
			<?php if (($arParams['sbttl']) || ($arParams['ttl'])) : ?>
				<div class="big-titles" data-aos="fade-up">
					<div class="big-titles__subttl"><?= $arParams['sbttl'] ?></div>
					<h2 class="big-titles__ttl h1"><?= $arParams['ttl'] ?></h2>
				</div>
			<?php endif;
			if ($arParams['ttl2']) : ?>
				<div class="small-titles" data-aos="fade-up">
					<h3 class="small-titles__ttl h2"><?= $arParams['ttl2'] ?></h3>
				</div>
			<?php endif; ?>
			<div class="shop-slider controls-out" data-aos="fade-up">
				<div class="swiper-container" id="shop-slider">
					<div class="swiper-wrapper" data-container="items">
						<?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
							<input type="hidden" data-field="count-price" value="<span data-type='count'>1</span> шт. х <span data-type='price'><?= (int)$item['CATALOG_PRICE_1'] ?></span> <?= CURRENCY_FORMAT[$item['CATALOG_CURRENCY_1']] ?>">
							<div class="swiper-slide" data-type="item">
								<div class="catalog-card" data-card-btn-parent="data-card-btn-parent">
									<div class="catalog-card__top">
										<div class="catalog-card__labels">
											<?php foreach ($item['ar_point'] as $key2 => $item2) : ?>
												<div class="catalog-card__labels-item <?= $item2['class'] ?>"><?= $item2['val'] ?></div>
											<?php endforeach; ?>
										</div>
										<button class="button--clean catalog-card__fav <?php if ($item['favor_actv']) : ?>active<?php endif; ?>" data-type="favor-add" data-id="<?= $item['ID'] ?>">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M4 9.66791C4 4.88005 10.375 3.14238 12.5 7.4929C14.625 3.14238 21 4.88011 21 9.66796C21 14.4558 12.5 20 12.5 20C12.5 20 4 14.4558 4 9.66791Z" stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
											</svg>
										</button>
										<a class="catalog-card__img" href="<?= $item['DETAIL_PAGE_URL'] ?>">
											<picture>
												<source srcset="<?= $item['PREVIEW_PICTURE'] ?>" type="image/webp" />
												<img src="<?= $item['PREVIEW_PICTURE'] ?>" data-field-img alt="" />
											</picture>
										</a>
									</div>
									<a class="catalog-card__bottom" href="<?= $item['DETAIL_PAGE_URL'] ?>">
										<div>
											<?php if ($item['PROPERTIES']['MANUFACTURER']['VALUE']) : ?>
												<div class="catalog-card__brand"><?= $item['PROPERTIES']['MANUFACTURER']['VALUE'] ?></div>
											<?php endif; ?>
											<div class="catalog-card__title" data-field="name"><?= $item['NAME'] ?></div>
										</div>
										<div class="catalog-card__info">
											<?php if (($item['PROPERTIES']['COUNTRY']['VALUE']) || ($item['PROPERTIES']['FORTRESS']['VALUE']) || ($item['csv'])) : ?>
												<div>
													<?php if ($item['PROPERTIES']['COUNTRY']['VALUE']) : ?>
														<div class="catalog-card__country">
															<img class="flag-ico" src="<?= '/upload/countries/' . $item['PROPERTIES']['COUNTRY']['VALUE'] . '.png' ?>">
															<?= $item['PROPERTIES']['COUNTRY']['VALUE'] ?>
														</div>
													<?php endif;
													if ($item['PROPERTIES']['FORTRESS']['VALUE']) :
														$chek = $item['PROPERTIES']['FORTRESS']['VALUE']; ?>
														<div class="catalog-card__strong">
															<?= $item['PROPERTIES']['FORTRESS']['NAME'] ?>
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
											<?php endif; ?>
											<div class="catalog-card__price">
												<div>
													<span class="current"><span data-type="price" data-field="price"><?= (int)$item['CATALOG_PRICE_1'] ?></span> <?= CURRENCY_FORMAT[$item['CATALOG_CURRENCY_1']] ?></span>
													<?php if ($item['old_price']) : ?>
														<span class="old"><?= $item['old_price'] ?> <?= CURRENCY_FORMAT[$item['cur']] ?></span>
													<?php endif; ?>
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
										<button class="button button--brown catalog-card__btn only-desktop" <?= $item['BASKET']['ATTR'] ?> data-type="basket" data-event="add" data-id="<?= $item['ID'] ?>" tabindex="-1">
											<?= $item['BASKET']['TEXT']['DESKTOP'] ?>
										</button>
										<button class="button button--brown catalog-card__btn only-mobile" <?= $item['BASKET']['ATTR'] ?> data-type="basket" data-event="add" data-id="<?= $item['ID'] ?>" tabindex="-1">
											<?= $item['BASKET']['TEXT']['MOBILE'] ?>
										</button>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="controls-out__container only-desktop">
					<button class="slider-control button--clean" id="shop-slider-prev">
						<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.57227 0.714355L1.28655 7.00007L7.57227 13.2858" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</button>
					<button class="slider-control button--clean" id="shop-slider-next">
						<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</button>
				</div>
			</div>
			<div data-aos="fade-up">
				<a class="button button--brown-border more-btn" href="<?= $arResult['link_sec']; ?>">Перейти в каталог</a>
			</div>
		</div>
	</section>
<?php endif; ?>