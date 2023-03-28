<?php

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Sale\Basket,
    Bitrix\Sale\Fuser,
    Bitrix\Main\Context,
    Bitrix\Sale;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

header('Content-type: application/json');

Loader::includeModule('sale');

$basket = Sale\Basket::loadItemsForFUser(Fuser::getId(), Context::getCurrent()->getSite());
$requestData = Application::getInstance()->getContext()->getRequest()->getPostList()->toArray();
$result = $basket->getItemById($requestData['id'])->delete();

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
