<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
$plug = 'yes';
$roger = 'yes';
?>
<section class="error-section section--first">
	<div data-aos="fade-up">
		<h1 class="error-section__ttl">
			<?php
			$APPLICATION->IncludeComponent(
				'bitrix:main.include',
				'',
				[
					'AREA_FILE_SHOW' => 'file',
					'AREA_FILE_SUFFIX' => 'inc',
					'EDIT_TEMPLATE' => '',
					'PATH' => '/404/include/numb.php'
				]
			);
			?>
		</h1>
		<div class="error-section__subttl">
			<?php
			$APPLICATION->IncludeComponent(
				'bitrix:main.include',
				'',
				[
					'AREA_FILE_SHOW' => 'file',
					'AREA_FILE_SUFFIX' => 'inc',
					'EDIT_TEMPLATE' => '',
					'PATH' => '/404/include/text.php'
				]
			);
			?>
		</div>
		<div class="error-section__btn-row">
			<a class="button button--brown error-section__btn" href="/">Главная</a>
			<a class="button button--brown error-section__btn" href="/shop/">Магазин</a>
			<a class="button button--brown error-section__btn" href="/restaurant/">Ресторан</a>
		</div>
	</div>
</section>