<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

$this->SetViewTarget('catalog_count');
echo $arResult['COUNT'] . ' ' . $arResult['ENDING'];
$this->EndViewTarget();
$this->SetViewTarget('modal');
include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/modals/' . $arParams['MODALS']['ADD_TO_CART'] . '.php');
$this->EndViewTarget();

if ($arResult['COLLECTIONS']):
    $this->SetViewTarget('collections');
    ?>
    <div class="category-top__line cigars-filters" data-entity="shop" data-place="collections"
         data-link-container="[data-container=list]">
        <?php foreach ($arResult['COLLECTIONS'] as $data): ?>
            <button class="category-filter-btn button--clean" data-type="filters">
                <div style="display: none"
                     <?php if ($data['CUSTOM_FIELD']) {echo 'data-custom-compare="' . $data['CUSTOM_FIELD'] . '"';} ?>
                     data-type="filter-val"><?= json_encode($data['DATA'], JSON_UNESCAPED_UNICODE) ?></div>
                <?= $data['UF_NAME'] ?>
            </button>
        <?php endforeach; ?>
    </div>
    <?php
    $this->EndViewTarget();
endif;

$this->SetViewTarget('stuck_filters');
?>
<div class="active-filters-row">
    <div class="container">
        <div class="active-filters-row__container">
            <?php if ($arResult['ALL_FILTERS']): ?>
                <button class="category-filter-drop button--clean only-desktop" data-popup-button="3">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 2.40002H2.5M20 2.40002H6.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                        <path d="M0 8.40002H13.5M20 8.40002H17.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                        <path d="M0 14.4H6.5M20 14.4H10.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                        <circle cx="4.5" cy="2.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                        <circle cx="15.5" cy="8.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                        <circle cx="8.5" cy="14.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                    </svg>
                    <span>все фильтры</span>
                </button>
                <button class="category-filter-drop button--clean only-mobile" data-popup-button="3">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 2.40002H2.5M20 2.40002H6.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                        <path d="M0 8.40002H13.5M20 8.40002H17.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                        <path d="M0 14.4H6.5M20 14.4H10.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                        <circle cx="4.5" cy="2.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                        <circle cx="15.5" cy="8.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                        <circle cx="8.5" cy="14.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                    </svg>
                    <span>фильтры</span>
                </button>
            <?php endif; ?>
            <div class="active-filters-row__list" data-container="filter-line" data-link-container="[data-container=list]" data-entity="shop">
                <template>
                    <button class="category-filter-btn button--clean active-filter" data-type="filter">
                        <span data-type="filter-val" data-style="none"></span>
                        <span class="category-filter-btn__cross"></span>
                    </button>
                </template>
                <button class="category-filter-btn button--clean filter-reset" style="display: none;" data-type="filter-reset">Очистить все</button>
            </div>
        </div>
    </div>
</div>
<?php $this->EndViewTarget(); ?>
<div class="category-top__line filter-drops">
    <div style="display: none" data-type="replace-elem"
         data-field="count-title"><?= $arResult['COUNT'] ?> <?= $arResult['ENDING'] ?></div>
    <div class="filter-drops-btns">
        <?php if ($arResult['ALL_FILTERS']) : ?>
            <button class="category-filter-drop button--clean" data-popup-button="3">
                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 2.40002H2.5M20 2.40002H6.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                    <path d="M0 8.40002H13.5M20 8.40002H17.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                    <path d="M0 14.4H6.5M20 14.4H10.5" stroke="#1B1B1B" stroke-width="1.3"></path>
                    <circle cx="4.5" cy="2.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                    <circle cx="15.5" cy="8.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                    <circle cx="8.5" cy="14.5" r="1.9" stroke="#1B1B1B" stroke-width="1.2"></circle>
                </svg>
                <span>все фильтры</span>
            </button>
        <?php endif; ?>
        <?php

        $i = 0;
        foreach ($arResult['FILTERS'] as $code => $data) :
            if ($i > $arParams['ALL_FILTERS']) {
                break;
            }
            ?>
            <button class="category-filter-drop button--clean only-desktop" data-filter-btn="<?= $i;
            $i++; ?>"><span><?= $data['NAME'] ?></span>
                <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L5 5.5L9 1.5" stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </button>
        <?php endforeach; ?>
        <button class="category-filter-drop button--clean" data-filter-btn="6">
            <span data-sort-filter>Сортировка</span>
            <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L5 5.5L9 1.5" stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
    <div class="filter-drops-container" data-container="filters" data-link-container="[data-container=list]"
         data-entity="shop" data-place="line">
        <?php

        $i = 0;
        foreach ($arResult['FILTERS'] as $code => $data) :
            if ($i > $arParams['ALL_FILTERS']) {
                break;
            }
            ?>
            <div class="filter-drops-modal only-desktop" <?= $arResult['DROP_MODAL_CLASS'][$i] ?>
                 data-filter-drop="<?= $i;
                 $i++; ?>" data-container="filter" data-compare="<?= $data['COMPARE_ENTITY'] ?>"
                 data-filter-key="<?= $code ?>" data-template-type="drop-down" data-filter-all="1"
                 data-search-container>
                <div class="filters-popup-item__ttl"><span data-type="filter-name"><?= $data['NAME'] ?></span></div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/filters/' . $data['TEMPLATE'] . '.php'); ?>
            </div>
        <?php endforeach; ?>
        <div class="filter-drops-modal" data-sorting-filter data-filter-drop="6">
            <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/filters/radio.php'); ?>
        </div>
    </div>
</div>
<div class="category-top__line" data-active-filters data-container="filter-line"
     data-link-container="[data-container=list]" data-entity="shop">
    <template>
        <button class="category-filter-btn button--clean active-filter" data-type="filter">
            <span data-type="filter-val" data-style="none"></span><span class="category-filter-btn__cross"></span>
        </button>
    </template>
    <button class="category-filter-btn button--clean filter-reset" style="display: none" data-type="filter-reset">
        Очистить все
    </button>
</div>
</div>
<div data-container="list">
    <?php

    if ($arParams['AJAX'] === 'pagen') {
        $APPLICATION->RestartBuffer();
    }
    ?>
    <div class="category-body" data-aos="fade-up" data-container="items">
        <?php foreach ($arResult['ITEMS'] as $key => $item) : ?>
            <div class="catalog-card<?= $item['BASKET']['CLASS'] ?>" data-type="item" itemscope="" itemtype="http://schema.org/Product">
                <input type="hidden" data-field="count-price"
                       value="<span data-type='count'>1</span> шт. х <span data-type='price'><?= (int)$item['CATALOG_PRICE_1'] ?></span> <?= CURRENCY_FORMAT[$item['CATALOG_CURRENCY_1']] ?>">
                <div class="catalog-card__top">
                    <div class="catalog-card__labels">
                        <?php foreach ($item['PROPERTIES']['LABEL']['VALUE'] as $value): ?>
                            <div class="catalog-card__labels-item label-<?= LABEL_COLOR[mb_strtolower($value)] ?>"><?= $value ?></div>
                        <?php endforeach; ?>
                        <?php if ($item['PRICES']['DISCOUNT']): ?>
                            <div class="catalog-card__labels-item label-red">
                                −<?= $item['PRICES']['DISCOUNT']['VALUE'] . ($item['PRICES']['DISCOUNT']['VALUE_TYPE'] === 'P' ? '%' : $item['PRICES']['DISCOUNT']['CURRENCY']) ?></div>
                        <?php endif; ?>
                    </div>
                    <button class="button--clean catalog-card__fav <?php if ($arParams['favor'][$item['ID']]) : ?>active<?php endif; ?>"
                            data-type="favor-add" data-id="<?= $item['ID'] ?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 9.66791C4 4.88005 10.375 3.14238 12.5 7.4929C14.625 3.14238 21 4.88011 21 9.66796C21 14.4558 12.5 20 12.5 20C12.5 20 4 14.4558 4 9.66791Z"
                                  stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="bevel"></path>
                        </svg>
                    </button>
                    <a class="catalog-card__img" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                        <picture>
                            <source srcset="<?= $item['PREVIEW_PICTURE'] ?>" type="image/webp"/>
                            <img src="<?= $item['PREVIEW_PICTURE'] ?>" data-field-img alt=""/>
                        </picture>
                    </a>
                </div>
                <a class="catalog-card__bottom" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <div>
                        <?php if ($item['PROPERTIES']['MANUFACTURER']['VALUE']) : ?>
                            <div class="catalog-card__brand" itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
                                <?= $item['PROPERTIES']['MANUFACTURER']['VALUE'] ?>
                                <meta itemprop="name" content="<?=$item['PROPERTIES']['MANUFACTURER']['VALUE']?>">
                            </div>
                        <?php endif; ?>
                        <div class="catalog-card__title" data-field="name" itemprop="name"><?= $item['NAME'] ?></div>
                    </div>
                    <div class="catalog-card__info">
                        <div>
                            <?php if ($item['PROPERTIES']['COUNTRY']['VALUE']): ?>
                            <div class="catalog-card__country">
                                <img class="flag-ico"
                                     src="<?= '/upload/countries/' . $item['PROPERTIES']['COUNTRY']['VALUE'] . '.png' ?>">
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
                            <div itemscope="" itemtype="http://schema.org/Offer">
                                <span class="current">
                                    <span data-type="price"
                                          data-field="price" itemprop="price"><?= (int)$item['PRICES']['RESULT_PRICE']['DISCOUNT_PRICE'] ?></span> <?= CURRENCY_FORMAT[$item['PRICES']['PRICE']['CURRENCY']] ?>
                                </span>
                                <meta itemprop="priceCurrency" content="<?=$item['PRICES']['PRICE']['CURRENCY']?>">
                                <?php if ($item['PRICES']['DISCOUNT']) : ?><span
                                        class="old"><?= $item['PRICES']['RESULT_PRICE']['BASE_PRICE'] ?> <?= CURRENCY_FORMAT[$item['PRICES']['PRICE']['CURRENCY']] ?></span><?php endif; ?>
                            </div>
                            <svg class="added-to-cart only-desktop" width="30" height="26" viewBox="0 0 30 26"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <button class="button button--brown catalog-card__btn only-desktop" <?= $item['BASKET']['ATTR'] ?>
                            data-event="add" data-id="<?= $item['ID'] ?>"
                            tabindex="-1"><?= $item['BASKET']['TEXT']['DESKTOP'] ?>
                    </button>
                    <button class="button button--brown catalog-card__btn only-mobile" <?= $item['BASKET']['ATTR'] ?>
                            data-event="add" data-id="<?= $item['ID'] ?>"
                            tabindex="-1"><?= $item['BASKET']['TEXT']['MOBILE'] ?>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div data-type="pagen-append">
        <?php

        if ($arResult['NAV_STRING']) {
            echo $arResult['NAV_STRING'];
        }

        if ($arParams['AJAX'] === 'pagen') {
            exit;
        }
        ?>
    </div>
</div>
<?php

if (!$arResult['ALL_FILTERS']) {
    return;
}

$this->SetViewTarget('modal_filter_shop');
?>
<div class="modal modal--right review-popup filters-popup" data-popup="3" data-entity="shop"
     data-link-container="[data-container=list]" data-place="modal">
    <div class="review-popup__top filters-popup__top">
        <div class="filters-popup__top-inner">
            <div class="review-popup__ttl h4 title-font">Фильтры</div>
            <button class="button--clean modal__close" data-modal-close></button>
        </div>
        <div class="filters-popup__active-filters" data-mob-filters></div>
    </div>
    <div class="review-popup__body filters-popup__body" data-container="filters"
         data-link-container="[data-container=list]" data-entity="shop">
        <?php foreach ($arResult['FILTERS'] as $code => $data) : ?>
            <div class="filters-popup-item" data-container="filter" data-filter-key="<?= $code ?>"
                 data-compare="<?= $data['COMPARE_ENTITY'] ?>" data-template-type="modal">
                <div class="filters-popup-item__ttl">
                    <span data-type="filter-name"><?= $data['NAME'] ?></span>
                    <?php

                    $count = count($data['VALUES']);
                    if ($count > 6) :
                        ?>
                        <button class="button--clean filter-btn-more" data-popup-button="4" data-show-all="filter"
                                data-show-obj='{"replace": {"name": "<?= $data['NAME'] ?>"}}'>
                            Все
                        </button>
                    <?php endif; ?>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/filters/' . $data['SIDEBAR_TEMPLATE'] . '.php'); ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="review-popup__bottom">
        <button class="button button--brown" data-modal-close><span data-type="replace-elem" data-field="modal-count">Показать&nbsp;<span><?= $arResult['COUNT'] ?></span>&nbsp;<?= $arResult['ENDING'] ?></span>
        </button>
        <button class="button button--brown-border" data-type="filter-reset">Сбросить все фильтры</button>
    </div>
</div>
<?php $this->EndViewTarget(); ?>
<?php $this->SetViewTarget('filter_all_data'); ?>
<div class="modal modal--right review-popup filters-popup" data-popup="4" data-show="filter"
     data-link-container="[data-container=list]" data-entity="shop">
    <template data-template="show-all">
        <label class="checkbox filter-checkbox" data-container="filter-item">
            <div class="checkbox__label">
                <input class="checkbox__input" type="checkbox" data-type="filter">
                <div class="checkbox__box">
                    <svg class="checkbox__svg" width="13" height="10" viewBox="0 0 13 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8715 1.12386C11.7064 0.958713 11.4386 0.958713 11.2735 1.12386L4.41828 7.97906L1.72193 5.28269C1.5568 5.11752 1.28903 5.11752 1.12386 5.28269C0.958713 5.44783 0.958713 5.71559 1.12386 5.88076L4.11928 8.87617C4.28436 9.04125 4.55222 9.0413 4.71735 8.87617L11.8715 1.72193C12.0367 1.55676 12.0367 1.28901 11.8715 1.12386Z"
                              fill="#1B1B1B" stroke="#1B1B1B" stroke-width="0.5"></path>
                    </svg>
                </div>
            </div>
            <div class="checkbox__caption">
                <span data-type="filter-val"></span>
                <span class="count" data-type="filter-count"></span>
            </div>
        </label>
    </template>
    <div class="review-popup__top">
        <button class="button--clean filter-producers__back" data-popup-button="3">
            <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.57227 0.714355L1.28655 7.00007L7.57227 13.2858" stroke="#B69659" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
        </button>
        <div class="review-popup__ttl h4 title-font" data-replace="name"></div>
        <button class="button--clean modal__close" data-modal-close></button>
    </div>
    <div class="review-popup__body filters-popup__body" data-search-container>
        <div class="filter-producers__ttl">Поиск по производителям</div>
        <label class="filter-producers__input">
            <input type="text" placeholder="Введите производителя" data-search>
            <button class="button--clean" type="submit">
                <svg class="search-icon" width="17" height="18" viewBox="0 0 17 18" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.3807 13L16.1111 17M2.95262 2.95262C5.55612 0.349126 9.77722 0.349126 12.3807 2.95262C14.9842 5.55612 14.9842 9.77722 12.3807 12.3807C9.77722 14.9842 5.55612 14.9842 2.95262 12.3807C0.349126 9.77722 0.349126 5.55612 2.95262 2.95262Z"
                          stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </label>
        <div class="filter-checkboxes" data-container="content" data-filter-key=""></div>
    </div>
    <div class="review-popup__bottom">
        <button class="button button--brown" data-modal-close><span data-type="replace-elem"
                                                                    data-field="modal-all-count">Показать&nbsp;<span><?= $arResult['COUNT'] ?></span>&nbsp;<?= $arResult['ENDING'] ?></span>
        </button>
        <button class="button button--brown-border">Сбросить все фильтры</button>
    </div>
</div>
<?php $this->EndViewTarget(); ?>
