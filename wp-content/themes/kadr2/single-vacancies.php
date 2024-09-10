<?php
/*
Template Name: Шаблон статей
Template Post Type: post
*/
?>
<?php get_header(); ?>
<main>
  <?php while (have_posts()):
    the_post(); ?>
    <div class="vacancy-info__title left-bar-height page-header">
      <div class="container">
        <div class="page-header__item item-1 vacancy__title">
          <div class="breadcrumbs">
            <div class="container">
              <span class="link">
                <a class="breadcrumbs__link" href="/">
                  <span>Главная</span>
                </a>
              </span>
              <span class="separator">/</span>
              <span class="link">
                <a class="breadcrumbs__link" href="https://hrbel.by/vakansii/">
                  <span>Вакансии</span>
                </a>
              </span>
              <span class="separator">/</span>
              <span class="breadcrumbs__current"><?php the_title(); ?></span>
            </div><!-- .breadcrumbs -->
          </div>
          <div class="title-info">
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
              </svg><?= get_post_meta($vacancies->the_post - get_the_ID(), 'region', true) ?></p>
            <h1>Вакансия <?php the_title(); ?></h1>
            <?php the_excerpt(); ?>
            <p class="salary">
              <?php if (get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) == 'По результатам собеседования')
                echo 'По результатам собеседования';
              else
                echo 'от ' . get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) . ' BYN' ?>
              </p>
              <button class="btn btn-position-aware popmake-1001" href="#">ОТКЛИКНУТЬСЯ<span
                  class="position-aware"></span></button>
            </div>
          </div>
          <div class="page-header__item item-2">

            <a class="btn btn-position-aware dark smooth-transition" href="#block-1"><img
                src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
              class="position-aware quad"></span></a>
        </div>
      </div>
    </div>
    <div id="block-1" class="vacancy-info__text">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </div>
    <div id="check-out-our-offers" class="check-out-our-offers vacancy-info__more">
      <div class="container">
        <div class="check-out-our-offers__title">
          <h2>Похожие вакансии</h2>
          <div class="underline-block"></div>
        </div>
        <div id="vacancies__response" class="vacancies__response">
          <?php
          $title = get_the_title();
          $id = get_the_ID();
          $args = array(
            'post_type' => 'vacancies',
            'post_status' => 'publish',
            'paged' => 1,
            'posts_per_page' => 6,
            'post__not_in' => [$id],
            's' => $title
          );
          $vacancies = new WP_Query($args);
          if ($vacancies->have_posts()):
            while ($vacancies->have_posts()):
              $vacancies->the_post(); ?>
              <div class="vacancy__item">
                <a class="item__title" href="<?php the_permalink() ?>">
                  <h3><?php the_title() ?></h3>
                </a>
                <p class="salary">
                  <?php if (get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) == 'По результатам собеседования')
                    echo 'По результатам собеседования';
                  else
                    echo 'от ' . get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) . ' BYN' ?>
                  </p>
                  <p class="item__text"><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
                <div class="item__wrap">
                  <p class="created_at">Размещено: <?php if (get_the_date() == wp_date(get_option('date_format')))
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
                  } ?></p>
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
                    </svg><?= get_post_meta($vacancies->the_post - get_the_ID(), 'region', true) ?></p>
                </div>

                <a class="read-more" href="<?php the_permalink() ?>">Узнать подробнее <img
                    src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
                    alt="Графический элемент оранжевая стрелка"></a>
              </div>
            <?php endwhile;
          endif;
          if ($vacancies->have_posts() == false) {
            echo '<p>Извините, похожих вакансий нет</p>';
          }
          ;
          wp_reset_postdata(); ?>
        </div>
      <?php endwhile; // end of the loop. 
  ?>
    </div>
  </div>
  </div>
</main>
<?php get_footer(); ?>

<?php if (function_exists('microdata_vacancy'))
  microdata_vacancy(); ?>