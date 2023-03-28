<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['menu']) : ?>
	<nav class="header__nav">
		<?php foreach ($arResult['menu'] as $key => $item) : ?>
			<a class="header__nav-item" href="<?= $item['LINK'] ?>" tabindex="0" <?php if ($item['items']) : ?>data-header-btn="34<?= $key; ?>" <?php else : ?> data-drop-close="" <?php endif; ?>>
				<?= $item['TEXT'] ?>
			</a>
		<?php endforeach; ?>
	</nav>
	<?php $this->SetViewTarget('top_drop');
	foreach ($arResult['menu'] as $key => $item) :
		if ($item['items']) : ?>
			<div class="header-modals__item" data-header-modal="34<?= $key; ?>">
				<div class="container">
					<?php foreach ($item['items'] as $key2 => $item2) :
						if ($key2 > 0) {
							$class = 'header-modals__small-ttl';
						} else {
							$class = 'header-modals__big-ttl';
						}
					?>
						<div class="header-modals__col">
							<?php foreach ($item2 as $key3 => $item3) : ?>
								<a class="<?= $arResult['class'][$key][$key2] ?>" href="<?= $item3['LINK'] ?>"><?= $item3['TEXT'] ?></a>
							<?php endforeach; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
<?php endif;
	endforeach;
	$this->EndViewTarget();
endif; ?>