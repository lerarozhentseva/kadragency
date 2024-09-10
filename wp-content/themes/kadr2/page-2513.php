<?php
/*
Template Name: Шаблон события
Template Post Type: page
*/

?>
<?php get_header(); ?>

    <main class="licenses-and-certificates-main">
        <div class="licenses-and-certificates-title page-header">
            <div class="container event">
                <div class="event__inner">
                    <div class="event__img">
                        <img src="<?=  get_template_directory_uri(); ?>/image/c-ng.png" alt="">
                    </div>

                    <div class="licenses-and-certificates-title__item page-header__item item-1">
                        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
                    </div>

                    <div class="event__contents">
                        <div class="event__contents-data">29.12.2023</div>
                        <h1>С Новым Годом и Рождеством</h1>
                        <p class="event__contents-text">HR агентство «Кадр» от всей души поздравляет своих уважаемых сотрудников с наступающим Новым Годом и Рождеством!</p>
                    </div>
                    <div class="licenses-and-certificates-title__item page-header__item item-2 event--down">
                        <a class="btn btn-position-aware dark smooth-transition" href="#licenses-and-certificates">
                            <img src="<?=  get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент">
                            <span class="position-aware quad"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
 
        <div id="licenses-and-certificates" class="licenses-and-certificates licenses-and-certificates-dop">
            <div class="container">

                <div class="licenses-and-certificates__item item-1">
                    <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
                    <p>
                        В этот особенный период, наполненный волшебством и радостью, мы хотим выразить глубокую благодарность за ваш вклад в развитие нашей компании. Прошедший год был наполнен трудовыми достижениями и коллективными усилиями. Ваш профессионализм, преданность и трудолюбие стали надежным фундаментом нашего успеха. Спасибо, что вы с нами!
                        <br>
                        <br>
                        С наступающим Новым Годом и Рождеством мы желаем вам и вашим семьям счастья, здоровья и благополучия. Пусть этот праздничный сезон приносит в ваш дом тепло и уют, а каждый момент будет наполнен весельем и любовью.
                    </p>
                </div>
                <div class="licenses-and-certificates__item item-2">
                    <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
                    <p>А также, хотим выразить особую благодарность вашим детям, которые вносят свой вклад в нашу дружную атмосферу. Пусть новогоднее волшебство подарит им радость и незабываемые впечатления. Пусть каждый момент этого праздника запомнится яркими воспоминаниями, наполненными смехом и весельем.</p>
                </div>
            </div>
        </div>

        <div class="what-personnel-audit-contain event-audit">
            <div class="container">
                <div class="what-personnel-audit-contain__item item-1">
                    <div class="item__image">
                        <img src="<?=  get_template_directory_uri(); ?>/image/event-ng.png" alt="Удаленная работа">
                    </div>

                    <div class="item__text">
                        <p>Мы уверены, что наш коллектив и в новом году будет продолжать развиваться и добиваться новых вершин. Сплоченность и дружба, которые мы создаем вместе, становятся ключевыми факторами нашего успеха. С праздниками вас, дорогие коллеги!</p>
                        <p>Пусть наступающий год принесет новые перспективы, интересные проекты и множество возможностей для саморазвития. Счастья вам и вашим близким, а также успешного старта в новый год!</p>
                        <span class="event-audit__wishes">С наилучшими пожеланиями,</span>
                        <span class="event-audit__team">Команда "Кадр"</span>
                    </div>

                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/team'); ?>
        <?php get_template_part('template-parts/reviews'); ?>
        <?php get_template_part('template-parts/contact-us-2'); ?>
    </main>

<?php get_footer(); ?>