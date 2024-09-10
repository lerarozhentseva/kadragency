<?php
/*
Template Name: Шаблон страницы ошибки
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main style="background: #FBF6F4;">
    <div class="container error_container">
        <div class="error__info">
            <h1 class="error-title">404</h1>
            <p class="error-descr">Извините, но такая страница не существует</p>
            <ul class="error-info">
                <li><p>Узнайте больше про нашу <a href="/o-kompanii/">компанию</a></p></li>
                <li><p>Мы все еще можем  <a href="/poisk-i-podbor-personala/">подобрать идеального кандидата</a></p></li>
                <li><p><a href="tel:375445572020">Позвоните</a> или <a href="mailto:info@hrbel.by">напишите нам</a> на почту</p></li>
            </ul>
            <button class="btn btn-position-aware btn-error" href="/">ВЕРНУТЬСЯ НА ГЛАВНУЮ<span class="position-aware"></span></button>
        </div>
        <div class="error__image">
            <img src="<?php  get_template_directory_uri(); ?>/wp-content/uploads/2023/12/404-icon.png" alt="error_404">
        </div>
    </div>
</main>
<?php get_footer(); ?>
