<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult as $key => $item) {
    if ($item['DEPTH_LEVEL'] == 1) {
        $arResult['menu'][$key] = $item;
        if ($item['IS_PARENT']) {
            $keyParent = $key;
        }
    } else {
        $arResult['menu'][$keyParent]['items'][$key] = $item;
    }
}

foreach ($arResult['menu'] as $key => $item) {
    if ($key == 0) {
        $arResult['menu'][$key]['items'] = array_chunk($item['items'], 4);
    } elseif ($key == 8) {
        $arResult['menu'][$key]['items'] = array_chunk($item['items'], 20);
    }
    if ($key == 17) {
        $arResult['menu'][$key]['items'][0] = $item['items'];
        $arResult['menu'][$key]['items'][1][0]['TEXT'] = 'О ресторане';
        $arResult['menu'][$key]['items'][1][0]['LINK'] = '/restaurant/';
        $arResult['menu'][$key]['items'][1][1]['TEXT'] = 'Подарочные сертификаты';
        $arResult['menu'][$key]['items'][1][1]['LINK'] = '/gift-certificate/';
    }
}
