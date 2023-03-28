<?php

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Sale\DiscountCouponsManager;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

header('Content-type: application/json');

Loader::includeModule('sale');

$requestData = Application::getInstance()->getContext()->getRequest()->getPostList()->toArray();

echo json_encode([
    'success' => (bool) DiscountCouponsManager::clear(true),
]);
