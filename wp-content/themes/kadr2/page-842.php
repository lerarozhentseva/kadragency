<?php
/*
Template Name: Подбор линейных специалистов
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
        <h1>Под&shy;бор ли&shy;ней&shy;но&shy;го пер&shy;со&shy;на&shy;ла</h1>
        <p>Вам требуется подбор специалистов? Открываете бизнес? Расширяете производство? Реорганизуете хозяйственное общество? Ищете
          посредника для массового или таргетированного найма рабочей силы? Кадровое агентство «КАДР» по подбору
          специалистов в Минске готово оказать всестороннее содействие!</p>
        <p>Основную массу сотрудников предприятия (организации) принято называть <strong>«линейным» персоналом</strong>. Запутаться при
          организации такого подбора просто – специализированные порталы переполнены однотипными резюме, за которыми
          скрываются личности неопределенной квалификации.</p>
        <p>Кадровое агентство «КАДР» осуществляет поиск специалистов на территории Республики Беларусь – в Минске и
          регионах. Помощь HR-агентства в подборе специалиста, актуально востребованного на вакантную позицию, приносит
          выгоду и компании-нанимателю, и сотруднику, получающему поддержку и приоритет при приеме на работу.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/linein-pers.png" alt="Собеседование в офисе">
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
  <div id="block-1" class="custom-block block-2">
    <div class="container">
      <div class="title-part-mobile__item">
        <p>Вам требуется <a class="text-link" href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">подбор
            специалистов</a>? Открываете бизнес? Расширяете производство? Реорганизуете хозяйственное общество? Ищете
          посредника для массового или таргетированного найма рабочей силы? Кадровое агентство «КАДР» по подбору
          специалистов в Минске готово оказать всестороннее содействие!</p>
        <p>Основную массу сотрудников предприятия (организации) принято называть <strong>«линейным» персоналом</strong>. Запутаться при
          организации такого подбора просто – специализированные порталы переполнены однотипными резюме, за которыми
          скрываются личности неопределенной квалификации.</p>
        <p>Кадровое агентство «КАДР» осуществляет поиск специалистов на территории Республики Беларусь – в Минске и
          регионах. Помощь HR-агентства в подборе специалиста, актуально востребованного на вакантную позицию, приносит
          выгоду и компании-нанимателю, и сотруднику, получающему поддержку и приоритет при приеме на работу.</p>
      </div>
      <div class="block__title">
        <h2>На линейку становись!</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Ранжирование линейного персонала в кадровом деле происходит по трем категориям:</p>
        <ol>
          <li>
            <p>Неквалифицированные кадры.</p>
          </li>
          <li>
            <p>Квалифицированные специалисты.</p>
          </li>
          <li>
            <p>Линейные руководители.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Неква&shy;ли&shy;фи&shy;ци&shy;рованные кадры</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Работа для неквалифицированного персонала предоставляется в различных областях
          хозяйственной деятельности: в торговле, строительстве, общественном питании, гостиничном бизнесе, курьерской
          службе и т.д.</p>
        <p class="half-width">Вакансии:</p>
        <ul class="marker-arrow">
          <li>
            <p>уборщица, мойщица, горничная;</p>
          </li>
          <li>
            <p>продавец, промоутер;</p>
          </li>
          <li>
            <p>диспетчер колл-центра;</p>
          </li>
          <li>
            <p>сборщик заказов, упаковщик;</p>
          </li>
          <li>
            <p>курьер (пеший либо на транспорте);</p>
          </li>
          <li>
            <p>грузчик, разнорабочий;</p>
          </li>
          <li>
            <p>и др.</p>
          </li>
        </ul>
        <p>Обучение происходит на рабочем месте, занимает немного времени. Зарплаты невысокие. Большинство работников относится к
          подобным вакансиям как к временной занятости или «подработке», в результате в компаниях наблюдается «текучка»
          кадров.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2">
    <div class="container">
      <div class="block__title">
        <h2>Квали&shy;фициро&shy;ванные специалисты</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Квалифицированные «линейщики» составляют большинство рабочих, служащих и обслуживающего
          персонала на производстве, в медицине, в образовании, в туризме и т.п.</p>
        <p class="half-width">Вакансии:</p>
        <ul class="marker-arrow">
          <li>
            <p>сварщик, электрик, наладчик оборудования;</p>
          </li>
          <li>
            <p>инженер, водитель;</p>
          </li>
          <li>
            <p>преподаватель, воспитатель, няня;</p>
          </li>
          <li>
            <p>медсестра, фельдшер, провизор;</p>
          </li>
          <li>
            <p>ресепшионист, секретарь;</p>
          </li>
          <li>
            <p>IT-специалист, системный администратор;</p>
          </li>
          <li>
            <p>и др.</p>
          </li>
        </ul>
        <p>Требуется образование не ниже среднего специального, права разных категорий, присвоенные разряды и т.п.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Линейные руководители</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Должностные лица, непосредственно управляющие персоналом и руководящие отдельно взятым
          производственным процессом, линейные управленцы принимают решения на местах.</p>
        <p class="half-width">Вакансии:</p>
        <ul class="marker-arrow">
          <li>
            <p>начальник или мастер цеха;</p>
          </li>
          <li>
            <p>бригадир, прораб;</p>
          </li>
          <li>
            <p>менеджер по продажам;</p>
          </li>
          <li>
            <p>руководитель подразделения, начальник отдела;</p>
          </li>
          <li>
            <p>банковский работник;</p>
          </li>
          <li>
            <p>помощник руководителя;</p>
          </li>
          <li>
            <p>и др.</p>
          </li>
        </ul>
        <p>Основное внимание уделяется опыту работы на аналогичной должности, так как работа ответственная, требует
          контроля дисциплины, соблюдения техники безопасности, сплачивания коллектива.</p>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость подбора линейных специалистов</span>
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
                                        Подбор линейного персонала
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
        <h2>Алгоритм линейного рекрутинга</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Кадровое агентство «КАДР» осуществляет <strong>подбор линейного персонала</strong>, услуги кадрового
          сопровождения и юридическую поддержку на каждом этапе предоставления персонала компании-нанимателю.</p>
        <p class="half-width">Подбор производится поэтапно:</p>
        <ol class="list-bold">
          <li>
            <p>Мониторинг состояния регионального рынка.</p>
            <p>Речь идет как о рынке труда, так и о рынке сбыта продукции. Положение бизнеса в регионе определяет
              запросы потенциальных соискателей.</p>
          </li>
          <li>
            <p>Сравнительный анализ конкурирующих компаний.</p>
            <p>Возможно, высокая конкуренция привела к текучке кадров в отрасли, либо низкая конкуренция понизила и
              заработную плату на аналогичных предприятиях. Формулировка делового предложения во многом зависит от
              фактора конкурентоспособности.</p>
          </li>
          <li>
            <p>Медиапланирование.</p>
            <p>Составляется график показа рекламы в интернете. Используются наружные рекламные площади, реклама на
              транспорте, в ТЦ и т.д.</p>
          </li>
          <li>
            <p>Обговаривание требований.</p>
            <p>Пожелания к квалификации нанимаемого персонала обсуждаются с Заказчиком заранее. Определяется число
              вакансий и количество людей, принимаемых на каждую позицию.</p>
          </li>
          <li>
            <p>Описание и размещение вакансий.</p>
            <p>Используются 6-12 веб-ресурсов о работе, при массовом наборе просматриваются активные резюме, при поиске
              административных ресурсов – не обновляемые, но не удаленные с сайтов.</p>
          </li>
          <li>
            <p>Прием, просмотр и сортировка откликов.</p>
            <p>Обработка отзывов на вакансию производится «по горячим следам». На этапе отсеиваются неподходящие
              кандидатуры.</p>
          </li>
          <li>
            <p>Обратная связь и приглашение на собеседование.</p>
            <p>У подходящих кандидатур необходимо вызвать интерес к вакансии и побудить прийти на собеседование (принцип
              «воронки продаж»).</p>
          </li>
          <li>
            <p>Проведение тестирования и собеседования.</p>
            <p>Индивидуальное собеседование занимает 15-20 минут. При массовом собеседовании презентация вакансии
              предоставляется 1-2 десяткам претендентов одновременно.</p>
          </li>
          <li>
            <p>Оформление персонала и выход на работу.</p>
            <p>Пакет отобранных резюме передается в отдел кадров компании-нанимателя. Гонорар агентству выплачивается по
              факту выхода сотрудников на рабочие места.</p>
          </li>
        </ol>
        <p>Поиск услуг и специалистов включает автоматизированный сбор резюме кандидатов, использование реферальных
          программ, применение аутсорсинга и аутстаффинга. Весь
          спектр современных кадровых технологий доступен нашим клиентам с первого дня обращения.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Чем выгодно обратиться в компанию «КАДР»?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Внешний рекрутинг повышает доверие кандидатов к компании-нанимателю, поскольку внутренний
          кадровик выглядит более предвзято настроенным, чем HR-профи. Смысл рекрутмента заключается в удовлетворении
          запросов работодателей. Мы помогаем составлять описание и размещать вакансии и резюме, поддерживаем обе
          стороны, консультируем по вопросам адаптации на новом месте работы.
          Наши эйчары владеют коммуникативными и коммуникационными навыками, разбираются в маркетинге, психологии,
          бизнес-этике и т.д.</p>
        <p class="half-width">Профессиональное содействие при <strong>подборе линейного персонала</strong>:</p>
        <ol>
          <li>
            <p>Сокращает затраты времени и сил нанимателя на поиск сотрудников.</p>
          </li>
          <li>
            <p>Экономит финансы, которые направляются в новые бизнес-проекты.</p>
          </li>
          <li>
            <p>Гарантированно поставляет тех, кто требуется, а не случайных гастарбайтеров.</p>
          </li>
          <li>
            <p>Обеспечивает замену сотрудника в случае необходимости.</p>
          </li>
          <li>
            <p>Подкрепляется юридически (договором с гарантией).</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="custom-block block-1">
    <div class="container">
      <div class="block__title">
        <h2>Как заказать услуги в компании «КАДР»?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p>Нет ничего проще! Приходите к нам в офис либо связывайтесь с нами по телефону или по электронной почте. На
          сайте есть специальная форма обратной связи, заполняемая за 1 минуту.</p>
        <p>Кадровое агентство «КАДР» радо помочь растущему бизнесу процветающей страны! Подбор специалистов –
          ответственный процесс, и мы знаем как провести его с комфортом!</p>
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
    "name": "Подбор линейного персонала",
    "image": "https://hrbel.by/wp-content/webp-express/webp-images/themes/kadr2/image/linein-pers.png.webp",
    "description": "Оказываем помощь в подборе линейных сотрудников",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/wp-content/webp-express/webp-images/themes/kadr2/image/linein-pers.png.webp",
        "priceCurrency": "BYN",
        "price": "700",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }

</script>
<?php get_footer(); ?>