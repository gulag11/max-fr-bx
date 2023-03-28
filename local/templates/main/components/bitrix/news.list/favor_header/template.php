<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="header-modals-small__ttl">Избранное</div>
<div class="product-list">
	<?php if ($arParams['ajax'] == 'list') {
		$APPLICATION->RestartBuffer();
	}
	foreach ($arResult['ITEMS'] as $key => $item) : ?>
		<div class="product-list__card">
			<div class="product-list__img">
				<picture>
					<source srcset="<?= $item['PREVIEW_PICTURE'] ?>" type="image/webp" />
					<img src="<?= $item['PREVIEW_PICTURE'] ?>" alt="" />
				</picture>
			</div>
			<div class="product-list__info">
				<?php if ($item['PROPERTIES']['manufacturer']['VALUE']) : ?>
					<div class="catalog-card__brand"><?= $item['PROPERTIES']['manufacturer']['VALUE'] ?></div>
				<?php endif; ?>
				<div class="product-list__ttl"><?= $item['NAME'] ?></div>
			</div>
			<div class="product-list__col">
				<div class="catalog-card__price">
					<div>
						<span class="current"><?= $item['price'] ?> <?= CURRENCY_FORMAT[$item['cur']] ?></span>
						<?php if ($item['old_price']) : ?>
							<span class="old"><?= $item['old_price'] ?></span>
						<?php endif; ?>
					</div>
				</div>
				<button class="product-list__del button--clean" data-type="favor-add" data-id="<?= $item['ID'] ?>" data-header-click="remove">Удалить</button>
			</div>
		</div>
	<?php endforeach;
	if ($arParams['ajax'] == 'list') {
		die();
	} ?>
</div>
<div class="header-modals-small__bottom">
	<div class="header-modals-small__fav-count">
		<span><?= count($arResult['ITEMS']); ?> </span>&nbsp;<?= $arResult['count_cur']; ?> в избранном
	</div>
	<a class="button button--brown-border" href="/favorites/">Перейти в избранное</a>
</div>