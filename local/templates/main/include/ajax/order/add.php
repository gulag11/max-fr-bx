<?php

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Sale\Order,
    Bitrix\Sale\Basket,
    Bitrix\Sale\Fuser,
    Bitrix\Main\Context,
    Bitrix\Main\Mail\Event,
    Bitrix\Sale\Delivery\Services\Manager as DeliveryManager;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

header('Content-Type: application/json; charset=utf-8');

$requestData = Application::getInstance()->getContext()->getRequest()->getPostList()->toArray();
$required = [
    'name',
    'phone',
];

if ($requestData['delivery'] == 3) {
    $required[] = 'address_street';
}

foreach ($required as $name) {
    if (!$requestData[$name]) {
        echo json_encode([
            'success' => false,
            'message' => 'Не заполнены обязательные поля',
        ]);

        exit;
    }
}

Loader::includeModule('sale');
Loader::includeModule('catalog');

$basket = Basket::loadItemsForFUser(Fuser::getId(), 's1');
$basketItems = $basket->getBasketItems();

if (!$basketItems) {
    echo json_encode([
        'success' => false,
        'message' => 'В корзине нет товаров',
    ]);

    exit;
}

$strListOrder = '';
$fullPrice = $basket->getBasePrice();

foreach ($basketItems as $objBasketItem) {
    $count = $objBasketItem->getQuantity();   // Количество
    $name = $objBasketItem->getField('NAME'); // Имя
    $price = $objBasketItem->getPrice(); // Цена

    $strListOrder .= $name;
    $strListOrder .= ', (';
    $strListOrder .= $count;
    $strListOrder .= ' x ';
    $strListOrder .= $price;
    $strListOrder .= ' ';
    $strListOrder .= Bitrix\Currency\CurrencyManager::getBaseCurrency();
    $strListOrder .= ');<br>';
}

$fullPrice = $basket->getBasePrice();
$strListOrder .= $fullPrice;
$strListOrder .= ' ';
$strListOrder .= Bitrix\Currency\CurrencyManager::getBaseCurrency();
$strListOrder .= '<br>';

$order = Order::create(Context::getCurrent()->getSite(), 1);
$order->setBasket($basket);
$order->setPersonTypeId(1);

if ($requestData['comment']) {
    $order->setField('USER_DESCRIPTION', $requestData['comment']);
}

$order->getShipmentCollection()->createItem(DeliveryManager::getObjectById($requestData['delivery']));
$propertyCollection = $order->getPropertyCollection();

foreach ($propertyCollection as $property) {
    $property->setValue($requestData[$property->getField('CODE')]);
}

if ($requestData['address_street']) {
    $propertyCollection->getItemByOrderPropertyCode('address')->setValue($requestData['address_street'] . ' ' . $requestData['address_number'] . ($requestData['private_house'] ? ' (частный дом)' : ''));
}

$order->doFinalAction(true);
$result = $order->save();

if ($result->isSuccess()) {
    echo json_encode([
        'success' => true,
        'data' => [
            'ID' => $order->getId(),
        ],
    ]);

    $requestData['ORDER_ID'] = $order->getId();
    $requestData['BASKET_LIST'] = $strListOrder;

    $arDeliv = CSaleDelivery::GetByID($requestData['delivery']);

    $addressEvent = $requestData['address_street'] . ' ' . $requestData['address_number'] . ($requestData['private_house'] ? ' (частный дом)' : '');

    $requestData['DELIVERY'] = 'Вид доставки - ';
    $requestData['DELIVERY'] .= $arDeliv['NAME'];
    $requestData['DELIVERY'] .= '<br>';

    if ($requestData['address_street']) {
        $requestData['DELIVERY'] .= 'Адрес - ';
        $requestData['DELIVERY'] .= $addressEvent;
        $requestData['DELIVERY'] .= '<br>';
    }

    $arFieldsEvent = [
        'ORDER_ID' => $requestData['ORDER_ID'],
        'NAME' => $requestData['name'],
        'EMAIL' => $requestData['email'],
        'PHONE' => $requestData['phone'],
        'TEXT' => $requestData['comment'],
        'DELIVERY' => $requestData['DELIVERY'],
        'BASKET_LIST' => $requestData['BASKET_LIST']
    ];

    Event::send([
        'EVENT_NAME' => 'ORDER',
        'LID' => 's1',
        'C_FIELDS' => $arFieldsEvent
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => $result->getErrorMessages(),
    ]);
}
