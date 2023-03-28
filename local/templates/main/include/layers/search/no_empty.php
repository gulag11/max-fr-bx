<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$this->SetViewTarget('modal');
include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/modals/' . $arParams['MODALS'][0] . '.php');
$this->EndViewTarget();
?>
<div class="category-body" data-aos="fade-up">
    <?php foreach ($arResult['SEARCH'] as $item): ?>
        <div class="catalog-card<?= $item['BASKET']['CLASS'] ?>" data-type="item">
            <input type="hidden" data-field="count-price" value="<span data-type='count'>1</span> шт. х <span data-type='price'><?= (int)$item['PRICE'] ?></span> <?=CURRENCY_FORMAT[$item['CURRENCY']] ?>">
            <div class="catalog-card__top">
                <div class="catalog-card__labels">
                    <?php foreach ($item['PROPERTIES']['LABEL']['VALUE'] as $value) : ?>
                        <div class="catalog-card__labels-item label-<?= LABEL_COLOR[mb_strtolower($value)] ?>"><?= $value ?></div>
                    <?php endforeach; ?>
                    <?php if ($asd) : ?>
                        <div class="catalog-card__labels-item label-red">−30%</div>
                    <?php endif; ?>
                </div>
                <button class="button--clean catalog-card__fav">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 9.66791C4 4.88005 10.375 3.14238 12.5 7.4929C14.625 3.14238 21 4.88011 21 9.66796C21 14.4558 12.5 20 12.5 20C12.5 20 4 14.4558 4 9.66791Z"
                              stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
                    </svg>
                </button>
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <picture>
                        <source srcset="" type="image/webp"/>
                        <img src="<?= $item['PROPERTIES']['GALLERY']['VALUE'] ?>" alt="<?= $item['NAME'] ?>" data-field-img/>
                    </picture>
                </a>
            </div>
            <a class="catalog-card__bottom" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <div>
                    <div class="catalog-card__brand"><?= $item['PROPERTIES']['MANUFACTURER']['VALUE'] ?></div>
                    <div class="catalog-card__title" data-field="name"><?= $item['NAME'] ?></div>
                </div>
                <div class="catalog-card__info">
                    <div>
                        <?php if ($item['PROPERTIES']['COUNTRY']['VALUE']): ?>
                        <div class="catalog-card__country">
                            <img class="flag-ico" src="<?='/upload/countries/' . $item['PROPERTIES']['COUNTRY']['VALUE'] . '.png'?>">
                            <?= $item['PROPERTIES']['COUNTRY']['VALUE'] ?>
                        </div>
                        <?php endif; ?>
                        <div class="catalog-card__<?= $item['PROPERTIES']['FORTRESS']['VALUE'] ? 'strong' : 'txt' ?>">
                            <?php

                            if ($arParams['CARD_PROPS'][$arParams['SECT_SELECT_PROPS'][$item['IBLOCK_SECTION_ID']]]) {
                                $last = array_key_last($arParams['CARD_PROPS'][$arParams['SECT_SELECT_PROPS'][$item['IBLOCK_SECTION_ID']]]);

                                foreach ($arParams['CARD_PROPS'][$arParams['SECT_SELECT_PROPS'][$item['IBLOCK_SECTION_ID']]] as $indexProp => $data) {
                                    if (!$item['PROPERTIES'][$data['CODE']]['VALUE']) {
                                        continue;
                                    }

                                    if ($data['TEMPLATE']) {
                                        include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/card/' . $data['TEMPLATE'] . '.php');
                                    } else {
                                        echo $item['PROPERTIES'][$data['CODE']]['VALUE'];

                                        if ($last != $indexProp) {
                                            echo ', ';
                                        }
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="catalog-card__price">
                        <div>
                            <span class="current"><span data-type="price" data-field="price"><?= $item['PRICE'] ?></span> <?= $item['CURRENCY'] ?></span>
                            <?php if ($asd): ?>
                                <span class="old">165 750 ₽</span>
                            <?php endif; ?>
                        </div>
                        <svg class="added-to-cart only-desktop" width="30" height="26" viewBox="0 0 30 26" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.21051 11.6842C8.21051 11.6842 8.21051 10.2633 8.21051 8.84213C8.21051 5.05259 12.9473 5.05265 12.9473 8.84213C12.9473 10.7369 12.9473 11.6842 12.9473 11.6842M4.89473 9.7895L16.2631 9.78953L18.1579 24L3 24L4.89473 9.7895Z"
                                  stroke="#B69659" stroke-width="1.2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <circle cx="20.5" cy="9.5" r="9.5" fill="#B69659"></circle>
                            <path d="M15.5 9.5L18.5 12.5L25.5 6.5" stroke="white" stroke-width="1.2"
                                  stroke-linecap="round"></path>
                        </svg>
                    </div>
                </div>
            </a>
            <div class="catalog-card__btn-container">
                <button class="button button--brown catalog-card__btn only-desktop" tabindex="-1" <?=$item['BASKET']['ATTR']?>
                        data-event="add"
                        data-id="<?= $item['ID'] ?>"><?=$item['BASKET']['TEXT']['DESKTOP']?>
                </button>
                <button class="button button--brown catalog-card__btn only-mobile" tabindex="-1" <?=$item['BASKET']['ATTR']?>
                        data-event="add"
                        data-id="<?= $item['ID'] ?>"><?=$item['BASKET']['TEXT']['MOBILE']?>
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
