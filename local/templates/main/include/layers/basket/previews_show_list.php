<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="previous-show" data-next-target="1" data-type="replace" data-replace="preview-items-list">
    <div class="cart-products-notactive">
        <?php

        foreach ($basketItems as $item):
            $id = $item->getId();
            $productId = $item->getProductId();
            $quantity = $item->getQuantity();
            ?>
            <div class="cart-products-item" data-item-id="<?= $id ?>">
                <div class="cart-products-item__img">
                    <picture>
                        <source srcset="" type="image/webp"/>
                        <img class="cart-products-item__img"
                             src="<?= $bItemsData[$productId]['PROPERTIES']['GALLERY']['VALUE'] ?: CATALOG_PLUG . '93x93.png' ?>"
                             alt=""/>
                    </picture>
                </div>
                <div class="cart-products-item__row">
                    <div class="cart-products-item__ttl"><?= $item->getField('NAME') ?></div>
                    <div>&nbsp;—&nbsp;</div>
                    <div class="cart-products-item__price"><?= $item->getPrice() ?> ₽</div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="button button--brown-border cart-stage__edit only-mobile" data-stage-edit="">Изменить</button>
</div>
