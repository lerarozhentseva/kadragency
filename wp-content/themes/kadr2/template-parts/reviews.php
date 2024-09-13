<!-- <div class="reviews">
  <div class="container">
    <div class="reviews__title">
      <p class='h2'>Отзывы</p>
    </div>
    <div class="underline-block block"></div>
    <div class="reviews-slider swiper-container">
      <div class="swiper-wrapper">
        <.?php $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'cat' => 13,
          'paged' => 0,
        );
        $blog_posts = new WP_Query($args);
        if ($blog_posts->have_posts()) {
          while ($blog_posts->have_posts()) {
            $blog_posts->the_post(); ?>
            <div class="swiper-slide">

              <div class="reviews__item">
                <div class="item__img">
                  <.?php echo get_the_post_thumbnail(); ?>
                </div>
                <div class="item__content">
                  <p class="name"><.?= get_post_meta($blog_posts->the_post - get_the_ID(), 'author', true) ?></p>
                  <p class="item__meta organization">
                    <.?= get_post_meta($blog_posts->the_post - get_the_ID(), 'organization', true) ?>
                  </p>
                  <div class='reviews-slider__text' data-id="<.?= abs($blog_posts->the_post - get_the_ID()) ?>">
                    <p><.?php echo wp_trim_words(get_the_content(), 51, '...'); ?></p>
                  </div>
                  <.?php echo ('<span class="read-more" data-id="' . abs($blog_posts->the_post - get_the_ID()) . '">Читать полностью</span>'); ?>
                </div>

              </div>

            </div>
          <.?php }
          ;
        }
        ;

        wp_reset_postdata();
        ?>
      </div>

      <div class="swiper-pagination"></div>

      <div class="swiper-button-prev">
        <img src="<.?= get_template_directory_uri(); ?>/image/nav-vector.svg" alt="Векторный графический элемент">
      </div>
      <div class="swiper-button-next">
        <img src="<.?= get_template_directory_uri(); ?>/image/nav-vector.svg" alt="Векторный графический элемент">
      </div>
    </div>
    <a class="btn btn-position-aware" href="<.?= get_site_url(); ?>/o-kompanii/reviews/">ЕЩЕ ОТЗЫВЫ<span
        class="position-aware"></span></a>

  </div>
</div> -->

<div class="reviews">
    <div class="container">
        <div class="reviews__title">
            <p class="h2">Отзывы</p>
        </div>
        <div class="underline-block block"></div>
        <div class="reviews-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="reviews__item">
                        <div class="item__img">
                            <img src="<?= get_template_directory_uri(); ?>/image/reviews/review1.jpg" alt="">
                        </div>
                        <div class="item__content">
                            <p class="name">Екатерина Егорова</p>
                            <p class="item__meta organization">ООО “ БПМ Клауд”</p>
                            <div class="reviews-slider__text" data-id="97">
                                <p>Благодарим кадровое агентство Hrbel.by за оказание услуг по подбору персонала для нашей компании. В процессе сотрудничества работники Hrbel.by помогли нам найти подходящих кандидатов сразу по нескольким вакансиям с нестандартными требованиям. Мы искали в свою команду сотрудников по IT-специальностям и финансовому профилю. Хотим отметить, что кандидаты на вакантные должности которых нам предлагали...</p>
                            </div>
                            <span class="read-more" data-id="97">Читать полностью</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="reviews__item">
                        <div class="item__img">
                            <img src="<?= get_template_directory_uri(); ?>/image/reviews/review2.jpg" alt="">
                        </div>
                        <div class="item__content">
                            <p class="name">Екатерина Егорова</p>
                            <p class="item__meta organization">ООО “ БПМ Клауд”</p>
                            <div class="reviews-slider__text" data-id="97">
                                <p>Благодарим кадровое агентство Hrbel.by за оказание услуг по подбору персонала для нашей компании. В процессе сотрудничества работники Hrbel.by помогли нам найти подходящих кандидатов сразу по нескольким вакансиям с нестандартными требованиям. Мы искали в свою команду сотрудников по IT-специальностям и финансовому профилю. Хотим отметить, что кандидаты на вакантные должности которых нам предлагали...</p>
                            </div>
                            <span class="read-more" data-id="97">Читать полностью</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="reviews__item">
                        <div class="item__img">
                            <img src="<?= get_template_directory_uri(); ?>/image/reviews/review3.jpg" alt="">
                        </div>
                        <div class="item__content">
                            <p class="name">Екатерина Егорова</p>
                            <p class="item__meta organization">ООО “ БПМ Клауд”</p>
                            <div class="reviews-slider__text" data-id="97">
                                <p>Благодарим кадровое агентство Hrbel.by за оказание услуг по подбору персонала для нашей компании. В процессе сотрудничества работники Hrbel.by помогли нам найти подходящих кандидатов сразу по нескольким вакансиям с нестандартными требованиям. Мы искали в свою команду сотрудников по IT-специальностям и финансовому профилю. Хотим отметить, что кандидаты на вакантные должности которых нам предлагали...</p>
                            </div>
                            <span class="read-more" data-id="97">Читать полностью</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="reviews__item">
                        <div class="item__img">
                            <img src="<?= get_template_directory_uri(); ?>/image/reviews/review4.jpg" alt="">
                        </div>
                        <div class="item__content">
                            <p class="name">Екатерина Егорова</p>
                            <p class="item__meta organization">ООО “ БПМ Клауд”</p>
                            <div class="reviews-slider__text" data-id="97">
                                <p>Благодарим кадровое агентство Hrbel.by за оказание услуг по подбору персонала для нашей компании. В процессе сотрудничества работники Hrbel.by помогли нам найти подходящих кандидатов сразу по нескольким вакансиям с нестандартными требованиям. Мы искали в свою команду сотрудников по IT-специальностям и финансовому профилю. Хотим отметить, что кандидаты на вакантные должности которых нам предлагали...</p>
                            </div>
                            <span class="read-more" data-id="97">Читать полностью</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="reviews__item">
                        <div class="item__img">
                            <img src="<?= get_template_directory_uri(); ?>/image/reviews/review5.jpg" alt="">
                        </div>
                        <div class="item__content">
                            <p class="name">Екатерина Егорова</p>
                            <p class="item__meta organization">ООО “ БПМ Клауд”</p>
                            <div class="reviews-slider__text" data-id="97">
                                <p>Благодарим кадровое агентство Hrbel.by за оказание услуг по подбору персонала для нашей компании. В процессе сотрудничества работники Hrbel.by помогли нам найти подходящих кандидатов сразу по нескольким вакансиям с нестандартными требованиям. Мы искали в свою команду сотрудников по IT-специальностям и финансовому профилю. Хотим отметить, что кандидаты на вакантные должности которых нам предлагали...</p>
                            </div>
                            <span class="read-more" data-id="97">Читать полностью</span>
                        </div>
                    </div>

                </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev">
                <img src="<?= get_template_directory_uri(); ?>/image/nav-vector.svg" alt="Векторный графический элемент">
            </div>
            <div class="swiper-button-next">
                <img src="<?= get_template_directory_uri(); ?>/image/nav-vector.svg" alt="Векторный графический элемент">
            </div>
            </div>
            <a class="btn btn-position-aware" href="#">ЕЩЕ ОТЗЫВЫ<span class="position-aware"></span></a>
    </div>
  </div>