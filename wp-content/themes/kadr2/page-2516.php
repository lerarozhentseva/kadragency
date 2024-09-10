<?php get_header(); ?>

    <main class="licenses-and-certificates-main">
        <div class="licenses-and-certificates-title page-header s-event">
            <div class="container event">
                <div class="event__inner">
                    <div class="event__img">
                        <img src="<?=  get_template_directory_uri(); ?>/image/mi-smi.png" alt="">
                    </div>

                    <div class="licenses-and-certificates-title__item page-header__item item-1">
                        <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
                    </div>

                    <div class="event__contents">
                        <div class="event__contents-data">12.01.2024</div>
                        <h1><?php the_title() ?></h1>
                        <p class="event__contents-text">Интервью с директором по персоналу компании "Кадр" на портале Onliner: "Как подготовиться к поиску работы: советы от профи"</p>
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

        <div id="licenses-and-certificates" class="licenses-and-certificates">
            <div class="container">

                <div class="licenses-and-certificates__item item-1">
                    <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
                    <p>
                        Портал Onliner решил поговорить с опытным директором по персоналу компании "Кадр" – экспертом в области поиска работы и управления персоналом, а также профессиональным психологом и сертифицированным коучем Республики Беларусь.
                    </p>
                </div>
                <div class="licenses-and-certificates__item item-2">
                    <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
                    <p>
                        Татьяна Скорб, делится ценными советами о том, как эффективно подготовиться к поиску работы, чтобы максимально повысить свои шансы на успешное трудоустройство.
                    </p>
                </div>
            </div>
        </div>

        <div id="guarantees" class="s-event-guarantees guarantees">
            <div class="container">
                <div class="guarantees__title">
                    <h2>Какую полезную информацию вы узнаете?</h2>
                    <div class="underline-block"></div>
                </div>


                <div class="event-guarantees guarantees__item item-2 ">
                    <ol>
                        <div class="guarantees__item-inner">
                            <li><p>Как правильно оформить резюме</p></li>
                            <li><p>Что писать в сопроводительном письме</p></li>
                            <li><p>Всегда ли нужно соглашаться на тестовое задание?</p></li>
                        </div>
                        <div class="guarantees__item-inner">
                            <li class="four"><p>Как подготовиться к собеседованию</p></li>
                            <li class="five"><p>Самый главный вопрос - обсуждение заработной платы</p></li>
                            <li class="six"><p>Какие вопросы задать работодателю в конце интервью</p></li>
                        </div>
                    </ol>
                </div>


            </div>
        </div>

        <style>
            .guarantees__item.event-guarantees{
                width: 100%;
                margin: 0;
            }
            .event-guarantees ol {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
        </style>

        <?php get_template_part('template-parts/team'); ?>
        <?php get_template_part('template-parts/reviews'); ?>
        <?php get_template_part('template-parts/contact-us-2'); ?>
    </main>

<?php get_footer(); ?>