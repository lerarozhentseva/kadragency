<?php
/*
Template Name: Корпоративное обучение
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="corporate-training-title page-header">
    <div class="container">
      <div class="corporate-training-title__item page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Кор&shy;по&shy;ра&shy;тивное обучение со&shy;труд&shy;ни&shy;ков</h1>
        <p>
          В современном мире, где конкуренция на рынке труда становится все более острой, тренинги для персонала
          становятся неотъемлемой частью успешной стратегии
          компании. Они не только повышают профессиональные навыки сотрудников, но и мотивируют их на постоянное
          самосовершенствование.
          Корпоративное обучение в любой компании - это не просто инвестиция в персонал, это инвестиция в будущее
          бизнеса.
        </p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="corporate-training-title__item page-header__item item-2">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-title.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-title.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-title.jpg"
            alt="Работа в коллективе">
        </picture>
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#start-investing-in-yourself"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="start-investing-in-yourself" class="start-investing-in-yourself">
    <div class="container">
      <div class="start-investing-in-yourself__title">
        <h2>Начните вкладывать в себя</h2>
        <div class="underline-block"></div>
      </div>
      <div class="start-investing-in-yourself__item">
        <p>Если считаете нереальным, чтобы сотрудники приходили
          в офис пораньше, а уходить с работы не спешили, мы докажем, что это возможно. Корпоративное обучение –
          секретное оружие или волшебная пилюля, благодаря которой люди будут скучать по выходным и мечтать о том, чтобы
          скорее началась рабочая неделя.
          <strong>Корпоративное обучение персонала</strong> – это выгодное инвестирование в актив компании.
        </p>
      </div>
    </div>
  </div>
  <div class="what-is-corporate-training">
    <div class="container">
      <div class="what-is-corporate-training__title">
        <h2>Что дает корпоративное обучение для компании</h2>
        <div class="underline-block"></div>
      </div>
      <div class="what-is-corporate-training__item">
        <ol>
          <li>
            <p>Повышается эффективность сотрудников даже в условиях постоянного изменения требований рынка.</p>
            <p>После прохождения обучения работники демонстрируют увеличение результативности. Рост производительности
              труда возрастает по оценочной шкале от 8,5 до 10%. В то время как инвестирование непосредственно в процесс
              производства увеличивает этот показатель (производительность персонала) не более 3,8%.</p>
          </li>
          <li>
            <p>Улучшается имидж компании, так как
              создает стимул для построения карьеры.</p>
            <p>Потенциальные соискатели учитывают, что работодатель указывает корпоративное обучение в описании
              вакансий. По данным портала Head Hunter от 38% до 63% соискателей в зависимости от возраста и опыта работы
              этот аргумент учитывают, как важный.</p>
          </li>
          <li>
            <p>Оценка потенциала
              сотрудников, готовность их к профессиональному росту помогает в принятии кадровых решений.</p>
            <p>Общие коллективные дела, в том числе и совместное обучение, делают коллектив сплоченнее. Лояльные
              сотрудники заинтересованы в успехе компании, работают во взаимодействии и с большей отдачей на результат.
            </p>
          </li>
          <li>
            <p>Ну и последний по очереди, но не по значению аргумент в пользу корпоративного обучения сотрудников –
              позволяет сократить затраты на поиск специалистов за счет повышения профессионализма собственных.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="lets-dispel-fears">
    <div class="container">
      <div class="lets-dispel-fears__title">
        <h2>Давайте развеем страхи</h2>
        <div class="underline-block"></div>
      </div>
      <div class="lets-dispel-fears__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-1.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-1.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-1.jpg"
            alt="Человек работает вид сверху">
        </picture>
      </div>
      <div class="lets-dispel-fears__item">
        <p>Кадровое агентство «КАДР» давно занимается корпоративным обучением персонала. Мы понимаем, какие опасения оно
          вызывает, и знаем, как этому противостоять.</p>
        <ul>
          <li>
            <div class="item__image">
              <div class="border">
                <svg width="35" height="45" viewBox="0 0 35 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="5.5" width="29" height="39" rx="4.5" stroke="#261104" />
                  <rect x="6" y="14" width="11" height="1" fill="#261104" />
                  <rect x="6" y="21" width="18" height="1" fill="#261104" />
                  <rect x="6" y="28" width="18" height="1" fill="#261104" />
                  <rect x="16" y="35" width="8" height="1" fill="#261104" />
                  <circle cx="25" cy="10" r="9.5" fill="#FBF6F4" stroke="#261104" />
                  <path d="M25 4V11H28" stroke="#261104" />
                </svg>
              </div>
            </div>
            <div class="item__text">
              <span>Страх №1.</span>
              <h5>Предубеждение руководства</h5>
              <p>Логично опасение, что сотрудник, прошедший корпоративное обучение и получивший профессиональные знания
                за счет компании, уйдет к конкурентам. Для страховки с сотрудником подписывается дополнительное
                соглашение к трудовому договору, согласно которому он обязуется после повышения квалификации отработать
                в компании определенное время или возместить расходы при увольнении.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.5 13C7.5 16.6364 8.90874 24.4545 15.0906 24.4545C21.2724 24.4545 22.8178 17.1818 22.8178 13.5454"
                    stroke="#261104" stroke-width="0.8" />
                  <path
                    d="M18.3447 12.0299C15.7092 12.0299 12.488 9.67296 11.2068 8.49451C8.57124 13.343 7.36328 14.4191 7.36328 11.5248C7.36328 9.50461 7.91235 6.4743 11.2068 5.96925C11.7559 4.95915 14.8673 4.4541 16.6975 4.4541C22.4079 4.4541 23.1034 10.5147 22.7373 13.545C22.3713 13.04 20.9803 12.0299 18.3447 12.0299Z"
                    stroke="#261104" stroke-width="0.8" />
                  <path
                    d="M15.1843 29.7979L10.7268 25.3633C10.1906 25.3633 7.01226 26.605 6.45508 27.1371L12.0269 32.636L15.1843 29.7979ZM15.1843 29.7979L19.6418 25.3633C20.3847 25.3633 23.3563 26.605 23.7278 26.9597L18.8989 32.636L15.1843 29.7979Z"
                    stroke="#261104" stroke-width="0.8" />
                  <path
                    d="M10.4617 25.3633C6.66881 26.0704 -0.479227 29.6057 1.27131 38.0906H27.9667C29.0087 34.2724 27.6957 27.0603 19.214 25.3633"
                    stroke="#261104" stroke-width="0.8" />
                  <path
                    d="M18.2778 3C18.2778 1.49656 19.4966 0.277778 21 0.277778H35C36.5034 0.277778 37.7222 1.49656 37.7222 3V7C37.7222 8.50344 36.5034 9.72222 35 9.72222H18.2778V3Z"
                    fill="#FBF6F4" stroke="#261104" stroke-width="0.555556" />
                  <circle cx="22.6667" cy="4.99967" r="1.38889" stroke="#261104" stroke-width="0.555556" />
                  <circle cx="27.6667" cy="4.99967" r="1.38889" stroke="#261104" stroke-width="0.555556" />
                  <circle cx="32.6667" cy="4.99967" r="1.38889" stroke="#261104" stroke-width="0.555556" />
                </svg>
              </div>
            </div>
            <div class="item__text">
              <span>Страх №2.</span>
              <h5>Скепсис сотрудника</h5>
              <p>Часто персонал противится открыто или тайно саботирует изменения, которые сопровождаются выходом из
                зоны комфорта. Обучение входит в число таких факторов. Образование как самоцель мало кого прельщает.
                Необходимо адекватное стимулирование. Например: карьерные перспективы роста, повышение оплаты труда,
                облегчение процесса производства.</p>
            </div>
          </li>
          <li>
            <div class="item__image">
              <div class="border">
                <svg width="30" height="43" viewBox="0 0 30 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="3.5" width="29" height="39" rx="4.5" stroke="#261104" />
                  <rect x="13" y="14" width="11" height="1" fill="#261104" />
                  <rect x="13" y="23" width="11" height="1" fill="#261104" />
                  <rect x="13" y="32" width="11" height="1" fill="#261104" />
                  <path d="M6 14L7.66667 16L11 12" stroke="black" />
                  <path d="M6 23L7.66667 25L11 21" stroke="black" />
                  <path d="M6 32L7.66667 34L11 30" stroke="black" />
                  <rect x="8.5" y="1.5" width="13" height="6" rx="1.9" fill="#FBF6F4" stroke="#261104" />
                  <path
                    d="M13.5 0.882353C13.5 0.671185 13.6712 0.5 13.8824 0.5H16.1176C16.3288 0.5 16.5 0.671185 16.5 0.882353V1C16.5 1.82843 15.8284 2.5 15 2.5C14.1716 2.5 13.5 1.82843 13.5 1V0.882353Z"
                    fill="#FBF6F4" stroke="#261104" />
                </svg>
              </div>
            </div>
            <div class="item__text">
              <span>Страх №3.</span>
              <h5>Много образования тоже нехорошо</h5>
              <p>Совершенно, верно. Переизбыток корпоративного образования, если он действует в ущерб выполнению
                сотрудниками основных задач, пойдет не во благо, а превратится во зло. Поэтому так необходимо соблюдать
                баланс между корпоративными знаниями и их применением на практике. Кадровое агентство «КАДР» поможет
                составить план обучения, проработать тематику и периодичность так, чтобы с передовыми знаниями бизнес не
                проигрывал в конкурентной рыночной борьбе.</p>
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
                    <span>Стоимость тренингов для сотрудников</span>
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
                                            Стоимость работ, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Стоимость тренингов для сотрудников
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Проведение тренингов/вебинаров/обучения сотрудников внутри компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                    Цена по запросу
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Тимбилдинг
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
  <div class="secret-for-the-leader">
    <div class="container container-padding">
      <div class="secret-for-the-leader__title">
        <h2>Секрет для руководителя</h2>
        <div class="underline-block"></div>
      </div>
      <div class="secret-for-the-leader__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-2.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-2.jpg"
            type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/corporate-training/corporate-training-2.jpg"
            alt="Достижение корпоративных целей">
        </picture>
      </div>
      <div class="secret-for-the-leader__item">
        <p><strong>Корпоративное обучение</strong>, его актуальность и необходимость сегодня очевидны. Но кадровое
          агентство «КАДР» знает, что у руководства часто не хватает времени на это. Рутинные дела часто оттягивают на
          себя приоритеты, а планы так и остаются в радужной перспективе.</p>
        <p>Есть один секрет: за неимением времени начните вкладывать в себя – в собственное обучение. Корпоративное
          обучение руководителей помогает грамотно выстроить рабочий процесс, подобрать работоспособную команду и
          повысить прибыль. Важное примечание: с Вами будет работать персональный коуч.</p>
        <p>Популярные тренинги для руководителя:</p>
        <ul>
          <li>
            <p>Лидерство;</p>
          </li>
          <li>
            <p>Управление людьми в команде;</p>
          </li>
          <li>
            <p>Маркетинг</p>
          </li>
          <li>
            <p>Управление процессами и цифровизация бизнеса;</p>
          </li>
          <li>
            <p>Персональная финансовая эффективность;</p>
          </li>
          <li>
            <p>Искусство публичных выступлений и ведения переговоров;</p>
          </li>
          <li>
            <p>Личный стиль и создание брендов.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="company-offers pt-110">
    <div class="container">
      <div class="company-offers__title">
        <h2>Кадровое агентство «КАДР» предлагает</h2>
        <div class="underline-block unical-line"></div>
      </div>
      <div class="company-offers__item">
        <p>Школа кадрового агентства «КАДР» имеет возможность проведения бизнес-тренингов для сотрудников, семинаров,
          курсов повышения квалификации. Обратная связь с преподавателем нацелена на результативность образовательного
          процесса. Опытные тренеры учитывают особенности аудитории: возраст, профессионализм, способность к усвоению
          нового материала.</p>
        <p>Школа кадрового агентства «КАДР» имеет возможность проведения бизнес-тренингов, семинаров, курсов повышения
          квалификации. Обратная связь с преподавателем нацелена на результативность образовательного процесса. </p>
        <p>Опытные тренеры учитывают особенности аудитории: возраст, профессионализм, способность к усвоению нового
          материала.</p>
        <ul>
          <li>
            <p>Создадим программу обучения в соответствии с Вашими пожеланиями и требованиями, чтобы курсы не остались
              формальностью, а решали практические задачи.</p>
          </li>
          <li>
            <p>Отвечаем на вопросы, разбираем реальные ситуации, обговариваем рабочие моменты.</p>
          </li>
          <li>
            <p>Для каждого составим план развития.</p>
          </li>
          <li>
            <p>Группы для обучения формируются от 3-х сотрудников.</p>
          </li>
          <li>
            <p>Удобный договор – один на всю группу обучающихся.</p>
          </li>
          <li>
            <p>Форма обучения – стандартная и онлайн-курсы.</p>
          </li>
          <li>
            <p>Тестирование непосредственно на рабочем месте или дистанционное.</p>
          </li>
        </ul>
        <p>Дистанционное обучение как услуга приобретает популярность. Оно позволяет проводить обучение в любое время
          суток и в любой точке мира. Единственное условие для него — это наличие интернета. Онлайн обучение дешевле и
          удобнее, чем традиционное образование.</p>
        <p>Дистанционное обучение как услуга приобретает популярность. Оно позволяет проводить обучение в любое время
          суток и в любой точке мира. </p>
        <p>Единственное условие для него — это наличие интернета. Онлайн обучение дешевле и удобнее, чем традиционное
          образование.</p>
      </div>
    </div>
  </div>
  <div class="warranties">
    <div class="container">
      <div class="warranties__title">
        <h2>Гарантии</h2>
        <div class="underline-block"></div>
      </div>
      <div class="warranties__item">
        <p>На руководителя компании обрушивается лавина предложений по коучингу, тренингам, курсам, вебинарам и так
          далее. Сориентироваться в этом потоке изобилия сложно. Мы делаем ставку на надежность и прозрачность
          технологий обучения, не гонимся за модными терминами, а предпочитаем работать на результат.</p>
        <p>Выдаем документ о прохождении профессиональной подготовки и переобучения.</p>
        <p>Квалифицированные преподаватели с опытом и практикой работы в конкретной отрасли.</p>
        <p>Доступ к видео и методическим материалам.</p>
        <p>Программы составлены на основании и в соответствии со стандартами образования.</p>
        <p>Экспертная поддержка и консультации персонального тренера на период обучения и после.</p>
        <p>Промежуточное и итоговое тестирование на полноту усвоения нового материала.</p>
      </div>
    </div>
  </div>
  <div class="still-have-questions">
    <div class="container">
      <div class="still-have-questions__title">
        <h2>Если остались вопросы или нужен совет</h2>
        <div class="underline-block"></div>
      </div>
      <div class="still-have-questions__item">
        <p>Обращайтесь к нам, если хотите узнать больше. Подскажем, какой курс <strong>корпоративного обучения</strong>выбрать,
          расскажем об оформлении документов, покажем образцы свидетельств о прохождении курсов, познакомим с
          преподавателями и посчитаем стоимость. Обсудим скидки и бонусы!</p>
        <p>Оставляйте заявки на сайте, чтобы менеджер мог скорее связаться с Вами и ответить на вопросы. Услуги
          корпоративного обучения порадуют Ваши ожидания. Становитесь профессиональнее вместе!</p>
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