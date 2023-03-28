<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

foreach ($arResult['SECTIONS'] as $index => $section) {
    $arResult['SECTIONS'][$index]['IMG'] = CFile::ResizeImageGet(
        $section['PICTURE'],
        $arParams['IMG_SIZE']
    );
}
