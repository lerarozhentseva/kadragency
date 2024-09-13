<!-- <div class="news">
  <div class="container">
    <div class="news__title">
      <p class='h2'>Новости и статьи</p>
      <div class="underline-block block"></div>
    </div>
    <..?php $args = array(
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
        <div class="news__item" onClick="window.location.href='<..?php the_permalink() ?>'">
          <div class="item__img">
            <..?php echo get_the_post_thumbnail(); ?>
          </div>
          <div class="item__content">
            <a class="item__title" href="<..?php the_permalink() ?>">
              <p><..?php the_title() ?></p>
            </a>
            <p class="meta-data"><.?php the_time(' j.m.Y '); ?></p>
            <..?php the_excerpt(); ?>
          </div>

        </div>
      <.?php }
      ;
    }
    ;

    wp_reset_postdata();
    ?>
    <div class="news__item more">
      <p class='h3'>Хотите больше интересных статей?</p>
      <a class="btn btn-position-aware dark" href="/infocentr/">ПОСМОТРЕТЬ БЛОГ<span class="position-aware"></span></a>
    </div>
  </div>
</div> -->

<div class="news">
    <div class="container">
        <div class="news__title">
            <p class="h2">Новости и статьи</p>
        </div>
        <div class="news__item">
            <div class="item__img">
                <img src="<?= get_template_directory_uri(); ?>/image/news/news_1.jpg" alt="">
            </div>
            <div class="item__content">
                <a class="item__title" href="#">
                    <p>Как зарабатывать больше?</p>
                </a>
                <p class="meta-data">29/12/2020</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et senectus amet elit, eleifend diam purus, pulvinar luctus. Integer bibendum in ultricies eleifend dui. Semper scelerisque quisque diam ac. Amet quam tellus...</p>
            </div>

        </div>
        <div class="news__item">
            <div class="item__img">
                <img src="<?= get_template_directory_uri(); ?>/image/news/news_2.jpg" alt="">
            </div>
            <div class="item__content">
                <a class="item__title" href="#">
                    <p>Как зарабатывать больше?</p>
                </a>
                <p class="meta-data">29/12/2020</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et senectus amet elit, eleifend diam purus, pulvinar luctus. Integer bibendum in ultricies eleifend dui. Semper scelerisque quisque diam ac. Amet quam tellus...</p>
            </div>

        </div>
        <div class="news__item">
            <div class="item__img">
                <img src="<?= get_template_directory_uri(); ?>/image/news/news_3.jpg" alt="">
            </div>
            <div class="item__content">
                <a class="item__title" href="#">
                    <p>Как зарабатывать больше?</p>
                </a>
                <p class="meta-data">29/12/2020</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et senectus amet elit, eleifend diam purus, pulvinar luctus. Integer bibendum in ultricies eleifend dui. Semper scelerisque quisque diam ac. Amet quam tellus...</p>
            </div>

        </div>
        <div class="news__item more">
            <p class="h3">Хотите больше интересных статей?</p>
            <a class="btn btn-position-aware dark" href="#">ПОСМОТРЕТЬ БЛОГ<span class="position-aware"></span></a>
        </div>
    </div>
</div>
