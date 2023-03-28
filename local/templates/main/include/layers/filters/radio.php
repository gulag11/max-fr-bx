<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<fieldset class="sorting-filter" data-link-container="[data-container=list]">
    <?php foreach ($arResult['FIELDS_ORDER'] as $data): ?>
        <label class="sorting-filter__label">
            <input class="sorting-filter__input" type="radio" name="sorting" data-type="sort" data-field="<?=$data['FIELD']?>" data-by="<?=$data['BY']?>">
            <div class="sorting-filter__txt"><?=$data['NAME']?></div>
        </label>
    <?php endforeach; ?>
</fieldset>
