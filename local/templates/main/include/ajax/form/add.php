<?php

use Bitrix\Main\Application,
    Bitrix\Main\Mail\Event;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

header('Content-type: application/json');

$requestData = Application::getInstance()->getContext()->getRequest()->getPostList()->toArray();

if ((!$requestData) || (!$requestData['UF_NAME']) || (!$requestData['UF_PHONE'])) {
    echo json_encode([
        'success' => false,
        'message' => 'not found request data',
    ]);

    exit;
}

if (!getEntityHlTable(FEEDBACK_HL_ID)::add($requestData)->isSuccess()) {
    echo json_encode([
        'success' => false,
        'message' => 'try again',
    ]);
} else {
    echo json_encode([
        'success' => true,
    ]);


    if ($requestData['EVENT_TYPE']) {
        $eventName = $requestData['EVENT_TYPE'];
    } elseif ($requestData['UF_MAIL_EVENT_TYPE']) {
        $eventName = $requestData['UF_MAIL_EVENT_TYPE'];
    }


    $dataEvent = [
        'EVENT_NAME' => $eventName,
        'LID' => 's1',
        'C_FIELDS' => $requestData
    ];

    Event::send($dataEvent);
}
