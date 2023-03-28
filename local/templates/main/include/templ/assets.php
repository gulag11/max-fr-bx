<?php

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');
Asset::getInstance()->addString('<script src="https://cdn.jsdelivr.net/npm/maska@1.5.0/dist/maska.js"></script>');
Asset::getInstance()->addString('<link rel="icon" href="' . SITE_TEMPLATE_PATH . '/assets/images/favicon.svg">');
Asset::getInstance()->addString('<link rel="apple-touch-icon" href="' . SITE_TEMPLATE_PATH . '/assets/images/favicon-apple.svg">');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/vendor.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/app.js');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/829.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/app.css');
