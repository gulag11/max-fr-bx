<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$arResult['img'] = CFile::ResizeImageGet(
    $arResult['DETAIL_PICTURE']['ID'],
    ['width' => 950, 'height' => 566],
    BX_RESIZE_IMAGE_PROPORTIONAL,
    true
);
