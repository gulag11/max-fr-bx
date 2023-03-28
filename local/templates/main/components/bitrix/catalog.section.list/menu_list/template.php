<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['SECTIONS']) :
	if ($arResult['SECTION']['UF_TYPE'] == 1) : ?>
		<section class="section">
			<div class="container">
				<div class="certificates-block restaurant-page-block">
					<?php foreach ($arResult['sections'] as $key => $sec) : ?>
						<div class="certificates-block__row">
							<?php if ($sec['img_top']) : ?>
								<div data-aos="fade-up">
									<picture>
										<source srcset="<?= $sec['img_top']['src']; ?>" type="image/webp" />
										<img class="<?= $sec['img_top']['src']; ?>" alt="" />
									</picture>
								</div>
							<?php endif; ?>
							<div class="certificates-block__info">
								<div class="big-titles" data-aos="fade-up">
									<?php if ($sec['UF_SUBTITLE']) : ?>
										<div class="big-titles__subttl"><?= $sec['UF_SUBTITLE']; ?></div>
									<?php endif; ?>
									<h2 class="big-titles__ttl h1"><?= $sec['NAME']; ?></h2>
									<?php if ($sec['DESCRIPTION']) : ?>
										<div class="big-titles__txt"><?= $sec['DESCRIPTION']; ?></div>
									<?php endif; ?>
								</div>
								<?php if ($sec['items']) : ?>
									<div class="menu-list" data-aos="fade-up">
										<?php foreach ($sec['items'] as $key2 => $item) : ?>
											<div class="menu-list__row">
												<div class="menu-list__name"><?= $item['field']['NAME'] ?></div>
												<?php if ($item['props']['weight']['VALUE']) : ?>
													<div class="menu-list__price"><?= $item['props']['weight']['VALUE'] ?></div>
												<?php endif;
												if ($item['props']['price']['VALUE']) : ?>
													<div class="menu-list__weight"><?= $item['props']['price']['VALUE'] ?></div>
												<?php endif; ?>
											</div>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
							<?php if ($sec['img_bottom']) : ?>
								<div data-aos="fade-up">
									<picture>
										<source srcset="<?= $sec['img_bottom']['src']; ?>" type="image/webp" />
										<img class="<?= $sec['img_bottom']['src']; ?>" alt="" />
									</picture>
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php elseif ($arResult['SECTION']['UF_TYPE'] == 2) : ?>
		<section class="section">
			<div class="container">
				<div class="big-titles menu-wine-top" data-aos="fade-up">
					<?php if ($arResult['SECTION']['DESCRIPTION']) : ?>
						<div class="big-titles__subttl"><?= $arResult['SECTION']['DESCRIPTION'] ?></div>
					<?php endif; ?>
					<h2 class="big-titles__ttl h1"><?= $arResult['SECTION']['NAME'] ?></h2>
				</div>
				<div class="menu-wine-body" data-aos="fade-up">
					<?php foreach ($arResult['sections'] as $key => $arSec) : ?>
						<dl class="menu-wine-col js-badger-accordion badger-accordion">
							<?php foreach ($arSec as $key2 => $sec) : ?>
								<dt>
									<button class="button--clean rules-spoiler__button js-badger-accordion-header">
										<div class="rules-spoiler__ttl h4"><?= $sec['NAME'] ?></div>
										<div class="rules-spoiler__arrow">
											<svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 1.5L5 5.5L9 1.5" stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
									</button>
								</dt>
								<dd class="rules-spoiler__drop js-badger-accordion-panel badger-accordion__panel">
									<div class="rules-spoiler__drop-inner js-badger-accordion-panel-inner">
										<div class="menu-wine-inner">
											<?php foreach ($sec['items'] as $key3 => $item) : ?>
												<div class="menu-list__row">
													<div class="menu-list__name"><?= $item['field']['NAME'] ?></div>
													<?php if ($item['props']['weight']['VALUE']) : ?>
														<div class="menu-list__price"><?= $item['props']['weight']['VALUE'] ?></div>
													<?php endif;
													if ($item['props']['price']['VALUE']) : ?>
														<div class="menu-list__weight"><?= $item['props']['price']['VALUE'] ?></div>
													<?php endif; ?>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</dd>
							<?php endforeach; ?>
						</dl>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
<?php endif;
endif; ?>