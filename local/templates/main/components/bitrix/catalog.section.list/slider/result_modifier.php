<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

foreach ($arResult['SECTIONS'] as $index => $sect) {
    if (!$sect['PICTURE']) {
        continue;
    }

    $arResult['SECTIONS'][$index]['PICTURE'] = CFile::ResizeImageGet($sect['PICTURE'], $arParams['IMG_SIZE'])['src'];
}
