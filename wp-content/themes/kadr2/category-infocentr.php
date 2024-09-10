<?php
/*
Template Name: Шаблон новостей
Template Post Type: category
*/
?>
<?php get_header(); ?>

<main>
    <div class="articles-title page-header">
                <div class="articles-title__container container">
                    <div class="articles-title__item page-header__item item-1">
                    <div class="breadcrumbs">
                    <div class="container">
                        <span class="link" >
                            <a class="breadcrumbs__link" href="/">
                                <span>Главная</span>
                            </a>
                        </span>
                        <span class="separator">/</span>
                        <span class="breadcrumbs__current">
                            <a class="breadcrumbs__link">
                                <span style="color: #D25F15;">Инфоцентр</span>
                            </a>
                        </span>
                    </div>
                </div>
                        <h1>Инфоцентр</h1>
                        <button class="btn btn-position-aware" href="#">ЧИТАТЬ БЛОГ<span class="position-aware"></span></button>
                    </div>
                    <div class="articles-title__item page-header__item item-2">
                        <picture>
                            <source srcset="<?=  get_template_directory_uri(); ?>/image/articles.webp" type="image/webp">
                            <source srcset="<?=  get_template_directory_uri(); ?>/image/articles.jpg" type="image/jpeg">
                            <img src="<?= get_template_directory_uri(); ?>/image/articles.jpg" alt="Печатная машинка">
                        </picture>
                        
                        <a class="btn btn-position-aware dark smooth-transition" href="#articles"><img src="<?=  get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span class="position-aware quad"></span></a>
                    </div>
                </div>
            </div>
    <div id="articles" class="articles">
        <div class="container">

        
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts(array('cat' => 15, 'posts_per_page' => 14, 'post_status' => 'publish', 'paged' => $paged));
        while (have_posts()) : the_post(); ?>
            <div class="articles__item">
                            <div class="item__img">
                                <?php echo get_the_post_thumbnail(); ?>
                            </div>
                        <div class="item__content">
                            <a class="item__title" href="<?php the_permalink()?>"><h2><?php the_title()?></h2></a>
                            <div class="item__author">
                                <span>Автор:</span> <span> <?php the_author();?></span>
                            </div>
                            <p class="meta-data"><?php the_time(' j.m.Y '); ?></p>
                            <p class="item__text"><?php echo wp_trim_words(get_the_content() , 25, '...'); ?></p>
                            <a class="read-more" href="<?php the_permalink()?>">Подробнее<img src="<?=  get_template_directory_uri(); ?>/image/contact_us.svg" alt="Графический элемент оранжевая стрелка"></a>
                        </div>
                            
                        </div>
        <?php endwhile;
         wp_reset_postdata();?>
        <?php the_posts_pagination(); ?>
        </div>
    </div>
    
                       
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>



<?php get_footer(); ?>