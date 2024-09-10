<?php
/*
Template Name: Шаблон статей
Template Post Type: category
*/
?>
<?php get_header(); ?>

<main>
  <?php while (have_posts()):
    the_post(); ?>
    <div class="article-info ">
      <div class="container page-header">
        <div class="article__img">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="article__title">
          <h1>
            <?php the_title(); ?>
          </h1>
        </div>
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
            <?php the_time(' j/m/Y '); ?>
          </span>
        </div>
      </div>

    </div>
    <div class="article-text">
      <div class="container">

        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; // end of the loop.  ?>


</main>



<?php get_footer(); ?>