<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php'); 

$sapi_type = php_sapi_name(); 
if ($sapi_type=="cgi") 
   header("Status: 404"); 
else 
   header("HTTP/1.1 404 Not Found"); 

@define("ERROR_404","Y"); 

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); 

$APPLICATION->SetTitle("404 - Страница не найдена"); 

include_once $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/include/pages/404/index.php';  

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
