<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="catalog-card__strong">
    <?= $item['PROPERTIES'][$data['CODE']]['NAME'] ?>
    <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="point<?php if ($i < (int)$item['PROPERTIES'][$data['CODE']]['VALUE']) {
            echo ' active';
        } ?>"></div>
    <?php endfor; ?>
</div>
