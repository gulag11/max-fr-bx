<?php

use Bitrix\Sale\Delivery\Services\Manager as Delivery;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$deliveries = Delivery::getActiveList();

foreach ($deliveries as $index => $delivery) {
    unset($deliveries[1]);
}

foreach ($bItemsData as $item) {
    if (in_array(getParentSect($item['IBLOCK_ID'], $item['IBLOCK_SECTION_ID']), $params['DELIVERY_RESTRICT']['SECTIONS'])) {
       continue;
    }

    unset($deliveries[$params['DELIVERY_RESTRICT']['DELIVERY_ID']]);
}
