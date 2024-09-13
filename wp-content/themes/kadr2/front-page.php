<?php
/*
Template Name: Шаблон главной страницы
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="main">
  <div id="offer" class="offer">
    <div class="offer__container container">
      <div class="offer__item">
        <h1>Кадровое агентство в Москве</h1>
        <ul class="ul__stars-light">
          <?php 
            $advantages = explode(";", get_field('agency-advantages'));
            foreach ($advantages as $item): ?>
              <li><?= $item; ?></li>
            <?php endforeach; ?>
        </ul>
        <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
      </div>
      <div class="offer-slider swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide item-1">
            <img src="<?php echo get_field('slajder-1'); ?>" fetchpriority="high" alt="Офис с современным интерьером">
            <div class="slider__item-info">
              <div class="info__text">
                <span>
                  <?php echo (date("Y")); ?>
                </span>
                <p>Новейшие методики работы</p>
              </div>
              <div class="info__border"></div>
            </div>
          </div>
          <div class="swiper-slide item-2">
            <img src="<?php echo get_field('slajder-2'); ?>" alt="Работа в офисе в пандемию">
            <div class="slider__item-info">
              <div class="info__text">
                <span>Много</span>
                <p>довольных клиентов</p>
              </div>
              <div class="info__border"></div>
            </div>
          </div>
          <div class="swiper-slide item-3">
            <img src="<?php echo get_field('slajder-3'); ?>" alt="Офис с видом на город">
            <div class="slider__item-info">
              <div class="info__text">
                <span>360 °</span>
                <p>Компания полного цикла</p>
              </div>
              <div class="info__border"></div>
            </div>
          </div>
        </div>
        <div class="slider__nav">
          <div class="offer-slider swiper-button-next next btn-position-aware dark">
            <img src="<?= get_template_directory_uri(); ?>/image/offer_slider_prev.svg"
              alt="Треугольная скобка влево"><span class="position-aware quad"></span>
          </div>
          <div class="offer-slider swiper-button-prev prev btn-position-aware dark">
            <img src="<?= get_template_directory_uri(); ?>/image/offer_slider_prev.svg"
              alt="Треугольная скобка влево"><span class="position-aware quad"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-us">
    <div class="container">
      <div class="about-us__title">
        <h2>Кто мы?</h2>
        <div class="underline-block">
        </div>
      </div>
      <div class="about-us__item item-1">
        <p><?php echo get_field('text_1'); ?>  </p>
      </div>
      <div class="about-us__item item-2">
        <p><?php echo get_field('text_2'); ?>
        </p>
      </div>
    </div>
  </div>
  <section class="advantage">
    <div class="advantage-block pb-110">
      <div class="advantage-block-inner advantage-top f-center">
        <div class="advantage-block__text">
          <p>
            База 80 000 кандидатов
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Executive</span> search
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Headhunting
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Сроки <span>от 1 до 3</span> недель
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Комфортная предоплата
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Гарантии</span> бесплатной замены
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Работаем в РБ, РФ и странах СНГ
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
      </div>
      <div class="advantage-block-inner advantage-bottom f-center">
        <div class="advantage-block__text">
          <p>
            5500+ успешно выполненных проектов
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            База <span>80 000</span> кандидатов
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Executive search
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Headhunting</span>
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Сроки от 1 до 3 недель
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Комфортная</span> предоплата
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Гарантии бесплатной замены
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Работаем <span>в РБ, РФ</span> и странах <span>СНГ</span>
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/star-light.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <div class="main-page-cards">
    <div class="main-page-cards__item item-1">
      <h2>Наши услуги</h2>
      <div class="underline-block"></div>
      <p>Наше основное направление - поиск и побор персонала. Поиск кандидатов осуществляем через обширную базу резюме. Дополнительно выполняем проверку каждого соискателя, собираем обратную связь с предыдущих мест работы. Все эти этапы позволяют нам подбирать подходящих специалистов, которые станут эффективными работниками в компании.
      </p>
    </div>
    <div class="main-page-cards__item item-2">
      <a class="text-link" href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">
        <h2>Подбор персонала</h2>
      </a>
      <p>Наша рекрутинговая компания подбирает для заказчиков кадры необходимого уровня компетенции и подготовки, от
        специалистов до топ-руководителей. Также мы готовы сформировать для Вас команду профессионалов «под ключ»,
        применив прогрессивные европейские подходы к рекрутингу.</p>
      <button class="btn-contact-us popmake-29">Подробнее <img
          src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
          alt="Графический элемент оранжевая стрелка"></button>
    </div>
    <div class="main-page-cards__item item-3">
      <a class="text-link" href="<?= get_site_url(); ?>/hr-brending/">
        <h2>HR-брендинг</h2>
      </a>
      <p>Формирование с нуля бренда работодателя на рынке труда. Это мощный инструмент привлечения высококлассных
        сотрудников, построения устойчивой кадровой структуры, повышения лояльность коллектива по отношению к
        работодателю.</p>
      <button class="btn-contact-us-light popmake-29">Подробнее<img
          src="<?= get_template_directory_uri(); ?>/image/contact_us_light.svg"
          alt="Графический элемент стрелка вправо"></button>
    </div>
    <div class="main-page-cards__item item-4">
      <a class="text-link" href="<?= get_site_url(); ?>/kadrovyj-konsalting/">
        <h2>HR-консалтинг</h2>
      </a>
      <p>Оптимизация алгоритмов работы с кадрами ощутимо увеличивает эффективность работы организации, снижает
        управленческие расходы. Профессиональный кадровый аудит выявляет и устраняет «слабые места» в кадровой политике.
        Мы всегда готовы помочь клиентам повысить уровень кадровой работы, разработать необходимые регламенты и
        внутренние стандарты.</p>
      <button class="btn-contact-us-light popmake-29">Подробнее<img
          src="<?= get_template_directory_uri(); ?>/image/contact_us_light.svg"
          alt="Графический элемент стрелка вправо"></button>
    </div>
    <div class="main-page-cards__item item-5">
      <a class="text-link" href="<?= get_site_url(); ?>/autsorsing-personala/">
        <h2>Аутсорсинг персонала</h2>
      </a>
      <p>Передайте нам функции
        управления персоналом и сосредоточьтесь на стратегических задачах своего бизнеса. Мы обеспечим гибкость в
        управлении персоналом, минимизацию рисков, связанных с трудовым законодательством, и оптимизацию затрат на
        подбор и обучение сотрудников.</p>
      <button class="btn-contact-us popmake-29">Подробнее<img
          src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
          alt="Графический элемент оранжевая стрелка"></button>
    </div>
    <div class="main-page-cards__item item-6">
      <p>В работе используем инновационные методы, собственные наработки, чтобы оценить профессиональные и личностные черты потенциального сотрудника. Поиск кандидатов осуществляем через обширную базу резюме. Дополнительно выполняем проверку каждого соискателя (наличие судимостей, задолженностей и т.д.), собираем обратную связь с предыдущих мест работы. Все эти этапы позволяют нам подбирать подходящих специалистов, которые станут эффективными работниками в компании.</p>
    </div>
  </div>
  <div class="garanties">
    <div class="container">
      <div class="garanties__title">
        <h2>Гарантии</h2>
      </div>
      <div class="garanties__item">
        <p>HR-менеджеры сопровождают нового специалиста в течение испытательного срока. Помогаем ему быстро включиться в рабочие задачи, преодолеть возникающие сложности. Если по какой-то причине в течение двух месяцев трудовые отношения с нанятым сотрудником будут расторгнуты, то предоставим другого сотрудника, подходящего для данной должности, без вложения дополнительных средств с вашей стороныбесплатную замену.
        </p>
      </div>
    </div>
  </div>
  <div class="contact-main get-free-consult__container">
    <?php get_template_part('template-parts/contact-us'); ?>
  </div>
  <div class="main-page-vacancy-list">
    <div class="container">
        <div class="main-page-vacancy-list__title">
            <h2>Вакансии</h2>
        </div>
        <div class="underline-block"></div>
        <div class="main-page-vacancy-list__vacancy">
            <div class="vacancy__item" data-category="" style="display: none;">
                <a class="item__title" href="#">
                    <p>Менеджер по продажам (Специалист по продажам)</p>
                </a>
                <p>Кадровое агентство Кадр</p>
                <p class="item__text"></p>
                <p>Мы ищем специалиста по продажам на полный рабочий день в кадровое агентство «Кадр».</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="29" style="display: none;">
                <a class="item__title" href="#">
                    <p>HR / рекрутер</p>
                </a>
                <p>ООО Кадровое агентство КАДР</p>
                <p class="item__text"></p>
                <p>Профессионально агентство «Кадр» осуществляет полный комплекс услуг по подбору и управлению кадрами,
                    включая HR-брендинг, консалтинг и другие смежные услуги.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="52" style="display: none;">
                <a class="item__title" href="#">
                    <p>Главный бухгалтер</p>
                </a>
                <p>Кадр</p>
                <p class="item__text"></p>
                <p>Бухгалтерская компания, которая занимает лидирующие позиции на рынке Беларуси в сфере бухгалтерского
                    учета, в связи с расширением штата находится в поисках Главного бухгалтера.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="40" style="display: none;">
                <a class="item__title"
                    href="#">
                    <p>Специалист по работе с корпоративными клиентами</p>
                </a>
                <p>Кадр</p>
                <p class="item__text"></p>
                <p>Аутсорсинговая компания — лидером рынка бухгалтерских и юридических услуг находится в поисках
                    амбициозного и талантливого специалиста по работе с корпоративными клиентами / продажам! Работа
                    только с входящими звонками!</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="60" style="display: none;">
                <a class="item__title" href="#">
                    <p>Аудитор/Старший аудитор</p>
                </a>
                <p>ООО “Аудиторские технологии”</p>
                <p class="item__text"></p>
                <p>Компания&nbsp;ООО “Аудиторские технологии”&nbsp;в поисках старшего аудитора/аудитора для проведения
                    независимых и объективных аудиторских проверок финансовой деятельности наших клиентов.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="52" style="display: none;">
                <a class="item__title" href="#">
                    <p>Аудитор</p>
                </a>
                <p>Аудиторские технологии</p>
                <p class="item__text"></p>
                <p>Компания ООО “Аудиторские технологии” в поисках квалифицированного сотрудника для проведения
                    независимых и объективных аудиторских проверок финансовой деятельности наших клиентов.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="40" style="display: none;">
                <a class="item__title" href="#">
                    <p>Специалист по продажам</p>
                </a>
                <p>ООО Кадровое агентство КАДР</p>
                <p class="item__text"></p>
                <p>Аутсорсинговая компания — лидер рынка бухгалтерских и юридических услуг находится в поисках
                    амбициозного и талантливого специалиста по продажам / специалиста по работе с клиентами! Работа
                    только с входящими звонками!</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="35" style="display: none;">
                <a class="item__title" href="#">
                    <p>Копирайтер на английском языке</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>BPM Cloud — белорусская аутсорсиноговая и аутстаффинговая IT-компания с центрами разработки в
                    Беларуси и России. Компания оказывает полный комплекс услуг по разработке, внедрению и сопровождению
                    программных решений клиентам из более чем 30 стран мира. Более 150 высококвалифицированных
                    ИТ-специалистов. Реализация ИТ-проектов различной сложности и масштаба.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="29" style="display: none;">
                <a class="item__title" href="#">
                    <p>Руководитель отдела продаж</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>BPM Cloud — белорусская аутсорсиноговая и аутстаффинговая IT-компания с центрами разработки в
                    Беларуси и России. Компания оказывает полный комплекс услуг по разработке, внедрению и сопровождению
                    программных решений клиентам из более чем 30 стран мира. Более 150 высококвалифицированных
                    ИТ-специалистов. Реализация ИТ-проектов различной сложности и масштаба.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="37" style="display: block;">
                <a class="item__title" href="#">
                    <p>SMM-менеджер</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>BPM Cloud — белорусская аутсорсиноговая и аутстаффинговая IT-компания с центрами разработки в
                    Беларуси и России. Компания оказывает полный комплекс услуг по разработке, внедрению и сопровождению
                    программных решений клиентам из более чем 30 стран мира. Более 150 высококвалифицированных
                    ИТ-специалистов. Реализация ИТ-проектов различной сложности и масштаба.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="40" style="display: none;">
                <a class="item__title"
                    href="#">
                    <p>Менеджер по продажам IT-услуг/Специалист по продажам</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>В международной IT-компании&nbsp;BPM CLOUD&nbsp;открыта вакансия&nbsp;менеджера по продажам. Мы
                    занимаемся разработкой сайтов и веб-приложений, it-аутсорсингом и it-аутстаффингом. Мы строим
                    компанию с человеческим лицом и создаем одну из лучших команд, где сотрудники для нас — самая
                    большая ценность.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="37" style="display: block;">
                <a class="item__title" href="#">
                    <p>Интернет-маркетолог</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>Ищем маркетолога для работы над несколькими проектами. Задача — выстроить с маркетинг планы проектов,
                    контролировать и настраивать РК, продвижение сайтов и социальных сетей, анализировать эффективность
                    расходования рекламных бюджетов.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="29" style="display: none;">
                <a class="item__title"
                    href="#">
                    <p>Заместитель директора (управляющего) по персоналу</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>BPM Cloud — белорусская аутсорсиноговая и аутстаффинговая IT-компания с центрами разработки в
                    Беларуси и России. Компания оказывает полный комплекс услуг по разработке, внедрению и сопровождению
                    программных решений клиентам из более чем 30 стран мира. Более 150 высококвалифицированных
                    ИТ-специалистов. Реализация ИТ-проектов различной сложности и масштаба.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="35" style="display: none;">
                <a class="item__title" href="#">
                    <p>SEO-специалист</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>Команда BPM CLOUD ищет SEO-специалиста в нашу команду.</p>
                <p></p>
            </div>

            <div class="vacancy__item" data-category="29" style="display: none;">
                <a class="item__title" href="#">
                    <p>Account manager</p>
                </a>
                <p>BPM Cloud / Web Focus</p>
                <p class="item__text"></p>
                <p>BPM Cloud / Web Focus — белорусская аутсорсиноговая и аутстаффинговая IT-компания с центрами
                    разработки в Беларуси и России. Компания оказывает полный комплекс услуг по разработке, внедрению и
                    сопровождению программных решений клиентам. Есть как крупные заказчики, так и мелкие, кому
                    необходимо разработать сайт, лэндинг.</p>
                <p></p>
            </div>
        </div>
        <div class="main-page-vacancy-list__category">
            <p>Категории</p>
            <hr>
            <ul>
                <li class="category__button" data-id="55">
                    <p>Все вакансии</p>
                </li>
                <li class="category__button" data-id="29">
                    <p>Административный персонал</p>
                </li>
                <li class="category__button" data-id="60">
                    <p>Аудиторы</p>
                </li>
                <li class="category__button" data-id="35">
                    <p>Информационные технологии</p>
                </li>
                <li class="category__button active" data-id="37">
                    <p>Маркетинг, реклама, PR</p>
                </li>
                <li class="category__button" data-id="40">
                    <p>Продажи, обслуживание клиентов</p>
                </li>
                <li class="category__button" data-id="52">
                    <p>Финансы, бухгалтерия</p>
                </li>
            </ul>
        </div>
        <div class="btn">
            <button class="btn btn-position-aware popmake-29 pum-trigger" style="cursor: pointer;">КОНСУЛЬТАЦИЯ<span
                    class="position-aware"></span></button>
        </div>
    </div>
</div>
  <?php get_template_part('template-parts/promotion'); ?>

  <div class="cooperation-stages">
    <div class="container">
      <div class="cooperation-stages__title">
        <h2>Процесс подбора персонала</h2>
        <div class="underline-block"></div>
      </div>
      <div class="cooperation-slider">
        <div class="cooperation-stages__nav">
          <div class="border-bottom item-1"></div>
          <div class="nav__item item-1">
            <div class="nav-block select" data-item="one"></div>
            <p>Первичная консультация</p>
          </div>
          <div class="nav__item item-2">
            <div class="nav-block" data-item="two"></div>
            <p>Объявление о вакансии</p>
          </div>
          <div class="border-bottom item-2"></div>
          <div class="nav__item item-3">
            <div class="nav-block" data-item="three"></div>
            <p>Анализ откликов</p>
          </div>
          <div class="nav__item item-4">
            <div class="nav-block" data-item="four"></div>
            <p>Оценка навыков</p>
          </div>

          <div class="nav__item item-5">
            <div class="nav-block" data-item="five"></div>
            <p>Рассказ о компнаии</p>
          </div>
          <div class="nav__item item-6">
            <div class="nav-block" data-item="six"></div>
            <p>Список кандидатов</p>
          </div>
          <div class="nav__item item-7">
            <div class="nav-block" data-item="seven"></div>
            <p>Организация встречи</p>
          </div>
          <div class="nav__item item-8">
            <div class="nav-block" data-item="eight"></div>
            <p>Оформление документов</p>
          </div>
        </div>
        <div class="cooperation-stages__content">
          <ol>
            <li class="content__item item-1 active" data-item="one">
              <p>Первичная консультация с клиентом, на которой согласовываем требования к соискателям, составляем портрет идеального кандидата для компании. Заключаем договор на услуги hr- менеджера.</p>
            </li>
            <li class="content__item item-2" data-item="two">
              <p>Составляем объявление о вакансии, привлекающее внимание. Размещаем его на рекрутинговых площадках и сайтах по поиску работы.</p>
            </li>
            <li class="content__item item-3" data-item="three">
              <p>Анализируем полученные отклики. Организовываем серию первичных интервью, отсеивая неподходящих соискателей. Проводим телефонное интервью с потенциальными кандидатами.</p>
            </li>
            <li class="content__item item-4" data-item="four">
              <p>Оцениваем профессиональные навыки и психологические особенности личности. Анализируем полученные результаты, сопоставляем их с описанными ранее требованиями.</p>
            </li>
            <li class="content__item item-5" data-item="five">
              <p>Рассказываем отобранным соискателям о вашей компании, вариантах карьерного роста, подчеркиваем выгоду от трудоустройства. Работаем с завышенными требованиями потенциальных сотрудников.</p>
            </li>
            <li class="content__item item-6" data-item="six">
              <p>Составляем список мотивированных кандидатов, которые максимально отвечают требованиям вакансии.</p>
            </li>
            <li class="content__item item-7" data-item="seven">
              <p>Организовываем встречи с кандидатами. Специалисты нашей кадровой компании сопровождают собеседования, помогая сделать выбор.</p>
            </li>
            <li class="content__item item-8" data-item="eight">
              <p>Оформляем все необходимые документы для трудоустройства выбранного специалиста. Обеспечиваем успешную адаптацию сотрудника на новом рабочем месте.</p>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div id="advantages" class="advantages">
    <div class="container">
      <div class="advantages__content">
        <div class="advantages__img">
          <img src="<?= get_template_directory_uri(); ?>/image/advantages-work-with-us.jpg"
            alt="Коворкинг для команды разработчиков">
        </div>
        <h2>Преимущества работы с кадровым агентством</h2>
        <div class="underline-block"></div>
        <ol>
          <li>
            <p>Экономия ресурсов компании</p>
            <p>Обращение в кадровое агентство снижает временные и финансовые издержки. Опытные HR-менеджеры профессионально подбирают кандидатов, позволяя работодателю сосредоточиться на развитии бизнеса.</p>
          </li>
          <li>
            <p>Широкая база резюме</p>
            <p>Наша база содержит профили специалистов из разных областей с разнообразным опытом и квалификацией. Доверив поиск рекрутинговой компании, вы быстро найдете нужного кандидата.</p>
          </li>
          <li>
            <p>Найм персонала с учётом требований бизнеса</p>
            <p>Каждый запрос рассматриваем отдельно. Адаптируем методы работы под особенности вакансии, корпоративной культуры, а также сроки и бюджет.</p>
          </li>
          <li>
            <p>Минимизируем риски</p>
            <p>Самостоятельный поиск может привести к найму некомпетентного сотрудника. HR-менеджеры агентства проверяют кандидатов, собирают отзывы и проводят тестирование. Клиент получает гарантию соответствия должностным требованиям и бесплатную замену в течение двух месяцев в случае расторжения трудовых отношений.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <section class="question pt-110">
    <div class="container-new">
      <div class="question-wrapper flex">
        <div class="question-block">
          <img src="<?= get_template_directory_uri(); ?>/image/question-block.jpg" alt="" class="img-cover">
        </div>
        <div class="question-block f-dc-center-center">
          <div class="question-block__icon f-center-center">
            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M23.8327 3.78247V10.6667C23.8327 11.6001 23.8327 12.0668 24.0143 12.4234C24.1741 12.737 24.4291 12.9919 24.7427 13.1517C25.0992 13.3334 25.5659 13.3334 26.4993 13.3334H33.3836M27.166 30.8333L24.666 28.3333M23.8327 3.33325H15.166C12.3658 3.33325 10.9656 3.33325 9.89606 3.87822C8.95525 4.35759 8.19035 5.12249 7.71098 6.0633C7.16602 7.13286 7.16602 8.53299 7.16602 11.3333V28.6666C7.16602 31.4668 7.16602 32.867 7.71098 33.9365C8.19035 34.8773 8.95525 35.6423 9.89606 36.1216C10.9656 36.6666 12.3658 36.6666 15.166 36.6666H25.8327C28.6329 36.6666 30.0331 36.6666 31.1026 36.1216C32.0434 35.6423 32.8083 34.8773 33.2877 33.9365C33.8327 32.867 33.8327 31.4668 33.8327 28.6666V13.3333L23.8327 3.33325ZM26.3327 24.1666C26.3327 27.3882 23.721 29.9999 20.4993 29.9999C17.2777 29.9999 14.666 27.3882 14.666 24.1666C14.666 20.9449 17.2777 18.3333 20.4993 18.3333C23.721 18.3333 26.3327 20.9449 26.3327 24.1666Z"
                stroke="#261104" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <p class="question-block__name">
            Ищете работу?
          </p>
          <button class="question-block__button btn-position-aware btn-new popmake-1001 pum-trigger">
            Отправить резюме
            <span class="position-aware"></span>
          </button>
        </div>
        <div class="question-block f-dc-center-center">
          <div class="question-block__icon f-center-center">
            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M31.8333 35V25M26.8333 30H36.8333M20.1667 25H13.5C10.3937 25 8.84058 25 7.61544 25.5075C5.98192 26.1841 4.6841 27.4819 4.00747 29.1154C3.5 30.3406 3.5 31.8937 3.5 35M26 5.4846C28.4432 6.47358 30.1667 8.86885 30.1667 11.6667C30.1667 14.4645 28.4432 16.8598 26 17.8487M22.6667 11.6667C22.6667 15.3486 19.6819 18.3333 16 18.3333C12.3181 18.3333 9.33333 15.3486 9.33333 11.6667C9.33333 7.98477 12.3181 5 16 5C19.6819 5 22.6667 7.98477 22.6667 11.6667Z"
                stroke="#261104" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <p class="question-block__name">
            Нужен сотрудник?
          </p>
          <button class="question-block__button btn-position-aware btn-new popmake-29 pum-trigger">
            Оставьте заявку
            <span class="position-aware"></span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <div class="often-questions custom-block">
    <div class="container-new">
      <div class="often-questions__container pt-150 pb-150">
        <div class="often-questions__title">
          <h2 class="title-line-new block">
            Часто задаваемые вопросы
          </h2>
          <p>Специалисты Кадра собрали актуальные вопросы, с которыми приходилось
            сталкиваться на практике.
          </p>
          <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
        </div>
        <div class="often-questions__blocks">
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Стоимость услуг hr агентства по подбору персонала?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Лучший выход взять рекрутера временно на прокат, то есть, на аутсорсинг. Он будет работать по договору
                и за
                разумную плату закроет вакансии в короткий срок.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Для каких вакансий кадровое агентство подбирает специалистов?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Советуем разместить резюме на специализированных сайтах (rabota, praca). Вам заполните анкету-резюме,
                которая будет размещена в открытом доступе. Там же можно просматривать и откликаться на понравившееся
                вакансии.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Куда лучше трудоустроиться выпускнику без опыта работы?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Отсутствие опыта, это не повод отчаиваться. Вы молоды, а значит, готовы учиться. Ваше главное
                конкурентное
                преимущество – это энергия, энтузиазм и неординарное мышление, которые с годами пропадают.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Вы предоставляете замену, если нанятый сотрудник уволится?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Понятие аутсорсинг юридически нигде не прописано. Однако на него нет и прямого запрета. Поэтому при
                оказании данной услуги мы используем форму гражданско-правовых договорных отношений.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Ваше кадровое агентство использует собственную базу резюме для подбора соискателей?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Нужно постараться его у держать. А для этого необходимо составить разговор и выяснить причину ухода. Мы
                поможем спланировать беседу и правильно выстроить стратегию разговора.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Как быстро кадровое агентство закрывает вакансии?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Конечно, три дня для аудита – небольшой срок, но мы успеем проверить наличие основных позиций кадрового
                делопроизводства, так как знаем, на что в первую очередь смотрят проверяющие инспекторы.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Какие услуги оказывают специалисты кадрового агентства?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Да, конечно. Мы ведем регулярный сбор информации и делаем собственный анализ тенденций рынка труда.
                Готовы
                предоставить обзор динамики заработных плат по регионам, потребность в кадрах и предложение рабочей
                силы.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/news'); ?>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>
<link rel="preload" as="image" href="<?php echo get_field('slajder-1'); ?>" />
<link rel="preload" as="image" href="<?php echo get_field('slajder-2'); ?>" />
<link rel="preload" as="image" href="<?php echo get_field('slajder-3'); ?>" />
<?php get_footer(); ?>