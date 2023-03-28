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
