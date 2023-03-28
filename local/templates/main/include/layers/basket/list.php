<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<input type="hidden" data-reload="1">
<div class="cart-stage__product-list" data-type="replace" data-replace="items-list" data-product-list>
    <?php

    include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/html_template/basket_list.html');

    foreach ($basketItems as $item):
        $id = $item->getId();
        $productId = $item->getProductId();
        $quantity = $item->getQuantity();
        $price = $item->getPrice();
        ?>
        <div class="card-product" data-aos="fade-up" data-item-id="<?= $id ?>">
            <div class="card-product__img">
                <div class="catalog-card__labels only-desktop">
                    <?php foreach ($bItemsData[$productId]['PROPERTIES']['LABEL']['VALUE'] as $value) : ?>
                        <div class="catalog-card__labels-item label-<?= LABEL_COLOR[mb_strtolower($value)] ?>"><?= $value ?></div>
                    <?php endforeach; ?>
                </div>
                <picture>
                    <source srcset="" type="image/webp"/>
                    <img src="<?= $bItemsData[$productId]['PROPERTIES']['GALLERY']['VALUE'] ?: CATALOG_PLUG . '93x93.png' ?>" alt=""/>
                </picture>
            </div>
            <div class="card-product__info">
                <div>
                    <div class="card-product__brand"><?=$bItemsData[$productId]['PROPERTIES']['MANUFACTURER']['VALUE']?></div>
                    <div class="card-product__ttl"><?= $item->getField('NAME') ?></div>
                    <div class="card-product__txt">
                        <?php

                        echo $bItemsData[$productId]['PROPERTIES']['COUNTRY']['VALUE'];

                        if ($bDisplayedProps['CARD_PROPS'][$bDisplayedProps['SECT_SELECT_PROPS'][$bItemsData[$productId]['IBLOCK_SECTION_ID']]]) {
                            echo ', ';

                            $last = array_key_last($bDisplayedProps['CARD_PROPS'][$bDisplayedProps['SECT_SELECT_PROPS'][$bItemsData[$productId]['IBLOCK_SECTION_ID']]]);

                            foreach ($bDisplayedProps['CARD_PROPS'][$bDisplayedProps['SECT_SELECT_PROPS'][$bItemsData[$productId]['IBLOCK_SECTION_ID']]] as $indexProp => $data) {
                                if (!$bItemsData[$productId]['PROPERTIES'][$data['CODE']]) {
                                    continue;
                                }

                                if ($bDisplayedProps['CUSTOM_VALUE'][$data['CODE']]) {
                                    echo str_replace(
                                        '#VALUE#',
                                        $bItemsData[$productId]['PROPERTIES'][$data['CODE']]['VALUE'],
                                        $bDisplayedProps['CUSTOM_VALUE'][$data['CODE']]
                                    );
                                } else {
                                    echo $bItemsData[$productId]['PROPERTIES'][$data['CODE']]['VALUE'];
                                }

                                if ($last != $indexProp) {
                                    echo ', ';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <button class="card-product__btn button--clean only-desktop" data-type="favor-add" data-id="<?= $productId ?>">В избранное</button> 
            </div>
            <div class="card-product__nums">
                <div class="card-product__add" data-number-goods>
                    <button class="button--clean<?php if ($quantity < 2) {echo ' hide';}?>" data-type="basket" data-additional='{"operator": "-"}'
                            data-event="update" data-id="<?= $id ?>" data-number-goods-minus></button>
                    <span data-number-goods-count data-type="count-stepper"><?= $quantity ?></span>
                    <button class="button--clean plus" data-type="basket" data-additional='{"operator": "+"}'
                            data-event="update" data-id="<?= $id ?>" data-number-goods-plus></button>
                </div>
                <div class="catalog-card__price">
                    <div>
                        <span class="current"><span data-type="calc-price"><?= $quantity * $price ?></span> ₽</span>
                        <?php if ($item->getField('DISCOUNT_PRICE')): ?>
                            <span class="old"><?= $item->getBasePrice() ?> ₽</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-product__amount"><span data-type="count"><?= $quantity ?></span> шт. х <span data-type="price"><?= $price ?></span> ₽</div>
            </div>
            <div class="card-product__last-col">
                <button class="card-product__btn button--clean" data-popup-button="6" data-type="transfer-data"
                        data-transfer='{"data-id": "<?= $id ?>", "data-reload": "1"}' data-success="[data-event=delete]">Удалить
                </button>
                <button class="card-product__btn button--clean only-mobile" data-type="favor-add" data-id="<?= $productId ?>">В избранное</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
