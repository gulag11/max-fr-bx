<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="modal modal--right booking-popup" data-popup="1" data-select-context>
    <div class="review-popup__top only-mobile">
        <div class="review-popup__ttl h4 title-font">Бронирование</div>
        <button class="button--clean modal__close" data-modal-close></button>
    </div>
    <div class="booking-popup__wrapper booking-popup-form">
        <h2 class="h4 title-font booking-popup-form__ttl only-desktop">Бронирование</h2>
        <div class="cart-stage-form__note">
            <sup>*</sup>
            — поля обязательные для заполнения
        </div>
        <form novalidate id="booking-form" data-type="js-form" data-url="<?= SITE_TEMPLATE_PATH . '/include/ajax/feed_form.php' ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_TITLE" value="Бронирование - <?= $APPLICATION->ShowTitle(false) ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_PAGE" value="Страница - <?= $host; ?><?= $arPath; ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_MAIL_EVENT_TYPE" value="RESERVATION">
            <input type="hidden" data-type="get-field" data-uf="UF_SEC" value="<?= $arPath; ?>">
            <label class="form__label">
                <div class="form__field-name">
                    Имя<sup>*</sup>
                </div>
                <input class="form__input" placeholder="Введите ваше имя" data-type="get-field" data-uf="UF_NAME" required>
            </label>
            <label class="form__label">
                <div class="form__field-name">
                    Телефон<sup>*</sup>
                </div>
                <input class="form__input" type="tel" placeholder="Введите номер телефона" data-type="get-field" data-uf="UF_PHONE" required>
            </label>
            <div class="select-label" data-select-label>
                <div class="select-input">
                    <div class="form__field-name">
                        Место<sup>*</sup>
                    </div>
                    <div class="select-input__row" data-select-input>
                        <input placeholder="Выберите зону клуба" data-readonly readonly="readonly" data-type="get-field" data-uf="UF_PLACE" required>
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L5 5.5L9 1.5" stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
                <div class="select" data-select>
                    <ul class="select__wrapper">
                        <?php foreach ($arBooking as $key => $item) : ?>
                            <li class="select__option" data-type="place-option" data-path="<?= $item['page'] ?>" data-select-option="<?= $item['NAME'] ?>"><?= $item['NAME'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="booking-popup-form__row">
                <label class="form__label">
                    <div class="form__field-name">
                        Дата<sup>*</sup>
                    </div>
                    <div class="booking-popup-form__datepicker disabled" data-type="par-date-div">
                        <input placeholder="__/__/____" readonly="readonly" data-booking="date" data-type="get-field" data-uf="UF_DATE" disabled="disabled" data-readonly data-datepicker required>
                        <svg class="calendar-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.8571 2.14286H15.7143V0.714299C15.7143 0.319796 15.3945 0 15 0C14.6055 0 14.2857 0.319796 14.2857 0.714299V2.14286H5.71427V0.714299C5.71427 0.319796 5.39447 0 5.00001 0C4.60555 0 4.28571 0.319796 4.28571 0.714299V2.14286H2.14286C0.959388 2.14286 0 3.10224 0 4.28571V17.8571C0 19.0406 0.959388 20 2.14286 20H17.8571C19.0406 20 20 19.0406 20 17.8571V4.28571C20 3.10224 19.0406 2.14286 17.8571 2.14286ZM18.5714 17.8571C18.5714 18.2516 18.2516 18.5714 17.8571 18.5714H2.14286C1.74835 18.5714 1.42856 18.2516 1.42856 17.8571V8.57142H18.5714V17.8571ZM18.5714 7.14287H1.42856V4.28571C1.42856 3.89121 1.74835 3.57141 2.14286 3.57141H4.28571V4.99997C4.28571 5.39447 4.60551 5.71427 5.00001 5.71427C5.39451 5.71427 5.71431 5.39447 5.71431 4.99997V3.57141H14.2857V4.99997C14.2857 5.39447 14.6055 5.71427 15 5.71427C15.3945 5.71427 15.7143 5.39447 15.7143 4.99997V3.57141H17.8572C18.2517 3.57141 18.5715 3.89121 18.5715 4.28571V7.14287H18.5714Z" fill="#909090"></path>
                            <path d="M5.71427 10H4.28571C3.89121 10 3.57141 10.3198 3.57141 10.7143C3.57141 11.1088 3.89121 11.4286 4.28571 11.4286H5.71427C6.10878 11.4286 6.42857 11.1088 6.42857 10.7143C6.42857 10.3198 6.10878 10 5.71427 10Z" fill="#909090"></path>
                            <path d="M10.7144 10H9.28584C8.89133 10 8.57153 10.3198 8.57153 10.7143C8.57153 11.1088 8.89133 11.4286 9.28584 11.4286H10.7144C11.1089 11.4286 11.4287 11.1088 11.4287 10.7143C11.4287 10.3198 11.1089 10 10.7144 10Z" fill="#909090"></path>
                            <path d="M15.7142 10H14.2856C13.8911 10 13.5714 10.3198 13.5714 10.7143C13.5714 11.1088 13.8911 11.4286 14.2856 11.4286H15.7142C16.1087 11.4286 16.4285 11.1088 16.4285 10.7143C16.4285 10.3198 16.1087 10 15.7142 10Z" fill="#909090"></path>
                            <path d="M5.71427 12.8569H4.28571C3.89121 12.8569 3.57141 13.1767 3.57141 13.5712C3.57141 13.9657 3.89121 14.2855 4.28571 14.2855H5.71427C6.10878 14.2855 6.42857 13.9657 6.42857 13.5712C6.42857 13.1767 6.10878 12.8569 5.71427 12.8569Z" fill="#909090"></path>
                            <path d="M10.7144 12.8569H9.28584C8.89133 12.8569 8.57153 13.1767 8.57153 13.5712C8.57153 13.9657 8.89133 14.2855 9.28584 14.2855H10.7144C11.1089 14.2855 11.4287 13.9657 11.4287 13.5712C11.4287 13.1767 11.1089 12.8569 10.7144 12.8569Z" fill="#909090"></path>
                            <path d="M15.7142 12.8569H14.2856C13.8911 12.8569 13.5714 13.1767 13.5714 13.5712C13.5714 13.9657 13.8911 14.2855 14.2856 14.2855H15.7142C16.1087 14.2855 16.4285 13.9657 16.4285 13.5712C16.4285 13.1767 16.1087 12.8569 15.7142 12.8569Z" fill="#909090"></path>
                            <path d="M5.71427 15.7144H4.28571C3.89121 15.7144 3.57141 16.0342 3.57141 16.4287C3.57141 16.8232 3.89121 17.1429 4.28571 17.1429H5.71427C6.10878 17.1429 6.42857 16.8231 6.42857 16.4286C6.42857 16.0341 6.10878 15.7144 5.71427 15.7144Z" fill="#909090"></path>
                            <path d="M10.7144 15.7144H9.28584C8.89133 15.7144 8.57153 16.0342 8.57153 16.4287C8.57153 16.8232 8.89133 17.143 9.28584 17.143H10.7144C11.1089 17.143 11.4287 16.8232 11.4287 16.4287C11.4287 16.0342 11.1089 15.7144 10.7144 15.7144Z" fill="#909090"></path>
                            <path d="M15.7142 15.7144H14.2856C13.8911 15.7144 13.5714 16.0342 13.5714 16.4287C13.5714 16.8232 13.8911 17.143 14.2856 17.143H15.7142C16.1087 17.143 16.4285 16.8232 16.4285 16.4287C16.4285 16.0342 16.1087 15.7144 15.7142 15.7144Z" fill="#909090"></path>
                        </svg>
                    </div>
                </label>
                <label class="form__label">
                    <div class="form__field-name">
                        Время<sup>*</sup>
                        <div class="tooltip" data-type="tooltip-date-block" style="display:none;">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="9.5" cy="9.5" r="9.5" fill="#DFE7E3"></circle>
                                <path d="M9.59264 5.25571C7.94403 5.25571 6.72803 6.24955 6.72803 7.76955H7.79203C7.8271 7.05632 8.27141 6.14432 9.56926 6.14432C10.4696 6.14432 11.1243 6.61201 11.1243 7.36032C11.1243 8.12032 10.645 8.58801 10.037 8.97386C9.0548 9.60525 8.5871 10.0262 8.5871 11.0083V11.4059H9.67449V11.0434C9.67449 10.4003 9.93172 10.1899 10.6566 9.72217C11.4517 9.2194 12.2351 8.43601 12.2351 7.31355C12.2351 5.89878 10.9139 5.25571 9.59264 5.25571ZM9.82649 13.8846V12.54H8.48187V13.8846H9.82649Z" fill="#0F2C2D"></path>
                            </svg>
                            <div class="tooltip__txt" data-type="tooltip-date">Пн-Чт, 12:00 – 00:00<br>Пн-Сб, 12:00 – 01:00<br>Вс, 13:00 – 23:00</div>
                        </div>
                    </div>
                    <input class="form__input" data-type="get-field" data-uf="UF_TIME" data-time-input="" data-place="" data-weekday="" data-mask="##:##" required>
                </label>
            </div>
            <label class="form__label">
                <div class="form__field-name">
                    Количество гостей<sup>*</sup>
                </div>
                <input class="form__input" type="number" placeholder="Введите число гостей" data-type="get-field" data-uf="UF_NUMBER_OF_GUESTS" required>
            </label>
            <button class="button button--brown booking-popup-form__btn only-desktop">Забронировать</button>
        </form>
        <div class="booking-popup-form__note">
            Нажимая на кнопку «Забронировать», вы соглашаетесь с <a href="/p-p/" target="_blank">политикой конфиденциальности</a>
        </div>
    </div>
    <div class="review-popup__bottom only-mobile">
        <button class="button button--brown" form="booking-form">Забронировать</button>
        <button class="button button--brown-border" data-modal-close="">Закрыть</button>
    </div>
    <button class="button--clean modal__close only-desktop" data-modal-close></button>
</div>
<div class="modal modal--right review-popup success-popup" data-popup="16">
    <div class="review-popup__body">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.9161 47.884C10.281 47.884 0 37.6034 0 24.9683C0 12.3333 10.281 2.05225 22.9161 2.05225C27.3097 2.05225 31.5843 3.30419 35.278 5.67495C36.0031 6.14186 36.2156 7.10847 35.7487 7.83553C35.2803 8.56259 34.3156 8.77277 33.5885 8.30625C30.401 6.2582 26.7097 5.17715 22.9161 5.17715C12.0037 5.17715 3.1249 14.056 3.1249 24.9683C3.1249 35.8803 12.0037 44.7591 22.9161 44.7591C33.8281 44.7591 42.7069 35.8803 42.7069 24.9683C42.7069 24.316 42.6756 23.6702 42.6153 23.0351C42.5322 22.1745 43.1612 21.412 44.0195 21.3288C44.8819 21.2495 45.6422 21.8747 45.7257 22.733C45.7963 23.4684 45.8318 24.2142 45.8318 24.9683C45.8318 37.6034 35.5511 47.884 22.9161 47.884Z" fill="#B69659"></path>
            <path d="M25.5204 30.1763C25.1206 30.1763 24.7205 30.0241 24.4164 29.7182L15.0417 20.3435C14.4314 19.7328 14.4314 18.7433 15.0417 18.1329C15.6521 17.5226 16.6416 17.5226 17.2519 18.1329L25.5227 26.4037L47.3321 4.59386C47.9429 3.98353 48.9324 3.98353 49.5427 4.59386C50.153 5.20419 50.153 6.19369 49.5427 6.80402L26.6266 29.7201C26.3203 30.0241 25.9205 30.1763 25.5204 30.1763Z" fill="#B69659"></path>
        </svg>
        <div class="success-popup__ttl title-font h4">Ваша заявка принята</div>
        <div class="success-popup__txt">Менеджер перезвонит вам в ближайшее<br>время , для подтверждения брони.<br>Пожалуйста, ожидайте звонка</div>
        <div class="success-popup__txt-small" data-type="response-text">Вы забронировали столик на 4 персоны<br>в зоне «Винотека». Ждем вас 16.08.21 в 19:00</div>
    </div>
    <div class="review-popup__bottom">
        <button class="button button--brown-border" data-modal-close="">Закрыть</button>
    </div>
    <button class="button--clean modal__close" data-modal-close></button>
</div>