<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$firstKey = array_key_first($arResult['ITEMS']);
$lastKey = array_key_last($arResult['ITEMS']);

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['img'] = CFile::ResizeImageGet(
        $item['PREVIEW_PICTURE']['ID'],
        ['width' => 1195, 'height' => 560],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );

    if ($key == $firstKey) {
        $arResult['ITEMS'][$key]['class'] = 'first-slide';
    }

    if ($key == $lastKey) {
        $arResult['ITEMS'][$key]['class'] = 'last-slide';
    }
}
