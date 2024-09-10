<?php
/*
Template Name: Шаблон статей (Обновленный)
Template Post Type: post
*/
?>
<?php get_header(); ?>

<main class="new-article">
  <?php while (have_posts()):
    the_post(); ?>
    <div class="container">
      <div class="new-article-info ">
        <div class="breadcrumbs breadcrumbs_new-arcticle">
          <span class="link">
            <a class="breadcrumbs__link" href="/">
              <span>Главная</span>
            </a>
          </span>
          <span class="separator">/</span>
          <span class="link">
            <a class="breadcrumbs__link" href="https://hrbel.by/infocentr/">
              <span>Инфоцентр</span>
            </a>
          </span>
          <span class="separator">/</span>
          <span class="breadcrumbs__current">
            <?php the_title(); ?>
          </span>
        </div>
        <div class="new-article__title 33">
          <h1>
            <?php the_title(); ?>
          </h1>
        </div>
        <div class="new-article__img">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="new-article__info">
          <div class="new-article__info-item">
            <span>Автор:</span>
            <span>
              <?php the_author(); ?>
            </span>
          </div>
          <div class="new-article__info-item">
            <?php echo do_shortcode('[rt_reading_time label="Время прочтения:" postfix="мин" postfix_singular="мин"]'); ?>
          </div>
          <div class="new-article__info-item">
            <span>Дата публикации:</span>
            <span>
              <?php the_time(' j.m.Y '); ?>
            </span>
          </div>
          <?php if (get_the_modified_date('j/m/Y') !== get_the_time('j/m/Y')) { ?>
            <div class="new-article__info-item">
              <span>Дата обновления:</span>
              <span>
                <?php the_modified_time('j.m.Y'); ?>
              </span>
            </div>
          <?php } else { ?>
            <div class="new-article__info-item">
              <span>Дата обновления:</span>
              <span>
                <?php the_time('j.m.Y'); ?>
              </span>
            </div>
          <?php } ?>

        </div>
        <div class="new-article__content">
          <?php the_content(); ?>
        </div>
        <div class="new-article__bottom">
          <div class="new-article__author">
            <div class="new-author__header">
              <h5>Автор статьи:</h5>
            </div>
            <div class="new-author__content">
              <div class="new-author__img">
                <img src="<?= get_template_directory_uri(); ?>/image/team/tatyana-dobriyanik.jpg"
                  alt="Фото автора статьи">
              </div>
              <div class="new-author__info">
                <h5>
                  <?php the_author(); ?>
                </h5>
                <p>
                  <?php the_author_meta('description'); ?>
                </p>
              </div>
            </div>
          </div>
          <div class="new-article__share">
            <div class="share__header">
              <h5>Рассказать друзьям:</h5>
            </div>
            <div class="share__items">
              <div class="share__item">
                <a href="https://telegram.me/share/url?url=<?= get_permalink() ?>&amp;text=<?= the_title() ?>"
                  target="_blank">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11087_26890)">
                      <path
                        d="M11.2727 17.1557L10.8227 23.4097C11.4665 23.4097 11.7453 23.1364 12.0796 22.8083L15.0978 19.9579L21.3516 24.4838C22.4986 25.1155 23.3067 24.7828 23.6161 23.4411L27.7211 4.43254L27.7223 4.43142C28.0861 2.75591 27.1091 2.10071 25.9916 2.51175L1.86237 11.6408C0.215602 12.2725 0.240536 13.1797 1.58243 13.5907L7.75132 15.4869L22.0804 6.62661C22.7547 6.18533 23.3679 6.42949 22.8635 6.87077L11.2727 17.1557Z"
                        fill="#D25F15" />
                    </g>
                    <defs>
                      <clipPath id="clip0_11087_26890">
                        <rect width="27.2" height="27.2" fill="white" transform="translate(0.599609 -0.0078125)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
              <div class="share__item">
                <a href="https://www.instagram.com/hrbel.by/" target="_blank">
                  <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11087_26869)">
                      <path
                        d="M22.732 0.193359H4.06641C1.93422 0.193359 0.199219 1.92836 0.199219 4.06055V22.7262C0.199219 24.8584 1.93422 26.5934 4.06641 26.5934H22.732C24.8642 26.5934 26.5992 24.8584 26.5992 22.7262V4.06055C26.5992 1.92836 24.8642 0.193359 22.732 0.193359ZM13.4508 20.3027C9.6124 20.3027 6.48984 17.1802 6.48984 13.3418C6.48984 9.50341 9.6124 6.38086 13.4508 6.38086C17.2892 6.38086 20.4117 9.50341 20.4117 13.3418C20.4117 17.1802 17.2892 20.3027 13.4508 20.3027ZM21.1852 7.92773C19.9058 7.92773 18.8648 6.88682 18.8648 5.60742C18.8648 4.32803 19.9058 3.28711 21.1852 3.28711C22.4646 3.28711 23.5055 4.32803 23.5055 5.60742C23.5055 6.88682 22.4646 7.92773 21.1852 7.92773Z"
                        fill="#D25F15" />
                      <path
                        d="M20.9992 4.99414C20.5578 4.99414 20.1992 5.35268 20.1992 5.79414C20.1992 6.2356 20.5578 6.59414 20.9992 6.59414C21.4407 6.59414 21.7992 6.2356 21.7992 5.79414C21.7992 5.35268 21.4407 4.99414 20.9992 4.99414Z"
                        fill="#D25F15" />
                      <path
                        d="M13.7992 8.19336C10.7117 8.19336 8.19922 10.7059 8.19922 13.7934C8.19922 16.8809 10.7117 19.3934 13.7992 19.3934C16.8867 19.3934 19.3992 16.8809 19.3992 13.7934C19.3992 10.7059 16.8867 8.19336 13.7992 8.19336Z"
                        fill="#D25F15" />
                    </g>
                    <defs>
                      <clipPath id="clip0_11087_26869">
                        <rect width="26.4" height="26.4" fill="white" transform="translate(0.199219 0.193359)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
              <div class="share__item">
                <a href="https://vk.com/share.php?url=<?= get_permalink() ?>&amp;text=<?= the_title() ?>" target="_blank">
                  <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11087_26875)">
                      <path
                        d="M30.129 22.4911C30.0473 22.3522 29.5419 21.2378 27.1097 18.9474C24.5635 16.5489 24.9056 16.9384 27.9724 12.7912C29.8402 10.2655 30.587 8.72308 30.3533 8.0637C30.1309 7.43516 28.7571 7.60097 28.7571 7.60097L24.1892 7.62796C24.1892 7.62796 23.851 7.58169 23.5983 7.73401C23.3531 7.88439 23.1954 8.23143 23.1954 8.23143C23.1954 8.23143 22.4715 10.1864 21.5062 11.8484C19.4712 15.3555 18.656 15.5406 18.3235 15.3227C17.5501 14.8156 17.7439 13.2828 17.7439 12.1954C17.7439 8.79634 18.2513 7.37925 16.754 7.01293C16.2561 6.89146 15.8913 6.81048 14.6201 6.79699C12.9898 6.77964 11.6084 6.80277 10.8274 7.1903C10.3068 7.44866 9.90585 8.02514 10.151 8.05791C10.4531 8.0984 11.1371 8.24493 11.5001 8.74622C11.9694 9.3921 11.9523 10.8458 11.9523 10.8458C11.9523 10.8458 12.2221 14.8465 11.3234 15.3439C10.7058 15.6852 9.86025 14.9891 8.04561 11.806C7.11645 10.1768 6.41339 8.37411 6.41339 8.37411C6.41339 8.37411 6.27848 8.03863 6.03717 7.85933C5.74455 7.64146 5.33412 7.57205 5.33412 7.57205L0.990397 7.59904C0.990397 7.59904 0.338649 7.61832 0.0992315 7.9056C-0.113584 8.16203 0.0821302 8.6903 0.0821302 8.6903C0.0821302 8.6903 3.48338 16.7629 7.33306 20.833C10.8654 24.5637 14.8747 24.3188 14.8747 24.3188H16.6912C16.6912 24.3188 17.2404 24.2571 17.5197 23.9506C17.7781 23.6691 17.7686 23.1408 17.7686 23.1408C17.7686 23.1408 17.7325 20.6672 18.865 20.3028C19.9804 19.9441 21.4131 22.6935 22.9313 23.752C24.079 24.5521 24.9512 24.3767 24.9512 24.3767L29.0118 24.3188C29.0118 24.3188 31.1361 24.1858 30.129 22.4911Z"
                        fill="#D25F15" />
                    </g>
                    <defs>
                      <clipPath id="clip0_11087_26875">
                        <rect width="30.4" height="30.4" fill="white" transform="translate(0 0.392578)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
              <div class="share__item">
                <script src="https://yastatic.net/share2/share.js"></script>
                <a class="ya-share2" data-curtain data-shape="round" data-limit="0" data-more-button-type="short"
                  data-services="vkontakte,odnoklassniki,telegram,twitter,viber,whatsapp,linkedin">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11087_26881)">
                      <path
                        d="M14.73 9.60321C14.444 9.32224 14.1268 9.07318 13.7845 8.86058C12.8777 8.29352 11.8236 7.9922 10.7468 7.9922C9.25235 7.98948 7.8186 8.56938 6.76369 9.60321L1.64597 14.6052C0.592851 15.6356 0.000944143 17.0318 1.16619e-06 18.4877C-0.00197909 21.5258 2.51822 23.9902 5.6291 23.9922C7.12127 23.9972 8.5537 23.4201 9.60823 22.389L13.8328 18.2633C13.9095 18.189 13.9524 18.0876 13.9518 17.982C13.9505 17.765 13.7693 17.5901 13.5471 17.5914H13.3862C12.5035 17.5944 11.6288 17.4289 10.8112 17.1042C10.6606 17.0436 10.4875 17.0778 10.3727 17.1906L7.33504 20.1611C6.39178 21.0823 4.86246 21.0823 3.9192 20.1611C2.97594 19.2399 2.97594 17.7464 3.9192 16.8252L9.05706 11.8114C9.99957 10.8921 11.5264 10.8921 12.4689 11.8114C13.1041 12.3953 14.0949 12.3953 14.73 11.8114C15.0033 11.5443 15.169 11.1901 15.1967 10.8134C15.2261 10.3633 15.0561 9.9225 14.73 9.60321Z"
                        fill="#D25F15" />
                      <path
                        d="M22.3518 1.60344C20.1531 -0.544898 16.5884 -0.544898 14.3897 1.60344L10.1714 5.72124C10.0555 5.83497 10.0221 6.00603 10.0869 6.15347C10.151 6.30132 10.3006 6.39622 10.4649 6.39314H10.6137C11.4948 6.39157 12.3677 6.5584 13.1833 6.88431C13.3338 6.94485 13.5069 6.91069 13.6216 6.79788L16.6496 3.8431C17.5923 2.92191 19.1209 2.92191 20.0636 3.8431C21.0064 4.76428 21.0064 6.25781 20.0636 7.179L16.2917 10.8607L16.2595 10.896L14.9405 12.177C13.9985 13.0963 12.4725 13.0963 11.5305 12.177C10.8956 11.5931 9.90535 11.5931 9.27054 12.177C8.99566 12.4461 8.82992 12.8034 8.80405 13.1828C8.77465 13.6329 8.94453 14.0737 9.27054 14.393C9.73598 14.8498 10.2805 15.2222 10.879 15.4932C10.9635 15.5325 11.0479 15.5639 11.1324 15.5993C11.2168 15.6346 11.3053 15.6621 11.3897 15.6936C11.4742 15.725 11.5626 15.7525 11.6471 15.7761L11.8843 15.8389C12.0452 15.8782 12.206 15.9097 12.3709 15.9372C12.5695 15.966 12.7695 15.9844 12.9701 15.9922H13.2515H13.2757L13.5169 15.9647C13.6054 15.9608 13.6979 15.9411 13.8025 15.9411H13.9392L14.2166 15.9018L14.3453 15.8783L14.5786 15.8311H14.6228C15.6106 15.5887 16.5125 15.089 17.2326 14.3852L22.3517 9.38328C24.5505 7.23494 24.5505 3.75179 22.3518 1.60344Z"
                        fill="#D25F15" />
                    </g>
                    <defs>
                      <clipPath id="clip0_11087_26881">
                        <rect width="24" height="24" fill="white" transform="translate(0 -0.0078125)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; // end of the loop.               ?>
  <div class="subscribe">
    <div class="container">
      <div class="wrapper">
        <div class="subscribe__text">
          <span>Понравилась статья?</span>
          <span>Подпишитесь на наши новости</span>
        </div>
        <div class="subscribe__link">
          <?php echo do_shortcode('[mailpoet_form id="1"]') ?>
        </div>
      </div>
    </div>
  </div>
  <div class="more-interesting">
    <div class="container">
      <div class="more-interesting__title">
        <h3>Также вам может быть интересно</h3>
        <div class="underline-block"></div>
      </div>
      <div class="more-interesting-slider swiper-container">
        <div class="swiper-wrapper">

          <?php
          $currentPost = get_the_ID();
          $currentPost = array($currentPost);
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'cat' => 15,
            'paged' => 0,
            'order' => 'DESC',
            'posts_per_page' => 5,
            'post__not_in' => $currentPost
          );
          $blog_posts = new WP_Query($args);
          if ($blog_posts->have_posts()) {
            while ($blog_posts->have_posts()) {
              $blog_posts->the_post(); ?>
              <div class="swiper-slide">
                <div class="more-interesting__item">
                  <div class="item__img">
                    <?php echo get_the_post_thumbnail(); ?>
                  </div>
                  <div class="item__content">
                    <div class="item__content-main">
                      <p class="meta-data">
                        <?php
                        $date = get_the_time('d.m.Y');
                        echo $date;
                        ?>
                      </p>
                      <a class="item__title" href="<?php the_permalink() ?>">
                        <h5>
                          <?php the_title() ?>
                        </h5>
                      </a>
                      <p class="item__text">
                        <?php echo wp_trim_words(get_the_content(), 32, '...'); ?>
                      </p>
                    </div>
                    <a class="read-more" href="<?php the_permalink() ?>">Читать статью</a>
                  </div>
                </div>
              </div>
            <?php }
            ;
          }
          ;
          wp_reset_postdata();
          ?>
        </div>
        <!-- <div class="more-interesting-slider-pagination swiper-pagination"></div> -->
      </div>
    </div>
  </div>
</main>



<?php get_footer(); ?>

<?php if (function_exists('custom_microdata'))
  custom_microdata(); ?>
<?php if (function_exists('microdata_article'))
  microdata_article(); ?>