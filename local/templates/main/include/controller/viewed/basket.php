<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

foreach ($_SESSION['VIEWED'] as $id => $item) {
    if ($bItemsData[$item['ID']]) {
        $_SESSION['VIEWED'][$id]['BASKET']['CLASS'] = ' in-cart';
        $_SESSION['VIEWED'][$id]['BASKET']['TEXT']['DESKTOP'] = 'В корзине';
        $_SESSION['VIEWED'][$id]['BASKET']['TEXT']['MOBILE'] = 'В корзине';
        $_SESSION['VIEWED'][$id]['BASKET']['ATTR'] = '';
    } else {
        $_SESSION['VIEWED'][$id]['BASKET']['TEXT']['DESKTOP'] = 'Добавить в корзину';
        $_SESSION['VIEWED'][$id]['BASKET']['TEXT']['MOBILE'] = 'В корзину';
        $_SESSION['VIEWED'][$id]['BASKET']['ATTR'] = 'data-type="basket"';
    }
}
