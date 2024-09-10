<?php
/*
Template Name: Шаблон Отзывы
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
    <div class="reviews-title page-header">
        <div class="container">
            <div class="reviews__item page-header__item item-1">
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
                </div><!-- .breadcrumbs -->
            </div>
                <h1>Отзывы</h1>
                <p>Рекрутеры и хедхантеры приходят в нашу профессию разными путями и из разных отраслей. И преимущество именно в этом: они знают многие сферы профессиональной деятельности и говорят с клиентом на его языке.</p>
                <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
            </div>
            <div class="reviews__item page-header__item item-2">
                <img src="<?=  get_template_directory_uri(); ?>/image/reviews.svg" alt="Работа в офисе">
                <a class="btn btn-position-aware dark smooth-transition" href="#our-virtues"><img src="<?=  get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span class="position-aware quad"></span></a>
            </div>
        </div>
    </div>
    <div id="our-virtues" class="our-virtues">
            <div class="container">
            <div class="our-virtues__item item-1">
                <h2>Наши достоинства</h2>
                <div class="underline-block"></div>
                <p>Наши заказчики ценят и отмечают у кураторов проекта:</p>
            </div>
            <div class="our-virtues__item item-2">
                <div class="item__image">
                    <div class="border">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.66602 33.8334H30.3327M17.4993 24.5001V33.8334M1.16602 3.50008L1.16602 22.1667C1.16602 23.4554 2.21069 24.5001 3.49935 24.5001L31.4993 24.5001C32.788 24.5001 33.8327 23.4554 33.8327 22.1667V3.50008C33.8327 2.21142 32.788 1.16675 31.4993 1.16675L3.49935 1.16675C2.21069 1.16675 1.16602 2.21142 1.16602 3.50008Z" stroke="#261104"/>
                        </svg>
                    </div>
                </div>
                <div class="item__text">
                    <h5>Организованность</h5>
                    <p>Соблюдение сроков и порядка выполнения задач;</p>   
                </div>  
            </div>
            <div class="our-virtues__item item-3">
            <div class="item__image">
                    <div class="border">
                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3993 20.7001L10.0993 20.3001L9.29935 20.9001L9.59935 21.3001L10.3993 20.7001ZM24.3993 21.3001L24.6993 20.9001L23.8993 20.3001L23.5993 20.7001L24.3993 21.3001ZM16.9993 33.3334C8.25484 33.3334 1.16602 26.2446 1.16602 17.5001H0.166016C0.166016 26.7969 7.70256 34.3334 16.9993 34.3334V33.3334ZM32.8327 17.5001C32.8327 26.2446 25.7439 33.3334 16.9993 33.3334V34.3334C26.2961 34.3334 33.8327 26.7969 33.8327 17.5001H32.8327ZM16.9993 1.66675C25.7439 1.66675 32.8327 8.75557 32.8327 17.5001H33.8327C33.8327 8.20329 26.2961 0.666748 16.9993 0.666748V1.66675ZM16.9993 0.666748C7.70256 0.666748 0.166016 8.20329 0.166016 17.5001H1.16602C1.16602 8.75557 8.25484 1.66675 16.9993 1.66675V0.666748ZM8.83268 13.3334H11.166V12.3334H8.83268V13.3334ZM22.8327 13.3334H25.166V12.3334H22.8327V13.3334ZM23.5993 20.7001C20.2993 25.1001 13.6993 25.1001 10.3993 20.7001L9.59935 21.3001C13.2993 26.2334 20.6993 26.2334 24.3993 21.3001L23.5993 20.7001Z" fill="#261104"/>
                        </svg>
                    </div>
                </div>
                <div class="item__text">
                    <h5>Внимательность</h5>
                    <p>Ни один вопрос, деталь и ни одно пожелание не остаются без ответа;</p>   
                </div>
            </div>
            <div class="our-virtues__item item-4">
            <div class="item__image">
                    <div class="border">
                        <svg width="35" height="30" viewBox="0 0 35 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99935 24.2801H1.16602V0.946777H33.8327V24.2801H27.9993M17.4993 19.6134L8.16602 28.9468H26.8327L17.4993 19.6134Z" stroke="#261104" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="item__text">
                    <h5>Аналитический склад ума и умение общаться</h5>
                    <p>В компании работает много людей с экономическим, техническим, бухгалтерским образованием, они получили навыки коучинга, изучили психологию общения;</p>   
                </div>
            </div>
            <div class="our-virtues__item item-5">
            <div class="item__image">
                    <div class="border">
                        <svg width="35" height="26" viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.16602 8.44678H33.8327M4.66602 17.7801H18.666M23.3327 17.7801H30.3327M1.16602 3.78011L1.16602 22.4468C1.16602 23.7354 2.21069 24.7801 3.49935 24.7801L31.4993 24.7801C32.788 24.7801 33.8327 23.7354 33.8327 22.4468V3.78011C33.8327 2.49145 32.788 1.44678 31.4993 1.44678L3.49935 1.44678C2.21069 1.44678 1.16602 2.49145 1.16602 3.78011Z" stroke="#261104"/>
                        </svg>
                    </div>
                </div>
                <div class="item__text">
                    <h5>Интенсивность труда</h5>
                    <p>Способность выполнять несколько задач без ущерба качеству результата;</p>   
                </div>
            </div>
            <div class="our-virtues__item item-6">
            <div class="item__image">
                    <div class="border">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5195 19.6215L15.8731 19.2681L15.1662 18.5607L14.8126 18.9142L15.5195 19.6215ZM21.666 23.9316V24.4316H22.666V23.9316H21.666ZM22.666 21.5997V21.0997H21.666V21.5997H22.666ZM21.666 2.94531V3.44531H22.666V2.94531H21.666ZM22.666 0.613403V0.113403H21.666V0.613403H22.666ZM10.4993 11.7727H9.99935V12.7727H10.4993V11.7727ZM12.8327 12.7727H13.3327V11.7727H12.8327V12.7727ZM31.4993 11.7727H30.9993V12.7727H31.4993V11.7727ZM33.8327 12.7727H34.3327V11.7727H33.8327V12.7727ZM28.8126 4.92356L28.4589 5.27701L29.1658 5.98433L29.5195 5.63088L28.8126 4.92356ZM31.8528 3.29897L32.2065 2.94553L31.4996 2.23821L31.1459 2.59165L31.8528 3.29897ZM13.1861 2.59165L12.8325 2.23821L12.1256 2.94553L12.4792 3.29897L13.1861 2.59165ZM14.8126 5.63088L15.1662 5.98433L15.8731 5.27701L15.5195 4.92356L14.8126 5.63088ZM29.5195 18.9142L29.1658 18.5607L28.4589 19.268L28.8126 19.6215L29.5195 18.9142ZM31.1459 21.9534L31.4996 22.3068L32.2065 21.5995L31.8528 21.2461L31.1459 21.9534ZM1.51945 33.6124L15.5195 19.6215L14.8126 18.9142L0.812577 32.905L1.51945 33.6124ZM22.666 23.9316V21.5997H21.666V23.9316H22.666ZM22.666 2.94531V0.613403H21.666V2.94531H22.666ZM10.4993 12.7727H12.8327V11.7727H10.4993V12.7727ZM31.4993 12.7727H33.8327V11.7727H31.4993V12.7727ZM29.5195 5.63088L31.8528 3.29897L31.1459 2.59165L28.8126 4.92356L29.5195 5.63088ZM12.4792 3.29897L14.8126 5.63088L15.5195 4.92356L13.1861 2.59165L12.4792 3.29897ZM28.8126 19.6215L31.1459 21.9534L31.8528 21.2461L29.5195 18.9142L28.8126 19.6215Z" fill="#261104"/>
                        </svg>
                    </div>
                </div>
                <div class="item__text">
                    <h5>Креативность</h5>
                    <p>Предлагаемые идеи решений всегда просты и необычны, их легко применить на практике, польза не подвергается сомнению.</p>   
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/contact-us'); ?>
    <div class="reviews-content">
        <div class="container">
            <h2>Немного о нас</h2>
            <div class="underline-block"></div>
            <div class="little-about-us">
                <div class="little-about-us__item item-1">
                    <img src="<?=  get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
                    <p>Для нас нет неинтересных задач. Каждый проект рассматриваем, как уникальный, ведь он способен изменить жизнь людей, а человек – это и есть самая большая ценность.</p>
                </div>
                <div class="little-about-us__item item-2">
                    <img src="<?=  get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
                    <p>Мы не ждем благодарности за свой труд, лучшее подтверждение профессионализма – это успехи клиентов, их процветающий, стабильный бизнес, любимая работа, которая воплотила мечту жизни.</p>
                </div>
                <div class="little-about-us__item item-3">
                    <img src="<?=  get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
                    <p>А теперь предоставим слово нашим клиентам. Надеемся, что их опыт сотрудничества с HR-агентством, будет полезен и поможет определиться и обратиться к нам.</p>
                </div>
            </div>
            <div class="reviews-list">
                




                    <?php 
                query_posts('cat=13&posts_per_page=10&post_status=publish');
                while (have_posts()) : the_post(); ?>
                    <div class="reviews__item">
                                <div class="item__img">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </div>
                                <div class="item__content">
                                    <h3><?php the_title()?></h3>
                                    <span class="meta-data publish-time"><?php the_time(' j.m.Y '); ?></span>
                                    <span class="meta-data organization"><?= get_post_meta($post->ID, 'organization', true)?></span> 
                                     <?php the_content();?>
                                
                                </div>
                                
                            </div>
                <?php endwhile;?>
                <?php $countcat = get_category(13 ,false); ?>
                <?php if (  $countcat->count > 10 ) : ?>
           
            <button id="reviews-load-more" class="reviews-load-more btn-position-aware">ЕЩЕ ОТЗЫВЫ<span class="position-aware"></span></button>
            <script>
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
            </script>
        <?php endif; ?>
                





            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/team'); ?>
    <?php get_template_part('template-parts/news'); ?>
    
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>