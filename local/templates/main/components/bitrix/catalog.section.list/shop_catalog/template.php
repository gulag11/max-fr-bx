<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="shop-page-head__categories">
    <?php foreach ($arResult['SECTIONS'] as $index => $section) : ?>
        <a class="shop-page-head__card" href="<?= $section['SECTION_PAGE_URL'] ?>" data-aos="fade-up">
            <div class="shop-page-head__card-img">
                <picture>
                    <source srcset="<?= $section['IMG']['src'] ?>" type="image/webp" />
                    <img src="<?= $section['IMG']['src'] ?>" alt="" />
                </picture>
            </div>
            <div class="shop-page-head__card-ttl h4"><?= $section['NAME'] ?></div>
        </a>
    <?php endforeach; ?>
</div>
