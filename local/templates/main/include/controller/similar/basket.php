<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$similarIds = [];

foreach ($bItemsData as $item) {
    if (in_array($item['IBLOCK_SECTION_ID'], $params['SIMILAR']['IDS'])) {
        $similarIds = [$params['SIMILAR']['IN']];

        break;
    } else {
        $similarIds = [$params['SIMILAR']['NOT_IN']];
    }
}
