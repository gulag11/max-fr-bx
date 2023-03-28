<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<section class="section--first section--bottom">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="policy only-desktop">
			<div class="policy__col">
				<h1 class="h3 title-font"><?php $APPLICATION->ShowTitle(false) ?></h1>
				<?php for ($i = 1; $i <= 14; $i++) : ?>
					<h2 class="h4 title-font" data-anchor-target="<?= $i; ?>">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => '/p-p/include/title_' . $i . '.php'
							]
						); ?>
					</h2>
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/p-p/include/text_' . $i . '.php'
						]
					); ?>
				<?php endfor; ?>
			</div>
			<div class="policy__col relative">
				<div class="policy-links">
					<?php for ($i = 1; $i <= 14; $i++) : ?>
						<div class="policy-links__item <?php if ($i == 1) : ?>active<?php endif; ?>" data-anchor-btn="<?= $i; ?>">
							<?php $APPLICATION->IncludeComponent(
								'bitrix:main.include',
								'',
								[
									'AREA_FILE_SHOW' => 'file',
									'AREA_FILE_SUFFIX' => 'inc',
									'EDIT_TEMPLATE' => '',
									'PATH' => '/p-p/include/title_' . $i . '.php'
								]
							); ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="policy only-mobile">
			<h1 class="h3 title-font"><?php $APPLICATION->ShowTitle(false) ?></h1>
			<dl class="js-badger-accordion badger-accordion">
				<?php for ($i = 1; $i <= 14; $i++) : ?>
					<dt>
						<button class="button--clean rules-spoiler__button js-badger-accordion-header">
							<div class="rules-spoiler__num"><?= $i; ?>.</div>
							<div class="rules-spoiler__ttl">
								<?php $APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/p-p/include/ttl_' . $i . '.php'
									]
								); ?>
							</div>
							<div class="rules-spoiler__arrow">
								<svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 1.5L5 5.5L9 1.5" stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</div>
						</button>
					</dt>
					<dd class="rules-spoiler__drop js-badger-accordion-panel badger-accordion__panel">
						<div class="js-badger-accordion-panel-inner">
							<div class="rules-spoiler__drop-inner">
								<?php $APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									[
										'AREA_FILE_SHOW' => 'file',
										'AREA_FILE_SUFFIX' => 'inc',
										'EDIT_TEMPLATE' => '',
										'PATH' => '/p-p/include/text_' . $i . '.php'
									]
								); ?>
							</div>
						</div>
					</dd>
				<?php endfor; ?>
			</dl>
		</div>
	</div>
</section>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>