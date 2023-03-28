<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']) : ?>
	<section class="<?= $arParams['sec_class'] ?>">
		<div class="container">
			<div class="small-titles small-titles--mb45" data-aos="fade-up">
				<h3 class="small-titles__ttl h2">Справочная информация</h3>
				<div class="small-titles__txt">Расскажем подробно обо всех тонкостях и нюансах</div>
			</div>
			<div class="articles-row controls-out only-desktop" data-aos="fade-up">
				<div class="swiper-container" id="articles-slider">
					<div class="swiper-wrapper">
						<?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
							<div class="swiper-slide">
								<a class="articles-card" href="<?= $item['DETAIL_PAGE_URL'] ?>">
									<div class="articles-card__top">
										<?php if ($arResult['sections'][$item['IBLOCK_SECTION_ID']]['name']) : ?>
											<div class="catalog-card__labels">
												<div class="catalog-card__labels-item label-brown"><?= $arResult['sections'][$item['IBLOCK_SECTION_ID']]['name'] ?></div>
											</div>
										<?php endif;
										if ($item['img']['src']) : ?>
											<div class="articles-card__top-img">
												<picture>
													<source srcset="<?= $item['img']['src'] ?>" type="image/webp" />
													<img class="articles-card__img" src="<?= $item['img']['src'] ?>" alt="" />
												</picture>
											</div>
										<?php endif; ?>
									</div>
									<div class="articles-card__bottom">
										<div class="articles-card__info only-desktop big-card">
											<?php if ($item['DISPLAY_ACTIVE_FROM']) : ?>
												<div class="articles-card__info-col"><?= $item['DISPLAY_ACTIVE_FROM'] ?></div>
											<?php endif;
											if ($item['PROPERTIES']['read_time']['VALUE']) : ?>
												<div class="articles-card__info-col"><?= $item['PROPERTIES']['read_time']['VALUE'] ?></div>
											<?php endif; ?>
										</div>
										<div>
											<div class="articles-card__ttl h4"><?= $item['NAME'] ?></div>
											<?php if ($item['PREVIEW_TEXT']) : ?>
												<div class="articles-card__txt"><?= $item['PREVIEW_TEXT'] ?></div>
											<?php endif; ?>
										</div>
										<div class="articles-card__bottom-row">
											<button class="button--clean two-cols-block__link" data-atr="<?= $item['DETAIL_PAGE_URL'] ?>" btn="btn">Читать полностью</button>
											<div class="articles-card__info small-card">
												<?php if ($item['DISPLAY_ACTIVE_FROM']) : ?>
													<div class="articles-card__info-col"><?= $item['DISPLAY_ACTIVE_FROM'] ?></div>
												<?php endif;
												if ($item['PROPERTIES']['read_time']['VALUE']) : ?>
													<div class="articles-card__info-col"><?= $item['PROPERTIES']['read_time']['VALUE'] ?></div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<?php if (count($arResult['ITEMS']) > 3) : ?>
					<div class="controls-out__container">
						<button class="slider-control button--clean" id="articles-slider-prev">
							<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.57227 0.714355L1.28655 7.00007L7.57227 13.2858" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button>
						<button class="slider-control button--clean" id="articles-slider-next">
							<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button>
					</div>
				<?php endif; ?>
			</div>
			<div class="articles-row only-mobile" data-aos="fade-up">
				<?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
					<a class="articles-card" href="<?= $item['DETAIL_PAGE_URL'] ?>">
						<div class="articles-card__top">
							<?php if ($arResult['sections'][$item['IBLOCK_SECTION_ID']]['name']) : ?>
								<div class="catalog-card__labels">
									<div class="catalog-card__labels-item label-brown"><?= $arResult['sections'][$item['IBLOCK_SECTION_ID']]['name'] ?></div>
								</div>
							<?php endif;
							if ($item['img']['src']) : ?>
								<div class="articles-card__top-img">
									<picture>
										<source srcset="<?= $item['img']['src'] ?>" type="image/webp" />
										<img class="articles-card__img" src="<?= $item['img']['src'] ?>" alt="" />
									</picture>
								</div>
							<?php endif; ?>
						</div>
						<div class="articles-card__bottom">
							<div class="articles-card__info only-desktop big-card">
								<?php if ($item['DISPLAY_ACTIVE_FROM']) : ?>
									<div class="articles-card__info-col"><?= $item['DISPLAY_ACTIVE_FROM'] ?></div>
								<?php endif;
								if ($item['PROPERTIES']['read_time']['VALUE']) : ?>
									<div class="articles-card__info-col"><?= $item['PROPERTIES']['read_time']['VALUE'] ?></div>
								<?php endif; ?>
							</div>
							<div>
								<div class="articles-card__ttl h4"><?= $item['NAME'] ?></div>
								<?php if ($item['PREVIEW_TEXT']) : ?>
									<div class="articles-card__txt"><?= $item['PREVIEW_TEXT'] ?></div>
								<?php endif; ?>
							</div>
							<div class="articles-card__bottom-row">
								<button class="button--clean two-cols-block__link" data-atr="<?= $item['DETAIL_PAGE_URL'] ?>" btn="btn">Читать полностью</button>
								<div class="articles-card__info small-card">
									<?php if ($item['DISPLAY_ACTIVE_FROM']) : ?>
										<div class="articles-card__info-col"><?= $item['DISPLAY_ACTIVE_FROM'] ?></div>
									<?php endif;
									if ($item['PROPERTIES']['read_time']['VALUE']) : ?>
										<div class="articles-card__info-col"><?= $item['PROPERTIES']['read_time']['VALUE'] ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
			<a class="button button--brown-border more-btn" href="/information/" data-aos="fade-up">Смотреть все статьи</a>
		</div>
	</section>
<?php endif; ?>