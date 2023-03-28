<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($path['5']) {
    Bitrix\Iblock\Component\Tools::process404('', true, true, true);
}

if (($path['2'] == 'detail') || ($path['3'] == 'detail')) {
    include_once 'detail.php';
} else {
    include_once 'list.php';
}
