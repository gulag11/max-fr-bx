<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['SECTIONS'] as $key => $sec) {
    $arResult['SECTIONS'][$key]['img'] = CFile::ResizeImageGet(
        $sec['PICTURE'],
        ['width' => 460, 'height' => 608],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );
}
