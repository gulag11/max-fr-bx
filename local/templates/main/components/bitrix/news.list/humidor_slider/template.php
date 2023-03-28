<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
if ($arResult['ITEMS']) : ?>
	<section class="section--bottom relative humidor-slider2-section">
		<div class="humidor-slider2-container">
			<div class="humidor-slider2-slider">
				<?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
					<div class="humidor-slider2-slide">
						<picture>
							<source srcset="<?= $item['img']['src'] ?>" type="image/webp" />
							<img src="<?= $item['img']['src'] ?>" alt="" />
						</picture>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>