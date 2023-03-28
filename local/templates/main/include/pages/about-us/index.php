<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<section class="section--first section--grey-extra">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="about-block" data-aos="fade-up">
			<div class="section-bg-photo about-main-bg">
				<div class="big-titles white-ttl" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				</div>
				<div class="scroll-down" data-aos="fade-up">
					<div class="scroll-down__line"></div>
				</div>
			</div>
			<?php
			$APPLICATION->IncludeComponent(
				'bitrix:menu',
				'about',
				[
					'ALLOW_MULTI_SELECT' => 'N',
					'CHILD_MENU_TYPE' => 'left',
					'DELAY' => 'N',
					'MAX_LEVEL' => '1',
					'MENU_CACHE_GET_VARS' => [''],
					'MENU_CACHE_TIME' => '3600',
					'MENU_CACHE_TYPE' => 'A',
					'MENU_CACHE_USE_GROUPS' => 'Y',
					'ROOT_MENU_TYPE' => 'left',
					'USE_EXT' => 'Y'
				]
			);
			?>
		</div>
	</div>
</section>
<section class="section--top">
	<div class="container">
		<div class="benefits-block before-interior-block">
			<div class="benefits-cell" data-aos="fade-up">
				<div class="big-titles" data-aos="fade-up">
					<div class="big-titles__subttl">подробнее о нас</div>
					<h2 class="big-titles__ttl h1">Уникальный<br />проект</h2>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up"><svg class="about-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_1929_14168)">
						<path d="M18.7189 0.726074H41.2811L50.8072 33.522H9.19287L18.7189 0.726074Z" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M34.3139 33.522H35.0639V32.772H34.3139V33.522ZM25.6863 33.522V32.772H24.9363V33.522H25.6863ZM34.3139 36.9858H33.5639V37.4613L33.9939 37.6641L34.3139 36.9858ZM34.3139 55.3056L33.9939 54.6273L33.5639 54.8302V55.3056H34.3139ZM34.3139 59.1983V59.9483H35.0639V59.1983H34.3139ZM25.6863 59.1983H24.9363V59.9483H25.6863V59.1983ZM25.6863 55.3056H26.4363V54.8302L26.0063 54.6273L25.6863 55.3056ZM25.6863 36.9859L26.0063 37.6642L26.4363 37.4613V36.9859H25.6863ZM34.3139 32.772H25.6863V34.272H34.3139V32.772ZM35.0639 36.9858V33.522H33.5639V36.9858H35.0639ZM33.9939 37.6641C37.1743 39.1645 39.3726 42.3992 39.3726 46.1457H40.8726C40.8726 41.7971 38.3196 38.0463 34.6339 36.3075L33.9939 37.6641ZM39.3726 46.1457C39.3726 49.8923 37.1743 53.1269 33.9939 54.6273L34.6339 55.9839C38.3196 54.2452 40.8726 50.4944 40.8726 46.1457H39.3726ZM35.0639 59.1983V55.3056H33.5639V59.1983H35.0639ZM25.6863 59.9483H34.3139V58.4483H25.6863V59.9483ZM24.9363 55.3056V59.1983H26.4363V55.3056H24.9363ZM26.0063 54.6273C22.826 53.1269 20.6277 49.8923 20.6277 46.1457H19.1277C19.1277 50.4943 21.6807 54.2451 25.3663 55.9839L26.0063 54.6273ZM20.6277 46.1457C20.6277 42.3992 22.826 39.1646 26.0063 37.6642L25.3663 36.3076C21.6807 38.0463 19.1277 41.7971 19.1277 46.1457H20.6277ZM24.9363 33.522V36.9859H26.4363V33.522H24.9363Z" fill="#B69659"></path>
						<path d="M34.9063 4.95605L37.4221 29.1086" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M25.2124 4.95605L22.6992 29.0828" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M17.2537 4.42432H42.6404" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M10.3948 29.1177L49.947 29.1177" stroke="#B69659" stroke-width="1.5"></path>
					</g>
					<defs>
						<clipPath id="clip0_1929_14168">
							<rect width="60" height="60" fill="white"></rect>
						</clipPath>
					</defs>
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
								'PATH' => '/about-us/include/benefits1.php'
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
								'PATH' => '/about-us/include/benefits1_txt.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up">
				<svg class="about-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_1929_14156)">
						<rect x="0.832275" y="28.5222" width="9.86983" height="17.7657" stroke="#B69659" stroke-width="1.5"></rect>
						<path d="M27.3293 41.1495H39.0606C41.0928 41.1495 42.7401 39.5021 42.7401 37.47V37.47C42.7401 35.4379 41.0928 33.7905 39.0606 33.7905H30.7058C29.1763 32.0878 26.7233 28.6824 22.0481 28.6824C18.7928 28.6824 15.6702 30.1831 14.5159 30.9335H10.6199" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M10.782 44.4143H15.4727C19.1319 45.5423 26.2072 47.3849 30.9022 48.5841C33.8709 49.3423 37.0082 48.8734 39.6194 47.2702C44.2353 44.4361 51.828 39.7063 57.3598 35.9189C59.2743 34.6082 59.6245 31.9642 58.1843 30.1451V30.1451C56.869 28.4836 54.5064 28.094 52.7272 29.2452L42.5744 35.8146" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M44.4122 18.5419C44.4122 14.7195 42.8938 11.0537 40.1909 8.3509C37.4881 5.64807 33.8223 4.12964 29.9999 4.12964C26.1775 4.12964 22.5117 5.64807 19.8089 8.35089C17.1061 11.0537 15.5876 14.7195 15.5876 18.5419L29.9999 18.5419H44.4122Z" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M30 0V4.1294" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M33.4904 0L26.5094 -2.04568e-07" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M12.6753 18.5417H47.3246V23.7238H12.6753V18.5417Z" stroke="#B69659" stroke-width="1.5"></path>
						<path d="M25.7222 8.44385C24.3989 8.97166 23.1828 9.76597 22.1559 10.7929C21.3097 11.6392 20.6214 12.6138 20.11 13.6712" stroke="#B69659" stroke-width="1.5"></path>
					</g>
					<defs>
						<clipPath id="clip0_1929_14156">
							<rect width="60" height="60" fill="white"></rect>
						</clipPath>
					</defs>
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
								'PATH' => '/about-us/include/benefits2.php'
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
								'PATH' => '/about-us/include/benefits2_txt.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up"><svg class="about-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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
								'PATH' => '/about-us/include/benefits3.php'
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
								'PATH' => '/about-us/include/benefits3_txt.php'
							]
						);
						?>
					</div>
				</div>
			</div>
			<div class="benefits-cell cell-list" data-aos="fade-up"><svg class="about-benefit-ico" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.49911 12C1.49942 10.3431 2.84281 9.00024 4.49966 9.00054L54.9738 9.00971C56.6307 9.01001 57.9736 10.3534 57.9733 12.0103L57.9692 34.0885L57.9684 39.0068L57.968 41.0632C57.9677 42.72 56.6243 44.0629 54.9675 44.0626L4.49331 44.0535C2.83645 44.0532 1.49355 42.7098 1.49385 41.0529L1.49422 39.0068L1.49498 34.0885L1.49911 12Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M16.7366 22.6745C16.7672 24.3859 15.3585 25.7922 13.5439 25.7699C11.7292 25.7477 10.2697 24.3063 10.2392 22.5949C10.2087 20.8836 11.6173 19.4773 13.432 19.4996C15.2466 19.5218 16.7061 20.9632 16.7366 22.6745Z" stroke="#B69659" stroke-width="1.5"></path>
					<path d="M6.97505 31.3544C7.54392 28.229 10.2541 26.0067 13.4491 26.0459C16.7644 26.0865 19.6243 28.5456 20.1759 31.8297L20.4432 33.421L6.59891 33.421L6.97505 31.3544Z" stroke="#B69659" stroke-width="1.5"></path>
					<line x1="24.7124" y1="21.4365" x2="42.2521" y2="21.4365" stroke="#B69659" stroke-width="1.5"></line>
					<line x1="24.7125" y1="26.6987" x2="33.4291" y2="26.7003" stroke="#B69659" stroke-width="1.5"></line>
					<line x1="24.7125" y1="31.9583" x2="37.9512" y2="31.9607" stroke="#B69659" stroke-width="1.5"></line>
					<rect x="47.0247" y="9" width="4.60587" height="35.0632" stroke="#B69659" stroke-width="1.5"></rect>
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
								'PATH' => '/about-us/include/benefits4.php'
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
								'PATH' => '/about-us/include/benefits4_txt.php'
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
			'club_slider',
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
				'PARENT_SECTION_CODE' => 'about',
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
				'COMPONENT_TEMPLATE' => 'club_slider'
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
							'PATH' => '/about-us/include/interior_subttl.php'
						]
					); ?>
				</div>
				<h2 class="big-titles__ttl h1">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/about-us/include/interior_ttl.php'
						]
					); ?>
				</h2>
				<div class="big-titles__txt">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/about-us/include/interior_txt.php'
						]
					); ?>
				</div>
			</div>
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
	'reviews',
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
		'FIELD_CODE' => ['NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT'],
		'FILE_404' => '',
		'FILTER_NAME' => '',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'IBLOCK_ID' => IB_ID_REVIEWS,
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
		'PROPERTY_CODE' => ['rating'],
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
		'COMPONENT_TEMPLATE' => 'reviews'
	],
	false
); ?>
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
<section class="section-bg-photo rent-section-bg">
	<div class="big-titles white-ttl" data-aos="fade-up">
		<div class="big-titles__subttl">под ваше мероприятие</div>
		<h2 class="big-titles__ttl h1">Аренда клуба</h2>
	</div>
	<div class="two-cols-block__txt txt-white only-desktop" data-aos="fade-up">Учитывая индивидуальные предпочтения и особенности Вашего мероприятия мы предлагаем на <br>выбор аренду как определенной зоны, так и закрытие всего клуба</div>
	<div class="two-cols-block__txt txt-white only-mobile" data-aos="fade-up">Учитывая индивидуальные предпочтения и особенности Вашего мероприятия мы предлагаем на <br>выбор аренду как определенной зоны, так и закрытие всего клуба</div><button class="button button--brown" data-popup-button="8" data-aos="fade-up">Получить консультацию</button>
</section>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>
