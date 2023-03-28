<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['ITEMS'] as $index => $item) {
    $arResult['ITEMS'][$index]['NAME'] = TruncateText($item['NAME'], 26);
}

$filter = [];
$filter = [
    'IBLOCK_ID' => IB_ID_INFO,
    'ACTIVE' => 'Y'
];

$select = [];
$select = [
    'ID',
    'NAME',
    'SECTION_PAGE_URL',
    'CODE'
];

$SectList = CIBlockSection::GetList([], $filter, false, $select);
while ($SectListGet = $SectList->GetNext()) {
    $arResult['sections'][$SectListGet['ID']]['name'] = $SectListGet['NAME'];
    $arResult['sections'][$SectListGet['ID']]['url'] = $SectListGet['SECTION_PAGE_URL'];
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['img'] = CFile::ResizeImageGet(
        $item['PREVIEW_PICTURE']['ID'],
        ['width' => 460, 'height' => 274],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );
}
