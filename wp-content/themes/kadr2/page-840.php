<?php
/*
Template Name: Подбор руководящих кадров
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="page-header">
    <div class="container">
      <div class="page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Под&shy;бор ру&shy;ко&shy;во&shy;дя&shy;щих кадров</h1>
        <p>Executive Search – задача верхнего уровня сложности для кадровой службы. Кадровое агентство «КАДР»
          осуществляет подбор кадров управления для любых организационно-правовых форм ведения бизнеса на территории
          Республики Беларусь, в соответствии с Трудовым и Гражданским кодексами и нормативно-правовыми актами РБ.</p>
        <p>Руководящие кадры – управленцы, топ-менеджеры среднего и высшего звеньев – привлекаются к работе по
          инициативе владельцев бизнеса либо совета директоров хозяйственного общества. Кадровое агентство «КАДР»
          оказывает услуги по подбору руководителей различного уровня при помощи научно обоснованных и проверенных
          методик.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/group-of-people-working-out-business-plan-in-an-office.png"
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
  <div id="block-1" class="custom-block block-1">
    <div class="container">
      <div class="title-part-mobile__item">
        <p>Executive Search – задача верхнего уровня сложности для кадровой службы. Кадровое агентство «КАДР»
          осуществляет подбор кадров управления для любых организационно-правовых форм ведения бизнеса на территории
          Республики Беларусь, в соответствии с Трудовым и Гражданским кодексами и нормативно-правовыми актами РБ.</p>
        <p>Руководящие кадры – управленцы, менеджеры среднего и высшего звеньев – привлекаются к работе по инициативе
          владельцев бизнеса либо совета директоров хозяйственного общества. Кадровое агентство «КАДР» оказывает услуги
          по подбору руководящих кадров при помощи научно обоснованных и проверенных методик.</p>
      </div>
      <div class="block__title">
        <h2>Найти нельзя переманить</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p>С кадровыми проблемами бизнес сталкивается с момента открытия. При развитии хозяйственной деятельности, в
          особенности, удаленных бизнес-процессов, вопрос поиска и подбора топ-менеджеров для повышения
          конкурентоспособности становится на порядок актуальнее. Будущий руководитель обязательно должен обладать
          потенциалом для руководящей работы, необходимыми компетенциями и востребованными личностными качествами, к
          которым собственники предприятий (организаций) особенно придирчивы.</p>
        <p>Требования заказчиков бывают крайне противоречивы. Так, от кандидата могут одновременно ожидать лидерских
          качеств и покладистости, длительного стажа работы в сочетании с молодостью (до 35 лет), традиционного
          исполнения обязанностей и творческого подхода к делу и т.д. Задача кадрового агентства – выявить объективные
          показатели, существенные для конкретного бизнес-проекта, составить портрет «идеального» кандидата и найти
          сотрудника, максимально отвечающего обоим критериям.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Как подбираются кадры для управления компанией?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Существует несколько способов подбора персонала:</p>
        <ol>
          <li>
            <p>Комплектование штата (рекрутинг).</p>
          </li>
          <li>
            <p>Поиск топ-менеджеров, руководителей (хедхантинг).</p>
          </li>
          <li>
            <p>Оперативный поиск (executive search).</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость подбора руководителей</span>
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
                                                до 3 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2700
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 5 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2500
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: HR, ведущий специалист по подбору персонала
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
                                                до 3 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2200
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 5 сотрудников
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
  <div class="custom-block block-2">
    <div class="container container-padding">
      <div class="block__title">
        <h2>Где искать топ-менеджеров?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Хантинг управленческого персонала вращается вокруг:</p>
        <ol class="list-bold">
          <li>
            <p>Внутренних резервов.</p>
            <p>При закрытой политике на предприятии взращиваются собственные управленческие кадры. Процесс отличается
              затратностью и длительностью.</p>
          </li>
          <li>
            <p>Внешних резервов.</p>
            <p>Открытая политика фирмы подразумевает мониторинг рынка труда. Риски заключаются в проведении кадровиками
              слишком большого количества собеседований и ошибочного итогового решения.</p>
          </li>
          <li>
            <p>Конкурентных резервов.</p>
			  <p>Так называемое «переманивание», иначе <strong>хедхантинг</strong> (англ. head—hunting – «охота за головами»). Сложность
              состоит в том, что кандидаты не находятся в активном поиске работы, не размещают резюме на
              специализированных веб-ресурсах, и «выслеживание» ложится на плечи HR-специалистов.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Риски кадровой политики</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Главный критерий <strong>оценки руководящего
			работника</strong> – соответствие должности. Устаревший подход учитывает такие факторы, как стаж работы, возраст,
          лояльность компании, родственные связи, неформальность лидерства и т.п. В результате начальником становится
          самый возрастной сотрудник либо молодой карьерист, родственник директора либо «серый кардинал». Как результат
          – компания стремительно идет к краху.</p>
        <p class="half-width">Обращение за профессиональной услугой в кадровое агентство минимализирует риски:</p>
        <ul class="marker-hard">
          <li>
            <p>Утечки важной информации.</p>
          </li>
          <li>
            <p>Конфликта с конкурентами.</p>
          </li>
          <li>
            <p>Убытков и хищений.</p>
          </li>
          <li>
            <p>Потери рейтинга компании.</p>
          </li>
          <li>
            <p>Снижения прибыли предприятия (организации).</p>
          </li>
        </ul>
        <p>Хедхантинг – кропотливый процесс, а хедхантер отличается от обычного кадровика нацеленностью на подбор
          квалифицированных руководящих кадров различного уровня. Агентство топ персонала «КАДР» выделяется
          неординарностью подхода в сочетании с юридической грамотностью и выбором современных, наиболее удачных и
          проверенных стратегий.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2">
    <div class="container">
      <div class="block__title">
        <h2>Стратегия executive search</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Современные кадровые агентства применяют технологию прямого поиска кандидата на вакантную
          должность – <strong>executive search</strong>. При executive search составляется «портрет» искомого кандидата, «портрет»
          компании-заказчика и подробное обоснование ситуации, в которой специалист и фирма составят гармоничный
          «диптих».</p>
        <p class="half-width">Действия специалиста при executive search:</p>
        <ul class="marker-hard">
          <li>
            <p>выяснение требований заказчика;</p>
          </li>
          <li>
            <p>мониторинг бизнес-ниши, обзор конкурентоспособных фирм;</p>
          </li>
          <li>
            <p>поиск возможных кандидатур;</p>
          </li>
          <li>
            <p>проверка сведений о подходящем кандидате;</p>
          </li>
          <li>
            <p>получение контактных данных (телефона, адреса электронной почты);</p>
          </li>
          <li>
            <p>корректировка предложения о работе с учетом интересов сторон;</p>
          </li>
          <li>
            <p>предложение о вакансии напрямую выбранному сотруднику;</p>
          </li>
          <li>
            <p>представление кандидата заказчику;</p>
          </li>
          <li>
            <p>оформление кандидата на работу;</p>
          </li>
          <li>
            <p>получение гонорара за услугу.</p>
          </li>
        </ul>
        <p class="half-width">Задачи прямого поиска:</p>
        <ol>
          <li>
            <p>Нахождение адекватного подхода к объекту хантинга.</p>
          </li>
          <li>
            <p>Привлекательная презентация вакансии как делового предложения.</p>
          </li>
          <li>
            <p>Получение принципиального согласия на контакт с работодателем.</p>
          </li>
          <li>
            <p>Побуждение кандидата к ответному действию (приходу на собеседование).</p>
          </li>
        </ol>
        <p>Определение «точки роста» будущего управленца в перспективе и открытые гарантии нанимателя в плане
          предоставления новому сотруднику возможностей для повышения квалификации и личностного развития определяют
          согласие кандидата пройти предварительное собеседование.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>HR-услуги компании «КАДР»</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Опытные HR-специалисты действуют поэтапно:</p>
        <ul class="marker-arrow">
          <li>
            <p>Выясняют стратегические цели и задачи организации-нанимателя.</p>
          </li>
          <li>
            <p>Выбирают ресурс для привлечения нужного персонала.</p>
          </li>
          <li>
            <p>Избегают дискриминации кандидатов (по полу, возрасту, стажу и пр.).</p>
          </li>
          <li>
            <p>Работают над психологическим «портретом» объекта хантинга.</p>
          </li>
          <li>
            <p>Находят результативного исполнителя, соответствующего должностным обязанностям и обладающего требуемыми
              компетенциями.</p>
          </li>
          <li>
            <p>Оказывают психологическую поддержку клиенту.</p>
          </li>
          <li>
            <p>Досконально проверяют «досье» выбранного лица на предмет нарушений, отзывов с предыдущего места работы,
              достижений и т.д.</p>
          </li>
          <li>
            <p>При необходимости проводят дополнительные собеседования.</p>
          </li>
        </ul>
        <p>Заказ услуг кадрового агентства «КАДР» доступен при обращении на сайте, по имейлу или по телефону. Звоните
          нам по интересующим Вас кадровым вопросам – наши специалисты котовы поддержать любое достойное начинание!</p>
        <p>Кадры – ценнейший ресурс в бизнес-структуре. Кадровое агентство «КАДР» в Минске стратегически нацелена на
          поиск руководителей для процветания бизнеса клиентов. Мы не просто «закрываем» вакансии, мы отвечаем за
          эффективность труда выбранных нами управленческих кандидатур!</p>
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
    "name": "Подбор руководящих кадров",
    "image": "https://hrbel.by/wp-content/webp-express/webp-images/themes/kadr2/image/group-of-people-working-out-business-plan-in-an-office.png.webp",
    "description": "Профессиональный executive search: подбор руководителей высшего и среднего звена, а также поиск руководящих кадров",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/poisk-i-podbor-personala/podbor-rukovodyashhih-kadrov/",
        "priceCurrency": "BYN",
        "price": "1900",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }

</script>
<?php get_footer(); ?>