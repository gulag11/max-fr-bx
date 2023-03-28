<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Highloadblock as HL,
    Bitrix\Main\Mail\Event;

$request = Application::getInstance()->getContext()->getRequest();
$data = $request->getPostList()->toArray();

if ($data['FILE'] === 'true') {

    $file = CFile::MakeFileArray($_FILES['file']['tmp_name']);
    $data['UF_FILE'][] = $file ?: null;
    $arFields['UF_FILE'][] = $file ?: null;
}

if ($data) {
    Loader::includeModule('highloadblock');

    $hlblock = HL\HighloadBlockTable::getById(SUBSCRIBE_HL_ID)->fetch();
    $entity = HL\HighloadBlockTable::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    $arFields = [];



    $rsData = $entity_data_class::getList([
        'select' => ['*'],
        'filter' => [
            'UF_EMAIL' => $data['UF_EMAIL']
        ]
    ]);

    while ($arData = $rsData->Fetch()) {
        $arProv[] = $arData;
    }

    if ($data['type']) {
        $txter = '—  e-mail «' . $data['UF_EMAIL'] . '» уже подписан';
        if ($arProv) {
            echo json_encode(['txter' => $txter]);
        }
    } elseif ($arProv) {
        echo json_encode('exist');
    } else {
        if (($entity_data_class::add($data)) && ($data['UF_MAIL_EVENT_TYPE'])) {
            echo json_encode(['success' => true]);

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
