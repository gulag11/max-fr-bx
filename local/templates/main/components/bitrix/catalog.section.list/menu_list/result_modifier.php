<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!$arResult['SECTIONS']) {
    Bitrix\Iblock\Component\Tools::process404('', true, true, true);
}

$imgType = "img_bottom";

foreach ($arResult['SECTIONS'] as $key => $sec) {
    $sec[$imgType] = CFile::ResizeImageGet(
        $sec['PICTURE']['ID'],
        ['width' => 553, 'height' => 649],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );

    $arResult['sections'][$sec['ID']] = $sec;

    $arSecIDs[] = $sec['ID'];

    if ($imgType == "img_bottom") {
        $imgType = "img_top";
    } elseif ($imgType == "img_top") {
        $imgType = "img_bottom";
    }
}

$select = [
    'NAME',
    'IBLOCK_SECTION_ID',
    'IBLOCK_ID',
    'ID'
];

$filter = [
    'IBLOCK_ID' => IB_ID_MENU,
    'ACTIVE' => 'Y',
    'IBLOCK_SECTION_ID' => $arSecIDs,
];

$rsData = CIBlockElement::GetList([], $filter, false, [], $select);
while ($arData = $rsData->GetNextElement()) {
    $field = $arData->GetFields();
    $props = $arData->GetProperties();

    $arResult['sections'][$field['IBLOCK_SECTION_ID']]['items'][$field['ID']]['field'] = $field;
    $arResult['sections'][$field['IBLOCK_SECTION_ID']]['items'][$field['ID']]['props'] = $props;
}

if (is_array($arResult['sections'])) {
    $countarResultSections = count($arResult['sections']);
}

if ($arResult['SECTION']['UF_TYPE'] == 2) {
    $secCount = $countarResultSections;
    $countCheck = $secCount / 2;

    $arResult['sections'] = array_chunk($arResult['sections'], $countCheck);
}
