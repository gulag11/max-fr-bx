<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="breadcrumbs" data-aos="fade-up">
    <ul class="breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a class="breadcrumbs__link" href="/" tabindex="0" itemprop="item">
                <span itemprop="name">Главная</span>
                <meta itemprop="position" content="1" />
            </a>
        </li>
        <?php

        $APPLICATION->IncludeComponent(
            'bitrix:breadcrumb',
            'breadcrumb',
            [
                'PATH' => '',
                'SITE_ID' => 's1',
                'START_FROM' => '0'
            ]
        ); ?>
    </ul>
</div>
