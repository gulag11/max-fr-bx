<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application,
    Bitrix\Main\Loader;

Loader::includeModule('iblock');

$request = Application::getInstance()->getContext()->getRequest();
$data = $request->getPostList()->toArray();

if ($data) {

    $dateFormat = str_replace('/', '.', $data['date']);

    $dateFormatWeek =  date('l', strtotime($dateFormat));

    $select = [
        'NAME',
        'ID',
        'PREVIEW_TEXT',
        'DETAIL_PAGE_URL',
        'IBLOCK_ID',
    ];

    $filter = [
        'IBLOCK_ID' => IB_ID_BOOKING,
        'ACTIVE' => 'Y',
        'NAME' => $data['place'],
    ];

    $rsData = CIBlockElement::GetList([], $filter, false, [], $select);
    while ($arData = $rsData->GetNextElement()) {
        $field = $arData->GetFields();
        $props = $arData->GetProperties();

        $arBookingWeek['Monday'] = $props['week_monday']['DESCRIPTION'];
        $arBookingWeek['Tuesday'] = $props['week_tuesday']['DESCRIPTION'];
        $arBookingWeek['Wednesday'] = $props['week_wednesday']['DESCRIPTION'];
        $arBookingWeek['Thursday'] = $props['week_thursday']['DESCRIPTION'];
        $arBookingWeek['Friday'] = $props['week_friday']['DESCRIPTION'];
        $arBookingWeek['Saturday'] = $props['week_saturday']['DESCRIPTION'];
        $arBookingWeek['Sunday'] = $props['week_sunday']['DESCRIPTION'];


        $arBookingWeekVal['Monday'] = $props['week_monday']['VALUE'];
        $arBookingWeekVal['Tuesday'] = $props['week_tuesday']['VALUE'];
        $arBookingWeekVal['Wednesday'] = $props['week_wednesday']['VALUE'];
        $arBookingWeekVal['Thursday'] = $props['week_thursday']['VALUE'];
        $arBookingWeekVal['Friday'] = $props['week_friday']['VALUE'];
        $arBookingWeekVal['Saturday'] = $props['week_saturday']['VALUE'];
        $arBookingWeekVal['Sunday'] = $props['week_sunday']['VALUE'];
    }

    if (!$data['time']) {
        echo json_encode(['success' => true, 'tooltip' => $field['PREVIEW_TEXT']]);
    } else {
        $arDateMess = explode('-', $arBookingWeekVal[$dateFormatWeek]);

        $start_time = strtotime($arDateMess[0]);
        $end_time = strtotime($arDateMess[1]);

        $time = strtotime($data['time']);

        if ($end_time < $start_time) {
            $arStartTime = explode(':', $arDateMess[0]);
            $arEndTime = explode(':', $arDateMess[1]);
            $arReqTime = explode(':', $data['time']);

            $hourEnd = intval($arEndTime[0]);
            $hourReq = intval($arReqTime[0]);
            $hourStart = intval($arStartTime[0]);

            if ($hourEnd == $hourReq) {
                $minEnd = intval($arEndTime[1]);
                $minReq = intval($arReqTime[1]);

                if ($minEnd < $minReq) {
                    echo json_encode(['success' => false, 'txter' => 'Неверное время']);
                } else {
                    echo json_encode(['success' => true]);
                }
            } elseif ($hourStart <= $hourReq) {
                echo json_encode(['success' => true]);
            } elseif ($hourEnd < $hourReq) {
                echo json_encode(['success' => false, 'txter' => 'Неверное время']);
            }
        } else {
            if ($time >= $start_time && $time <= $end_time) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'txter' => 'Неверное время']);
            }
        }
    }
}
