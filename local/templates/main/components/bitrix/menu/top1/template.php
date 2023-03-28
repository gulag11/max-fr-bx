<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['menu']) : ?>
	<div class="header__col">
		<ul class="header__links">
			<?php foreach ($arResult['menu'] as $key => $item) :
				if ($item['items']) : ?>
					<li class="header__links-item">
						<div class="header__links-button" data-accordion-header="top1_1<?= $key ?>">
							<div class="header__text"><?= $item['TEXT'] ?></div>
							<div class="header__links-icon">
								<svg class="header__links-svg" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.862 4.8623L13.8048 5.80511L8.00005 11.6099L2.19531 5.80511L3.13812 4.8623L8.00005 9.72423L12.862 4.8623Z" fill="#3F3F40"></path>
								</svg>
							</div>
						</div>
					</li>
				<?php else : ?>
					<li class="header__links-item">
						<a class="header__links-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
					</li>
			<?php endif;
			endforeach; ?>
		</ul>
	</div>
	<?php
	$this->SetViewTarget('menu_top_1');
	foreach ($arResult['menu'] as $key => $item) :
		if ($item['items']) : ?>
			<div class="header__dropdown" data-header-modal="top1_1<?= $key ?>">
				<div class="header__dropdown-container">
					<ul class="header__dropdown-list">
						<?php foreach ($item['items'] as $key2 => $item2) : ?>
							<li class="header__dropdown-item">
								<a class="header__dropdown-link" href="<?= $item2['LINK'] ?>" data-link=""><?= $item2['TEXT'] ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
<?php endif;
	endforeach;
	$this->EndViewTarget();
endif; ?>