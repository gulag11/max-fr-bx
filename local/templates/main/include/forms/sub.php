<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<section class="section section--black subscription-section">
    <div class="container">
        <div class="big-titles white-ttl" data-aos="fade-up">
            <div class="big-titles__subttl">новые поступления и полезные материалы</div>
            <h2 class="big-titles__ttl h1">Новости клуба</h2>
        </div>
        <div class="two-cols-block__txt txt-white only-desktop" data-aos="fade-up">Подпишитесь на последние обновления — только полезная<br>информация</div>
        <div class="two-cols-block__txt txt-white only-mobile" data-aos="fade-up">Подпишитесь на последние обновления — только полезная информация</div>
        <form class="subscription-form" data-type="js-form" data-url="<?= SITE_TEMPLATE_PATH . '/include/ajax/sub_form.php' ?>" novalidate data-aos="fade-up">
            <input type="hidden" data-type="get-field" data-uf="UF_MAIL_EVENT_TYPE" value="SUB">
            <div class="subscription-form__row">
                <input class="subscription-form__input" type="email" id="email" placeholder="Ваш e-mail" data-input="check" data-type="get-field" data-uf="UF_EMAIL" data-input-mail required>
                <input class="button button--brown subscription-form__button button--on-black" type="submit" value="Подписаться" />
            </div>
            <div class="checkbox subscription-form__checkbox">
                <label class="checkbox__label">
                    <input class="checkbox__input" type="checkbox" id="checkbox" checked="checked" required>
                    <div class="checkbox__box">
                        <svg class="checkbox__svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="20" height="20" fill="#B69659"></rect>
                            <path d="M15.8598 5.13934C15.6797 4.95355 15.3876 4.95355 15.2074 5.13934L7.72903 12.8514L4.78756 9.81802C4.60742 9.63221 4.3153 9.63221 4.13512 9.81802C3.95496 10.0038 3.95496 10.305 4.13512 10.4909L7.40285 13.8607C7.58294 14.0464 7.87515 14.0465 8.05529 13.8607L15.8598 5.81217C16.04 5.62636 16.04 5.32513 15.8598 5.13934Z" fill="white"></path>
                        </svg>
                    </div>
                </label>
                <div class="checkbox__caption only-desktop">Нажимая на кнопку «Подписаться», вы соглашаетесь с<br><a href="/p-p/" target="_blank" data-nolink="">политикой обработки персональных данных</a></div>
                <div class="checkbox__caption only-mobile">Нажимая на кнопку «Подписаться», вы соглашаетесь с <a href="/p-p/" target="_blank" data-nolink="">политикой обработки персональных данных</a></div>
            </div>
        </form>
    </div>
</section>
