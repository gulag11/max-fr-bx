<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$popups = [];

foreach ($arResult as $index => $data) {
    $arResult[$index]['TAG'] = $data['LINK'] ? 'a' : 'div';

    if ($data['PARAMS']['popup_file']) {
        $popups[] = $data['PARAMS']['popup_file'];
    }
}

if ($popups) {
    $this->SetViewTarget('mobile');
    foreach ($popups as $file) {
        include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/modals/' . $file . '.php');
    }
    $this->EndViewTarget();
}
