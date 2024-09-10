<?php
/*
Template Name: Акции
Template Post Type: page
*/
?> 
<?php get_header(); ?>
<main>
    <div class="q-a-title page-header team-intro">
        <div class="container">
            <div class="q-a-title__item page-header__item item-1">
                <div class="breadcrumbs">
                <?php if (function_exists('dimox_breadcrumbs'))
                    dimox_breadcrumbs(); ?>
                </div>
                <h1>Выгодные предложения для Вас</h1>
                <p>Наша команда готова поддержать вас в достижении ваших профессиональных целей. Если вы нуждаетесь в подборе персонала для вашего бизнеса, у нас есть уникальные предложения, которые могут быть вам интересны. Мы стремимся создать пространство, где каждый клиент может найти что-то полезное и выгодное. Мы гарантируем качественное обслуживание и индивидуальный подход к каждому клиенту. Не упустите возможность найти идеального кандидата. Успейте воспользоваться нашими эксклюзивными предложениями!</p>
                <button class="btn btn-position-aware popmake-29 btn-price" href="#">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
            </div>
            <div class="q-a-title__item page-header__item item-2">
                <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/action/image-box.png" alt="Подставка для ноутбука">
                <a class="btn btn-position-aware dark smooth-transition" href="#stocks"><img
                    src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
                    class="position-aware quad"></span></a>
            </div>
        </div>
    </div>
    <section class="stocks" id="stocks">
        <div class="container">
            <div class="stocks-wrapper">
                <h2 class="stocks__title title-line-new">
                    <span>Специальные предложения</span>
                </h2>
                <ul class="stocks-list">
                    <li class="stocks-item f-jcsb">
                        <div class="stocks-item-image">
                            <picture>
                                <source srcset="<?=  get_template_directory_uri(); ?>/image/stock/new/Photo22.png" type="image/webp">
                                <img src="<?=  get_template_directory_uri(); ?>/image/stock/new/Photo22.png" alt="" class="img-cover">
                            </picture>
                        </div>
                        <div class="stocks-item-info">
                            <p class="stocks-item__title">
                                -10% на второе сотрудничество!
                            </p>
                            <div class="stocks-item-descr f-jcsb">
                                <svg width="41" height="7" viewBox="0 0 41 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1H38.5L31 6.5" stroke="#D25F15"/>
                                </svg>
                                <p>
                                    Для нас важно не только первое впечатление, но и долгосрочное сотрудничество! Получите -10% на второе сотрудничество с агентством "Кадр". Мы ценим ваше доверие и стремимся делать Ваш бизнес процветающим, предоставляя качественные кадровые решения.
                                </p>
                            </div>
                            <div class="stocks-item-condition">
                                <b></b>
                                <p>

                                </p>
                            </div>
                            <div class="stocks-item-bottom f-jcsb">
                                <button class="stocks-item__button popmake-29 btn-price btn btn-position-aware ">
                                    ПОДКЛЮЧИТЬ<span class="position-aware"></span>
                                </button>
                                <span class="stocks-item__procent">
                                    -10%
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="stocks-item  f-jcsb">
                        <div class="stocks-item-image">
                            <picture>
                                <source srcset="<?=  get_template_directory_uri(); ?>/image/stock/new/photo222.png" type="image/webp">
                                <img src="<?=  get_template_directory_uri(); ?>/image/stock/new/photo222.png" alt="" class="img-cover">
                            </picture>
                        </div>
                        <div class="stocks-item-info">
                            <p class="stocks-item__title">
                                -15% за рекомендацию!
                            </p>
                            <div class="stocks-item-descr f-jcsb">
                                <svg width="41" height="7" viewBox="0 0 41 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1H38.5L31 6.5" stroke="#D25F15"/>
                                </svg>
                                <p>
                                    Вам понравилось с нами работать? Рекомендуйте нашу компанию своим деловым партнерам, и получайте скидку 15%. Ваши партнеры также сэкономят 10% при первом сотрудничестве. Это взаимовыгодное предложение создано для того, чтобы вы и ваши коллеги могли наслаждаться преимуществами наших профессиональных услуг по поиску персонала.
                                </p>
                            </div>
                            <div class="stocks-item-condition">
                                <b>Важное условие спецпредложения:</b>
                                <p>
                                    Компания А при первом заказе наших услуг говорит, что пришла по рекомендации от компании Б. Компания А получает скидку 10%, компания Б - 15%.
                                </p>
                            </div>
                            <div class="stocks-item-bottom f-jcsb">
                                <button class="stocks-item__button popmake-29 btn-price btn btn-position-aware ">
                                    ПОДКЛЮЧИТЬ<span class="position-aware"></span>
                                </button>
                                <span class="stocks-item__procent">
                                    -15%
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--<div id="white-spots-personnel-records" class="white-spots-personnel-records">
        <div class="container">
            <div class="q-a__item item-8">
                <div class="item__image">
                    <span>01</span>
                    <img src="<?=  get_template_directory_uri(); ?>/image/q-a/q-a-8.svg" alt="Маленькое изображение офиса">
                </div>
                <div class="item__text">
                    <h3>-10% на первое сотрудничество!</h3>
                    <ul>
                        <li><p>Впервые сотрудничая с нами, вы получаете эксклюзивную выгоду - скидку 10%! Найдите идеальные кадры с выгодой. Это ваш шанс на успешное начало вместе с нами.</p></li>
                    </ul>
                    <button class="btn btn-position-aware popmake-29 btn-price btn-accii" href="#" style=" margin-left: auto; margin-top: 15px; margin-bottom: 0">ПОДКЛЮЧИТЬ<span class="position-aware"></span></button>
                </div>
            </div>
            <div class="q-a__item item-9">
                <div class="item__image">
                    <span>02</span>
                    <img src="<?=  get_template_directory_uri(); ?>/image/q-a/q-a-9.svg" alt="Фруктовое дерево">
                </div>
                <div class="item__text">
                    <h3>-15% за рекомендацию!</h3>
                    <ul>
                        <li><p>Вам понравилось с нами работать? Рекомендуйте нашу компанию своим деловым партнерам, и получайте скидку 15%. Ваши партнеры также сэкономят 10% при первом сотрудничестве. Это взаимовыгодное предложение создано для того, чтобы вы и ваши коллеги могли наслаждаться преимуществами наших профессиональных услуг по поиску персонала.</p></li>
                        <li><p><strong>Важное условие акции:</strong> Компания А при первом заказе наших услуг говорит, что пришла по рекомендации от компании Б. Компания А получает скидку 10%, компания Б - 15%.</p></li>
                    </ul>
                    <button class="btn btn-position-aware popmake-29 btn-price btn-accii" href="#"  style="margin-top: 15px; margin-bottom: 0">ПОДКЛЮЧИТЬ<span class="position-aware"></span></button>
                </div>
            </div>

        </div>
    </div>-->
    <?php if(the_content())  {?>
    <div class="action-content">
        <div class="container">
            <div class="action-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php get_template_part('template-parts/team'); ?>
    <?php get_template_part('template-parts/news'); ?>
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>