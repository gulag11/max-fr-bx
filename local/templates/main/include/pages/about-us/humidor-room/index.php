<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<section class="section--first section--grey-extra">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="about-block" data-aos="fade-up">
			<div class="section-bg-photo humidor-top-bg">
				<div class="big-titles white-ttl" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				</div>
				<div class="scroll-down" data-aos="fade-up">
					<div class="scroll-down__line"></div>
				</div>
			</div>
			<div class="nums-block-bottom" data-aos="fade-up">
				<div class="nums-block-bottom__col">
					<div class="nums-block-bottom__big h1 title-font">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/nums1.php'
							]
						);
						?>
					</div>
					<div class="nums-block-bottom__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/nums2.php'
							]
						);
						?>
					</div>
				</div>
				<div class="nums-block-bottom__col">
					<div class="nums-block-bottom__big h1 title-font">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/nums3.php'
							]
						);
						?>
					</div>
					<div class="nums-block-bottom__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/nums4.php'
							]
						);
						?>
					</div>
				</div>
				<div class="nums-block-bottom__col">
					<div class="nums-block-bottom__big h1 title-font">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/nums5.php'
							]
						);
						?>
					</div>
					<div class="nums-block-bottom__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/nums6.php'
							]
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section section--top">
	<div class="container">
		<div class="benefits-block">
			<div class="benefits-cell" data-aos="fade-up">
				<div class="big-titles" data-aos="fade-up">
					<div class="big-titles__subttl">сохраняем качество</div>
					<h2 class="big-titles__ttl h1">Идеальные<br />условия</h2>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="humidor-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M24.5768 32.3358L24.8736 33.0245L25.3268 32.8293V32.3358H24.5768ZM34.5448 32.3358H33.7948V32.8293L34.2481 33.0245L34.5448 32.3358ZM25.3268 8.45766C25.3268 6.11927 27.2224 4.22363 29.5608 4.22363V2.72363C26.394 2.72363 23.8268 5.29085 23.8268 8.45766H25.3268ZM25.3268 32.3358V8.45766H23.8268V32.3358H25.3268ZM17.7037 43.9194C17.7037 39.037 20.6548 34.8422 24.8736 33.0245L24.28 31.647C19.5308 33.6931 16.2037 38.4169 16.2037 43.9194H17.7037ZM29.5608 55.7766C23.0123 55.7766 17.7037 50.4679 17.7037 43.9194H16.2037C16.2037 51.2964 22.1839 57.2766 29.5608 57.2766V55.7766ZM41.418 43.9194C41.418 50.4679 36.1093 55.7766 29.5608 55.7766V57.2766C36.9378 57.2766 42.918 51.2964 42.918 43.9194H41.418ZM34.2481 33.0245C38.4669 34.8422 41.418 39.037 41.418 43.9194H42.918C42.918 38.4169 39.5908 33.6931 34.8416 31.647L34.2481 33.0245ZM33.7948 8.45766V32.3358H35.2948V8.45766H33.7948ZM29.5608 4.22363C31.8992 4.22363 33.7948 6.11927 33.7948 8.45766H35.2948C35.2948 5.29084 32.7276 2.72363 29.5608 2.72363V4.22363Z" fill="#B69659"></path>
					<circle cx="29.5608" cy="44.1959" r="6.67198" stroke="#B69659" stroke-width="1.5"></circle>
					<path d="M29.5608 37.524L29.5608 18.7329" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M38.6969 6.77979H46.6656" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M38.6969 12.0664H46.6656" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M38.6969 17.353H46.6656" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M38.6969 22.6396H46.6656" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M38.6969 27.9263H46.6656" stroke="#B69659" stroke-width="1.5"></path>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits1.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="humidor-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M51.2664 58.3844L51.2664 1.61572L8.7336 1.61572L8.73359 58.3844L51.2664 58.3844Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M13.8082 53.5251C13.8082 53.5251 13.7978 41.9804 13.787 30.0086C13.7803 22.5856 13.7737 15.3269 13.7697 10.8824C13.7675 8.45609 15.7327 6.48821 18.159 6.48353V6.48353C20.5853 6.47884 22.554 8.44197 22.5562 10.8683L22.5735 29.9916L22.5947 53.5082L13.8082 53.5251Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M13.9852 47.6287L22.3063 47.6126" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M13.781 22.0742C13.781 22.0742 15.0698 20.1951 18.249 20.189C21.4282 20.1829 22.4567 22.0575 22.4567 22.0575" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M13.8199 26.8696C13.8199 26.8696 15.1069 28.7437 18.2733 28.7376C21.4398 28.7315 22.4608 26.853 22.4608 26.853" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M25.628 53.5251C25.628 53.5251 25.6176 41.9804 25.6068 30.0086C25.6001 22.5856 25.5935 15.3269 25.5895 10.8824C25.5873 8.45609 27.5524 6.48821 29.9788 6.48353V6.48353C32.4051 6.47884 34.3738 8.44197 34.376 10.8683L34.3932 29.9916L34.4145 53.5082L25.628 53.5251Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M25.8049 47.6287L34.1261 47.6126" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M25.6008 22.0742C25.6008 22.0742 26.8895 20.1951 30.0687 20.189C33.2479 20.1829 34.2765 22.0575 34.2765 22.0575" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M25.6397 26.8696C25.6397 26.8696 26.9267 28.7437 30.0931 28.7376C33.2595 28.7315 34.2806 26.853 34.2806 26.853" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M37.4478 53.5251C37.4478 53.5251 37.4374 41.9804 37.4266 30.0086C37.4199 22.5856 37.4133 15.3269 37.4093 10.8824C37.4071 8.45609 39.3723 6.48821 41.7986 6.48353V6.48353C44.2249 6.47884 46.1936 8.44197 46.1958 10.8683L46.2131 29.9916L46.2343 53.5082L37.4478 53.5251Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M37.6248 47.6287L45.9459 47.6126" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M37.4206 22.0742C37.4206 22.0742 38.7093 20.1951 41.8886 20.189C45.0678 20.1829 46.0963 22.0575 46.0963 22.0575" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M37.4595 26.8696C37.4595 26.8696 38.7465 28.7437 41.9129 28.7376C45.0794 28.7315 46.1004 26.853 46.1004 26.853" stroke="#B69659" stroke-width="1.5"></path>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits3.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits4.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="humidor-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="1.45779" y="8.42334" width="57.0844" height="42.0305" rx="3" stroke="#B69659" stroke-width="1.5"></rect>
					<path d="M51.5835 26.5752V16.3196C51.5835 15.7673 51.1358 15.3196 50.5835 15.3196H9.41647C8.86419 15.3196 8.41647 15.7673 8.41647 16.3196V42.111C8.41647 42.6632 8.86419 43.111 9.41647 43.111H50.5835C51.1358 43.111 51.5835 42.6632 51.5835 42.111V39.4143V33.0418" stroke="#B69659" stroke-width="1.5"></path>
					<rect x="6.67601" y="50.4541" width="6.0733" height="3.12248" stroke="#B69659" stroke-width="1.5"></rect>
					<rect x="47.0306" y="50.4541" width="6.0733" height="3.12248" stroke="#B69659" stroke-width="1.5"></rect>
					<rect x="54.8512" y="26.4019" width="6.0733" height="7.82057" transform="rotate(90 54.8512 26.4019)" stroke="#B69659" stroke-width="1.5"></rect>
					<rect x="16.7704" y="23.1809" width="16.3256" height="3.85208" stroke="#B69659" stroke-width="1.5"></rect>
					<path d="M16.0123 31.6824H20.3441" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M16.0123 36.0154H20.3441" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M22.7673 31.6824H27.0992" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M22.7673 36.0154H27.0992" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M29.5222 31.6824H33.854" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M29.5222 36.0154H33.854" stroke="#B69659" stroke-width="1.5"></path>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits5.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits6.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="humidor-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_2146_310)">
						<path d="M56.0578 44.4373C56.0578 44.4373 44.1046 48.3067 31.7094 52.3193C25.1033 54.4577 18.6229 56.5556 14.0105 58.0487C10.3375 59.2377 6.39706 57.2237 5.20804 53.5507V53.5507C4.01903 49.8777 6.0327 45.9363 9.7057 44.7473L27.4036 39.0182L51.752 31.1362L56.0578 44.4373Z" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M49.8637 46.1375L45.7859 33.5408" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M23.4939 54.9768C23.4939 54.9768 20.9186 53.6523 19.3606 48.8395C17.8026 44.0268 19.2424 41.8433 19.2424 41.8433" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M28.442 53.3171C28.442 53.3171 29.7551 50.7425 28.2034 45.9491C26.6517 41.1557 24.2075 40.2364 24.2075 40.2364" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M22.6851 11.9441C22.6851 13.6619 21.2925 15.0544 19.5747 15.0544C17.8569 15.0544 16.4644 13.6619 16.4644 11.9441C16.4644 9.54309 19.5747 4.73462 19.5747 4.73462C19.5747 4.73462 22.6851 9.54309 22.6851 11.9441Z" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M52.3446 15.7939C52.3446 17.5117 50.9521 18.9043 49.2343 18.9043C47.5165 18.9043 46.1239 17.5117 46.1239 15.7939C46.1239 13.3929 49.2343 8.58447 49.2343 8.58447C49.2343 8.58447 52.3446 13.3929 52.3446 15.7939Z" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M32.8326 26.1411C32.8326 27.3725 31.8344 28.3707 30.6031 28.3707C29.3718 28.3707 28.3736 27.3725 28.3736 26.1411C28.3736 24.4201 30.6031 20.9734 30.6031 20.9734C30.6031 20.9734 32.8326 24.4201 32.8326 26.1411Z" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M11.8621 29.0322C11.8621 30.9524 10.3055 32.509 8.38532 32.509C6.46513 32.509 4.90851 30.9524 4.90851 29.0322C4.90851 26.3484 8.38532 20.9734 8.38532 20.9734C8.38532 20.9734 11.8621 26.3484 11.8621 29.0322Z" stroke="#B69659" stroke-width="1.5"></path>
					</g>
					<defs>
						<clipPath id="clip0_2146_310">
							<rect width="60" height="60" fill="white"></rect>
						</clipPath>
					</defs>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits7.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/benefits8.php'
							]
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="humidor-section">
	<div class="container">
		<div class="humidor-block section--grey">
			<div class="humidor-block__img" data-aos="fade-up">
				<picture>
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/humidor-block.webp" type="image/webp" />
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/humidor-block.jpg" alt="" />
				</picture>
			</div>
			<div class="humidor-block__col">
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
								'PATH' => '/about-us/humidor-room/include/humidor1.php'
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
								'PATH' => '/about-us/humidor-room/include/humidor2.php'
							]
						);
						?>
					</h2>
					<div class="big-titles__txt">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/humidor-room/include/humidor3.php'
							]
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="blockquote" data-aos="fade-up">
			<div class="blockquote__txt only-desktop">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/about-us/humidor-room/include/blockquote_1_desktop.php'
					]
				);
				?>
			</div>
			<div class="blockquote__txt only-mobile">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/about-us/humidor-room/include/blockquote_1_mobile.php'
					]
				);
				?>
			</div>
			<div class="blockquote__name only-desktop">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/about-us/humidor-room/include/blockquote_2_desktop.php'
					]
				);
				?>
			</div>
			<div class="blockquote__name only-mobile">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/about-us/humidor-room/include/blockquote_2_mobile.php'
					]
				);
				?>
			</div>
		</div>
	</div>
</section>
<?php $APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'humidor_slider',
	[
		'ACTIVE_DATE_FORMAT' => 'j F Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'N',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'N',
		'CHECK_DATES' => 'N',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'DISPLAY_DATE' => 'Y',
		'DISPLAY_NAME' => 'Y',
		'DISPLAY_PICTURE' => 'Y',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => ['PREVIEW_PICTURE'],
		'FILE_404' => '',
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_CLUB_SLIDER,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '120',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => 'humidor',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => [],
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'N',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'Y',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'Y',
		'SORT_BY1' => 'SORT',
		'SORT_BY2' => 'ACTIVE_FROM',
		'SORT_ORDER1' => 'ASC',
		'SORT_ORDER2' => 'DESC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'humidor_slider'
	],
	false
);

$filterShopF = [
	'SECTION_ID' => [
		427 // Сигары
	]
];

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'shop_slider',
	[
		'MODALS' => [
			'ADD_TO_CART' => 'add_to_cart',
		],
		'IMG_SIZE' => [
			'width' => 234,
			'height' => 221,
		],
		'link_sec' => '/shop/sigary/',
		'favor' => $arFavor,
		'sbttl' => 'полный ассортимент',
		'ttl' => 'Онлайн-каталог сигар',
		'ACTIVE_DATE_FORMAT' => 'j F Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'N',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'N',
		'CHECK_DATES' => 'N',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'DISPLAY_DATE' => 'Y',
		'DISPLAY_NAME' => 'Y',
		'DISPLAY_PICTURE' => 'Y',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => [
			'NAME',
			'PREVIEW_TEXT',
			'CATALOG_PRICE_1'
		],
		'FILE_404' => '',
		'FILTER_NAME' => 'filterShopF',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_SHOP,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '12',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => 'cigars',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => ['country'],
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'N',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'Y',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'Y',
		'SORT_BY1' => 'SORT',
		'SORT_BY2' => 'ACTIVE_FROM',
		'SORT_ORDER1' => 'ASC',
		'SORT_ORDER2' => 'DESC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'shop_slider'
	],
	false
);
?>
<section class="section section--black">
	<div class="container">
		<div class="certificate-block">
			<div class="certificate-block__col">
				<div class="big-titles txt-white" data-aos="fade-up">
					<div class="big-titles__subttl">в сигарно-винный магазин</div>
					<h2 class="big-titles__ttl h1">Подарочный сертификат</h2>
					<div class="big-titles__txt">Порадуйте ценителей сигарной культуры идеальным подарком. Элегантный дизайн сертификата создаст наилучшие впечатления о подарке. Cертификат может быть любого номинала</div>
				</div><button class="button button--brown certificate-block__btn button--on-black" data-popup-button="7" data-aos="fade-up">Заказать сертификат</button>
			</div>
			<div data-aos="fade-up">
				<picture>
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/certificate.webp" type="image/webp" />
					<img class="certificate-block__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/certificate.jpg" alt="" />
				</picture>
			</div>
		</div>
	</div>
</section>
<?php 

$filterShopSec = [
	'SECTION_ID' => [
		569, // Наборы
	]
];

$APPLICATION->IncludeComponent(
	'bitrix:news.list', 
	'shop_slider',
	[
		'MODALS' => [
			'ADD_TO_CART' => 'add_to_cart',
		],
		'IMG_SIZE' => [
			'width' => 234,
			'height' => 221,
		],
		'link_sec' => '/shop/nabori/',
		'favor' => $arFavor,
		'sbttl' => 'выбор покупателей',
		'ttl' => 'Подарочные наборы',
		'ACTIVE_DATE_FORMAT' => 'j F Y',
		'ADD_SECTIONS_CHAIN' => 'N',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'N',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'N',
		'CHECK_DATES' => 'N',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'DISPLAY_DATE' => 'Y',
		'DISPLAY_NAME' => 'Y',
		'DISPLAY_PICTURE' => 'Y',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => [
			'NAME',
			'PREVIEW_TEXT',
			'CATALOG_PRICE_1'
		],
		'FILE_404' => '',
		'FILTER_NAME' => 'filterShopSec',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_SHOP,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '12',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => 'sets',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => ['country'],
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'N',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'Y',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'Y',
		'SORT_BY1' => 'SORT',
		'SORT_BY2' => 'ACTIVE_FROM',
		'SORT_ORDER1' => 'ASC',
		'SORT_ORDER2' => 'DESC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'shop_slider'
	],
	false
);

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'info_list',
	[
		'ajax' => $ajax,
		'sec_class' => 'section--bottom',
		'ACTIVE_DATE_FORMAT' => 'd F Y',
		'ADD_SECTIONS_CHAIN' => 'Y',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_ADDITIONAL' => '',
		'AJAX_OPTION_HISTORY' => 'N',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'N',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'N',
		'CACHE_TIME' => '36000000',
		'CACHE_TYPE' => 'N',
		'CHECK_DATES' => 'N',
		'DETAIL_URL' => '',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'DISPLAY_DATE' => 'Y',
		'DISPLAY_NAME' => 'Y',
		'DISPLAY_PICTURE' => 'Y',
		'DISPLAY_PREVIEW_TEXT' => 'N',
		'DISPLAY_TOP_PAGER' => 'N',
		'FIELD_CODE' => [
			'NAME',
			'DETAIL_PICTURE',
			'DISPLAY_ACTIVE_FROM'
		],
		'FILE_404' => '',
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_INFO,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '3',
		'PAGER_BASE_LINK_ENABLE' => 'N',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'N',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '.default',
		'PAGER_TITLE' => 'Новости',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => ['read_time'],
		'SET_BROWSER_TITLE' => 'N',
		'SET_LAST_MODIFIED' => 'N',
		'SET_META_DESCRIPTION' => 'N',
		'SET_META_KEYWORDS' => 'N',
		'SET_STATUS_404' => 'Y',
		'SET_TITLE' => 'N',
		'SHOW_404' => 'Y',
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER1' => 'DESC',
		'SORT_ORDER2' => 'DESC',
		'STRICT_SECTION_CHECK' => 'N',
		'COMPONENT_TEMPLATE' => 'info_list'
	],
	false
);

include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>