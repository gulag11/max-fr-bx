<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="filters-popup-item__list">
    <?php foreach ($data['VALUES'] as $int => $val): ?>
        <button class="category-filter-btn button--clean" data-type="filter"<?=$val['DISABLE']?>>
            <div data-type="filter-val" data-style="button" style="display: none" data-custom-val="Крепость: <?=$int?> из 5" data-custom-compare="<?=$int?>"><?=json_encode($val['VALUE'])?></div>
            <div class="catalog-card__strong">
                <?php for($c = 0; $c < $int; $c++): ?>
                    <div class="point active"></div>
                <?php endfor; ?>
            </div>
            <span class="category-filter-btn__count" data-type="filter-count"><?=$val['COUNT']?></span><span class="category-filter-btn__cross"></span>
        </button>
    <?php endforeach; ?>
</div>
