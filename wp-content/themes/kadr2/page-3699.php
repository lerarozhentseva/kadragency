<?php
/*
Template Name: Официальная работа за границей для белорусов
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="work-boarding">
  <section class="page-header">
    <div class="container">
      <div class="page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Официальная работа за границей для белорусов</h1>
        <p>Мы с удовольствием предоставляем Вам наши услуги по трудоустройству за пределами Республики Беларусь в
          соответствии с лицензией № 46240000080656, выданной Министерством внутренних дел Республики Беларусь 12 июля
          2024
          года, что подтверждает наше право осуществления деятельности, связанной с трудоустройством за границей.</p>
        <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
      </div>
      <div class="page-header__item page-header__item--2491 item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/Official-work-abroad-for-Belarusians.png"
          alt="Официальная работа за границей для белорусов">
        <a class="btn btn-position-aware dark smooth-transition" href="#our-directions"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </section>

  <section class="our-directions custom-block" id="our-directions">
    <div class="container">
      <h2 class="title-line-new">
        <span>Наши направления</span>
      </h2>
      <div class="swiper our-directions__swiper">
        <div class="swiper-wrapper our-direction__wrapper">
          <div class="swiper-slide our-directions__slide">
            <div class="our-directions__slide-img">
              <img src="/wp-content/uploads/2024/02/our-directions-mosckov.png" alt="">
            </div>
            <div class="our-directions__slide-title">
              Работа в Москве и Московской области
            </div>
            <div class="our-directions__slide-txts">
              <p>Сезонные контракты</p>
              <p>Сфера обслуживания</p>
              <p>Отели</p>
            </div>
          </div>
          <div class="swiper-slide our-directions__slide">
            <div class="our-directions__slide-img">
              <img src="/wp-content/uploads/2024/02/our-directions-peter.png" alt="">
            </div>
            <div class="our-directions__slide-title">
              Работа в Санкт-Петербурге
            </div>
            <div class="our-directions__slide-txts">
              <p>Сезонные контракты</p>
              <p>Сфера обслуживания</p>
              <p>Отели</p>
            </div>
          </div>
          <div class="swiper-slide our-directions__slide">
            <div class="our-directions__slide-img">
              <img src="/wp-content/uploads/2024/02/our-directions-sochi.png" alt="">
            </div>
            <div class="our-directions__slide-title">
              Работа в Сочи
            </div>
            <div class="our-directions__slide-txts">
              <p>Сезонные контракты</p>
              <p>Сфера обслуживания</p>
              <p>Отели</p>
            </div>
          </div>
        </div>
      </div>
      <p class="our-directions__txt">Мы предлагаем только те вакансии, для которых у нас имеется зарегистрированный
        договор в миграционной службе Республики Беларусь. Это гарантирует прозрачность и легальность наших предложений,
        обеспечивая клиентам надежность и законность в процессе трудоустройства за границей.</p>
    </div>
  </section>

  <section id="check-out-our-offers" class="check-out-our-offers custom-block check-out-our-offers--2491">
    <div class="container">
      <h2 class="title-line-new">
        <span>Горящие вакансии в РФ</span>
      </h2>
      <div class="check-out-our-offers__item">
        <p>Извините, в данный момент открытых вакансий нет.</p>
        <div id="vacancies__response" class="vacancies__response">

          <!-- <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => array('vacancies'),
            'post_status' => array('publish'),
            'posts_per_page' => '6',
            'posts_per_archive_page' => '6',
            'paged' => $paged
          );

          $vacancies = new WP_Query($args);
          global $custom_num_pages;
          $custom_num_pages = $vacancies->max_num_pages;


          if ($vacancies->have_posts()):
            while ($vacancies->have_posts()):
              $vacancies->the_post(); ?>
              <div class="vacancy__item">
                <a class="item__title" href="<?php the_permalink() ?>">
                  <h3>
                    <?php the_title() ?>
                  </h3>
                </a>
                <p class="salary">
                  <?php if (get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) == 'По результатам собеседования')
                    echo 'По результатам собеседования';
                  else
                    echo 'от ' . get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) . ' BYN' ?>
                  </p>
                  <p class="item__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 31, '...'); ?>
                </p>
                <div class="item__wrap">
                  <p class="created_at">Размещено:
                    <?php if (get_the_date() == wp_date(get_option('date_format')))
                      echo 'cегодня';
                    else {
                      if (get_the_date() == wp_date(get_option('date_format'), strtotime('-1 day')))
                        echo 'вчера';
                      else {
                        if (get_the_date() == wp_date(get_option('date_format'), strtotime('-2 day')))
                          echo 'позавчера';
                        else
                          echo get_the_date();
                      }
                    } ?>
                  </p>
                  <p class="region"><svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_764_16155)">
                        <path
                          d="M5.27309 0.5C3.25721 0.5 1.61719 2.1695 1.61719 4.22159C1.61719 5.36944 2.19774 6.76267 3.34276 8.36256C4.18069 9.53342 5.00639 10.3685 5.04114 10.4035C5.10501 10.4678 5.18903 10.5 5.27315 10.5C5.35483 10.5 5.43657 10.4696 5.49993 10.4085C5.53475 10.375 6.36255 9.57377 7.20206 8.41908C8.348 6.84288 8.92904 5.43065 8.92904 4.22157C8.929 2.1695 7.28894 0.5 5.27309 0.5ZM5.27309 5.82825C4.28754 5.82825 3.48577 5.02645 3.48577 4.04093C3.48577 3.0554 4.28756 2.2536 5.27309 2.2536C6.25862 2.2536 7.06042 3.0554 7.06042 4.04093C7.06042 5.02645 6.2586 5.82825 5.27309 5.82825Z"
                          fill="#9D9A97" />
                      </g>
                      <defs>
                        <clipPath id="clip0_764_16155">
                          <rect width="10" height="10" fill="white" transform="translate(0.273438 0.5)" />
                        </clipPath>
                      </defs>
                    </svg>
                    <?= get_post_meta($vacancies->the_post - get_the_ID(), 'region', true) ?>
                  </p>
                </div>

                <a class="read-more" href="<?php the_permalink() ?>">Узнать подробнее <img
                    src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
                    alt="Графический элемент оранжевая стрелка"></a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?> -->
          <a href="/vakansii/" class="btn btn-position-aware pum-trigger check-out-our-offers--2491__btn">смотреть
            другие предложения<span class="position-aware"></span></a>
        </div>
      </div>
    </div>
  </section>

  <section class="consult pb-110">
    <div class="container-new">
      <div class="consult-wrapper flex">
        <div class="consult-image">
          <img src="/wp-content/uploads/2024/03/get-free-consultation.png" alt="" class="img-cover">
        </div>
        <div class="consult-info">
          <h2 class="consult-info__title title-line-new">
            <span>Вас заинтересовала работа в России?</span>
          </h2>
          <?php echo do_shortcode('[contact-form-7 id="2948" title="Вас заинтересовала работа в России?"]'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="custom-block block-2 dark bel-etaps">
    <div class="container">
      <h2 class="title-line-new">
        <span>Этапы легального трудоустройства за границей для белорусов</span>
      </h2>
      <div class="block__item">
        <p>Официальное трудоустройство за границей через кадровое агентство включает несколько этапов, которые
          обеспечивают прозрачность и соблюдение законодательства. Вот основные шаги этого процесса:</p>
        <ol class="list-bold">
          <li>
            <p>Выбор надежного кадрового агентства</p>
            <p>Исследуйте репутацию кадрового агентства, обратив внимание на его лицензии и отзывы от других работников,
              использующих услуги данного агентства.</p>
          </li>
          <li>
            <p>Подача заявления</p>
            <p>Свяжитесь с выбранным агентством и подайте заявление на поиск работы за границей. Обсудите Ваши
              квалификации, опыт и предпочтения относительно места работы.</p>
          </li>
          <li>
            <p>Подготовка документов</p>
            <p>Соберите и предоставьте все необходимые документы, такие как паспорт, дипломы, рекомендательные письма и
              другие документы, подтверждающие Ваш опыт и квалификацию.</p>
          </li>
          <li>
            <p>Интервью и оценка</p>
            <p>Пройдите интервью с представителями агентства. В процессе интервью обсудите Ваши навыки, опыт и
              предпочтения в отношении будущей работы.</p>
          </li>
          <li>
            <p>Подписание договора с агентством</p>
            <p>Если Вы нашли подходящее предложение, подпишите договор с агентством. Внимательно изучите все условия
              сотрудничества, включая комиссии, которые могут быть удержаны за предоставление услуг.</p>
          </li>
          <li>
            <p>Подготовка к работе</p>
            <p>Получите необходимые инструкции от агентства относительно процесса подготовки к выезду. Это может
              включать в себя подготовку документов для визы, медицинского обследования и других требований.</p>
          </li>
          <li>
            <p>Выезд и адаптация</p>
            <p>После получения необходимых документов отправляйтесь на работу. Агентство может предоставить информацию
              по адаптации в новой стране, включая жилье и другие важные моменты.</p>
          </li>
          <li>
            <p>Поддержка в процессе трудоустройства</p>
            <p>Во время работы за границей агентство может предоставлять поддержку и консультации по различным вопросам,
              связанным с трудовыми отношениями и жизнью в другой стране.</p>
          </li>
          <li>
            <p>Соблюдение правил и обязанностей</p>
            <p>В течение всего периода работы соблюдайте местные законы и правила, выполняйте условия контракта и
              регулярно общайтесь с агентством относительно Вашего статуса и обстоятельств.</p>
          </li>
        </ol>
        <p>Сотрудничество с кадровым агентством может облегчить процесс трудоустройства за границей, предоставив
          профессиональную поддержку на каждом этапе.</p>
      </div>
    </div>
  </section>

  <section class="work-bel custom-block">
    <div class="container">
      <div class="work-bel__container">
        <h2 class="title-line-new">
          <span>Работа в РФ для белорусов с проживанием</span>
        </h2>
        <p class="work-bel__txt">
          Работа в сфере обслуживания (отели, рестораны, бутики, SPA салоны, фитнес центры) в России. Кандидатам
          предлагается работа по контракту сроком от года и более. В контракте подробно оговариваются условия работы,
          заработная плата, количество рабочих часов в неделю и сверхурочное время, условия проживания и питания.
        </p>
        <div class="work-bel__socials contact-us__text">
          <div class="text__item item-1">
            <div class="item__img">
              <img src="https://hrbel.by/wp-content/themes/kadr2/image/icons/direction.svg"
                alt="Графический элемент бумажный самолетик (телеграм)">
            </div>
            <div class="item__content">
              <p class="contact">Напишите нам</p>
              <a class="text-link" href="mailto:info@hrbel.by">info@hrbel.by</a>
            </div>
          </div>
          <div class="text__item item-2">
            <div class="item__img">
              <img src="https://hrbel.by/wp-content/themes/kadr2/image/icons/micro-sd-card.svg" alt="Иконка sd-карты">
            </div>
            <div class="item__content">
              <p class="contact">Свяжитесь с нами</p>
              <a href="tel:+375445572020" class="text-link">+375 (44) 557-20-20</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="licenses custom-block">
    <div class="container">
      <h2 class="title-line-new">
        <span>Свидетельство и лицензия</span>
      </h2>
      <div class="swiper licenses__swiper">
        <div class="swiper-wrapper licenses__wrapper">
          <a data-fancybox="gallery" class="swiper-slide licenses__slide"
            href="/wp-content/uploads/2024/02/licenses.png">
            <img src="/wp-content/uploads/2024/02/licenses.png" alt="">
          </a>
          <a data-fancybox="gallery" class="swiper-slide licenses__slide"
            href="/wp-content/uploads/2024/07/licensia-1.png">
            <img src="/wp-content/uploads/2024/07/licensia-1.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="our-advan custom-block">
    <div class="container">
      <div class="our-advan__blocks">
        <h2 class="our-advan__title title-line-new">
          <span>Наши преимущества</span>
        </h2>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-1.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Разнообразные вакансии в различных сферах</strong>
            <p>Мы предоставляем доступ к широкому спектру вакансий в различных отраслях, отвечая Вашим профессиональным
              интересам и амбициям.</p>
          </div>
        </div>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-2.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Индивидуальный подход к каждому клиенту</strong>
            <p>Мы уважаем уникальные навыки и потребности каждого кандидата, предоставляя консультации и рекомендации по
              наиболее подходящим для соискателя вакансиям. </p>
          </div>
        </div>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-3.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Бесплатные консультации и поддержка</strong>
            <p>Мы предоставляем бесплатные консультации по всем вопросам, связанным с трудоустройством за границей,
              обеспечивая вас необходимой информацией для принятия взвешенного решения.</p>
          </div>
        </div>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-4.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Широкая сеть работодателей</strong>
            <p>Мы имеем устойчивые партнерские отношения с различными компаниями за границей, что обеспечивает вам
              доступ к качественным вакансиям от проверенных работодателей.</p>
          </div>
        </div>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-5.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Эффективное посредничество в процессе трудоустройства</strong>
            <p>"Кадр" является Вашим надежным посредником на пути к новой карьере. Мы содействуем в оформлении
              документов, проведении собеседований и обеспечении всех необходимых условий для успешного трудоустройства.
            </p>
          </div>
        </div>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-6.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Юридическая поддержка</strong>
            <p>Наши юристы обеспечивают полное соблюдение законов и правил в процессе трудоустройства, защищая Ваши
              интересы и обеспечивая юридическую стабильность.</p>
          </div>
        </div>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-7.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Обратная связь</strong>
            <p>Мы ценим Ваши вопросы и предложения. "Кадр" поддерживает постоянную связь, обеспечивая вас необходимой
              информацией и оперативно отвечая на все запросы.</p>
          </div>
        </div>
        <div class="our-advan__item">
          <div class="our-advan__item-img">
            <img src="<?= get_template_directory_uri(); ?>/image/our-advan/our-advan-8.svg" alt="">
          </div>
          <div class="our-advan__item-desc">
            <strong>Оптимизация процесса адаптации</strong>
            <p>Наша цель - не только помочь вам найти работу, но и обеспечить комфортный переход в новую страну. Мы
              предоставляем информацию и ресурсы для успешной адаптации.</p>
          </div>
        </div>
      </div>
      <div class="our-advan__txt">
        <p>
          Кадровое агентство "Кадр" готово помочь вам достичь новых высот в Вашей карьере, предоставляя выгодные и
          безопасные возможности трудоустройства за границей. Вместе мы создадим Ваш успешный и яркий карьерный путь.
        </p>
      </div>
    </div>
  </section>

  <div class="often-questions custom-block">
    <div class="container">
      <div class="often-questions__container">
        <div class="often-questions__title">
          <h2 class="title-line-new block">
            <span>Часто задаваемые вопросы</span>
          </h2>
          <p>Специалисты Кадра собрали актуальные вопросы по теме трудоустройства в России, с которыми приходилось
            сталкиваться на практике.
          </p>
          <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
        </div>
        <div class="often-questions__blocks">
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Я планирую работать за границей. С чего мне начать?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Начните с определения своих профессиональных целей и предпочтений по месту работы. Обратитесь к
                специализированным кадровым агентствам, изучите вакансии, предоставленные на сайте, и оставьте заявку.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Вы подбираете вакансии для работников?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>На нашем сайте Вы сами определяете, какие вакансии вас интересуют. В разделе <a
                  href="https://hrbel.by/vakansii/">Вакансии</a> мы
                предоставляем
                удобные фильтры, которые помогут вам отобрать работу в соответствии с Вашими параметрами. Вы можете
                выбирать вакансии по специальности, городу работы, уровню заработной платы, условиям труда и другим
                параметрам. Используя эти фильтры, Вы легко найдете подходящую вакансию, что существенно ускорит процесс
                поиска работы и поможет вам достичь желаемых профессиональных целей.</p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Какие документы необходимы для работы за границей?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Необходимые документы могут включать в себя паспорт, дипломы, сертификаты квалификации, а также другие
                документы, зависящие от требований конкретной вакансии.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Какие агентства помогают в трудоустройстве за границей, и как выбрать надежное агентство?
              </p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Существует множество кадровых агентств, специализирующихся на трудоустройстве за границей. При выборе
                агентства рекомендуется изучить его репутацию, лицензии и отзывы клиентов.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Какие особенности налогообложения и социального обеспечения для белорусов, работающих за границей?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>В каждой стране свои особенности, о которых Вам стоит заранее уточнить.
                Что касается Российской Федерации, то там граждане Республики Беларусь, временно пребывающие и
                работающие
                на территории Российской Федерации имеют равные права с гражданами Российской Федерации на получение
                медицинских полисов и на оказание медицинской помощи (скорой и плановой) по полису в государственных и
                муниципальных учреждениях РФ за счет средств федерального бюджета РФ, бюджетов субъектов РФ, бюджетов
                муниципальных образований РФ.
              </p>
              <p>
                Белорус, работающий за границей оплачивает налоги в Беларуси со всех видов доходов, в том числе
                полученных
                за границей, если проживает на территории Беларуси более 183 календарных дней в году. Если он находится
                на
                территории Беларуси менее 183 календарных дней в году, что в Беларуси оплачивает налоги только от
                доходов,
                полученных от источников на территории Беларуси. С доходов, полученных от работы за границей налог
                оплачивается в иностранном государстве. Поскольку со многими странами Беларусь подписала соглашения об
                избежании двойного налогообложения, то для подтверждения факта оплаты налогов в налоговый орган по месту
                жительства в Республике Беларусь необходимо предоставить справку об уплате налогов на территории
                иностранного государства.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Как обеспечить безопасность труда и соблюдение прав в стране назначения?
              </p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Трудоустраивайтесь только через организации или индивидуальных предпринимателей, которые имеют лицензию
                на осуществление деятельности, связанной с трудоустройством граждан за пределами Беларуси. Информацию о
                наличии лицензии можно получить на сайте Министерства внутренних дел Республики Беларусь. Наличие
                лицензии
                не означает что организация или ИП имеют право трудоустраивать во все страны мира. Законом о трудовой
                миграции определено, что лицензиат имеет право устраивать только к тому иностранному работодателю, с
                которым заключён договор о трудоустройстве. Эта информация также размещена на сайте МВД Республики
                Беларусь.
              </p>
              <p>
                Убедившись в том, что организация имеет право заниматься деятельностью по трудоустройству граждан за
                границей Вы заключаете с ней договор о содействии в трудоустройстве. Затем заключаете трудовой договор с
                прямым работодателем за границей, до вашего выезда за границу. Подписанный трудовой договор организация
                по
                трудоустройству регистрирует в Управлении по гражданству и миграции МВД Беларуси и после регистрации
                передаёт Вам Ваш экземпляр, до Вашего выезда за границу.
              </p>
              <p>
                До выезда у Вас на руках должны быть следующие документы: <br>
                1. Рабочая виза <br>
                2. Трудовой договор <br>
                3. Разрешение на работу.
              </p>
              <p>
                Трудоустраивающая фирма должна обеспечить вам получение персонального приглашения на работу от
                иностранного работодателя. Без этого документа получение рабочей визы в посольстве невозможно.
              </p>
              <p>
                Выезжая за границу сделайте ксерокопии всех важных документов, один экземпляр возьмите с собой, другой –
                оставьте дома
              </p>
              <p>
                Ваш паспорт должен быть всегда с вами, не отдавайте его никому.
              </p>
              <p>
                Узнайте адрес и телефон белорусского (российского) посольства, неправительственных организаций в стране
                трудоустройства до отъезда за границу.
              </p>
              <p>
                Оставьте родным и знакомым точный адрес будущей работы, а также информацию о фирме (контактных лицах),
                которые вас трудоустроили.
              </p>
              <p>
                Договоритесь с близкими о том, как вы с ними будете поддерживать связь. Возьмите с собой определенную
                сумму денежных средств для оплаты непредвиденных расходов.
              </p>
            </div>
          </div>
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Что делать в случае конфликта с работодателем или неполадок на работе за границей?
              </p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Помните, что право на законное трудоустройство дает только рабочая виза.
              </p>
              <p>
                Изменить тип визы за границей невозможно, поэтому рабочая виза должна стоять в вашем паспорте до выезда
                из
                Беларуси. В странах с безвизовым режимом въезда наниматель обязан оформить вам регистрацию в
                соответствующих миграционных органах. Ваши права работника защищаются трудовым договором (контрактом),
                поэтому контракт должен быть составлен в письменном виде. Обязательно внимательно его прочитайте и
                заберите свой экземпляр.
              </p>
              <p>
                Трудовые споры между сторонами трудового договора (контракта) рассматриваются в той стране, где вы
                работаете, в соответствии с законодательством этой страны. Старайтесь все виды споров решить по месту
                трудоустройства, для чего обращайтесь в компетентные органы страны, суд, поскольку вернувшись домой, вы
                уже не сможете привлечь недобросовестного нанимателя к ответственности и лишитесь причитающихся Вам
                выплат
                и компенсаций.
              </p>
              <p>
                В случае нарушения нанимателем условий трудового договора вы вправе обратиться в дипломатическое
                представительство или консульское учреждение Республики Беларусь, которое примет меры по защите ваших
                прав, в том числе на получение причитающихся выплат, расторжению трудового договора и возвращению вас в
                Республику Беларусь за счет нанимателя.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="news news--2491">
    <div class="container">
      <div class="news__title">
        <h2>Полезные статьи по теме трудоустройства за рубежом</h2>
        <div class="underline-block"></div>
      </div>
      <?php $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat' => 15,
        'paged' => 0,
        'order' => 'DESC',
        'posts_per_page' => 3
      );
      $blog_posts = new WP_Query($args);
      if ($blog_posts->have_posts()) {
        while ($blog_posts->have_posts()) {
          $blog_posts->the_post(); ?>
          <div class="news__item" onClick="window.location.href='<?php the_permalink() ?>'">
            <div class="item__img">
              <?php echo get_the_post_thumbnail(); ?>
            </div>
            <div class="item__content">
              <a class="item__title" href="<?php the_permalink() ?>">
                <p>
                  <?php the_title() ?>
                </p>
              </a>
              <p class="meta-data">
                <?php the_time(' j.m.Y '); ?>
              </p>
              <?php the_excerpt(); ?>
            </div>

          </div>
        <?php }
        ;
      }
      ;

      wp_reset_postdata();
      ?>
      <div class="news__item more">
        <h3>Хотите больше интересных статей? </h3>
        <a class="btn btn-position-aware news--2491__btn" href="/infocentr/">ПОСМОТРЕТЬ БЛОГ<span
            class="position-aware"></span></a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact-us-2'); ?>
  </div>

</main>

<?php get_footer(); ?>