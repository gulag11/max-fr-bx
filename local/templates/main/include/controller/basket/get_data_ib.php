<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$ids = [];

foreach ($basketItems as $item) {
    $ids[] = $item->getProductId();
}

if (!$ids) {
    return;
}

$bItemsData = [];

$rsData = CIBlockElement::GetList(
    [],
    [
        'IBLOCK_ID' => IB_ID_SHOP,
        'ID' => $ids,
    ],
    false,
    false,
    $params['IB_DATA']['FIELDS']
);

while ($arData = $rsData->GetNextElement()) {
    $data = $arData->GetFields();

    foreach ($params['IB_DATA']['PROPS'] as $code) {
        $property = $arData->GetProperty($code);

        if (!$property['VALUE']) {
            continue;
        }

        switch ($property['PROPERTY_TYPE']) {
            case 'F':
                $property['VALUE'] = CFile::ResizeImageGet($property['VALUE'][0], $params['IB_DATA']['IMG_SIZE'])['src'];
                break;
        }

        $data['PROPERTIES'][$property['CODE']] = [
            'NAME' => $property['NAME'],
            'VALUE' => $property['VALUE'],
        ];
    }

    $bItemsData[$data['ID']] = $data;
}
