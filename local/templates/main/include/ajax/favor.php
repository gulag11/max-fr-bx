<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application;

$request = Application::getInstance()->getContext()->getRequest();
$data = $request->getPostList()->toArray();

CModule::IncludeModule('iblock');

if ($_SESSION['FAVOR'][$data['id']]) {
    unset($_SESSION['FAVOR'][$data['id']]);
} else {
    $select = [
        'NAME',
        'ID',
        'PREVIEW_PICTURE',
        'IBLOCK_ID',
        'CATALOG_PRICE_1',
        'CATALOG_CURRENCY_1',
        'DESCRIPTION'
    ];

    $filter = [
        'IBLOCK_ID' => IB_ID_SHOP,
        'ID' => $data['id'],
        'ACTIVE' => 'Y',
    ];

    $favorItem = [];

    $rsData = CIBlockElement::GetList([], $filter, false, [], $select);
    while ($arData = $rsData->GetNextElement()) {
        $field = $arData->GetFields();
        $props = $arData->GetProperties();

        $favorItem = $field;
        $favorItem['PROPERTIES'] = $props;
    }

    $_SESSION['FAVOR'][$data['id']] = $favorItem;
}

$count = count($_SESSION['FAVOR']);

echo json_encode(['count' => $count]);
