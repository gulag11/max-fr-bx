<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
    $APPLICATION->ShowHead();
    include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/assets.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/options.php';
    ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55132750, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55132750" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<input type="hidden" data-type="templ-path" value="<?=SITE_TEMPLATE_PATH?>">
<body class="body no-transition" data-js="false">
    <div id="panel">
        <?php $APPLICATION->ShowPanel(); ?>
    </div>
    <div class="wrapper">
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/header.php';
        ?>
        <main class="main">
