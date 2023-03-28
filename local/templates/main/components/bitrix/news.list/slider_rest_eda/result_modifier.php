<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['img'] = CFile::ResizeImageGet(
        $item['PREVIEW_PICTURE']['ID'],
        ['width' => 460, 'height' => 560],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );
}
