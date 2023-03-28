<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="cart-receiving-types__item<?=$active[$i]?>" data-content-item
     data-type="get-field-container">
    <input type="hidden" data-type="get-field-select" data-field="delivery"
           value="3">
    <div class="cart-receiving-form__ttl">Укажите адрес доставки</div>
    <div class="cart-receiving-form__note"><sup>*</sup>— поля обязательные для
        заполнения
    </div>
    <form class="cart-receiving-form__form" novalidate><label class="form__label">
            <div class="form__field-name">Адрес<sup>*</sup></div>
            <input class="form__input" data-input-title="address"
                   data-type="get-field-select" data-field="address_street"
                   placeholder="Введите город, улицу, дом, корпус"
                   data-dostavka-address="" required>
        </label>
        <div class="cart-receiving-form__row"><label class="form__label">
                <div class="form__field-name">Номер квартиры/офиса</div>
                <input class="form__input" type="number" placeholder="Введите номер"
                       data-type="get-field-select" data-field="address_number"
                       data-dostavka-address2="">
            </label>
            <div class="checkbox"><label class="checkbox__label"><input
                        class="checkbox__input" type="checkbox"
                        data-input-novalidate data-field="private_house">
                    <div class="checkbox__box">
                        <svg class="checkbox__svg" width="13" height="10"
                             viewBox="0 0 13 10" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8715 1.12386C11.7064 0.958713 11.4386 0.958713 11.2735 1.12386L4.41828 7.97906L1.72193 5.28269C1.5568 5.11752 1.28903 5.11752 1.12386 5.28269C0.958713 5.44783 0.958713 5.71559 1.12386 5.88076L4.11928 8.87617C4.28436 9.04125 4.55222 9.0413 4.71735 8.87617L11.8715 1.72193C12.0367 1.55676 12.0367 1.28901 11.8715 1.12386Z"
                                  fill="#1B1B1B" stroke="#1B1B1B"
                                  stroke-width="0.5"></path>
                        </svg>
                    </div>
                </label>
                <div class="checkbox__caption">Частный дом</div>
            </div>
        </div>
        <label class="form__label">
            <div class="form__field-name">Комментарии к доставке</div>
            <textarea class="form__textarea" placeholder="Введите текст"
                      data-type="get-field-select"
                      data-field="delivery_comment"></textarea>
        </label>
        <div class="cart-receiving-form__txt only-desktop">Доставка разрешена не для
            всех товаров из нашего каталога.<br>Менеджер перезвонит вам в ближайшее
            время и проконсультирует вас
        </div>
        <div class="cart-receiving-form__txt only-mobile">Доставка разрешена не для всех
            товаров из нашего каталога. Менеджер перезвонит вам в ближайшее время и
            проконсультирует вас
        </div>
        <button class="button button--brown cart-receiving-form__btn" data-type="order">Оформить заказ
        </button>
        <a class="cart-receiving-form__link"
           href="https://minzdrav.gov.ru/documents/5736-federalnyy-zakon-15-fz-ot-23-fevralya-2013-g"
           target="_blank" data-nolink="">Федеральный закон №15-ФЗ от 23 февраля 2013 года</a>
    </form>
</div>
