<?php

use  Bitrix\Main\EventManager,
    Bitrix\Main\Type\DateTime,
    Bitrix\Main\Loader;

EventManager::getInstance()->addEventHandler(
    'iblock',
    'OnBeforeIBlockElementAdd',
    'setStartActiveDateInfo'
);

EventManager::getInstance()->addEventHandler(
    'search',
    'BeforeIndex',
    'beforeIndex'
);

function setStartActiveDateInfo(&$arFields)
{
    if ($arFields['IBLOCK_ID'] == IB_ID_INFO) {

        $arFields['ACTIVE_FROM'] = new DateTime();
    }
}

function beforeIndex($arFields): array {
    Loader::IncludeModule('iblock');

    $arFields['PARAMS']['iblock_section'] = [];

    $rsData = CIBlockElement::GetElementGroups($arFields['ITEM_ID'], true);
    while ($arData = $rsData->Fetch()) {
        $arFields['PARAMS']['iblock_section'][] = $arData['ID'];
    }

    return $arFields;
}
