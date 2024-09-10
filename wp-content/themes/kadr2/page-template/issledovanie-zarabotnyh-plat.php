<?php
/*
Template Name: Услуга: Исследование заработных плат
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
        <h1>Исследование заработных плат

        </h1>
        <p>
          Имеем большой опыт в мониторинге оплаты труда.  <br>
          Заказывая исследование зарплат, вы получаете подробный анализ уровня заработных плат в вашей сфере. Вам предоставится подробная сводка данных о доходе специалистов для решения стратегических задач. 
        </p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/hr-benchmarking/main.png" alt="HR-бенчмаркинг рынка и проектов">
        <?php if (get_field('cena')): ?>
          <div class="price_img" style="display: none;">
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
  <section class="dispute-res-scheme custom-block" id="block-1">
    <div class="container">
      <div class="block__title dispute-res-scheme__title">
        <h2>Для чего нужен анализ заработной платы?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">
			<strong>Мониторинг зарплат</strong> - инструмент для обеспечения эффективных выплат, которые способствуют лояльности сотрудников, а также поддержанию продуктивной рабочей среды.
        </p>
        <p class="half-width">
          Исследование оплаты труда выполняет несколько ключевых функций:
        </p>
      </div>
      <ol class="dispute-res-scheme__list" style="margin-bottom: 0;">
        <li>
          <b>Привлечение талантов</b>
          <p>Компании стремятся предложить конкурентоспособные заработные платы, чтобы привлечь лучших специалистов.</p>
        </li>
        <li>
          <b>Равная оплата</b>
          <p>
            Анализ зарплат помогает обеспечить внутреннее равенство, предотвращая разрыв в оплате труда среди сотрудников, выполняющих схожую работу.
          </p>
        </li>
        <li>
          <b> Соответствие рынку</b>
          <p>
            Сравнение с рыночными стандартами позволяет оставаться актуальными на рынке труда.
          </p>
        </li>
        <li>
          <b>Управление бюджетом</b>
          <p>
            Заработная плата часто составляет значительную часть расходов. Понимание распределения этих затрат - первый шаг к оптимизации бюджета. 
          </p>
        </li>
        <li>
          <b>Стратегическое планирование</b>
          <p>
            Исследование зарплат предоставляет данные для принятия решений относительно общей системы вознаграждений сотрудников.
          </p>
        </li>
        <li>
          <b>Готовность к изменениям</b>
          <p>
          Система компенсации постоянно меняется, развивается в зависимости от внутренней/внешней среды, что делает анализ заработной платы важным инструментом для адаптации к этим изменениям.
          </p>
        </li>
      </ol>
    </div>
  </section>
  
  <section class="find pb-150">
        <?php get_template_part('template-parts/find-block'); ?>
  </section>
  <section class="custom-block block-5 dark ">
    <div class="container">
      <div class="block__title">
        <h2>Способы проведения мониторинга оплаты труда </h2>
        <div class="underline-block"></div>
      </div>
      <p class="half-width">
        Анализ зарплат можно провести несколькими способами, в зависимости от целей/ресурсов компании. 
      </p>
      <div class="block__item">
        <ul class="list-bold">
          <li>
            <h3>Краткое</h3>
            <ul class="marker-arrow list-no-wrap">
              <li>
                <p><b>Мониторинг рынка:</b> Сбор данных о зарплатах через вакансии/предложения работодателей.</p>
              </li>
              <li>
                <p><b>Опросы:</b> Интервью сотрудников и анализ соответствия текущих доходов.</p>
              </li>
            </ul>
          </li>
          <li>
            <h3>Полное</h3>
            <ul class="marker-arrow list-no-wrap">
              <li>
                <p><b>Работа с данными:</b> Сбор статистических данных о зарплатах, включая минимальные, максимальные и средние значения.</p>
              </li>
              <li>
                <p><b>Сравнение с рынком:</b> Сопоставление внутренних окладов с рыночными данными.</p>
              </li>
            </ul>
          </li>
          <li>
            <h3>Развернутое</h3>
            <ul class="marker-arrow list-no-wrap">
              <li>
                <p><b>Статистический анализ:</b> Используем методов теории вероятностей и математической статистики для оценки зарплат.</p>
              </li>
              <li>
                <p><b>Комплексный подход:</b> Включение в анализ всех аспектов зп, включая бонусы, льготы, привилегии.</p>
              </li>
              <li>
                <p><b>Процентили:</b> Разделение диапазонов зарплат на процентили для более детального анализа.</p>
              </li>
            </ul>
          </li>
        </ul>
        <div class="block-image">
          <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/issledovanie-zarabotnyh-plat/photo.jpg" alt="">
        </div>
      </div>
      <p class="half-width">
        <br><br>
		  Эти методы помогают компаниям провести <strong>подробный анализ зарплат</strong>, оптимизировать уровень оплаты труда, разработать стратегии привлечения/удержания сотрудников, а также создать справедливую систему вознаграждения.
      </p>
    </div>
  </section>
  <section class="custom-block block-2">
    <div class="container">
      <div class="block__title">
        <h2>Как проводится мониторинг заработных плат?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item" style="margin-bottom: 20px; flex-direction: column;">
        <h3 class="half-width" style="margin-bottom: 20px; width: 100%;">
          <b>Содержание исследования оплаты труда</b>
        </h3>
        <div class="selection-personnel__item item-1" style="width: 100%; margin-bottom: 10px;">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p>Статистические данные исследования зп, включая средние, медианные, минимальные, максимальные значения.</p>
        </div>
        <div class="selection-personnel__item item-1" style="width: 100%; margin-bottom: 10px;">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p>Данные о структуре зарплаты: основной оклад, премии, надбавки, льготы.</p>
        </div>
        <div class="selection-personnel__item item-1" style="width: 100%;">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p>Сравнение по различным должностям, отраслям, регионам.</p>
        </div>
      </div>
      <div class="block__item" style="margin-bottom: 20px;">
        <h3 class="half-width" style="margin-bottom: 20px;">
          <b>Что анализируется?</b>
        </h3>
        <ol>
          <li>
            <p>Оплата внутри фирмы</p>
          </li>
          <li>
            <p>Соответствие рыночным стандартам</p>
          </li>
          <li>
            <p>Общая система поощрений в сравнении с конкурентами</p>
          </li>
          <li>
            <p>Оклады в целевой сфере деятельности</p>
          </li>
          <li>
            <p>Тенденций и стандарты</p>
          </li>
        </ol>
      </div>
      <div class="block__item" style="margin-bottom: 20px; flex-direction: column;">
        <h3 class="half-width" style="margin-bottom: 20px;">
          <b>Источники информации</b>
        </h3>
        <div class="selection-personnel__item item-1" style="width: 100%; margin-bottom: 10px;">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p>Открытые данные: государственная статистика, отчеты агентств, публикации в СМИ.</p>
        </div>
        <div class="selection-personnel__item item-1" style="width: 100%; margin-bottom: 10px;">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p>Внутренняя база фирмы, включая бухгалтерскую отчетность, статистику о зп сотрудников.</p>
        </div>
        <div class="selection-personnel__item item-1" style="width: 100%;">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p>Анкетирование/опросы сотрудников, работодателей.</p>
        </div>
      </div>
      <div class="block__item">
        <h3 class="half-width" style="margin-bottom: 20px;">
          <b>Что в результате?</b>
        </h3>
        <ol>
          <li>
            <p>Понимание текущего положения компании на рынке труда.</p>
          </li>
          <li>
            <p>Эффективный метод для привлечения кадров, их последующего удержания.</p>
          </li>
          <li>
            <p>Знание механизмов выплаты вознаграждений, бонусов;</p>
          </li>
          <li>
            <p>Рекомендации по оптимизации структуры зарплат и системы вознаграждений.</p>
          </li>
          <li>
            <p>Данные, которые помогут создать предложение, способствующее укреплению HR-бренда вашей фирмы.</p>
          </li>
          <li>
            <p>Информация для стратегического планирования/принятия управленческих решений.</p>
          </li>
        </ol>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/promotion'); ?>
  <section class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Этапы анализа зарплат</h2>
        <div class="underline-block"></div>
      </div>
      <p class="half-width">
      Исследование зарплат проводится поэтапно:
      </p>
      <div class="block__item">
        <ol class="list-bold">
          <li>
            <p>Сбор исходных данных</p>
            <p>о выплатах внутри фирмы и на рынке для мониторинга оплаты труда.</p>
          </li>
          <li>
            <p>Анализ динамики</p>
            <p>Изучение изменений зп во времени, сравнение с предыдущими периодами.</p>
          </li>
          <li>
            <p>Планирование</p>
            <p>Определение факторов, влияющих на изменение выплат с детерминированными моделями.</p>
          </li>
          <li>
            <p>Факторный анализ уровня заработной платы</p>
            <p>Наши сотрудники занимаются созданием подробной базы по вашей нише. Они собирают информацию о методах/практиках, используемых компаниями-эталонами.</p>
          </li>
          <li>
            <p>Сравнение с плановыми показателями</p>
            <p>Сопоставление фактических данных с плановыми значениями для выявления отклонений в уровне зарплат в фирме.</p>
          </li>
          <li>
            <p>Разработка рекомендаций</p>
            <p>По результатам исследования зп формируются предложения по оптимизации.</p>
          </li>
        </ol>
      </div>
    </div>
  </section>
  <section class="custom-block block-2">
    <div class="container">
      <div class="block__title">
        <h2>Когда стоит поручить расчет заработной платы в Минске внешнему специалисту?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ul class="marker-hard">
          <li>
            <p>Когда нагрузка на бухгалтерскую службу слишком велика, и нет выгоды в привлечении дополнительного сотрудника исключительно для расчета зарплат.</p>
          </li>
          <li>
            <p>Если компания стремится сократить расходы на персонал, особенно если бухгалтер занимается только расчетом и анализом заработной платы.</p>
          </li>
          <li>
            <p>Когда требуются услуги бухгалтера, который может быстро и точно провести расчеты в соответствии с действующим законом.</p>
          </li>
          <li>
            <p>При необходимости оптимизации бухгалтерских процессов, снижения издержек.</p>
          </li>
        </ul>
        <p class="half-width">
          Мониторинг выплат решает большое количество задач и оптимизирует работу бизнеса.
        </p>
        <br><br>
        <p class="half-width">
          Обратитесь к нашим экспертам за бесплатной консультацией и закажите услугу анализа заработных плат уже сегодня. Мониторинг оплаты труда: распределите бюджет, выявите потенциал для экономии и повысьте эффективность. Сделайте первый шаг к улучшению вашего бизнеса.
        </p>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/contact-us'); ?>
  <?php get_template_part('template-parts/services'); ?>
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/news'); ?>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>