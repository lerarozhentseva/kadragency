<?php
/*
Template Name: Гарантии
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="guarantees-title page-header">
    <div class="container">
      <div class="guarantees-title__item page-header__item item-1">
        <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs'))
          dimox_breadcrumbs(); ?></div>
        <h1>Гарантии</h1>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="guarantees-title__item page-header__item item-2">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/guarantees/guarantees-title.webp"
            type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/guarantees/guarantees-title.jpg" type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/guarantees/guarantees-title.jpg"
            alt="Женщина работает на подоконнике">
        </picture>
        <a class="btn btn-position-aware dark smooth-transition" href="#guarantees"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="guarantees" class="guarantees">
    <div class="container">
      <div class="guarantees__title">
        <h2>Работая с HR-агентством, Вы:</h2>
      </div>
      <div class="underline-block"></div>
      <div class="guarantees__item item-1">
        <p>При этом право принятия всех кадровых решений остается за руководителем компании, а все правовые нюансы
          трудовых отношений будут соблюдены.</p>
        <button class="btn btn-position-aware dark popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="guarantees__item item-2">
        <ol>
          <li>
            <p>Не будете отвлекаться от основных задач компании;</p>
          </li>
          <li>
            <p>Избавитесь от руины и бумажной волокиты;</p>
          </li>
          <li>
            <p>Сбережете время и силы;</p>
          </li>
          <li>
            <p>Не наделаете собственных ошибок, так как мы уже учли промахи ваших предшественников.</p>
          </li>
        </ol>
      </div>
      <div class="guarantees__item item-3">
        <div class="item__image">
          <div class="border">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.5013 1.16675V33.8334M33.8346 17.4895H1.16797M31.5013 17.4895C31.5013 25.2148 25.2316 31.5001 17.5013 31.5001C9.77097 31.5001 3.5013 25.2148 3.5013 17.4895C3.5013 9.76425 9.77097 3.49866 17.5013 3.49866C25.2316 3.49866 31.5013 9.76425 31.5013 17.4895Z"
                stroke="#261104" stroke-linecap="square" />
            </svg>
          </div>
        </div>
        <div class="item__text">
          <h5>Работаем в Минске</h5>
          <p>Мы работаем в Минске и регионах Беларуси. Наши услуги соответствуют государственным стандартам. Не боимся
            жесткой конкуренции, так как уверены в своих силах, имеем опыт и гибкость.</p>
        </div>
      </div>
      <div class="guarantees__item item-4">
        <div class="item__image">
          <div class="border">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M33.8346 33.8334V34.3334H34.3346V33.8334H33.8346ZM33.8346 1.16675H34.3346V0.666748H33.8346V1.16675ZM19.8346 1.16675V0.666748H19.6275L19.4811 0.813195L19.8346 1.16675ZM1.16797 19.8334L0.814415 19.4799L0.667969 19.6263V19.8334H1.16797ZM1.16797 33.8334H0.667969V34.3334H1.16797V33.8334ZM10.5013 24.5001L10.2777 24.9473L10.2963 24.9566L10.3156 24.9643L10.5013 24.5001ZM10.5013 10.5001V10.0001C10.2252 10.0001 10.0013 10.2239 10.0013 10.5001H10.5013ZM24.5013 10.5001L24.9655 10.3144L24.9578 10.2951L24.9485 10.2765L24.5013 10.5001ZM34.3346 33.8334V1.16675H33.3346V33.8334H34.3346ZM33.8346 0.666748H19.8346V1.66675H33.8346V0.666748ZM19.4811 0.813195L0.814415 19.4799L1.52152 20.187L20.1882 1.5203L19.4811 0.813195ZM0.667969 19.8334V33.8334H1.66797V19.8334H0.667969ZM1.16797 34.3334H33.8346V33.3334H1.16797V34.3334ZM33.4811 0.813195L0.814415 33.4799L1.52152 34.187L34.1882 1.5203L33.4811 0.813195ZM11.0013 24.5001V10.5001H10.0013V24.5001H11.0013ZM10.5013 11.0001H24.5013V10.0001H10.5013V11.0001ZM10.3156 24.9643L33.6489 34.2977L34.0203 33.3692L10.687 24.0358L10.3156 24.9643ZM24.0371 10.6858L33.3704 34.0191L34.2989 33.6477L24.9655 10.3144L24.0371 10.6858ZM19.3874 1.39035L24.0541 10.7237L24.9485 10.2765L20.2818 0.943141L19.3874 1.39035ZM0.944362 20.2806L10.2777 24.9473L10.7249 24.0529L1.39158 19.3862L0.944362 20.2806Z"
                fill="#261104" />
            </svg>
          </div>
        </div>
        <div class="item__text">
          <h5>Дорожим партнерами</h5>
          <p>Дорожим крупными партнерами, ценим крепкий бизнес среднего звена, уделим внимание частным предприятиям. К
            каждому подходим индивидуально. Мы не сможем помочь только в том случае, если вступило в законную силу
            решение суда. В остальном у нас всегда найдется вариант для особенных ситуаций.</p>
        </div>
      </div>
      <div class="guarantees__item item-5">
        <div class="item__image">
          <div class="border">
            <svg width="34" height="21" viewBox="0 0 34 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0.523438 1.16675L11.0234 11.6667L18.0234 4.66675L33.1901 19.8334M33.1901 19.8334V4.66675M33.1901 19.8334H18.0234"
                stroke="#261104" />
            </svg>
          </div>
        </div>
        <div class="item__text">
          <h5>Даем скидки</h5>
          <p>Сумма контракта зависит от вида услуги, срока исполнения, региона. Если у нас уже есть опыт сотрудничества,
            предоставим скидку, как постоянным клиентам. Первичное обследование и расчет стоимости сделаем бесплатно.
          </p>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/contact-us'); ?>
  <div class="how-is-the-work">
    <div class="container">
      <div class="how-is-the-work__title">
        <h2>Как происходит работа</h2>
      </div>
      <div class="underline-block"></div>
      <div class="how-is-the-work__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="Иконка звезды ярко-оранжевая">
        <p>Работа строится по принципу «одного окна» – все необходимые инстанции и согласования мы пройдем сами и вручим
          готовый вариант в пакетном формате. Гарантируем конфиденциальность сведений о компании клиента. Наши
          сотрудники несут ответственность и подписывают договор о неразглашении сведений коммерческого характера и
          персональных данных.</p>

      </div>
      <div class="how-is-the-work__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="Иконка звезды ярко-оранжевая">
        <p>Подписываем гражданско-правовой договор оказания услуг сроком не менее года. Можем провести специальные
          действия разового характера по отдельным направлениям, например:</p>

      </div>
      <div class="how-is-the-work__item item-3">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-3.svg"
          alt="Графический элемент разветвление">
        <p>Аудит</p>
      </div>
      <div class="how-is-the-work__item item-4">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-4.svg"
          alt="Графический элемент каракули">
        <p><a class="text-link" href="<?= get_site_url(); ?>/kadrovyj-konsalting/korporativnoe-obuchenie/">Обучение</a>
        </p>
      </div>
      <div class="how-is-the-work__item item-5">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-5.svg" alt="Графический элемент">
        <p><a class="text-link"
            href="<?= get_site_url(); ?>/kadrovyj-konsalting/ocenka-i-testirovanie-personala/">Спецоценка</a></p>
      </div>
      <div class="how-is-the-work__item item-6">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-6.svg" alt="Графический элемент">
        <p>Сопровождение на случай проверок и др</p>
      </div>
    </div>
  </div>
  <div class="nuances">
    <div class="container">
      <h2>Нюансы</h2>
      <div class="nuances__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/image/guarantees/guarantees-1.webp" type="image/webp">
          <source srcset="<?= get_template_directory_uri(); ?>/image/guarantees/guarantees-1.jpg" type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/guarantees/guarantees-1.jpg"
            alt="Крупный офис в большом разрешении">
        </picture>
      </div>
      <div class="underline-block"></div>
      <ol>
        <li>
          <p>Имеем практический опыт</p>
          <p>Специалисты <strong>HR-агентства</strong> имеют практический опыт, сертифицированы, обучены, имеют
            лицензии, следят за новеллами законодательства в области трудовых отношений.</p>
        </li>
        <li>
          <p>Cоответствуем стандартам</p>
          <p>Все экспертные заключения, результаты исследований, рекомендации, подтверждающие документы, которые мы
            предоставим заказчику по условиям договора, соответствуют государственному законодательству, закрепленным
            стандартам, правилам, ГОСТам и другим нормативно-правовым нормам.</p>
        </li>
        <li>
          <p>Всегда доступны для связи</p>
          <p>Чтобы воспользоваться услугами, закажите звонок на сайте. Напишите запрос по электронной почте, если Вам
            так удобнее. В ближайшее время менеджер перезвонит, чтобы рассчитать и согласовать стоимость услуг.
            Остальные моменты обсудим при личном знакомстве с компанией. Первичную консультацию проведем бесплатно.</p>
        </li>
        <li>
          <p>Имеем гарантии</p>
          <p>Гарантией нашей работы служит то, что мы несем ответственность за каждого нанятого при нашем содействии
            работника, консультируем бесплатно на период адаптации. В 93 случаях из 100 наши кандидаты закрепляются на
            рабочем месте. Если в течение двух месяцев сотрудник уволится, рекрутер подберет ему замену бесплатно в
            качестве гарантийных обязательств.</p>
        </li>
      </ol>
      <h5>С HR-агентством Кадр – безопасно во всех отношениях.</h5>
    </div>
  </div>
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/news'); ?>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>