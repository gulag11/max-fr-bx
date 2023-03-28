<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<section class="section--first section--bottom">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="contacts-block card-page-top">
			<div class="contacts-block__top">
				<div class="big-titles" data-aos="fade-up">
					<div class="big-titles__subttl">Для постоянных гостей</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
					<div class="big-titles__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/club-card/include/bigTtl.php'
							]
						);
						?>
					</div>
				</div>
				<div class="scroll-down" data-aos="fade-up">
					<div class="scroll-down__line"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section--grey">
	<div class="container">
		<div data-aos="fade-up">
			<div class="club-card on-page">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/card-logo.png" alt="">
			</div>
		</div>
		<div class="benefits-top" data-aos="fade-up">
			<div class="benefits-top__item">
				<div class="benefits-top__ico">
					<svg class="card-benefit-ico-1" width="54" height="60" viewBox="0 0 54 60" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M26.7316 0.00546275C26.3773 0.0500521 26.116 0.357865 26.1299 0.714575V8.96266C26.1275 9.14677 26.1989 9.32417 26.3279 9.45506C26.4569 9.58595 26.6333 9.65979 26.8175 9.65979C27.0016 9.65979 27.178 9.58595 27.307 9.45506C27.436 9.32417 27.5074 9.14677 27.505 8.96266V0.714575C27.5127 0.512727 27.4312 0.317581 27.2825 0.180933C27.1334 0.0442858 26.932 -0.0199568 26.7316 0.00545057L26.7316 0.00546275ZM3.40467 3.44221C3.13474 3.45276 2.89597 3.62009 2.79431 3.86989C2.69267 4.12018 2.74637 4.40641 2.93192 4.60251L8.43084 10.7884C8.55359 10.9251 8.72523 11.0075 8.90838 11.0176C9.09201 11.0277 9.2718 10.9649 9.40845 10.8421C9.5451 10.7199 9.62757 10.5477 9.63764 10.3646C9.6477 10.1814 9.58442 10.0016 9.46215 9.86499L3.96323 3.67859C3.82371 3.51749 3.61754 3.43024 3.40466 3.44221H3.40467ZM50.1224 3.44221C49.9474 3.46043 49.7858 3.5453 49.6712 3.67859L44.1723 9.86499C44.05 10.0016 43.9868 10.1814 43.9968 10.3646C44.0069 10.5477 44.0894 10.7199 44.226 10.8421C44.3626 10.9649 44.5424 11.0277 44.7261 11.0176C44.9092 11.0075 45.0809 10.9251 45.2036 10.7884L50.7025 4.60251C50.9049 4.39251 50.9533 4.07799 50.8229 3.81716C50.6925 3.55634 50.412 3.40579 50.1224 3.44223V3.44221ZM10.2131 16.524C10.0084 16.5513 9.82668 16.6697 9.7188 16.8462L0.0961438 33.3426C-0.0702318 33.6231 -0.0165275 33.9822 0.225122 34.2018L26.3444 58.9464C26.5679 59.1521 26.8996 59.1871 27.1609 59.0322C27.207 59.0082 27.2501 58.9795 27.2899 58.9464L53.4092 34.2018C53.6509 33.9822 53.7046 33.6231 53.5382 33.3426L43.9156 16.8462C43.7861 16.6395 43.5574 16.5173 43.3138 16.524H10.3431C10.3004 16.5196 10.2573 16.5196 10.2146 16.524H10.2131ZM11.2655 17.8985H25.528L16.0128 32.139L11.2655 17.8985ZM28.1056 17.8985H42.3681L37.621 32.139L28.1056 17.8985ZM26.8168 18.4355L36.5469 33.0196H17.0863L26.8168 18.4355ZM10.1486 18.8651L14.8741 33.0196H1.90038L10.1486 18.8651ZM43.4851 18.8651L51.7332 33.0196H38.7594L43.4851 18.8651ZM2.43676 34.3943H15.3675L24.797 55.5733L2.43676 34.3943ZM16.8711 34.3943H36.7613L26.8165 56.7762L16.8711 34.3943ZM38.2649 34.3943H51.1957L28.8347 55.5733L38.2649 34.3943Z" fill="#B69659"></path>
					</svg>
				</div>
				Максимум привилегий
			</div>
			<div class="benefits-top__item">
				<div class="benefits-top__ico">
					<svg class="card-benefit-ico-2" width="64" height="39" viewBox="0 0 64 39" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.75" y="0.75" width="62.5" height="37.5" rx="4.25" stroke="#B69659" stroke-width="1.5"></rect>
						<line x1="1" y1="11.25" x2="63" y2="11.25" stroke="#B69659" stroke-width="1.5"></line>
						<line x1="32" y1="26.25" x2="58" y2="26.25" stroke="#B69659" stroke-width="1.5"></line>
					</svg>
				</div>
				Клубная атрибутика
			</div>
			<div class="benefits-top__item">
				<div class="benefits-top__ico">
					<svg class="card-benefit-ico-3" width="60" height="66" viewBox="0 0 60 66" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.75" y="6.75" width="58.5" height="58.5" stroke="#B69659" stroke-width="1.5"></rect>
						<line x1="12.75" y1="-3.27836e-08" x2="12.75" y2="14" stroke="#B69659" stroke-width="1.5"></line>
						<line x1="48.75" y1="-3.27836e-08" x2="48.75" y2="14" stroke="#B69659" stroke-width="1.5"></line>
						<path d="M23.5 30.5L31 23V49" stroke="#B69659" stroke-width="1.5"></path>
					</svg>
				</div>
				Действует 1 год
			</div>
		</div>
		<button class="button button--brown benefits-top__btn" data-popup-button="8" data-aos="fade-up">Узнать стоимость</button>
		<div data-aos="fade-up">
			<div class="benefits-top__line"></div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="benefit-cards" data-aos="fade-up">
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit1.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit2.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit3.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit4.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit5.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit6.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit7.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit8.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit9.php'
					]
				);
				?>
			</div>
			<div class="benefit-card">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/club-card/include/benefit10.php'
					]
				);
				?>
			</div>
		</div>
	</div>
</section>
<section class="section--bottom">
	<div class="container">
		<div class="partners-block">
			<div class="big-titles" data-aos="fade-up">
				<div class="big-titles__subttl">
					<?php
					$APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/club-card/include/partners_sub_ttl.php'
						]
					);
					?>
				</div>
				<h2 class="big-titles__ttl h1">
					<?php
					$APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/club-card/include/partners_ttl.php'
						]
					);
					?>
				</h2>
			</div>
			<div class="certificates-block restaurant-page-block">
				<div class="certificates-block__row">
					<div class="certificates-block__info">
						<div class="small-titles" data-aos="fade-up">
							<h3 class="small-titles__ttl h2">
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/indever.php'
									]
								);
								?>
							</h3>
							<div class="small-titles__txt">
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/indever_txt.php'
									]
								);
								?>
							</div>
						</div>
						<ul data-aos="fade-up">
							<li>
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/indever_li_1.php'
									]
								);
								?>
							</li>
							<li>
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/indever_li_2.php'
									]
								);
								?>
							</li>
							<li>
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/indever_li_3.php'
									]
								);
								?>
							</li>
							<li>
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/indever_li_4.php'
									]
								);
								?>
							</li>
						</ul>
					</div>
					<div data-aos="fade-up">
						<picture>
							<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/partners-1.webp" type="image/webp" />
							<img class="certificates-block__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners-1.jpg" alt="" />
						</picture>
					</div>
				</div>
				<div class="certificates-block__row">
					<div data-aos="fade-up">
						<picture>
							<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/partners-2.webp" type="image/webp" />
							<img class="certificates-block__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners-2.jpg" alt="" />
						</picture>
					</div>
					<div class="certificates-block__info">
						<div class="small-titles" data-aos="fade-up">
							<h3 class="small-titles__ttl h2">
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/certificates_ttl.php'
									]
								);
								?>
							</h3>
							<div class="small-titles__txt">
								<?php
								$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/club-card/include/certificates_txt.php'
									]
								);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
