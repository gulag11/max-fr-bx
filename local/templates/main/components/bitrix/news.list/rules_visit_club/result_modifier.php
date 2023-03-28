<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
$arName = explode(' ', $arResult['NAME']);
$arResult['name'] = '';

foreach ($arName as $key => $item) {
    if ($key == 1) {
        $arResult['name'] .= ' </br>';
    }
    $arResult['name'] .= $item;
    $arResult['name'] .= ' ';
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $count = $key + 1;
    if ($count < 10) {
        $arResult['ITEMS'][$key]['count'] .= '0';
        $arResult['ITEMS'][$key]['count'] .= $count;
    } else {
        $arResult['ITEMS'][$key]['count'] = $count;
    }
}
