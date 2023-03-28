<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Highloadblock as HL,
    Bitrix\Main\Mail\Event;

$request = Application::getInstance()->getContext()->getRequest();
$data = $request->getPostList()->toArray();

$date = new DateTime(implode('.', explode('/', $data['UF_DATE'])) . ' ' . $data['UF_TIME']);
$day = $date->format('D');
$dateCondition = $date->format('d.m.Y');
$start = (new DateTime($dateCondition . ' ' . ($day === 'Sun' ? '13' : '12') . ':00'))->getTimestamp();
$end = (new DateTime($dateCondition . '22:30'))->getTimestamp();
$timestamp = $date->getTimestamp();

if ($timestamp > $start && $timestamp < $end) {
    $data['UF_DATE'] = $date->format('d.m.Y H:i:s');
    if ($data['FILE'] === 'true') {

        $file = CFile::MakeFileArray($_FILES['file']['tmp_name']);
        $data['UF_FILE'][] = $file ?: null;
        $arFields['UF_FILE'][] = $file ?: null;
    }

    $bookingEmp = true;

    if ($data['UF_MAIL_EVENT_TYPE'] == 'RESERVATION') {
        foreach ($data as $key => $item) {
            if (!$item) {
                $bookingEmp = false;
            }
        }
    }

    if (($data) && ($bookingEmp)) {
        Loader::includeModule('highloadblock');

        $hlblock = HL\HighloadBlockTable::getById(FEEDBACK_HL_ID)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();
        $arFields = [];

        if (($entity_data_class::add($data)) && ($data['UF_MAIL_EVENT_TYPE'])) {

            if ($data['UF_MAIL_EVENT_TYPE'] == 'RESERVATION') {
                $dateFormat = str_replace('/', '.', $data['UF_DATE']);
                $dateFormatWeek =  date('d.m.Y', strtotime($dateFormat));

                $pers = $data['UF_NUMBER_OF_GUESTS'];

                if ($data['UF_NUMBER_OF_GUESTS'] < 2) {
                    $pers .= ' персону';
                } elseif ($data['UF_NUMBER_OF_GUESTS'] < 5) {
                    $pers .= ' персоны';
                } else {
                    $pers .= ' персон';
                }

                $responseText = "Вы забронировали столик на " . $pers . "<br>в зоне «" . $data['UF_PLACE'] . "». Ждем вас " . $dateFormatWeek . " в " . $data['UF_TIME'] . "";

                echo json_encode(['success' => true, 'response' => $responseText]);
            } else {
                echo json_encode(['success' => true]);
            }

            foreach ($data as $codeUF => $item) {
                $code = str_replace('UF_', '', $codeUF);
                $arFields[$code] = $item;
            }

            Event::send([
                'EVENT_NAME' => $data['UF_MAIL_EVENT_TYPE'],
                'LID' => 's1',
                'C_FIELDS' => $arFields
            ]);
        } else {
            echo json_encode(['success' => false]);
        }
    }
}
