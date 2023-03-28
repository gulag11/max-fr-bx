<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<dd class="product-top-table__value">
    <img class="flag-ico" src="/upload/countries/<?=$arResult['PROPERTIES'][$property]['VALUE']?>.png">
    <?=$arResult['PROPERTIES'][$property]['VALUE']?>
</dd>
