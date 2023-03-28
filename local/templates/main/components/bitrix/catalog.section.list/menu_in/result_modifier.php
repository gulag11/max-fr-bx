<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['SECTIONS'] as $key => $sec) {
    if ($sec['CODE'] == $arParams['cur']) {
        $arResult['SECTIONS'][$key]['SELECTED'] = true;
    }
}
