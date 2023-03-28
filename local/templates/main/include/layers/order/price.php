<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="cart-result__ttl">Итого</div>
<div class="cart-result__row">
    <div class="cart-result__name"><span data-type="basket-items-count"><?=$bCountItems?></span> <?=ending(
            $bCountItems,
            'това',
            [
                1 => 'р',
                2 => 'ра',
                'more' => 'ров'
            ],
            [
                3,
                9
            ]
        )?> на сумму</div>
    <div class="cart-result__value"><span data-type="basket-full-price"><?=$bFullPrice?></span> ₽</div>
</div>
<?php if ($discount['DISCOUNT']): ?>
    <div class="cart-result__row">
        <div class="cart-result__name">Скидка</div>
        <div class="cart-result__value">−<span data-type="discount"><?=$discount['DISCOUNT']?></span> ₽</div>
    </div>
<?php endif; ?>
<div class="cart-result__total">
    <div class="cart-result__name">К оплате</div>
    <div class="cart-result__value"><span data-type="basket-price-total"><?=$bPrice?></span> ₽</div>
</div>
