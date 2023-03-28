<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$fisrtKeyRat = array_key_first($arResult['ITEMS']);
$lastKeyRat = array_key_last($arResult['ITEMS']);

foreach ($arResult['ITEMS'] as $key => $item) {
    $sumRat = $sumRat + $item['PROPERTIES']['rating']['VALUE'];
    if ($arResult['ITEMS'][$key + 1]) {
        $arResult['ITEMS'][$key]['next'] = $arResult['ITEMS'][$key + 1]['ID'];
    } else {
        $arResult['ITEMS'][$key]['next'] = $arResult['ITEMS'][$fisrtKeyRat]['ID'];
    }
    if ($arResult['ITEMS'][$key - 1]) {
        $arResult['ITEMS'][$key]['prev'] = $arResult['ITEMS'][$key - 1]['ID'];
    } else {
        $arResult['ITEMS'][$key]['prev'] = $arResult['ITEMS'][$lastKeyRat]['ID'];
    }
}

$arResult['rat'] = $sumRat / count($arResult['ITEMS']);

$arResult['rat'] = number_format($arResult['rat'], 1, ',', ' ');
