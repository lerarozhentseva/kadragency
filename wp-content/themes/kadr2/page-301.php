<?php
/*
Template Name: Оценка и тестирование персонала
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="evaluation-and-testing-title page-header">
    <div class="container">
      <div class="evaluation-and-testing-title__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Тести&shy;ро&shy;ва&shy;ние со&shy;труд&shy;ни&shy;ков ком&shy;па&shy;нии</h1>
        <p>Оценка персонала – это фактор успеха и научный подход
          к организации труда. Не всегда можно визуально отследить результативность труда сотрудников организации.
          Кадровое агентство «КАДР» знает как объективно и всесторонне оценить вклад и отдачу каждого члена команды.
        </p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="evaluation-and-testing-title__item page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/evaluation-and-testing/evaluation-and-testing-title.webp"
          alt="Делегация">
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#evaluation-key-to-success"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="evaluation-key-to-success" class="evaluation-key-to-success">
    <div class="container">
      <div class="title-part-mobile__item">
        <p><strong>Оценка персонала</strong> – это фактор успеха и научный подход
          к организации труда. Не всегда можно визуально отследить результативность труда сотрудников организации.
          Кадровое агентство «КАДР» знает как объективно и всесторонне оценить вклад и отдачу каждого члена команды.
        </p>
      </div>
      <div class="evaluation-key-to-success__title">
        <h2>Оценка сотрудников – залог успеха</h2>
        <div class="underline-block"></div>
      </div>
      <div class="evaluation-key-to-success__item">
        <p><strong>Профессиональная оценка персонала</strong> поможет руководителю принимать серьезные управленческие
          решения и повышать эффективность работы подчиненных. Чтобы результат был адекватным и исчерпывающим нужен
          профессиональный подход.</p>
      </div>
    </div>
  </div>
  <div class="when-evaluation-help">
    <div class="container">
      <div class="when-evaluation-help__title">
        <h2>Когда помогают услуги оценки персонала</h2>
        <div class="underline-block"></div>
      </div>
      <div class="when-evaluation-help__image">
        <img src="<?= get_template_directory_uri(); ?>/image/evaluation-and-testing/evaluation-and-testing-1.webp"
          alt="Обсуждение деловых процессов">
      </div>
      <div class="when-evaluation-help__item">
        <p>Тестирование работников пригодится во многих аспектах системы управления персоналом – от подбора линейных
          сотрудников, до его стимулирования и развития:</p>
        <ul>
          <li>
            <div class="item__image">
              <div class="border">
                <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
              </div>
            </div>
            <div class="item__text">
              <h5>Планирование</h5>
              <p>Определяя потребность компании или предприятия
                в количестве и профессиональном составе, разумно будет провести качественную оценку.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
              </div>
            </div>
            <div class="item__text">
              <h5><a class="text-link" href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">Подбор</a></h5>
              <p>Оценка кандидатов и эффективность вновь принятых сотрудников напрямую зависитот критериев отбора.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
              </div>
            </div>
            <div class="item__text">
              <h5><a class="text-link"
                  href="<?= get_site_url(); ?>/kadrovyj-konsalting/korporativnoe-obuchenie/">Обучение</a></h5>
              <p>Потребность в переобучении, повышении квалификации, а также уровень и адекватность самих
                образовательных программ определяется оценочной методологией.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
              </div>
            </div>
            <div class="item__text">
              <h5>Кадровый резерв</h5>
              <p>Кадровый резерв формируется на основании экспертной оценки персонала.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
              </div>
            </div>
            <div class="item__text">
              <h5>Анализ</h5>
              <p>Человеческий ресурс предприятия можно точнее определить с помощью специализированных стандартов и
                критериев.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
              </div>
            </div>
            <div class="item__text">
              <h5>Развитие</h5>
              <p>Кадровый потенциал выявляют и определяют вектор развития на основании оценки сотрудников.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
              </div>
            </div>
            <div class="item__text">
              <h5>Стимулирование</h5>
              <p><a class="text-link"
                  href="<?= get_site_url(); ?>/kadrovyj-konsalting/sistema-motivacii-personala/">Мотивационная
                  система</a> не будет результативной без опоры на базовые данные, которые дает экспертное мнение,
                подкрепленное результатами тестирования сотрудников.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150 pb-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость тестирования сотрудников</span>
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
                                          Встреча с директором/собственником компании, получение первичной информации о ситуации в коллективе
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                  <br><br>
                                                  1 сотрудник (2 часа)
                                                  <br><br><br>
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    400
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
                                          Подготовка анкет и тестов
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                  до 5 тестов/анкет (до 5 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    400
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                  до 15 тестов/анкет (до 15 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    650
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                  до 35 тестов/анкет (до 35 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    800
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Проведение тестирования и обработка анкет, тестов, предоставление результатов тестирования/анкетирования, разработка рекомендаций по индивидуальной и групповой работе с каждым сотрудником и проведения обучения в компании
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 тестов/анкет (до 5 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    900
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 15 тестов/анкет (до 15 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1100
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 35 тестов/анкет (до 35 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1500
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
  <div class="goals-and-opportunities">
    <div class="container container-padding">
      <div class="goals-and-opportunities__title">
        <h2>Цели и возможности тестирования сотрудников компании</h2>
        <div class="underline-block"></div>
      </div>
      <div class="goals-and-opportunities__item item-1">
        <p><strong>Тестирование персонала</strong> на предприятии – это база для проведения кадровых процедур, таких как
          прием, увольнение, оценка профессиональных компетенций, обучение и проведение аттестации, перспективы
          кадрового роста. Решение о реорганизации предприятия, сокращении или расширении штата лучше принимать, когда
          такая всесторонняя оценка проведена.</p>
      </div>
      <div class="goals-and-opportunities__item item-2">
        <p>Услуга оценки персонала преследует такие цели:</p>
        <div class="item__block block-1">
          <p>Соотносит затраты на содержание сотрудника и отдачу от деятельности, таким образом можно понять сколько
            «стоит» каждый человек в компании;</p>
        </div>
        <div class="item__block block-2">
          <p>Решает, готов ли кто-то из членов коллектива пойти на повышение
            и занять вакантную руководящую должность или лучше поискать кандидатов на внешнем рынке труда;</p>
        </div>
        <div class="item__block block-3">
          <p>Выявляет скрытые лидерские качества и моделирует поведение
            в кризисной ситуации каждого сотрудника.</p>
        </div>
      </div>
      <div class="goals-and-opportunities__item item-3">
        <p>Понятно, что линейным опросом исчерпывающего результата
          не добиться. HR-политика переживает период развития методик
          и подходов к оценке персонала. На практику переносятся многие зарубежные методики.</p>
        <p>Единой системы, а тем более оценочной теории не существует. Тем важнее обращаться к специалистам. Эксперты
          кадрового агентства «КАДР» смогут оценить ситуацию, подготовят и проведут профессиональное тестирование
          сотрудников.</p>
      </div>
    </div>
  </div>
  <div class="criteria-for-personal-evaluation">
    <div class="container">
      <div class="criteria-for-personal-evaluation__title">
        <h2>Критерии персональной оценки</h2>
        <div class="underline-block"></div>
      </div>
      <div class="criteria-for-personal-evaluation__item item-1">
        <p>Чтобы выяснить соответствие работника требованиям
          и ожиданиям компании и клиентов, существует множество критериев. Их подбор определяется целями оценки
          сотрудников, спецификой предприятия и экономическими особенностями региона. Для оценки линейно-рабочего
          персонала и топ-менеджмента выбор оценочных суждений будет отличаться.</p>
        <p>Объективность обеспечивается за счет разработки тестов не под конкретную личность, а для должностной функции,
          модели поведения. Понятность подразумевает прозрачные результаты и соответствие тестируемой должности.</p>
      </div>
      <div class="criteria-for-personal-evaluation__item item-2">
        <div class="item__text">
          <p>В основе оценки персонала лежит дуальный (двойственный) подход.</p>
          <ol>
            <li>
              <p>Тестируются компетенции конкретного сотрудника, использование в конкретной работе, поведение в
                различных ситуациях и личностные характеристики.</p>
            </li>
            <li>
              <p>Анализируются конкретные персональные результаты работника: чего он достиг, какие задачи из
                поставленных решил.</p>
            </li>
          </ol>
        </div>
        <div class="item__image">
          <img src="<?= get_template_directory_uri(); ?>/image/evaluation-and-testing/evaluation-and-testing-2.webp"
            alt="Работа архитектором">

        </div>
      </div>
    </div>
  </div>
  <div class="evaluation-criteria">
    <div class="container">
      <div class="evaluation-criteria__title">
        <h2>Критерии оценок тестирования сотрудников</h2>
        <div class="underline-block"></div>
      </div>
      <div class="evaluation-criteria__item item-1">
        <p>Эксперты кадрового агентства «КАДР» определяют и разрабатывают совместно с кадровой службой предприятия,
          руководителем фирмы. Так мы добиваемся точности и объективности.</p>
        <p>Распространенные методы оценки персонала – это аттестация (проводится в большинстве компаний),
          тестирование, интервьюирование, деловая игра, ситуационные задачи, внешняя экспертная оценка.</p>
      </div>
      <div class="evaluation-criteria__item item-2">
        <p>Вот несколько распространенных подходов к оценке сотрудников.</p>
        <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
        <h5>Матричный</h5>
        <p>Сравнивает конкретного человека с матричной моделью-идеалом работника.</p>
        <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
        <h5>Схема выборочных характеристик</h5>
        <p>Основывается на выделении лучших и наименее заметных сторон сотрудника.</p>
        <img src="<?= get_template_directory_uri(); ?>/image/circles.svg" alt="Иконки кругов">
        <h5>Метод «360°»</h5>
        <p>Методика, когда оценку сотрудника с разных сторон дается руководителем, коллегами, подчиненными, клиентами,
          им самим.</p>
      </div>
      <div class="evaluation-criteria__item item-3">
        <p>Также оценивается работа сотрудника в целом и создается профессиональный портрет в итоге беседы
          с руководителем и экспертной комиссией. На основании такой всесторонней проработки становятся очевидными его
          перспективы в коллективе и профессиональной карьере.</p>
        <p>В итоге получаем экономию трудового времени и заработной платы. Трудовые ресурсы используются продуктивно, а
          затраты на некомпетентных работников обоснованно снижаются.</p>
      </div>
    </div>
  </div>
  <div class="few-words-about-kpi">
    <div class="container">
      <div class="few-words-about-kpi__title">
        <h2>Несколько слов о KPI</h2>
        <div class="underline-block"></div>
      </div>
      <div class="few-words-about-kpi__item">
        <p>Термин KPI звучит, когда речь заходит о пользе человека
          для компании. Ключевые показатели эффективности (от англ.
          Key Performance Indicators) – это система, основанная на объективной оценке успехов каждого члена в команде.
          По этой системе разрабатывается табличный вариант – профессиональный портрет каждого работника. Он полно,
          понятно и удобно охватывает количественные, качественные, персональные и общекомандные, а также оценочные
          показатели, поступившие от членов коллектива, руководства
          и экспертов</p>
        <p>Анализируется базовое значение сотрудника, которое берется за точку отсчета, прописывается обязательный
          уровень компетенций и тот идеал уровня, который должен быть достигнут.
          На основании проведенного таким образом анализа выявляется результативность работника
          и дальнейшая судьба в компании. Руководитель получает развернутую характеристику с выводами о профпригодности
          человека и рекомендациями на случай управленческих решений.</p>
      </div>
    </div>
  </div>
  <div class="all-that-need-for-evaluation">
    <div class="container">
      <div class="all-that-need-for-evaluation__title">
        <h2>Все, что нужно для быстрого тестирования сотрудников компании</h2>
        <div class="underline-block"></div>
      </div>
      <div class="all-that-need-for-evaluation__item">
        <p>Кадровое агентство «КАДР» проведет экспертную оценку профессиональных знаний и уровня подготовки команды.
          Поможем разработать оценочный тест для соискателей на вакантные должности, проконтролировать усвоение
          материала сразу после прохождения обучения или тренинга.
          Вы узнаете о скрытых потенциалах работников, повысите эффективность, в целом улучшите работу команды,
          оптимизируете расходы на обучение и развитие кадрового резерва.</p>
        <p>Ждем звонков и заявок на сайт. Разработаем проект «под ключ» для каждого клиента, гарантируем
          конфиденциальность
          и защиту персональных данных.
          Оценка персонала работает как для малого бизнеса, так и для лидеров рынка.</p>
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
	"@context": "http://schema.org/",
	"@type": "Product",
	"name": "Тестирование сотрудников компании",
	"image": "https://hrbel.by/wp-content/themes/kadr2/image/evaluation-and-testing/evaluation-and-testing-title.webp",
	"description": "Проведём профессиональную оценку знаний и труда персонала для успешного развития организации.",
	"offers": {
		"@type": "Offer",
		"priceCurrency": "BYN",
		"price": "400",
		"url": "https://hrbel.by/kadrovyj-konsalting/ocenka-i-testirovanie-personala/",
		"itemCondition": "https://schema.org/NewCondition",
		"priceValidUntil": "2025-01-01"
	}
}
</script>


<?php get_footer(); ?>