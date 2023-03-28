<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult['ITEMS']) : ?>
	<section class="section section--grey reviews-section">
		<div class="container">
			<div class="big-titles" data-aos="fade-up">
				<div class="big-titles__subttl">благодарим за обратную связь</div>
				<h2 class="big-titles__ttl h1">Отзывы гостей</h2>
			</div>
			<div class="reviews-section__row">
				<div class="reviews-section__slider" data-aos="fade-up">
					<div class="reviews-section__col only-desktop">
						<button class="slider-control button--clean" id="reviews-slider-prev">
							<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.57227 0.714355L1.28655 7.00007L7.57227 13.2858" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button>
					</div>
					<div class="swiper-container" id="reviews-slider">
						<div class="swiper-wrapper">
							<?php foreach ($arResult['ITEMS'] as $key => $item) :
								$rating = $item['PROPERTIES']['rating']['VALUE']; ?>
								<div class="swiper-slide reviews-section__slider-slide">
									<div class="review-card">
										<div class="review-card__top">
											<div class="review-card__name"><?= $item['NAME'] ?></div>
											<?php if ($rating) : ?>
												<div class="review-card__grade">
													<?php for ($i = 1; $i <= 5; $i++) :
														if ($i <= $rating) {
															$class = 'review-card__star active';
														} else {
															$class = '';
														} ?>
														<svg class="<?= $class; ?>" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M8.33426 1.04894C8.54381 0.404018 9.45619 0.404018 9.66574 1.04894L11.088 5.42614C11.1817 5.71456 11.4505 5.90983 11.7537 5.90983H16.3562C17.0343 5.90983 17.3162 6.77756 16.7676 7.17614L13.0442 9.8814C12.7988 10.0597 12.6962 10.3756 12.7899 10.664L14.2121 15.0412C14.4217 15.6862 13.6835 16.2224 13.1349 15.8239L9.41145 13.1186C9.16611 12.9403 8.83389 12.9403 8.58855 13.1186L4.86508 15.8239C4.31648 16.2224 3.57834 15.6862 3.78789 15.0412L5.21013 10.664C5.30384 10.3756 5.20118 10.0597 4.95584 9.8814L1.23236 7.17614C0.683764 6.77756 0.965707 5.90983 1.64381 5.90983H6.24628C6.54954 5.90983 6.81831 5.71456 6.91202 5.42614L8.33426 1.04894Z" fill="#DCDCDC"></path>
														</svg>
													<?php endfor; ?>
												</div>
											<?php endif; ?>
										</div>
										<div class="review-card__txt"><?= $item['PREVIEW_TEXT'] ?></div>
										<?php if ($item['DETAIL_TEXT']) : ?>
											<button class="button--clean two-cols-block__link only-desktop" data-popup-button="19<?= $item['ID'] ?>" btn="btn">Читать полностью</button>
											<button class="button--clean review-card__btn only-mobile" data-popup-button="19<?= $item['ID'] ?>">Читать полностью</button>
										<?php endif; ?>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="sliders-pagination" id="reviews-slider-pagination"></div>
					</div>
					<div class="reviews-section__col only-desktop">
						<button class="slider-control button--clean" id="reviews-slider-next">
							<svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button>
					</div>
				</div>
				<div class="reviews-section__grade" data-aos="fade-up">
					<div class="reviews-section__grade-big"><?= $arResult['rat']; ?></div>
					<div class="reviews-section__grade-txt">Средняя оценка <?= $arResult['rat']; ?> из 5<br>на основе <?= count($arResult['ITEMS']); ?> отзывов</div>
				</div>
			</div>
		</div>
	</section>
	<?php $this->SetViewTarget('reviews_modals'); ?>
	<?php foreach ($arResult['ITEMS'] as $key => $item) :
		$rating = $item['PROPERTIES']['rating']['VALUE']; ?>
		<div class="modal modal--right review-popup" data-popup="19<?= $item['ID'] ?>">
			<div class="review-popup__top">
				<div class="review-popup__ttl h4 title-font">Отзывы</div>
				<button class="button--clean modal__close" data-modal-close></button>
			</div>
			<div class="review-popup__body">
				<div class="review-card__top">
					<div class="review-card__name"><?= $item['NAME'] ?></div>
					<?php if ($rating) : ?>
						<div class="review-card__grade">
							<?php for ($i = 1; $i <= 5; $i++) :
								if ($i <= $rating) {
									$class = 'review-card__star active';
								} else {
									$class = '';
								} ?>
								<svg class="<?= $class; ?>" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.33426 1.04894C8.54381 0.404018 9.45619 0.404018 9.66574 1.04894L11.088 5.42614C11.1817 5.71456 11.4505 5.90983 11.7537 5.90983H16.3562C17.0343 5.90983 17.3162 6.77756 16.7676 7.17614L13.0442 9.8814C12.7988 10.0597 12.6962 10.3756 12.7899 10.664L14.2121 15.0412C14.4217 15.6862 13.6835 16.2224 13.1349 15.8239L9.41145 13.1186C9.16611 12.9403 8.83389 12.9403 8.58855 13.1186L4.86508 15.8239C4.31648 16.2224 3.57834 15.6862 3.78789 15.0412L5.21013 10.664C5.30384 10.3756 5.20118 10.0597 4.95584 9.8814L1.23236 7.17614C0.683764 6.77756 0.965707 5.90983 1.64381 5.90983H6.24628C6.54954 5.90983 6.81831 5.71456 6.91202 5.42614L8.33426 1.04894Z" fill="#DCDCDC"></path>
								</svg>
							<?php endfor; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="review-popup__body-txt">
					<?= $item['DETAIL_TEXT']; ?>
				</div>
			</div>
			<div class="review-popup__bottom">
				<div class="review-popup__bottom-count">
					Вы смотрите <span><?= $key + 1; ?></span>&nbsp;из <span><?= count($arResult['ITEMS']); ?> </span>отзывов
				</div>
				<button class="button button--brown review-popup__bottom-btn" data-popup-button="19<?= $item['next'] ?>">Следующий отзыв</button>
				<button class="button button--brown-border review-popup__bottom-btn2" data-popup-button="19<?= $item['prev'] ?>">Предыдущий отзыв</button>
			</div>
		</div>
	<?php endforeach; ?>
	<?php $this->EndViewTarget(); ?>
<?php endif; ?>