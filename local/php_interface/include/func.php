<?php

use Bitrix\Sale\DiscountCouponsManager,
    Bitrix\Sale\Discount,
    Bitrix\Main\Loader,
    Bitrix\Highloadblock\HighloadBlockTable as HlTable,
    Bitrix\Iblock\SectionTable;

function getEntityHlTable($hlId): string
{
    Loader::IncludeModule('highloadblock');

    return HlTable::compileEntity(HlTable::getById($hlId)->fetch())->getDataClass();
}

function getXmlRkMethod(string $method, string $args = ''): string
{
    return '<?xml version="1.0" encoding="utf-8"?><RK7Query><RK7CMD CMD="GetRefData" RefName="' . $method . '" ' . $args . '/></RK7Query>';
}

function ending(int $count, string $str, array $ending, array $more): string
{
    $int = $count % 10;

    if (($int >= $more[0]) && ($int <= $more[1])) {
        $int = 'more';
    }

    return $str . $ending[$int];
}

function discount(Bitrix\Sale\Basket $basket): array
{
    $result = [];
    $coupons = DiscountCouponsManager::get();
    $discount = Discount::loadByBasket($basket);
    $basket->applyDiscount($discount->calculate()->getData()['BASKET_ITEMS']);
    $basePrice = $basket->getBasePrice();
    $price = $basket->getPrice();

    if ($price !== $basePrice) {
        $result['DISCOUNT'] = $basePrice - $price;
    }

    if ($coupons) {
        $result['COUPON'] = $coupons[array_key_first($coupons)];
    }

    return $result;
}

function getDataRange($data): array
{
    if (!$data) {
        return [];
    }

    usort($data, function ($a, $b) {
        return $a['VALUE'] - $b['VALUE'];
    });

    return [
        $data[0]['VALUE'],
        $data[array_key_last($data)]['VALUE'],
    ];
}

function getParentSect($ibId, $id) {
    $result = SectionTable::getList([
        'filter' => [
            'IBLOCK_ID' => $ibId,
            'ID' => $id,
        ],
        'select' => [
            'ID',
            'IBLOCK_SECTION_ID',
        ],
    ])->fetch();

    if ($result['IBLOCK_SECTION_ID']) {
        return getParentSect($ibId, $result['IBLOCK_SECTION_ID']);
    } else {
        return $result['ID'];
    }
}

function redirect() {
    $result = getEntityHlTable(REDIRECT_HL_ID)::getList([
        'filter' => [
            'UF_FROM' => $_SERVER['REQUEST_URI'],
        ],
        'select' => [
            'UF_TO',
        ],
    ])->fetch()['UF_TO'];

    if (!$result) {
        return;
    }

    //
    LocalRedirect($result);
}
