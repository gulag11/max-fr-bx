<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application,
    \Bitrix\Main\Web\Uri;

$this->setFrameMode(true);

$request = Application::getInstance()->getContext()->getRequest();

if ($arResult['NavPageCount'] > 1) :
    if ($arResult['NavPageNomer'] + 1 <= $arResult['nEndPage']) :
        $plus = $arResult['NavPageNomer'] + 1;
        $url = $arResult['sUrlPathParams'] . 'PAGEN_' . $arResult['NavNum'] . '=' . $plus;
?>
        <button class="button button--brown-border more-btn aos-init aos-animate" data-aos="fade-up" data-type="pagen" data-url="<?= $url ?>">
            Показать ещё
        </button>
<?php
    endif;
endif;
