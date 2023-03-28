<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="modal modal--right review-popup" data-popup="14">
    <div class="review-popup__top">
        <div class="review-popup__ttl h4 title-font">Поиск</div>
        <button class="button--clean modal__close" data-modal-close></button>
    </div>
    <div class="review-popup__body">
        <form action="/search/" method="get" class="category-search mob">
            <label class="category-search__label">
                <input class="category-search__input" type="search" name="q" placeholder="Поиск по каталогу" data-input-novalidate></label>
            <button class="category-search__button" type="submit">
                <svg class="search-icon" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.3807 13L16.1111 17M2.95262 2.95262C5.55612 0.349126 9.77722 0.349126 12.3807 2.95262C14.9842 5.55612 14.9842 9.77722 12.3807 12.3807C9.77722 14.9842 5.55612 14.9842 2.95262 12.3807C0.349126 9.77722 0.349126 5.55612 2.95262 2.95262Z" stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </form>
    </div>
</div>
