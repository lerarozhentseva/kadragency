<?php
/*
Template Name: Наша команда
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
        <h1>Наша команда</h1>
        <p>Мы гордимся представить вам наших высококвалифицированных профессионалов, чья страсть к решению кадровых
          задач помогает компаниям достигать новых высот. Наш коллектив объединяет разнообразные таланты и экспертиза в
          области управления персоналом, рекрутинга и развития бизнеса.</p><br>
        <p>Узнайте больше о том, как наша команда может поддержать вас в успешном управлении талантами и развитии вашей
          компании.</p>
        <button class="btn btn-position-aware popmake-29" href="#">Консультация<span
            class="position-aware"></span></button>
      </div>
      <div class="q-a-title__item page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/team-page/main.jpg" alt="Подставка для ноутбука">
        <a class="btn btn-position-aware dark smooth-transition" href="#vTeam"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <section class="vTeam" id="vTeam">
    <div class="container-new">
      <div class="vTeam-wrapper pt-110 pb-150">
        <h2 class="vTeam__title title-line-new">
          <span>Сотрудники агентства </span> Кадр
        </h2>
        <ul class="vTeam-list">
          <li class="vTeam-item f-jcsb">
            <div class="vTeam-item-image">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/tatyana-staravoytova.jpg" type="image/webp">
                  <img src="<?= get_template_directory_uri(); ?>/image/team-page/tatyana-staravoytova.jpg" alt="Татьяна Старовойтова" class="img-cover">
                </picture>
            </div>
            <div class="vTeam-item-info">
              <p class="vTeam-item__name title-two">
                Татьяна Старовойтова
              </p>
              <p class="vTeam-item__post">
                Директор
              </p>
              <div class="vTeam-item__descr">
                <p>
                  Выдающийся профессионал в сфере трудового права и управления персоналом, 12-летний опыт работы подтверждает высокий уровень компетенции и авторитета. В качестве директора агентства "Кадр", Татьяна привнесла в него инновационные подходы и стратегии, которые не только укрепили позиции агентства на рынке, но и сделали его одним из лидеров в сфере подбора персонала.
                </p>
              </div>
            </div>
          </li>
          <li class="vTeam-item f-jcsb">
            <div class="vTeam-item-image">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/tatyana-d.png" type="image/webp">
                  <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/tatyana-d.png" alt="Татьяна Добрияник" class="img-cover">
                </picture>
            </div>
            <div class="vTeam-item-info">
              <p class="vTeam-item__name title-two">
                Татьяна Добрияник
              </p>
              <p class="vTeam-item__post">
                Ведущий специалист по подбору персонала
              </p>
              <div class="vTeam-item__descr">
                <p>
                  Опыт работы - 5 лет. Основные направления подбора персонала: офисный персонал, специалисты по
                  продажам, строительная сфера, сфера общественного питания, ВЭД, логистика, медицина.  Достойный опыт
                  работы в массовом подборе персонала.  Главное преимущество в работе Татьяны -  скорость и качество. 
                  Приятная в общении, умеет слушать и слышать, дружит с дедлайнами!
                </p>
              </div>
            </div>
          </li>
          <li class="vTeam-item f-jcsb">
            <div class="vTeam-item-image">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/ershova-l.png" type="image/webp">
                  <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/ershova-l.png" alt="Лилия Ершова" class="img-cover">
                </picture>
            </div>
            <div class="vTeam-item-info">
              <p class="vTeam-item__name title-two">
                Лилия Ершова
              </p>
              <p class="vTeam-item__post">
                Рекрутер 
              </p>
              <div class="vTeam-item__descr">
                <p>
                  Рекрутер с опытом в подборе IT специалистов, специалистов в сфере аудита, бухгалтерских и юридических
                  услуг. Лилия из тех сотрудников, которые всегда найдёт решение задачи. Если нельзя решить вопрос
                  простым путём, она это сделает сложным путём, но вопрос закроет. 
                </p>
                <p>
                  Креативная, думающая наперёд, не боится больших объёмов работы, большого количества звонков, писем,
                  общения. Девиз Лили: Как можно эту задачу решить? И как быстро я это сделаю?
                </p>
              </div>
            </div>
          </li>
          <li class="vTeam-item f-jcsb">
            <div class="vTeam-item-image">
                <picture>
                  <source srcset="https://hrbel.by/wp-content/uploads/2024/07/mariya-arhipenko.jpg" type="image/webp">
                  <img src="https://hrbel.by/wp-content/uploads/2024/07/mariya-arhipenko.jpg" alt="Мария Архипенко" class="img-cover">
                </picture>
            </div>
            <div class="vTeam-item-info">
              <p class="vTeam-item__name title-two">
               Мария Архипенко
              </p>
              <p class="vTeam-item__post">
                Рекрутер
              </p>
              <div class="vTeam-item__descr">
                <p>
                  Сильные стороны Мария - стрессоустойчивость, ответственность, доброжелательность и работа на
                  результат. Грамотно создаёт профиль должности, описание вакансии, которые привлекают потенциальных
                  сотрудников. Быстро и качественно закрывает вакансии. Любит работать с вакансиями технического
                  направления: инженеры, специалисты технической поддержки,  специалисты по телекоммуникациям.
                </p>
                <p>
                  Хорошие результаты по закрытиям специалистов цифровых технологий: интернет - маркетологов,
                  SEO-специалистов,  Веб-копирайтеров, Веб-дизайнеров, SMM-специалистов.
                </p>
              </div>
            </div>
          </li>
          <li class="vTeam-item f-jcsb">
            <div class="vTeam-item-image">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/demchuk-a.png" type="image/webp">
                  <img src="<?= get_template_directory_uri(); ?>/image/team-page/new-team-img/demchuk-a.png" alt="Александра Демчук" class="img-cover">
                </picture>
            </div>
            <div class="vTeam-item-info">
              <p class="vTeam-item__name title-two">
                Александра Демчук
              </p>
              <p class="vTeam-item__post">
                Рекрутер
              </p>
              <div class="vTeam-item__descr">
                <p>
                  Опытный рекрутер, обладающий широким кругом знаний в области подбора персонала и управления рекрутинговыми процессами. Она проявляет высокую эффективность в нахождении и привлечении квалифицированных кандидатов для различных позиций в соответствии с требованиями клиентов. Александра отлично управляет временем и ресурсами, чтобы эффективно координировать рекрутинговые процессы и соблюдать сроки.
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="vTeamQuestion">
    <div class="container-new">
      <div class="vTeamQuestion-wrapper">
        <div class="vTeamQuestion-block f-jcsb-center">
          <div class="vTeamQuestion-image">
            <img src="/wp-content/uploads/2024/03/you-see-yourself-part-our-team.png" alt="" class="img-cover">
          </div>
          <div class="vTeamQuestion-info">
            <p class="vTeamQuestion__title title-line-new">
              <span>Вы видите себя частью</span> нашей команды?
            </p>
            <p class="vTeamQuestion__descr">
              У вас есть возможность воплотить свои мечты в жизнь.
            </p>
            <button class="vTeamQuestion__button btn btn-position-aware popmake-3112" href="#">Присоединиться к
              команде<span class="position-aware"></span></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
  <?php get_template_part('template-parts/contact-us-team-popup.php'); ?>
</main>
<?php get_footer(); ?>