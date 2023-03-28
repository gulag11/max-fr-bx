<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>
<div class="container">
    <div class="small-titles" data-aos="fade-up">
        <h3 class="small-titles__ttl h2"><?=$arParams['ENTITY_NAME']?></h3>
    </div>
    <div class="categories-slider controls-out" data-aos="fade-up">
        <div class="swiper-container" id="categories-slider">
            <div class="swiper-wrapper">
                <?php foreach ($arResult['SECTIONS'] as $sect): ?>
                    <div class="swiper-slide"><a class="shop-page-head__card" href="<?=$sect['SECTION_PAGE_URL']?>">
                            <div class="shop-page-head__card-img">
                                <picture>
                                    <source srcset="" type="image/webp" /><img src="<?=$sect['PICTURE']?>" alt="<?=$sect['NAME']?>" />
                                </picture>
                            </div>
                            <div class="shop-page-head__card-ttl h4"><?=$sect['NAME']?></div>
                        </a></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="controls-out__container only-desktop"><button class="slider-control button--clean" id="categories-slider-prev"><svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.57227 0.714355L1.28655 7.00007L7.57227 13.2858" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></button><button class="slider-control button--clean" id="categories-slider-next"><svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.42773 13.2856L7.71345 6.99993L1.42773 0.714217" stroke="#B69659" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></button></div>
    </div>
</div>
