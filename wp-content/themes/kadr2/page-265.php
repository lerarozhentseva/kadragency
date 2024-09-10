<?php
/*
Template Name: Партнеры
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
    <div class="partners-title page-header">
        <div class="container">
            <div class="partners__item page-header__item item-1">
                <div class="breadcrumbs"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
                <h1>Партнеры</h1>
                <p>Бизнес-партнерство – выбор тех, кто умеет делегировать обязанности, готов делиться финансовой и моральной поддержкой, не снимая ответственности с себя.</p>
                <button class="btn btn-position-aware popmake-29" href="#">Консультация<span class="position-aware"></span></button>
            </div>
            <div class="partners__item page-header__item item-2">
                <img src="<?=  get_template_directory_uri(); ?>/image/partners-title.webp" alt="Сотрудники за работой">
                <a class="btn btn-position-aware dark smooth-transition" href="#partners"><img src="<?=  get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span class="position-aware quad"></span></a>
            </div>
        </div>
    </div>
    <div id="partners" class="partners">
        <div class="container">
            <div class="partners__title">
                <h2>Наши партнеры</h2>
            </div>
            <div class="underline-block"></div>
            <div class="partners__item item-1">
                <img src="<?=  get_template_directory_uri(); ?>/image/rabotaby-logo.svg" alt="Логотип компании Работа бай">
            </div>
            <div class="partners__item item-2">
                <img src="<?=  get_template_directory_uri(); ?>/image/pracaby-logo.svg" alt="Логотип компании Праца бай">
            </div>
            <div class="partners__item item-3">
                <img src="<?=  get_template_directory_uri(); ?>/image/businesskvartal-logo.svg" alt="Логотип компании Бизнес Квартал">
            </div>
            <div class="partners__item item-4">
                <img src="<?=  get_template_directory_uri(); ?>/image/opyt-logо.svg" alt="Логотип компании Бухгалтерские технологии">
            </div>
            <div class="partners__item item-5">
                <img src="<?=  get_template_directory_uri(); ?>/image/alfabank-logo.png" alt="Логотип компании Альфа Банк">
            </div>
            <div class="partners__item item-6">
                <img src="<?=  get_template_directory_uri(); ?>/image/paritetbank-logo.svg" alt="Логотип компании Паритет Банк">
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/contact-us'); ?>
    <div class="business-partnership">
        <div class="container">
            <div class="business-partnership__title">
                <h2>Бизнес-партнерство</h2>
            </div>
            <div class="underline-block"></div>
            <p>Бизнес-партнерство – выбор тех, кто умеет делегировать обязанности, готов делиться финансовой и моральной поддержкой, не снимая ответственности с себя.</p>
            <div class="business-partnership__item item-1">
                <div class="item__img">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.0013 34L13.5541 33.7764C13.4578 33.9688 13.4956 34.2013 13.6477 34.3535C13.7999 34.5057 14.0324 34.5434 14.2249 34.4472L14.0013 34ZM20.668 20.6666L20.4444 20.2194C20.3476 20.2678 20.2691 20.3463 20.2208 20.443L20.668 20.6666ZM34.0013 14L34.4485 14.2236C34.5448 14.0311 34.507 13.7986 34.3549 13.6464C34.2027 13.4942 33.9702 13.4565 33.7777 13.5527L34.0013 14ZM27.3346 27.3333L27.5582 27.7805C27.655 27.7321 27.7335 27.6537 27.7818 27.5569L27.3346 27.3333ZM24.0013 46.8333C11.3908 46.8333 1.16797 36.6105 1.16797 24H0.167969C0.167969 37.1627 10.8385 47.8333 24.0013 47.8333V46.8333ZM46.8346 24C46.8346 36.6105 36.6118 46.8333 24.0013 46.8333V47.8333C37.1641 47.8333 47.8346 37.1627 47.8346 24H46.8346ZM24.0013 1.16663C36.6118 1.16663 46.8346 11.3895 46.8346 24H47.8346C47.8346 10.8372 37.1641 0.166626 24.0013 0.166626V1.16663ZM24.0013 0.166626C10.8385 0.166626 0.167969 10.8372 0.167969 24H1.16797C1.16797 11.3895 11.3908 1.16663 24.0013 1.16663V0.166626ZM14.4485 34.2236L21.1152 20.8902L20.2208 20.443L13.5541 33.7764L14.4485 34.2236ZM20.8916 21.1138L34.2249 14.4472L33.7777 13.5527L20.4444 20.2194L20.8916 21.1138ZM33.5541 13.7764L26.8874 27.1097L27.7818 27.5569L34.4485 14.2236L33.5541 13.7764ZM27.111 26.8861L13.7777 33.5527L14.2249 34.4472L27.5582 27.7805L27.111 26.8861Z" fill="#261104"/>
                    </svg>
                </div>
                <div class="item__content">
                    <p>Аутсорсинг</p>
                    <p>Для определенных видов работ мы привлекаем экспертов со стороны, так как понимаем, что не можем быть универсалами во всех отраслях, но хотим, чтобы уровень наших услуг для клиента был на высоте. Нет ничего зазорного в том, чтобы использовать уже имеющийся опыт в своих целях.</p>
                </div>
            </div>
            <div class="business-partnership__item item-2">
                <div class="item__img">
                    <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.667969 48.3333H0.167969V48.8333H0.667969V48.3333ZM20.668 18.3333L21.068 18.0333C20.9706 17.9035 20.8163 17.829 20.6541 17.8335C20.4919 17.838 20.342 17.921 20.2519 18.056L20.668 18.3333ZM30.668 31.6667L30.268 31.9667C30.3636 32.0942 30.5144 32.1685 30.6738 32.1666C30.8332 32.1648 30.9822 32.087 31.0748 31.9573L30.668 31.6667ZM0.167969 0V48.3333H1.16797V0H0.167969ZM0.667969 48.8333H49.0013V47.8333H0.667969V48.8333ZM7.75066 38.6107L21.084 18.6107L20.2519 18.056L6.91861 38.056L7.75066 38.6107ZM20.268 18.6333L30.268 31.9667L31.068 31.3667L21.068 18.0333L20.268 18.6333ZM31.0748 31.9573L47.7415 8.62395L46.9278 8.04271L30.2611 31.376L31.0748 31.9573Z" fill="#261104"/>
                    </svg>
                </div>
                <div class="item__content">
                    <p>Избавление от хлопот</p>
                    <p>Тем самым мы избавляем заказчика от дополнительных хлопот по согласованию, получению разрешений, оформлению сопроводительных документов и многих других незначительных деталей, о которых ему не следует переживать.</p>
                </div>
            </div>
            <div class="business-partnership__item item-3">
                <div class="item__img">
                    <svg width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.0013 41.6667V50M40.668 2.18557e-06V8.33333M7.33464 2.18557e-06L7.33466 21.6667M7.33463 28.3333V50M24.0013 35V0M40.668 15V50M34.0013 15H47.3346V8.33333H34.0013V15ZM17.3346 41.6667H30.668V35H17.3346V41.6667ZM0.667969 28.3333H14.0013V21.6667H0.667969V28.3333Z" stroke="#261104"/>
                    </svg>
                </div>
                <div class="item__content">
                    <p>Разумный подход</p>
                    <p>Партнерство разумно использовать для разовых поручений, в неординарных ситуациях, при запуске новых проектов, когда результат нужен «сегодня и сейчас».</p>
                </div>
            </div>
            <div class="business-partnership__item item-4">
                <div class="item__img">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3346 9.00002V7.33335C17.3346 3.65146 20.3194 0.666687 24.0013 0.666687C27.6832 0.666687 30.668 3.65146 30.668 7.33335V9.00002M0.667969 20.6667C13.0205 34.7839 34.9821 34.7839 47.3346 20.6667M4.0013 10.6667H44.0013C45.8422 10.6667 47.3346 12.1591 47.3346 14V44C47.3346 45.841 45.8422 47.3334 44.0013 47.3334H4.0013C2.16035 47.3334 0.667969 45.841 0.667969 44V14C0.667969 12.1591 2.16035 10.6667 4.0013 10.6667Z" stroke="#261104"/>
                    </svg>
                </div>
                <div class="item__content">
                    <p>Партнерство</p>
                    <p>Партнеры – это наше отражение, которые позволяют клиентам лучше узнать о нас. Конечно, мы придаем большое значение надежности, опыту и работаем только с проверенными партнерами, которые на деле могут подтвердить свою компетенцию. Таким образом, при помощи партнерства и использования неограниченных возможностей человеческих ресурсов можно расширять круг компетенций до бесконечности.</p>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/team'); ?>
    <?php get_template_part('template-parts/news'); ?>
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>