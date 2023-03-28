<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<form class="form" novalidate data-cart-form><label class="form__label cart-form-label">
        <div class="form__field-name">Имя<sup>*</sup></div><input class="form__input" data-input-title="name" data-cart-name="" placeholder="Введите ваше имя" required>
    </label><label class="form__label cart-form-label">
        <div class="form__field-name">Фамилия<sup>*</sup></div><input class="form__input" data-input-title="sec-name" data-cart-name2="" placeholder="Введите вашу фамилию" required>
    </label><label class="form__label cart-form-label">
        <div class="form__field-name">Телефон<sup>*</sup></div><input class="form__input" type="tel" placeholder="Введите номер телефона" data-cart-tel="" required>
    </label><label class="form__label cart-form-label">
        <div class="form__field-name">E-mail</div><input class="form__input" type="email" placeholder="Введите ваш электронный адрес" data-cart-mail="">
    </label><label class="form__label cart-form-label">
        <div class="form__field-name">Комментарии к заказу</div><textarea class="form__textarea" data-cart-comment="" placeholder="Введите текст"></textarea>
    </label><button class="button button--brown form__btn" type="submit" data-cart-next="2">Продолжить</button>
    <div class="checkbox cart-stage-form__checkbox"><label class="checkbox__label"><input class="checkbox__input" type="checkbox" checked="checked" required>
            <div class="checkbox__box"><svg class="checkbox__svg" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.8715 1.12386C11.7064 0.958713 11.4386 0.958713 11.2735 1.12386L4.41828 7.97906L1.72193 5.28269C1.5568 5.11752 1.28903 5.11752 1.12386 5.28269C0.958713 5.44783 0.958713 5.71559 1.12386 5.88076L4.11928 8.87617C4.28436 9.04125 4.55222 9.0413 4.71735 8.87617L11.8715 1.72193C12.0367 1.55676 12.0367 1.28901 11.8715 1.12386Z" fill="#1B1B1B" stroke="#1B1B1B" stroke-width="0.5"></path>
                </svg></div>
        </label>
        <div class="checkbox__caption only-desktop">Нажимая на кнопку «Продолжить», вы соглашаетесь<br><a href="/p-p/" target="_blank" data-nolink="">с политикой конфиденциальности</a></div>
        <div class="checkbox__caption only-mobile">Нажимая на кнопку «Продолжить», вы соглашаетесь <a href="/p-p/" target="_blank" data-nolink="">с политикой конфиденциальности</a></div>
    </div>
</form>
