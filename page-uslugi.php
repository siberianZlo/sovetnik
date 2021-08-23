<?php
/*
Template Name: Шаблон страницы наших услуг
*/
?>

<?php
    get_header();
?>

<section class="section-uslugi container">
        <div class="usluga-box">
            <div class="uslugi__content">
                <h2><?php the_field('zagolovok-page-uslugi-nedvizimost') ?></h2>
                <p><?php the_field('opisanie-page-uslugi-nedvizimost') ?></p>
                <button class="button-kosultation transition click-form">Подробнее</button>
            </div>  
            <div class="uslugi__img">
                <img src="<?php the_field('image-page-uslugi-nedvizimost') ?>" alt="Многоэтажный дом">
            </div>
        </div>

        <div class="usluga-box reverse">
            <div class="uslugi__img">
                <img src="<?php the_field('image-page-uslugi-remont') ?>" alt="Многоэтажный дом">
            </div>
            <div class="uslugi__content uslugi__content-right">
                <h2><?php the_field('zagolovok-page-uslugi-remont') ?></h2>
                <p><?php the_field('opisanie-page-uslugi-remont') ?></p>
                <button class="button-kosultation transition click-form">Подробнее</button>
            </div>  
        </div>

        <div class="usluga-box">
            <div class="uslugi__content">
                <h1><?php the_field('zagolovok-page-uslugi-sroyka') ?></h1>
                <p><?php the_field('opisanie-page-uslugi-sroyka') ?></p>
                <button class="button-kosultation transition click-form">Подробнее</button>
            </div>  
            <div class="uslugi__img">
                <img src="<?php the_field('image-page-uslugi-sroyka') ?>" alt="Многоэтажный дом">
            </div>
        </div>
    </section>

<?php
    get_footer();
?>
