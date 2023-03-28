<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="modal modal--center in-cart-popup" data-popup="6">
    <div class="in-cart-popup__top">
        <div class="in-cart-popup__ttl title-font h4">Удаление товара</div><button class="button--clean modal__close" data-modal-close></button>
    </div>
    <div class="delete-product-txt">Вы точно хотите удалить товар? Отменить действие будет невозможно</div><button class="button button--brown delete-product-btn" data-type="basket" data-event="delete">Удалить</button><button class="button button--brown-border only-mobile" data-modal-close="">Отменить</button>
</div>
