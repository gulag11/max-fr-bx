<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$APPLICATION->SetTitle($arResult['SECTION']['PATH'][array_key_last((array)$arResult['SECTION']['PATH'])]['NAME']);
