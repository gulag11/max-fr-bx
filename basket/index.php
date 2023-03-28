<?php

$basketProps = [
    'LABEL',
    'MANUFACTURER',
    'COUNTRY',
    'SMOK_TIME',
    'COLOR',
    'SUGAR',
    'VL',
    'FORTRESS',
    'THICKNESS',
    'LENGTH',
];

$bDisplayedProps = [
    'CARD_PROPS' => [
        'CIGARETTES' => [
            [
                'CODE' => 'LENGTH',
            ],
            [
                'CODE' => 'THICKNESS',
            ],
            [
                'CODE' => 'SMOK_TIME',
            ],
            [
                'CODE' => 'FORTRESS',
            ],
        ],
        'WINE' => [
            [
                'CODE' => 'COLOR',
            ],
            [
                'CODE' => 'SUGAR',
            ],
            [
                'CODE' => 'VL',
            ],
        ],
        'ALCO' => [
            [
                'CODE' => 'VL',
            ],
        ],
    ],
    'SECT_SELECT_PROPS' => [
        427 => 'CIGARETTES',
        428 => 'CIGARETTES',
        569 => 'CIGARETTES',
        1031 => 'WINE',
        1032 => 'WINE',
        402 => 'WINE',
        1022 => 'ALCO',
        1023 => 'ALCO',
        1024 => 'ALCO',
        1025 => 'ALCO',
        1026 => 'ALCO',
        1027 => 'ALCO',
        357 => 'ALCO',
        1028 => 'ALCO',
        1029 => 'ALCO',
        1030 => 'ALCO',
    ],
    'CUSTOM_VALUE' => [
        'FORTRESS' => 'Крепость #VALUE# из 5',
        'THICKNESS' => 'Толщина: #VALUE#',
        'LENGTH' => 'Длина: #VALUE#',
        'SMOK_TIME' => 'Длительность курения: #VALUE# мин',
    ],
];

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/pages/basket/index.php');
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
