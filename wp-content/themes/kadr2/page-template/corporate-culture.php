<?php
/*
Template Name: Корпоративная культура
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="q-a-title page-header corporate-intro">
    <div class="container">
      <div class="q-a-title__item page-header__item item-1">
        <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs'))
          dimox_breadcrumbs(); ?></div>
        <h1>Корпоративная культура в компании КАДР</h1>
        <p>Наша компания молодая, амбициозная и высокопрофессиональная. Мы, единственные в Минске среди кадровых
          агентств, которые оказывают полный спектр услуг для юридических лиц, начиная от подбора персонала до
          аутстаффинга, а также широкий спектр консалтинговых услуг: проведение тестирования и анкетирования
          сотрудников, психологическая и коучинговая работа с руководителями компании, проведение тренингов, семинаров,
          тимбилдингов.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="q-a-title__item page-header__item item-2">
        <picture>
          <source data-lazy-srcset="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg"
            type="image/webp" srcset="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg">
          <img src="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg" alt="Подставка для ноутбука"
            class="webpexpress-processed entered lazyloaded"
            data-lazy-src="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg"
            data-ll-status="loaded">
          <noscript>
            <img src="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg" alt="Подставка для ноутбука"
              class="webpexpress-processed">
          </noscript>
        </picture>
        <a class="btn btn-position-aware dark smooth-transition" href="#hrAgency"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <section class="hrAgency" id="hrAgency">
    <div class="container-new">
      <div class="hrAgency-wrapper pt-150 pb-150">
        <h2 class="hrAgency__title title-line-new">
          <span>HR агентство Кадр — это</span>
        </h2>
        <ul class="hrAgency-list flex wrap">
          <li class="hrAgency-item f-dc-center">
            <div class="hrAgency-item__icon f-center-center">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/success.svg" alt="">
            </div>
            <p class="hrAgency-item__text">
              Успешная <br> компания
            </p>
          </li>
          <li class="hrAgency-item f-dc-center">
            <div class="hrAgency-item__icon f-center-center">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/award.svg" alt="">
            </div>
            <p class="hrAgency-item__text">
              Мотивирующее вознаграждение
            </p>
          </li>
          <li class="hrAgency-item f-dc-center">
            <div class="hrAgency-item__icon f-center-center">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/comfort.svg" alt="">
            </div>
            <p class="hrAgency-item__text">
              Комфортные <br> условия труда
            </p>
          </li>
          <li class="hrAgency-item f-dc-center">
            <div class="hrAgency-item__icon f-center-center">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/work.svg" alt="">
            </div>
            <p class="hrAgency-item__text">
              Высокооплачиваемая <br> работа
            </p>
          </li>
          <li class="hrAgency-item f-dc-center">
            <div class="hrAgency-item__icon f-center-center">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/talant.svg" alt="">
            </div>
            <p class="hrAgency-item__text">
              Талантливые <br> люди
            </p>
          </li>
          <li class="hrAgency-item f-dc-center">
            <div class="hrAgency-item__icon f-center-center">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/perspective.svg" alt="">
            </div>
            <p class="hrAgency-item__text">
              Перспективные <br> возможности
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="eventsBlock">
    <div class="container-new">
      <div class="eventsBlock-wrapper pb-150">
        <h2 class="eventsBlock__title title-line-new">
          <span>События в компании Кадр</span>
        </h2>
        <div class="eventsBlock-info f-jcsb">
          <p class="eventsBlock-info__left">
            Мы регулярно проводим разнообразные события, направленные на укрепление команды и развитие сотрудников.
            Встречи, семинары, и тренинги способствуют обмену знаний и опытом, создавая благоприятное окружение для
            роста профессиональных навыков.
          </p>
          <p class="eventsBlock-info__right">
            Кроме того, мероприятия, такие как тимбилдинги и корпоративные вечера, способствуют формированию дружелюбной
            атмосферы и укреплению внутренних связей сотрудников.
          </p>
        </div>
        <div class="eventsBlock-block">
          <p class="eventsBlock-block__title">
            Узнайте, как проходит жизнь в HR агентстве Кадр!
          </p>
          <ul class="eventsBlock-block-list flex wrap">
            <!-- <li class="eventsBlock-block-item f-dc">
                            <div class="eventsBlock-block-item__image">
                                <img src="<?= get_template_directory_uri(); ?>/image/mi-smi.png" alt="" class="img-cover">
                            </div>
                            <h3 class="eventsBlock-block-item__title">
                                Мы в СМИ
                            </h3>
                            <span class="eventsBlock-block-item__date">
                                12.01.2024
                            </span>
                            <p class="eventsBlock-block-item__text">
                                Директор по персоналу компании “Кадр” дала интервью порталу Onliner.
                            </p>
                            <a href="https://hrbel.by/o-kompanii/my-v-smi/" class="eventsBlock-block-item__button">
                                Подробнее
                            </a>
                        </li>-->
            <li class="eventsBlock-block-item f-dc">
              <div class="eventsBlock-block-item__image">
                <img src="<?= get_template_directory_uri(); ?>/image/c-ng.png" alt="" class="img-cover">
              </div>
              <h3 class="eventsBlock-block-item__title">
                С новым годом и Рождеством!
              </h3>
              <span class="eventsBlock-block-item__date">
                29.12.2023
              </span>
              <p class="eventsBlock-block-item__text">
                Компания “Кадр” поздравляет сотрудников и их детей с новым годом.
              </p>
              <a href="https://hrbel.by/o-kompanii/s-novym-godom-i-rozhdestvom/" class="eventsBlock-block-item__button">
                Подробнее
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="ourCulture">
    <div class="container-new">
      <div class="ourCulture-wrapper pt-150 pb-150">
        <h2 class="ourCulture__title title-line-new">
          <span>Вам близка наша культура?</span>
        </h2>
        <p class="ourCulture__descr">
          У вас есть возможность построить карьеру в нашем агентстве.
        </p>
        <ul class="ourCulture-list flex wrap">
          <li class="ourCulture-item">
            <div class="ourCulture-item-one">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/3.jpg">
                <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/3.jpg"
                  class="img-cover">
              </picture>
            </div>
          </li>
          <li class="ourCulture-item">
            <div class="ourCulture-item-one">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/6.jpg">
                <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/6.jpg"
                  class="img-cover">
              </picture>
            </div>
          </li>
          <li class="ourCulture-item">
            <div class="ourCulture-item-one">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/7.jpg">
                <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/7.jpg"
                  class="img-cover">
              </picture>
            </div>
          </li>
          <li class="ourCulture-item">
            <div class="ourCulture-item-one">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg">
                <img src="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg" class="img-cover">
              </picture>
            </div>
          </li>
          <li class="ourCulture-item">
            <div class="ourCulture-item-one">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/5.jpg">
                <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/5.jpg"
                  class="img-cover">
              </picture>
            </div>
          </li>
          <li class="ourCulture-item">
            <div class="ourCulture-item-one">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/1.jpg">
                <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/culture/1.jpg"
                  class="img-cover">
              </picture>
            </div>
          </li>
          <li class="ourCulture-item ourCulture-item-last">
            <button class="ourCulture-item-link f-center-center popmake-3198">
              СТАТЬ ЧАСТЬЮ <br> КОМАНДЫ
            </button>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="aboutMore">
    <div class="container-new">
      <div class="aboutMore-wrapper pt-150 pb-150">
        <h2 class="aboutMore__title title-line-new">
          <span>И еще немного о нас</span>
        </h2>
        <ul class="aboutMore-list f-jcsb wrap ">
          <li class="aboutMore-item f-jcsb">
            <div class="aboutMore-item__icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/aboutMore/doc.svg" alt="">
            </div>
            <div class="aboutMore-item-info">
              <p class="aboutMore-item__title">
                Мы являемся первым и единственным кадровым агентством, которое работает с физическими лицами!
              </p>
              <p class="aboutMore-item__descr">
                Наши специалисты помогают грамотно и профессионально разработать, составить резюме, которое будет
                успешно работать на благо сотрудника и поможет ему найти самую лучшую работу!
              </p>
            </div>
          </li>
          <li class="aboutMore-item f-jcsb">
            <div class="aboutMore-item__icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/aboutMore/settings.svg" alt="">
            </div>
            <div class="aboutMore-item-info">
              <p class="aboutMore-item__title">
                Психологическая работа с руководителями и сотрудниками компании
              </p>
              <p class="aboutMore-item__descr">
                Наши психологи и коучи предлагают достойный пакет услуг по личностному росту, работе с самооценкой и
                негативными установками, с эмоциональным выгоранием, которое случается довольно часто. 
              </p>
            </div>
          </li>
          <li class="aboutMore-item f-jcsb">
            <div class="aboutMore-item__icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/aboutMore/work-list.svg" alt="">
            </div>
            <div class="aboutMore-item-info">
              <p class="aboutMore-item__title">
                Мы – 100% клиентоориентиированны и в этом наша сила!
              </p>
              <p class="aboutMore-item__descr">
                Сотрудники нашей компании отличаются высоким профессионализмом, большим опытом работы, эмпатийным и
                уважительным отношением к каждому человеку, с которыми мы работаем!
              </p>
            </div>
          </li>
          <li class="aboutMore-item f-jcsb">
            <div class="aboutMore-item__icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/culture/aboutMore/work.svg" alt="">
            </div>
            <div class="aboutMore-item-info">
              <p class="aboutMore-item__title">
                Наша компания в процессе получения лицензии Министерства юстиции на трудоустройство граждан за рубежом
              </p>
              <p class="aboutMore-item__descr">
                При получении такой лицензии предъявляются всегда высокие требования как к самой компании, так и к её
                сотрудникам. 
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="main-page-cards cultureCards">
    <div class="main-page-cards__item item-1">
      <h2>Наша миссия</h2>
      <div class="underline-block block"></div>
      <p>
        Делать каждый день жизни компании и каждого сотрудника – успешным,
        эффективным, приятным. Обеспечить профессиональный и финансовый
        рост всех и каждого, кто к нам обратился! 
      </p>
    </div>
    <div class="main-page-cards__item item-2">
      <a class="text-link" href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">
        <h2>
          Наши ценности
        </h2>
      </a>
      <ul>
        <li>
          <svg width="41" height="7" viewBox="0 0 41 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1H38.5L31 6.5" stroke="#D25F15" />
          </svg>
          <p>
            Профессионализм
          </p>
        </li>
        <li>
          <svg width="41" height="7" viewBox="0 0 41 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1H38.5L31 6.5" stroke="#D25F15" />
          </svg>
          <p>
            Честность в работе
          </p>
        </li>
        <li>
          <svg width="41" height="7" viewBox="0 0 41 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1H38.5L31 6.5" stroke="#D25F15" />
          </svg>
          <p>
            Уважение каждого нашего клиента
          </p>
        </li>
        <li>
          <svg width="41" height="7" viewBox="0 0 41 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1H38.5L31 6.5" stroke="#D25F15" />
          </svg>
          <p>
            Индивидуальный подход к каждой компании
          </p>
        </li>
        <li>
          <svg width="41" height="7" viewBox="0 0 41 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1H38.5L31 6.5" stroke="#D25F15" />
          </svg>
          <p>
            Работа на результат
          </p>
        </li>
      </ul>
    </div>
    <div class="main-page-cards__item item-3">
      <a class="text-link" href="<?= get_site_url(); ?>/hr-brending/">
        <h2>Наш подход к работе</h2>
      </a>
      <p>В своей работе мы придерживаемся золотого правила бизнеса и деловых отношений: делаем свою работу на таком
        уровне, на котором сами хотим ее получать по отношению к себе. Высокий уровень сервиса и профессиональное
        отношение на всех этапах работы: от получения заявки до результативного закрытия сделки</p>
    </div>
  </section>
  <section class="find pt-150 pb-150 find-adaptive">
    <?php get_template_part('template-parts/find-block'); ?>
  </section>
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>
<?php get_footer(); ?>