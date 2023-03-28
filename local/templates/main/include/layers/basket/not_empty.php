<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<section class="section--first">
    <div class="container">
        <div class="cart-section" data-cart-stage-general="">
            <div class="cart-section__top only-mobile" data-aos="fade-up">
                <h1 class="title-font h2--big">Оформление заказа</h1>
                <a class="cart-section__back-link only-mobile" href="">
                    <svg class="only-mobile" width="9" height="14" viewBox="0 0 9 14" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.57227 0.714355L1.28655 7.00007L7.57227 13.2858" stroke="#B69659"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Вернуться к покупкам
                </a>
            </div>
            <div class="cart-section__body" data-cart-body-stages="">
                <div class="cart-section__col" data-container="order">
                    <div class="cart-section__top only-desktop" data-aos="fade-up">
                        <h1 class="title-font h2--big">Оформление заказа</h1>
                    </div>
                    <div class="cart-stage open" data-cart-stage="" data-aos="fade-up">
                        <div class="cart-stage__row">
                            <div class="cart-stage__row-col">
                                <div class="cart-stage__count">1/3</div>
                                <div class="cart-stage__ttl h4 title-font">Ваши товары</div>
                                <div class="cart-stage__products">
                                    <?php

                                    echo $bCount . ' ' . ending(
                                            $bCount,
                                            'позици',
                                            [
                                                0 => 'й',
                                                1 => 'я',
                                                'more' => 'и',
                                            ],
                                            [
                                                2,
                                                9,
                                            ]
                                        );
                                    ?>
                                </div>
                            </div>
                            <button class="button--clean cart-stage__edit only-desktop" data-stage-edit="">Изменить
                            </button>
                        </div>
                        <?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/basket/previews_show_list.php') ?>
                        <div data-cart-content="1">
                            <div class="cart-products-active">
                                <?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/basket/list.php') ?>
                                <button class="button button--brown cart-stage__product-list-btn only-desktop"
                                        data-aos="fade-up" data-cart-next="1">Перейти к оформлению
                                </button>
                                <?php

                                $filter = [
                                    '!ID' => $ids,
                                    'SECTION_ID' => $similarIds,
                                    'INCLUDE_SUBSECTIONS' => 'Y',
                                ];

                                $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "4_items",
                                    [
                                        "AJAX" => $ajax,
                                        'IMG_SIZE' => [
                                            'width' => 87,
                                            'height' => 82,
                                        ],
                                        "ENTITY_NAME" => "С этими товарами покупают",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "AJAX_MODE" => "N",
                                        "IBLOCK_TYPE" => "",
                                        "IBLOCK_ID" => IB_ID_SHOP,
                                        "NEWS_COUNT" => 4,
                                        "SORT_BY1" => "SORT",
                                        "SORT_ORDER1" => "ASC",
                                        "SORT_BY2" => "NAME",
                                        "SORT_ORDER2" => "ASC",
                                        "FILTER_NAME" => "filter",
                                        "FIELD_CODE" => [
                                            "CATALOG_PRICE_1",
                                        ],
                                        "PROPERTY_CODE" => [
                                            "MANUFACTURER",
                                        ],
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "SET_TITLE" => "Y",
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_LAST_MODIFIED" => "Y",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "ADD_SECTIONS_CHAIN" => "Y",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "86400",
                                        "CACHE_FILTER" => "Y",
                                        "CACHE_GROUPS" => "Y",
                                        "DISPLAY_TOP_PAGER" => "Y",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "PAGER_TITLE" => "",
                                        "PAGER_SHOW_ALWAYS" => "Y",
                                        "PAGER_TEMPLATE" => "",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "Y",
                                        "PAGER_BASE_LINK_ENABLE" => "Y",
                                        "SET_STATUS_404" => "Y",
                                        "SHOW_404" => "Y",
                                        "MESSAGE_404" => "",
                                        "PAGER_BASE_LINK" => "",
                                        "PAGER_PARAMS_NAME" => "arrPager",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => ""
                                    ]
                                );
                                ?>
                            </div>
                            <div class="cart-price-mob only-mobile">
                                <div class="cart-promocode" data-aos="fade-up"><input class="cart-promocode__input"
                                                                                      placeholder="Ввести промокод">
                                    <button class="button--clean cart-promocode-send">
                                        <svg class="cart-promocode__arrow" width="9" height="14" viewBox="0 0 9 14"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="button--clean cart-promocode-delete"></button>
                                </div>
                                <div class="cart-promocode-error active">— промокод не найден</div>
                                <div class="cart-result" data-aos="fade-up">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/layers/price.php') ?>
                                    <button class="button button--brown cart-stage__product-list-btn"
                                            data-cart-next="1">Перейти к оформлению
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-stage collapsed" data-cart-stage="1">
                        <div class="cart-stage__row">
                            <div class="cart-stage__row-col">
                                <div class="cart-stage__count">2/3</div>
                                <div class="cart-stage__ttl h4 title-font">Контактные данные</div>
                            </div>
                            <button class="button--clean cart-stage__edit only-desktop" data-stage-edit="">Изменить
                            </button>
                        </div>
                        <div class="previous-show" data-next-target="2">
                            <div class="cart-stage-form--result">
                                <p data-name-result="" data-type="get-field" data-field="name">Алексей Иванов</p>
                                <p data-tel-result="" data-type="get-field" data-field="phone">+7 (900) 454-56-56</p>
                                <p data-mail-result="" data-type="get-field" data-field="email">pochta@mail.ru</p>
                                <div data-note-result="" class="note" data-type="get-field" data-field="comment">
                                    «Домофон не работает,
                                    позвоните» U+200E
                                </div>
                            </div>
                            <button class="button button--brown-border cart-stage__edit only-mobile" data-stage-edit="">
                                Изменить
                            </button>
                        </div>
                        <div class="cart-stage-form" data-cart-content="2">
                            <div class="cart-stage-form__note"><sup>*</sup>— поля обязательные для заполнения</div>
                            <?php require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/form/order.php'); ?>
                        </div>
                    </div>
                    <?php

                    if ($ajax === 'deliveries') {
                        $APPLICATION->RestartBuffer();
                    }
                    ?>
                    <div class="cart-stage collapsed" data-cart-stage="2">
                        <div class="cart-stage__row">
                            <div class="cart-stage__row-col">
                                <div class="cart-stage__count">3/3</div>
                                <div class="cart-stage__ttl h4 title-font">Получение заказа</div>
                            </div>
                        </div>
                        <div class="cart-receiving" data-cart-content="" data-type="replace" data-replace="deliveries">
                                <div class="cart-receiving-options" data-tabs>
                                    <?php

                                    $i = 0;
                                    $active = [
                                        ' active'
                                    ];

                                    foreach ($deliveries as $delivery) {
                                        require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/delivery/select/' . $delivery['XML_ID'] . '.php');
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class="cart-receiving-types" data-tabs-content>
                                    <?php

                                    $i = 0;
                                    foreach ($deliveries as $delivery) {
                                        require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/delivery/content/' . $delivery['XML_ID'] . '.php');
                                        $i++;
                                    }
                                    ?>
                                </div>
                        </div>
                        <?php

                        if ($ajax === 'deliveries') {
                            exit;
                        }
                        ?>
                    </div>
                </div>
                <div class="cart-section__col only-desktop">
                    <div class="cart-result-container" data-aos="fade-up">
                        <div class="cart-result-container__top"><a class="cart-section__back-link" href="/shop/">Вернуться к
                                покупкам</a></div>
                        <div class="cart-result" data-type="replace" data-replace="price">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/order/price.php'); ?>
                        </div>
                        <div class="cart-promocode<?php if ($discount['COUPON']) {echo ' delete-active';} ?>" data-container="promo-code"><input class="cart-promocode__input"
                                                                                       data-type="promo-add"
                                                                                       placeholder="Ввести промокод" value="<?=$discount['COUPON']['COUPON']?>">
                            <button class="button--clean cart-promocode-send">
                                <svg class="cart-promocode__arrow" width="9" height="14" viewBox="0 0 9 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <button class="button--clean cart-promocode-delete" data-type="promo-delete"></button>
                        </div>
                        <div class="cart-promocode-error">— промокод не найден</div>
                    </div>
                </div>
            </div>
            <div class="cart-section__body hide" data-cart-body-result="">
                <div class="cart-section__col cart-final">
                    <div class="cart-section__top only-desktop" data-aos="fade-up">
                        <h1 class="title-font h2--big">Оформление заказа</h1>
                    </div>
                    <div class="cart-final__top">
                        <div class="cart-final__ttl h4 title-font">Заказ № <span data-type="order-result-id"></span>
                            создан
                        </div>
                        <div class="cart-final__txt">Менеджер свяжется с вами для уточнения деталей в ближайшее время
                        </div>
                    </div>
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
                                        <source srcset=""
                                                type="image/webp"/>
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
                    <div class="cart-result cart-result-final only-mobile">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/order/price.php'); ?>
                    </div>
                    <div class="cart-final__info" data-result-samovyvos>
                        <div class="cart-pickup">
                            <div class="cart-pickup__info">
                                <div class="cart-pickup__ttl">Самовывоз из клуба «Профессор Фрейд»</div>
                                <div class="cart-pickup__info-item">
                                    <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.378 7.4C15.378 11.9606 9.18901 17 9.18901 17C9.18901 17 3 12.0236 3 7.4C3 3.86538 5.77091 1 9.18901 1C12.6071 1 15.378 3.86538 15.378 7.4Z"
                                              stroke="#1B1B1B"></path>
                                        <ellipse cx="9.18863" cy="7.22485" rx="2.87418" ry="2.97216"
                                                 stroke="#1B1B1B"></ellipse>
                                    </svg>
                                    <div>
                                        <div class="cart-pickup__info-ttl">Адрес</div>
                                        <div class="cart-pickup__info-txt">г. Санкт-Петербург, ул. Малая Морская, дом
                                            18
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-pickup__info-item">
                                    <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.5" cy="8.5" r="7.5" stroke="#1B1B1B"></circle>
                                        <path d="M8.41406 3.33887V8.58519L12.1914 12.0827" stroke="#1B1B1B"></path>
                                    </svg>
                                    <div>
                                        <div class="cart-pickup__info-ttl">Часы работы</div>
                                        <div class="cart-pickup__info-txt">ПН – ЧТ, 12:00 – 00:00<br>ПТ – СБ, 12:00 –
                                            01:00<br>ВС, 13:00 – 23:00
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-pickup__info-item">
                                    <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.5" cy="8.5" r="7.5" stroke="#B69659"></circle>
                                        <path d="M8.5 7.23608L8.5 12.5679" stroke="#B69659"></path>
                                        <path d="M8.5 4.354V5.84497" stroke="#B69659"></path>
                                    </svg>
                                    <div>
                                        <div class="cart-pickup__info-ttl">Алкоголь можно забрать до 22:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-pickup__map">
                                <div id="map2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-final__info" data-result-dostavka>
                        <div class="cart-final-delivery">
                            <div class="cart-pickup__ttl">Доставка</div>
                            <div class="cart-pickup__info-item">
                                <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.378 7.4C15.378 11.9606 9.18901 17 9.18901 17C9.18901 17 3 12.0236 3 7.4C3 3.86538 5.77091 1 9.18901 1C12.6071 1 15.378 3.86538 15.378 7.4Z"
                                          stroke="#1B1B1B"></path>
                                    <ellipse cx="9.18863" cy="7.22485" rx="2.87418" ry="2.97216"
                                             stroke="#1B1B1B"></ellipse>
                                </svg>
                                <div>
                                    <div class="cart-pickup__info-ttl">Адрес</div>
                                    <div class="cart-pickup__info-txt" data-result-adsress></div>
                                </div>
                            </div>
                            <div class="cart-pickup__info-item">
                                <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8.5" cy="8.5" r="7.5" stroke="#B69659"></circle>
                                    <path d="M8.5 7.23608L8.5 12.5679" stroke="#B69659"></path>
                                    <path d="M8.5 4.354V5.84497" stroke="#B69659"></path>
                                </svg>
                                <div>
                                    <div class="cart-pickup__info-ttl">Стоимость доставки уточнит менеджер</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="button button--brown cart-pickup__btn" href="/">Вернуться на главную</a>
                </div>
                <div class="cart-section__col only-desktop">
                    <div class="cart-result-container__top"><a class="cart-section__back-link" href="/shop/">Вернуться к
                            покупкам</a></div>
                    <div class="cart-result" data-aos="fade-up">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/order/price.php'); ?>
                    </div>
                </div>
                <?php

                $filter = [
                    '!IBLOCK_SECTION_ID' => 3,
                ];

                $APPLICATION->IncludeComponent(
                    'bitrix:news.list',
                    'info_list',
                    [
                        'sec_class' => 'articles-section section--top',
                        'ajax' => $ajax,
                        'ACTIVE_DATE_FORMAT' => 'd F Y',
                        'ADD_SECTIONS_CHAIN' => 'Y',
                        'AJAX_MODE' => 'N',
                        'AJAX_OPTION_ADDITIONAL' => '',
                        'AJAX_OPTION_HISTORY' => 'N',
                        'AJAX_OPTION_JUMP' => 'N',
                        'AJAX_OPTION_STYLE' => 'N',
                        'CACHE_FILTER' => 'N',
                        'CACHE_GROUPS' => 'N',
                        'CACHE_TIME' => '36000000',
                        'CACHE_TYPE' => 'N',
                        'CHECK_DATES' => 'N',
                        'DETAIL_URL' => '',
                        'DISPLAY_BOTTOM_PAGER' => 'Y',
                        'DISPLAY_DATE' => 'Y',
                        'DISPLAY_NAME' => 'Y',
                        'DISPLAY_PICTURE' => 'Y',
                        'DISPLAY_PREVIEW_TEXT' => 'N',
                        'DISPLAY_TOP_PAGER' => 'N',
                        'FIELD_CODE' => [
                            'NAME',
                            'DETAIL_PICTURE',
                            'DISPLAY_ACTIVE_FROM'
                        ],
                        'FILE_404' => '',
                        'FILTER_NAME' => 'filter',
                        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                        'IBLOCK_ID' => IB_ID_INFO,
                        'IBLOCK_TYPE' => 'content',
                        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                        'INCLUDE_SUBSECTIONS' => 'N',
                        'MESSAGE_404' => '',
                        'NEWS_COUNT' => '3',
                        'PAGER_BASE_LINK_ENABLE' => 'N',
                        'PAGER_DESC_NUMBERING' => 'N',
                        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                        'PAGER_SHOW_ALL' => 'N',
                        'PAGER_SHOW_ALWAYS' => 'N',
                        'PAGER_TEMPLATE' => '.default',
                        'PAGER_TITLE' => 'Новости',
                        'PARENT_SECTION' => '',
                        'PARENT_SECTION_CODE' => '',
                        'PREVIEW_TRUNCATE_LEN' => '',
                        'PROPERTY_CODE' => ['read_time'],
                        'SET_BROWSER_TITLE' => 'N',
                        'SET_LAST_MODIFIED' => 'N',
                        'SET_META_DESCRIPTION' => 'N',
                        'SET_META_KEYWORDS' => 'N',
                        'SET_STATUS_404' => 'Y',
                        'SET_TITLE' => 'N',
                        'SHOW_404' => 'Y',
                        'SORT_BY1' => 'ACTIVE_FROM',
                        'SORT_BY2' => 'SORT',
                        'SORT_ORDER1' => 'DESC',
                        'SORT_ORDER2' => 'ASC',
                        'STRICT_SECTION_CHECK' => 'N',
                        'COMPONENT_TEMPLATE' => 'info_list'
                    ],
                    false
                );
                ?>
            </div>
        </div>
    </div>
</section>
