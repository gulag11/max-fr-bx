<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($path['3']) {
    Bitrix\Iblock\Component\Tools::process404('', true, true, true);
}

if ($path['2']) {
    require 'section.php';
} else {
    require 'main.php';
}
