<?php
/*
Template Name: Шаблон статей 2
Template Post Type: post
*/
?>
<?php get_header(); ?>

<?php if (get_the_ID() == 3389 or get_the_ID() == 3478): ?>
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
<?php else: ?>
  <main>
    <?php while (have_posts()):
      the_post(); ?>
      <div class="article-info left-bar-height">
        <div class="container">
          <div class="article-header">
            <div class="article__img">
              <?php echo get_the_post_thumbnail(); ?>
            </div>
            <div class="breadcrumbs breadcrumbs_arcticle">
              <div class="container">
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
              </div><!-- .breadcrumbs -->
            </div>
          </div>
          <div class="article__title 33">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>


          <div class="article__info">
            <div class="article__author">
              <span>Автор:</span> <span>
                <?php the_author(); ?>
              </span>
            </div>
            <div class="article__reading-time">
              <?php echo do_shortcode('[rt_reading_time label="Время прочтения:" postfix="мин" postfix_singular="мин"]'); ?>

            </div>
            <div class="article__date">
              <span>Дата публикации:</span> <span>
                <?php the_time(' j.m.Y '); ?>
              </span>
            </div>
            <?php if (get_the_modified_date(' j/m/Y ') !== get_the_time(' j/m/Y ')) { ?>
              <div class="article__date">
                <span>Дата обновления:</span> <span>
                  <?php the_modified_time(' j.m.Y '); ?>
                </span>
              </div>
            <?php } ?>
          </div>
        </div>

      </div>
      <div class="article-text">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; // end of the loop.               ?>
    <div class="article-bottom" style='margin-bottom: 150px'>
      <div class="container">
        <div class="article__author">
          <div class="author__header">
            <h5>Автор статьи:</h5>
          </div>
          <div class="author__content">
            <div class="author__img">
              <img src="<?= get_template_directory_uri(); ?>/image/team/tatyana-dobriyanik.jpg" alt="Фото автора статьи">
            </div>
            <div class="author__info">
              <h5>
                <?php the_author(); ?>
              </h5>
              <p>
                <?php the_author_meta('description'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="article__share">
          <div class="share__header">
            <h5>Рассказать друзьям:</h5>
          </div>
          <div class="share__item">
            <a href="https://telegram.me/share/url?url=<?= get_permalink() ?>&amp;text=<?= the_title() ?>"
              target="_blank">
              <svg width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.341 19.3553L12.7786 27.266C13.5833 27.266 13.9318 26.9203 14.3497 26.5052L18.1223 22.8998L25.9394 28.6246C27.3731 29.4236 28.3832 29.0028 28.7699 27.3056L33.9011 3.26197L33.9025 3.26055C34.3573 1.14122 33.1361 0.312465 31.7393 0.832382L1.57842 12.3796C-0.479998 13.1786 -0.448831 14.3261 1.2285 14.846L8.93942 17.2445L26.8503 6.03722C27.6932 5.47905 28.4597 5.78788 27.8292 6.34605L13.341 19.3553Z" />
              </svg>
            </a>
          </div>
          <div class="share__item">
            <a href="viber://forward?text=<?= the_title() ?> <?= get_permalink() ?>" target="_blank">
              <svg style="margin-left: 14px; margin-top: 5px;" width="45px" height="45px" viewBox="0 0 35 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.96472 6.2019C7.77897 6.17476 7.58952 6.21205 7.42791 6.30756H7.41413C7.03892 6.52749 6.70092 6.80547 6.41269 7.13115C6.17316 7.40809 6.04322 7.68831 6.0091 7.95803C5.98875 8.11881 6.00253 8.27959 6.05044 8.43315L6.0675 8.44365C6.33722 9.2364 6.68963 9.99896 7.12013 10.7169C7.67467 11.7255 8.35713 12.6583 9.15057 13.4922L9.17419 13.5263L9.2116 13.5539L9.23522 13.5814L9.26278 13.6051C10.0997 14.4008 11.0347 15.0865 12.0453 15.6453C13.2003 16.274 13.9012 16.5713 14.3218 16.6947V16.7012C14.4452 16.7387 14.5574 16.7557 14.6703 16.7557C15.0288 16.7294 15.3682 16.5839 15.6343 16.3423C15.9585 16.054 16.2334 15.7146 16.4481 15.3376V15.331C16.6495 14.9517 16.5813 14.5927 16.2906 14.3499C15.7083 13.841 15.0788 13.389 14.4104 13C13.9628 12.7572 13.5081 12.9042 13.3237 13.1503L12.9306 13.6457C12.7291 13.8918 12.3629 13.8577 12.3629 13.8577L12.3524 13.8643C9.62175 13.1667 8.89332 10.4019 8.89332 10.4019C8.89332 10.4019 8.85919 10.0259 9.11185 9.83425L9.60403 9.43787C9.83963 9.24625 10.0037 8.79212 9.75103 8.3439C9.36477 7.67463 8.91373 7.04489 8.40441 6.46375C8.29306 6.32674 8.13685 6.23353 7.96341 6.20059L7.96472 6.2019Z" />
                <path
                  d="M12.5792 5.00009C12.3031 5.00009 12.0792 5.22395 12.0792 5.50009C12.0792 5.77623 12.3031 6.00009 12.5792 6.00009C13.8437 6.00009 14.8944 6.41341 15.7245 7.20484C16.1518 7.63824 16.4844 8.15124 16.7028 8.71263C16.922 9.27613 17.0217 9.877 16.9961 10.4789C16.9844 10.7547 17.1985 10.9879 17.4744 10.9996C17.7503 11.0114 17.9835 10.7972 17.9952 10.5213C18.0267 9.7809 17.9039 9.04214 17.6347 8.35009C17.3655 7.65807 16.9558 7.02746 16.4307 6.49657L16.4207 6.48696C15.3907 5.50193 14.0851 5.00009 12.5792 5.00009Z" />
                <path
                  d="M12.5452 6.64442C12.2691 6.64442 12.0452 6.86828 12.0452 7.14442C12.0452 7.42056 12.2691 7.64442 12.5452 7.64442H12.5615C13.474 7.70872 14.1379 8.01286 14.6034 8.5121C15.0799 9.02626 15.3267 9.66489 15.3084 10.4551C15.302 10.7311 15.5207 10.9601 15.7967 10.9665C16.0728 10.9729 16.3018 10.7543 16.3082 10.4782C16.3322 9.44071 15.9985 8.54607 15.3363 7.83174L15.3354 7.8308C14.6588 7.10472 13.7305 6.72061 12.6122 6.64554L12.5955 6.64442H12.5452Z" />
                <path
                  d="M12.5263 8.31877C12.2505 8.30426 12.0152 8.51604 12.0007 8.7918C11.9862 9.06756 12.198 9.30287 12.4737 9.31739C12.8924 9.33943 13.1592 9.46499 13.327 9.63443C13.4956 9.8046 13.6216 10.0771 13.6446 10.5043C13.6595 10.7801 13.895 10.9916 14.1708 10.9767C14.4465 10.9619 14.658 10.7264 14.6432 10.4506C14.6109 9.85058 14.4231 9.32011 14.0376 8.93078C13.6513 8.54072 13.1238 8.35022 12.5263 8.31877Z" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7.06673 2.38357C10.2488 1.67227 13.5487 1.67227 16.7308 2.38357L17.0699 2.45935C18.9667 2.88334 20.4637 4.33816 20.9418 6.22204C21.7495 9.40488 21.7495 12.7391 20.9418 15.9219C20.4637 17.8058 18.9666 19.2606 17.0699 19.6846L16.7308 19.7604C14.732 20.2072 12.6867 20.3733 10.6533 20.2588L8.0001 22.6327C7.79637 22.815 7.50959 22.872 7.25164 22.7815C6.99369 22.691 6.80543 22.4673 6.76029 22.1976L6.32148 19.5763C4.61909 19.0473 3.29919 17.6691 2.85579 15.9219C2.04807 12.7391 2.04807 9.40488 2.85579 6.22204C3.33386 4.33816 4.83092 2.88334 6.7277 2.45935L7.06673 2.38357ZM16.4036 3.84744C13.437 3.18432 10.3606 3.18432 7.39395 3.84744L7.05492 3.92323C5.71009 4.22383 4.64866 5.25532 4.3097 6.591C3.56343 9.53171 3.56343 12.6122 4.3097 15.5529C4.64866 16.8886 5.71008 17.9201 7.05492 18.2207L7.14448 18.2407C7.44237 18.3073 7.67018 18.5478 7.72058 18.8488L8.01485 20.6068L9.88722 18.9315C10.0384 18.7962 10.2379 18.7279 10.4403 18.7423C12.4338 18.8834 14.4427 18.7348 16.4036 18.2965L16.7426 18.2207C18.0875 17.9201 19.1489 16.8886 19.4879 15.5529C20.2341 12.6122 20.2341 9.53171 19.4879 6.591C19.1489 5.25532 18.0875 4.22384 16.7426 3.92323L16.4036 3.84744Z" />
              </svg>
            </a>
          </div>
          <div class="share__item">
            <a href="https://vk.com/share.php?url=<?= get_permalink() ?>&amp;text=<?= the_title() ?>" target="_blank">
              <svg width="38" height="22" viewBox="0 0 38 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M37.6613 19.3472C37.5592 19.1762 36.9274 17.8033 33.8871 14.9816C30.7044 12.0269 31.1319 12.5067 34.9655 7.39768C37.3003 4.2862 38.2337 2.38605 37.9416 1.57374C37.6637 0.799436 35.9464 1.0037 35.9464 1.0037L30.2365 1.03695C30.2365 1.03695 29.8137 0.979949 29.4978 1.16759C29.1914 1.35285 28.9943 1.78038 28.9943 1.78038C28.9943 1.78038 28.0893 4.18881 26.8828 6.23622C24.3389 10.5567 23.32 10.7847 22.9043 10.5163C21.9376 9.89161 22.1799 8.00335 22.1799 6.66375C22.1799 2.47631 22.8141 0.730556 20.9424 0.279272C20.3201 0.129636 19.8641 0.0298786 18.2751 0.0132523C16.2372 -0.00812425 14.5105 0.0203779 13.5343 0.497788C12.8835 0.816062 12.3823 1.52624 12.6887 1.56662C13.0664 1.6165 13.9214 1.79701 14.3751 2.41456C14.9618 3.21024 14.9404 5.00112 14.9404 5.00112C14.9404 5.00112 15.2776 9.92962 14.1542 10.5424C13.3823 10.9628 12.3253 10.1054 10.057 6.18396C8.89556 4.17694 8.01674 1.95615 8.01674 1.95615C8.01674 1.95615 7.84811 1.54287 7.54646 1.32197C7.18068 1.05358 6.66764 0.968074 6.66764 0.968074L1.238 1.00133C1.238 1.00133 0.423311 1.02508 0.124039 1.37898C-0.14198 1.69488 0.102663 2.34568 0.102663 2.34568C0.102663 2.34568 4.35422 12.2905 9.16633 17.3045C13.5818 21.9005 18.5934 21.5989 18.5934 21.5989H20.8641C20.8641 21.5989 21.5505 21.5229 21.8996 21.1452C22.2227 20.7984 22.2108 20.1476 22.2108 20.1476C22.2108 20.1476 22.1657 17.1003 23.5813 16.6514C24.9755 16.2096 26.7664 19.5966 28.6641 20.9006C30.0987 21.8863 31.1889 21.6701 31.1889 21.6701L36.2647 21.5989C36.2647 21.5989 38.9201 21.435 37.6613 19.3472Z" />
              </svg>
            </a>
          </div>
          <div class="share__item">
            <script src="https://yastatic.net/share2/share.js"></script>
            <a class="ya-share2" data-curtain data-shape="round" data-limit="0" data-more-button-type="short"
              data-services="vkontakte,odnoklassniki,telegram,twitter,viber,whatsapp,linkedin">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_801_15628)">
                  <path
                    d="M18.3042 11.6932C17.9488 11.3357 17.5548 11.0189 17.1294 10.7484C16.0027 10.0269 14.6929 9.64357 13.3551 9.64357C11.4982 9.64011 9.71669 10.3779 8.40595 11.6932L2.0471 18.0571C0.73858 19.3681 0.00312624 21.1444 0.00195457 22.9967C-0.000505921 26.862 3.13088 29.9975 6.99621 29.9999C8.85025 30.0064 10.6301 29.2721 11.9403 27.9603L17.1894 22.7112C17.2848 22.6167 17.338 22.4877 17.3373 22.3534C17.3357 22.0773 17.1105 21.8548 16.8344 21.8564H16.6345C15.5378 21.8602 14.4509 21.6496 13.4351 21.2365C13.2479 21.1595 13.0328 21.2029 12.8902 21.3465L9.11586 25.1258C7.94385 26.2978 6.04364 26.2978 4.87163 25.1258C3.69961 23.9538 3.69961 22.0536 4.87163 20.8815L11.2555 14.5027C12.4266 13.3331 14.3237 13.3331 15.4948 14.5027C16.284 15.2455 17.5151 15.2455 18.3042 14.5027C18.6438 14.1629 18.8496 13.7121 18.8841 13.2329C18.9206 12.6603 18.7095 12.0994 18.3042 11.6932Z" />
                  <path
                    d="M27.9477 2.04999C25.2144 -0.683329 20.7828 -0.683329 18.0495 2.04999L12.8054 7.28903C12.6614 7.43373 12.6199 7.65137 12.7004 7.83895C12.7801 8.02706 12.9661 8.1478 13.1703 8.14388H13.3553C14.4507 8.14188 15.5358 8.35413 16.5497 8.76878C16.7369 8.84582 16.952 8.80235 17.0946 8.65882L20.8589 4.89948C22.0309 3.72746 23.9311 3.72746 25.1032 4.89948C26.2752 6.07149 26.2752 7.9717 25.1032 9.14371L20.414 13.8279L20.374 13.8728L18.7343 15.5026C17.5632 16.6722 15.6661 16.6722 14.495 15.5026C13.7058 14.7598 12.4747 14.7598 11.6855 15.5026C11.3438 15.845 11.1378 16.2997 11.1056 16.7823C11.0691 17.355 11.2803 17.9158 11.6855 18.3221C12.2642 18.9032 12.9412 19.377 13.6852 19.7218C13.7901 19.7718 13.8951 19.8118 14.0001 19.8568C14.1051 19.9018 14.2151 19.9367 14.32 19.9767C14.425 20.0168 14.535 20.0517 14.64 20.0817L14.9349 20.1617C15.1349 20.2117 15.3349 20.2517 15.5398 20.2867C15.7867 20.3233 16.0353 20.3467 16.2847 20.3567H16.6346H16.6646L16.9645 20.3217C17.0745 20.3167 17.1895 20.2917 17.3195 20.2917H17.4894L17.8344 20.2417L17.9944 20.2117L18.2843 20.1517H18.3393C19.5673 19.8433 20.6886 19.2075 21.5837 18.312L27.9475 11.9482C30.681 9.21489 30.681 4.78331 27.9477 2.04999Z" />
                </g>
                <defs>
                  <clipPath id="clip0_801_15628">
                    <rect width="30" height="30" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
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
<?php endif; ?>



<?php get_footer(); ?>

<?php if (function_exists('custom_microdata'))
  custom_microdata(); ?>
<?php if (function_exists('microdata_article'))
  microdata_article(); ?>