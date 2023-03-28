<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<header class="header">
    <div class="header-mobile only-mobile">
        <a class="header__logo" href="<?= $mainLink; ?>" tabindex="0">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/logo1.php'; ?>
        </a>
        <div class="header-mobile__buttons">
            <?php if ($arOptions['UF_PHONE']) : ?>
                <a class="button--clean header-mobile__buttons-item" href="tel:<?= $arOptions['UF_PHONE_F']; ?>" data-nolink="">
                    <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/phone1.php'; ?>
                </a>
            <?php endif; ?>
            <button class="button button--brown header-mobile__buttons-item only-tablet" data-popup-button="1">Забронировать</button>
            <button class="button--clean header-mobile__buttons-item mob-burger" data-menu-btn="data-menu-btn">
                <div class="mob-burger-inner"></div>
            </button>
        </div>
    </div>
    <div class="header-body only-desktop" data-aos="fade-up">
        <div class="header__top">
            <div class="container">
                <address class="header__top-inner">
                    <?php if ($arOptions['UF_ADDRESS']) : ?>
                        <div class="header__address"><?= $arOptions['UF_ADDRESS']; ?></div>
                    <?php endif; ?>
                    <div class="header__top-links">
                        <?php foreach ($arSocLinks as $code => $item) : ?>
                            <a class="icon-circle" href="<?= $item['link'] ?>" target="_blank" data-nolink="">
                                <?php if ($item['file'] == 'vk.php') : ?>
                                    <svg class="vk-circle-ico" width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8931 11C4.0599 11 0.162399 6.87087 0 0H3.42286C3.53529 5.04304 6.05865 7.17918 8.0574 7.61962V0H11.2805V4.34935C13.2543 4.16216 15.3277 2.18018 16.0273 0H19.2503C18.7132 2.68669 16.4646 4.66867 14.8656 5.48348C16.4646 6.14414 19.0256 7.87287 20 11H16.4521C15.6901 8.90791 13.7914 7.28929 11.2805 7.06907V11H10.8931Z" fill="#1B1B1B"></path>
                                    </svg>
                                <?php elseif ($item['file'] == 'telegram.php') : ?>
                                    <svg class="tg-circle-ico" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.2233 3.01393C20.8783 2.72137 20.3364 2.67951 19.7761 2.90445H19.7752C19.1859 3.14089 3.09513 10.0427 2.44009 10.3247C2.32095 10.3661 1.28043 10.7544 1.38761 11.6192C1.48329 12.3989 2.31957 12.7218 2.42169 12.759L6.51247 14.1597C6.78387 15.0632 7.78437 18.3963 8.00563 19.1084C8.14363 19.5523 8.36857 20.1356 8.76279 20.2557C9.10871 20.3891 9.4528 20.2672 9.67544 20.0924L12.1765 17.7726L16.2139 20.9213L16.31 20.9788C16.5842 21.1002 16.8468 21.1609 17.0975 21.1609C17.2912 21.1609 17.477 21.1246 17.6546 21.0519C18.2595 20.8035 18.5015 20.2271 18.5268 20.1618L21.5425 4.48639C21.7265 3.64919 21.4708 3.22323 21.2233 3.01393ZM10.1203 14.72L8.74025 18.4L7.36025 13.8L17.9403 5.98001L10.1203 14.72Z" fill="#1B1B1B"></path>
                                    </svg>
                                <?php elseif ($item['file'] == 'whatsapp.php') : ?>
                                    <svg class="wa-circle-ico" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4998 0.479248C5.46234 0.479248 0.479004 5.46258 0.479004 11.5001C0.479004 13.8001 1.14984 15.9084 2.39567 17.7292L1.14984 21.4667C1.054 21.6584 1.14984 21.8501 1.24567 21.9459C1.43734 22.0417 1.629 22.1376 1.82067 22.0417L5.654 20.7959C7.379 21.9459 9.48734 22.5209 11.4998 22.5209C17.5373 22.5209 22.5207 17.5376 22.5207 11.5001C22.5207 5.46258 17.5373 0.479248 11.4998 0.479248ZM18.1123 16.0042C17.8248 16.8667 16.6748 17.6334 15.7165 17.8251C15.5248 17.8251 15.3332 17.9209 15.0457 17.9209C14.279 17.9209 13.3207 17.6334 11.7873 17.0584C9.87067 16.2917 7.954 14.5667 6.42067 12.3626L6.32484 12.2667C5.74984 11.5001 4.88734 10.1584 4.88734 8.72092C4.88734 7.09175 5.74984 6.22925 6.03734 5.84591C6.42067 5.46258 6.89984 5.27092 7.47484 5.27092C7.57067 5.27092 7.6665 5.27092 7.76234 5.27092H7.85817C8.33734 5.27092 8.62484 5.46258 8.91234 6.03758L9.104 6.42091C9.3915 7.09175 9.77484 8.14592 9.87067 8.33758C10.0623 8.72091 10.0623 9.00842 9.87067 9.29591C9.77484 9.48758 9.679 9.67925 9.48734 9.87092C9.3915 9.96675 9.29567 10.0626 9.29567 10.1584C9.19984 10.2542 9.104 10.3501 9.00817 10.4459C9.00817 10.5417 9.00817 10.5417 9.00817 10.5417C9.29567 11.0209 9.87067 11.8834 10.6373 12.5542C11.6915 13.5126 12.4582 13.8001 12.8415 13.9917H12.9373C13.0332 13.9917 13.129 14.0876 13.129 13.9917C13.3207 13.8001 13.5123 13.4167 13.7998 13.1292L13.8957 13.0334C14.1832 12.6501 14.5665 12.5542 14.7582 12.5542C14.854 12.5542 15.0457 12.5542 15.1415 12.6501C15.2373 12.6501 15.429 12.7459 17.2498 13.7042L17.4415 13.8001C17.729 13.8959 17.9207 13.9917 18.0165 14.2792C18.3998 14.4709 18.304 15.3334 18.1123 16.0042Z" fill="#1B1B1B"></path>
                                    </svg>
                                <?php endif; ?>
                            </a>
                        <?php endforeach;
                        if ($arOptions['UF_PHONE']) : ?>
                            <a class="tel" href="tel:<?= $arOptions['UF_PHONE_F']; ?>" tabindex="0" data-nolink=""><?= $arOptions['UF_PHONE']; ?></a>
                        <?php endif; ?>
                    </div>
                </address>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__bottom-inner">
                    <a class="header__logo" href="<?= $mainLink; ?>" tabindex="0">
                        <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/svg/header_logo_bottom.php' ?>
                    </a>
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:menu',
                        'top',
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
                    <?php if (is_array($arFavor)) {
                        $countFavor = count($arFavor);
                    } ?>
                    <div class="header__buttons">
                        <a class="header__buttons-icon count" href="/favorites/ " data-fav-btn="data-fav-btn" tabindex="0" data-header-btn="5">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 9.66791C4 4.88005 10.375 3.14238 12.5 7.4929C14.625 3.14238 21 4.88011 21 9.66796C21 14.4558 12.5 20 12.5 20C12.5 20 4 14.4558 4 9.66791Z" stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
                            </svg>
                            <?php if ($countFavor) : ?><div class="count-num" data-type="count-favor-header"><?= $countFavor; ?></div><?php endif; ?>
                        </a>
                        <a class="header__buttons-icon count" <?php if (!$basketItems) {
                                                                    echo 'data-drop-empty';
                                                                } ?> href="/basket/" data-cart-btn="data-cart-btn" tabindex="0" data-header-btn="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.63157 9.05262C9.63157 9.05262 9.63157 7.78956 9.63157 6.52634C9.63157 3.15786 13.8421 3.15791 13.8421 6.52634C13.8421 8.21055 13.8421 9.05262 13.8421 9.05262M6.68421 7.36844L16.7894 7.36847L18.4736 20L5 20L6.68421 7.36844Z" stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <div class="count-num" data-type="basket-count"><?= $bCount ?></div>
                        </a>
                        <button class="button button--brown" data-popup-button="1" tabindex="0">Забронировать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-modals only-desktop">
        <?php
        $APPLICATION->ShowViewContent('top_drop');
        include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/favor_header.php';
        ?>

        <div class="header-modals-small empty" data-cart-modal="data-cart-modal" data-header-modal="4">
            <div class="header-modals-small__ttl">Корзина</div>
            <div class="header-modals-small__txt">В вашей корзине нет товаров. Перейдите в каталог, чтобы добавить товары</div>
            <a href="/shop/"><button class="button button--brown-border">Перейти в каталог</button></a>
        </div>
        <div class="header-modals-small not-empty" data-cart-modal="data-cart-modal" data-header-modal="6" data-type="replace" data-replace="header-basket-items">
            <div class="header-modals-small__ttl">Корзина</div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/basket/header_list.php'); ?>
        </div>
    </div>
    <?php $APPLICATION->ShowViewContent('stuck_filters'); ?>
</header>