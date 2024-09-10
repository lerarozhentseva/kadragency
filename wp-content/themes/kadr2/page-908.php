<?php
/*
Template Name: Карта сайта
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="site-map-page">
  <div class="page-header">
    <div class="container">
      <div class="page-header__item item-1">
        <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs'))
          dimox_breadcrumbs(); ?></div>
        <h1>Карта сайта</h1>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">

        <a class="btn btn-position-aware dark smooth-transition" href="#block-1"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="block-1" class="custom-block block-2">
    <div class="container">

      <div class="first-page">
        <a href="/" class="page-item">Главная</a>
      </div>
      <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'false', 'menu_class' => 'page-list')); ?>

      <div class="vacancy-container">
        <div class=vacancy-list">
          <div class="vacancy-list first">
            <a href="https://hrbel.by/vakansii/">Вакансии</a>
          </div>
          <?php $args = array(
            'post_type' => array('vacancies'),
            'post_status' => array('publish'),
            'posts_per_page' => '-1',
            'posts_per_archive_page' => '-1',
            'paged' => $paged
          );
          $my_query = new wp_query($args);

          if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
              $my_query->the_post();
              ?>
              <div class="posts-list__item">
                <a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
              </div>
            <?php }
          }
          wp_reset_query(); ?>
        </div>
      </div>

      <div class="posts-container">
        <div class="posts-list">
          <div class="post-list first">
            <a href="https://hrbel.by/infocentr/">Инфоцентр</a>
          </div>
          <?php $args = array(
            'category__in' => 15, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
            'showposts' => -1, //сколько показать статей
            'orderby' => 'DESC', //сортировка по дате
            'caller_get_posts' => 1
          );
          $my_query = new wp_query($args);

          if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
              $my_query->the_post();
              ?>
              <div class="posts-list__item">
                <a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
              </div>
            <?php }
          }
          wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>

</main>


<?php get_footer(); ?>