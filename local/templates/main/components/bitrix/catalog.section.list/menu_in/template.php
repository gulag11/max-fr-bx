<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['SECTIONS']) : ?>
	<div class="about-block-bottom menu-tabs" data-tabs data-aos="fade-up">
		<?php foreach ($arResult['SECTIONS'] as $key => $item) : ?>
			<a class="about-block-bottom__item menu-tab <?php if ($item['SELECTED']) : ?>active<?php endif; ?>" href="<?= $item['SECTION_PAGE_URL'] ?>" data-tabs-item>
				<?php
				print_r($item['DESCRIPTION']);
				echo ($item['NAME']);
				?>
			</a>
		<?php endforeach; ?>
	</div>
<?php endif; ?>