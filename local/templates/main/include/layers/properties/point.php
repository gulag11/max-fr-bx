<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="product-top-table__value">
    <div class="catalog-card__strong">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="point<?php if ($i <= (int) $arResult['PROPERTIES'][$property]['VALUE']) {echo ' active';}?>"></div>
        <?php endfor; ?>
    </div>
</div>
