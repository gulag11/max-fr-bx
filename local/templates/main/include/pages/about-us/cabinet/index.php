<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} 
?>
<section class="section--first section--grey-extra section--pb120">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="about-block" data-aos="fade-up">
			<div class="section-bg-photo lounge-main-section cabinet-main-bg">
				<div class="big-titles white-ttl only-desktop" data-aos="fade-up">
					<div class="big-titles__subttl">приватность и сервис</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				</div>
				<div class="big-titles white-ttl only-mobile" data-aos="fade-up">
					<div class="big-titles__subttl">приватность и сервис</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				</div><button class="button button--brown button--on-black" data-popup-button="1" data-aos="fade-up">Забронировать стол</button>
			</div>
		</div>
	</div>
</section>
<section class="section--top">
	<div class="container">
		<div class="benefits-block before-interior-block">
			<div class="benefits-cell" data-aos="fade-up">
				<div class="big-titles" data-aos="fade-up">
					<div class="big-titles__subttl">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits1.php'
							]
						);
						?>
					</div>
					<h2 class="big-titles__ttl h1">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits2.php'
							]
						);
						?>
					</h2>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="cabinet-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12 20.2986H48.8367V51.0001H12V20.2986Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M42.9873 20.1124V13.5687C42.9873 6.6272 37.3601 1 30.4186 1V1C23.4771 1 17.8499 6.6272 17.8499 13.5687V20.1124" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M39.1196 20.2985V13.9709C39.1196 9.1654 35.2239 5.26978 30.4184 5.26978V5.26978C25.6129 5.26978 21.7173 9.1654 21.7173 13.9709V20.2985" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M32.4207 35.7422L31.9778 35.1369L31.6292 35.392L31.6749 35.8216L32.4207 35.7422ZM28.4162 35.742L29.162 35.8214L29.2077 35.3918L28.8592 35.1367L28.4162 35.742ZM27.7829 41.691L27.0371 41.6116L26.9488 42.441H27.7829V41.691ZM33.054 41.691V42.441H33.888L33.7998 41.6116L33.054 41.691ZM33.0626 33.0014C33.0626 33.8778 32.6369 34.6546 31.9778 35.1369L32.8636 36.3475C33.8921 35.5949 34.5626 34.3764 34.5626 33.0014H33.0626ZM30.4186 30.3574C31.8788 30.3574 33.0626 31.5412 33.0626 33.0014H34.5626C34.5626 30.7127 32.7072 28.8574 30.4186 28.8574V30.3574ZM27.7747 33.0014C27.7747 31.5412 28.9584 30.3574 30.4186 30.3574V28.8574C28.13 28.8574 26.2747 30.7127 26.2747 33.0014H27.7747ZM28.8592 35.1367C28.2002 34.6545 27.7747 33.8777 27.7747 33.0014H26.2747C26.2747 34.3762 26.9449 35.5946 27.9732 36.3472L28.8592 35.1367ZM28.5287 41.7704L29.162 35.8214L27.6704 35.6626L27.0371 41.6116L28.5287 41.7704ZM33.054 40.941H27.7829V42.441H33.054V40.941ZM31.6749 35.8216L32.3082 41.7704L33.7998 41.6116L33.1665 35.6628L31.6749 35.8216Z" fill="#B69659"></path>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits3.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits4.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="cabinet-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11.123 22.533V5.87305C11.123 3.11163 13.3616 0.873047 16.123 0.873047H43.877C46.6384 0.873047 48.877 3.11162 48.877 5.87305V22.533" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M14.4068 46.3786V52.6283H45.5932V46.3786M14.4068 46.3786V34.3794C14.4068 32.7225 15.7499 31.3794 17.4068 31.3794H42.5932C44.2501 31.3794 45.5932 32.7225 45.5932 34.3794V46.3786M14.4068 46.3786H45.5932" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M8.63724 22.0059C11.8237 22.0059 14.4068 24.589 14.4068 27.7754L14.4068 52.629L7.53282 52.629C5.9648 52.629 4.66128 51.4214 4.54157 49.858L2.88452 28.2159C2.62801 24.8657 5.27723 22.0059 8.63724 22.0059V22.0059Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M51.3628 22.0059C48.1764 22.0059 45.5933 24.589 45.5933 27.7754L45.5933 52.629L52.4672 52.629C54.0353 52.629 55.3388 51.4214 55.4585 49.858L57.1155 28.2159C57.3721 24.8657 54.7228 22.0059 51.3628 22.0059V22.0059Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M8.90796 52.6279H14.4365V58.8989H8.90796V52.6279Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M45.5636 52.6279H51.0922V58.8989H45.5636V52.6279Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M23.7928 8.21826V12.9488" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M26.1581 10.5833L21.4275 10.5833" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M23.7928 20.207V24.9376" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M26.1581 22.572L21.4275 22.572" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M36.2073 8.21826V12.9488" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M38.5726 10.5833L33.842 10.5833" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M36.2073 20.207V24.9376" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M38.5726 22.572L33.842 22.572" stroke="#B69659" stroke-width="1.5"></path>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits5.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits6.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up"><svg class="cabinet-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="60" height="60" fill="#FAFAFA"></rect>
					<path d="M10.1845 8.26392H49.8155V32.7931H10.1845V8.26392Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M6.84303 38.0623H20.6991V42.504H6.84303V38.0623Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M57.7989 56.4078V53.4001M2.20117 56.4078V53.4001M2.20117 53.4001V42.5039H30M2.20117 53.4001H30M57.7989 53.4001V42.5039H30M57.7989 53.4001H30M30 53.4001V42.5039" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M28.1749 32.7925H31.8251V42.5038H28.1749V32.7925Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M33.471 46.04L33.471 50.6084" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M26.3941 46.04L26.3941 50.6084" stroke="#B69659" stroke-width="1.5"></path>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits7.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits8.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="cabinet-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M19.5894 7.73152C19.5894 5.73835 21.2052 4.12256 23.1984 4.12256H28.7526C30.7206 4.12256 32.3161 5.71798 32.3161 7.68602V29.5031L28.9279 26.86C23.0346 22.2628 19.5894 15.2058 19.5894 7.73152V7.73152Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M7.73167 40.3652C5.7385 40.3652 4.12271 38.7494 4.12271 36.7563L4.12271 31.202C4.12271 29.234 5.71813 27.6386 7.68617 27.6386L29.5032 27.6386L26.8602 31.0267C22.263 36.92 15.206 40.3652 7.73167 40.3652V40.3652Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M40.3202 52.2685C40.3202 54.2617 38.7044 55.8774 36.7113 55.8774H31.157C29.189 55.8774 27.5936 54.282 27.5936 52.314V30.4969L30.9817 33.14C36.875 37.7372 40.3202 44.7942 40.3202 52.2685V52.2685Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M52.2683 19.6343C54.2615 19.6343 55.8773 21.2501 55.8773 23.2432L55.8773 28.7975C55.8773 30.7655 54.2819 32.3609 52.3138 32.3609L30.4968 32.3609L33.1398 28.9728C37.737 23.0795 44.794 19.6343 52.2683 19.6343V19.6343Z" stroke="#B69659" stroke-width="1.5"></path>
					<circle cx="30" cy="30.497" r="6.4565" fill="#FAFAFA" stroke="#B69659" stroke-width="1.5"></circle>
					<circle cx="30" cy="30.497" r="2.85834" stroke="#B69659" stroke-width="1.5"></circle>
					<path d="M19.9347 6.50386C14.1304 8.4895 9.49446 12.4709 6.59696 17.4607" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M20.4137 11.3773C16.1819 13.0968 12.7993 16.1622 10.6382 19.9291" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M15.4366 22.1443C16.9201 19.8991 19.2857 17.6683 21.8421 16.5029" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M8.04469 40.3653C10.0303 46.1697 14.0117 50.8056 19.0015 53.7031" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M12.9183 39.8864C14.6377 44.1183 17.7031 47.5008 21.47 49.6619" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M23.6851 44.8635C21.4399 43.38 19.2091 41.0143 18.0437 38.458" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M40.6938 52.9258C46.4981 50.9402 51.134 46.9588 54.0315 41.969" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M40.2148 48.0524C44.4467 46.3329 47.8292 43.2675 49.9903 39.5006" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M45.1919 37.2854C43.7084 39.5306 41.3428 41.7613 38.7865 42.9268" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M53.1138 19.6342C51.1281 13.8299 47.1467 9.19393 42.157 6.29642" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M48.2402 20.1131C46.5207 15.8813 43.4553 12.4987 39.6884 10.3376" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M37.4733 15.1361C39.7186 16.6196 41.9493 18.9852 43.1147 21.5416" stroke="#B69659" stroke-width="1.5"></path>
				</svg>
				<div class="benefits-cell__info">
					<div class="benefits-cell__ttl h3">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits9.php'
							]
						);
						?>
					</div>
					<div class="benefits-cell__txt">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/benefits10.php'
							]
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section--bottom section--grey interior-block">
	<div class="container">
		<?php $APPLICATION->IncludeComponent(
			'bitrix:news.list',
			'lounge_slider',
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
				'PARENT_SECTION_CODE' => 'cabinet',
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
				'COMPONENT_TEMPLATE' => 'lounge_slider'
			],
			false
		); ?>
		<div class="interior-block__col">
			<div class="big-titles" data-aos="fade-up">
				<div class="big-titles__subttl">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/about-us/cabinet/include/interior1.php'
						]
					);
					?>
				</div>
				<h2 class="big-titles__ttl h1">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/about-us/cabinet/include/interior2.php'
						]
					);
					?>
				</h2>
			</div>
			<div class="big-titles__txt" data-aos="fade-up">
				<?php $APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/about-us/cabinet/include/interior3_1.php'
					]
				);
				?>
				<a class="anchor" href="/club-card/">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/about-us/cabinet/include/interior3_2.php'
						]
					);
					?>
				</a>

				<?php $APPLICATION->IncludeComponent(
					'bitrix:main.include',
					'',
					[
						'AREA_FILE_SHOW' => 'file',
						'AREA_FILE_SUFFIX' => 'inc',
						'EDIT_TEMPLATE' => '',
						'PATH' => '/about-us/cabinet/include/interior3_3.php'
					]
				);
				?>
			</div>
		</div>
	</div>
</section>
<section class="section lounge-section">
	<div class="container">
		<div class="two-cols-block">
			<div class="two-cols-block__col">
				<div class="cabinet-col two-cols-block__pl">
					<div class="big-titles" data-aos="fade-up">
						<div class="big-titles__subttl">
							<?php $APPLICATION->IncludeComponent(
								'bitrix:main.include',
								'',
								[
									'AREA_FILE_SHOW' => 'file',
									'AREA_FILE_SUFFIX' => 'inc',
									'EDIT_TEMPLATE' => '',
									'PATH' => '/about-us/cabinet/include/two_cols_1.php'
								]
							);
							?>
						</div>
						<h2 class="big-titles__ttl h1">
							<?php $APPLICATION->IncludeComponent(
								'bitrix:main.include',
								'',
								[
									'AREA_FILE_SHOW' => 'file',
									'AREA_FILE_SUFFIX' => 'inc',
									'EDIT_TEMPLATE' => '',
									'PATH' => '/about-us/cabinet/include/two_cols_2.php'
								]
							);
							?>
						</h2>
					</div>
					<div class="two-cols-block__txt" data-aos="fade-up">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/two_cols_3.php'
							]
						);
						?>
					</div>
					<div data-aos="fade-up">
						<a class="button--clean two-cols-block__link" data-nolink="" href="/file-spec.pdf" target="_blank">узнать больше</a>
					</div>
				</div>
				<div class="only-desktop" data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/cabinet-1.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cabinet-1.jpg" alt="" />
					</picture>
				</div>
				<div class="only-mobile" data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/cabinet-2.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cabinet-2.jpg" alt="" />
					</picture>
				</div>
			</div>
			<div class="two-cols-block__col">
				<div class="only-desktop" data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/cabinet-2.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cabinet-2.jpg" alt="" />
					</picture>
				</div>
				<div class="only-mobile" data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/cabinet-1.webp" type="image/webp" />
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cabinet-1.jpg" alt="" />
					</picture>
				</div>
				<div class="txt-block cabinet-col2" data-aos="fade-up">
					<div class="two-cols-block__txt">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/about-us/cabinet/include/two_cols_4.php'
							]
						);
						?>
					</div>
					<button class="button button--brown" data-popup-button="8">Получить консультацию</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-bg-photo cabinet-section-bg">
	<div class="big-titles white-ttl" data-aos="fade-up">
		<div class="big-titles__subttl">
			<?php $APPLICATION->IncludeComponent(
				'bitrix:main.include',
				'',
				[
					'AREA_FILE_SHOW' => 'file',
					'AREA_FILE_SUFFIX' => 'inc',
					'EDIT_TEMPLATE' => '',
					'PATH' => '/about-us/cabinet/include/btitles_1.php'
				]
			);
			?>
		</div>
		<h2 class="big-titles__ttl h1">
			<?php $APPLICATION->IncludeComponent(
				'bitrix:main.include',
				'',
				[
					'AREA_FILE_SHOW' => 'file',
					'AREA_FILE_SUFFIX' => 'inc',
					'EDIT_TEMPLATE' => '',
					'PATH' => '/about-us/cabinet/include/btitles_2.php'
				]
			);
			?>
		</h2>
	</div>
	<div class="two-cols-block__txt txt-white only-desktop" data-aos="fade-up">
		<?php $APPLICATION->IncludeComponent(
			'bitrix:main.include',
			'',
			[
				'AREA_FILE_SHOW' => 'file',
				'AREA_FILE_SUFFIX' => 'inc',
				'EDIT_TEMPLATE' => '',
				'PATH' => '/about-us/cabinet/include/btitles_3_desktop.php'
			]
		);
		?>
	</div>
	<div class="two-cols-block__txt txt-white only-mobile" data-aos="fade-up">
		<?php $APPLICATION->IncludeComponent(
			'bitrix:main.include',
			'',
			[
				'AREA_FILE_SHOW' => 'file',
				'AREA_FILE_SUFFIX' => 'inc',
				'EDIT_TEMPLATE' => '',
				'PATH' => '/about-us/cabinet/include/btitles_3_mobile.php'
			]
		);
		?>
	</div>
	<button class="button button--brown button--on-black" data-popup-button="1" data-aos="fade-up">Забронировать стол</button>
</section>
<section class="section" data-anchor-target="club-card">
	<div class="container">
		<div class="club-card-block">
			<div class="club-card-block__col">
				<div class="big-titles mob-and-desk" data-aos="fade-up">
					<div class="big-titles__subttl">специальные условия</div>
					<h2 class="big-titles__ttl h1">Клубная<br />карта</h2>
					<div class="big-titles__txt">Внимание и первоклассный уровень сервиса в сочетании с дополнительными привилегиями создают неповторимую атмосферу комфорта</div>
				</div>
				<div class="big-titles only-tablet" data-aos="fade-up">
					<div class="big-titles__subttl">специальные условия</div>
					<h2 class="big-titles__ttl h1">Клубная карта</h2>
					<div class="big-titles__txt">Внимание и первоклассный уровень сервиса в сочетании с дополнительными привилегиями создают неповторимую атмосферу комфорта</div>
				</div>
				<div data-aos="fade-up">
					<a class="two-cols-block__link" href="/club-card/">узнать больше</a>
				</div>
			</div>
			<div class="club-card" data-aos="fade-up"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/card-logo.png" alt=""></div>
		</div>
	</div>
</section>
<?php $APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'rules_visit_club',
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
		'FIELD_CODE' => ['NAME',],
		'FILE_404' => '',
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_RULES_VISIT_CLUB,
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
		'PARENT_SECTION_CODE' => '',
		'PREVIEW_TRUNCATE_LEN' => '',
		'PROPERTY_CODE' => ['li'],
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
		'COMPONENT_TEMPLATE' => 'rules_visit_club'
	],
	false
);

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'info_list',
	[
		'ajax' => $ajax,
		'sec_class' => 'section--top',
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

$filterShopF = [
	'SECTION_ID' => [
		427 // Сигары
	]
];

$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'shop_slider',
	[
		'sbttl' => 'полный ассортимент',
		'ttl' => 'Онлайн-каталог сигар',
		'favor' => $arFavor,
		'IMG_SIZE' => [
			'width' => 234,
			'height' => 221,
		],
		'link_sec' => '/shop/sigary/',
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
		'MODALS' => [
			'ADD_TO_CART' => 'add_to_cart',
		],
		'FILE_404' => '',
		'FILTER_NAME' => 'filterShopF',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_SHOP,
		'IBLOCK_TYPE' => 'content',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
		'INCLUDE_SUBSECTIONS' => 'N',
		'MESSAGE_404' => '',
		'NEWS_COUNT' => '9',
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

include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>
