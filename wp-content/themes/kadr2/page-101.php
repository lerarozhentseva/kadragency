<?php
/*
Template Name: Поиск и подбор персонала
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="main">
  <div class="search-and-selection page-header">
    <div class="search-and-selection__container container">
      <div class="search-and-selection__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Поиск и подбор персонала</h1>
        <p>Оптимизируем ваш бизнес с нашими услугами по поиску и подбору персонала в Минске. Эффективный поиск
          работников и поиск кандидатов — наш профиль. Мы специализируемся на подборе персонала, создавая кадровые
          решения, соответствующие вашим потребностям. Надежные методы поиска сотрудников на работу обеспечивают быстрое
          и качественное заполнение вакансий. Доверьте нам поиск кадров, чтобы ваш бизнес процветал с лучшими
          специалистами в вашей команде!</p>
        <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
      </div>
      <div class="search-and-selection__item page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/search-and-selection/search-and-selection-title.webp"
          alt="Собеседование в офисе">
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#selection-personnel"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="selection-personnel" class="selection-personnel">
    <div class="container">
      <div class="selection-personnel__title">
        <h2>Услуга по подбору персонала</h2>
        <div class="underline-block">
        </div>
      </div>
      <div class="selection-personnel__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Грамотный подбор персонала — фундаментальная задача кадровой политики организации. Профессионалы рекрутинга
          помогают находить и привлекать грамотных специалистов, талантливых топ-менеджеров, приносящих бизнесу высокие
          прибыли.</p>
      </div>
      <div class="selection-personnel__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Наше кадровое агентство оказывает, в том числе, и <strong>рекрутинговые услуги</strong>, подбирая для
          компаний заказчиков кадры, в том числе на руководящие
          должности по необходимым специальностям.</p>
      </div>
    </div>
  </div>

  <div class="professional-selection">
    <div class="container">
      <div class="professional-selection__title">
        <h2>Доверьте подбор кадров профессионалам</h2>
      </div>
      <div class="underline-block"></div>

      <div class="professional-selection__items">
        <div class="professional-selection__item">
          <img src="<?= get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
          <p><strong>Поиск сотрудников</strong> – востребованная услуга среди клиентов кадровых агентств. Ситуация на
            рынке труда такова, что самостоятельно подобрать необходимые кадры в штат, особенно если речь идет о
            руководителях или представителях редких профессий, компаниям сложно.</p>
        </div>
        <div class="professional-selection__item">
          <img src="<?= get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
          <p>Организации предпочитают концентрироваться на собственной профильной деятельности, передавая часть
            организационных функций на аутсорсинг.
            Работа с кадрами, включая подбор персонала, рекрутинг, не стала исключением. <strong>Профессиональный подбор
              кадров</strong>
            осуществляется нашим специализированным HR-агентством, владеющим полным набором профильных экспертиза для
            привлечения нужных заказчику кадров.</p>
        </div>
        <div class="professional-selection__item">
          <img src="<?= get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
          <p>Мы успешно ищем и отбираем для своих клиентов профессиональные кадры в самых разнообразных отраслях:
            телекоммуникации, IT, строительство и инжиниринг,
            промышленное производство, АПК и не только.
            Мы предлагаем клиентам:</p>
        </div>
      </div>
      <ul class="professional-selection__list">
        <li class="professional-selection__list-item">
          <img src="<?= get_template_directory_uri(); ?>/image/icons/professional-selection-1.svg"
            alt="Графический элемент Земли">
          <p>Поиск сотрудников</p>
        </li>
        <li class="professional-selection__list-item">
          <img src="<?= get_template_directory_uri(); ?>/image/icons/professional-selection-2.svg"
            alt="Иконка джойстик">
          <p>Подбор руководителей</p>
        </li>
        <li class="professional-selection__list-item">
          <img src="<?= get_template_directory_uri(); ?>/image/icons/professional-selection-3.svg"
            alt="Графический элемент без фона">
          <p>Оказание кадровых услуг любого типа</p>
        </li>
        <li class="professional-selection__list-item">
          <img src="<?= get_template_directory_uri(); ?>/image/icons/professional-selection-4.svg"
            alt="Графический элемент смайлик">
          <p>Адаптацию организации к работе в удаленном режиме</p>
        </li>
        <li class="professional-selection__list-item">
          <img src="<?= get_template_directory_uri(); ?>/image/icons/professional-selection-5.svg" alt="Иконка аптечки">
          <p>Оптимизацию штатного персонала</p>
        </li>
      </ul>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
    <div class="container-new">
      <div class="priceNew-wrapper pt-150 pb-150">
        <h2 class="priceNew__title title-line-new">
          <span>Стоимость подбора персонала</span>
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
                      Стоимость работ (за 1 сотрудника) от, BYN
                    </p>
                    <p class="priceNew-item-table-head__name">
                      Примечание
                    </p>
                  </div>
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Подбор руководителей высшего звена/топ менеджер
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          до 3 сотрудников
                          <br><br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          2700
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          до 5 сотрудников
                          <br><br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          2500
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Каждый последующий час -150 р, работу проводит психолог/коуч
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Подбор руководителей среднего звена
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          до 3 сотрудников
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          2200
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          до 5 сотрудников
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          1900
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводит ведущий специалист по подбору персонала
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Подбор специалистов среднего звена
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          до 3 сотрудников
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          1600
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          до 5 сотрудников
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          1300
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводят рекрутеры. Ответственный – ведущий специалист по подбору персонала
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Подбор рабочего/линейного персонала
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 5 сотрудников
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          950
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 7 сотрудников
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          900
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 10 сотрудников
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          850
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 30 сотрудников
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          800
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 50 сотрудников
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          750
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          свыше 50 сотрудников
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          700
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводят рекрутеры. Ответственный – ведущий специалист по подбору персонала
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Хедхантинг (индивидуальный подбор определённого специалиста/сотрудника по запросу компании)
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          Руководитель высшего звена/топ менеджер
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          4000
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          Руководитель среднего звена
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          3400
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводят: HR, ведущий специалист по подбору персонала.
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

  <section class="adv-prof-rec pb-150">
    <div class="container-new">
      <div class="adv-prof-rec__container">
        <div class="adv-prof-rec__title block__title">
          <h2>Преимущества профессионального рекрутинга</h2>
          <div class="underline-block block"></div>
        </div>
        <div class="adv-prof-rec__content">
          <div class="adv-prof-rec__text">
            <p>Может показаться, что нет ничего сложного в том, чтобы самостоятельно искать и отбирать кандидатов для
              приема на работу. На деле компании, особенно небольшие и средние фирмы, сталкиваются со следующими
              сложностями:</p>
            <button class="btn btn-position-aware dark popmake-29" href="#">
              КОНСУЛЬТАЦИЯ<span class="position-aware"></span>
            </button>
          </div>
          <ul class="adv-prof-rec__list">
            <li>
              <p>Поиск сотрудников.</p>
            </li>
            <li>
              <p>Подбор руководителей.</p>
            </li>
            <li>
              <p>Оказание кадровых услуг любого типа.</p>
            </li>
            <li>
              <p>Адаптацию организации к работе в удаленном режиме.</p>
            </li>
            <li>
              <p>Оптимизацию штатного персонала, чтобы компания клиента достигала более высоких результатов с меньшими
                затратами.</p>
            </li>
          </ul>
        </div>
        <div class="adv-prof-rec__blocks">
          <div class="adv-prof-rec__block">
            <div class="adv-prof-rec__block-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="Иконка звезды ярко-оранжевая">
            </div>
            <div class="adv-prof-rec__block-txt">
              Сосредоточьте работу компании на ее профильной деятельности, а мы подберем нужные кадры, чтобы усилить
              Вашу команду классными специалистами.
            </div>
          </div>
          <div class="adv-prof-rec__block">
            <div class="adv-prof-rec__block-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="Иконка звезды ярко-оранжевая">
            </div>
            <div class="adv-prof-rec__block-txt">
              Если же компания прибегает к профессиональным услугам рекрутинга, она выигрывает за счёт:
            </div>
          </div>
        </div>
        <div class="adv-prof-rec__items">
          <div class="adv-prof-rec__item">
            <div class="adv-prof-rec__item-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/advantages-of-professional-recruiting-1.svg"
                alt="">
            </div>
            <div class="adv-prof-rec__item-txt">
              <b>Огромная база</b>
              <p>Возможности найти претендентов на вакансии, данные о которых не размещены на основных сайтах по поиску
                работы.</p>
            </div>
          </div>
          <div class="adv-prof-rec__item">
            <div class="adv-prof-rec__item-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/advantages-of-professional-recruiting-2.svg"
                alt="">
            </div>
            <div class="adv-prof-rec__item-txt">
              <b>Конкретность</b>
              <p>Четко оговоренной в самом начале проекта стоимости подбора кадров, которая остается неизменной.</p>
            </div>
          </div>
          <div class="adv-prof-rec__item">
            <div class="adv-prof-rec__item-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/advantages-of-professional-recruiting-3.svg"
                alt="">
            </div>
            <div class="adv-prof-rec__item-txt">
              <b>Гарантии</b>
              <p>Гарантии бесплатной замены работника, подобранного агентством, если он не справился с испытательным
                сроком.</p>
            </div>
          </div>
          <div class="adv-prof-rec__item">
            <div class="adv-prof-rec__item-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/advantages-of-professional-recruiting-4.svg"
                alt="">
            </div>
            <div class="adv-prof-rec__item-txt">
              <b>Безопасность</b>
              <p>Возможности защитить себя от переманивания ценных кадров, сохранить ключевых работников в штате.</p>
            </div>
          </div>
          <div class="adv-prof-rec__item">
            <div class="adv-prof-rec__item-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/advantages-of-professional-recruiting-5.svg"
                alt="">
            </div>
            <div class="adv-prof-rec__item-txt">
              <b>Экспертность</b>
              <p>Гарантии безопасного найма. Поручая подбор персонала специализированному агентству, Вы можете быть
                уверены,
                что все выбранные кандидаты полностью адекватны и обладают необходимой квалификацией.</p>
            </div>
          </div>
          <div class="adv-prof-rec__item">
            <div class="adv-prof-rec__item-icon">
              <img src="<?= get_template_directory_uri(); ?>/image/icons/advantages-of-professional-recruiting-6.svg"
                alt="">
            </div>
            <div class="adv-prof-rec__item-txt">
              <b>Объективность</b>
              <p>Объективной оценки агентством зарплаты нужных работников.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="find pb-110">
    <?php get_template_part('template-parts/find-block'); ?>
  </section>
  <div class="selection-stages">
    <div class="container">
      <div class="selection-stages__title">
        <h2>Этапы работы по поиску и подбору персонала</h2>
      </div>
      <div class="underline-block"></div>
      <p>Подбор персонала — сложный процесс, который мы проводим в несколько этапов:</p>

      <div class="selection-stages__item item-1">
        <div class="item__image">
          <span>01</span>
          <img src="<?= get_template_directory_uri(); ?>/image/search-and-selection/search-and-selection-1.webp"
            alt="Светлый кабинет">
        </div>
        <div class="item__text">
          <h5>Подготовка</h5>
          <p>На первом этапе мы получаем от клиента заявку на подбор нужного специалиста. В ходе обсуждения деталей мы
            выясняем:</p>
          <ul>
            <li>
              <p>какие задачи должен решать специалист;</p>
            </li>
            <li>
              <p>каков его функционал;</p>
            </li>
            <li>
              <p>каковы условия найма;</p>
            </li>
            <li>
              <p>в какой срок нужно найти работника.</p>
            </li>
          </ul>
          <p>Выяснив всю необходимую информацию, мы структурируем требования к соискателям и условия найма,
            согласовываем заявку и подписываем договор. В договоре фиксируется, сроки, гарантии и порядок оплаты работы
            агентства. Мы назначаем менеджера, ответственного за работу с проектом. </p>
        </div>
      </div>
      <div class="selection-stages__item item-2">
        <div class="item__image">
          <span>02</span>
          <img src="<?= get_template_directory_uri(); ?>/image/search-and-selection/search-and-selection-2.webp"
            alt="Разговор в офисе">
        </div>
        <div class="item__text">
          <h5>Поиск претендентов на должность</h5>
          <p>На этапе поиска мы:</p>
          <ul>
            <li>
              <p>формируем профиль кандидата и намечаем карту поиска;</p>
            </li>
            <li>
              <p>проверяем собственную базу резюме от кандидатов;</p>
            </li>
            <li>
              <p>ищем возможных кандидатов в фирмах той же отрасли, компаниях-конкурентах;</p>
            </li>
            <li>
              <p>проводим масштабный поиск на онлайн-ресурсах (сайты профессиональных сообществ, соцсети,
                специализированные сайты для поиска работы);</p>
            </li>
            <li>
              <p>готовим промежуточный список соискателей.</p>
            </li>
          </ul>
        </div>

      </div>
      <div class="selection-stages__item item-3">
        <div class="item__image">
          <span>03</span>
          <img src="<?= get_template_directory_uri(); ?>/image/search-and-selection/search-and-selection-3.webp"
            alt="Обсуждение задачи за столом">
        </div>
        <div class="item__text">
          <h5>Оценка и отбор претендентов</h5>
          <p>Чтобы оценить компетенции и личные качества соискателей, на следующем этапе мы:</p>
          <ul>
            <li>
              <p>Проводим интервью с кандидатами, чтобы дать первичную оценку, проверить на соответствие критериям
                отбора, выяснить мотивацию.</p>
            </li>
            <li>
              <p>Анализируем и проверяем информацию, полученную от кандидата.</p>
            </li>
            <li>
              <p>Проверка рекомендаций — собираем информацию о претендентах из достоверных источников, проверяем деловую
                репутацию.</p>
            </li>
            <li>
              <p>Составляем итоговый список претендентов, подходящих под требования заявки.</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="selection-stages__item item-4">
        <div class="item__image">
          <span>04</span>
          <img src="<?= get_template_directory_uri(); ?>/image/search-and-selection/search-and-selection-4.webp"
            alt="Удобные компьютерныет кресла">
        </div>
        <div class="item__text">
          <h5>Презентация претендентов компании-заказчику</h5>
          <p>Следующим шагом мы передаем заказчику информацию о подобранных кандидатах, которая включает:</p>
          <ul>
            <li>
              <p>анкету;</p>
            </li>
            <li>
              <p>информацию о предыдущих местах работы и опыте;</p>
            </li>
            <li>
              <p>сведения о полученном образовании (как основном, так и дополнительном);</p>
            </li>
            <li>
              <p>данные о карьере, профессиональных достижениях;</p>
            </li>
            <li>
              <p>желаемый уровень компенсации;</p>
            </li>
            <li>
              <p>список личностных качеств;</p>
            </li>
            <li>
              <p>описание мотивации и ожидаемый уровень заработной платы.</p>
            </li>
          </ul>
          <p>Также мы организуем и сопровождаем переговоры заказчика с претендентами на вакансию. В итоге заказчик
            определяет финального претендента.</p>
        </div>

      </div>
      <div class="selection-stages__item item-5">
        <div class="item__image">
          <span>05</span>
          <img src="<?= get_template_directory_uri(); ?>/image/search-and-selection/search-and-selection-5.webp"
            alt="Двое мужчин идут по улице">
        </div>
        <div class="item__text">
          <h5>Сопровождение приема на работу</h5>
          <p>На завершающем этапе мы:</p>
          <ul>
            <li>
              <p>сопровождаем переговоры по условиям приема на работу;</p>
            </li>
            <li>
              <p>консультируем сотрудника по вопросам увольнения с предыдущего места работы, если такая необходимость
                есть;</p>
            </li>
            <li>
              <p>помогаем новому работнику адаптироваться в компании в период испытательного срока;</p>
            </li>
            <li>
              <p>подводим с заказчиком итоги сотрудничества, подписываем акты оказанных услуг, клиент оплачивает
                агентское вознаграждение.</p>
            </li>
          </ul>
          <p>Мы гарантируем высокий профессионализм при проведении поиска сотрудников. Компания "Кадр" активно
            использует передовые методики и инструменты, чтобы обеспечить наших клиентов квалифицированными
            специалистами. Наши услуги по подбору персонала в Беларуси призваны удовлетворить потребности разнообразных
            бизнес-секторов, обеспечивая успешное функционирование компаний через формирование эффективных команд
            профессионалов.</p>
        </div>
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
    "name": "Поиск и подбор персонала",
    "image": "https://hrbel.by/wp-content/themes/kadr2/image/search-and-selection/search-and-selection-title.webp",
    "description": "Предоставляем услуги по поиску сотрудников в Минске на работу",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/poisk-i-podbor-personala/",
        "priceCurrency": "BYN",
        "price": "700",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }
</script>
<?php get_footer(); ?>