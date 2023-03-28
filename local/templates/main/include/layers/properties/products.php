<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$arResult['DETAIL_TEXT'] .= '<div class="product-gastronomy">';

foreach ($arResult['PROPERTIES'][$data['CODE']]['VALUE'] as $value) {
    $arResult['DETAIL_TEXT'] .= '<div class="product-gastronomy__item"><div class="product-gastronomy__ico"><img class="gastronomy-ico-svg" src="/upload/list_props_img/' .
        $value . '.svg">' . '</div>' . $value . '</div>';
}
