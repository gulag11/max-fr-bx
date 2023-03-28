<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['menu']) :
	foreach ($arResult['menu'] as $key => $item) :
		if ($item['items']) : ?>
			<div class="mobile-menu__link">
				<a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
				<div class="mobile-menu__link-arrow" data-menu-link="654<?= $key ?>">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</div>
			</div>
		<?php else : ?>
			<a class="mobile-menu__link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
		<?php endif;
	endforeach;
	$this->SetViewTarget('drop_mob_menu');
	foreach ($arResult['menu'] as $key => $item) :
		if ($item['items']) : ?>
			<div class="modal modal--right mobile-menu-item" data-menu-item="654<?= $key ?>">
				<div class="mobile-menu-item__wrapper">
					<div class="mobile-menu-item__back" data-menu-close>
						<svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.8182 4C14.8182 3.75757 14.6217 3.56107 14.3796 3.56138L1.68812 3.56134L4.06107 1.18839C4.23352 1.01594 4.23349 0.73604 4.06107 0.563615C3.88862 0.391164 3.60871 0.391189 3.43629 0.563613L0.312339 3.68757C0.229555 3.77035 0.181749 3.8825 0.181776 3.99995C0.181802 4.1174 0.229558 4.22956 0.312342 4.31234L3.43633 7.43633C3.60878 7.60878 3.88868 7.60875 4.0611 7.43633C4.23353 7.26391 4.23353 6.98398 4.0611 6.81155L1.68813 4.43858L14.3796 4.43861C14.622 4.43861 14.8185 4.24212 14.8182 4Z" fill="#B69659" stroke="#B69659" stroke-width="0.2"></path>
						</svg>
						Назад
					</div>
					<?php if (($key == 0) || ($key == 17)) : ?>
						<div class="mobile-menu-item__ttl"><?= $item['TEXT'] ?></div>
						<?php foreach ($item['items'][0] as $key2 => $item2) : ?>
							<a class="mobile-menu-item__link" href="<?= $item2['LINK'] ?>"><?= $item2['TEXT'] ?></a>
						<?php endforeach; ?>
						<div class="mobile-menu-item__bottom">
							<?php foreach ($item['items'][1] as $key2 => $item2) : ?>
								<a class="mobile-menu-item__link" href="<?= $item2['LINK'] ?>"><?= $item2['TEXT'] ?></a>
							<?php endforeach; ?>
						</div>
					<?php else : ?>
						<div class="mobile-menu-item__ttl"><?= $item['TEXT'] ?></div>
						<?php foreach ($item['items'] as $key2 => $item2) : ?>
							<a class="mobile-menu-item__link" href="<?= $item2['LINK'] ?>"><?= $item2['TEXT'] ?></a>
						<?php endforeach; ?>
					<?php endif; ?>

				</div>
			</div>
<?php endif;
	endforeach;
	$this->EndViewTarget();
endif; ?>