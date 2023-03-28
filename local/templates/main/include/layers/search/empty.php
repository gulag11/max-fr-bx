<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="cart-empty-block" data-aos="fade-up">
    <div class="cart-empty-block__ttl" data-aos="fade-up">
        По запросу «<span><?=$arResult['REQUEST']['QUERY']?></span>» ничего не найдено
    </div>
    <div class="cart-empty-block__txt" data-aos="fade-up">Повторите поиск или уточните наличие по телефону</div><a class="button button--brown-border cart-empty-block__btn" href="/shop/" data-aos="fade-up">Перейти в каталог</a>
</div>
