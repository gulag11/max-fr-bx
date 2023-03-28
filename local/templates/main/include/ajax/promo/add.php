<?php

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Sale\DiscountCouponsManager;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

Loader::includeModule('sale');

$code = Application::getInstance()->getContext()->getRequest()->getPost('code');

echo json_encode([
    'success' => (bool) DiscountCouponsManager::add($code),
]);
