<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="filters-popup-item__list">
    <?php

    $i = 0;
    foreach ($data['VALUES'] as  $val):
        if ($i > 5) {
            break;
        }

        $i++;
    ?>
        <button class="category-filter-btn button--clean" data-type="filter"<?=$val['DISABLE']?>>
            <span data-type="filter-val" data-style="button"><?=$val['VALUE']?></span>
            <span class="category-filter-btn__count" data-type="filter-count"><?=$val['COUNT']?></span>
            <span class="category-filter-btn__cross"></span>
        </button>
    <?php endforeach; ?>
</div>
