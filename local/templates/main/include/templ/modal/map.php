<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<div class="modal modal--right review-popup" data-popup="10">
    <div class="review-popup__top">
        <div class="review-popup__ttl h4 title-font">Получение заказа</div>
        <button class="button--clean modal__close" data-modal-close></button>
    </div>
    <div class="review-popup__body">
        <div class="cart-pickup__ttl">
            <?php $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/delivery/include/modal_ttl.php'
                ]
            ); ?>
        </div>
        <div class="cart-pickup__info-item">
            <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.378 7.4C15.378 11.9606 9.18901 17 9.18901 17C9.18901 17 3 12.0236 3 7.4C3 3.86538 5.77091 1 9.18901 1C12.6071 1 15.378 3.86538 15.378 7.4Z" stroke="#1B1B1B"></path>
                <ellipse cx="9.18863" cy="7.22485" rx="2.87418" ry="2.97216" stroke="#1B1B1B"></ellipse>
            </svg>
            <div>
                <?php if ($arOptions['UF_ADDRESS']) : ?>
                    <div class="cart-pickup__info-ttl">Адрес</div>
                    <div class="cart-pickup__info-txt"><?= $arOptions['UF_ADDRESS'] ?></div>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($arOptions['UF_WORK_MODE']) : ?>
            <div class="cart-pickup__info-item">
                <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="8.5" cy="8.5" r="7.5" stroke="#1B1B1B"></circle>
                    <path d="M8.41406 3.33887V8.58519L12.1914 12.0827" stroke="#1B1B1B"></path>
                </svg>
                <div>
                    <div class="cart-pickup__info-ttl">Часы работы</div>
                    <div class="cart-pickup__info-txt">
                        <?php foreach ($arOptions['UF_WORK_MODE'] as $key => $mode) {
                            echo ($mode);
                            echo ('<br>');
                        } ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="cart-pickup__info-item">
            <svg class="cart-pickup__svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="8.5" cy="8.5" r="7.5" stroke="#B69659"></circle>
                <path d="M8.5 7.23608L8.5 12.5679" stroke="#B69659"></path>
                <path d="M8.5 4.354V5.84497" stroke="#B69659"></path>
            </svg>
            <div>
                <div class="cart-pickup__info-ttl">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/delivery/include/modal_txt_1.php'
                        ]
                    ); ?>
                </div>
                <div class="cart-pickup__info-txt">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/delivery/include/modal_txt_2.php'
                        ]
                    ); ?>
                </div>
            </div>
        </div>
        <div class="pickup-popup-map">
            <div id="map"></div>
        </div>
    </div>
    <div class="review-popup__bottom">
        <button class="button button--brown-border" data-modal-close="">Закрыть</button>
    </div>
</div>