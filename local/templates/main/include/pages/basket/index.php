<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$ajax = $request->getQuery('ajax');

$modals = [
    'delete_basket_item',
    'add_to_cart',
];

if ($basketItems) {
    $params = [
        'DELIVERY_RESTRICT' => [
            'SECTIONS' => [
                429,
                458,
            ],
            'DELIVERY_ID' => 3,
        ],
        'SIMILAR' => [
            'IDS' => [
                427,
                428,
            ],
            'IN' => 429,
            'NOT_IN' => 427,
        ],
    ];

    require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/controller/delivery/restrict.php');
    require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/controller/similar/basket.php');
}

require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/basket/' . ($basketItems ? 'not_' : '') . 'empty.php');
