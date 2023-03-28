<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="modal modal--center in-cart-popup" data-popup="5">
    <div class="in-cart-popup__top">
        <div class="in-cart-popup__ttl title-font">Товар добавлен в корзину</div>
        <button class="button--clean modal__close" data-modal-close></button>
    </div>
    <div class="in-cart-popup-card">
        <div class="in-cart-popup-card__img">
            <picture>
                <source srcset="" type="image/webp" />
                <img data-replace-img src="" alt="" />
            </picture>
        </div>
        <div class="in-cart-popup-card__info">
            <div class="in-cart-popup-card__ttl" data-field-replace="name"></div>
            <div class="in-cart-popup-card__info-list" data-field-replace="descr"></div>
            <div class="catalog-card__price">
                <span class="current">
                    <span data-field-replace="price"></span> ₽</span>
            </div>
        </div>
    </div>
    <a class="button button--brown" href="/basket/" data-modal-close="">Перейти в корзину</a>
    <button class="button button--brown-border" data-modal-close="">Продолжить покупки</button>
</div>
