<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="modal modal--right booking-popup" data-popup="8">
    <div class="review-popup__top only-mobile">
        <div class="review-popup__ttl h4 title-font">Получите консультацию специалиста</div>
        <button class="button--clean modal__close" data-modal-close>

        </button>
    </div>
    <div class="booking-popup__wrapper booking-popup-form">
        <h2 class="h4 title-font booking-popup-form__ttl only-desktop">Получите консультацию<br>специалиста</h2>
        <div class="certificate-popup-txt only-desktop">Мы ответим на все ваши вопросы</div>
        <div class="cart-stage-form__note"><sup>*</sup>— поля обязательные для заполнения</div>
        <form novalidate id="consult-form" data-type="js-form" data-url="<?= SITE_TEMPLATE_PATH . '/include/ajax/form/add.php' ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_TITLE" value="Получите консультацию - <?= $APPLICATION->ShowTitle(false) ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_PAGE" value="Страница - <?= $host; ?><?= $arPath; ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_MAIL_EVENT_TYPE" value="FEEDBACK">
            <label class="form__label">
                <div class="form__field-name">
                    Ваше имя<sup>*</sup>
                </div>
                <input class="form__input" placeholder="Введите ваше имя" data-type="get-field" data-uf="UF_NAME"  required>
            </label>
            <label class="form__label">
                <div class="form__field-name">
                    Телефон<sup>*</sup>
                </div>
                <input class="form__input" type="tel" placeholder="Введите номер телефона" data-type="get-field" data-uf="UF_PHONE" required>
            </label>
            <button class="button button--brown booking-popup-form__btn only-desktop">Узнать стоимость</button>
            <div class="booking-popup-form__note">Нажимая на кнопку «Узнать стоимость», вы соглашаетесь с <a href="/p-p/" target="_blank" data-nolink="">политикой конфиденциальности</a></div>
        </form>
    </div>
    <div class="review-popup__bottom only-mobile">
        <button class="button button--brown" form="consult-form">Узнать стоимость</button>
    </div>
    <button class="button--clean modal__close only-desktop" data-modal-close></button>
</div>