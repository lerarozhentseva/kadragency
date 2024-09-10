<?php get_header(); ?>

<main>
  <section class="search-page">
    <div class="search-page__container">

      <div class="search-page__breadcrumbs breadcrumbs">
        <div class="container">
          <span class="link">
            <a class="breadcrumbs__link" href="/">
              <span>Главная</span>
            </a>
          </span>
          <span class="separator">/</span>
          <span class="breadcrumbs__current">Результаты поиска</span>
        </div>
      </div>

      <div class="search-page__head">
        <?php get_search_form(); ?>
        <div class="search-page__find">
          Найдено
          <?php
          global $wp_query;
          echo $wp_query->found_posts . ' результата(ов)';
          ?>
        </div>
      </div>


      <?php if (have_posts()): ?>
        <div class="search-page__results">
          <?php while (have_posts()):
            the_post(); ?>

            <div class="search-page__result" id="postid-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>
          <?php endwhile; ?>
        </div>
        <?php the_posts_pagination(
          apply_filters(
            'basic_search_posts_pagination_args',
            array(
              'mid_size' => 2,
              'prev_text' => __('', 'basic'),
              'next_text' => __('', 'basic'),
            )
          )
        ); ?>

      <?php else: ?>
        <div class="search-page__no">
          Искомая комбинация слов нигде не встречается
        </div>
      <?php endif; ?>

    </div>
  </section>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>

<?php get_footer(); ?>