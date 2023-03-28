<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$arResult['DETAIL_TEXT'] .= '<h3 class="product-body__subttl">' . $arResult['PROPERTIES'][$data['CODE']]['NAME'] . '</h3>' .
    '<p class="product-body__txt">' . $arResult['PROPERTIES'][$data['CODE']]['VALUE'] . '</p>';
