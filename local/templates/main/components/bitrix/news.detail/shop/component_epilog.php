<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

if (!$_SESSION['VIEWED'][$arResult['ITEM']['ID']]) {
    $_SESSION['VIEWED'][$arResult['ITEM']['ID']] = $arResult['ITEM'];
}

$GLOBALS['SIMILAR'] = $arResult['SIMILAR'];
