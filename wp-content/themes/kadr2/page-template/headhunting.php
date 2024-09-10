<?php
/*
Template Name: Услуга хедхантинга персонала
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
        <h1>Услуга хедхантинга персонала</h1>
        <p>
          Хедхантинг  — возможность нанять топового специалиста для вашего бизнеса!
        </p>
        <br>
        <p>
          “Кадр” занимается профессиональным рекрутингом/хедхантингом персонала. Уже много лет мы помогаем бизнесам из различных сфер подбирать профессионалов.
        </p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/headhunting/main.png" alt="Собеседование в офисе">
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
  <section id="block-1" class="custom-block block-2">
    <div class="container">
      <div class="block__title">
        <h2>Что такое headhunting?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">
          Headhunting — это “охота” за редкими, ценными специалистами, которые уже доказали свою квалификацию на рынке. Это не просто поиск сотрудников, а поиск “звезд” в для занятия ключевых позиций или выполнения уникальных задач. Этот метод рекрутинга используется, чтобы найти тех, кто может принести значительную пользу их бизнесу. Особенно когда таких людей сложно найти через обычные каналы подбора персонала.
        </p>
        <h3 class="half-width" style="margin-bottom: 20px;">
          <b>Особенности</b>
        </h3>
        <ul class="marker-hard">
          <li>
            <p><b>Целенаправленный поиск:</b> Хедхантеры ищут специалистов, которые точно соответствуют определенным требованиям, имеют необходимый набор навыков.</p>
          </li>
          <li>
            <p><b>Прямой подход:</b> Вместо того чтобы ждать откликов на вакансии, рекрутеры активно обращаются к потенциальным кандидатам. Часто к тем, кто не ищет работу.</p>
          </li>
          <li>
            <p><b>Конфиденциальность:</b> Процесс остается скрытым от широкой публики, порой даже от других сотрудников фирмы. Чтобы избежать возможных конфликтов или спекуляций.</p>
          </li>
          <li>
            <p><b>Высокая стоимость:</b> Технология хедхантинга обходятся дороже традиционного подбора персонала из-за сложности задачи, ценности привлекаемых кадров.</p>
          </li>
        </ul>
        <h3 class="half-width" style="width: 100%; margin-bottom: 20px;">
          <b>Цели</b>
        </h3>
        <div class="selection-personnel__item item-1">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p><b>Заполнение ключевых позиций:</b> Найти лучших для ролей, которые имеют стратегическое значение для бизнеса.</p>
        </div>
        <div class="selection-personnel__item item-2">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p><b>Привлечение уникальных талантов:</b> Открыть доступ к специалистам с уникальными навыками, которые могут стать игроками, меняющими правила игры в бизнесе.</p>
        </div>
        <div class="selection-personnel__item item-1">
          <img style="margin-left: 0;" src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
          <p><b>Конкурентное преимущество:</b> Обеспечить преимущество на рынке за счет привлечения лучших специалистов.</p>
        </div>
        
        <p class="half-width"><br>Headhunting помогает оставаться впереди конкурентов, обеспечивая их самыми талантливыми сотрудниками, которые могут внести значительный вклад в развитие, успех бизнеса.</p>
        <p class="half-width">Организации прибегают к хедхантингу по ряду других стратегических причин:</p>
        <ol class="list-bold">
          <li>
            <p>Ослабление конкурентов</p>
            <p>Путем переманивания ключевых сотрудников, можно ослабить конкурентные предприятия, лишая их важных ресурсов, знаний.</p>
          </li>
          <li>
            <p>Борьба с дефицитом на рынке</p>
            <p>Возможность найти и привлечь редких специалистов в условиях нехватки квалифицированных кадров.</p>
          </li>
          <li>
            <p>Поиск профессиональных руководителей</p>
            <p>Для стратегического развития, управления требуются опытные лидеры. Хедхантинг помогает найти таких руководителей.</p>
          </li>
          <li>
            <p>Заполнение вакансий с высокими требованиями</p>
            <p>Когда стандартные методы подбора неэффективны, headhunting используется для поиска специалистов на ответственные позиции.</p>
          </li>
          <li>
            <p>Ускорение процесса найма</p>
            <p>В ситуациях, когда нужно быстро закрыть вакансию, хедхантинг может значительно сократить время поиска подходящего сотрудника.</p>
          </li>
        </ol>
      </div>
    </div>
  </section>
  <section class="block-2 custom-block dark">
    <div class="container">
      <div class="block__title">
        <h2>Этапы хедхантинга персонала</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ol>
          <li>
            <p><b>Предварительные консультации:</b> Определение потребностей бизнеса, требований к будущему работнику.</p>
          </li>
          <li>
            <p><b>Анализ рынка/ситуации:</b> Исследование рынка для выявления потенциальных кандидатов.</p>
          </li>
          <li>
            <p><b>Составление списка претендентов:</b> Создание списка необходимых специалистов для рассмотрения.</p>
          </li>
          <li>
            <p><b>Оценка:</b> Проведение интервью, оценка на соответствие требованиям.</p>
          </li>
          <li>
            <p><b>Подписание контракта:</b> Заключение договора с выбранным претендентом, оформление.</p>
          </li>
        </ol>
      </div>
      <div class="block__title">
      </div> 
      <div class="block__title">
        <h2>Сферы для хедхантинга</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ul class="marker-arrow">
          <li>
            <p>Банковская сфера</p>
          </li>
          <li>
            <p>Агропромышленный комплекс</p>
          </li>
          <li>
            <p>Логистика</p>
          </li>
          <li>
            <p>IT-отрасль</p>
          </li>
          <li>
            <p>Медицина, фармацевтика</p>
          </li>
          <li>
            <p>Маркетинг, реклама и PR</p>
          </li>
          <li>
            <p>Строительство, архитектура</p>
          </li>
          <li>
            <p>Производство, промышленность</p>
          </li>
          <li>
            <p>Юриспруденция</p>
          </li>
          <li>
            <p>Управление персоналом/HR</p>
          </li>
          <li>
            <p>Финансы, бухгалтерия</p>
          </li>
          <li>
            <p>Продажи/закупки</p>
          </li>
        </ul>
      </div>
    </div>
  </section> 
  <section class="support-new-employees" style="background: none;">
    <div class="container">
      <h2>Как хантить сотрудников из других компаний?</h2>
      <div class="underline-block"></div>
      <div class="support-new-employees__item item-1">
        <div class="item__text">
          <p>“Охота” за специалистами других фирм требует тщательного планирования и стратегического подхода. <br>
          Основные принципы:
          </p>
          <ol>
            <li>
              <p>
                <b>Определение целей:</b> Четко определите, какую роль должен будет выполнять сотрудник, какие уникальные навыки он должен иметь.
              </p>
            </li>
            <li>
              <p>
                <b>Поиск информации:</b> Используйте все доступные ресурсы для сбора информации о претендентах: социальные сети, отраслевые мероприятия, профессиональные сообщества.
              </p>
            </li>
            <li>
              <p>
                <b>Анализ рынка:</b> Изучите текущее состояние рынка труда, чтобы понять, где могут находиться лучшие специалисты. Узнайте, какова их потенциальная мотивация для смены работы.
              </p>
            </li>
            <li>
              <p>
                <b>Прямой подход:</b> Напрямую обращайтесь к людям с предложением о встрече/беседе.
              </p>
            </li>
            <li>
              <p>
                <b>Оценка, сопровождение:</b> В процессе переговоров оцените профессиональные качества, личные мотивы человека. Предоставьте ему всю необходимую информацию о вашем бизнесе и вакансии.
              </p>
            </li>
          </ol>
        </div>
        <div class="item__image">
          <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/headhunting/item-1.png"
            alt="">
        </div>
      </div>
      <div class="block__item custom-block">
        <h3 class="half-width">
          <b>Что можно предложить сотруднику для<br> перехода в другую компанию?</b>
          
        </h3>
        <br>
        <ul class="marker-hard">
          <li>
            <p>Карьерный рост</p>
          </li>
          <li>
            <p>Более высокую заработную плату</p>
          </li>
          <li>
            <p>Повышение квалификации/обучение за счет фирмы</p>
          </li>
          <li>
            <p>Вышестоящую должность</p>
          </li>
          <li>
            <p>Сотрудничество с иностранными партнерами</p>
          </li>
          <li>
            <p>Улучшение условий труда</p>
          </li>
          <li>
            <p>Бонус при подписании договора</p>
          </li>
          <li>
            <p>Возможность работы над перспективными проектами</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="custom-block block-2 dark"> 
    <div class="container">
      <div class="block__title">
        <h2>Распространенные ошибки хантинга</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">       
        <p class="half-width">Во время переманивания ценных сотрудников работодатели/рекрутеры совершают ряд ошибок. Некомпетентные действия приводят к негативному исходу рекрутинговой кампании.</p>
        <p class="half-width">Старайтесь избегать следующих ошибок при хедхантинге персонала:</p>
        <ol class="list-bold">
          <li>
            <p>Несвоевременное раскрытие информации о компании</p>
            <p>Рекрутеры иногда спешат раскрыть слишком много информации о бизнесе или предлагаемой должности на ранних этапах общения. Это может привести к утечке конфиденциальной информации, снижению интереса.</p>
          </li>
          <li>
            <p>Завышенные ожидания</p>
            <p>Обещание большего, чем может предложить компания, ведет к разочарованию, потере доверия. Важно быть реалистичным относительно возможностей карьерного роста, зарплаты.</p>
          </li>
          <li>
            <p>Игнорирование ситуации на рынке</p>
            <p>Неучет текущих тенденций рынка труда и игнорирование потребностей будущих сотрудников может привести к неудачному подбору персонала. Рекрутеры должны быть в курсе изменений в отрасли, а также адаптировать свои стратегии соответственно.</p>
          </li>
          <li>
            <p>Неразвитая корпоративная культура</p>
            <p>Компании со слабо выраженной корпоративной культурой или с негативной репутацией на рынке могут испытывать трудности с привлечением талантливых сотрудников. Сильная корпоративная культура является ключевым фактором для привлечения, удержания ценных кадров.</p>
          </li>
          <li>
            <p>Отсутствие четкого понимания потребностей бизнеса</p>
            <p>Неопределенность в требованиях к кандидатам, недостаточное понимание стратегических целей фирмы могут привести к найму неподходящих сотрудников.</p>
          </li>
        </ol>
        <p class="half-width">Избежать этих и других ошибок поможет тщательное планирование процесса хантинга, четкое понимание целей/потребностей предприятия, а также учет интересов, ожиданий кандидатов. Это поможет привлечь ценных сотрудников, способствуя развитию вашего дела.</p>
      </div>
    </div>
  </section>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость хедхантинга персонала</span>
                </h2> 
                <div class="priceNew-block">
                    <div class="priceNew-block-inner">
                        <ul class="priceNew-list show">
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
                                            Хедхантинг (индивидуальный подбор определённого специалиста/сотрудника по запросу компании)
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    Руководитель высшего звена/топ менеджер
                                                </p> 
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    4 000,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    Руководитель среднего звена
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    3 400,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: HR, ведущий специалист по подбору персонала
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
  <div class="warranties" style="background: none;">
    <div class="container" style="padding-top: 0;">
      <div class="warranties__title">
        <h2>Гарантии</h2>
        <div class="underline-block"></div>
      </div>
      <div class="warranties__item">
        <p>Если выбранный кандидат не пройдет испытательный срок, мы на безвозмездной основе подберем нового специалиста. Гарантийный период составляет два месяца. Подбор замены может длиться от одной недели до двух месяцев.</p>
      </div>
    </div>
  </div>
  <section class="custom-block block-2 dark"> 
    <div class="container">
      <div class="block__title">
        <h2>Почему мы?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">       
        <ol class="list-bold">
          <li>
            <p>Сроки</p>
            <p>Гарантируем четкое соблюдение дедлайнов. Мы оптимизировали подбор кадров и внедрили особую систему отбора, что позволяет оперативно находить необходимых специалистов.</p>
          </li>
          <li>
            <p>Экспертность</p>
            <p>Мы тщательно изучаем потребности каждого клиента, чтобы предложить персонализированные решения.</p>
          </li>
          <li>
            <p>Индивидуальный подход</p>
            <p>Хантингом занимаются HR-специалисты с многолетним опытом работы. Команда подбирается под каждый проект отдельно, в зависимости от сферы деятельности вашего бизнеса.</p>
          </li>
          <li>
            <p>Конфиденциальность</p>
            <p>Гарантия от утечек. Защита ваших данных, безопасное управление информацией о будущих сотрудниках.</p>
          </li>
        </ol>
      </div>
    </div>
  </section>
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
              <p>Для чего нужен хедхантинг?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
                <b>Headhunting</b> — это процесс привлечения талантливых специалистов, которые могут не искать активно работу, но их навыки, опыт идеально подходят для определенной роли в вашей фирме. Рекрутинг используется для заполнения вакансий, где требуется уникальный набор навыков или высокий уровень экспертизы. Технология хедхантинга используется, когда потенциальные соискатели могут быть пассивны или уже заняты.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Какая информация нужна для начала работы?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <ul class="marker-arrow">
                <li>
                  <b>Детальное описание вакансии:</b> Ключевые обязанности, необходимые навыки, квалификация.
                </li>
                <li>
                  <b>Информация о бизнесе:</b> Миссия, ценности, корпоративная культура, рабочая среда.
                </li>
                <li>
                  <b>Критерии отбора:</b> Желаемые личностные качества, профессиональный опыт.
                </li>
                <li>
                  <b>Условия работы:</b> Заработная плата, бонусы, возможности для развития, карьерные перспективы.
                </li>
              </ul>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Какие сроки занимает процесс хедхантинга?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
                Хедхантинг персонала может занимать разное время, в зависимости от сложности вакансии и доступности кадров.
              </p>
              <ul class="marker-arrow">
                <li>
                  <b>Подготовка.</b> Изучение требований, разработка стратегии поиска (1-2 недели).
                </li>
                <li>
                  <b>Поиск, оценка.</b> Идентификация, первичная оценка (2-6 недель).
                </li>
                <li>
                  <b>Интервью/отбор.</b> Проведение интервью и выбор финалистов (2-4 недели).
                </li>
                <li>
                  <b>Предложение, принятие решения.</b> Проводим переговоры, согласовываем условия. Человек принимает решение. Подписываем договор (1-2 недели).
                </li>
              </ul>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Кто будет заниматься поиском?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>
                Хедхантингом занимаются профессиональные рекрутеры или хедхантеры, которые имеют опыт в вашей отрасли и доступ к сети потенциальных кандидатов. Они используют прямой поиск, сетевые связи, анализ данных, чтобы найти наиболее подходящих сотрудников.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Как понять, что мне нужна услуга хедхантинга?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <ul class="marker-arrow">
                <li>
                  <b>Вы ищете специалиста с редкими навыками</b> или специфическим опытом. 
                </li>
                <li>
                  <b>Предыдущие попытки найти подходящего специалиста не увенчались успехом.</b> Нужен более целенаправленный подход.
                </li>
                <li>
                  <b>Вам нужен человек для стратегически важной позиции.</b> Самостоятельный поиск может стать крайне затруднительным. Поэтому лучше воспользоваться услугами хедхантинга.
                </li>
                <li>
                  <b>Нужно сохранить конфиденциальность вакансии,</b> чтобы не раскрывать стратегические планы или не вызывать беспокойство среди сотрудников.
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
    "name": "Хедхантинг персонала в Беларуси, Headhunting в рекрутинге",
    "image": "https://hrbel.by/wp-content/webp-express/webp-images/themes/kadr2/image/raboch-pers.png.webp",
    "description": "Найдем квалифицированных сотрудников для вашей компании с помощью хантинга персонала. ✅ Свяжитесь с нами сейчас, чтобы получить услугу headhunting.",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/poisk-i-podbor-personala/headhunting/",
        "priceCurrency": "BYN",
        "price": "3400",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }
</script>

<?php get_footer(); ?>