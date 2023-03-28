<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
    <div class="category-top search-top" data-aos="fade-up">
        <div class="category-top__line">
            <div class="category-title-block">
                <h1 class="category-title h2 only-desktop">Результаты поиска</h1>
                <h1 class="category-title h2 only-mobile">Поиск</h1>
                <div class="category-items-count"><?= $arResult['COUNT'] . ' ' . ending($arResult['COUNT'], 'товар', [0 => 'ов', 1 => '', 2 => 'а', 3 => 'а', 4 => 'а', 'more' => 'ов'], [5, 9]) ?></div>
            </div>
            <form method="get" action="/search/" class="category-search only-desktop" data-search-block>
                <label class="category-search__label"><input
                            class="category-search__input" type="search" name="q" placeholder="Поиск по каталогу"></label>
                <button class="category-search__button" type="submit">
                    <svg class="search-icon" width="17" height="18" viewBox="0 0 17 18" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3807 13L16.1111 17M2.95262 2.95262C5.55612 0.349126 9.77722 0.349126 12.3807 2.95262C14.9842 5.55612 14.9842 9.77722 12.3807 12.3807C9.77722 14.9842 5.55612 14.9842 2.95262 12.3807C0.349126 9.77722 0.349126 5.55612 2.95262 2.95262Z"
                              stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </form>
        </div>
        <?php if ($arResult['REQUEST']['QUERY']): ?>
            <div class="search-top__count">Найдено
                <span><?= $arResult['COUNT'] ?> </span><?= ending($arResult['COUNT'], 'товар', [0 => 'ов', 1 => '', 2 => 'а', 3 => 'а', 4 => 'а', 'more' => 'ов'], [5, 9]) ?>
                по запросу «<?= $arResult['REQUEST']['QUERY'] ?>»
            </div>
        <?php endif; ?>
    </div>
<?php

require($arResult['TEMPLATE']);

