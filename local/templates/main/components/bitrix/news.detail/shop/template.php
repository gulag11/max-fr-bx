<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<input type="hidden" data-field="count-price"
       value="<span data-type='count'>1</span> шт. х <span data-type='price'><?= (int)$arResult['PRICES']['RESULT_PRICE']['DISCOUNT_PRICE'] ?></span> <?= CURRENCY_FORMAT[$arResult['PRICES']['PRICE']['CURRENCY']] ?>">
<?php if ($arResult['PRICES']['DISCOUNT']): ?>
    <input type="hidden" data-field="full-price" value="<span data-type='full-price'><?=$arResult['PRICES']['RESULT_PRICE']['BASE_PRICE']?></span> <?= CURRENCY_FORMAT[$arResult['PRICES']['PRICE']['CURRENCY']] ?>">
<?php endif; ?>
<div itemscope="" itemtype="http://schema.org/Product">
    <div class="product-top">
    <div class="product-top-mob only-mobile" data-aos="fade-up">
        <h1 class="product-top-ttl" data-field="name" itemprop="name"><?= $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] ?: $arResult['NAME'] ?></h1>
        <div class="product-top-availability">В наличии</div>
        <?php if ($arResult['PROPERTIES']['vendor']['VALUE']) : ?>
            <div class="product-top-code"><?= $arResult['PROPERTIES']['vendor']['NAME'] ?>
                <span><?= $arResult['PROPERTIES']['vendor']['VALUE'] ?></span>
            </div>
        <?php endif; ?>
    </div>
    <div class="product-top-picture" data-aos="fade-up">
        <div class="product-top-gallery">
            <div class="swiper-container" id="gallery-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['GALLERY'] as $img) : ?>
                        <div class="swiper-slide">
                            <div class="product-top-gallery__slide-inner">
                                <picture>
                                    <source srcset="" type="image/webp"/>
                                    <img src="<?= $img['SMALL'] ?>" alt=""/>
                                </picture>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button class="button--clean product-top-gallery__control only-mobile" id="gallery-slider-next">
                <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
        <div class="product-top-img">
            <div class="swiper-container" id="product-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['GALLERY'] as $index => $img) : ?>
                        <div class="swiper-slide">
                            <div  class="product-top-img__cigar">
                                <img itemprop="image" src="<?= $img['BIG'] ?>" alt="" data-field-img>
                            </div>
                            <?php if ($arResult['DRAWING'] && $index === 0): ?>
                                <div class="product-top-img__cigar-size"
                                     data-cigar-height="<?= $arResult['PROPERTIES']['LENGTH']['VALUE'] ?> мм"
                                     data-cigar-diameter="<?= $arResult['PROPERTIES']['THICKNESS']['VALUE'] ?> мм">
                                    <div class="top" data-show-height>привет</div>
                                    <svg viewBox="0 0 63 490" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="31.5" cy="458.5" r="31" stroke="#DADADA"></circle>
                                        <line x1="4.25" y1="442.567" x2="58.1527" y2="473.688" stroke="#DADADA"></line>
                                        <line x1="0.5" y1="1" x2="0.49998" y2="460" stroke="#DADADA"></line>
                                        <line x1="-4.37114e-08" y1="0.5" x2="8" y2="0.499999" stroke="#DADADA"></line>
                                    </svg>
                                    <div class="bottom" data-show-diameter>пока</div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="product-top-labels only-mobile">
                <?php foreach ($item['PROPERTIES']['LABEL']['VALUE'] as $value) : ?>
                    <div class="catalog-card__labels-item label-<?= LABEL_COLOR[mb_strtolower($value)] ?>"><?= $value ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="product-top-info<?= $arResult['BASKET']['CLASS'] ?>" data-aos="fade-up">
        <div class="product-top-labels only-desktop">
            <?php foreach ($arResult['PROPERTIES']['LABEL']['VALUE'] as $value) : ?>
                <div class="catalog-card__labels-item label-<?= LABEL_COLOR[mb_strtolower($value)] ?>"><?= $value ?></div>
            <?php endforeach; ?>
            <?php if ($arResult['PRICES']['DISCOUNT']): ?>
                <div class="catalog-card__labels-item label-red">
                    −<?= $arResult['PRICES']['DISCOUNT']['VALUE'] . ($arResult['PRICES']['DISCOUNT']['VALUE_TYPE'] === 'P' ? '%' : $arResult['PRICES']['DISCOUNT']['CURRENCY']) ?></div>
            <?php endif; ?>
        </div>
        <div class="product-top-code only-desktop">Артикул <span><?= $arResult['PROPERTIES']['ART']['VALUE'] ?></span>
        </div>
        <h1 class="product-top-ttl only-desktop" data-field="name" itemprop="name"><?= $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] ?: $arResult['NAME'] ?></h1>
        <div class="product-top-availability only-desktop">В наличии</div>
        <?php if ($arResult['IS_FEATURE']['BASE']): ?>
            <dl class="product-top-table">
                <?php

                $descr = '';

                foreach ($arParams['FEATURE']['BASE']['PROPS'] as $property => $data) :
                    if (!$arResult['PROPERTIES'][$property]['VALUE']) {
                        continue;
                    }

                    $descr .= '<span>' . $arResult['PROPERTIES'][$property]['NAME'] . ': ' . $arResult['PROPERTIES'][$property]['VALUE'] . ', </span>';
                    ?>
                    <div class="product-top-table__row">
                        <dt class="product-top-table__name"><?= $arResult['PROPERTIES'][$property]['NAME'] . $data['ADDITIONAL_NAME']?><?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/tooltip/' . $data['TOOLTIP']['TEMPLATE'] . '.php'); ?></dt>
                        <div class="product-top-table__line"></div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/properties/' . $data['TEMPLATE'] . '.php'); ?>
                    </div>
                <?php endforeach; ?>
                <input type="hidden" data-field="descr" value="<?= $descr ?>">
            </dl>
            <button class="button--clean product-more-btn" data-anchor-btn="1">Все характеристики</button>
        <?php endif; ?>

        <div itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="product-top-price catalog-card__price">
            <div>
                <span class="current">
                    <span itemprop="price" data-type="price"
                                            data-field="price"><?= (int)$arResult['PRICES']['RESULT_PRICE']['DISCOUNT_PRICE'] ?></span> <?= CURRENCY_FORMAT[$arResult['PRICES']['PRICE']['CURRENCY']] ?></span> 
                                            <meta itemprop="priceCurrency" content="<?= $arResult['PRICES']['PRICE']['CURRENCY'] ?>">
                <?php if ($arResult['PRICES']['DISCOUNT']) : ?>
                    <span  class="old"><?= $arResult['PRICES']['RESULT_PRICE']['BASE_PRICE'] ?> <?= CURRENCY_FORMAT[$arResult['PRICES']['PRICE']['CURRENCY']] ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="product-top-buttons">
            <button class="button button--brown product-button-cart" <?= $arResult['BASKET']['ATTR'] ?> data-event="add"
                    data-id="<?= $arResult['ID'] ?>"><?= $arResult['BASKET']['TEXT']['DESKTOP'] ?>
            </button>
            <button class="button--clean product-button-fav <?php if ($arParams['favor'][$arResult['ID']]) : ?>active<?php endif; ?>"
                    data-type="favor-add" data-id="<?= $arResult['ID'] ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 9.66791C4 4.88005 10.375 3.14238 12.5 7.4929C14.625 3.14238 21 4.88011 21 9.66796C21 14.4558 12.5 20 12.5 20C12.5 20 4 14.4558 4 9.66791Z"
                          stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
                </svg>
            </button>
        </div>
        <div class="product-info-bottom">
            <div class="product-info-bottom__col">
                <div class="product-info-bottom__ttl only-desktop">Самовывоз из магазина</div>
                <div class="product-info-bottom__txt only-desktop">Бесплатно, сегодня</div>
                <span class="product-info-bottom__ttl only-mobile">Самовывоз из магазина — </span>
                <span class="product-info-bottom__txt only-mobile">бесплатно, сегодня</span>
            </div>
            <?php if ($arResult['IS_DELIVERY']): ?>
                <div class="product-info-bottom__col">
                    <div class="product-info-bottom__ttl only-desktop">Доставка</div>
                    <div class="product-info-bottom__txt only-desktop">от 200 ₽, сегодня</div>
                    <span class="product-info-bottom__ttl only-mobile">Доставка — </span>
                    <span class="product-info-bottom__txt only-mobile">от 200 ₽, сегодня</span>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>
    <div class="product-body">
    <?php if ($arResult['DETAIL_TEXT']): ?>
        <article class="product-body__block" data-aos="fade-up">
            <h2 class="h4 title-font product-body__ttl">Описание</h2>
            <?=$arResult['DETAIL_TEXT']?>
        </article>
    <?php endif; ?>
    <?php if ($arResult['IS_FEATURE']): ?>
        <div class="product-body__block" data-aos="fade-up" data-anchor-target="1">
            <h2 class="h4 title-font product-body__ttl">Характеристики</h2>
            <dl class="product-body-info">
                <?php

                foreach ($arParams['FEATURE'] as $type => $propsData) :
                    if (!$arResult['IS_FEATURE'][$type]) {
                        continue;
                    }
                ?>
                    <div class="product-body-info__col">
                        <?php if ($arResult['PROPERTIES']['LENGTH']['VALUE']): ?>
                            <div class="product-body-info__col-ttl"><?= $propsData['NAME'] ?></div>
                        <?php endif; ?>
                        <?php

                        foreach ($propsData['PROPS'] as $property => $data) :
                            if (!$arResult['PROPERTIES'][$property]['VALUE']) {
                                continue;
                            }
                            ?>
                            <div class="product-top-table__row">
                                <dt class="product-top-table__name"><?= $arResult['PROPERTIES'][$property]['NAME'] . $data['ADDITIONAL_NAME']?><?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/tooltip/' . $data['TOOLTIP']['TEMPLATE'] . '.php'); ?></dt>
                                <div class="product-top-table__line"></div>
                                <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/properties/' . $data['TEMPLATE'] . '.php'); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </dl>
        </div>
    <?php endif; ?>
    <div class="product-body__block" data-aos="fade-up">
        <h2 class="h4 title-font product-body__ttl">Способы оплаты и получения заказа</h2>
        <div class="product-body__payment">
            <div class="product-body__payment-col">
                <div class="product-body__payment-ttl">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.93433 17.299V28.9405H27.0784V17.299" stroke="#1B1B1B" stroke-width="1.5"></path>
                        <path d="M18.6603 28.9405V21.2394H13.3524V28.9405H18.6603Z" stroke="#1B1B1B"
                              stroke-width="1.5"></path>
                        <path d="M4.03116 5.8761H10.1417L9.53018 14.2887C9.40686 15.9854 7.99435 17.299 6.29317 17.299V17.299C4.34318 17.299 2.83341 15.5917 3.072 13.6563L4.03116 5.8761Z"
                              stroke="#1B1B1B" stroke-width="1.5"></path>
                        <path d="M27.9751 5.8761H21.8646L22.476 14.2887C22.5994 15.9854 24.0119 17.299 25.7131 17.299V17.299C27.663 17.299 29.1728 15.5917 28.9342 13.6563L27.9751 5.8761Z"
                              stroke="#1B1B1B" stroke-width="1.5"></path>
                        <path d="M10.1753 5.8761H15.9999V14.081C15.9999 15.8583 14.5591 17.299 12.7819 17.299V17.299C10.9091 17.299 9.43188 15.7059 9.57312 13.8384L10.1753 5.8761Z"
                              stroke="#1B1B1B" stroke-width="1.5"></path>
                        <path d="M21.8309 5.8761H16.0064V14.081C16.0064 15.8583 17.4471 17.299 19.2243 17.299V17.299C21.0972 17.299 22.5743 15.7059 22.4331 13.8384L21.8309 5.8761Z"
                              stroke="#1B1B1B" stroke-width="1.5"></path>
                    </svg>
                    Получение заказа
                </div>
                <div class="product-body__payment-txt">Самовывоз из клуба «Профессор Фрейд» по адресу г.
                    Санкт-Петербург, ул. Малая Морская, дом 18
                </div>
                <button class="button--clean two-cols-block__link" data-popup-button="10" btn="btn">Показать на карте
                </button>
            </div>
            <div class="product-body__payment-col">
                <div class="product-body__payment-ttl">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.8182 17.1092V13.4549C28.8182 12.2158 27.8571 11.2081 26.6427 11.1103L23.249 5.18279C22.9345 4.63458 22.4267 4.24275 21.819 4.08005C21.2143 3.91845 20.5818 4.00332 20.0406 4.31837L8.40688 11.0913H6.36365C5.06009 11.0913 4 12.1513 4 13.4549V27.6367C4 28.9403 5.06003 30.0004 6.36365 30.0004H26.4546C27.7581 30.0004 28.8182 28.9403 28.8182 27.6367V23.9824C29.5045 23.7377 30 23.0879 30 22.3186V18.7731C30 18.0037 29.5045 17.354 28.8182 17.1092ZM25.2694 11.0913H20.1191L23.9819 8.84236L25.2694 11.0913ZM23.3947 7.81678L17.7702 11.0913H15.4373L22.8114 6.79797L23.3947 7.81678ZM20.6355 5.33973C20.9027 5.18335 21.2148 5.1418 21.5132 5.22146C21.815 5.30223 22.0666 5.49728 22.223 5.77023L22.2242 5.77239L13.0886 11.0913H10.7557L20.6355 5.33973ZM27.6364 27.6367C27.6364 28.2882 27.106 28.8185 26.4546 28.8185H6.36365C5.71218 28.8185 5.18185 28.2882 5.18185 27.6367V13.4549C5.18185 12.8035 5.71218 12.2731 6.36365 12.2731H26.4546C27.106 12.2731 27.6364 12.8035 27.6364 13.4549V17.0004H24.0909C22.1358 17.0004 20.5455 18.5907 20.5455 20.5458C20.5455 22.5009 22.1358 24.0913 24.0909 24.0913H27.6364V27.6367ZM28.8182 22.3186C28.8182 22.6446 28.5533 22.9095 28.2273 22.9095H24.0909C22.7873 22.9095 21.7272 21.8495 21.7272 20.5458C21.7272 19.2423 22.7873 18.1822 24.0909 18.1822H28.2273C28.5533 18.1822 28.8182 18.447 28.8182 18.7731V22.3186Z"
                              fill="#1B1B1B" stroke="#1B1B1B" stroke-width="0.3"></path>
                        <path d="M24.0912 19.364C23.4397 19.364 22.9094 19.8943 22.9094 20.5458C22.9094 21.1973 23.4397 21.7276 24.0912 21.7276C24.7427 21.7276 25.273 21.1973 25.273 20.5458C25.2731 19.8943 24.7428 19.364 24.0912 19.364Z"
                              fill="#1B1B1B" stroke="#1B1B1B" stroke-width="0.3"></path>
                    </svg>
                    Оплата
                </div>
                <div class="product-body__payment-txt">Банковской картой через мобильный терминал или наличными при
                    самовывозе
                </div>
                <button class="button--clean two-cols-block__link" data-popup-button="18" btn="btn">Доставка и оплата
                </button>
            </div>
        </div>
    </div>
    <div class="product-body__block" data-aos="fade-up">
        <?php include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/layers/form/consultation.php'); ?>
    </div>
</div>
</div>
