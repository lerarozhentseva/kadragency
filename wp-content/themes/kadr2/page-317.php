<?php
/*
Template Name: HR аналитика
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="hr-analytics-title page-header">
    <div class="container">
      <div class="hr-analytics-title__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>HR аналитика</h1>
        <p>Увеличить прибыль предприятия только за счет HR аналитики? Легко!
          Специалисты кадрового агентства «КАДР» соберут информацию, отследят и проанализируют динамику кадров и сделают
          конкретные, применимые на практике выводы.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="hr-analytics-title__item page-header__item item-2">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-title.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-title.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-title.jpg"
            alt="Сотрудники обсуждают проект">
        </picture>
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#understanding-the-problem"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="understanding-the-problem" class="understanding-the-problem">
    <div class="container">
      <div class="title-part-mobile__item">
        <p>Увеличить прибыль предприятия только за счет HR аналитики? Легко!
          Специалисты кадрового агентства «КАДР» соберут информацию, отследят и проанализируют динамику кадров и сделают
          конкретные, применимые на практике выводы.</p>
      </div>
      <div class="understanding-the-problem__title">
        <h2>Понимание проблемы</h2>
        <div class="underline-block"></div>
      </div>
      <div class="understanding-the-problem__item">
        <p>Чаще всего кадровые решения основываются лишь на субъективном видении руководителя компании или структурного
          подразделения. Они не подкреплены никакими фактами, обзорами зп, расчетами, оценками эффективности.
          Человеческий фактор не застрахован от вольных или невольных ошибок, которые сказываются на прибыли и
          стабильности.</p>
        <p>Отсутствие HR-анализа, неверное распределение нагрузки, неоправданный разрыв в размере заработной платы
          сотрудников приводят к конфликтам, нервозности, неравномерности работы и снижению производительности труда.
          Кадровое агентство «КАДР» помогает найти оптимальную модель управления и повысить производительность
          предприятия.</p>
      </div>
    </div>
  </div>
  <div class="what-tasks-do-we-solve">
    <div class="container">
      <div class="what-tasks-do-we-solve__title">
        <h2>Какие задачи решает HR-аналитика</h2>
        <div class="underline-block"></div>
      </div>
      <div class="what-tasks-do-we-solve__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-1.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-1.jpg" type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-1.jpg" alt="Рабочее место">
        </picture>
      </div>
      <div class="what-tasks-do-we-solve__item">
        <p>Как показывает практика, по результатам HR-исследований удается повысить прибыльность бизнеса и эффективность
          управления персоналом.</p>
        <p>Основные задачи <strong>HR аналитики</strong>:</p>
        <ul>
          <li>
            <p>Сбор статистики по персоналу;</p>
          </li>
          <li>
            <p>Усиление контроля;</p>
          </li>
          <li>
            <p>Увеличение эффективности сотрудников.</p>
          </li>
        </ul>
        <p>Вместе с руководителем мы:</p>
        <ul>
          <li>
            <p>Отследим скрытые процессы в коллективе;</p>
          </li>
          <li>
            <p>Вычислим закономерности;</p>
          </li>
          <li>
            <p>Спрогнозируем возможные проблемы в будущем;</p>
          </li>
          <li>
            <p>Разработаем точечную методику минимизации рисков;</p>
          </li>
          <li>
            <p>Построим экономически грамотную модель принятия решений по персоналу;</p>
          </li>
          <li>
            <p>Оздоровим микроклимат в коллективе;</p>
          </li>
          <li>
            <p>Улучшим финансово-экономическое положение предприятия в целом.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="what-will-it-give">
    <div class="container">
      <div class="what-will-it-give__title">
        <h2>Что дает аналитика HR-процессов</h2>
        <div class="underline-block"></div>
      </div>
      <div class="what-will-it-give__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-2.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-2.jpg" type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-2.jpg"
            alt="Настенные часы из дерева">
        </picture>
      </div>
      <div class="what-will-it-give__item">
        <p>Имея на руках аналитический обзор, Вы сможете:</p>
        <ol>
          <li>
            <p>Сопоставить результат исследования с бизнес-процессами предприятия.</p>
          </li>
          <li>
            <p>Строить гипотезы развития компании, имея основания в виде статистических данных.</p>
          </li>
          <li>
            <p>Принимать грамотные решения по управлению персоналом.</p>
          </li>
          <li>
            <p>Получите готовую стратегию подбора кадрового состава.</p>
          </li>
          <li>
            <p>Исследование заработных плат приведет к оптимизации фондов оплаты труда и материального
              стимулирования сотрудников.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="how-we-will-achieve-it">
    <div class="container">
      <div class="how-we-will-achieve-it__title">
        <h2>Как мы этого достигнем</h2>
        <div class="underline-block"></div>
      </div>
      <div class="how-we-will-achieve-it__item">
        <p>Чтобы затраты предприятия окупались, а производительность труда росла, нужно понимать внешние и внутренние
          процессы, происходящие на рынке труда и занятости Беларуси, а также в кругу отдельно взятой компании. При всей
          кажущейся простоте <strong>HR аналитика</strong> отслеживает, оценивает и систематизирует сотни показателей.
          Специальные методики кадрового агентства «КАДР» не смогут применить самостоятельно ни руководители, ни
          учредители и собственники бизнеса, ни работники коллектива. Поэтому гораздо дешевле, быстрее и продуктивнее
          воспользоваться услугами нашей организации.</p>
        <p>Для каждой сферы, для каждого предприятия подойдут одни методы и критерии оценки и не подойдут другие. Так
          что общего, стандартного подхода не существует. Он определяется ситуативно. Например, в продажах важен опыт
          работы с крупными и мелкими поставками, имеет значение логистика. Для сферы администрирования и управления
          бизнес-процессами важно умение адаптироваться к нестандартной ситуации, а в области производства товаров во
          главу угла ставится организация оптимальных условий труда.</p>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость кадрового консалтинга</span>
                </h2> 
                <div class="priceNew-block">
                    <div class="priceNew-block-inner">
                        <ul class="priceNew-list show">
                            <li class="priceNew-item">
                                <div class="priceNew-item-table" style="display: block;">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ от, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Разработка регламентов, бизнес – процессов в компании с нуля
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 10 сотрудников/до 3 отделов в компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1500
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 30 сотрудников/до 5 отделов в компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1800
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 50 сотрудников/до 5 отделов
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2300
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                свыше 50 сотрудников/свыше 5 отделов
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2800
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: ведущий юрист, помощник юриста, HR
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
  <?php get_template_part('template-parts/promotion'); ?>
  <?php get_template_part('template-parts/contact-us'); ?>
  <div class="external-monitoring">
    <div class="container container-padding">
      <div class="external-monitoring__title">
        <h2>Внешний мониторинг</h2>
        <div class="underline-block"></div>
      </div>
      <div class="external-monitoring__item">
        <p>Это общее понимание трудовых процессов: баланс спроса и предложения в сфере кадров, исследование рынка
          заработной платы, общая демографическая ситуация в стране. Также проводим сравнительный детальный анализ
          аналогичных компаний, конкурентоспособных на рынке профессиональных кадров. На их примере сможем объективно
          оценить положение дел в регионе. Так, обзор заработных плат, к примеру в Минске, Витебске или Гродно будет
          отличаться, также, как и рынок вакансий и трудовых ресурсов.</p>
        <p>Рынок труда в Беларуси в целом отличается высокой интенсивностью движения трудовых ресурсов и низким уровнем
          зарплат.Но главная особенность рынка – противоречивая тенденция снижения занятости и роста числа вакантных
          рабочих мест. Такая ситуация, по мнению наших специалистов, сохранится еще 3-5 лет. Наибольший дефицит кадров
          испытывают финансово-бухгалтерская и сфера логистики. Традиционно остро ощущается нехватка рабочих
          специальностей: поваров, плотников, прядильщиков.</p>
      </div>
    </div>
  </div>
  <div class="internal-analysis">
    <div class="container">
      <div class="internal-analysis__title">
        <h2>Внутренний анализ</h2>
        <div class="underline-block"></div>
      </div>
      <div class="internal-analysis__item item-1">
        <p>Во время HR-анализа данных мы изучаем все процессы, происходящие в сегменте трудовых отношений предприятия,
          проводим мониторинг заработных плат сотрудников. В результате Вы будете понимать, насколько грамотно
          организовано управление персоналом, а именно:</p>
        <ul>
          <li>
            <p><Мотивация;</p>
          </li>
          <li>
            <p>Эффективность;</p>
          </li>
          <li>
            <p>Польза, которую сотрудник приносит компании;</p>
          </li>
          <li>
            <p>Необходимость дополнительных затрат или отсутствие таковой.</p>
          </li>
        </ul>
      </div>
      <div class="internal-analysis__item item-2">
        <p>От HR-процессов зависит потенциал работодателя по привлечению и удержанию на рабочем месте кадров с
          необходимыми компетенциями. Не менее важен и социальный климат в коллективе, организация взаимодействия
          производственных участков и управленческих служб и межличностные взаимоотношения.</p>
      </div>
    </div>
  </div>
  <div class="what-can-be-done-right-now">
    <div class="container">
      <div class="what-can-be-done-right-now__title">
        <h2>Что можно решить прямо сейчас</h2>
        <div class="underline-block"></div>
      </div>
      <div class="what-can-be-done-right-now__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-3.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-3.jpg" type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-analytics/hr-analytics-3.jpg" alt="Блокнот и ручка">
        </picture>
      </div>
      <div class="what-can-be-done-right-now__item">
        <p>Стоит посмотреть на себя со стороны и ответить, только честно, на следующие вопросы:</p>
        <ol>
          <li>
            <p>Присутствует ли на предприятии текучесть кадров? Каков ее процент – 10%, 15%, а может быть, 30%?</p>
          </li>
          <li>
            <p>Каков коэффициент увольнений? Приемов?</p>
          </li>
          <li>
            <p>Сколько незанятых мест в компании и как давно они пустуют?</p>
          </li>
          <li>
            <p>Каково соотношение постоянных, временных и привлеченных работников?</p>
          </li>
          <li>
            <p>Устраивает ли Вас профессиональное, возрастное, квалификационное разнообразие кадров предприятия?</p>
          </li>
          <li>
            <p>Довольны ли сотрудники своим уровнем доходов и как часто просят прибавку к жалованию?</p>
          </li>
          <li>
            <p>Не дает ли сбоев вертикальная/горизонтальная коммуникация между сотрудниками компании?</p>
          </li>
          <li>
            <p>Бывают ли на работе авралы и внеплановые выходы, оплачиваемые сверхурочные?</p>
          </li>
        </ol>
        <p>Если хотя бы в трех случаях из восьми ответ Вас не удовлетворил, вызвал сомнения или затруднение, это
          тревожный звонок о том, что «организм» предприятия испытывает стресс. А если болевых точек больше, ему
          требуется «скорая помощь» специалистов.</p>
      </div>
    </div>
  </div>
  <div class="want-to-know-more">
    <div class="container">
      <div class="want-to-know-more__title">
        <h2>Хотите узнать больше?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="want-to-know-more__item">
        <p>Если Вы поняли, что хотите:</p>
        <p>Правильно обучать и развивать персонал
          компании;</p>
        <p>Платить ему жалование с учетом ситуации на рынке труда;</p>
        <p>Адекватно оценивать работника
          еще до приема в должность;</p>
        <p>Иметь в арсенале только эффективных сотрудников и избавиться от балласта, — мы проконсультируем вопрос,
          найдем решение и поможем его внедрить.</p>
        <p>От Вас – описание проблемы, от нас – несколько моделей с указанием плюсов и рисков каждой. Даже то, что нужно
          было сделать вчера, еще не поздно исправить сегодня. Укажите удобный способ связи с Вами. Звоните или оставьте
          свой номер телефона, специалисты кадрового агентства «КАДР» с Вами свяжутся в кратчайшие сроки и начнут работу
          немедленно. Вы можете заказать услугу <strong>HR аналитика</strong> или задать свой вопрос онлайн через форму
          обратной связи. Мы работаем для того, чтобы лучше работали Вы!</p>
        <p>От Вас – описание проблемы, от нас – несколько моделей с указанием плюсов и рисков каждой. Даже то, что нужно
          было сделать вчера, еще не поздно исправить сегодня. Укажите удобный способ связи с Вами.</p>
        <p>Звоните или оставьте свой номер телефона, специалисты кадрового агентства «КАДР» с Вами свяжутся в кратчайшие
          сроки и начнут работу немедленно. Вы можете заказать услугу <strong>HR аналитика</strong> или задать свой
          вопрос онлайн через форму обратной связи. Мы работаем для того, чтобы лучше работали Вы!</p>
      </div>
    </div>
  </div>
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
    "name": "HR-аналитика",
    "image": "https://hrbel.by/wp-content/themes/kadr2/image/hr-analytics/hr-analytics-title.webp",
    "description": "Аналитика HR-процессов для эффективного управления ресурсами и развития компании",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/kadrovyj-konsalting/hr-analitika/",
        "priceCurrency": "BYN",
        "price": "1500",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }

</script>
<?php get_footer(); ?>