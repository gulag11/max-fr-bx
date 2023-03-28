<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;

if (CModule::IncludeModule('iblock')) {
    $select = [
        'NAME',
        'SECTION_PAGE_URL'
    ];

    $filter = [
        'IBLOCK_ID' => IB_ID_SHOP,
        'ACTIVE' => 'Y',
        'DEPTH_LEVEL' => 1,
    ];

    $SectList = CIBlockSection::GetList([], $filter, false, $select);
    while ($SectListGet = $SectList->GetNext()) {
        $aMenuLinks[] = [
            $SectListGet['NAME'],
            $SectListGet['SECTION_PAGE_URL'],
            [],
            [],
            ''
        ];
    }
}
