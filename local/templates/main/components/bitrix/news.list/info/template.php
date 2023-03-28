<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']) :
	$this->SetViewTarget('filter'); ?>
	<div class="articles-top" data-aos="fade-up" data-tabs>
		<a class="articles-top__item <?php if ($arResult['all']) : ?>active<?php endif; ?>" href="/information/" data-tabs-item>Все</a>
		<?php foreach ($arResult['sections'] as $key => $sec) : ?>
			<a class="articles-top__item  <?php if ($sec['active']) : ?>active<?php endif; ?>" href="<?= $sec['url'] ?>" data-tabs-item><?= $sec['name'] ?></a>
		<?php endforeach; ?>
	</div>
	<?php $this->EndViewTarget(); ?>
	<section class="section--bottom" data-container="base">
		<div class="container">
			<?php if ($arParams['AJAX'] === 'pagen') {
				$APPLICATION->RestartBuffer();
			} ?>
			<div class="articles-body" data-container="items" data-type="pagen-append">
				<?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
					<a class="articles-card" href="<?= $item['DETAIL_PAGE_URL'] ?>" data-type="item">
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
										<img class="articles-card__img" src="<?= $item['img']['src'] ?>" alt="<?= $item['NAME'] ?>" />
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
				<?php endforeach;
				 if ($arResult['NAV_STRING']) {
					echo ($arResult['NAV_STRING']);
				} ?>
			</div>
			<?php if ($arParams['AJAX'] === 'pagen') {
				die();
			} ?>
		</div>
	</section>
<?php endif; ?>