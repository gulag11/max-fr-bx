<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="articles-detail">
    <div class="articles-detail__top" data-aos="fade-up">
        <div class="articles-detail__info articles-card__info">
            <div class="articles-card__info-col"><?= $arResult['DISPLAY_ACTIVE_FROM'] ?></div>
            <?php if ($arResult['PROPERTIES']['read_time']['VALUE']) : ?>
                <div class="articles-card__info-col"><?= $arResult['PROPERTIES']['read_time']['VALUE'] ?></div>
            <?php endif; ?>
        </div>
        <h1 class="articles-detail__ttl h1 title-font"><?= $arResult['NAME'] ?></h1>
    </div>
    <?php if ($arResult['PREVIEW_TEXT']) : ?>
        <p data-aos="fade-up"><?= $arResult['PREVIEW_TEXT'] ?></p>
    <?php endif;
    if ($arResult['img']['src']) : ?>
        <div class="articles-detail__img" data-aos="fade-up" data-type="snippet-img-hide">
            <picture>
                <source srcset="<?= $arResult['img']['src'] ?>" type="image/webp" />
                <img class="articles-detail__img-inner" src="<?= $arResult['img']['src'] ?>" alt="" />
            </picture>
        </div>
    <?php endif;
    if ($arResult['DETAIL_TEXT']) : ?>
        <?= $arResult['DETAIL_TEXT'] ?>
    <?php endif; ?>
</div>