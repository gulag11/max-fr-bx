<?php

use Bitrix\Main\Application,
    Bitrix\Main\Web\Uri,
    Freud\HighloadBlock,
    Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$params = [
    'IB_DATA' => [
        'FIELDS' => [
            'IBLOCK_ID',
            'ID',
            'IBLOCK_SECTION_ID',
        ],
        'PROPS' => array_merge(
            (array) $basketProps,
            [
                'GALLERY',
            ]
        ),
        'IMG_SIZE' => [
            'width' => 135,
            'height' => 128,
        ],
    ],
];
require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/controller/basket/get.php');
require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/controller/basket/get_data_ib.php');

Loader::includeModule('sale');

$request = Application::getInstance()->getContext()->getRequest();

$roger = $APPLICATION->get_cookie('roger');
$plug = $APPLICATION->get_cookie('plug');

include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/module/favor.php';
include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/module/booking.php';

if (!$plug) {
    $plug = 'no';
}

$uri = new Uri($request->getRequestUri());

$arPath = $uri->getPath();
$path = explode('/', $uri->getPath());
$path = array_filter($path);
$host = $_SERVER['HTTP_HOST'];

$ajax = $request->getPost('ajax');
$favorAjax = $request->getPost('favorajax');
$favorAjaxList = $request->getPost('favorajaxlist');

$mainLink = '/';

if (!$path[1]) {
    $mainLink = false;
}

$highloadObj = new HighloadBlock(OPTIONS_HL_ID);
$arOptions = $highloadObj->getField([
    'UF_PHONE',
    'UF_ADDRESS',
    'UF_EMAIL',
    'UF_SOC_VK',
    'UF_SOC_TELEGRAM',
    'UF_SOC_WHATSAPP',
    'UF_WORK_MODE',
]);

$arOptions['UF_PHONE_F'] = preg_replace('/[^0-9]/', '', $arOptions['UF_PHONE']);

$arSocLinks = [
    'UF_SOC_VK' => [
        'title' => 'VK',
        'file' => 'vk.php',
    ],
    'UF_SOC_TELEGRAM' => [
        'title' => 'Telegram',
        'file' => 'telegram.php',
    ],
    'UF_SOC_WHATSAPP' => [
        'title' => 'WhatsApp',
        'file' => 'whatsapp.php',
    ],
];

foreach ($arSocLinks as $codeUf => $item) {
    if (!$arOptions[$codeUf]) {
        unset($arSocLinks[$codeUf]);
    } else {
        $arSocLinks[$codeUf]['link'] = $arOptions[$codeUf];
    }
}

$arPathErr = [
    'index.php',
    'index.html',
    'index.htm'
];

if (in_array($path[array_key_last($path)], $arPathErr)) {
    $goodPath = str_replace($arPathErr, '', $arPath);
    LocalRedirect($goodPath);
}

$arPathErr2 = [
    '.php',
    '.html',
    '.htm'
];

$lastPath = explode('.', $path[array_key_last($path)]);

if (in_array('.' . $lastPath[1], $arPathErr2)) {
    $goodPath2 = str_replace($arPathErr2, '/', $arPath);
    LocalRedirect($goodPath2);
}
