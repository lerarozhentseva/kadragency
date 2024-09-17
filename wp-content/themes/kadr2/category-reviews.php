<?php
/*
Template Name: Шаблон Отзывы
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
    <div class="about-the-company-title page-header">
        <div class="container">
        <div class="about-the-company-title__item page-header__item item-1">
            <div class="breadcrumbs">
                <div class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <span class="link" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__link" href="https://hrbel.by/" itemprop="item">
                            <span itemprop="name">Главная</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </span>
                    <span class="separator">/</span>
                    <span class="link" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__link" href="https://hrbel.by/o-kompanii/" itemprop="item">
                            <span itemprop="name">О компании</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </span>
                    <span class="separator">/</span>
                    <span class="breadcrumbs__current">Отзывы</span>
                </div>
            </div>
            <h1>Отзывы о нас</h1>
            <p>Отзывы о нашей компании – это подтверждение нашей приверженности качеству и профессионализму. Мы гордимся тем, что наши клиенты высоко оценивают нашу работу и доверяют нам самое ценное – подбор квалифицированных специалистов. Наши HR-менеджеры тщательно проверяют каждого кандидата, собирая отзывы от предыдущих работодателей и проводя психологические тесты.</p>
            <button class="btn btn-position-aware popmake-29" href="#">Консультация<span
                class="position-aware"></span></button>
        </div>
        <div class="about-the-company-title__item page-header__item item-2">
            <img src="<?= get_template_directory_uri(); ?>/image/reviews/reviews-banner.jpg"
                alt="Рабочее пространство">
            <a class="btn btn-position-aware dark smooth-transition" href="#about-the-company"><img
                src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
                class="position-aware quad"></span></a>
        </div>
        </div>
    </div>
    <div class="reviews-content">
        <div class="container">
            <div class="reviews-list">
                <?php 
                    query_posts('cat=4&posts_per_page=10&post_status=publish');
                    while (have_posts()) : the_post(); ?>
                        <div class="reviews__item">
                            <div class="item__img">
                                <?php echo get_the_post_thumbnail(); ?>
                            </div>
                            <div class="item__content">
                                <h3><?php the_title()?></h3>
                                <span class="meta-data publish-time"><?php the_time(' j/m/Y '); ?></span>
                                <span class="meta-data organization"><?= get_post_meta($post->ID, 'organization', true)?></span> 
                                <?php the_content();?>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <!-- <.?php $countcat = get_category(13 ,false); ?> -->
                        <!-- <..?php if (  $countcat->count > 10 ) : ?>
                    <button id="reviews-load-more" class="reviews-load-more btn-position-aware">ЕЩЕ ОТЗЫВЫ<span class="position-aware"></span></button>
                    <script>
                        var ajaxurl = '<..?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<.?php echo serialize($wp_query->query_vars); ?>';
                        var current_page = <.?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<.?php echo $wp_query->max_num_pages; ?>';
                    </script>
                <..?php endif; ?> -->
            </div>
        </div>
    </div>
    <div class="contact-main get-free-consult__container leave-feedback">
        <?php get_template_part('template-parts/leave-feedback'); ?>
    </div>
    <?php get_template_part('template-parts/team'); ?>    
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>