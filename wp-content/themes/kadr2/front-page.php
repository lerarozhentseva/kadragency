<?php
/*
Template Name: Шаблон главной страницы
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="main">
  <div id="offer" class="offer">
    <div class="offer__container container ">
      <div class="offer__item">
        <h1>Кадровое агентство</h1>
        <p>Наше профессиональное агентство кадров полного цикла предоставит комплекс <a class="text-link"
            href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">услуг по подбору</a> и управлению кадрами, включая
          <a class="text-link" href="<?= get_site_url(); ?>/hr-brending/">HR-брендинг</a>, <a class="text-link"
            href="<?= get_site_url(); ?>/kadrovyj-konsalting/">консалтинг</a> и другие смежные услуги.
        </p>
        <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
      </div>
      <!-- <div class="offer-slider swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide item-1">
            <img src="<..?php echo get_field('slajder-1'); ?>" fetchpriority="high" alt="Офис с современным интерьером">
            <div class="slider__item-info">
              <div class="info__text">
                <span>
                  <..?php echo (date("Y")); ?>
                </span>
                <p>Новейшие методики работы</p>
              </div>
              <div class="info__border"></div>
            </div>
          </div>
          <div class="swiper-slide item-2">
            <img src="<..?php echo get_field('slajder-2'); ?>" alt="Работа в офисе в пандемию">
            <div class="slider__item-info">
              <div class="info__text">
                <span>Много</span>
                <p>довольных клиентов</p>
              </div>
              <div class="info__border"></div>
            </div>
          </div>
          <div class="swiper-slide item-3">
            <img src="<..?php echo get_field('slajder-3'); ?>" alt="Офис с видом на город">
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
            <img src="<..?= get_template_directory_uri(); ?>/image/offer_slider_prev.svg"
              alt="Треугольная скобка влево"><span class="position-aware quad"></span>
          </div>
          <div class="offer-slider swiper-button-prev prev btn-position-aware dark">
            <img src="<..?= get_template_directory_uri(); ?>/image/offer_slider_prev.svg"
              alt="Треугольная скобка влево"><span class="position-aware quad"></span>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <div class="about-us">
    <div class="container">
      <div class="about-us__title">
        <h2>О нашем агентстве</h2>
        <div class="underline-block">
        </div>
      </div>
      <div class="about-us__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>Успех любого дела определяется <strong>креативностью</strong>, профессионализмом, мотивированностью тех, кто
          над ним работает. Это одинаково применимо к творческим коллективам, персоналу коммерческой фирмы, членам
          некоммерческих групп и инициатив. Любую компанию создают люди, поэтому грамотная кадровая политика в
          существенной степени определяет итоговую результативность бизнес-проекта.</p>
      </div>
      <div class="about-us__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
        <p>В нашей команде только опытные эксперты, реализовавшие немало разноплановых проектов в HR-рекрутинге. Хотите
          получить профессиональные кадровые услуги быстро и по разумной цене? Тогда заполняйте специальную форму на
          нашем сайте, и мы свяжемся с Вами в удобное время. Наши сотрудники подготовят для Вашей компании
          <strong>выгодный и продуманный пакет кадровых услуг</strong>, реализация которых в разы повысит
          результативность бизнеса.
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
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Executive</span> search
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Headhunting
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Сроки <span>от 1 до 3</span> недель
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Комфортная предоплата
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Гарантии</span> бесплатной замены
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Работаем в РБ, РФ и странах СНГ
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
      </div>
      <div class="advantage-block-inner advantage-bottom f-center">
        <div class="advantage-block__text">
          <p>
            5500+ успешно выполненных проектов
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            База <span>80 000</span> кандидатов
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Executive search
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Headhunting</span>
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Сроки от 1 до 3 недель
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            <span>Комфортная</span> предоплата
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Гарантии бесплатной замены
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
        <div class="advantage-block__text">
          <p>
            Работаем <span>в РБ, РФ</span> и странах <span>СНГ</span>
          </p>
          <img src="<?= get_template_directory_uri(); ?>/image/new-image/icon/star.svg" alt="">
        </div>
      </div>
    </div>
  </section>
  <div class="main-page-cards">
    <div class="main-page-cards__item item-1">
      <h2>Наши услуги</h2>
      <div class="underline-block"></div>
      <p>Наше кадровое агентство — компания полного цикла. Мы предоставляем заказчикам все виды услуг HR, среди которых:
      </p>
    </div>
    <div class="main-page-cards__item item-2">
      <a class="text-link" href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">
        <h2>Подбор персонала</h2>
      </a>
      <p>Наша рекрутинговая компания подбирает для заказчиков кадры необходимого уровня компетенции и подготовки, от
        специалистов до топ-руководителей. Также мы готовы сформировать для Вас команду профессионалов «под ключ»,
        применив прогрессивные европейские подходы к рекрутингу.</p>
      <button class="btn-contact-us popmake-29">Связаться <img
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
      <button class="btn-contact-us-light popmake-29">Связаться<img
          src="<?= get_template_directory_uri(); ?>/image/contact_us_light.svg"
          alt="Графический элемент стрелка вправо"></button>
    </div>
    <div class="main-page-cards__item row item-7">
      <div class="row__item-7">
        <img src="<?= get_template_directory_uri(); ?>/image/circle_big.svg" alt="Графический элемент большой круг">
        <img src="<?= get_template_directory_uri(); ?>/image/circle_small.svg" alt="Графический элемент маленький круг">
      </div>
    </div>
    <div class="main-page-cards__item row item-8">
      <div class="row__item-8">
        <span>500+</span>
        <p>довольных клиентов</p>
      </div>
    </div>
    <div class="main-page-cards__item item-4">
      <a class="text-link" href="<?= get_site_url(); ?>/kadrovyj-konsalting/">
        <h2>HR-консалтинг</h2>
      </a>
      <p>Оптимизация алгоритмов работы с кадрами ощутимо увеличивает эффективность работы организации, снижает
        управленческие расходы. Профессиональный кадровый аудит выявляет и устраняет «слабые места» в кадровой политике.
        Мы всегда готовы помочь клиентам повысить уровень кадровой работы, разработать необходимые регламенты и
        внутренние стандарты.</p>
      <button class="btn-contact-us-light popmake-29">Связаться<img
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
      <button class="btn-contact-us popmake-29">Связаться<img
          src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
          alt="Графический элемент оранжевая стрелка"></button>
    </div>
    <div class="main-page-cards__item item-6">
      <p>Работа с кадрами — это наша профессия, важность которой сложно переоценить. Мы индивидуально подходим к
        потребностям каждого заказчика, подбираем набор нужных инструментов и рекомендаций по выработке стратегии и
        тактики работы с кадрами. Наши клиенты уже успели оценить результативность такого подхода, последуйте их
        примеру.</p>
    </div>
  </div>
  <div class="principles">
    <div class="container">
      <div class="principles__item item-1">
        <h2>Принципы работы</h2>
        <div class="underline-block">
        </div>
        <p>Залогом успеха нашего HR-агентства на рынке кадровых услуг стало следование двум основополагающим принципам:
        </p>
        <button class="btn btn-position-aware dark popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="principles__item item-2 popmake-29">
        <img src="<?= get_template_directory_uri(); ?>/image/principles-item-2.svg"
          alt="Графический элемент большой круг с кругами">
        <h3>Комплексные решения</h3>
        <p>Мы специализируемся на разработке комплексных механизмов работы с кадрами и их внедрении в действующий бизнес
          заказчиков для его устойчивого развития и роста. Мы уверены и не раз убеждались на практике, что только
          комплексный пересмотр и оптимизация кадровой работы на всех уровнях организации способны дать стойкий эффект в
          виде построения стойкой кадровой структуры, снижения текучести кадров, повышения лояльности сотрудников.</p>
        <button class="btn-contact-us">Узнать больше<img src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
            alt="Графический элемент оранжевая стрелка"></button>
      </div>
      <div class="principles__item item-3 popmake-29">
        <img src="<?= get_template_directory_uri(); ?>/image/principles-item-3.svg"
          alt="Графический элемент стрелка вверх">
        <h3>Подбор эффективных кадров за счет продуманной стратегии.</h3>
        <p>Мы отдаем приоритет проработке максимально выгодного подхода к использованию потенциала сотрудников
          фирмы-заказчика. Поэтому делаем ставку на подбор эффективных работников, которые разделяют ценности компании.
        </p>
        <button class="btn-contact-us">Узнать больше<img src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
            alt="Графический элемент оранжевая стрелка"></button>
      </div>
    </div>
  </div>
  <div class="cost-depends">
    <div class="container">
      <div class="cost-depends__title">
        <h2>Стоимость зависит от</h2>
      </div>
      <div class="underline-block"></div>
      <div class="cost-depends__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
        <p>Наше кадровое агентство определяет стоимость услуг индивидуально для каждого проекта. Конечная цена зависит
          от нескольких обстоятельств:</p>
      </div>
      <div class="cost-depends__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
        <p>Чтобы получить бесплатный расчет стоимость или консультацию наших специалистов по поводу интересующих
          кадровых услуг, отправьте свою заявку через форму обратной связи на сайте или позвоните по указанному там же
          телефону. Мы максимально быстро сориентируем Вас по расценкам и срокам оказания необходимых услуг.</p>
      </div>
      <div class="cost-depends__item item-3">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-3.svg"
          alt="Графический элемент разветвление">
        <p>Набора необходимых заказчику HR-услуг</p>
      </div>
      <div class="cost-depends__item item-4">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-4.svg"
          alt="Графический элемент каракули">
        <p>Сроков исполнения</p>
      </div>
      <div class="cost-depends__item item-5">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-5.svg" alt="Гафический элемент">
        <p>Численности штата компании</p>
      </div>
      <div class="cost-depends__item item-6">
        <img src="<?= get_template_directory_uri(); ?>/image/cost-depends-item-6.svg"
          alt="Графический элемент скругленный">
        <p>Отраслевых особенностей фирмы</p>
      </div>
    </div>
  </div>
  <div class="contact-main">
    <?php get_template_part('template-parts/contact-us'); ?>
  </div>
  <?php get_template_part('template-parts/promotion'); ?>

  <div class="main-page-vacancy-list">
    <div class="container">
      <div class="main-page-vacancy-list__title">
        <h2>Вакансии</h2>
      </div>
      <div class="underline-block"></div>
      <div class="main-page-vacancy-list__vacancy">
        <?php
        $args = array(
          'post_type' => 'vacancies',
          'post_status' => 'publish',
          'posts_per_page' => -1
        );
        $blog_posts = new WP_Query($args);
        if ($blog_posts->have_posts()) {
          while ($blog_posts->have_posts()) {
            $blog_posts->the_post();
            $categories = get_the_terms(get_the_ID(), 'branch');
            $category_data = '';
            if ($categories) {
              foreach ($categories as $category) {
                $category_data .= $category->term_id . ' ';
              }
            }
            ?>

            <div class="vacancy__item" data-category="<?php echo trim($category_data); ?>"
              onclick="location.href='<?php the_permalink(); ?>';">
              <a class="item__title" href="<?php the_permalink() ?>">
                <p><?php the_title() ?></p>
              </a>
              <p><?php echo get_post_meta(get_the_ID(), 'organization', true); ?></p>
              <p class="item__text"><?php the_excerpt(); ?></p>
            </div>
          <?php }
        } else {
          echo '<p>Извините, вакансий нет</p>';
        }
        wp_reset_postdata();
        ?>
      </div>
      <div class="main-page-vacancy-list__category">
        <p>Категории</p>
        <hr>
        <ul>
          <?php $top = get_term(55, 'branch');
          echo '<li class="category__button active" data-id="' . intval($top->term_id) . '"><p>' . $top->name . '</p></li>';
          ?>
          <?php $categories = get_categories(array('taxonomy' => 'branch', 'hide_empty' => 1, 'exclude' => '55'));
          foreach ($categories as $category) {
            echo '<li class="category__button" data-id="' . intval($category->term_id) . '"><p>' . $category->cat_name . '</p></li>';
            $child_list = get_categories(array('hide_empty' => 1, 'parent' => $category->term_id));
            if (!empty($child_list)) {
              echo '<ul class="child_list">';
              foreach ($child_list as $child) {
                echo '<li class="category-child__button child" data-id="' . intval($child->term_id) . '"><p>' . $child->cat_name . '</p></li>';
              }
              echo '</ul>';
            }
          }
          ?>
        </ul>
      </div>
      <div class="btn">
        <button class="btn btn-position-aware popmake-29">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
      </div>
    </div>
  </div>


  <div class="guarantee-result">
    <div class="container">
      <div class="guarantee-result__item item-1">
        <h2>Гарантируем результат</h2>
        <div class="underline-block"></div>
        <p>Нас выбирают, потому что мы гарантируем необходимый результат за счет:</p>
      </div>
      <div class="guarantee-result__item item-2">
        <div class="item__image">
          <div class="border">
            <img src="<?= get_template_directory_uri(); ?>/image/guarantee-result-item-2.svg" alt="Иконка компьютера">
          </div>
        </div>
        <div class="item__text">
          <p class="result">Огромная база</p>
          <p>Многотысячной базе кандидатов как внутри страны, так и за рубежом, включая резюме, которых нет в открытых
            интернет-источниках.</p>
        </div>
      </div>
      <div class="guarantee-result__item item-3">
        <div class="item__image">
          <div class="border">
            <img src="<?= get_template_directory_uri(); ?>/image/guarantee-result-item-3.svg"
              alt="Графический элемент вертикальные линии">
          </div>
        </div>
        <div class="item__text">
          <p class="result">Успешность</p>
          <p>Тысячи успешно закрытых вакансий для компаний из самых разнообразных отраслей.</p>
        </div>
      </div>
      <div class="guarantee-result__item item-4">
        <div class="item__image">
          <div class="border">
            <img src="<?= get_template_directory_uri(); ?>/image/guarantee-result-item-4.svg"
              alt="Графический элемент с главной страницы">
          </div>
        </div>
        <div class="item__text">
          <p class="result">Оперативность</p>
          <p>Оперативные сроки подбора сотрудников.</p>
        </div>
      </div>
      <div class="guarantee-result__item item-5">
        <div class="item__image">
          <div class="border">
            <img src="<?= get_template_directory_uri(); ?>/image/guarantee-result-item-5.svg"
              alt="Иконка гарантии и безопасности">
          </div>
        </div>
        <div class="item__text">
          <p class="result">Надежность</p>
          <p>Более 90% подобранных кандидатов работают в штате компаний-заказчиков до сих пор.</p>
        </div>
      </div>
      <div class="guarantee-result__item item-6">
        <div class="item__image">
          <div class="border">
            <img src="<?= get_template_directory_uri(); ?>/image/guarantee-result-item-6.svg"
              alt="Графический элемент волшебная палочка">
          </div>
        </div>
        <div class="item__text">
          <p class="result">Известность</p>
          <p>Большинство клиентов обратились к нам по рекомендациям.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="cooperation-stages">
    <div class="container">
      <div class="cooperation-stages__title">
        <h2>Этапы сотрудничества</h2>
        <div class="underline-block"></div>
      </div>
      <div class="cooperation-slider">
        <div class="cooperation-stages__nav">
          <div class="border-bottom item-1"></div>
          <div class="nav__item item-1">
            <div class="nav-block select" data-item="one"></div>
            <p>Отправка обращения</p>
          </div>
          <div class="nav__item item-2">
            <div class="nav-block" data-item="two"></div>
            <p>Встреча <br> в офисе</p>
          </div>
          <div class="border-bottom item-2"></div>
          <div class="nav__item item-3">
            <div class="nav-block" data-item="three"></div>
            <p>Составление портрета</p>
          </div>
          <div class="nav__item item-4">
            <div class="nav-block" data-item="four"></div>
            <p>Поиск <br> и анализ</p>
          </div>

          <div class="nav__item item-5">
            <div class="nav-block" data-item="five"></div>
            <p>Собеседование и выбор</p>
          </div>
          <div class="nav__item item-6">
            <div class="nav-block" data-item="six"></div>
            <p>Найм кандидата</p>
          </div>
        </div>
        <div class="cooperation-stages__content">
          <ol>
            <li class="content__item item-1 active" data-item="one">
              <p>Вы присылаете нам свое обращение через сайт или звоните по телефону.</p>
            </li>
            <li class="content__item item-2" data-item="two">
              <p>Мы встречаемся в нашем офисе и проводим подробную консультацию.</p>
            </li>
            <li class="content__item item-3" data-item="three">
              <p>Составляем портрет идеального соискателя, наши рекрутеры начинают работу.</p>
            </li>
            <li class="content__item item-4" data-item="four">
              <p>Начинаем поиск потенциальных кандидатов, анализируем их профили и опыт.</p>
            </li>
            <li class="content__item item-5" data-item="five">
              <p>Наши рекрутеры проводят собеседования с кандидатами и выбирают наиболее подходящих.</p>
            </li>
            <li class="content__item item-6" data-item="six">
              <p>Организуем процесс найма, включая предложение работы и заключение договора.</p>
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
          <img src="<?= get_template_directory_uri(); ?>/image/advantages.jpg"
            alt="Коворкинг для команды разработчиков">
        </div>
        <h2>Преимущества агентства</h2>
        <div class="underline-block"></div>
        <p>Наше кадровое агентство предоставляет следующие важные преимущества своим клиентам:</p>
        <ol>
          <li>
            <p>Экономия</p>
            <p>Заказчику нет нужды платить за доступ к закрытым базам резюме, за публикацию вакансий</p>
          </li>
          <li>
            <p>Выбор среди лучших</p>
            <p>Наши сотрудники в процессе поиска сразу отсекают неподходящих претендентов, остается сделать выбор среди
              наилучших.</p>
          </li>
          <li>
            <p>Никакого риска</p>
            <p>Клиент платит только если подобранный нами кандидат успешно прошел испытательный срок и остался работать
              на постоянной основе.</p>
          </li>
          <li>
            <p>Сотрудничество с профессионалами</p>
            <p>Над поиском персонала для Вашей компании будут работать профессиональный рекрутер, закрепленный за Вашим
              проектом.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <section class="question pt-110">
    <div class="container-new">
      <div class="question-wrapper flex">
        <div class="question-block">
          <img src="<?= get_template_directory_uri(); ?>/image/forms/question-find.png" alt="" class="img-cover">
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
              <p>Если в расширяющуюся компанию требуется много специалистов и сразу, что делать?</p>
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
              <p>Где найти вакансии от прямых работодателей?</p>
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
              <p>Насколько правомерно использование услуг аутсорсинга? Как правильно оформить такие отношения?</p>
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
              <p>Увольняется очень ценный сотрудник – что делать?</p>
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
              <p>Через три дня ожидается проверка трудинспекции. Вы можете нам помочь или уже поздно?</p>
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
              <p>Можете ли вы предоставить данные по уровню безработицы, среднюю зп в отрасли и так далее?</p>
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
          <div class="often-questions__block">
            <div class="often-questions__block-inner">
              <p>Сколько стоят услуги рекрутинга?</p>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 9L12 16.5L19.5 9" stroke="#261104" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="often-questions__block-content">
              <p>Самый распространенный подход, принятый во всем мире – процент от зарплаты найденного работника. При
                подборе линейного персонала доля гонорара HR-агентства составляет 10-20% от зарплаты каждого нанятого
                работника.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="faq">
    <div class="container">
      <div class="faq__title">
        <h2>Частые вопросы</h2>
      </div>
      <div class="underline-block"></div>

      <div class="faq__item item-1" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M11.6667 1.6665L12.3739 0.959397C11.9833 0.568873 11.3502 0.568873 10.9596 0.959397L11.6667 1.6665ZM10.9596 0.959397L0.959641 10.9594L2.37385 12.3736L12.3739 2.37361L10.9596 0.959397ZM10.9596 2.37361L20.9596 12.3736L22.3739 10.9594L12.3739 0.959397L10.9596 2.37361ZM10.6667 1.6665V49.9998H12.6667V1.6665H10.6667ZM30.0001 12.6665H50.0001V10.6665H30.0001V12.6665ZM30.0001 25.9998H43.3334V23.9998H30.0001V25.9998ZM30.0001 39.3332H36.6667V37.3332H30.0001V39.3332Z"
              fill="#D25F15" />
          </svg>
        </div>
        <p>Если в расширяющуюся компанию требуется много специалистов и сразу, что делать?</p>
        <div class="item-1 answer">
          <p>Лучший выход взять рекрутера временно на прокат, то есть, на аутсорсинг. Он будет работать по договору и за
            разумную плату закроет вакансии в короткий срок.</p>
        </div>
      </div>
      <div class="faq__item item-2" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M15 18.3332V17.3332C14.4477 17.3332 14 17.7809 14 18.3332H15ZM15 21.6665L15.7071 22.3736L16 22.0807V21.6665H15ZM9.30966 22.6428L8.60256 23.3499H8.60256L9.30966 22.6428ZM21.6667 43.3332H22.6667V42.919L22.3738 42.6261L21.6667 43.3332ZM18.3334 39.9998H17.3334V40.4141L17.6262 40.7069L18.3334 39.9998ZM18.3334 34.9998H19.3334V34.5856L19.0405 34.2927L18.3334 34.9998ZM15 31.6665H14V32.0807L14.2929 32.3736L15 31.6665ZM15 28.3332V27.3332C14.4477 27.3332 14 27.7809 14 28.3332H15ZM30.6667 1.6665V8.33317H32.6667V1.6665H30.6667ZM28.3334 10.6665H25V12.6665H28.3334V10.6665ZM18.3334 17.3332H15V19.3332H18.3334V17.3332ZM14 18.3332V21.6665H16V18.3332H14ZM14.2929 20.9594L13.3166 21.9357L14.7308 23.3499L15.7071 22.3736L14.2929 20.9594ZM10.0168 21.9357L4.04046 15.9594L2.62625 17.3736L8.60256 23.3499L10.0168 21.9357ZM20.6667 14.9998C20.6667 16.2885 19.622 17.3332 18.3334 17.3332V19.3332C20.7266 19.3332 22.6667 17.3931 22.6667 14.9998H20.6667ZM25 10.6665C22.6068 10.6665 20.6667 12.6066 20.6667 14.9998H22.6667C22.6667 13.7112 23.7114 12.6665 25 12.6665V10.6665ZM13.3166 21.9357C12.4054 22.8469 10.928 22.8469 10.0168 21.9357L8.60256 23.3499C10.2948 25.0422 13.0385 25.0422 14.7308 23.3499L13.3166 21.9357ZM30.6667 8.33317C30.6667 9.62183 29.622 10.6665 28.3334 10.6665V12.6665C30.7266 12.6665 32.6667 10.7264 32.6667 8.33317H30.6667ZM22.6667 48.3332V43.3332H20.6667V48.3332H22.6667ZM22.3738 42.6261L19.0405 39.2927L17.6262 40.7069L20.9596 44.0403L22.3738 42.6261ZM19.3334 39.9998V34.9998H17.3334V39.9998H19.3334ZM19.0405 34.2927L15.7071 30.9594L14.2929 32.3736L17.6262 35.7069L19.0405 34.2927ZM16 31.6665V28.3332H14V31.6665H16ZM15 29.3332H28.3334V27.3332H15V29.3332ZM30.6667 31.6665V33.8887H32.6667V31.6665H30.6667ZM36.1111 39.3332H45V37.3332H36.1111V39.3332ZM34 37.2221C34 38.388 34.9452 39.3332 36.1111 39.3332V37.3332C36.0498 37.3332 36 37.2834 36 37.2221H34ZM32.7778 35.9998C33.4528 35.9998 34 36.547 34 37.2221H36C36 35.4425 34.5574 33.9998 32.7778 33.9998V35.9998ZM30.6667 33.8887C30.6667 35.0547 31.6119 35.9998 32.7778 35.9998V33.9998C32.7164 33.9998 32.6667 33.9501 32.6667 33.8887H30.6667ZM28.3334 29.3332C29.622 29.3332 30.6667 30.3778 30.6667 31.6665H32.6667C32.6667 29.2733 30.7266 27.3332 28.3334 27.3332V29.3332ZM25 47.3332C12.6657 47.3332 2.66669 37.3342 2.66669 24.9998H0.666687C0.666687 38.4388 11.5611 49.3332 25 49.3332V47.3332ZM47.3334 24.9998C47.3334 37.3342 37.3344 47.3332 25 47.3332V49.3332C38.4389 49.3332 49.3334 38.4388 49.3334 24.9998H47.3334ZM25 2.6665C37.3344 2.6665 47.3334 12.6655 47.3334 24.9998H49.3334C49.3334 11.5609 38.4389 0.666504 25 0.666504V2.6665ZM25 0.666504C11.5611 0.666504 0.666687 11.5609 0.666687 24.9998H2.66669C2.66669 12.6655 12.6657 2.6665 25 2.6665V0.666504Z"
              fill="#D25F15" />
          </svg>
        </div>
        <p>Где найти вакансии от прямых работодателей?</p>
        <div class="item-2 answer">
          <p>Советуем разместить резюме на специализированных сайтах (rabota, praca). Вам заполните анкету-резюме,
            которая будет размещена в открытом доступе. Там же можно просматривать и откликаться на понравившееся
            вакансии. </p>
        </div>
      </div>
      <div class="faq__item item-3" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M25 1.6665L25.5812 0.85277C25.2335 0.604415 24.7664 0.604415 24.4188 0.85277L25 1.6665ZM48.3333 18.3332H49.3333C49.3333 18.0102 49.1774 17.7071 48.9146 17.5194L48.3333 18.3332ZM48.3333 31.6665L48.9146 32.4802C49.1774 32.2925 49.3333 31.9895 49.3333 31.6665H48.3333ZM25 48.3332L24.4188 49.1469C24.7664 49.3953 25.2335 49.3953 25.5812 49.1469L25 48.3332ZM1.66666 31.6665H0.666656C0.666656 31.9895 0.822622 32.2925 1.08542 32.4802L1.66666 31.6665ZM1.66666 18.3332L1.08542 17.5194C0.822622 17.7071 0.666656 18.0102 0.666656 18.3332H1.66666ZM24.4188 2.48024L47.7521 19.1469L48.9146 17.5194L25.5812 0.85277L24.4188 2.48024ZM47.3333 18.3332V31.6665H49.3333V18.3332H47.3333ZM47.7521 30.8528L24.4188 47.5194L25.5812 49.1469L48.9146 32.4802L47.7521 30.8528ZM25.5812 47.5194L2.24789 30.8528L1.08542 32.4802L24.4188 49.1469L25.5812 47.5194ZM2.66666 31.6665V18.3332H0.666656V31.6665H2.66666ZM2.24789 19.1469L25.5812 2.48024L24.4188 0.85277L1.08542 17.5194L2.24789 19.1469ZM2.24789 32.4802L25.5812 15.8136L24.4188 14.1861L1.08542 30.8528L2.24789 32.4802ZM24.4188 15.8136L47.7521 32.4802L48.9146 30.8528L25.5812 14.1861L24.4188 15.8136ZM1.08542 19.1469L24.4188 35.8136L25.5812 34.1861L2.24789 17.5194L1.08542 19.1469ZM25.5812 35.8136L48.9146 19.1469L47.7521 17.5194L24.4188 34.1861L25.5812 35.8136ZM24 1.6665V14.9998H26V1.6665H24ZM24 34.9998V48.3332H26V34.9998H24Z"
              fill="#D25F15" />
          </svg>
        </div>
        <p>Куда лучше трудоустроиться выпускнику без опыта работы?</p>
        <div class="item-3 answer">
          <p>Отсутствие опыта, это не повод отчаиваться. Вы молоды, а значит, готовы учиться. Ваше главное конкурентное
            преимущество – это энергия, энтузиазм и неординарное мышление, которые с годами пропадают. </p>
        </div>
      </div>
      <div class="faq__item item-4" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M11.6667 8.33317C13.5076 8.33317 15 9.82555 15 11.6665C15 13.5074 13.5076 14.9998 11.6667 14.9998C9.82574 14.9998 8.33335 13.5074 8.33335 11.6665C8.33335 9.82555 9.82574 8.33317 11.6667 8.33317Z"
              stroke="#D25F15" stroke-width="2" />
            <path
              d="M38.3333 1.6665H11.6667C6.14384 1.6665 1.66669 6.14365 1.66669 11.6665C1.66669 17.1893 6.14384 21.6665 11.6667 21.6665H38.3333C43.8562 21.6665 48.3333 17.1893 48.3333 11.6665C48.3333 6.14365 43.8562 1.6665 38.3333 1.6665Z"
              stroke="#D25F15" stroke-width="2" />
            <path
              d="M38.3333 41.6665C36.4924 41.6665 35 40.1741 35 38.3332C35 36.4922 36.4924 34.9998 38.3333 34.9998C40.1743 34.9998 41.6667 36.4922 41.6667 38.3332C41.6667 40.1741 40.1743 41.6665 38.3333 41.6665Z"
              stroke="#D25F15" stroke-width="2" />
            <path
              d="M11.6667 48.3332H38.3333C43.8562 48.3332 48.3333 43.856 48.3333 38.3332C48.3333 32.8103 43.8562 28.3332 38.3333 28.3332L11.6667 28.3332C6.14384 28.3332 1.66669 32.8103 1.66669 38.3332C1.66669 43.856 6.14384 48.3332 11.6667 48.3332Z"
              stroke="#D25F15" stroke-width="2" />
          </svg>
        </div>
        <p>Насколько правомерно использование услуг аутсорсинга? Как правильно оформить такие отношения?</p>
        <div class="item-4 answer">
          <p>Понятие аутсорсинг юридически нигде не прописано. Однако на него нет и прямого запрета. Поэтому при
            оказании данной услуги мы используем форму гражданско-правовых договорных отношений.</p>
        </div>
      </div>
      <div class="faq__item item-5" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M19.8133 1.6665L19.5267 3.12219L18.43 8.44873C16.6767 9.11829 15.0867 10.0678 13.65 11.1937L8.28999 9.40149L6.85002 8.95512L6.10335 10.2409L2.41332 16.4102L1.66666 17.6962L2.76 18.6522L6.90668 22.1798C6.75668 23.1025 6.56335 24.0152 6.56335 24.9846C6.56335 25.9539 6.75668 26.8668 6.90668 27.7896L2.76 31.3172L1.66666 32.2732L2.41332 33.559L6.10335 39.7284L6.85002 41.0175L8.28999 40.5679L13.65 38.7757C15.0867 39.9016 16.6767 40.8509 18.43 41.5204L19.5267 46.847L19.8133 48.3029H30.1833L30.4733 46.847L31.5667 41.5204C33.32 40.8509 34.91 39.9016 36.3467 38.7757L41.7067 40.5679L43.1467 41.0175L43.8967 39.7284L47.5834 33.559L48.3333 32.2732L47.2367 31.3172L43.09 27.7896C43.2433 26.8668 43.4333 25.9539 43.4333 24.9846C43.4333 24.0152 43.2433 23.1025 43.09 22.1798L47.2367 18.6522L48.3333 17.6962L47.5834 16.4102L43.8967 10.2409L43.1467 8.95512L41.7067 9.40149L36.3467 11.1937C34.91 10.0678 33.32 9.11829 31.5667 8.44873L30.4733 3.12219L30.1833 1.6665H19.8133Z"
              stroke="#D25F15" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M31.6654 24.9846C31.6654 28.6622 28.6788 31.647 24.9988 31.647C21.3188 31.647 18.3321 28.6622 18.3321 24.9846C18.3321 21.307 21.3188 18.3224 24.9988 18.3224C28.6788 18.3224 31.6654 21.307 31.6654 24.9846Z"
              stroke="#D25F15" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
          </svg>
        </div>
        <p>Увольняется очень ценный сотрудник – что делать?</p>
        <div class="item-5 answer">
          <p>Нужно постараться его у держать. А для этого необходимо составить разговор и выяснить причину ухода. Мы
            поможем спланировать беседу и правильно выстроить стратегию разговора.</p>
        </div>
      </div>
      <div class="faq__item item-6" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M38.3334 21.6667V38.3333C38.3334 43.8562 33.8562 48.3333 28.3334 48.3333H11.6667C6.14384 48.3333 1.66669 43.8562 1.66669 38.3333V21.6667C1.66669 19.8257 3.15907 18.3333 5.00002 18.3333H35C36.841 18.3333 38.3334 19.8257 38.3334 21.6667ZM38.3334 21.6667H45C46.841 21.6667 48.3334 23.1591 48.3334 25V31.6667C48.3334 33.5076 46.841 35 45 35H38.3334M15 13.3333V6.66667M25 13.3333V0"
              stroke="#D25F15" stroke-width="2" />
          </svg>
        </div>
        <p>Через три дня ожидается проверка трудинспекции. Вы можете нам помочь или уже поздно?</p>
        <div class="item-6 answer">
          <p>Конечно, три дня для аудита – небольшой срок, но мы успеем проверить наличие основных позиций кадрового
            делопроизводства, так как знаем, на что в первую очередь смотрят проверяющие инспекторы.</p>
        </div>
      </div>
      <div class="faq__item item-7" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M13.3333 48.3332H36.6667M25 48.3332V31.6665M25 31.6665C32.3638 31.6665 38.3333 25.697 38.3333 18.3332V4.99984C38.3333 3.15889 36.8409 1.6665 35 1.6665H15C13.159 1.6665 11.6667 3.15889 11.6667 4.99984V18.3332C11.6667 25.697 17.6362 31.6665 25 31.6665ZM11.6667 8.33317H8.33332C4.65142 8.33317 1.66666 11.3179 1.66666 14.9998C1.66666 18.6817 4.65142 21.6665 8.33332 21.6665H11.6667M38.3333 8.33317H41.6667C45.3486 8.33317 48.3333 11.3179 48.3333 14.9998C48.3333 18.6817 45.3486 21.6665 41.6667 21.6665H38.3333"
              stroke="#D25F15" stroke-width="2" />
          </svg>
        </div>
        <p>Можете ли вы предоставить данные по уровню безработицы, среднюю зп в отрасли и так далее?</p>
        <div class="item-7 answer">
          <p>Да, конечно. Мы ведем регулярный сбор информации и делаем собственный анализ тенденций рынка труда. Готовы
            предоставить обзор динамики заработных плат по регионам, потребность в кадрах и предложение рабочей силы.
          </p>
        </div>
      </div>
      <div class="faq__item item-8" style="display: flex !important;">
        <div class="item__img">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M25 1.6665V48.3332M48.3334 24.9848H1.66669M45 24.9848C45 36.0209 36.0434 44.9998 25 44.9998C13.9567 44.9998 5.00002 36.0209 5.00002 24.9848C5.00002 13.9486 13.9567 4.9978 25 4.9978C36.0434 4.9978 45 13.9486 45 24.9848Z"
              stroke="#D25F15" stroke-width="2" stroke-linecap="square" />
          </svg>
        </div>
        <p>Сколько стоят услуги рекрутинга?</p>
        <div class="item-8 answer">
          <p>Самый распространенный подход, принятый во всем мире – процент от зарплаты найденного работника. При
            подборе линейного персонала доля гонорара HR-агентства составляет 10-20% от зарплаты каждого нанятого
            работника.</p>
        </div>
      </div>
    </div>
  </div>-->
  <div class="candidate-testing">
    <div class="container">
      <div class="candidate-testing__title">
        <h2>Тестирование кандидатов</h2>
      </div>
      <div class="underline-block"></div>
      <p>В ходе поиска персонала мы <a class="text-link"
          href="<?= get_site_url(); ?>/kadrovyj-konsalting/ocenka-i-testirovanie-personala/">тестируем соискателей</a> с
        помощью популярных тестов:</p>
      <div class="candidate-testing__item item-1">
        <img src="<?= get_template_directory_uri(); ?>/image/candidate-testing-item-1.svg"
          alt="Графический элемент лучи">
        <div class="item__text">
          <p>“Резалт”</p>
          <p>Универсальная проверка на продуктивность и результативность соискателя, тест состоит из 20 вопросов, на
            которые нужно ответить за 20 минут;</p>
        </div>
      </div>
      <div class="candidate-testing__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/candidate-testing-item-2.svg"
          alt="Графический элемент график идёт вверх">
        <div class="item__text">
          <p>“Сэйлс”</p>
          <p>Cпециальное тестирование подбора эффективных для менеджеров по продажам на 25 минут из 120 вопросов;</p>
        </div>
      </div>
      <div class="candidate-testing__item item-3">
        <img src="<?= get_template_directory_uri(); ?>/image/candidate-testing-item-3.svg" alt="Графический элемент">
        <div class="item__text">
          <p>“Тулс”</p>
          <p>Тест позволяет оценить личностные качества претендента, включает 200 вопросов, на которые дается 35 минут;
          </p>
        </div>
      </div>
      <div class="candidate-testing__item item-4">
        <img src="<?= get_template_directory_uri(); ?>/image/candidate-testing-item-4.svg" alt="Иконка сообщения">
        <div class="item__text">
          <p>“Регард”</p>
          <p>Тест из 88 вопросов, позволяющий измерить вовлеченность действующих сотрудников по 12 параметрам, рассчитан
            на 20 минут.</p>
        </div>
      </div>
      <div class="candidate-testing__item item-5">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="Иконка звезды ярко-оранжевая">
        <p>Дополнительное преимущество: мы тестируем кандидата на наличие нужных навыков в те моменты, когда он не ждет
          проверки и ведет себя именно так, как привык делать это каждый день.</p>
      </div>
      <div class="candidate-testing__item item-6">
        <img src="<?= get_template_directory_uri(); ?>/image/marker-hard.svg" alt="Иконка звезды ярко-оранжевая">
        <p>Сотрудничество с нашим агентством кадров позволит Вам выстроить эффективную кадровую политику, найти
          необходимых специалистов, которые помогут Вашему бизнесу развиваться и достигать новых высот.</p>
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