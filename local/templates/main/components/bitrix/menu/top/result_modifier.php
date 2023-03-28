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
    if ($item['items']) {
        $arResult['menu'][$key]['items'] = array_chunk($item['items'], 4);
    }
}

foreach ($arResult['menu'] as $key => $item) {
    if ($key == 0) {
        foreach ($item['items'] as $key2 => $item2) {
            if ($key2 > 0) {
                $arResult['class'][$key][$key2] = 'header-modals__small-ttl';
            } else {
                $arResult['class'][$key][$key2] = 'header-modals__big-ttl';
            }
        }
    } elseif ($key == 9) {
        foreach ($item['items'] as $key2 => $item2) {
            $arResult['class'][$key][$key2] = 'header-modals__big-ttl';
        }
    }
    if ($key == 17) {
        foreach ($item['items'] as $key2 => $item2) {
            $arResult['class'][$key][$key2] = 'header-modals__big-ttl';
        }

        $arResult['menu'][$key]['items'][2][0]['TEXT'] = 'О ресторане';
        $arResult['menu'][$key]['items'][2][0]['LINK'] = '/restaurant/';
        $arResult['menu'][$key]['items'][2][1]['TEXT'] = 'Подарочные сертификаты';
        $arResult['menu'][$key]['items'][2][1]['LINK'] = '/gift-certificate/';
        $arResult['class'][$key][2] = 'header-modals__small-ttl';
    }
}
