<div class="reviews">
  <div class="container">
    <div class="reviews__title">
      <p class='h2'>Отзывы</p>
    </div>
    <div class="underline-block block"></div>
    <div class="reviews-slider swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php $args = array(
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
                  <?php echo get_the_post_thumbnail(); ?>
                </div>
                <div class="item__content">
                  <p class="name"><?= get_post_meta($blog_posts->the_post - get_the_ID(), 'author', true) ?></p>
                  <p class="item__meta organization">
                    <?= get_post_meta($blog_posts->the_post - get_the_ID(), 'organization', true) ?>
                  </p>
                  <div class='reviews-slider__text' data-id="<?= abs($blog_posts->the_post - get_the_ID()) ?>">
                    <p><?php echo wp_trim_words(get_the_content(), 51, '...'); ?></p>
                  </div>
                  <?php echo ('<span class="read-more" data-id="' . abs($blog_posts->the_post - get_the_ID()) . '">Читать полностью</span>'); ?>
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
    <a class="btn btn-position-aware" href="<?= get_site_url(); ?>/o-kompanii/reviews/">ЕЩЕ ОТЗЫВЫ<span
        class="position-aware"></span></a>

  </div>
</div>