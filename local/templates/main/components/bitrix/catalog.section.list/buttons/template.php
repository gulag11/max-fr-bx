<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

if (!$arResult['SECTIONS']) {
    return;
}
?>
<div class="category-top__line drinks-filters">
    <?php foreach ($arResult['SECTIONS'] as $section): ?>
        <a class="drinks-filters-item<?=$arResult['CLASS']['ACTIVE'][$section['CODE']]?>" href="<?=$section['SECTION_PAGE_URL']?>">
            <picture>
                <source srcset="" type="image/webp" /><img src="<?=$section['PICTURE']?>" alt="" />
            </picture>
            <div class="drinks-filters-item__title"><?= $section['NAME']; ?></div>
        </a>
    <?php endforeach; ?>
</div>
