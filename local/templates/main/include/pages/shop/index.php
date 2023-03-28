<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

if (!$path['2']) {
    require 'catalog.php';
} elseif (!$path['3']) {
    require 'section.php';
} elseif ($path['3'] == 'detail') {
    require 'detail.php';
} else {
    Bitrix\Iblock\Component\Tools::process404('', true, true, true);
}
