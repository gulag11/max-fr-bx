<?php

use Bitrix\Main\Loader,
    Bitrix\Sale\Basket,
    Bitrix\Sale\Fuser,
    Bitrix\Main\Context;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

Loader::includeModule('sale');
Loader::includeModule('catalog');

$basket = Basket::loadItemsForFUser(Fuser::getId(), Context::getCurrent()->getSite());
$basketItems = $basket->getBasketItems();
$bCount = count($basketItems);
$bCountItems = 0;
$bFullPrice = $basket->getBasePrice();

foreach ($basket->getQuantityList() as $count) {
    $bCountItems += $count;
}

if ($basketItems) {
    $discount = discount($basket);
}

$bPrice = $basket->getPrice();
