<?php
/*
Template Name: Лицензии и сертификаты
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="licenses-and-certificates-main">
    <div class="licenses-and-certificates-title page-header">
        <div class="container">
            <div class="licenses-and-certificates-title__item page-header__item item-1">
                <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
                <h1>Лицензии и сер&shy;ти&shy;фи&shy;каты</h1>
                <p>Есть несколько всемирно-признанных моделей сертификации HR-специалистов: американская, британская, российская и другие, которые задают тон развитию направления отрасли. Их практика, несмотря на отличия трудового законодательства разных стран, оказывается полезной в процессе подбора и оценки персонала, в разрешении конфликтов и трудовых споров.</p>
                <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
            </div>
            <div class="licenses-and-certificates-title__item page-header__item item-2">
                <img src="<?=  get_template_directory_uri(); ?>/image/licenses-and-certificates-title.svg" alt="Офис в большом помещении">
                <a class="btn btn-position-aware dark smooth-transition" href="#licenses-and-certificates"><img src="<?=  get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span class="position-aware quad"></span></a>
            </div>
        </div>
    </div>
    <div id="licenses-and-certificates" class="licenses-and-certificates">
        <div class="container">
            <div class="licenses-and-certificates__title">
                <h2>Лицензии и сертификаты</h2>
                <div class="underline-block"></div>
            </div>
            <div class="licenses-and-certificates__item item-1">
                <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
                <p>Есть несколько всемирно-признанных моделей сертификации HR-специалистов: американская, британская, российская и другие, которые задают тон развитию направления отрасли. Их практика, несмотря на отличия трудового законодательства разных стран, оказывается полезной в процессе подбора и оценки персонала, в разрешении конфликтов и трудовых споров.</p>
            </div>
            <div class="licenses-and-certificates__item item-2">
                <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
                <p>Мы тоже используем опыт международных компаний, но на практике нам помогают собственные знания, наработанные за годы деятельности на белорусском рынке трудовых отношений. Специализированные направления по профподготовке, обучению, безопасности и охране труда имеют необходимые сертификаты, подтверждающие право заниматься данными видами деятельности.</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/contact-us'); ?>
	<!-- Фотографии сертификатов
    <div class="our-certificates">
        <div class="container">
            <div class="our-certificates__title">
                <h2>Наши сертификаты</h2>
            </div>
            <div class="underline-block"></div>
            <div class="our-certificates-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide__image">
                            <img src="<?=  get_template_directory_uri(); ?>/image/licenses-and-certificates/certificate-1.webp" alt="Подпись в документе">
                        </div>
                        <div class="swiper-slide__text">
                            <h5>Сертификат № 1</h5>
                            <p>Небольшое описание сертификата</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide__image">
                            <img src="<?=  get_template_directory_uri(); ?>/image/licenses-and-certificates/certificate-1.webp" alt="Подпись в документе">
                        </div>
                        <div class="swiper-slide__text">
                            <h5>Сертификат № 2</h5>
                            <p>Небольшое описание сертификата</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide__image">
                            <img src="<?=  get_template_directory_uri(); ?>/image/licenses-and-certificates/certificate-1.webp" alt="Подпись в документе">
                        </div>
                        <div class="swiper-slide__text">
                            <h5>Сертификат № 3</h5>
                            <p>Небольшое описание сертификата</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide__image">
                            <img src="<?=  get_template_directory_uri(); ?>/image/licenses-and-certificates/certificate-1.webp" alt="Подпись в документе">
                        </div>
                        <div class="swiper-slide__text">
                            <h5>Сертификат № 4</h5>
                            <p>Небольшое описание сертификата</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide__image">
                            <img src="<?=  get_template_directory_uri(); ?>/image/licenses-and-certificates/certificate-1.webp" alt="Подпись в документе">
                        </div>
                        <div class="swiper-slide__text">
                            <h5>Сертификат № 5</h5>
                            <p>Небольшое описание сертификата</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide__image">
                            <img src="<?=  get_template_directory_uri(); ?>/image/licenses-and-certificates/certificate-1.webp" alt="Подпись в документе">
                        </div>
                        <div class="swiper-slide__text">
                            <h5>Сертификат № 6</h5>
                            <p>Небольшое описание сертификата</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="our-certificates-slider-nav swiper-button-prev">
                <img src="<?=  get_template_directory_uri(); ?>/image/nav-vector.svg" alt="Векторный графический элемент">
            </div>
            <div class="our-certificates-slider-nav swiper-button-next">
                <img src="<?=  get_template_directory_uri(); ?>/image/nav-vector.svg" alt="Векторный графический элемент">
            </div>
        </div>
    </div>
	-->
    <div class="attestation">
        <div class="container">
            <div class="attestation__title">
                <h2>Аттестация</h2>
            </div>
            <div class="underline-block"></div>
            <div class="attestation__item item-1">
                <img src="<?=  get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
                <p>Хотя HR-агентства не подлежат обязательной сертификации, мы по личной инициативе аттестовываем своих специалистов по направлениям:</p>
            </div>
            <div class="attestation__item item-2">
                <img src="<?=  get_template_directory_uri(); ?>/image/marker-light.svg" alt="Графический элемент белая звезда">
                <p>Это отличает их от других, в чем можно убедиться в процессе сотрудничества, и служит для наших партнеров доказательством профессионализма и конкурентоспособности. Наличие сертификата является преимуществом соискателя при приеме на работу в HR-агентство. Для нас – без обучения дальнейшее продвижение бизнеса не представляется возможным.</p>
            </div>
            <div class="attestation__item item-3">
                <img src="<?=  get_template_directory_uri(); ?>/image/cost-depends-item-3.svg" alt="Графический элемент разветвление">
                <p><a class="text-link" href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">Подбор</a> и <a class="text-link" href="<?= get_site_url(); ?>/kadrovyj-konsalting/adaptaciya-personala/">адаптация</a></p>
            </div>
            <div class="attestation__item item-4">
                <img src="<?=  get_template_directory_uri(); ?>/image/cost-depends-item-4.svg" alt="Графический элемент каракули">
                <p><a class="text-link" href="<?= get_site_url(); ?>/kadrovyj-konsalting/ocenka-i-testirovanie-personala/">Оценка</a> и <a class="text-link" href="<?= get_site_url(); ?>/kadrovyj-konsalting/korporativnoe-obuchenie/">обучение</a></p>
            </div>
            <div class="attestation__item item-5">
                <img src="<?=  get_template_directory_uri(); ?>/image/cost-depends-item-5.svg" alt="Гафический элемент">
                <p>Компенсации и льготы</p>
            </div>
            <div class="attestation__item item-6">
                <img src="<?=  get_template_directory_uri(); ?>/image/cost-depends-item-6.svg" alt="Графический элемент">
                <p><a class="text-link" href="<?= get_site_url(); ?>/kadrovyj-konsalting/hr-analitika/">HR-аналитика</a> и др</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/team'); ?>
    <?php get_template_part('template-parts/news'); ?>
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>