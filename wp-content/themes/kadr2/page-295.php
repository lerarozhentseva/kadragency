<?php
/*
Template Name: Кадровый аудит
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="personnel-audit-title page-header">
    <div class="container">
      <div class="personnel-audit-title__item page-header__item item-1">
        <div class="breadcrumbs"> 
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Кадровый аудит</h1>
        <p><strong>Кадровый аудит</strong> – сравнительно новое направление в системе управления персоналом. Все знают о
          бухгалтерском аудите. Теперь его принципы взяли на вооружение HR-службы
          и успешно применяют. Ждете проверку, считаете, что не все
          в порядке с учетом кадров, пытаетесь понять, насколько компетентен кадровик или целая служба, расстаетесь с
          HR- менеджером и хотите грамотно оформить прием-передачу дел?
          Экспертная оценка кадрового документооборота на соответствие нормам трудового и налогового законодательства,
          иным требованиям и правилам, принятым на уровне государства.
          Вот, что нужно.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="personnel-audit-title__item page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/personnel-audit/personnel-audit-title.webp"
          alt="Обсуждение проекта за столом">
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#white-spots-personnel-records"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="white-spots-personnel-records" class="white-spots-personnel-records">
    <div class="container">
      <div class="title-part-mobile__item">
        <p><strong>Кадровый аудит</strong> – сравнительно новое направление в системе управления персоналом. Все знают о
          бухгалтерском аудите. Теперь его принципы взяли на вооружение HR-службы
          и успешно применяют. Ждете проверку, считаете, что не все
          в порядке с учетом кадров, пытаетесь понять, насколько компетентен кадровик или целая служба, расстаетесь с
          HR- менеджером и хотите грамотно оформить прием-передачу дел?
          Экспертная оценка кадрового документооборота на соответствие нормам трудового и налогового законодательства,
          иным требованиям и правилам, принятым на уровне государства.
          Вот, что нужно.</p>
      </div>
      <div class="white-spots-personnel-records__title">
        <h2>«Белые пятна» кадрового учета</h2>
        <div class="underline-block"></div>
      </div>
      <div class="white-spots-personnel-records__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Кадровое агентство «КАДР» выбрало <strong>аудит кадрового делопроизводства</strong> направлением деятельности
          не случайно. Мы часто сталкиваемся с тем, что к ведению кадровых документов
          в компании относятся без должного внимания, считают делом второстепенной важности, откладывают на потом. Но
          когда наступает то самое «потом», разобраться бывает сложно: хронология нарушена, часть документов потеряна
          или ее не существовало. Есть такие нюансы, которые
          никак нельзя называть и считать мелочами. </p>
      </div>
      <div class="white-spots-personnel-records__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда">
        <p>Это ведение трудовых книжек, подсчет трудового стажа, гарантий и компенсаций по временной нетрудоспособности,
          защита персональных данных, учет рабочего времени и др.
          За эти и другие нарушения работодателю грозят немалые штрафы, которых можно и нужно избежать. Существует и
          моральная сторона вопроса. Неправильно поданные или ложно интерпретированные сведения, касающиеся трудовой
          деятельности сотрудника, приводят к возникновению конфликтов, трудовых споров и судебных исков.</p>
      </div>
    </div>
  </div>
  <div class="types-of-personnel-audit">
    <div class="container">
      <div class="types-of-personnel-audit__title">
        <h2>Виды кадрового аудита</h2>
        <div class="underline-block"></div>
      </div>
      <div class="types-of-personnel-audit__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
        <p><strong>Аудит кадровых документов</strong> бывает двух видов: полным и частичным. Первый охватывает кадровый
          учет всех сотрудников. Второй проводится выборочно в разрезе должностей или отделов. Системные ошибки в
          построении организации документов выявляются и в том, и в другом случае. Еще одна классификация аудита
          кадровых документов разделяет на внутренний и внешний. Соответственно, он проводится силами самой компании
          либо с приглашением сторонней экспертной организации.</p>
      </div>
      <div class="types-of-personnel-audit__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
        <p>Внутренний аудит кадрового делопроизводства хорош для маленьких компаний с небольшой численностью
          сотрудников, где функции ведения кадрового учета возложены, на бухгалтера, секретаря, реже юриста или самого
          руководителя организации. Тогда
          и разовый контроль можно поручить одному из специалистов из этого списка. Другое дело – крупные компании с
          большой штатной численностью и разветвленной структурой. Тогда <strong>проведение кадрового аудита</strong>
          отнимает много времени, отвлекать сотрудников на эту работу в ущерб основной
          не имеет смысла. Рациональнее пригласить стороннюю компанию, профессионально оказывающую данную услугу.</p>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость кадрового аудита</span>
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
  <div class="what-personnel-audit-contain">
    <div class="container container-padding">
      <div class="what-personnel-audit-contain__title">
        <h2>Что включает пакет услуг кадрового аудита</h2>
        <div class="underline-block"></div>
      </div>
      <div class="what-personnel-audit-contain__item item-1">
        <div class="item__text">
          <p>Кадровое агентство «КАДР» проводит <strong>кадровый аудит организации</strong> в три последовательных
            этапа. В них входят:</p>
          <ol>
            <li>
              <p>Фактическая проверка ведения трудовой документации.</p>
            </li>
            <li>
              <p>Обзор ошибок и недостающих номенклатурных позиций, рекомендации по их доработке.</p>
            </li>
            <li>
              <p>Исправление недочетов, восполнение пробелов, предоставление типовой модели политики кадрового
                делопроизводства.</p>
            </li>
          </ol>
          <p>Кадровый аудит ведется сразу по нескольким направлениям:</p>
          <ul>
            <li>
              <p>Документы, имеющиеся в наличии, проверяются на соответствие требованиям законодательства;</p>
            </li>
            <li>
              <p>Документооборот компании проверяется на наличие/отсутствие полного комплекта, предусмотренного
                нормативными актами, принятыми в Беларуси;</p>
            </li>
            <li>
              <p>Отдельно изучаются документы из так называемого сегмента повышенного риска — это оформление трудовых
                книжек, трудоустройство иностранных граждан, учет сверхурочных работ, правильность оформления
                испытательного срока, трудовые договора, должностные инструкции и соглашения о материальной
                ответственности, соблюдение графика отпусков, наложение дисциплинарных взысканий и прочее.</p>
            </li>
          </ul>
        </div>
        <div class="item__image">
          <img src="<?= get_template_directory_uri(); ?>/image/personnel-audit/personnel-audit-1.webp"
            alt="Удаленная работа">
        </div>
      </div>
      <div class="what-personnel-audit-contain__item item-2">
        <p>По итогам проверочных действий предоставляется письменный отчет и рекомендации по устранению недочетов.
          Услуги кадрового аудита включают сопровождение проверок трудинспекции.
          От руководителя организации требуется только определение предмета и целей аудита кадрового делопроизводства,
          сроков проведения и ответственных лиц, издание соответствующего приказа, предоставление документов согласно
          перечню. </p>
        <p>Кадровое агентство «КАДР» заостряет внимание руководства на рисках компании, то есть тех уязвимых местах в
          кадровом сегменте документооборота,
          где возможны санкции со стороны контролирующих органов. Считаем, что спорные ситуации в случае с сотрудниками
          также лучше устранять до их возникновения и минимизировать риски
          в сфере трудовых прав заранее.</p>
      </div>
      <div class="what-personnel-audit-contain__item item-3">
        <p>По итогам проведения кадрового аудита предоставляется письменный отчет
          и рекомендации по устранению недочетов. Услуги кадрового аудита включают сопровождение проверок трудинспекции.
          От руководителя организации требуется только определение предмета и целей аудита, сроков проведения
          и ответственных лиц, издание соответствующего приказа, предоставление документов согласно перечню. Кадровое
          агентство «КАДР» заостряет внимание руководства
          на рисках компании, то есть тех уязвимых местах в кадровом сегменте документооборота, где возможны санкции со
          стороны контролирующих органов. Считаем, что спорные ситуации в случае с сотрудниками также лучше устранять до
          их возникновения и минимизировать риски в сфере трудовых прав заранее.</p>
      </div>
    </div>
  </div>
  <div class="when-personnel-audit-need">
    <div class="container">
      <div class="when-personnel-audit-need__title">
        <h2>Когда еще кадровый аудит необходим</h2>
        <div class="underline-block"></div>
      </div>
      <div class="when-personnel-audit-need__item item-1">
        <p>Бывают ситуации в производственной деятельности, не связанные со сторонними обстоятельствами (проверкой),
          когда возникает потребность
          в проведении кадрового аудита. Вот наиболее распространенные:</p>
      </div>
      <div class="when-personnel-audit-need__item item-2">
        <p>Уход руководителя компании;</p>
      </div>
      <div class="when-personnel-audit-need__item item-3">
        <p>Смена руководителя кадровой службы; инспектора по кадрам или сотрудника, ответственного за кадровое
          делопроизводство;</p>
      </div>
      <div class="when-personnel-audit-need__item item-4">
        <p>Конфликтная ситуация с одним или несколькими членами коллектива, когда возникает вероятность жалоб и судебных
          разбирательств с их стороны;</p>
      </div>
      <div class="when-personnel-audit-need__item item-5">
        <p>Изменение законодательства в сфере кадрового учета и трудового права.</p>
      </div>
    </div>
  </div>
  <div class="is-it-possible-without-audit">
    <div class="container">
      <div class="is-it-possible-without-audit__title">
        <h2>А можно без кадрового аудита?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="is-it-possible-without-audit__image">
        <img src="<?= get_template_directory_uri(); ?>/image/personnel-audit/personnel-audit-2.webp"
          alt="Офисный стол с ноутбуком">
      </div>
      <div class="is-it-possible-without-audit__text">
        <p>Конечно, можно. Это совсем не обязательная процедура, законом
          не оговорены ее введение и периодичность таких процедур.
          Но с аудитом организация сможет сберечь не только деньги,
          но и репутацию, что иногда дороже. Размер штрафных санкций обычно превышает затраты на услуги кадрового
          агентства «КАДР». Даже одна такая аудиторская проверка позволяет нашим клиентам оптимизировать расходы на
          содержание кадровых служб.</p>
        <p>Это одна из немногих HR-услуг, где применяются различные тарифы и можно гибко выбрать размер оплаты, исходя
          из реальных потребностей организации.</p>
        <ol>
          <li>
            <p>Почасовая оплата.</p>
          </li>
          <li>
            <p>Фиксированная за проект.</p>
          </li>
          <li>
            <p>Комбинированная.</p>
          </li>
        </ol>
        <p>Руководители предприятий в Минске и других городах Республики Беларусь предпочитают фиксированную оплату
          стоимости услуг кадрового агентства «КАДР». Цены имеют устойчивую тенденцию к росту, так как востребованность
          растет.</p>
        <p>С нашей помощью Вы получаете возможность:</p>
        <ul>
          <li>
            <p>Привлечь к работе высококлассных специалистов без увеличения штатной численности;</p>
          </li>
          <li>
            <p>Получить объективную оценку и независимый взгляд на дела в компании со стороны;</p>
          </li>
          <li>
            <p>Повысить <a class="text-link" href="<?= get_site_url(); ?>/hr-brending/">авторитет предприятия</a> на
              рынке труда.</p>
          </li>
        </ul>
        <p>Обращайтесь к нам, чтобы познакомиться с руководителем направления и аудиторами, определить цели, уточнить
          пожелания
          и обговорить стоимость. Мы готовы начать кадровый аудит сразу после того, как обговорим условия
          сотрудничества.</p>
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
    "name": "Кадровый аудит",
    "image": "https://hrbel.by/wp-content/themes/kadr2/image/personnel-audit/personnel-audit-title.webp",
    "description": "Проводим аудит кадровых документов и проверяем их на соответствие требованиям законодательства",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 5,
        "reviewCount": 8
    },
    "offers": {
        "@type": "Offer",
        "url": "https://hrbel.by/kadrovyj-konsalting/kadrovyj-audit/",
        "priceCurrency": "BYN",
        "price": "1100",
        "priceValidUntil": "2025-01-01",
        "availability": "https://schema.org/InStock"
    }
    }

</script>
<?php get_footer(); ?>