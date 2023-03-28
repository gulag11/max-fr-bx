<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="call-modal" data-fancy-modal="call">
    <div class="call-modal__container">
        <h4 class="call-modal__title">Обратный звонок</h4>
        <form class="form" action="/" data-parsley-validate="data-parsley-validate" data-type="js-form" data-url="<?= SITE_TEMPLATE_PATH . '/include/ajax/form/add.php' ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_TITLE" value="Обратный звонок - <?= $APPLICATION->ShowTitle(false) ?>">
            <input type="hidden" data-type="get-field" data-uf="UF_PAGE" value="Страница - <?= $host; ?><?= $arPath; ?>">
            <input type="hidden" data-type="get-field" data-uf="EVENT_TYPE" value="CALLBACK">
            <div class="form__item">
                <input class="form__input" id="input" placeholder="Имя*" required="required" data-type="get-field" data-uf="UF_NAME" />
            </div>
            <div class="form__item">
                <input class="form__input" id="input" type="number" placeholder="Телефон*" required="required" data-type="get-field" data-uf="UF_PHONE" />
            </div>
            <div class="form__inner">
                <div class="checkbox">
                    <label class="checkbox__label">
                        <input class="checkbox__input" type="checkbox" />
                        <div class="checkbox__box">
                            <svg class="checkbox__svg" width="15" height="11" viewbox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 4.5L6 9L14 1" stroke="#04b2d1" stroke-width="1.5"></path>
                            </svg>
                        </div>
                        <div class="checkbox__text">Даю согласие на обработку</div>
                    </label>
                    <a class="checkbox__link" href="#">персональных данных</a>
                </div>
            </div>
            <div class="form__inner">
                <button class="button button--blue button--wide--mobile">
                    <span class="button__text">
                        <span>Отправить</span>
                    </span>
                    <div class="button__icon">
                        <svg class="button__svg" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.72386 6.66672H0V5.33338H9.72386L5.5286 1.13812L6.4714 0.195312L12.2761 6.00005L6.4714 11.8048L5.5286 10.862L9.72386 6.66672Z" fill="white"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </form>
    </div>
</div>