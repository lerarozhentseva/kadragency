<?php
/*
Template Name: Карьерное консультирование
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="career-counseling-title page-header">
    <div class="container">
      <div class="career-counseling-title__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Карьер&shy;ное кон&shy;суль&shy;ти&shy;ро&shy;ва&shy;ние</h1>
        <p>Тем, кто столкнулся с проблемой смены места работы или не хочет больше пребывать в застое и мечтает
          продвинуться по служебной лестнице на одну, а то и несколько ступеней вверх, поможет <strong>карьерный
            консультант</strong>.</p>
        <p>Сегодня мало кто по-настоящему, всерьез и правильно занимается карьерой – то есть, построением своего
          жизненного пути на профессиональном поприще. Процесс этот уникальный и неповторимый. Карьерные коучи <a
            class="text-link" href="<?= get_site_url(); ?>">кадрового агентства «КАДР»</a> помогут не потерять
          ориентиров, зададут точный вектор развития и повысят мотивацию.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="career-counseling-title__item page-header__item item-2">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-title.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-title.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-title.jpg"
            alt="Обсуждение проекта в компании">
        </picture>
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#when-career-coaching-required"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент">><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="when-career-coaching-required" class="when-career-coaching-required">
    <div class="container">
      <div class="title-part-mobile__item">
        <p>Тем, кто столкнулся с проблемой смены места работы или не хочет больше пребывать в застое и мечтает
          продвинуться по служебной лестнице на одну, а то и несколько ступеней вверх, поможет <strong>карьерный
            консультант</strong>.</p>
        <p>Сегодня мало кто по-настоящему, всерьез и правильно занимается карьерой – то есть, построением своего
          жизненного пути на профессиональном поприще. Процесс этот уникальный и неповторимый. Карьерные коучи <a
            class="text-link" href="<?= get_site_url(); ?>">кадрового агентства «КАДР»</a> помогут не потерять
          ориентиров, зададут точный вектор развития и повысят мотивацию.</p>
      </div>
      <div class="when-career-coaching-required__title">
        <h2>Ситуации, когда требуется карьерный коучинг</h2>
        <div class="underline-block"></div>
      </div>
      <div class="when-career-coaching-required__item">
        <p>Если Вы:</p>
        <ol>
          <li>
            <p>Попрощались с работодателем и находитесь в свободном плавании больше двух недель.</p>
          </li>
          <li>
            <p>Хотите найти работу своей мечты, но не решаетесь это сделать или не знаете, с чего начать.</p>
          </li>
          <li>
            <p>Требуется помощь в подготовке к ответственному собеседованию.</p>
          </li>
          <li>
            <p>Мечтаете попасть в команду топового предприятия, но не встречали вакансий в свободном доступе.</p>
          </li>
          <li>
            <p>Уже давно не испытываете радости и удовлетворения от того, чем занимаетесь, ходите на работу, как на
              каторгу.</p>
          </li>
          <li>
            <p>Считаете, что Ваш труд недооценен и оплачивается не соразмерно его стоимости.</p>
          </li>
          <li>
            <p>Поняли вдруг, что занимаетесь вовсе не тем, чем хотелось бы.</p>
          </li>
        </ol>
        <p>Карьерный коуч кадрового агентства «КАДР» поможет разобраться, почему так произошло и подскажет выход из
          подобной ситуации.</p>
      </div>
    </div>
  </div>
  <div class="result-loves-action">
    <div class="container">
      <div class="result-loves-action__title">
        <h2>Результат любит действие</h2>
        <div class="underline-block"></div>
      </div>
      <div class="result-loves-action__item item-1">
        <p><strong>Карьерное консультирование</strong> проходит одновременно в нескольких базовых форматах, сохраняет
          при этом индивидуальный подход. Мы рассматриваем каждую конкретную ситуацию и разбираем ее в мире клиента.
        </p>
        <p>Работа строится на принципах сотрудничества, которые предполагают <strong>карьера и коучинг</strong>. Уже
          после разовой консультации во время личной встречи вы пройдете тестирование и получите рекомендации и
          мотивацию к действию.</p>
      </div>
      <div class="result-loves-action__item item-2">
        <p>При повторных встречах займемся конкретикой:</p>
        <ul>
          <li>
            <p>Поймем, где искать работу именно Вам;</p>
          </li>
          <li>
            <p>Напишем правильное, красивое, целеориентированное персональное резюме;</p>
          </li>
          <li>
            <p>Подготовимся к интервью;</p>
          </li>
          <li>
            <p>Обоснуем свои зарплатные ожидания с уровнем дохода выше среднерыночного.</p>
          </li>
        </ul>
      </div>
      <div class="result-loves-action__item item-3">
        <p>Вы получите профессиональную поддержку и сопровождение от карьерного консультанта на протяжении всего срока
          поисков работы, а также приобретете самый ценный навык – уверенность в себе и высокую самооценку.
          Потенциальный работодатель очень скоро это почувствует и не заставит долго ждать приглашения.</p>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
    <div class="container-new">
      <div class="priceNew-wrapper pt-150 pb-150">
        <h2 class="priceNew__title title-line-new">
          <span>Стоимость карьерного консультирования</span>
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
                      Индивидуальные профессиональные и личностные консультации (коучинговые и психологические) работа с
                      неуверенностью, сложными профессиональными моментами, профессиональным и личностным эмоциональным
                      выгоранием, выход из профессионального и личностного кризиса, работа с заниженной самооценкой
                    </p>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          Разовая консультация
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          200
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          2 часа работы, работу проводит психолог/коуч
                        </p>
                      </div>
                    </div>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          Пакет Бонус (3 консультации по 2 часа)+ 2 домашних задания с разбором и обратной связью (Бонус
                          о компании)
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          450
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          6 часов работы, работу проводит психолог/коуч
                        </p>
                      </div>
                    </div>
                    <div class="priceNew-item-table-group">
                      <div class="priceNew-item-table-item f-center">
                        <p class="priceNew-item-table-item__name">
                          <br>
                          Пакет Бонус+ (5 консультации по 2 часа)+4 домашних задания с разбором и обратной связью (Бонус
                          от компании). По запросу выдаем сертификат
                          <br>
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Стоимость работ от, BYN</span>
                          700
                        </p>
                        <p class="priceNew-item-table-item__name">
                          <span class="mobile">Примечание</span>
                          10 часов работы, работу проводит психолог/коуч
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
  <div class="recipe-professional-growth">
    <div class="container container-padding">
      <div class="recipe-professional-growth__title">
        <h2>Рецепт про&shy;фессио&shy;наль&shy;ного роста</h2>
        <div class="underline-block"></div>
      </div>
      <div class="recipe-professional-growth__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-1.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-1.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-1.jpg"
            alt="Стол с продукцией Apple">
        </picture>
      </div>
      <div class="recipe-professional-growth__item">
        <p>Предлагаем рецепт успешного профессионала. Каждый волен изменить его под себя, но советуем не отступать от
          технологии и не затягивать с приготовлением.</p>
        <p>Ингредиенты карьеры:</p>
        <ul>
          <li>
            <p>Консультирование по вопросам рынка труда;</p>
          </li>
          <li>
            <p>Профессиональная ориентация;</p>
          </li>
          <li>
            <p>Карьерный коучинг;</p>
          </li>
          <li>
            <p>Психологическая поддержка.</p>
          </li>
        </ul>
        <p>Могут понадобиться навыки управления личными финансами и тренировка персональной эффективности. Берем все в
          нужных пропорциях, добавляем ингредиенты поэтапно, замешиваем быстро, но тщательно и получаем готовое блюдо,
          которое ждет наш клиент – работодатель. Учтите, что трудиться придется много. Коуч сам ничего не сможет
          приготовить без Вашего участия и стремления. Но он точно научит Вас это делать правильно.</p>
        <p>Могут понадобиться навыки управления личными финансами и тренировка персональной эффективности. Берем все в
          нужных пропорциях, добавляем ингредиенты поэтапно, замешиваем быстро, но тщательно и получаем готовое блюдо,
          которое ждет наш клиент – работодатель.</p>
        <p>Учтите, что трудиться придется много. Коуч сам ничего не сможет приготовить без Вашего участия и стремления.
          Но с помощью карьерного консультирования он точно научит Вас это делать правильно.</p>
      </div>
    </div>
  </div>
  <div class="four-pillars-of-career-coaching">
    <div class="container">
      <div class="four-pillars-of-career-coaching__title">
        <h2>Четыре столпа карьерного коучинга</h2>
        <div class="underline-block"></div>
      </div>
      <div class="four-pillars-of-career-coaching__item">
        <ul>
          <li>
            <div class="item__image">
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
            <div class="item__text">
              <h5><span>№1.&nbsp;</span> <a class="text-link"
                  href="<?= get_site_url(); ?>/kadrovyj-konsalting/vebinary-treningi-po-poisku-raboty-br-i-razvitiju-karery/">Поиск
                  работы</a></h5>
              <p>Сюда относятся умение составлять резюме, писать сопроводительные письма, заявлять свою стоимость на
                рынке, поиск нужных вакансий, в том числе скрытых, умение самопрезентации и ведения собеседования,
                включая ответы на стрессовые и каверзные вопросы. Важно уметь соотносить спрос и предложение рабочей
                силы, требования разных работодателей к одной и той же специальности.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
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
            <div class="item__text">
              <h5><span>№3.&nbsp;</span> Профориентация</h5>
              <p>Без интереса, вопреки склонностям и таланту не сделать профессиональную карьеру. Вовсе не обязательно
                выбрать одну профессиональную сферу раз и навсегда и всю жизнь отработать на одном предприятии, пассивно
                дожидаясь повышения, как учили в советские времена. Приоритеты могут меняться вместе с жизненными
                целями. Их нужно уметь правильно, своевременно выявить и расставить по местам.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
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
            <div class="item__text">
              <h5><span>№2.&nbsp;</span> Стратегия</h5>
              <p>Нужно четко понимать направление карьерного развития на ближайшую, среднюю и дальнюю перспективу,
                сопоставлять его с состоянием рынка трудовых ресурсов. Это и называется стратегией, которая поможет
                развиваться и двигаться по лестнице успеха вверх с нужной скоростью. Исходя из выстроенного
                перспективного плана можно не только планировать карьеру, но и уверенно принимать решения, делать
                правильный выбор из нескольких предложенных вариантов трудоустройства.</p>
            </div>
          </li>

          <li>
            <div class="item__image">
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
            <div class="item__text">
              <h5><span>№4.&nbsp;</span> Психология</h5>
              <p>Не только отсутствие информации и навыков, но и внутренние преграды мешают профессионально расти и
                меняться. Важно не только понимать, чем ты хочешь заниматься, но и как ты можешь это делать, что мешает
                тебе на пути. Устранить все преграды, страхи, стереотипы внутри нас помогает психологическая поддержка.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="what-for-career-counseling">
    <div class="container">
      <div class="what-for-career-counseling__title">
        <h2>Что дает карьерная консультация</h2>
        <div class="underline-block"></div>
      </div>
      <div class="what-for-career-counseling__item">
        <p>Поиск работы всегда связан со стрессовой ситуацией, когда мы не можем сконцентрироваться на задачах и
          уверенно идти к цели. Взгляд непредвзятого эксперта, его советы и анализ помогут в решении конкретных
          примеров. Очень часто клиенты не ставят перед собой четких целей, а стремятся к размытому, неясному идеалу,
          отчего коэффициент полезного действия в решении проблемы невысок.</p>
        <p>Вы обретете уверенность и будете оценивать себя как классного специалиста, уверенного в своих силах,
          способного выполнить много востребованных задач. Это расширит круг поисков и даст мощный толчок к
          профессиональному развитию.</p>
      </div>
    </div>
  </div>
  <div class="contact-the-professionals">
    <div class="container">
      <div class="contact-the-professionals__title">
        <h2>Обращайтесь к профессионалам</h2>
        <div class="underline-block"></div>
      </div>
      <div class="contact-the-professionals__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-2.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-2.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/career-counseling/career-counseling-2.jpg"
            alt="Помощь в работе">
        </picture>
      </div>
      <div class="contact-the-professionals__item">
        <p>В жизни мало кому удается быть универсалом. Поэтому, когда мы болеем, идем к врачу, когда строим дом,
          приглашаем строителей. Доверяем детей воспитателям и учителям, покупаем готовую одежду и обувь, а не шьем ее
          сами. Когда наступит момент менять работу, попробуйте обратиться к профессионалам в сфере карьерного коучинга,
          чтобы почувствовать разницу. Так Вы поймете, в чем Ваша проблема, почему она возникла и как может быть решена.
          Взрослые не меньше, чем подростки, нуждаются в консультационной поддержке, ведь реальность настолько динамична
          и изменчива, что не мудрено за ней не успеть.</p>
      </div>
    </div>
  </div>
  <div class="individual-approach-in-different-directions">
    <div class="container">
      <div class="individual-approach-in-different-directions__title">
        <h2>Индивидуальный подход в разных направлениях</h2>
        <div class="underline-block"></div>
      </div>
      <div class="individual-approach-in-different-directions__item">
        <p>Кадровое агентство «КАДР» организует <strong>карьерный коучинг</strong> на профессиональном уровне. Карьерные
          консультанты компании знают особенности, тенденции развития рынка труда и бизнеса Беларуси, Минска, всех
          городов и регионов страны.</p>
        <p>Практические рекомендации по совершенствованию профессиональных навыков, развитие личности создадут Ваш новый
          профессиональный имидж. Вы получите максимальный результат в сжатые сроки. Вместе с профессионалом займете
          свое место в купе отправляющегося поезда, а не будете бежать и суетиться, пытаясь запрыгнуть в последний общий
          вагон.</p>
      </div>
    </div>
  </div>
  <div class="not-afraid-change-your-life">
    <div class="container">
      <div class="not-afraid-change-your-life__title">
        <h2>Не бойтесь изменить свою жизнь</h2>
        <div class="underline-block"></div>
      </div>
      <div class="not-afraid-change-your-life__item">
        <p>Направляйте Ваши запросы к нам на электронный адрес кадрового агентства «КАДР», звоните или пишите в чат. Мы
          обязательно свяжемся с Вами и поможем, выберем гибкий график консультаций в удобное время. Будьте успешными в
          карьере и помните, что мир вокруг меняют люди, то есть Вы и Ваш <strong>карьерный консультант</strong>.</p>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/services'); ?>
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/news'); ?>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>

<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "Карьерное консультирование",
    "image": "https://hrbel.by/wp-content/themes/kadr2/image/career-counseling/career-counseling-title.webp",
    "description": "Услуги карьерного консультирования и коучинга для достижения Ваших успехов",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/karernoe-konsultirovanie/",
        "priceCurrency": "BYN",
        "price": "200",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }