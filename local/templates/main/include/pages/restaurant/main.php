<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<section class="section--first section--grey-extra">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="about-block">
			<div class="restaurant-main-bg lounge-main-section" data-aos="fade-up">
				<div class="big-titles white-ttl" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				</div>
				<button class="button button--brown button--on-black" data-popup-button="1" data-aos="fade-up">Забронировать стол</button>
			</div>
			<?php
			$APPLICATION->IncludeComponent(
				'bitrix:catalog.section.list',
				'menu',
				[
					'ADD_SECTIONS_CHAIN' => 'Y',
					'CACHE_FILTER' => 'N',
					'CACHE_GROUPS' => 'N',
					'CACHE_TIME' => '36000000',
					'CACHE_TYPE' => 'N',
					'COUNT_ELEMENTS' => 'Y',
					'COUNT_ELEMENTS_FILTER' => 'CNT_ACTIVE',
					'FILTER_NAME' => 'sectionsFilter',
					'IBLOCK_ID' => IB_ID_MENU,
					'IBLOCK_TYPE' => 'Restaurant',
					'SECTION_CODE' => '',
					'SECTION_FIELDS' => [
						'CODE',
						'NAME',
						'PICTURE',
						'SECTION_CODE',
						'SORT'
					],
					'SECTION_ID' => '',
					'SECTION_URL' => '#SITE_DIR#/restaurant/#SECTION_CODE#/',
					'SECTION_USER_FIELDS' => [],
					'SHOW_PARENT_NAME' => 'Y',
					'TOP_DEPTH' => '1',
					'VIEW_MODE' => 'LINE',
					'COMPONENT_TEMPLATE' => 'menu'
				],
				false
			);
			?>
		</div>
	</div>
</section>
<section class="section--top">
	<div class="container">
		<div class="benefits-block restaurant-benefit-fix only-desktop">
			<div class="benefits-cell" data-aos="fade-up">
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
								'PATH' => '/restaurant/include/big_ben_1_1.php'
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
								'PATH' => '/restaurant/include/big_ben_1_2.php'
							]
						);
						?>
					</h2>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_1_desk.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_2_1.php'
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
								'PATH' => '/restaurant/include/big_ben_2_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_2_desk.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_3_1.php'
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
								'PATH' => '/restaurant/include/big_ben_3_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_3_desk.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_4_1.php'
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
								'PATH' => '/restaurant/include/big_ben_4_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_4_desk.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_5_1.php'
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
								'PATH' => '/restaurant/include/big_ben_5_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="benefits-block only-mobile">
			<div class="benefits-cell" data-aos="fade-up">
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
								'PATH' => '/restaurant/include/big_ben_1_1.php'
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
								'PATH' => '/restaurant/include/big_ben_1_2.php'
							]
						);
						?>
					</h2>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_1_mob.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_2_1.php'
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
								'PATH' => '/restaurant/include/big_ben_2_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_2_mob.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_3_1.php'
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
								'PATH' => '/restaurant/include/big_ben_3_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_3_mob.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_4_1.php'
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
								'PATH' => '/restaurant/include/big_ben_4_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/rest_ben_4_mob.php'; ?>
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
								'PATH' => '/restaurant/include/big_ben_5_1.php'
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
								'PATH' => '/restaurant/include/big_ben_5_2.php'
							]
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section before-interior-block">
	<div class="container">
		<div class="certificates-block restaurant-page-block">
			<div class="certificates-block__row">
				<div class="certificates-block__info">
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
									'PATH' => '/restaurant/include/block_2_1.php'
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
									'PATH' => '/restaurant/include/block_2_ttl.php'
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
									'PATH' => '/restaurant/include/block_2_txt.php'
								]
							);
							?>
						</div>
					</div>
					<div class="restaurant-page-block__btn" data-aos="fade-up">
						<a class="two-cols-block__link" href="/restaurant/main_menu/">Смотреть меню</a>
					</div>
				</div>
				<div data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/webp/restaurant-1.webp" type="image/webp" />
						<img class="certificates-block__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/restaurant-1.jpg" alt="" />
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section--bottom section--grey interior-block">
	<div class="container">
		<?php $APPLICATION->IncludeComponent(
			'bitrix:news.list',
			'slider_rest',
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
				'FIELD_CODE' => ['NAME', 'PREVIEW_PICTURE'],
				'FILE_404' => '',
				'FILTER_NAME' => '',
				'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
				'IBLOCK_ID' => IB_ID_SLIDER_REST,
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
				'PARENT_SECTION_CODE' => 'restoran',
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
				'COMPONENT_TEMPLATE' => 'slider_rest'
			],
			false
		); ?>
		<div class="interior-block__col">
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
							'PATH' => '/restaurant/include/block_3_1.php'
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
							'PATH' => '/restaurant/include/block_3_ttl.php'
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
							'PATH' => '/restaurant/include/block_3_txt.php'
						]
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="certificates-block restaurant-page-block">
			<div class="certificates-block__row">
				<div class="certificates-block__info">
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
									'PATH' => '/restaurant/include/block_4_1.php'
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
									'PATH' => '/restaurant/include/block_4_ttl.php'
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
									'PATH' => '/restaurant/include/block_4_txt.php'
								]
							);
							?>
						</div>
					</div>
					<div class="restaurant-page-block__btn" data-aos="fade-up">
						<a class="two-cols-block__link" href="/restaurant/main_menu/">Смотреть меню</a>
					</div>
				</div>
				<div data-aos="fade-up">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/chef.jpg" type="image/webp" />
						<img class="certificates-block__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/chef.jpg" alt="" />
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'slider_rest_eda',
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
		'FIELD_CODE' => ['NAME', 'PREVIEW_PICTURE'],
		'FILE_404' => '',
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_SLIDER_REST,
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
		'PARENT_SECTION_CODE' => 'eda',
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
		'COMPONENT_TEMPLATE' => 'slider_rest_eda'
	],
	false
); ?>
<section class="section section--black">
	<div class="container">
		<div class="certificate-block">
			<div class="certificate-block__col">
				<div class="big-titles txt-white" data-aos="fade-up">
					<div class="big-titles__subttl">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/restaurant/include/block_5_1.php'
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
								'PATH' => '/restaurant/include/block_5_ttl.php'
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
								'PATH' => '/restaurant/include/block_5_txt.php'
							]
						);
						?>
					</div>
				</div>
				<button class="button button--brown certificate-block__btn button--on-black" data-popup-button="15" data-aos="fade-up">Заказать сертификат</button>
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
<div class="mob-section-border"></div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>