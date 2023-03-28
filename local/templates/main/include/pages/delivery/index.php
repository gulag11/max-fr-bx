<?php 
use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} 

Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?apikey=9eaf2d45-34a5-4620-bac6-0482e9335845&amp;lang=ru_RU"></script>'); 
?>
<section class="section--first section--bottom">
	<div class="container">
		<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php'; ?>
		<div class="contacts-block">
			<div class="contacts-block__top">
				<div class="big-titles only-desktop" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				</div>
				<div class="big-titles only-mobile" data-aos="fade-up">
					<div class="big-titles__subttl">профессор фрейд</div>
					<h1 class="big-titles__ttl h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
				</div>
				<div class="scroll-down only-desktop" data-aos="fade-up">
					<div class="scroll-down__line"></div>
				</div>
			</div>
		</div>
		<div class="delivery-row" data-aos="fade-up">
			<div class="delivery-row__item">
				<div class="delivery-row__item-ttl">Самовывоз</div>
				<div class="cart-pickup__info-item">
					<svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.378 7.4C15.378 11.9606 9.18901 17 9.18901 17C9.18901 17 3 12.0236 3 7.4C3 3.86538 5.77091 1 9.18901 1C12.6071 1 15.378 3.86538 15.378 7.4Z" stroke="#1B1B1B"></path>
						<ellipse cx="9.18863" cy="7.22485" rx="2.87418" ry="2.97216" stroke="#1B1B1B"></ellipse>
					</svg>
					<div>
						<?php if ($arOptions['UF_ADDRESS']) : ?>
							<div class="cart-pickup__info-ttl">Адрес</div>
							<div class="cart-pickup__info-txt"><?= $arOptions['UF_ADDRESS'] ?></div>
						<?php endif; ?>
						<button class="button--clean delivery-row__map-link" data-popup-button="10">
							<?php $APPLICATION->IncludeComponent(
								'bitrix:main.include',
								'',
								[
									'AREA_FILE_SHOW' => 'file',
									'AREA_FILE_SUFFIX' => 'inc',
									'EDIT_TEMPLATE' => '',
									'PATH' => '/delivery/include/map_link.php'
								]
							); ?>
						</button>
					</div>
				</div>
				<?php if ($arOptions['UF_WORK_MODE']) : ?>
					<div class="cart-pickup__info-item">
						<svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="8.5" cy="8.5" r="7.5" stroke="#1B1B1B"></circle>
							<path d="M8.41406 3.33887V8.58519L12.1914 12.0827" stroke="#1B1B1B"></path>
						</svg>
						<div>
							<div class="cart-pickup__info-ttl">Часы работы</div>
							<div class="cart-pickup__info-txt">
								<?php foreach ($arOptions['UF_WORK_MODE'] as $key => $mode) {
									echo ($mode);
									echo ('<br>');
								} ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="cart-pickup__info-item">
					<svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="8.5" cy="8.5" r="7.5" stroke="#B69659"></circle>
						<path d="M8.5 7.23608L8.5 12.5679" stroke="#B69659"></path>
						<path d="M8.5 4.354V5.84497" stroke="#B69659"></path>
					</svg>
					<div>
						<div class="cart-pickup__info-ttl">
							<?php $APPLICATION->IncludeComponent(
								'bitrix:main.include',
								'',
								[
									'AREA_FILE_SHOW' => 'file',
									'AREA_FILE_SUFFIX' => 'inc',
									'EDIT_TEMPLATE' => '',
									'PATH' => '/delivery/include/cart.php'
								]
							); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="delivery-row__item">
				<div class="delivery-row__item-ttl">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/delivery/include/delivery_row_1.php'
						]
					); ?>
				</div>
				<div class="delivery-row__txt">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/delivery/include/delivery_row_2.php'
						]
					); ?>
				</div>
				<div class="delivery-row__txt">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/delivery/include/delivery_row_3.php'
						]
					); ?>
				</div>
			</div>
			<div class="delivery-row__item">
				<div class="delivery-row__item-ttl">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/delivery/include/delivery_row_4.php'
						]
					); ?>
				</div>
				<div class="delivery-row__txt">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/delivery/include/delivery_row_5.php'
						]
					); ?>
				</div>
				<div class="delivery-row-icons">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/payment-1.png" alt="">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/payment-2.png" alt="">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/payment-3.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/sub.php'; ?>