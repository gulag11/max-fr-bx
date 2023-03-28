<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['SECTIONS'] as $key => $sec) {
    if ($sec['PICTURE']['ID']) {
        $arResult['SECTIONS'][$key]['img'] = CFile::ResizeImageGet(
            $sec['PICTURE']['ID'],
            ['width' => 587, 'height' => 420],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
    }
}
