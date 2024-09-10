<?php
/*
Template Name: Пройти тестовое собеседование на работу
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="turn-research-page">
  <section class="page-header">
    <div class="container">
      <div class="page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Пройти тестовое собеседование на работу</h1>
        <p>Мы предлагаем вам возможность пройти собеседование с профессиональным экспертом по найму, который оценит ваши
          сильные и слабые стороны, даст обратную связь и рекомендации по улучшению вашей самопрезентации. Вы сможете
          потренироваться в реальных условиях и повысить свои шансы на успех. 
        </p>
        <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="/wp-content/uploads/2024/03/pass-test-job-interview.png"
          alt="Пройти тестовое собеседование на работу">
        <a class="btn btn-position-aware dark smooth-transition" href="#turn-research"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </section>

  <section class="turn-research custom-block" id="turn-research">
    <div class="container">
      <div class="block__title turn-research__title">
        <h2>Когда стоит обратиться к нашей услуге?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="turn-research__container">
        <div class="turn-research__content">
          <p class="turn-research__text">
            Наша услуга подходит для любого кандидата, который хочет повысить свою уверенность и компетентность перед
            собеседованием на работу. Особенно мы рекомендуем нашу услугу, если вы:
          </p>
          <div class="turn-research__img">
            <img src="/wp-content/uploads/2024/03/tuen-research.png" alt="">
          </div>
        </div>
        <ol class="turn-research__list">
          <li>
            <p>Давно не искали работу и не знаете, какие требования и ожидания у современных работодателей </p>
          </li>
          <li>
            <p>Собираетесь сменить сферу деятельности или карьерный уровень и не уверены, как адаптировать свое резюме и
              сопроводительное письмо</p>
          </li>
          <li>
            <p>Хотите подготовиться к конкретной вакансии, которая вам очень интересна, и узнать, какие навыки и
              качества вам нужно продемонстрировать</p>
          </li>
          <li>
            <p>Испытываете волнение, страх или робость перед собеседованием и хотите научиться контролировать свои
              эмоции и выстраивать положительный контакт с интервьюером</p>
          </li>
          <li>
            <p>Хотите получить честную и объективную оценку своих сильных и слабых сторон</p>
          </li>
        </ol>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/contact-us'); ?>

  <section class="develop-interview dark custom-block">
    <div class="container">
      <div class="block__title develop-interview__title">
        <h2>Что будет проработано на тестовом собеседовании?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="develop-interview__blocks">
        <div class="develop-interview__block">
          <p class="develop-interview__block-txt">
            Наша услуга подходит для любого кандидата, который хочет повысить свою уверенность и компетентность перед
            собеседованием на работу. Особенно мы рекомендуем нашу услугу, если вы:
          </p>
        </div>
        <div class="develop-interview__block">
          <div class="develop-interview__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/develop-interview/01.svg" alt="">
          </div>
          <p class="develop-interview__block-tit">
            Профессиональные
          </p>
          <p class="develop-interview__block-txt">
            демонстрация знаний, опыта и компетенции в своей сфере деятельности
          </p>
        </div>
        <div class="develop-interview__block">
          <div class="develop-interview__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/develop-interview/02.svg" alt="">
          </div>
          <p class="develop-interview__block-tit">
            Коммуникативные навыки
          </p>
          <p class="develop-interview__block-txt">
            научитесь говорить четко, убедительно и вежливо, а также слушать и задавать вопросы
          </p>
        </div>
        <div class="develop-interview__block">
          <div class="develop-interview__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/develop-interview/03.svg" alt="">
          </div>
          <p class="develop-interview__block-tit">
            Аналитические
          </p>
          <p class="develop-interview__block-txt">
            важно суметь показать свою способность решать проблемы, анализировать информацию и принимать решения
          </p>
        </div>
        <div class="develop-interview__block">
          <div class="develop-interview__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/develop-interview/04.svg" alt="">
          </div>
          <p class="develop-interview__block-tit">
            Творческие
          </p>
          <p class="develop-interview__block-txt">
            развиваем способность генерировать идеи, находить нестандартные решения и быть гибким
          </p>
        </div>
        <div class="develop-interview__block">
          <div class="develop-interview__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/develop-interview/05.svg" alt="">
          </div>
          <p class="develop-interview__block-tit">
            Личностные качества
          </p>
          <p class="develop-interview__block-txt">
            такие как уверенность, мотивация, целеустремленность, стрессоустойчивость и эмоциональный интеллект
          </p>
        </div>
      </div>
      <div class="develop-interview__items">
        <div class="develop-interview__items-title">
          Более того, мы поможем: 
        </div>
        <ul class="develop-interview__items-list">
          <li>Найти первопричину стресса на собеседовании и преодолеть профессиональные страхи </li>
          <li>Подготовить грамотный рассказ о себе, своих достижениях и амбициях</li>
          <li>Проработать ответы на ключевые вопросы</li>
          <li>Разработать систему самопрезентации </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="our-services custom-block">
    <div class="container">
      <div class="block__title our-services__title">
        <h2>Наши услуги</h2>
        <div class="underline-block"></div>
      </div>
      <div class="our-services__blocks">
        <div class="our-services__block">
          <div class="our-services__img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-services/01.jpeg" alt="">
          </div>
          <div class="our-services__content">
            <div class="our-services__titles">
              <h3>Тренировочные варианты прохождения собеседования/интервью (индивидуальные)</h3>
              <p>*Для любой вакансии и сферы деятельности</p>
            </div>
            <ul class="our-services__list">
              <li>Собеседование по резюме: вам зададут общие и специфические вопросы о вашем опыте, образовании, целях и
                т.д. </li>
              <li>Тренировка в ответах на типичные и нетипичные вопросы, в решении ситуационных задач.</li>
              <li>Обратная связь по вашему поведению, манере говорить и т.д.</li>
            </ul>
            <div class="our-services__item">
              <div class="our-services__tit">
                Преимущества
              </div>
              <p class="our-services__txt">
                Вы повысите свою уверенность и компетентность, узнаете свои сильные и слабые стороны, а также получите
                советы по улучшению вашей самопрезентации.
              </p>
            </div>
            <div class="our-services__item">
              <div class="our-services__tit">
                Стоимость услуги
              </div>
              <p class="our-services__price">
                150 BYN
              </p>
              <p class="our-services__txt">
                Собеседование проводит психолог/коуч
              </p>
            </div>
            <button class="btn btn-position-aware popmake-29">ЗАКАЗАТЬ<span class="position-aware"></span></button>
          </div>
        </div>
        <div class="our-services__block">
          <div class="our-services__img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-services/02.jpeg" alt="">
          </div>
          <div class="our-services__content">
            <div class="our-services__titles">
              <h3>Отборочное (структурированное) интервью</h3>
              <p>*Для отбора кандидатов на руководящие и специализированные позиции</p>
            </div>
            <ul class="our-services__list">
              <li>Вы пройдете собеседование, в котором вам зададут вопросы, направленные на оценку ваших компетенций:
                лидерство, коммуникация, аналитическое мышление, стрессоустойчивость и т.д.</li>
              <li>Узнаете, какие компетенции вам нужно развивать</li>
            </ul>
            <div class="our-services__item">
              <div class="our-services__tit">
                Преимущества
              </div>
              <p class="our-services__txt">
                Вы покажете свой потенциал и подготовленность к занимаемой позиции, получите рекомендации по развитию
                своих навыков и качеств.
              </p>
            </div>
            <div class="our-services__item">
              <div class="our-services__tit">
                Стоимость услуги
              </div>
              <p class="our-services__price">
                150 BYN
              </p>
              <p class="our-services__txt">
                Собеседование проводит психолог/коуч
              </p>
            </div>
            <button class="btn btn-position-aware popmake-29">ЗАКАЗАТЬ<span class="position-aware"></span></button>
          </div>
        </div>
        <div class="our-services__block">
          <div class="our-services__img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-services/03.jpeg" alt="">
          </div>
          <div class="our-services__content">
            <div class="our-services__titles">
              <h3>Ситуационные интервью (кейс-интервью)</h3>
              <p>*Для отбора кандидатов на позиции в сфере консалтинга, финансов, маркетинга.</p>
            </div>
            <ul class="our-services__list">
              <li>Собеседование, в котором вам предложат решить реальную или гипотетическую бизнес-проблему, связанную с
                вашей сферой деятельности</li>
              <li>Вы сможете показать свои аналитические, творческие навыки и также способность работать в команде/под
                давлением.</li>
            </ul>
            <div class="our-services__item">
              <div class="our-services__tit">
                Преимущества
              </div>
              <p class="our-services__txt">
                Вы продемонстрируете свою эрудицию и знание рынка, а также получите дельные советы и четкий план
                прохождения кейс-интервью. Обратная связь по вашему логическому мышлению и креативности.
              </p>
            </div>
            <div class="our-services__item">
              <div class="our-services__tit">
                Стоимость услуги
              </div>
              <p class="our-services__price">
                150 BYN
              </p>
              <p class="our-services__txt">
                Собеседование проводит психолог/коуч
              </p>
            </div>
            <button class="btn btn-position-aware popmake-29">ЗАКАЗАТЬ<span class="position-aware"></span></button>
          </div>
        </div>
        <div class="our-services__block">
          <div class="our-services__img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-services/04.jpeg" alt="">
          </div>
          <div class="our-services__content">
            <div class="our-services__titles">
              <h3>Стрессовое интервью</h3>
              <p>*Для проверки вашей реакции на негативные ситуации, критику, провокации и конфликты.</p>
            </div>
            <ul class="our-services__list">
              <li>Вы пройдете собеседование, в котором вам зададут сложные, неудобные или агрессивные вопросы, создадут
                напряженную атмосферу.</li>
              <li>Сможете научиться справляться со стрессом, сохранять спокойствие и уверенность, а также защищать свою
                позицию.</li>
            </ul>
            <div class="our-services__item">
              <div class="our-services__tit">
                Преимущества
              </div>
              <p class="our-services__txt">
                Вы укрепите свою психологическую устойчивость и эмоциональный интеллект, а также получите советы по
                тому, как избегать конфликтов и находить компромиссы.
              </p>
            </div>
            <div class="our-services__item">
              <div class="our-services__tit">
                Стоимость услуги
              </div>
              <p class="our-services__price">
                150 BYN
              </p>
              <p class="our-services__txt">
                Собеседование проводит психолог/коуч
              </p>
            </div>
            <button class="btn btn-position-aware popmake-29">ЗАКАЗАТЬ<span class="position-aware"></span></button>
          </div>
        </div>
        <div class="our-services__block">
          <div class="our-services__img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-services/05.jpeg" alt="">
          </div>
          <div class="our-services__content">
            <div class="our-services__titles">
              <h3>Проективное интервью</h3>
              <p>*Для изучения вашей личности, ценностей, мотивов и предпочтений. </p>
            </div>
            <ul class="our-services__list">
              <li>Собеседование, в котором вам предложат выполнить различные психологические тесты: рисунки, ассоциации,
                ролевые игры и т.д.</li>
              <li>Вы сможете узнать больше о себе, своих сильных и слабых сторонах, а также о том, как вы воспринимаете
                себя и окружающий мир.</li>
            </ul>
            <div class="our-services__item">
              <div class="our-services__tit">
                Преимущества
              </div>
              <p class="our-services__txt">
                Вы получите ценную информацию о своей личности, которая поможет вам лучше понять себя, свои желания и,
                как следствие, выбрать подходящую для вас работу и карьеру.
              </p>
            </div>
            <div class="our-services__item">
              <div class="our-services__tit">
                Стоимость услуги
              </div>
              <p class="our-services__price">
                150 BYN
              </p>
              <p class="our-services__txt">
                Собеседование проводит психолог/коуч
              </p>
            </div>
            <button class="btn btn-position-aware popmake-29">ЗАКАЗАТЬ<span class="position-aware"></span></button>
          </div>
        </div>
        <div class="our-services__block">
          <div class="our-services__img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-services/06.jpeg" alt="">
          </div>
          <div class="our-services__content">
            <div class="our-services__titles">
              <h3>Групповое интервью (от 2 до 5 человек)</h3>
              <p>*Для оценки вашей способности работать в команде, сотрудничать с другими людьми и участвовать в
                коллективном решении проблем. </p>
            </div>
            <ul class="our-services__list">
              <li>Вы пройдете собеседование вместе с другими кандидатами, с которыми вам предстоит обсудить определенную
                тему, выполнить совместное задание или презентовать свои идеи. </li>
              <li>Сможете продемонстрировать свои коммуникативные, организационные и лидерские навыки, умение находить
                компромиссы и учитывать разные точки зрения.</li>
            </ul>
            <div class="our-services__item">
              <div class="our-services__tit">
                Преимущества
              </div>
              <p class="our-services__txt">
                Вы познакомитесь с потенциальными коллегами и партнерами, получите опыт и советы по командной работе. 
              </p>
            </div>
            <div class="our-services__item">
              <div class="our-services__tit">
                Стоимость услуги
              </div>
              <p class="our-services__price">
                200 BYN за человека
              </p>
              <p class="our-services__txt">
                Собеседование проводит психолог/коуч
              </p>
            </div>
            <button class="btn btn-position-aware popmake-29">ЗАКАЗАТЬ<span class="position-aware"></span></button>
          </div>
        </div>
        <div class="our-services__block">
          <div class="our-services__img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-services/07.jpeg" alt="">
          </div>
          <div class="our-services__content">
            <div class="our-services__titles">
              <h3>Групповое интервью (от 5 человек)</h3>
              <p>*Для оценки вашей способности выделяться из толпы, привлекать внимание и убеждать других.</p>
            </div>
            <ul class="our-services__list">
              <li>Собеседование вместе с большим количеством кандидатов, с которыми вам придется конкурировать за
                внимание интервьюера и за право продолжить собеседование.</li>
              <li>Вы покажете свою индивидуальность, харизму и уникальность, а также способность аргументировать свою
                позицию и влиять на мнение других. </li>
            </ul>
            <div class="our-services__item">
              <div class="our-services__tit">
                Преимущества
              </div>
              <p class="our-services__txt">
                Вы проверите свою конкурентоспособность и узнаете, как себя презентовать в большой аудитории.
              </p>
            </div>
            <div class="our-services__item">
              <div class="our-services__tit">
                Стоимость услуги
              </div>
              <p class="our-services__price">
                150 BYN за человека
              </p>
              <p class="our-services__txt">
                Собеседование проводит психолог/коуч
              </p>
            </div>
            <button class="btn btn-position-aware popmake-29">ЗАКАЗАТЬ<span class="position-aware"></span></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="how-work dark custom-block">
    <div class="container">
      <div class="block__title">
        <h2>Как мы работаем?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="how-work__items">
        <div class="how-work__item">
          <div class="how-work__item-img">
            <img src="/wp-content/themes/kadr2/image/marker-hard.svg" alt="">
          </div>
          <p class="how-work__item-txt">
            Мы работаем в онлайн-формате, поэтому не нужно тратить время и деньги на поездку к нам. Вы можете записаться
            на тестовое собеседование на нашем сайте, выбрав удобное для вас время и вид интервью.
          </p>
        </div>
        <div class="how-work__item">
          <div class="how-work__item-img">
            <img src="/wp-content/themes/kadr2/image/marker-hard.svg" alt="">
          </div>
          <p class="how-work__item-txt">
            После подтверждения записи вы получите ссылку на видеоконференцию, в которой вы будете общаться с нашим
            экспертом. Вам понадобится только компьютер с веб-камерой и микрофоном, а также стабильное
            интернет-соединение.
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="often-questions custom-block">
    <div class="container">
      <div class="often-questions__container">
        <div class="often-questions__title">
          <h2 class="title-line-new block">
            <span>Часто задаваемые вопросы</span>
          </h2>
          <p>Специалисты Кадра собрали актуальные вопросы, с которыми приходилось
            сталкиваться на практике.
          </p>
          <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
        </div>
        <div class="often-questions__blocks">
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Как записаться на тестовое собеседование?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Для записи на тестовое собеседование необходимо заполнить форму с данными и желаемой вакансией, а затем
                выбрать удобное для вас время и вид интервью.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Что меня ждет на тестовом собеседовании на работу?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>На тестовом собеседовании вы будете общаться с нашим экспертом по найму, который имеет большой опыт
                работы в разных сферах и компаниях. Он задаст вопросы, связанные с вашей профессиональной сферой,
                компетенциями и личностью, предложит решить различные задачи и кейсы. Вы сможете задать ему свои вопросы
                и получить советы.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>В каком виде я получу обратную связь?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>После прохождения тестового собеседования вы получите подробный отчет с оценкой ваших сильных и слабых
                сторон, а также рекомендациями по улучшению вашего поведения, манеры говорить, языка тела и визуального
                образа. Отчет будет доступен на нашем сайте или вы можете получить его по e-mail.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Могу ли я записать тестовое собеседование?
              </p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Да, вы можете сделать запись, если хотите пересмотреть ее позже и проанализировать свои ошибки. Однако,
                мы просим вас не распространять запись без нашего согласия, так как это нарушает права нашего эксперта и
                других кандидатов, если вы проходили групповое собеседование.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Кто подготовит меня к реальному собеседованию?
              </p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Наш эксперт по найму подготовит вас к реальному собеседованию, дав полезные советы и рекомендации по
                поводу вакансии, компании и работодателя, к которым вы собираетесь обратиться. Специалист компании
                «Кадр» поможет адаптировать ваше резюме и сопроводительное письмо к требованиям и ожиданиям
                работодателя, а также подскажет, как избежать типичных ошибок и ловушек на собеседовании.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Можете ли вы помочь мне подготовиться к техническому собеседованию?
              </p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Да, мы много лет готовим кандидатов к техническому собеседованию. Если вы ищете работу в сфере IT,
                инженерии, науки или других технических областях, наш эксперт проверит ваш уровень знаний и навыков,
                задав вопросы и задания, связанные с вашей специальностью. Он также даст вам советы по тому, как лучше
                объяснять свои решения, использовать терминологию и показать свой потенциал.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>

<?php get_footer(); ?>
<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "Тестовое собеседование на работу",
    "image": "https://hrbel.by/wp-content/uploads/2024/03/pass-test-job-interview.png",
    "description": "Получите ключевые навыки для успешного прохождения тестового собеседования на работу прямо сейчас",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/proyti-testovoe-sobesedovanie/",
        "priceCurrency": "BYN",
        "price": "100",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }
