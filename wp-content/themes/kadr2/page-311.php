<?php
/*
Template Name: Карьерный менеджмент
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="career-management-title page-header">
    <div class="container">
      <div class="career-management-title__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Карьер&shy;ный ме&shy;недж&shy;мент</h1>
        <p>Карьерный менеджмент – это «управление талантами». Незаметно для всех в карьерных целях
          сотрудников произошли кардинальные перемены, а само понятие стало ассоциироваться не с негативным
          «карьеризмом», а с успешностью, прибылью и прогрессом.</p>
        <p>Этот факт требует от управленческой команды новых подходов к мотивации персонала и использованию его
          карьерного потенциала в качестве ресурса для развития компании.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="career-management-title__item page-header__item item-2">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-management/career-management-title.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/career-management/career-management-title.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/career-management/career-management-title.jpg"
            alt="Работа в офисе">
        </picture>
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#used-to-be-so"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="used-to-be-so" class="used-to-be-so">
    <div class="container">
      <div class="title-part-mobile__item">
        <p>Карьерный менеджмент – это «управление талантами». Незаметно для всех в карьерных целях
          сотрудников произошли кардинальные перемены, а само понятие стало ассоциироваться не с негативным
          «карьеризмом», а с успешностью, прибылью и прогрессом.</p>
      </div>
      <div class="title-part-mobile__item">
        <p>Этот факт требует от управленческой команды новых подходов к мотивации персонала и использованию его
          карьерного потенциала в качестве ресурса для развития компании.</p>
      </div>
      <div class="used-to-be-so__title">
        <h2>Раньше было так</h2>
        <div class="underline-block"></div>
      </div>
      <div class="used-to-be-so__item">
        <p>Еще 10-15, а тем более 30 лет назад гражданин получал профессию, одну на всю жизнь, трудоустраивался по
          специальности и имел гарантированную пожизненную занятость. Стабильность и была его главной мотивацией
            к труду. В то же время возможности такого сотрудника в профессиональном росте были строго
          регламентированы и ограничены. При этом индивидуальные особенности, желания личности в учет не принимались.
          Сейчас быстро меняющиеся запросы рынка требуют от человека мобильной смены специализации и приоритетов в
          работе. К тому же компании, да и государство в целом уже не берутся гарантировать работнику постоянную
			занятость. Так что ответственность за востребованность на рынке труда и <strong>управление карьерой</strong> целиком лежит на
          работнике.</p>
        <p>Но и возможностей для приложения вектора сил у современных специалистов гораздо больше. Роль грамотной
          кадровой и руководящей политики современной компании заключается в создании условий для адаптации работников к
          меняющимся требованиям экономической стратегии компании. В этой связи кадровое агентство «КАДР» выступит
          наставником и посредником, HR-консультантом в повышении уровня компетенций сотрудников и общей руководящей
          концепции фирмы.</p>
      </div>
    </div>
  </div>
  <div class="career-management-objectives">
    <div class="container">
      <div class="career-management-objectives__title">
        <h2>Цели карьерного менеджмента</h2>
        <div class="underline-block"></div>
      </div>
      <div class="career-management-objectives__item">
        <p>Повысить
            мотивацию сотрудников компании за счет постановки долгосрочных целей профессионального и карьерного
          роста.</p>
        <p>Снять напряженность в коллективе и отдельно взятых подразделениях, не зависимо от того, внутренними
          корпоративными причинами или общеэкономическими тенденциями в мире она вызвана.</p>
        <p>Привить навыки коллективного и персонального обсуждения острых, конфликтных вопросов.</p>
        <p>Сотрудники компании будут способны выстраивать диалог с руководством, что немаловажно в современных условиях
          экономики. В коллективе будет создана благоприятная коммуникационная среда, выстроены карьерные цели и стиль
          лидерства.</p>
      </div>
    </div>
  </div>
  <div class="career-building-algorithm">
    <div class="container">
      <div class="career-building-algorithm__title">
        <h2>Алгоритм построения карьеры</h2>
        <div class="underline-block"></div>
      </div>
		<p>Решение <strong>управления развитием карьеры персонала</strong> принимается поэтапно. Очень важно прийти к нему самостоятельно.
        Роль коуча-консультанта заключается в том, чтобы направлять клиента к правильному решению, не дать ему
        отклониться от цели. Вот как это выглядит по шагам:</p>
      <div class="career-building-algorithm__item">
        <ol>
          <li>
            <p>Ставим задачи. Четко формулируем цель.</p>
          </li>
          <li>
            <p>Анализируем реальность, то, как видит ее клиент, и какова она на самом деле.</p>
          </li>
          <li>
            <p>Расширяем и уточняем задачи по итогам анализа.</p>
          </li>
          <li>
            <p>Выдвигаем идеи по реализации, обсуждаем.</p>
          </li>
          <li>
            <p>Составляем список намерений по достижению цели.</p>
          </li>
          <li>
            <p>Обсуждаем ресурсы: знания, умения, необходимое развитие и помощь.</p>
          </li>
          <li>
            <p>Определяем сроки реализации карьерного развития, дату окончательного достижения цели.</p>
          </li>
          <li>
            <p>Назначаем контрольные точки исполнения.</p>
          </li>
          <li>
            <p>Завершаем проект, подводим итоги.</p>
          </li>
        </ol>
        <div class="career-building-algorithm__image">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/image/career-management/career-management-1.webp"
              type="image/webp">
            <source srcset="<?= get_template_directory_uri(); ?>/image/career-management/career-management-1.jpg"
              type="image/jpeg">
            <img src="<?= get_template_directory_uri(); ?>/image/career-management/career-management-1.jpg"
              alt="Два мужчины за компьютерами">
          </picture>
        </div>
      </div>
    </div>
  </div>
  <div class="broad-horizons-of-career-management">
    <div class="container">
      <div class="broad-horizons-of-career-management__title">
        <h2>Широкие горизонты управления карьерой</h2>
        <div class="underline-block"></div>
      </div>
      <div class="broad-horizons-of-career-management__item">
        <p>Мы, коллектив консультантов кадрового агентства «КАДР» уверены, что каждый человек, если он работает по
          призванию, способен сделать то, что будет не по силам остальным, он принесет несомненную пользу компании и
          получит достойное материальное и моральное вознаграждение.</p>
        <p>Секрет успешных бизнес-проектов кроется как раз в раскрытии потенциала сотрудников. Работа должна приносить
          удовлетворение и хороший заработок. Одно без другого существовать не может.</p>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость карьерного менеджмента</span>
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
  <div class="questions-that-dont-come-back-without-answer">
    <div class="container container-padding">
      <div class="questions-that-dont-come-back-without-answer__title">
        <h2>Вопросы, которые не останутся без ответа</h2>
        <div class="underline-block"></div>
      </div>
      <div class="questions-that-dont-come-back-without-answer__item">
        <p>Общаясь со своими клиентами, мы часто встречаемся с типичными вопросами, страхами, сомнениями касательно
			<strong> управления карьерой персонала</strong>. Кадровое агентство «КАДР» знает, как карьерный менеджмент может помочь во всех
          перечисленных ситуациях:</p>
        <ul>
          <li>
            <p>Точно знаю, чего уже не хочу, но еще не определился с тем, что мне нужно на самом деле.</p>
          </li>
          <li>
            <p>Хочу добиться большего в карьере, но не знаю, как и с чего начать.</p>
          </li>
          <li>
            <p>Предложили повышение и руководящую должность, но не уверен, что справлюсь.</p>
          </li>
          <li>
            <p>Как показать себя лидером в команде, как заставить подчиненных уважать и слушать приказы?</p>
          </li>
          <li>
            <p>Возложили столько обязанностей, что уже нахожусь в стрессовой ситуации на грани срыва.</p>
          </li>
          <li>
            <p>Уверен, что вырос из занимаемой должности. Что делать дальше?</p>
          </li>
          <li>
            <p>Как уйти из наемных работников и открыть собственное дело? И наоборот, — не лучше ли работать по найму, а
              собственный бизнес закрыть?</p>
          </li>
        </ul>
        <p>Эти и другие ситуации мы отрабатываем на личностных тренингах карьерного менеджмента. Если Ваш случай
          уникальный, разберем и его тоже.</p>
      </div>
    </div>
  </div>
  <div class="practical-recommendations">
    <div class="container">
      <div class="practical-recommendations__title">
        <h2>Практические рекомендации в управлении карьерой (менеджменте)</h2>
        <div class="underline-block"></div>
      </div>
      <div class="practical-recommendations__item">
        <p>В коллективной работе кадровое агентство «КАДР» всегда старается донести до клиента, что определенные
          противоречия между сотрудниками и руководством неизбежны. Поэтому нужно работать над обоюдной
          заинтересованностью и прикладывать двусторонние усилия, чтобы продвинуться по службе и развивать бизнес.
          Благоприятные возможности следует усиливать, принимать неписанные правила организации, разделять философию,
          ценности компании. </p>
        <p>Создавая благоприятное впечатление о себе, демонстрируя стремление развиваться повышать квалификацию и
          прокачивать навыки, Вы проявите свою лояльность компании, заинтересованность в сотрудничестве и готовность к
          взаимодействию и совершенствованию. На курсе управления карьерой мы научим Вас избегать безынициативных,
          некомпетентных и бесперспективных руководителей, находить грамотных наставников, поддерживать успешных людей в
          карьере. Возможно, они станут вашим локомотивом, который потянет вас за собой в гору к вершине успеха и
          благосостояния.</p>
      </div>
    </div>
  </div>
  <div class="be-in-trend">
    <div class="container">
      <div class="be-in-trend__title">
        <h2>Быть в тренде</h2>
        <div class="underline-block"></div>
      </div>
      <div class="be-in-trend__item">
        <p>Консультации
            по карьере сегодня популярный и востребованный вид коучинга. Они апробированы на примерах планирования и
          построения карьеры многих успешных менеджеров. То, что сработало у них, сработает и для Вас. Программы,
          разработанные кадровым агентством «КАДР», рассчитаны на возраст сотрудников от 25 до 65 лет. Они ориентированы
          на разные категории специальностей – от рабочих до ТОП-менеджеров. Для компании профессиональный
          коуч-консультант поможет составить план развития сотрудников, активизирует к продвижению и личностному росту,
          выявит неформальных лидеров коллектива и научит, как использовать их скрытый потенциал.</p>
        <p>Это будет одной из точек роста и развития компании, повысит ее авторитет на кадровом рынке, поможет привлечь
          лучших специалистов в отрасли и удержит собственных сотрудников не только при помощи материальной стороны
          вопроса. Все, что Вам нужно сделать сейчас, это связаться с консультантом и обсудить детали. Мы составим
          удобный график, разработаем план и стратегию совместных действий. Карьерный менеджмент – это верная дорога к
          успеху для талантливых людей!</p>
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
    "name": "Карьерный менеджмент",
    "image": "https://hrbel.by/wp-content/themes/kadr2/image/career-management/career-management-title.webp",
    "description": "Поможем в управлении карьерой персонала",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/kadrovyj-konsalting/karernyj-menedzhment/",
        "priceCurrency": "BYN",
        "price": "200",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }

</script>
<?php get_footer(); ?>