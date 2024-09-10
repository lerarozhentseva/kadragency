<?php
/*
Template Name: Карьера в компании
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <section class="q-a-title page-header">
    <div class="container">
      <div class="q-a-title__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Карьера в HR агентстве КАДР</h1>
        <p>У нас карьерный рост сотрудников становится приоритетом. Здесь ценится и поддерживается индивидуальное
          развитие, предоставляются возможности для профессионального обучения и роста. Структурированные программы
          тренингов, менторинг и персональное руководство способствуют формированию квалифицированных специалистов и
          лидеров в сфере управления человеческими ресурсами. Развивая экспертизу сотрудников, компания "Кадр" не только
          укрепляет свою позицию на рынке, но и создает благоприятные условия для карьерного роста каждого участника
          команды.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="q-a-title__item page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/career-management/image-box.jpg"
          alt="Подставка для ноутбука">
        <a class="btn btn-position-aware dark smooth-transition" href="#career-opportunities-our-company"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </section>

  <section class="template-items" id="career-opportunities-our-company">
    <div class="container-new">
      <div class="template-items__blocks">
        <h2 class="template-items__title title-line-new">
          <span>Карьерные возможности в нашей компании</span>
        </h2>
        <div class="template-items__item">
          <div class="template-items__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/template-icons/icon-1.svg" alt="">
          </div>
          <div class="template-items__item-content">
            <b class="template-items__item-tit">Предоставляет уникальные и обширные карьерные возможности для своих
              сотрудников</b>
            <p class="template-items__item-desc">
              Стремимся к формированию креативной и высокопрофессиональной команды. В основе карьерной политики компании
              лежит принцип поддержки индивидуального роста и развития каждого сотрудника.
            </p>
          </div>
        </div>
        <div class="template-items__item">
          <div class="template-items__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/template-icons/icon-2.svg" alt="">
          </div>
          <div class="template-items__item-content">
            <b class="template-items__item-tit">Важным элементом карьерной стратегии компании является внутренний
              рекрутинг</b>
            <p class="template-items__item-desc">"Кадр" предоставляет сотрудникам возможность рассматривать внутренние
              вакансии перед внешними кандидатами, поощряя таким образом верность и лояльность коллектива.
            </p>
          </div>
        </div>
        <div class="template-items__item">
          <div class="template-items__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/template-icons/icon-3.svg" alt="">
          </div>
          <div class="template-items__item-content">
            <b class="template-items__item-tit">Программы обучения и развития в "Кадре" нацелены на раскрытие потенциала
              сотрудников</b>
            <p class="template-items__item-desc">Регулярные тренинги, мастер-классы и курсы по новым технологиям в сфере
              управления человеческими ресурсами обеспечивают профессиональное развитие. Компания также активно
              поддерживает участие сотрудников в конференциях и мероприятиях отрасли для обмена опытом и установления
              профессиональных связей.
            </p>
          </div>
        </div>
        <div class="template-items__item">
          <div class="template-items__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/template-icons/icon-4.svg" alt="">
          </div>
          <div class="template-items__item-content">
            <b class="template-items__item-tit">"Кадр" ценит личные стремления и амбиции своих сотрудников, предоставляя
              широкие возможности для карьерного
              роста</b>
            <p class="template-items__item-desc">Внутренние программы менторинга способствуют передаче опыта и знаний
              более
              опытными сотрудниками тем, кто только начинает свой профессиональный путь. Перспективные сотрудники имеют
              шанс участвовать в проектах с высокой степенью ответственности, что способствует их личному и
              профессиональному росту.
            </p>
          </div>
        </div>
        <div class="template-items__item">
          <div class="template-items__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/template-icons/icon-5.svg" alt="">
          </div>
          <div class="template-items__item-content">
            <b class="template-items__item-tit">"Кадр" внимательно следит за рыночными трендами в сфере HR</b>
            <p class="template-items__item-desc">Предоставляем сотрудникам актуальные знания и инструменты для успешной
              работы в динамичной области управления человеческими ресурсами.
            </p>
          </div>
        </div>
      </div>
      <p class="template-items__txt">
        Таким образом, мы создаем благоприятные условия для карьерного роста своих сотрудников, поощряя
        профессиональное
        развитие, личные инициативы и активное участие в жизни компании. Эти карьерные возможности делают нас
        привлекательным местом для специалистов, стремящихся к успеху и реализации своего потенциала в сфере
        управления
        человеческими ресурсами
      </p>
    </div>
  </section>

  <section class="become-part-our-team">
    <div class="container-new">
      <div class="become-part-our-team__wrapper flex">
        <div class="become-part-our-team__image">
          <picture>
            <source media="(max-width: 767px)" srcset="/wp-content/uploads/2024/03/become-part-our-team-qwe.png">
            <img src="/wp-content/uploads/2024/03/become-part-our-team-new.png" alt="" class="img-cover">
          </picture>
        </div>
        <div class="become-part-our-team__info">
          <h2 class="become-part-our-team__title title-line-new block">
            <span>Стань частью</span> нашей команды!
          </h2>
          <?php echo do_shortcode('[contact-form-7 id="2799" title="Стань частью нашей команды!"]'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="template-rhombus dark">
    <div class="container-new">
      <h2 class="template-rhombus__title title-line-new">
        <span>Какие ценности побуждают нас идти дальше? </span>
      </h2>
      <ul class="template-rhoumbs__list rhoumbs-list rhoumbs-list--orange">
        <li>Мы – за рост и развитие: профессиональное, личностное и финансовое, мы за то, чтобы в компаниях работали
          только самые мотивированные и высокопрофессиональные сотрудники. </li>
        <li>Специалисты нашей компании делают всё и даже больше, чтобы именно так и было и каждый рабочий день был в
          радость!</li>
      </ul>
    </div>
  </section>

  <section class="template-block-img">
    <div class="template-block-img__img">
      <picture>
        <source media="(max-width: 767px)"
          srcset="/wp-content/uploads/2024/03/specialists-choose-work-our-team-mob.png">
        <img src="/wp-content/uploads/2024/03/specialists-choose-work-our-team.png" alt="">
      </picture>
    </div>
    <div class="container-new">
      <div class="template-block-img__content">
        <h2 class="template-block-list__title title-line-new">
          <span>Почему специалисты выбирают работать в нашей команде?</span>
        </h2>
        <ul class="template-block-list__list rhoumbs-list rhoumbs-list--1 rhoumbs-list--light">
          <li>В нашей компании особая атмосфера дружелюбия и уважения, возможностей для профессионального, карьерного
            роста и развития. В нашей компании каждому сотруднику предоставлена возможность раскрыть свои лучшие
            личностные и профессиональные качества, влиять на свой доход исключительно своей работой и иметь
            возможность его неоднократно увеличивать!</li>
          <li>Со стороны руководителя компании – самое уважительное, самое чуткое и самое профессиональное отношение к
            каждому сотруднику, к каждому человеку.  </li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/team'); ?>

  <section class="template-block-list dark">
    <div class="container-new">
      <h2 class="template-block-list__title title-line-new">
        <span>Преимущества работы в нашей компании</span>
      </h2>
      <p class="template-block-list__text">
        Наше кадровое агентство предоставляет следующие важные преимущества своим клиентам:
      </p>
      <ol class="template-block-list__list list-bold-ol">
        <li>
          <b>Гибкий график</b>
          <p>Признаем важность баланса между работой и личной жизнью. У нас предусмотрены гибкие графики и возможность
            удаленной работы, что позволяет сотрудникам лучше управлять своим временем.</p>
        </li>
        <li>
          <b>Программы обучения и развития</b>
          <p>"Кадр" инвестирует в профессиональное развитие своих сотрудников. Регулярные тренинги, конференции и
            образовательные мероприятия помогают нашим специалистам оставаться на переднем крае отрасли.</p>
        </li>
        <li>
          <b>Корпоративные мероприятия</b>
          <p>Наша команда ценит дружелюбную атмосферу. Мы регулярно устраиваем корпоративные мероприятия, тимбилдинги и
            вечеринки, создавая возможность для команды провести время вне рабочей среды.</p>
        </li>
        <li>
          <b>Забота о здоровье</b>
          <p>"Кадр" обеспечивает страхование и заботится о здоровье сотрудников. В процессе работы все наши сотрудники
            имеют возможность консультаций с психологом!</p>
        </li>
        <li>
          <b>Карьерный рост</b>
          <p>Мы поощряем внутренний рост и предоставляем сотрудникам возможности для карьерного развития. Программы
            менторства и планы карьерного роста помогают нашим сотрудникам достигать новых высот.</p>
        </li>
        <li>
          <b>Социальная ответственность</b>
          <p>"Кадр" активно участвует в социальных проектах, и наши сотрудники могут принимать участие в
            благотворительных инициативах, чувствуя, что их труд несет пользу обществу.</p>
        </li>
        <li>
          <b>Бонусы для лучших сотрудников</b>
          <p>По итогам работы каждого месяца сотрудники с самыми лучшими показателями всегда получают приятные бонусы от
            компании: сертификаты в СПА, ужин в ресторане, фотосессия, оплата обучения и вебинаров, а также многое
            другое.</p>
        </li>
      </ol>
    </div>
  </section>


  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>
<?php get_footer(); ?>