<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!$arBooking) {
    $select = [
        'NAME',
        'ID',
        'CODE',
        'IBLOCK_ID',
    ];

    $filter = [
        'IBLOCK_ID' => IB_ID_BOOKING,
        'ACTIVE' => 'Y',
    ];

    $rsData = CIBlockElement::GetList([], $filter, false, [], $select);
    while ($arData = $rsData->GetNextElement()) {
        $field = $arData->GetFields();
        $props = $arData->GetProperties();

        $arBooking[$field['ID']]['NAME'] = $field['NAME'];
        $arBooking[$field['ID']]['page'] = $props['page']['VALUE'];
    }
}
