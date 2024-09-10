<?php
/*
Template Name: Заказать услуги медиатора в Минске
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="mediator-page">
  <section class="page-header">
    <div class="container">
      <div class="page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Заказать услуги медиатора в Минске</h1>
        <p>Решаем конфликт или спор без суда, быстро и конфиденциально. Предоставляем нейтрального и профессионального
          посредника, который поможет вам найти взаимовыгодное решение. Оказываем услуги медиации в Минске и области.
          Наши специалисты имеют опыт и квалификацию в различных сферах права. Закажите услуги медиатора прямо сейчас и
          получите бесплатную консультацию!
        </p>
        <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="/wp-content/uploads/2024/03/order-mediator-services-in-Minsk.png"
          alt="Заказать услуги медиатора в Минске">
        <a class="btn btn-position-aware dark smooth-transition" href="#what-mediation"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </section>

  <section class="what-mediation custom-block" id="what-mediation">
    <div class="container">
      <div class="what-mediation__container">
        <div class="block__title what-mediator__title">
          <h2>Что такое медиация и как она работает?</h2>
          <div class="underline-block"></div>
        </div>
        <ol class="what-mediator__list">
          <li>
            <strong>Медиация</strong> — это процесс переговоров между сторонами конфликта или спора при участии
            медиатора, который
            является независимым и нейтральным специалистом. Медиатор не выносит решения за стороны, а помогает им
            общаться, выявлять интересы, генерировать и оценивать варианты решения.
          </li>
          <li>
            Медиация проводится во внесудебном порядке, по добровольному согласию сторон и на основе конфиденциальности.
            Процесс может быть начат до обращения в суд или после возбуждения дела. 
          </li>
          <li>
            Цель медиации - достичь соглашения, которое удовлетворяет интересам всех сторон и имеет юридическую силу.
          </li>
        </ol>
        <div class="what-mediator__work">
          <h3 class="what-mediator__work-title">
            Медиация работает следующим образом:
          </h3>
          <div class="what-mediator__work-items">
            <div class="what-mediator__work-item">
              <div class="what-mediator__work-img">
                <img src="<?= get_template_directory_uri(); ?>/image/what-mediation/01.svg" alt="">
              </div>
              <p class="what-mediator__work-text">
                Стороны обращаются к медиатору, который проводит бесплатную консультацию и заключает с ними договор
                медиации.
              </p>
            </div>
            <div class="what-mediator__work-item">
              <div class="what-mediator__work-img">
                <img src="<?= get_template_directory_uri(); ?>/image/what-mediation/02.svg" alt="">
              </div>
              <p class="what-mediator__work-text">
                Медиатор организует встречу сторон, на которой объясняет правила и цели медиации, а также устанавливает
                доверительную атмосферу.
              </p>
            </div>
            <div class="what-mediator__work-item">
              <div class="what-mediator__work-img">
                <img src="<?= get_template_directory_uri(); ?>/image/what-mediation/03.svg" alt="">
              </div>
              <p class="what-mediator__work-text">
                Стороны излагают свои позиции по спору, выражают свои чувства, интересы и потребности, слушают и
                понимают друг друга.
              </p>
            </div>
            <div class="what-mediator__work-item">
              <div class="what-mediator__work-img">
                <img src="<?= get_template_directory_uri(); ?>/image/what-mediation/04.svg" alt="">
              </div>
              <p class="what-mediator__work-text">
                Медиатор помогает генерировать и оценивать различные варианты решения спора, которые учитывают интересы
                и потребности всех сторон.
              </p>
            </div>
            <div class="what-mediator__work-item">
              <div class="what-mediator__work-img">
                <img src="<?= get_template_directory_uri(); ?>/image/what-mediation/05.svg" alt="">
              </div>
              <p class="what-mediator__work-text">
                Стороны сами принимают решение о том, как урегулировать свой спор, и оформляют его в виде медиативного
                соглашения, которое имеет юридическую силу.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="principle-mediation dark custom-block">
    <div class="container">
      <div class="block__title principle-mediation__title">
        <h2>Принципы медиации</h2>
        <div class="underline-block"></div>
      </div>
      <ul class="principle-mediation__blocks">
        <li class="principle-mediation__block">
          <div class="principle-mediation__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/principle-mediation/01.svg" alt="">
          </div>
          <p class="principle-mediation__block-tit">
            Добровольность
          </p>
          <p class="principle-mediation__block-txt">
            Стороны участвуют в медиации по своему желанию и могут прекратить процесс в любой момент.
          </p>
        </li>
        <li class="principle-mediation__block">
          <div class="principle-mediation__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/principle-mediation/02.svg" alt="">
          </div>
          <p class="principle-mediation__block-tit">
            Нейтральность
          </p>
          <p class="principle-mediation__block-txt">
            Медиатор не представляет интересы ни одной из сторон и не влияет на исход медиации.
          </p>
        </li>
        <li class="principle-mediation__block">
          <div class="principle-mediation__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/principle-mediation/03.svg" alt="">
          </div>
          <p class="principle-mediation__block-tit">
            Добровольность
          </p>
          <p class="principle-mediation__block-txt">
            Все, что происходит в ходе медиации, остается секретом для третьих лиц и не может быть использовано в суде
            или иных процедурах.
          </p>
        </li>
        <li class="principle-mediation__block">
          <div class="principle-mediation__block-img">
            <img src="<?= get_template_directory_uri(); ?>/image/principle-mediation/04.svg" alt="">
          </div>
          <p class="principle-mediation__block-tit">
            Самостоятельность
          </p>
          <p class="principle-mediation__block-txt">
            Стороны сами принимают решение о том, как урегулировать свой спор, исходя из своих интересов и потребностей.
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="mediator-cost custom-block">
    <div class="container">
      <div class="block__title mediator-cost__title">
        <h2>Стоимость услуги медиатора</h2>
        <div class="underline-block"></div>
      </div>
      <div class="mediator-cost__container">
        <div class="mediator-cost__content">
          <p class="mediator-cost__text">
            Заказать медиатора можно связавшись с нашими специалистами через форму обратной связи на сайте, почту,
            мессенджеры или по телефону +375 44 557 20 20. 
          </p>
          <div class="mediator-cost__img">
            <img src="/wp-content/uploads/2024/03/mediator-service-cost.png" alt="">
          </div>
        </div>
        <ol class="mediator-cost__list">
          <li>
            <p>Цена медиации зависит от сложности и длительности спора, количества и квалификации медиаторов, а также от
              дополнительных расходов. </p>
          </li>
          <li>
            <p>Средняя стоимость услуг медиатора в Минске составляет 550 BYN. Окончательная сумма определяется по
              результатам бесплатной консультации и заключения договора. </p>
          </li>
          <li>
            <p>Стоимость услуги обычно делят между собой стороны спора в равных долях, если не договорились иначе.</p>
          </li>
        </ol>
      </div>
    </div>
  </section>

  <section class="service-mediator dark custom-block">
    <div class="container">
      <div class="block__title service-mediator__title">
        <h2>Предоставляем услуги медиации в Минске и помощь юриста по следующим вопросам</h2>
        <div class="underline-block"></div>
      </div>
      <ol class="service-mediator__items">
        <li>
          <b>Семейные</b>
          <p>решаем конфликты, связанные с разводом, разделом имущества, алиментами, опекой и усыновлением детей,
            наследством.</p>
        </li>
        <li>
          <b>Трудовые</b>
          <p>помогаем урегулировать споры между работниками и работодателями, связанные с трудовым договором, заработной
            платой, увольнением, дисциплинарным взысканием, моббингом.</p>
        </li>
        <li>
          <b>Хозяйственные</b>
          <p>между предпринимателями, связанные с договорами, долгами, поставками, качеством товаров и услуг,
            интеллектуальной собственностью и т.д.</p>
        </li>
        <li>
          <b>Корпоративные</b>
          <p>между участниками хозяйственных обществ, связанные с управлением, распределением прибыли, выходом из
            общества, слиянием и поглощением.</p>
        </li>
        <li>
          <b>Гражданские</b>
          <p>решаем споры между физическими лицами, связанные с правами на недвижимость, автомобили, животных, вредом,
            причиненным здоровью или имуществу и т.д.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="dispute-res-scheme custom-block">
    <div class="container">
      <div class="block__title dispute-res-scheme__title">
        <h2>Схема урегулирования споров</h2>
        <div class="underline-block"></div>
      </div>
      <ol class="dispute-res-scheme__list">
        <li>
          <b>Подготовка</b>
          <p>На этом этапе стороны спора обращаются к медиатору, получают бесплатную консультацию, заключают договор
            медиации и согласовывают время и место проведения медиации.</p>
        </li>
        <li>
          <b>Начало медиации</b>
          <p>
            Медиатор знакомит стороны с правилами и принципами медиации, устанавливает доверительную атмосферу и дает
            слово каждой стороне для изложения своей позиции по спору.
          </p>
        </li>
        <li>
          <b>Выявление интересов и потребностей</b>
          <p>
            На данной стадии специалист помогает сторонам выявить, понять свои и чужие интересы/потребности, которые
            лежат в основе спора, а также обнаружить точки соприкосновения.
          </p>
        </li>
        <li>
          <b>Генерация и оценка вариантов решения</b>
          <p>
            Проводится:
          <ul>
            <li>Стимуляция сторон к поиску возможных вариантов решения спора, которые учитывают интересы и потребности
              всех;</li>
            <li>Оценка реалистичности, справедливости и приемлемости предлагаемых вариантов.</li>
          </ul>
          </p>
        </li>
        <li>
          <b>Принятие решения и заключение соглашения</b>
          <p>
            На этом этапе медиатор помогает сторонам достичь согласия по выбранному варианту решения и оформить его в
            виде медиативного соглашения, которое имеет юридическую силу и может быть подтверждено судом или нотариусом
          </p>
        </li>
        <li>
          <b>Завершение медиации и обратная связь</b>
          <p>
            Специалист подводит итоги, благодарит стороны за участие и сотрудничество, а также проводит обратную связь с
            ними, чтобы узнать их мнение о процессе и результате медиации.
          </p>
        </li>
      </ol>
      <p class="dispute-res-scheme__text">
        Обратитесь к нашим специалистам за бесплатной консультацией, чтобы узнать, сколько стоят услуги медиатора или
        заказать медиацию в Минске 
      </p>
    </div>
  </section>

  <section class="benefits-mediation custom-block">
    <div class="container">
      <div class="block__title benefits-mediation__title">
        <h2>Преимущества медиации</h2>
        <div class="underline-block"></div>
      </div>
      <p class="benefits-mediation__txt">
        Медиация имеет ряд преимуществ перед другими способами разрешения споров, такими как суд, арбитраж или
        переговоры. Среди них можно выделить следующие:
      </p>
      <ul class="benefits-mediation__items">
        <li>
          Позволяет сохранить и восстановить добрые отношения между сторонами, так как она не обостряет конфликт, а
          направлена на сотрудничество и поиск общих интересов
        </li>
        <li>
          Экономит ресурсы сторон: деньги, время и нервы. Медиация обычно занимает меньше времени и стоит дешевле, чем
          судебный процесс. Кроме того, она исключает риск публичного оглашения спора и разглашения конфиденциальной
          информации.
        </li>
        <li>
          Снимает психологическую и эмоциональную нагрузку, так как она дает сторонам возможность высказать свои
          чувства, потребности и опасения, а также услышать и понять друг друга
        </li>
        <li>
          Имеет высокий уровень надежности и исполнения, так как стороны добровольно приходят к решению. Медиативное
          соглашение имеет юридическую силу и может быть подтверждено судом или нотариусом.
        </li>
        <li>
          Приводит к справедливому решению, основанному на интересах сторон, а не на формальных правилах и законах.
          Стороны сами принимают решение, которое удовлетворяет их потребностям и ожиданиям.
        </li>
      </ul>
    </div>
  </section>

  <?php get_template_part('template-parts/team'); ?>

  <section class="mediator-work custom-block dark">
    <div class="container">
      <div class="block__title resolve-conflict__title">
        <h2>Как мы работаем</h2>
        <div class="underline-block"></div>
      </div>
      <div class="mediator-work__container">
        <div class="mediator-work__text">
          <img src="<?= get_template_directory_uri(); ?>/image/marker-small.svg" alt="">
          <p>Мы - команда профессиональных медиаторов и юристов, которые имеют опыт и квалификацию в различных сферах
            права. Работаем в соответствии с Законом Республики Беларусь от 12 июля 2013 г. № 58-З «О медиации» и
            Правилами проведения медиации, утвержденными постановлением Совета Министров Республики Беларусь от 28
            декабря
            2013 г. № 1150. </p>
        </div>
        <div class="mediator-work__content">
          <div class="mediator-work__blocks">
            <div class="mediator-work__block">
              <span></span>
            </div>
            <div class="mediator-work__block">
              <span></span>
            </div>
            <div class="mediator-work__block">
              <span></span>
            </div>
            <div class="mediator-work__block">
              <span></span>
            </div>
          </div>
          <div class="mediator-work__items">
            <div class="mediator-work__item">
              <b>Консультация</b>
              <p>Мы предоставляем бесплатную консультацию по телефону или электронной почте, на которой рассказываем о
                медиации, ее преимуществах и условиях, оцениваем перспективы разрешения вашего спора с помощью медиации.
              </p>
            </div>
            <div class="mediator-work__item">
              <b>Подготовка</b>
              <p>Заключаем с вами договор медиации, в котором определяем стоимость, сроки и порядок проведения медиации.
                Выбираем медиатора или медиаторов, которые будут вести процесс. Берем на себя согласование времени и
                места
                проведения медиации с другой стороной спора и при необходимости отправляем ей приглашение на медиацию.
              </p>
            </div>
            <div class="mediator-work__item">
              <b>Проведение</b>
              <p>Наши специалисты проводят медиацию в соответствии с принципами добровольности, нейтральности,
                конфиденциальности и самостоятельности сторон. Мы помогаем сторонам общаться, выявлять их интересы и
                потребности, генерировать и оценивать варианты решения спора. Оказываем юридическую помощь по вопросам,
                связанным с медиацией.
              </p>
            </div>
            <div class="mediator-work__item">
              <b>Завершение</b>
              <p>Наша работа выполнена, когда стороны достигают медиативного соглашения или решают прекратить процесс.
                Компания «Кадр» помогает сторонам сформулировать и оформить медиативное соглашение в письменной форме, а
                также подтвердить его судом или нотариусом, если это необходимо. Мы также проводим обратную связь со
                сторонами и оцениваем результаты медиации.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="resolve-conflict custom-block">
    <div class="container">
      <div class="block__title resolve-conflict__title">
        <h2>Хотите разрешить конфликт или спор без суда, быстро и конфиденциально?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="resolve-conflict__items">
        <div class="resolve-conflict__item">
          <div class="resolve-conflict__img">
            <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="">
          </div>
          <p class="resolve-conflict__text">
            Медиация — то, что вам нужно. Мы готовы помочь вам найти оптимальное решение, которое удовлетворит ваши
            интересы и потребности. Не откладывайте решение вашей проблемы, свяжитесь с нами прямо сейчас и получите
            бесплатную консультацию по телефону или электронной почте.
          </p>
        </div>
        <div class="resolve-conflict__item">
          <div class="resolve-conflict__img">
            <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="">
          </div>
          <p class="resolve-conflict__text">
            Закажите <strong>услуги медиатора</strong> и получите гарантию качества, профессионализма и
            конфиденциальности!
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-form-3">
    <div class="container">
      <div class="contact-form-3__container">
        <div class="contact-form-3__img">
          <img src="/wp-content/uploads/2024/03/contact-form-3.png" alt="">
        </div>
        <div class="contact-form-3__content">
          <h2 class="contact-form-3__title">
            Доверьте решение споров профессионалам из Кадра
          </h2>
          <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
          <div class="contact-form-3__subimg">
            <img src="/wp-content/uploads/2024/03/contact-form-subimg.png" alt="">
          </div>
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
              <p>В чем суть медиации?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Медиация - это процесс, в рамках которого медиатор помогает сторонам разрешить конфликт путем
                конструктивного общения и совместного поиска взаимовыгодного решения. В отличие от судебных процессов,
                медиация способствует созданию атмосферы сотрудничества, в которой участники активно участвуют в поиске
                компромиссов, а не просто защищают свои позиции. Этот подход не только способствует более быстрому и
                эффективному разрешению споров, но также поддерживает восстановление отношений и сохранение
                долгосрочного согласия между сторонами.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Какие нормативно правовые акты регулируют вопросы в сфере медиации?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>В Республике Беларусь основным нормативно правовым актом, регулирующим вопросы в сфере медиации,
                является Закон РБ от 12 июля 2013 г. № 58-З «О медиации».
              </p>
              <p>Кроме того, вопросы медиации затрагиваются в некоторых других законах, например, в Гражданском
                процессуальном кодексе Республики Беларусь, в Кодексе Республики Беларусь об административных
                правонарушениях, в Семейном кодексе Республики Беларусь и др.</p>
              <p>Существуют подзаконные акты, например, постановление Совета Министров Республики Беларусь от 28 декабря
                2013 г. № 1150 «Об утверждении Правил проведения медиации».</p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>В чем преимущества медиации перед судом?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Преимуществ много, так как медиация:
              </p>
              <ul>
                <li>Позволяет сохранить и восстановить добрые отношения между сторонами, тогда как суд обычно разрушает
                  их.</li>
                <li>Снимает психологическую и эмоциональную нагрузку.</li>
                <li>Экономит ресурсы сторон. Она обычно занимает меньше времени и стоит дешевле, чем судебный процесс.
                </li>
                <li>Исключает риск публичного оглашения спора и разглашения конфиденциальной информации.</li>
                <li>Имеет высокий уровень надежности и исполнения.</li>
              </ul>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Кому необходимы услуги медиации?
              </p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Услуги медиатора подходят для быстрого решения любого типа конфликта или спора с последующим
                юридическим закреплением результата. Медиация может быть использована как самостоятельный метод
                урегулирования, так и в сочетании с другими методами, например, с арбитражем, переговорами или судом.
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

<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "Услуги медиатора в Минске",
    "image": "https://hrbel.by/wp-content/uploads/2024/03/order-mediator-services-in-Minsk.png",
    "description": "Закажите профессиональные услуги медиатора в Минске",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/kadrovyj-konsalting/zakazat-uslugi-mediatora-v-minske/",
        "priceCurrency": "BYN",
        "price": "550",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }

</script>
<?php get_footer(); ?>