<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="filter-checkboxes">
    <?php foreach ($data['VALUES'] as $val): ?>
        <label class="checkbox filter-checkbox" data-container="filter-item"<?=$val['DISABLE']?>>
            <div class="checkbox__label"><input class="checkbox__input" type="checkbox" data-type="filter">
                <div class="checkbox__box">
                    <svg class="checkbox__svg" width="13" height="10" viewBox="0 0 13 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8715 1.12386C11.7064 0.958713 11.4386 0.958713 11.2735 1.12386L4.41828 7.97906L1.72193 5.28269C1.5568 5.11752 1.28903 5.11752 1.12386 5.28269C0.958713 5.44783 0.958713 5.71559 1.12386 5.88076L4.11928 8.87617C4.28436 9.04125 4.55222 9.0413 4.71735 8.87617L11.8715 1.72193C12.0367 1.55676 12.0367 1.28901 11.8715 1.12386Z"
                              fill="#1B1B1B" stroke="#1B1B1B" stroke-width="0.5"></path>
                    </svg>
                </div>
            </div>
            <div class="checkbox__caption">до <span data-type="filter-val" data-style="checkbox"><?=$val['VALUE']?></span> мин<span class="count" data-type="filter-count"><?=$val['COUNT']?></span></div>
        </label>
    <?php endforeach; ?>
</div>
