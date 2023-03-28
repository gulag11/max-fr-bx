<?php 
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('title', 'Freud');
$APPLICATION->SetTitle('Freud');
 
include_once $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/include/pages/main/index.php';

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
