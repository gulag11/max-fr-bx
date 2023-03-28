<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<form class="product-body-consult" novalidate data-type="js-form" data-url="<?= SITE_TEMPLATE_PATH . '/include/ajax/form/add.php' ?>">
    <input type="hidden" data-type="get-field" data-uf="EVENT_TYPE" value="CONSULTATION">
    <input type="hidden" data-type="get-field" data-uf="UF_PAGE" value="<?= $arParams['UF_PAGE'] ?>">
    <h2 class="h4 title-font product-body__ttl">Получите консультацию специалиста</h2>
    <div class="product-body-consult__row">
        <label class="form__label">
            <div class="form__field-name">Ваше имя</div>
            <input data-type="get-field" data-uf="UF_NAME" class="form__input" data-input-title="name" placeholder="Введите ваше имя" required>
        </label>
        <label class="form__label">
            <div class="form__field-name">Телефон</div>
            <input data-type="get-field" data-uf="UF_PHONE" class="form__input" type="tel" placeholder="Введите номер телефона" required>
        </label>
    </div>
    <button class="button button--brown-border" type="">Получить консультацию</button>
    <div class="checkbox"><label class="checkbox__label"><input class="checkbox__input" type="checkbox" checked="checked" required>
            <div class="checkbox__box">
                <svg class="checkbox__svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="20" fill="#B69659"></rect>
                    <path d="M15.8598 5.13934C15.6797 4.95355 15.3876 4.95355 15.2074 5.13934L7.72903 12.8514L4.78756 9.81802C4.60742 9.63221 4.3153 9.63221 4.13512 9.81802C3.95496 10.0038 3.95496 10.305 4.13512 10.4909L7.40285 13.8607C7.58294 14.0464 7.87515 14.0465 8.05529 13.8607L15.8598 5.81217C16.04 5.62636 16.04 5.32513 15.8598 5.13934Z" fill="white"></path>
                </svg>
            </div>
        </label>
        <div class="checkbox__caption only-desktop">Нажимая на кнопку «Продолжить», вы соглашаетесь<br>
            <a href="/p-p/" target="_blank" data-nolink="">с политикой конфиденциальности</a>
        </div>
        <div class="checkbox__caption only-mobile">Нажимая на кнопку «Продолжить», вы соглашаетесь
            <a href="/p-p/" target="_blank" data-nolink="">с политикой конфиденциальности</a>
        </div>
    </div>
</form>