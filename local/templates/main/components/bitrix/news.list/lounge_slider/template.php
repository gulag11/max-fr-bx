<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']) : ?>
	<div class="interior-block__slider">
		<div class="restaurant-slider" data-aos="fade-up">
			<div class="restaurant-slider__col only-desktop">
				<button class="slider-control button--clean" id="restaurant-slider-prev">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.57227 0.714355L1.28655 7.00007L7.57227 13.2858" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</button>
			</div>
			<div class="restaurant-slider__container">
				<div class="swiper-container" id="restaurant-slider">
					<div class="swiper-wrapper">
					<?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
						<div class="swiper-slide">
							<picture>
								<source srcset="<?= $item['img']['src'] ?>" type="image/webp" />
								<img src="<?= $item['img']['src'] ?>" alt="" />
							</picture>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="sliders-pagination" id="restaurant-slider-pagination"></div>
			</div>
			<div class="restaurant-slider__col only-desktop">
				<button class="slider-control button--clean" id="restaurant-slider-next">
					<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</button>
			</div>
		</div>
	</div>
<?php endif; ?>