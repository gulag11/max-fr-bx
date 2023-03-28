<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="mobile-nav">
    <?php foreach ($arResult as $data): ?>
        <<?=$data['TAG']?> class="mobile-nav__item<?php if ($data['SELECTED']) {echo ' active';}?>" href="<?=$data['LINK']?>" <?=$data['PARAMS']['popup'];?>>
            <?php

            if ($data['PARAMS']['count']) {
                echo '<div class="mobile-nav__item-count">';
            }

            echo $data['PARAMS']['svg'];

            if ($data['PARAMS']['count']) {
                echo '<div class="count-num"' . $data['PARAMS']['attr'] . '>' . $arParams['VIEW_COUNT'][$data['LINK']] . '</div></div>';
            }

            echo $data['TEXT'];
            ?>
        </<?=$data['TAG']?>>
    <?php endforeach; ?>
</div>
