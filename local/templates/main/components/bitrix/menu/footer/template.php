<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['menu']) : ?>
	<?php foreach ($arResult['menu'] as $key => $item) : ?>
		<div class="footer__top-col">
			<a class="footer__top-ttl" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
			<?php foreach ($item['items'] as $key2 => $item2) : ?>
				<a class="footer__top-link" href="<?= $item2['LINK'] ?>"><?= $item2['TEXT'] ?></a>
			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
	<?php $this->SetViewTarget('footer_menu_mob'); ?>
	<dl class="footer__spoilers js-badger-accordion badger-accordion" data-aos="fade-up">
		<?php foreach ($arResult['menu'] as $key => $item) :
			if ($item['items']) : ?>
				<dt class="footer__spoilers-top">
					<button class="button--clean js-badger-accordion-header">
						<a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
						<svg class="footer__spoilers-arrows" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.5L5 5.5L9 1.5" stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</button>
				</dt>
				<dd class="js-badger-accordion-panel badger-accordion__panel">
					<div class="js-badger-accordion-panel-inner">
						<?php foreach ($item['items'] as $key2 => $item2) : ?>
							<a class="footer__top-link" href="<?= $item2['LINK'] ?>"><?= $item2['TEXT'] ?></a>
						<?php endforeach; ?>
					</div>
				</dd>
		<?php endif;
		endforeach; ?>
	</dl>
<?php $this->EndViewTarget();
endif; ?>
