<?php

use Bitrix\Iblock\SectionTable,
    Bitrix\Iblock\Model\Section;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$arResult['CLASS']['ACTIVE'] = [
    $arResult['SECTION']['CODE'] => ' active',
];

if ($arResult['SECTIONS']) {
    foreach ($arResult['SECTIONS'] as $index => $section) {
        if (!$section['PICTURE']) {
            continue;
        }

        $arResult['SECTIONS'][$index]['PICTURE'] = CFile::ResizeImageGet($section['PICTURE'], $arParams['IMG_SIZE'])['src'];
    }

    $arResult['SECTION']['NAME'] = 'Все';
    $arResult['SECTION']['PICTURE'] = CFile::ResizeImageGet($arResult['SECTION']['PICTURE'], $arParams['IMG_SIZE'])['src'];
} else {
    if ($arResult['SECTION']['DEPTH_LEVEL'] > 1) {
        $rsData = SectionTable::getList([
            'filter' => [
                'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                'IBLOCK_SECTION_ID' => $arResult['SECTION']['IBLOCK_SECTION_ID'],
                'ACTIVE' => 'Y',
            ],
            'select' => [
                'ID',
                'IBLOCK_ID',
                'NAME',
                'PICTURE',
                'CODE',
                'SECTION_PAGE_URL_RAW' => 'IBLOCK.SECTION_PAGE_URL',
            ],
            'order' => [
                'SORT' => 'ASC',
            ],
        ]);

        while ($arData = $rsData->fetch()) {
            $arData['SECTION_PAGE_URL'] = CIBlock::ReplaceDetailUrl($arData['SECTION_PAGE_URL_RAW'], $arData, true, 'S');
            $arData['PICTURE'] = CFile::ResizeImageGet($arData['PICTURE'], $arParams['IMG_SIZE'])['src'];
            $arResult['SECTIONS'][] = $arData;
        }
    }
}

$this->__component->setResultCacheKeys(['SECTION']);
