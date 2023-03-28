<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

foreach ($arResult['ITEMS'] as $index => $item) {
    $arResult['ITEMS'][$index]['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
        $item['PROPERTIES']['GALLERY']['VALUE'][0],
        $arParams['IMG_SIZE']
    )['src'] ?: CATALOG_PLUG . '335x335.png';
}
