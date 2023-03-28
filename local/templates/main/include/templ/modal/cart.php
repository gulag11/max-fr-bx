<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<div class="modal modal--center in-cart-popup" data-popup="5">
    <div class="in-cart-popup__top">
        <div class="in-cart-popup__ttl title-font">Товар добавлен в корзину</div>
        <button class="button--clean modal__close" data-modal-close></button>
    </div>
    <div class="in-cart-popup-card">
        <div class="in-cart-popup-card__img">
            <picture>
                <source srcset="<? SITE_TEMPLATE_PATH ?>/assets/images/webp/shop-img-1.webp" type="image/webp" />
                <img src="<? SITE_TEMPLATE_PATH ?>/assets/images/shop-img-1.jpg" alt="" />
            </picture>
        </div>
        <div class="in-cart-popup-card__info">
            <div class="in-cart-popup-card__ttl">Вино St-Emilion AOC Premier Grand Cru Classe</div>
            <div class="in-cart-popup-card__info-list">
                <span>Доминикана, </span>
                <span>130 мм x 21 RG, </span>
                <span>длительность курения 75 мин, </span>
                <span>крепость 4 из 5</span>
            </div>
            <div class="catalog-card__price">
                <span class="current">13 820 ₽</span>
            </div>
        </div>
    </div>
    <a class="button button--brown" href="">Перейти в корзину</a>
    <button class="button button--brown-border" data-modal-close="">Продолжить покупки</button>
</div>