<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="section section--overflow" data-aos="fade-up">
	<div class="container">
		<div class="main-page__top">
			<div class="main-page__top-row">
				<div class="main-page__top-col">
					<h3 class="main-page__title">
						<span class="word-span">
							<span data-aos="fade-up">Продукция</span>
						</span>
						<span class="word-span">
							<span data-aos="fade-up">СЛТ Аква</span>
						</span>
						<span class="word-span">
							<span data-aos="fade-up">на объектах</span>
						</span>
					</h3>
				</div>
				<div class="main-page__top-col">
					<p class="main-page__top-text" data-aos="fade-up">Наши трубопроводные системы установлены на многих объектах строительства жилого, общественного и промышленного назначения</p>
				</div>
			</div>
			<div class="main-page__top-button" data-aos="fade-up">
				<a class="button button-animate" href="/objects/" data-link="">
					<div class="button__text">
						<span>Все объекты</span>
					</div>
					<div class="button__icon">
						<svg class="button__svg arrow-blue" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M9.72386 6.66672H0V5.33338H9.72386L5.5286 1.13812L6.4714 0.195312L12.2761 6.00005L6.4714 11.8048L5.5286 10.862L9.72386 6.66672Z" fill="white"></path>
						</svg>
					</div>
				</a>
			</div>
		</div>
		<div class="main-page__slider">
			<div class="main-page__slider-controls">
				<div class="slider-buttons">
					<div class="slider-buttons__btn">
						<button class="slider-buttons__item">
							<div class="button-icon button-icon--blue" data-slider-button="11">
								<div class="button-icon__container-svg">
									<svg class="button-icon__svg" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M3.27614 6.66672H13V5.33338H3.27614L7.4714 1.13812L6.5286 0.195312L0.723858 6.00005L6.5286 11.8048L7.4714 10.862L3.27614 6.66672Z" fill="#3F3F40"></path>
									</svg>
								</div>
							</div>
						</button>
					</div>
					<div class="slider-buttons__btn">
						<button class="slider-buttons__item">
							<div class="button-icon button-icon--blue" data-slider-button="12">
								<div class="button-icon__container-svg">
									<svg class="button-icon__svg" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M9.72386 6.66672H0V5.33338H9.72386L5.5286 1.13812L6.4714 0.195312L12.2761 6.00005L6.4714 11.8048L5.5286 10.862L9.72386 6.66672Z" fill="white"></path>
									</svg>
								</div>
							</div>
						</button>
					</div>
				</div>
			</div>
			<div class="swiper-container swiper-container--visible swiper-container--visible swiper-container--slide-width-auto swiper-container--slide-height-max" data-slider-id="main" data-slider-prev="11" data-slider-next="12">
				<div class="swiper-wrapper">
				<?php foreach ($arResult['SECTIONS'] as $key => $item) : ?>
					<div class="swiper-slide">
						<a class="main-page__slider-slide" href="/objects/?type=<?= $item['ID'] ?>" data-link="">
							<div class="main-page__slider-image">
								<img class="main-page__slider-img" src="<?= $item['img']['src'] ?>" alt="<?= $item['NAME'] ?>">
							</div>
							<h5 class="main-page__slider-title"><?= $item['NAME'] ?></h5>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>