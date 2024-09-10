<?php
/*
Template Name: Услуга: Корпоративный психолог для сотрудников
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
          Корпоративный психолог для сотрудников
        </h1>
        <p>
        Организовываем психологическое сопровождение для работников и руководителей с целью создания благоприятного микроклимата, а также поддержания психологического здоровья всех членов команды. Проводим тренинги, вебинары и консультации, на которых обучаем приемам самопомощи, развиваем навыки борьбы со стрессом.
        </p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/korp-psiholog/main.png" alt="HR-бенчмаркинг рынка и проектов">
        <?php if (get_field('cena')): ?>
          <div class="price_img" style="">
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
        <h2>Кто такой корпоративный психолог?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Это специалист, который посредством психологических методов решает множество задач в организации трудовой деятельности команды, нормализации эмоционального состояния её членов. В своей деятельности он оказывает психологическую, консалтинговую и коучинговую поддержку. В его функционал входит: урегулирование конфликтных ситуаций, формирование благоприятного микроклимата, а также разработка рекомендаций по улучшению условий труда.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>С чем корпоративный психолог работает на вебинарах?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ol class="list-bold">
          <li>
            <p>Помощь при выгорании</p>
            <p>Синдром профессионального выгорания развивается на фоне хронического стресса, снижая производительность труда. Внедряем стратеги по борьбе с этим состоянием, предотвращая истощение эмоциональных и умственных ресурсов.</p>
          </li>
          <li>
            <p>Work-life баланс</p>
            <p>Ущемление одной из сфер жизни приводит к снижению у человека общей удовлетворенности. Поэтому обучаем сотрудников соблюдать равновесие между рабочими задачами и личной жизнью. </p>
          </li>
          <li>
            <p>Внедрение well-being культуры</p>
            <p>Поддерживаем высокий уровень удовлетворённости команды условиями труда. Создаем корпоративную культуру, которая будет мотивировать работника продолжать профессиональную деятельность в вашей фирме. </p>
          </li>
          <li>
            <p>Работа со страхами и тревогой сотрудников</p>
            <p>Появление тревожного состояния у работников снижает их трудоспособность. Причиной его возникновения могут стать высокие требования к производительности труда, конфликтные отношения с коллегами, отсутствие информации о будущих перспективах. В рамках данного направления проводим индивидуальные сессии с персоналом, нормализуя его эмоциональное состояние.</p>
          </li>
          <li>
            <p>Адаптация персонала</p>
            <p>Обеспечиваем успешную интеграцию новых сотрудников в коллектив. Сопровождаем специалистов, у которых были изменены привычные условия труда (перевод в другой отдел, повышение и т.д.). </p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="pt-150">
  <?php get_template_part('template-parts/contact-us'); ?>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Какие преимущества приносит корпоративный психолог для компании?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ul class="marker-arrow">
          <li>
            <p>Создание благоприятного психологического микроклимата в коллективе, поддержание удовлетворённости персонала.</p>
          </li>
          <li>
            <p>Сплочение персонала, повышение результативности и работоспособности специалистов.</p>
          </li>
          <li>
            <p>Формирование условий, которые будут способствовать удержанию кадров, предотвращая их текучку.</p>
          </li>
          <li>
            <p>Создание well-being среды, в которой каждый работник может развиваться профессионально и приносить пользу организации.</p>
          </li>
          <li>
            <p>Поддержание баланса между рабочими обязанностями и личной жизнью работников.</p>
          </li>
          <li>
            <p>Внедрение в корпоративную культуру ценности ментального здоровья, профессионального развития.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость хедхантинга персонала</span>
                </h2> 
                
                <div class="block__item">
					<p class="half-width">Организовываем <strong>сопровождение корпоративного психолога для руководителей компаний</strong>. Наши специалисты обладают знаниями о вызовах, с которыми сталкиваются работодатели, об особенностях бизнес-процессов. Помогаем стать уверенным лидером, скорректировать управленческую стратегию.</p>
                  <br>
                  <p class="half-width">Также организовываем семинары для физических лиц. Профессиональная неудовлетворенность и проблемы в личной жизни могут снижать производительность труда. Дополнительным источником стресса становятся высокие требования к соискателям, конкурентность в профессиональной сфере. Корпоративные психологи оказывают поддержку в решении психологических вопросов, сохраняя ментальное здоровье специалиста.</p>
                  <br>
                  <p class="half-width">Конечная цена на услуги корпоративного психолога может быть изменена в большую или меньшую сторону. Зависит это от количества и периодичности встреч, а также места их проведения. Итоговую стоимость фиксируем в договоре.</p>
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
                                          Индивидуальные психологические консультации для руководителей/топ менеджеров
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Индивидуальные психологические консультации для руководителей/топ менеджеров
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    300,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    1,5 часа сессии 1 сотрудника, работу проводит психолог
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Индивидуальные психологические консультации для сотрудников компании
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    200,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    1,5 часа сессии 1 сотрудника, работу проводит психолог
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
                                        Индивидуальные психологические консультации: работа с неуверенностью, заниженной самооценкой, сложными жизненными моментами, личностным эмоциональным выгоранием, выход из личностного кризиса
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
                                                    2 часа, работу проводит психолог
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
                                                    6 часов, работу проводит психолог
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
                                                    10 часов, работу проводит психолог
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
  <div class="often-questions custom-block">
    <div class="container-new">
      <div class="often-questions__container pb-150">
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
              <p>Для чего нужен корпоративный психолог?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
				  Основная задача специалиста в работе с сотрудниками – психологическое сопровождение. <strong>Корпоративный психолог</strong> оказывает поддержку по нескольким направлениям: подбор новых кадров и выстраивание их карьерного пути, сопровождение работника при изменении условий труда, поддержание work-life balance, предотвращение появления синдрома эмоционального выгорания.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>С кем работает корпоративный психолог?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <ul class="marker-arrow">
                <li>
                  Работодателей. Организовываем консультации и вебинары, в ходе которых корректируем стиль управления персоналом, развиваем лидерские качества и т.д.
                </li>
                <li>
                  Физическими лицами. Конкурентная среда и высокие профессиональные требования могут вызывать тревогу у специалистов. На индивидуальных сессиях помогаем справиться с любыми психологическими трудностями.
                </li>
              </ul>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Каких результатов помогает добиться корпоративный психолог?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
                Услуги корпоративного психолога позволяют достигнуть следующих результатов:
              </p>
              <ul class="marker-arrow">
                <li>
                  Создание благоприятных условий для стабильного развития бизнеса, выхода на новые рынки;
                </li>
                <li>
                  Повышение работоспособности команды;
                </li>
                <li>
                  Вовлечение персонала в задачи фирмы;
                </li>
                <li>
                  Профилактика эмоционального выгорания.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="custom-block block-3">
    <div class="container container-padding">
      <div class="block__title">
        <h2>Почему мы?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ul class="marker-hard">
          <li>
            <p>Применяем эффективные методики. Мы разработали уникальные программы для работы корпоративного психолога с руководством и персоналом. Постоянно совершенствуемся, изучаем передовые практики в области психологии. Обеспечиваем максимальную результативность нашего сотрудничества.</p>
          </li>
          <li>
            <p>Направленность на результат. Ставим конкретные измеримые цели, с помощью которых легко оценить результат. Сосредотачиваемся на конкретных бизнес-задачах: повышение производительности труда, улучшение микроклимата в коллективе, снижение текучки кадров и т.д.</p>
          </li>
          <li>
            <p>Глубокое понимание психологических процессов в компаниях. Наши психологи обладают богатым опытом в области корпоративной психологии. Понимание специфики психологических процессов в профессиональной среде позволяет нам эффективно достигать поставленных целей.</p>
          </li>
          <li>
            <p>Личностный подход к организации сотрудничества. Придерживаемся персонализированного подхода к каждой компании и клиенту. </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/promotion'); ?>
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
    "name": "Корпоративный психолог для сотрудников",
    "image": "https://hrbel.by/wp-content/webp-express/webp-images/themes/kadr2/image/volkov-img/korp-psiholog/main.png.webp" ,
    "description": "Получите комплексный анализ оплаты труда с помощью агентства «Кадр». ✅ Проведем исследования оплаты труда, чтобы вы могли привлечь лучших специалистов.",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/kadrovyj-konsalting/korporativnyy-psiholog-dlya-sotrudnikov/",
        "priceCurrency": "BYN",
        "price": "200",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    },
    }
</script>

<?php get_footer(); ?>