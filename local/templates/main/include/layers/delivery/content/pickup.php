<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="cart-receiving-types__item<?=$active[$i]?>" data-content-item
     data-type="get-field-container">
    <input type="hidden" data-type="get-field-select" data-field="delivery"
           value="2">
    <div class="cart-pickup">
        <div class="cart-pickup__info">
            <div class="cart-pickup__ttl">
                <?php

                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'PATH' => '/basket/include/4.php',
                    ]
                );
                ?>
            </div>
            <div class="cart-pickup__info-item">
                <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.378 7.4C15.378 11.9606 9.18901 17 9.18901 17C9.18901 17 3 12.0236 3 7.4C3 3.86538 5.77091 1 9.18901 1C12.6071 1 15.378 3.86538 15.378 7.4Z"
                          stroke="#1B1B1B"></path>
                    <ellipse cx="9.18863" cy="7.22485" rx="2.87418" ry="2.97216"
                             stroke="#1B1B1B"></ellipse>
                </svg>
                <div>
                    <div class="cart-pickup__info-ttl">Адрес</div>
                    <div class="cart-pickup__info-txt">
                        <?php

                        $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            '',
                            [
                                'AREA_FILE_SHOW' => 'file',
                                'PATH' => '/basket/include/1.php',
                            ]
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="cart-pickup__info-item">
                <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="8.5" cy="8.5" r="7.5" stroke="#1B1B1B"></circle>
                    <path d="M8.41406 3.33887V8.58519L12.1914 12.0827"
                          stroke="#1B1B1B"></path>
                </svg>
                <div>
                    <div class="cart-pickup__info-ttl">Часы работы</div>
                    <div class="cart-pickup__info-txt">
                        <?php

                        $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            '',
                            [
                                'AREA_FILE_SHOW' => 'file',
                                'PATH' => '/basket/include/2.php',
                            ]
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="cart-pickup__info-item">
                <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="8.5" cy="8.5" r="7.5" stroke="#B69659"></circle>
                    <path d="M8.5 7.23608L8.5 12.5679" stroke="#B69659"></path>
                    <path d="M8.5 4.354V5.84497" stroke="#B69659"></path>
                </svg>
                <div>
                    <div class="cart-pickup__info-ttl">
                        <?php

                        $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            '',
                            [
                                'AREA_FILE_SHOW' => 'file',
                                'PATH' => '/basket/include/3.php',
                            ]
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-pickup__map">
            <div id="map"></div>
        </div>
    </div>
    <div class="cart-receiving__txt">Менеджер свяжется с вами для уточнения деталей в
        ближайшее время
    </div>
    <button class="button button--brown cart-pickup__btn" data-type="order">Оформить
        заказ
    </button>
</div>
