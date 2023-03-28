<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="filter-range" id="range-slider-container">
    <div class="filter-range__input"><span>От</span><input id="range-from" type="number"></div>
    <div class="filter-range__input"><span>До</span><input id="range-to" type="number"></div>
    <div class="filter-range__slider" id="range-slider" data-range-min="<?=$data['VALUES'][0]?>" data-range-max="<?=$data['VALUES'][1]?>"></div>
</div>
