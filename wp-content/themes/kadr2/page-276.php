<?php
/*
Template Name: Кадровый консалтинг
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="hr-consulting-title page-header">
    <div class="container">
      <div class="hr-consulting-title__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Кадровый консалтинг персонала</h1>
        <p>Кадровый консалтинг — комплекс мер, призванных решить проблемы кадровой работы организации.
          В результате продуманной консалтинговой работы в HR-сфере ощутимо растет результативность кадровой политики
          любой компании.</p>
        <p>В нашем агентстве Вы можете заказать комплексные кадровые консультации либо консалтинговые услуги по
          конкретным вопросам в сфере HR. Наши опытные эксперты помогут вывести кадровую политику компании заказчика на
          новый качественный уровень и сделать бизнес прибыльнее.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="hr-consulting-title__item page-header__item item-2">
        <img src="/wp-content/uploads/2024/03/hr-consulting-title.webp" alt="Девушки обсуждают проект">
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#what-hr-include"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="what-hr-include" class="what-hr-include">
    <div class="container">
      <div class="title-part-mobile__item">
        <p><strong>Кадровый консалтинг</strong> — комплекс мер, призванных решить проблемы кадровой работы организации.
          В результате продуманной консалтинговой работы в HR-сфере ощутимо растет результативность кадровой политики
          любой компании.</p>
      </div>
      <div class="title-part-mobile__item">
        <p>В нашем агентстве Вы можете заказать комплексные кадровые консультации либо консалтинговые услуги по
          конкретным вопросам в сфере HR. Наши опытные эксперты помогут вывести кадровую политику компании заказчика на
          новый качественный уровень и сделать бизнес прибыльнее.</p>
      </div>
      <div class="what-hr-include__title">
        <h2>Что включает управленческий и HR-консалтинг</h2>
        <div class="underline-block"></div>
      </div>
      <div class="what-hr-include__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Развитие любой организации невозможно без непрерывного совершенствования управленческих методик, квалификации
          кадров, бизнес-процессов, от которых напрямую зависит доходность бизнеса. Совместно с заказчиками мы готовим и
          внедряем в ежедневную работу компаний инструменты и методики для диагностики и совершенствования процессов
          управления кадрами. В рамках консультаций по кадровым вопросам мы помогаем фирмам более
          эффективно преобразовать организационно-штатную структуру. </p>
      </div>
      <div class="what-hr-include__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Сначала мы проводим мониторинг текущей работы компании, выявляем слабые места в кадровой политике фирмы,
          тщательно анализируем результаты исследований и подбираем прогрессивные методы устранения найденных проблем.
          Мы рекомендуем только проверенные на практике решения, которые уже доказали свою эффективность в современном
          бизнесе.</p>
      </div>
      <div class="what-hr-include__item item-3">
        <div class="item__text">
          <p>В понятие кадровый консалтинг входят также следующие услуги:</p>
          <ul>
            <li>Проверки работы персонала в формате «Тайный покупатель»;</li>
            <li>Аудит заработных плат сотрудников;</li>
            <li>Аудит кадров;
            </li>
            <li><a class="text-link"
                href="<?= get_site_url(); ?>/kadrovyj-konsalting/ocenka-i-testirovanie-personala/">Тестирование и
                аттестация (оценка) персонала</a>;</li>
            <li>Вывод компании на рынки конкретных отраслей.</li>
          </ul>
        </div>
        <div class="item__image">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-consulting/hr-consulting-1.webp"
            alt="Коллеги обсуждают работу">
        </div>
      </div>
      <div class="what-hr-include__item item-4">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Коллектив любой организации представляет собой сотрудников, объединенных общими задачами и целями. От того,
          насколько сотрудники мотивированы и
          квалифицированы в своей области напрямую зависит общий успех работы компании. Это понимает любой руководитель
          от начальника небольшого отдела до генерального директора. Если в процессе управления персоналом возникают
          проблемы, отлаженный механизм дает сбой, это немедленно отражается на результатах работы и прибыли компании.
        </p>
      </div>
      <div class="what-hr-include__item item-5">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Для устранения и предотвращения проблем в HR-сфере руководство организаций часто приглашает специалистов из
			кадрового агентства, консалтинг для которого является одной из услуг. Консалтинг в кадровой
          сфере предназначен для повышения эффективности HR-политики организаций за счет внедрения продвинутых
          современных методик управления персоналом.
        </p>
      </div>
    </div>
  </div>
  <div class="when-hr-need">
    <div class="container">
      <h2>Когда компании нужен кадровый консалтинг</h2>
      <div class="when-hr-need__image">
        <img src="<?= get_template_directory_uri(); ?>/image/hr-consulting/hr-consulting-2.webp"
          alt="Аккуратное рабочее место">
      </div>
      <div class="underline-block"></div>
      <p>Мы рекомендуем заказать услуги профессиональные консалтинговые HR-услуги в следующих случаях:</p>
      <ol>
        <li>
          <p>Вы стремитесь сформировать сплоченную команду специалистов, способную успешно работать сообща на достижение
            целей компании.</p>
        </li>
        <li>
          <p>Организация нуждается в срочном повышении эффективности управления персоналом.</p>
        </li>
        <li>
          <p>Вы сомневаетесь в том, насколько продуманно и верно реализовано разделение рабочих функций между отдельными
            сотрудниками.</p>
        </li>
        <li>
          <p>Вы желаете убедиться в продуктивности корпоративной кадровой службы.</p>
        </li>
        <li>
          <p>Есть необходимость проверить соответствие между требованиями законодательства и кадровой документации
            компании.</p>
        </li>
      </ol>
      <p>Это далеко не полный список случаев, когда бизнесу может понадобиться кадровый консалтинг. При возникновении
        любых сомнений относительно эффективности кадровой работы компании незамедлительно обращайтесь к нам.</p>
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
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Доработка и корректировка имеющихся внутренних документов
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 10 сотрудников/до 3 отделов в компании
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          1100
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 30 сотрудников/до 5 отделов в компании
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          1400
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          до 50 сотрудников/до 5 отделов
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          1900
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          свыше 50 сотрудников/свыше 5 отделов
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          2500
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводят: ведущий юрист, помощник юриста, HR
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Индивидуальные коучинговые и психологические консультации
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          Для руководителей/топ менеджеров
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          300
                        </p>
                      </div>
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          Для сотрудников компании
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          200
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          1,5 часа сессии для 1 сотрудника, работу проводит психолог/коуч
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="priceNew-item-table-body">
                    <p class="priceNew-item-table-body__title">
                      Дополнительные опции
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          Услуги медиатора
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          550
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          1 час работы, работу проводит HR и медиатор
                        </p>
                      </div>
                    </div>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          Разработка вакансий компании по подбору персонала
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          200
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводят: HR, ведущий специалист по подбору персонала
                        </p>
                      </div>
                    </div>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          Проведение тренингов/вебинаров/обучения сотрудников внутри компании
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ, BYN</span>
                          Цена по запросу
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводит психолог/коуча
                        </p>
                      </div>
                    </div>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          Тимбилдинг
                          <br>
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ, BYN</span>
                          Цена по запросу
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          Работу проводит психолог/коуч
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
  <div class="personnel-audit">
    <div class="container container-padding">
      <div class="personnel-audit__title">
        <h2>Кадровый аудит</h2>
        <div class="underline-block"></div>
      </div>
      <div class="personnel-audit__item item-1">
        <div class="item__text">
          <p>Если Вы как руководитель ощущаете необходимость отладить и усовершенствовать процедуры и принципы
            управления персоналом с помощью привлеченных экспертов, тогда обращайтесь к нам. Мы проведем всесторонний
            аудит текущего положения Вашей компании, а затем предложим и поможем внедрить наилучшие варианты решения
            выявленных проблем. Кадровые консультации всегда начинаются с диагностики и анализа
            текущей ситуации в кадровой политике (кадровый аудит).</p>
        </div>
        <div class="item__image">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-consulting/hr-consulting-3.webp"
            alt="Офис в голубых и зеленых тонах">
        </div>
      </div>
      <div class="personnel-audit__item item-2">
        <div class="item__text">
          <p>Кадровый аудит, проводимый нашим кадровым агентством, включает в себя:</p>
          <ul>
            <li>Подробный разбор действующего механизма работы
              с персоналом и сопутствующей документации.</li>
            <li>Оценка профессиональных компетенций персонала,
              их соответствия целям и общей стратегии работы компании.</li>
            <li>Фиксация выявленных в процессе аудита проблем и недочетов.</li>
            <li>Подготовка экспертных рекомендаций, советов по решению выявленных проблем, устранению недостатков.</li>
            <li>Внедрение предложенных рекомендаций
              для оптимизации работы с персоналом.</li>
            <li>Создание подробного регламента для новых работников и введение в должности новых единиц штата при
              необходимости.</li>
          </ul>
        </div>
      </div>
      <div class="personnel-audit__item item-3">
        <div class="item__image">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-consulting/hr-consulting-4.webp"
            alt="Закрытый ноутбук Apple">
        </div>
        <div class="item__text">
          <p>Часто руководство фирмы-заказчика не может самостоятельно определить, где случается сбой в работе кадрового
            механизма. Кадровый аудит решает эту проблему. Методика анализа кадровой политики компании может
            варьироваться между частичным и комплексным (глубоким). В результате проведенного анализа мы совместно с
            представителями клиента готовим план дальнейших действий для реформирования кадровой политики.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="support-new-employees">
    <div class="container">
      <h2>Сопровождение новых сотрудников</h2>
      <div class="underline-block"></div>
      <div class="support-new-employees__item item-1">
        <div class="item__text">
          <p>Успешная адаптация новых сотрудников — залог того,
            что новый специалист без проблем вольется в команду и усилит ее.
            Разработка регламента адаптации новых работников в коллективе
            и сопровождение новичков — важная часть <strong>кадрового консалтинга</strong>, которая делится на несколько
            составляющих:</p>
          <ol>
            <li>
              <p>Первичная консультация с новым сотрудником.</p>
            </li>
            <li>
              <p>Оценка уровня адаптации недавно
                принятого работника.</p>
            </li>
            <li>
              <p>Подготовка для HR-отдела подробной инструкции по внедрению в коллектив новых работников.</p>
            </li>
            <li>
              <p>Подготовка документации и регламентов по адаптации нового персонала.</p>
            </li>
            <li>
              <p>Проработка механизма мотивации
                  работников.</p>
            </li>
            <li>
              <p>Подготовка стандартов обслуживания клиентов.</p>
            </li>
            <li>
              <p>Разноплановые исследования персонала (микроклимата в коллективе, выявление скрытых лидеров, уровня
                мотивации сотрудников).</p>
            </li>
            </ul>
        </div>
        <div class="item__image">
          <img src="<?= get_template_directory_uri(); ?>/image/hr-consulting/hr-consulting-5.webp"
            alt="Офисная консультация">
        </div>
      </div>
      <div class="support-new-employees__item item-2">
        <p>Адаптационные мероприятия, проводимые нашим агентством, позволяют решить многие распространенные проблемы
          кадровой политики или предотвратить их:</p>
        <div class="item__block block-1">
          <div class="block__image">
            <div class="border">
              <svg width="37" height="33" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5.93187 20.9043C5.93187 14.7972 11.4521 9.84638 18.2615 9.84638C25.071 9.84638 30.5912 14.7972 30.5912 20.9043C30.5912 27.0115 25.071 31.9623 18.2615 31.9623C11.4521 31.9623 5.93187 27.0115 5.93187 20.9043Z"
                  stroke="#261104" />
                <path
                  d="M1 12.058C1 5.95082 6.52018 1 13.3297 1C20.1392 1 25.6593 5.95082 25.6593 12.058C25.6593 18.1651 20.1392 23.1159 13.3297 23.1159C6.52018 23.1159 1 18.1651 1 12.058Z"
                  stroke="#261104" />
                <path
                  d="M10.8637 12.058C10.8637 5.95082 16.3839 1 23.1934 1C30.0029 1 35.5231 5.95082 35.5231 12.058C35.5231 18.1651 30.0029 23.1159 23.1934 23.1159C16.3839 23.1159 10.8637 18.1651 10.8637 12.058Z"
                  stroke="#261104" />
              </svg>
            </div>
          </div>
          <div class="block__text">
            <h5>Экономия времени</h5>
            <p>Снизить текучесть кадров, что позволяет бизнесу экономить время и средства на поиск и обучение новых
              сотрудников.</p>
          </div>
        </div>
        <div class="item__block block-2">
          <div class="block__image">
            <div class="border">
              <svg width="37" height="33" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5.93187 20.9043C5.93187 14.7972 11.4521 9.84638 18.2615 9.84638C25.071 9.84638 30.5912 14.7972 30.5912 20.9043C30.5912 27.0115 25.071 31.9623 18.2615 31.9623C11.4521 31.9623 5.93187 27.0115 5.93187 20.9043Z"
                  stroke="#261104" />
                <path
                  d="M1 12.058C1 5.95082 6.52018 1 13.3297 1C20.1392 1 25.6593 5.95082 25.6593 12.058C25.6593 18.1651 20.1392 23.1159 13.3297 23.1159C6.52018 23.1159 1 18.1651 1 12.058Z"
                  stroke="#261104" />
                <path
                  d="M10.8637 12.058C10.8637 5.95082 16.3839 1 23.1934 1C30.0029 1 35.5231 5.95082 35.5231 12.058C35.5231 18.1651 30.0029 23.1159 23.1934 23.1159C16.3839 23.1159 10.8637 18.1651 10.8637 12.058Z"
                  stroke="#261104" />
              </svg>
            </div>
          </div>
          <div class="block__text">
            <h5>Автоматизация</h5>
            <p>Автоматизировать часть бизнес-процедур.</p>
          </div>
        </div>
        <div class="item__block block-3">
          <div class="block__image">
            <div class="border">
              <svg width="37" height="33" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5.93187 20.9043C5.93187 14.7972 11.4521 9.84638 18.2615 9.84638C25.071 9.84638 30.5912 14.7972 30.5912 20.9043C30.5912 27.0115 25.071 31.9623 18.2615 31.9623C11.4521 31.9623 5.93187 27.0115 5.93187 20.9043Z"
                  stroke="#261104" />
                <path
                  d="M1 12.058C1 5.95082 6.52018 1 13.3297 1C20.1392 1 25.6593 5.95082 25.6593 12.058C25.6593 18.1651 20.1392 23.1159 13.3297 23.1159C6.52018 23.1159 1 18.1651 1 12.058Z"
                  stroke="#261104" />
                <path
                  d="M10.8637 12.058C10.8637 5.95082 16.3839 1 23.1934 1C30.0029 1 35.5231 5.95082 35.5231 12.058C35.5231 18.1651 30.0029 23.1159 23.1934 23.1159C16.3839 23.1159 10.8637 18.1651 10.8637 12.058Z"
                  stroke="#261104" />
              </svg>
            </div>
          </div>
          <div class="block__text">
            <h5>Прозрачность</h5>
            <p>Повысить прозрачность механизмов управления кадрами.</p>
          </div>
        </div>
        <div class="item__block block-4">
          <div class="block__image">
            <div class="border">
              <svg width="37" height="33" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5.93187 20.9043C5.93187 14.7972 11.4521 9.84638 18.2615 9.84638C25.071 9.84638 30.5912 14.7972 30.5912 20.9043C30.5912 27.0115 25.071 31.9623 18.2615 31.9623C11.4521 31.9623 5.93187 27.0115 5.93187 20.9043Z"
                  stroke="#261104" />
                <path
                  d="M1 12.058C1 5.95082 6.52018 1 13.3297 1C20.1392 1 25.6593 5.95082 25.6593 12.058C25.6593 18.1651 20.1392 23.1159 13.3297 23.1159C6.52018 23.1159 1 18.1651 1 12.058Z"
                  stroke="#261104" />
                <path
                  d="M10.8637 12.058C10.8637 5.95082 16.3839 1 23.1934 1C30.0029 1 35.5231 5.95082 35.5231 12.058C35.5231 18.1651 30.0029 23.1159 23.1934 23.1159C16.3839 23.1159 10.8637 18.1651 10.8637 12.058Z"
                  stroke="#261104" />
              </svg>
            </div>
          </div>
          <div class="block__text">
            <h5>Качество</h5>
            <p>Повысить качество производимой продукции и оказываемых услуг.</p>
          </div>
        </div>
      </div>
      <div class="support-new-employees__item item-3">
        <p>О том, что Вашей компании необходим кадровый консалтинг
          в сфере адаптации новых работников, могут свидетельствовать следующие признаки:</p>
        <div class="item__text text-1">
          <p>Вы стремитесь максимально автоматизировать процесс внедрения в коллектив нового персонала.</p>
        </div>
        <div class="item__text text-2">
          <p>Количество работников в компании постоянно увеличивается.</p>
        </div>
        <div class="item__text text-3">
          <p>Возникла проблема текучки кадров.</p>
        </div>
      </div>
      <div class="support-new-employees__item item-4">
        <p>Профессиональный <strong>кадровый консалтинг</strong> позволяет бизнесу работать эффективно в любых условиях.
          Обращайтесь
          за советом к нам, если не уверены в продуктивности существующей системы работы с кадрами. Мы поможем
          Вам выстроить эффективную и современную кадровую политику, которая позволит компании активно развиваться.
        </p>
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
    "name": "Кадровый консалтинг персонала",
    "image": "https://hrbel.by/wp-content/uploads/2024/03/hr-consulting-title.webp",
    "description": "Занимаемся кадровым консалтингом персонала",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/kadrovyj-konsalting/",
        "priceCurrency": "BYN",
        "price": "200",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }

</script>
<?php get_footer(); ?>