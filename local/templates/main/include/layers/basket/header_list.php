<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="product-list" data-container="header-basket">
    <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/html_template/header_basket_item.html'); ?>
    <?php

    foreach ($basketItems as $item):
        $id = $item->getId();
        $productId = $item->getProductId();
        $quantity = $item->getQuantity();
        $price = $item->getPrice();
        ?>
        <div class="product-list__card" data-item-id="<?= $id ?>" data-type="item-modal" data-product-id="<?=$productId?>">
            <div class="product-list__img">
                <picture>
                    <source srcset="" type="image/webp"/>
                    <img src="<?=$bItemsData[$productId]['PROPERTIES']['GALLERY']['VALUE'] ?: CATALOG_PLUG . '93x93.png'?>" alt=""/>
                </picture>
            </div>
            <div class="product-list__info">
                <div class="product-list__brand">Ornellaia</div>
                <div class="product-list__ttl"><?= $item->getField('NAME') ?></div>
                <div class="card-product__add" data-number-goods="data-number-goods">
                    <button class="button--clean<?php if ($quantity < 2) {echo ' hide';}?>" data-number-goods-minus="data-number-goods-minus" data-type="basket"
                            data-additional='{"operator": "-"}' data-event="update" data-id="<?= $id ?>"></button>
                    <span data-number-goods-count="data-number-goods-count" data-type="count-stepper"><?= $quantity ?></span>
                    <button class="button--clean plus" data-number-goods-plus="data-number-goods-plus"
                            data-type="basket" data-additional='{"operator": "+"}' data-event="update"
                            data-id="<?= $id ?>"></button>
                </div>
            </div>
            <div class="product-list__col">
                <div>
                    <div class="catalog-card__price">
                        <div>
                            <span class="current"><span data-type="calc-price"><?=$price * $quantity?></span> ₽</span>
                            <?php if ($item->getField('DISCOUNT_PRICE')): ?>
                                <span class="old"><span data-type="full-price"><?=$item->getBasePrice() * $quantity?></span> ₽</span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-product__amount" data-field="count-price"><span data-type="count"><?= $quantity ?></span> шт. х <span data-type="price"><?=$price?></span> ₽</div>
                </div>
                <button class="product-list__del button--clean" data-type="basket" data-event="delete"
                        data-id="<?= $id ?>">Удалить
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="header-modals-small__bottom">
    <div class="header-modals-small__cart-count"><span class="txt">Итого</span><span class="price"><span data-type="basket-price-total"><?=$bPrice?></span> ₽</span>
    </div>
    <a href="/basket/">
        <button class="button button--brown-border">Перейти в корзину</button>
    </a>
</div>
