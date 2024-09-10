<?php
/*
Template Name: Услуга: Бизнес коучинг для руководителей и сотрудников
Template Post Type: page
*/
?> 
<?php get_header(); ?>
<main>
  <section class="page-header">
    <div class="container">
      <div class="page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?> 
        </div>
        <h1>
        Бизнес коучинг для руководителей и сотрудников
        </h1>
        <p>
        Организовываем коучинг встречи в Минске и других регионах Беларуси для физических лиц и предпринимателей с целью повышения эффективности управления изменениями. В работе используем инновационные психологические методы, содействуя личностному росту клиентов.
        </p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/biznes-kouching/main.png" alt="HR-бенчмаркинг рынка и проектов">
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#block-1"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </section> 
  <div class="custom-block block-2" id="block-1">
    <div class="container">
      <div class="block__title">
        <h2>Как работает бизнес коучинг для руководителей и сотрудников?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
		  <p class="half-width"><strong>Бизнес коучинг</strong> проводится в формате групповых или индивидуальных встреч, на которых клиенту задаются вопросы, подталкивающие его к поиску решений. Бизнес коуч направляем человека, помогая ему взглянуть на сложившуюся ситуацию под новым углом и определить недостающее звено для развития. Коуч выступает в качестве проводника, который сопровождает заказчика в выбранном им пути к целям, а не предоставляет готовые варианты. Такая организация сотрудничества развивает у человека аналитические способности, критичное мышление и формирует уверенность в своих решениях.</p>
        <p class="half-width">Бизнес коучинг актуален для проработки следующих вопросов:</p>
        <ul class="marker-arrow">
          <li>
            <p>Профессиональное совершенствование.</p>
          </li>
          <li>
            <p>Развитие лидерских качеств.</p>
          </li>
          <li>
            <p>Управление изменениями.</p>
          </li>
          <li>
            <p>Построение корпоративной культуры.</p>
          </li>
          <li>
            <p>Повышение эффективности бизнеса.</p>
          </li>
          <li>
            <p>Изменение стиля управления персоналом.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Когда необходим профессиональный коучинг</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ol>
          <li>
            <p>Снижение мотивации работника и, как следствие, низкая заинтересованность в качественном выполнении задач.</p>
          </li>
          <li>
            <p>Сотрудник проявляет заинтересованность в развитии компании, предлагает идеи улучшения рабочих процессов, которые сам готов реализовывать.</p>
          </li>
          <li>
            <p>Работник стремится к продвижению по карьерной лестнице, интересуется карьерными возможностями в организации.</p>
          </li>
          <li>
            <p>Команду специалистов необходимо стимулировать для успешного выполнения сложных задач, требующих дополнительных усилий и ресурсов.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 pt-150">
    <div class="container container-padding">
      <div class="block__title">
        <h2>Виды бизнес коучинга, которые мы предоставляем</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ol class="list-bold">
          <li>
            <p>Командный коучинг</p>
            <p>Способствует повышению эффективности команды. Ориентирован на сплочение коллектива через улучшение коммуникации в группе, изменение конфликтных моделей поведения. Помогает построить новые стратегии в компании: разработка целей, определение миссии, согласование способов достижения задач организации.</p>
          </li>
          <li>
            <p>Коучинг Soft Skills</p>
            <p>Направлен на совершенствование личностных особенностей и навыков коммуникации с окружающими. Обучаем способам выгодно презентовать себя и свои достижения в профессии, развиваем навыки выступления на публике, обучаем грамотно выстраивать межличностные связи с коллегами.</p>
          </li>
          <li>
            <p>Коучинг адаптации в новой должности</p>
            <p>Коуч выстраивает программу управления человеческими ресурсами в фирме. Обучает способам сопровождения сотрудников, чтобы они могли быстро адаптироваться на новом рабочем месте и эффективно выполнять свои обязанности.</p>
          </li>
          <li>
            <p>Коучинг корпоративной культуры</p>
            <p>Разработка для менеджеров методов, которые раскроют профессиональный и личностный потенциал работников. Создаем ориентации на достижение поставленных задач для команд, отделов и компаний в целом.</p>
          </li>
          <li>
            <p>Коучинг мотивации</p>
            <p>Помогаем человеку определить карьерные возможности. Разрабатываем стратегию с пошаговым планом действий. Способствуем повышению качества жизни работников через преодоление внешних и внутренних барьеров.</p>
          </li>
          <li>
            <p>Коучинг развития лидерства</p>
            <p>Ориентирован на долгосрочный результат. Коуч раскрывает личностный потенциал и задатки лидера. Развивает навыки стратегического планирования, обучает способам поиска нестандартных решений для увеличения производительности команды.</p>
          </li>
        </ol>
    </div>
  </div>
        </div>
  <!--<div class="custom-block block-1">
    <div class="container" style="padding-top: 0;padding-bottom: 0;">
      <div class="block__title">
        <h2>Этапы консультации бизнес коучинга</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p>Определение задач бизнеса, постановка конечных целей и критериев для оценки результатов.</p>
        <p>Определение объема работы, согласование сроков и формата встреч.</p>
        <p>Выбор комфортного способа для получения обратной связи.</p>
        <p>Документально подтверждаем сотрудничество. Заключаем контракт на услуги коуча. Подписываем соглашение о соблюдении конфиденциальности.</p>
        <p>Сбор обратной связи о результатах коучинг сессий через оговоренный заранее временной отрезок.</p>
        <p>Определение эффективности сотрудничества. Оценка полученных результатов по согласованным ранее критериям.</p>
      </div>
    </div>
  </div>-->
  
  <?php get_template_part('template-parts/promotion'); ?>
  <section class="dark custom-block" style="margin-top: -150px;">
    <div class="container">
      <div class="block__title include-resume__title">
        <h2>Этапы консультации бизнес коучинга</h2>
        <div class="underline-block"></div>
      </div>
      <ol class="how-work-2__blocks">
        <li class="how-work-2__block">
          <p>
            Определение задач бизнеса, постановка конечных целей и критериев для оценки результатов.
          </p>
        </li>
        <li class="how-work-2__block">
          <p>
            Определение объема работы, согласование сроков и формата встреч.
          </p>
        </li>
        <li class="how-work-2__block">
          <p>
            Выбор комфортного способа для получения обратной связи.
          </p>
        </li>
        <li class="how-work-2__block">
          <p>
            Документально подтверждаем сотрудничество. Заключаем контракт на услуги коуча. Подписываем соглашение о соблюдении конфиденциальности.
          </p>
        </li>
        <li class="how-work-2__block">
          <p>
            Сбор обратной связи о результатах коучинг сессий через оговоренный заранее временной отрезок.
          </p>
        </li>
        <li class="how-work-2__block">
          <p>
            Определение эффективности сотрудничества. Оценка полученных результатов по согласованным ранее критериям.
          </p>
        </li>
      </ol>
    </div>
  </section>
  <div class="dark custom-block block-2">
    <div class="container" style="padding-top: 0;">
      <div class="block__title">
        <h2>С решением каких задач помогает личный коуч</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ul class="marker-arrow">
          <li>
            <p>Изменение стиля управления командой, повышая мотивацию работников и адаптацию персонала к новым условиям рынка.</p>
          </li>
          <li>
            <p>Развитие лидерских качеств у руководителя или менеджеров, чтобы эффективно мотивировать команду на достижение новых результатов.</p>
          </li>
          <li>
            <p>Улучшение рабочих процессов фирмы для сокращения издержек и повышения производительности труда.</p>
          </li>
          <li>
            <p>Оценка и улучшение действующей офисной политики.</p>
          </li>
          <li>
            <p>Повышение личной заинтересованности сотрудников в достижение их карьерных целей и вывода компании на новый уровень.</p>
          </li>
          <li>
            <p>Управление изменениями для минимизации издержек внутри организации.</p>
          </li>
        </ul>
    </div>
  </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pb-150 pt-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость</span>
                </h2> 
                <div class="block__item">
                  <p class="half-width">Предоставляем услуги коуча в Минске и других регионах Беларуси. Организовываем индивидуальные и групповые консультации со сертифицированными специалистами, который способствуют достижению личных и деловых задач.</p>
                  <br>
                  <p class="half-width">В рамках консультаций с физическими лицами выводим человека на новый уровень развития. Помогаем преодолеть свои страхи, увидеть собственный потенциал и возможные зоны для самосовершенствования.</p>
                  <br>
					<p class="half-width"><strong>Бизнес коучинг</strong> в работе с руководителем ориентирован на совершенствование его лидерских качеств, а также осознание и трансформацию ограничивающих убеждений. После окончания сессий руководитель сможет в управленческой деятельности применять методы, которые раскроют потенциал персонала и приведет к повышению его заинтересованности в профессиональном росте.</p>
                  <br>
                  <p class="half-width">Стоимость услуг определяется для каждой ситуации отдельно. Она зависит от периодичности сессий, места их проведения. Поэтому цена может быть отличаться от представленных ниже в большую или меньшую сторону. После заключения договора итоговая стоимость фиксируется и не полежит изменениям.</p>
                  <br><br>
                </div>
                <p class="priceNew__title title-line-new" style="margin-top: 30px;">
                    <span>Наши тарифы</span>
                </p> 
                <div class="priceNew-block">
                  <div class="priceNew-tabs">
                      <button class="priceNew-tabs__button active" data-tab="1">
                        Компаниям
                      </button>
                      <button class="priceNew-tabs__button" data-tab="2">
                        Физическим лицам
                      </button>
                  </div>

                    <div class="priceNew-block-inner">
                        <ul class="priceNew-list show" data-tab="1">
                            <li class="priceNew-item">
                                <div class="priceNew-item-table" style="display: block; margin-top: 0;">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ (за 1 сотрудника) от, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Индивидуальные коучинговые консультации
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Индивидуальные коучинговые консультации для руководителей/топ менеджеров
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    300,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    1,5 часа сессии 1 сотрудника, работу проводит коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Индивидуальные коучинговые консультации для сотрудников компании
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    200,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    1,5 часа сессии 1 сотрудника, работу проводит коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="priceNew-list" data-tab="2">
                            <li class="priceNew-item">
                                <div class="priceNew-item-table" style="display: block; margin-top: 0;">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ (за 1 сотрудника) от, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Индивидуальные коучинговые консультации: работа с неуверенностью, с заниженной самооценкой, сложными профессиональными моментами, эмоциональным выгоранием, выход из профессионального кризиса
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                  Разовая консультация
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    200,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    2 часа, работу проводит коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Пакет Бонус (3 консультации по 2 часа)+ 2 домашних задания с разбором и обратной связью (Бонус о компании)
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    450,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    6 часов, сессию проводит коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Пакет Бонус+ (5 консультации по 2 часа)+4 домашних задания с разбором и обратной связью (Бонус от компании). По запросу выдаем сертификат
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    700,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    10 часов, встречу проводит коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <div class="custom-block block-3 dark pt-150">
    <div class="container container-padding">
      <div class="block__title">
        <h2>Почему мы?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ul class="marker-hard">
          <li>
            <p>Ориентированны на результат. На первой коучинг встрече определяем конечные цели, критерии оценки совместной работы. Планомерно приводим клиента к намеченному результату.</p>
          </li>
          <li>
            <p>Глубокое понимание психологических процессов. В нашем штате собраны сертифицированные коучи, которые имеют богатый опыт в бизнес коучинге. Экспертность в области психологии позволяет нам достигать максимальных результатов.</p>
          </li>
          <li>
            <p>Личностный подход к организации сотрудничества. Рассматриваем каждую ситуацию отдельно, применяя персонализированный подход к взаимодействию с заказчиком.</p>
          </li>
          <li>
            <p>Соблюдение конфиденциальности. Предоставляем документальные гарантии о неразглашении полученной от клиентов информации.</p>
          </li>
          <li>
            <p>Трансформация мышления. В рамках коучинга помогаем осознать ограничивающие убеждения и выбрать конструктивные подходы к решению задач.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="often-questions custom-block">
    <div class="container-new">
      <div class="often-questions__container pt-150 pb-150">
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
              <p>Что такое бизнес коучинг?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
				  <strong> Бизнес коучинг</strong> – это метод обучения, в рамках которого коуч выполняет роль проводника. На сессиях тренер задаёт вопросы, направляя человека на осознание прошлых установок, трансформацию мышления и поиск новых способов реагирования. В отличие от сессий с психологом или наставничества ментора, бизнес коучинг ориентирован на решение конкретных задач.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>С кем работает бизнес коуч?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
              Предоставляем услуги профессионального бизнес коучинга для работодателей и соискателей. Организовываем индивидуальные и групповые встречи для преобразования ограничивающих установок, развития лидерских качеств и гармонизацию моделей поведения в трудовой среде.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Каких результатов помогает добиться личный коуч?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
              В ходе коучинг-сессий для бизнеса тренер способствует достижению следующих результатов:
              </p>
              <ul class="marker-arrow">
                <li>
                Сформировать цель и определить, что нужно изменить для её достижения.
                </li>
                <li>
                Рост осознанности.
                </li>
                <li>
                Лучшее понимание своих потребностей, ценностей, ограничивающих убеждений, шаблонных моделей поведения и мышления.
                </li>
                <li>
                Развитие аналитических способностей, стратегического мышления.
                </li>
                <li>
                Снижение стресса.
                </li>
                <li>
                Рост мотивации, выявление ресурсов для достижения карьерных задач.
                </li>
              </ul>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Принципы бизнес коучинга</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
              Деятельность бизнес коуча базируется на нескольких принципах:
              </p>
              <ul class="marker-arrow">
                <li>
                Конфиденциальность – вся полученная информация от клиента не подлежит разглашению третьим лицам.
                </li>
                <li>
                Равноправного партнерства – коуч помогает найти эффективные модели поведения и сфокусироваться на изменениях, а не предоставляет готовые решения.
                </li>
                <li>
                Профессионализм – коуч проявляет уважение к клиенту, предлагая поддержку в его развитии.
                </li>
              </ul>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Формат работы бизнес коучинга</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
              Сопровождение коуча может быть организовано в двух форматах:
              </p>
              <ul class="marker-arrow">
                <li>
                Индивидуальный коучинг (могут проходить онлайн или офлайн).
                </li>
                <li>
                Групповые встречи каждую неделю 1-2 раза.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/contact-us'); ?>
  <?php get_template_part('template-parts/services'); ?>
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/news'); ?>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>
<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "Бизнес коучинг для руководителей и сотрудников",
    "image": "https://hrbel.by/wp-content/webp-express/webp-images/themes/kadr2/image/volkov-img/biznes-kouching/main.png.webp",
    "description": "Воспользуйтесь услугой профессионального бизнес коуча. ✅ Индивидуальный и групповой коучинг для руководителей и сотрудников вашей компании. ✅ Развивайте лидерские навыки вместе с опытным бизнес коучем.",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/kadrovyj-konsalting/biznes-kouching-dlya-rukovoditeley-i-sotrudnikov/",
        "priceCurrency": "BYN",
        "price": "200",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }
</script>


<?php get_footer(); ?>