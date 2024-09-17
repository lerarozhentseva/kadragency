<?php
/*
Template Name: Контакты
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="contacts"> 
    <div class="about-the-company-title page-header">
        <div class="container">
        <div class="about-the-company-title__item page-header__item item-1">
            <div class="breadcrumbs">
                <?php if (function_exists('dimox_breadcrumbs'))
                    dimox_breadcrumbs(); ?>
            </div>
            <h1>Контакты</h1>
            <div class="contact-us__text">
                <div class="text__item item-1">
                    <div class="item__img">
                        <img src="<?=  get_template_directory_uri(); ?>/image/icons/phone-contacts.svg" alt="Иконка телефона">
                    </div>
                    <div class="item__content">
                        <p class="contact">Телефон</p>
                        <a href="tel:+74957891201 " class="text-link contact-link">+7 (495) 789-12-01 </a>
                    </div>
                </div> 
                <div class="text__item item-2">
                    <div class="item__img">
                        <img src="<?=  get_template_directory_uri(); ?>/image/icons/email-contacts.svg" alt="Почта">
                    </div>
                    <div class="item__content">
                        <p class="contact">E-mail</p>
                        <a class="text-link contact-link" href="mailto:info@kard.ru ">info@kard.ru </a>
                    </div>
                </div>
                <div class="text__item item-3">
                    <div class="item__img">
                        <img src="<?=  get_template_directory_uri(); ?>/image/icons/clock.svg" alt="Иконка часов">
                    </div>
                    <div class="item__content">
                        <p class="contact">Режим работы: </p>
                        <p class="contact">Пн.-Пт.: 09:00 - 18:00</p>
                    </div>
                </div> 
                <div class="text__item item-4">
                    <div class="item__img">
                        <img src="<?=  get_template_directory_uri(); ?>/image/icons/home.svg" alt="Иконка дом">
                    </div>
                    <div class="item__content">
                        <p class="contact">Адрес</p>
                        <p class="contact"><a class="text-link contact-link" href="#" target="_blank">г. Москва, Пресненская наб., 8 стр 1</a></p>
                    </div>
                </div>  
            </div>
        </div>
        <div class="about-the-company-title__item page-header__item item-2">
            <img src="<?= get_template_directory_uri(); ?>/image/contacts-banner.jpg"
                alt="Рабочее пространство">
            <a class="btn btn-position-aware dark smooth-transition" href="#contacts"><img
                src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
                class="position-aware quad"></span></a>
        </div>
        </div>
    </div>
    <div class="container map"> 
        <iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=186617185792" width="100%" height="500" frameborder="0"></iframe>
    </div>
    <div class="contact-main get-free-consult__container">
        <?php get_template_part('template-parts/contact-us'); ?>
    </div>
</main>


<?php get_footer(); ?>