<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/constants.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/func.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/event.php';
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/wsrubi.smtp/classes/general/wsrubismtp.php");

redirect();
