<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application,
    Bitrix\Main\Web\Cookie;

$request = Application::getInstance()->getContext()->getRequest();
$data = $request->getPostList()->toArray();

if ($data['name']) {
    $context = Application::getInstance()->getContext();

    $cookie = new Cookie($data['name'], 'yes', time() + 60 * 60 * 24 * 30 * 12 * 2);

    $cookie->setDomain($context->getServer()->getHttpHost());

    $cookie->setHttpOnly(false);
    $cookie->setSecure(false);
    $context->getResponse()->addCookie($cookie);
    $context->getResponse()->flush('');

    $answer = $APPLICATION->get_cookie($data['name']);

    echo ($data['name'] . ' = ' . $answer);
}
