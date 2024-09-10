<?php
/*
Template Name: Контакты
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="contacts"> 
    <div class="page-header custom-block">
        <div class="container ">
            <div class="page-header__item item-1">
                    <div class="breadcrumbs breadcrumbs-contact"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
                    <h1>Контакты</h1>
                    <div class="contact-us__text">
                        <div class="text__item item-1">
                            <div class="item__img">
                                <img src="<?=  get_template_directory_uri(); ?>/image/icons/direction.svg" alt="Графический элемент бумажный самолетик (телеграм)">

                            </div>
                            <div class="item__content">
                                <p class="contact">E-mail</p>
                                <a class="text-link contact-link" href="mailto:info@hrbel.by">info@hrbel.by</a>
                            </div>
                        </div>
                        <div class="text__item item-2">
                            <div class="item__img">
                                <img src="<?=  get_template_directory_uri(); ?>/image/icons/micro-sd-card.svg" alt="Иконка sd-карты">

                            </div>
                            <div class="item__content">
                                <p class="contact">Телефон</p>
                                <a href="tel:+375445572020" class="text-link contact-link">+375 44 557 20 20</a>
                            </div>
                        </div> 
                        <div class="text__item item-3">
                            <div class="item__img">
                                <img src="<?=  get_template_directory_uri(); ?>/image/icons/clock.svg" alt="Иконка часов">

                            </div>
                            <div class="item__content">
                                <p class="contact">Время работы: </p>
                                <p class="contact">Пн.-Пт.: 09:00 - 18:00</p>
                            </div>
                        </div> 
                        <div class="text__item item-4">
                            <div class="item__img">
                                <img src="<?=  get_template_directory_uri(); ?>/image/icons/home.svg" alt="Иконка дом">

                            </div>
                            <div class="item__content">
                                <p class="contact">Адрес</p>
                                <p class="contact"><a class="text-link contact-link" href="https://yandex.by/maps/-/CDuN7ZlQ" target="_blank">г.Минск, пр.<wbr>Независимости, д.77, офис 9,10 (4-й этаж)</a></p>
                            </div>
                        </div>  
                    </div>
                    <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
                
            </div>
        </div>
    </div>

    <div class="container"> 
        <iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=186617185792" width="100%" height="500" frameborder="0"></iframe>
    </div>

    <?php get_template_part('template-parts/contact-us'); ?>
</main>


<?php get_footer(); ?>