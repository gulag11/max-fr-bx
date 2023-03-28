<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/footer.php';

if (is_array($arFavor)) {
    $countFavor = count($arFavor);
}

$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "footer_mobile",
    [
        "VIEW_COUNT" => [
            "/basket/" => $bCount,
            "/favorites/" => $countFavor,
        ],
        "ROOT_MENU_TYPE" => "footer_mobile",
        "MAX_LEVEL" => "1",
        "DELAY" => "N",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_TIME" => "86400",
    ]
);
?>
</div>
<?php if ($roger != 'yes') : ?>
    <div class="cookie active">
        <div class="cookie__txt">Мы используем куки, чтобы пользоваться сайтом было удобно</div>
        <button class="button button--brown" data-cookie-close="" data-type="cookie" data-name="roger">Отлично</button>
    </div>
<?php endif;
if ($plug != 'yes') {
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/plug.php';
}
?>
<div class="modals-container">
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/manufacturer.php';
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/reservation.php';
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/booking.php';
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/order_cig_alco.php';
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/order_dinner.php';
    //			include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/cart.php';
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/response.php';
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/delivery.php';
    $APPLICATION->ShowViewContent('modal_filter_shop');
    $APPLICATION->ShowViewContent('filter_all_data');
    $APPLICATION->ShowViewContent('reviews_modals');
    $APPLICATION->ShowViewContent('modal');
    $APPLICATION->ShowViewContent('mobile');

    foreach ($modals as $modal) {
        include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/modals/' . $modal . '.php');
    }
    ?>
</div>
<div class="mobile-menu-container">
    <div class="modal modal--right mobile-menu" data-mobile-menu>
        <div class="mobile-menu__wrapper">
            <?php $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'mob_drop',
                [
                    'ALLOW_MULTI_SELECT' => 'N',
                    'CHILD_MENU_TYPE' => 'left4top',
                    'DELAY' => 'N',
                    'MAX_LEVEL' => '2',
                    'MENU_CACHE_GET_VARS' => [''],
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_TYPE' => 'A',
                    'MENU_CACHE_USE_GROUPS' => 'Y',
                    'ROOT_MENU_TYPE' => 'top',
                    'USE_EXT' => 'Y'
                ]
            ); ?>
            <div class="mobile-menu__contacts">
                <?php if ($arOptions['UF_PHONE']) : ?>
                    <a class="footer__top-link" href="tel:<?= $arOptions['UF_PHONE_F']; ?>" data-nolink=""><?= $arOptions['UF_PHONE']; ?></a>
                <?php endif;
                if ($arOptions['UF_EMAIL']) : ?>
                    <a class="footer__top-link" href="mailto:<?= $arOptions['UF_EMAIL']; ?>" data-nolink=""><?= $arOptions['UF_EMAIL']; ?></a>
                <?php endif;
                if ($arOptions['UF_ADDRESS']) : ?>
                    <a class="footer__top-link"><?= $arOptions['UF_ADDRESS']; ?></a>
                <?php endif;
                if ($arSocLinks) : ?>
                    <div class="footer__socials">
                        <?php foreach ($arSocLinks as $code => $item) : ?>
                            <a class="icon-circle" href="<?= $item['link'] ?>" target="_blank" data-nolink="">
                                <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/soc_svg_footer_' . $item['file']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer__bottom-links-col">
                <a class="footer__bottom-links" href="/p-p/" target="_blank" data-nolink="">Политика обработки
                    персональных данных</a>
                <a class="footer__bottom-links" href="/delivery/">Доставка и оплата</a>
            </div>
        </div>
    </div>
    <?php $APPLICATION->ShowViewContent('drop_mob_menu'); ?>
</div>
</body>

</html>