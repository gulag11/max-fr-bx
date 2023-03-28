<?php

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Catalog\Product\Basket;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

header('Content-type: application/json');

Loader::includeModule('catalog');

$requestData = Application::getInstance()->getContext()->getRequest()->getPostList()->toArray();
$result = Basket::addProduct([
    'PRODUCT_ID' => $requestData['id'],
    'QUANTITY' => 1,
]);

if ($result->isSuccess()) {
    echo json_encode([
        'success' => true,
        'data' => $result->getData(),
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => $result->getErrorMessages(),
    ]);
}
