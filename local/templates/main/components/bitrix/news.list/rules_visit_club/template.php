<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']) : ?>
	<section class="section section--black">
		<div class="container">
			<div class="big-titles white-ttl txt-nowrap" data-aos="fade-up">
				<div class="big-titles__subttl">подробнее о нас</div>
				<h2 class="big-titles__ttl h1"><?= $arResult['name'] ?></h2>
			</div>
			<div class="rules-block" data-aos="fade-up">
				<dl class="js-badger-accordion badger-accordion">
					<?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
						<dt>
							<button class="button--clean rules-spoiler__button js-badger-accordion-header">
								<div class="rules-spoiler__num"><?= $item['count'] ?>.</div>
								<div class="rules-spoiler__ttl h4"><?= $item['NAME'] ?></div>
								<div class="rules-spoiler__arrow">
									<svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1.5L5 5.5L9 1.5" stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</div>
							</button>
						</dt>
						<?php if ($item['PROPERTIES']['li']['VALUE']) : ?>
							<dd class="rules-spoiler__drop js-badger-accordion-panel badger-accordion__panel">
								<div class="js-badger-accordion-panel-inner">
									<div class="rules-spoiler__drop-inner">
										<ul>
											<?php foreach ($item['PROPERTIES']['li']['VALUE'] as $key2 => $item2) : ?>
												<li>— <?= $item2 ?></li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</dd>
					<?php endif;
					endforeach; ?>
				</dl>
			</div>
		</div>
	</section>
<?php endif; ?>