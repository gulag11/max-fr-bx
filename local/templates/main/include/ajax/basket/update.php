<?php

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Catalog\Product\Basket,
    Bitrix\Sale\Basket as SaleBasket,
    Bitrix\Sale\Fuser,
    Bitrix\Main\Context;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

header('Content-type: application/json');

Loader::includeModule('sale');
Loader::includeModule('catalog');

$requestData = Application::getInstance()->getContext()->getRequest()->getPostList()->toArray();
$basket = SaleBasket::loadItemsForFUser(Fuser::getId(), Context::getCurrent()->getSite());
$item = $basket->getItemById($requestData['id']);

if (!$item) {
    echo json_encode([
        'success' => false,
        'message' =>'Товар не найден'
    ]);

    exit;
}

$quantity = $item->getQuantity();
$quantity = $requestData['operator'] === '+' ? $quantity + 1 : $quantity - 1;
$result = $item->setField('QUANTITY', $quantity);

if ($result->isSuccess()) {
    $basket->save();

    echo json_encode([
        'success' => true,
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => $result->getErrorMessages(),
    ]);
}
