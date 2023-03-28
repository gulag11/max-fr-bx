<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="cart-stage__recommend">
    <div class="cart-stage__recommend-ttl h4 title-font" data-aos="fade-up"><?=$arParams['ENTITY_NAME']?></div>
    <?php

    if ($arParams['AJAX'] === '4_items') {
        $APPLICATION->RestartBuffer();
    }
    ?>
    <div class="cart-stage__recommend-row" data-aos="fade-up" data-type="replace" data-replace="4-items" data-container="items">
        <?php foreach ($arResult['ITEMS'] as $item): ?>
            <div class="catalog-card catalog-card--small" data-type="item">
                <input type="hidden" data-field="count-price" value="<span data-type='count'>1</span> шт. х <span data-type='price'><?= (int)$item['CATALOG_PRICE_1'] ?></span> <?=CURRENCY_FORMAT[$item['CATALOG_CURRENCY_1']] ?>">
                <a class="catalog-card__top" href="<?=$item['DETAIL_PAGE_URL']?>">
                    <picture>
                        <source srcset="" type="image/webp" />
                        <img src="<?=$item['PREVIEW_PICTURE']?>" alt="<?=$item['NAME']?>" data-field-img />
                    </picture>
                </a>
                <div class="catalog-card__bottom">
                    <a href="<?=$item['DETAIL_PAGE_URL']?>">
                        <div class="catalog-card__brand"><?=$item['PROPERTIES']['MANUFACTURER']['VALUE']?></div>
                        <div class="catalog-card__title" data-field="name"><?=$item['NAME']?></div>
                    </a>
                    <div class="catalog-card__info">
                        <div class="catalog-card__price">
                            <span class="current"><span data-type="price" data-field="price"><?= (int)$item['CATALOG_PRICE_1'] ?></span> <?= CURRENCY_FORMAT[$item['CATALOG_CURRENCY_1']] ?></span>
                        </div>
                        <button class="button button--brown-border catalog-card__btn" data-type="basket" data-event="add" data-id="<?= $item['ID'] ?>" data-reload="1">В корзину</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php

    if ($arParams['AJAX'] === '4_items') {
        exit;
    }
    ?>
</div>
