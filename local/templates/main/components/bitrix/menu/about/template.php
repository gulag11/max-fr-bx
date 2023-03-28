<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult) : ?>
	<div class="about-block-bottom" data-aos="fade-up">
		<?php foreach ($arResult as $key => $item) : ?>
			<a class="about-block-bottom__item" href="<?= $item['LINK'] ?>">
				<?= $item['TEXT'] ?>
				<div class="arrow only-mobile">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</div>
			</a>
		<?php endforeach ?>
	</div>
<?php endif; ?>