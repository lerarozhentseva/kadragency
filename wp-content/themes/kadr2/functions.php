<?php
require get_template_directory() . '/ajax-search.php';
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
  load_theme_textdomain('my_theme', get_template_directory() . '/languages');
}

function add_custom_vacancies_dropdown_to_cf7()
{
  ?>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let select = `
                                                            <div class="contact-us__form-vacancy">
                                                              <div class="dropdown js-dropdown">
                                                                <div class="dropdown__header js-dropdown-inner">
                                                                  <div class="dropdown__value js-dropdown-value">Выберите вакансию</div>
                                                                  <button type="button" class="dropdown__btn"></button>
                                                                </div>
                                                                <div class="dropdown__content">
                                                                  <div class="dropdown__items">
                                                                    <?php
                                                                    $args = array(
                                                                      'post_type' => 'vacancies',
                                                                      'post_status' => 'publish',
                                                                      'posts_per_page' => -1,
                                                                    );

                                                                    $vacancies = get_posts($args);

                                                                    foreach ($vacancies as $vacancy) {
                                                                      echo '<div class="dropdown__item js-dropdown-item"><input name="vacancy" id="' . esc_attr($vacancy->post_title) . '" value="' . esc_attr($vacancy->post_title) . '" data-url="' . esc_url(get_permalink($vacancy->ID)) . '"></><label for="' . esc_attr($vacancy->post_title) . '">' . esc_attr($vacancy->post_title) . '</label></div>';
                                                                    }
                                                                    ?>
                                                                </div > 
                                                              </div>
                                                            </div>`;

      const consultFormFile = document.querySelector('.contact-us__form-file');
      const isFormWorkRussia = document.getElementById('wpcf7-f2948-o6');
      if (isFormWorkRussia && consultFormFile) {
        consultFormFile.insertAdjacentHTML('beforebegin', select);
      }
    });
  </script>
  <?php
}
// add_action('wp_footer', 'add_custom_vacancies_dropdown_to_cf7');






function custom_search_page_description($description)
{
  if (is_search()) {
    return 'Используйте наш инструмент поиска на сайте кадрового агентства "Кадр" для быстрого доступа к необходимой информации.';
  }
  return $description;
}
add_filter('rank_math/frontend/description', 'custom_search_page_description');

function custom_rewrite_rules()
{
  add_rewrite_rule('^search/page/([0-9]+)/?$', 'index.php?s=&paged=$matches[1]', 'top');
  add_rewrite_rule('^search?$', 'index.php?s=', 'top');
}
add_action('init', 'custom_rewrite_rules');



## удаляет версию WP из преданного URL у скриптов и стилей

remove_action('shutdown', 'wp_ob_end_flush_all', 1);

add_action('wp_enqueue_scripts', 'themeslug_enqueue_script');



function themeslug_enqueue_script()
{

  $page_id = get_the_ID();

  wp_enqueue_script('swiper-slider', 'https://unpkg.com/swiper@8.2.2/swiper-bundle.min.js', false);
  wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), '1.1', 'all');

  wp_enqueue_style('Montserrat', get_template_directory_uri() . '/fonts/Montserrat/stylesheet.css', array(), '1.1', 'all');
  wp_enqueue_style('Mazzard', get_template_directory_uri() . '/fonts/Mazzard/stylesheet.css', array(), '1.1', 'all');
  wp_enqueue_style('century-schoolbook', get_template_directory_uri() . '/fonts/Century Schoolbook/stylesheet.css', array(), '1.1', 'all');

  wp_enqueue_style('kadr', get_template_directory_uri() . '/css/style.css', array());

  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '', true);
  wp_enqueue_script('jquery-maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery'), '', true);

  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);

  wp_register_script('kadr-ajax-search', get_template_directory_uri() . '/js/ajax-search.js', true);
  $script_data_array = array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'security' => wp_create_nonce('load_more_posts'),
  );
  wp_localize_script('kadr-ajax-search', 'search', $script_data_array);
  wp_enqueue_script('kadr-ajax-search');

  wp_register_script('review_read_more', get_template_directory_uri() . '/js/review-load-more.js', true);
  $script_data_array = array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'security' => wp_create_nonce('review_read_more'),
  );
  wp_localize_script('review_read_more', 'review', $script_data_array);
  wp_enqueue_script('review_read_more');


  if ($page_id == 3699 || $page_id == 125) {
    wp_register_style('fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');
    wp_enqueue_style('fancybox-style');
    wp_register_script('fancybox-script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox-script');
    wp_enqueue_script('custom-fancybox', get_template_directory_uri() . '/js/fancybox.js', false);
  }

  if ($page_id == 7) {
    wp_enqueue_script('jquery-marquee', get_template_directory_uri() . '/js/jquery.marquee.min.js', '', '', true);
    wp_enqueue_script('custom-marquee', get_template_directory_uri() . '/js/marquee.js', false);
    wp_enqueue_script('faq-acc', get_template_directory_uri() . '/js/faq-acc.js', false);
  }

  if ($page_id == 33) {
    wp_enqueue_style('ionrangeslider', 'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css', array(), '1.1', 'all');
    wp_enqueue_script('ionrangeslider', 'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js', array('jquery'), null, true);

    // Enqueue the vacancy filter script and localize ajax URL
    wp_enqueue_script('ajax-vacancy-filter', get_template_directory_uri() . '/js/ajax-vacancy-filter.js', array('jquery'), null, true);

    $script_data_array = array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'security' => wp_create_nonce('load_more_posts'),
    );
    wp_localize_script('ajax-vacancy-filter', 'blog', $script_data_array);
}

  // if ($page_id == 33) {
  //   wp_enqueue_style('ionrangeslider', 'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css', array(), '1.1', 'all');
  //   wp_enqueue_script('ionrangeslider', 'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js', false);

  //   wp_register_script('ajax-vacancy-filter', get_template_directory_uri() . '/js/ajax-vacancy-filter.js', true);
  //   $script_data_array = array(
  //     'ajaxurl' => admin_url('admin-ajax.php'),
  //     'security' => wp_create_nonce('load_more_posts'),
  //   );
  //   wp_localize_script('ajax-vacancy-filter', 'blog', $script_data_array);
  //   wp_enqueue_script('ajax-vacancy-filter');
  // }

  if ($page_id == 912) {
    wp_dequeue_style('swiper');
    wp_deregister_script('swiper-slider');
  }
}
;


function load_swiper_after_user_action()
{
  ?>
  <script type="text/javascript">
    // Функция для загрузки скрипта и стилей после действия пользователя
    function loadSwiperAfterUserAction() {
      // Загрузка скрипта swiper-slider
      jQuery.getScript('https://unpkg.com/swiper@8.2.2/swiper-bundle.min.js', function () {
        // После загрузки скрипта добавляем стили
        jQuery('head').append('<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" type="text/css" media="all" />');
        // Удаление обработчика события после его выполнения
        jQuery(document).off('click.scroll mousemove.scroll');
      });
      // Загрузка файла swipers.js
      jQuery.getScript('<?php echo get_template_directory_uri() ?>/js/swipers.js');
    }

    // Добавление обработчиков событий для срабатывания загрузки скрипта и стилей
    jQuery(document).on('click.scroll mousemove.scroll', function () {
      console.log('123')
      loadSwiperAfterUserAction();
    });
  </script>
  <?php
}


//убрать лишние стили или скрипты из темы
add_action('wp_enqueue_scripts', 'remove_some_stylesheet', 99);
function remove_some_stylesheet()
{
  wp_dequeue_style('flexslider');
  wp_deregister_script('flexslider');
}

//Удалить jquery_migrate
function wpschool_remove_jquery_migrate($scripts)
{
  if (!is_admin() && isset($scripts->registered['jquery'])) {
    $script = $scripts->registered['jquery'];
    if ($script->deps) {
      $script->deps = array_diff($script->deps, array('jquery-migrate'));
    }
  }
}
add_action('wp_default_scripts', 'wpschool_remove_jquery_migrate');


//ajax подгрузка статей на странице "Статьи" (шаблон вывода категории "Статьи")

function articles_load_more()
{
  $args = unserialize(stripslashes($_POST['query']));
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  $q = new WP_Query($args);
  if ($q->have_posts()) {
    while ($q->have_posts()):
      $q->the_post(); ?>
      <!-- <script>
                jQuery(document).ready(function($) {
                    $("#check-out-our-offers .page-numbers").on("click", function (e) {
                        var page_number = $(this).text();
                        e.preventDefault();
                        var id = $(this).attr('href'),
                            top = $(id).offset().top;
                        $('body,html').animate({
                            scrollTop: top
                        }, 100);
                        var vacancies_filter = $('#vacancies_filter');
                        var data = vacancies_filter.serialize();
                        data = data + "&page-number=" + page_number;
                        $.ajax({
                            url: ajaxurl, // обработчик
                            data: data, // данные
                            type: 'POST', // тип запроса
                            success: function(data) {
                                $('.vacancies__response').empty();
                                $('.vacancies__response').append(data);
                            }
                        });


                    });
                });
            </script> -->
      <div class="articles__item">
        <div class="item__img">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="item__content">
          <a class="item__title" href="<?php the_permalink() ?>">
            <h2>
              <?php the_title() ?>
            </h2>
          </a>
          <div class="item__author">
            <span>Автор:</span> <span>
              <?php the_author(); ?>
            </span>
          </div>
          <p class="meta-data">
            <?php the_time(' j.m.Y '); ?>
          </p>
          <p class="item__text">
            <?php echo wp_trim_words(get_the_content(), 25, '...'); ?>
          </p>
          <a class="read-more" href="<?php the_permalink() ?>">Подробнее<img
              src="<?= get_template_directory_uri(); ?>/image/contact_us.svg" alt=""></a>
        </div>

      </div>
      <?php
    endwhile; ?>
    <div class="page_nav">
      <?php
      echo paginate_links(
        array(
          'base' => '#articles',
          'current' => $_POST['page-number'],
          'total' => $q->max_num_pages,
          'prev_text' => '',
          'next_text' => ''
        )
      );
  } else {
    echo 'Извините, по данносу запросу вакансий не найдено.';
  }
  wp_reset_postdata();
  die();
}

add_action('wp_ajax_articles_load_more', 'articles_load_more');
add_action('wp_ajax_nopriv_articles_load_more', 'articles_load_more');




//ajax подгрузка отзывов на странице "Отзывы"
function reviews_load_more()
{
  $args = unserialize(stripslashes($_POST['query']));
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  $q = new WP_Query($args);
  if ($q->have_posts()):
    while ($q->have_posts()):
      $q->the_post(); ?>
        <div class="reviews__item">
          <div class="item__img">
            <?php echo get_the_post_thumbnail(); ?>
          </div>
          <div class="item__content">
            <h3>
              <?php the_title() ?>
            </h3>
            <span class="meta-data publish-time">
              <?php the_time(' j.m.Y '); ?>
            </span>
            <span class="meta-data organization">
              <?= get_post_meta($q->post->ID, 'organization', true) ?>
            </span>
            <?php the_content(); ?>
          </div>
        </div>
        <?php
    endwhile;
  endif;
  wp_reset_postdata();
  die();
}

add_action('wp_ajax_reviews_load_more', 'reviews_load_more');
add_action('wp_ajax_nopriv_reviews_load_more', 'reviews_load_more');





add_theme_support('post-thumbnails');

add_filter('excerpt_more', function ($more) {
  return '...';
});

add_filter(
  'excerpt_length',
  function () {
    return 31;
  }
);

register_nav_menus(
  array(
    'header-menu' => 'Верхнее меню',
  )
);

add_action('wp_ajax_myfilter', 'true_filter_function');
add_action('wp_ajax_nopriv_myfilter', 'true_filter_function');
/* ajax callback для главной страницы */
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback()
{
  check_ajax_referer('load_more_posts', 'security');
  global $post;
  $catID = $_POST['id'];

  if ($catID == 55 && $catID == '55') {
    $args = array(
      'post_type' => 'vacancies',
      'post_status' => 'publish',
      'post_per_page' => -1,
    );
  } else {
    $args = array(
      'tax_query' => array(
        array(
          'taxonomy' => 'branch',
          'field' => 'id',
          'terms' => $catID,
        )
      ),
      'post_type' => 'vacancies',
      'post_status' => 'publish',
    );
  }
  $blog_posts = new WP_Query($args);
  if ($blog_posts->have_posts()) {
    while ($blog_posts->have_posts()) {
      $blog_posts->the_post(); ?>
        <div class="vacancy__item" onclick="location.href='<?php the_permalink(); ?>';">
          <a class="item__title" href="<?php the_permalink(); ?>">
            <h4>
              <?php the_title(); ?>
            </h4>
          </a>
          <p>
            <?= get_post_meta($blog_posts->the_post - get_the_ID(), 'organization', true) ?>
          </p>
          <p class="item__text">
            <?php echo wp_trim_words(get_the_excerpt(), 31, '...'); ?>
          </p>
        </div>
      <?php }
    ;
  }
  ;
  if ($blog_posts->have_posts() == false) {
    echo '<p>Извините, записей нет</p>';
  }
  ;
  wp_reset_postdata();
  die();
}
;

add_action('wp_ajax_myfilter', 'true_filter_function');
add_action('wp_ajax_nopriv_myfilter', 'true_filter_function');

add_filter('get_pagenum_link', 'function_get_pagenum_link');
function function_get_pagenum_link($result)
{
  $result = str_replace("wp-admin/admin-ajax.php", "vakansii/", $result);
  return $result;
}

/* ajax callback подгрузка текста отзыва */
add_action('wp_ajax_review_read_more_by_ajax', 'review_read_more_by_ajax_callback');
add_action('wp_ajax_nopriv_review_read_more_by_ajax', 'review_read_more_by_ajax_callback');
function review_read_more_by_ajax_callback()
{
  check_ajax_referer('review_read_more', 'security');
  global $post;
  $post_id = $_POST['id'];
  $current_post = get_post($post_id);
  $text = $current_post->post_content; // контент поста
  echo $text; // выводим контент
  wp_die();
}
;

add_action('init', 'create_taxonomy');
function create_taxonomy()
{

  // список параметров: wp-kama.ru/function/get_taxonomy_labels
  register_taxonomy('branch', ['vacancies'], [
    'label' => '', // определяется параметром $labels->name
    'labels' => [
      'name' => 'Отрасли',
      'singular_name' => 'Отрасль',
      'search_items' => 'Найти отрасль',
      'all_items' => 'Все отрасли',
      'view_item ' => 'Смотреть отрасль',
      'parent_item' => 'Parent Genre',
      'parent_item_colon' => 'Parent Genre:',
      'edit_item' => 'Изменить отрасль',
      'update_item' => 'Обновить отрасль',
      'add_new_item' => 'Добавить новую отрасль',
      'new_item_name' => 'Новая отрасль',
      'menu_name' => 'Отрасль',
      'back_to_items' => '← Назад к отрасли',
    ],
    'description' => '', // описание таксономии
    'public' => false,
    // 'publicly_queryable'    => null, // равен аргументу public
    // 'show_in_nav_menus'     => true, // равен аргументу public
    'show_ui' => true, // равен аргументу public
    // 'show_in_menu'          => true, // равен аргументу show_ui
    // 'show_tagcloud'         => true, // равен аргументу show_ui
    // 'show_in_quick_edit'    => null, // равен аргументу show_ui
    'hierarchical' => true,

    'rewrite' => true,
    //'query_var'             => $taxonomy, // название параметра запроса
    'capabilities' => array(),
    'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
    'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
    'show_in_rest' => null, // добавить в REST API
    'rest_base' => null, // $taxonomy
    // '_builtin'              => false,
    //'update_count_callback' => '_update_post_term_count',
  ]);
}



//Регистрация типа записи Вакансии
add_action('init', 'register_post_types');

function register_post_types()
{

  register_post_type('vacancies', [
    'label' => null,
    'labels' => [
      'name' => 'Вакансии', // основное название для типа записи
      'singular_name' => 'Вакансия', // название для одной записи этого типа
      'add_new' => 'Добавить вакансию', // для добавления новой записи
      'add_new_item' => 'Добавление вакансии', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item' => 'Редактирование вакансии', // для редактирования типа записи
      'new_item' => 'Новая вакансия', // текст новой записи
      'view_item' => 'Смотреть вакансию', // для просмотра записи этого типа.
      'search_items' => 'Искать вакансию', // для поиска по этим типам записи
      'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon' => '', // для родителей (у древовидных типов)
      'menu_name' => 'Вакансии', // название меню
    ],
    'description' => '',
    'public' => true,
    'publicly_queryable' => true, // зависит от public
    'exclude_from_search' => false, // зависит от public
    'show_ui' => null, // зависит от public
    'show_in_nav_menus' => null, // зависит от public
    'show_in_menu' => null, // показывать ли в меню адмнки
    'show_in_admin_bar' => null, // зависит от show_in_menu
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => 5,
    'menu_icon' => null,
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => true,
    'supports' => ['title', 'editor', 'author', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies' => [],
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ]);
}

function custom_rewrite_rule()
{
  add_rewrite_rule('^vacansii/page/?([0-9]{1,})/?$', 'index.php?post_type=vacancies&paged=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule', 10, 0);

function custom_rewrite_tag()
{
  add_rewrite_tag('%paged%', '([0-9]{1,})');
}
add_action('init', 'custom_rewrite_tag', 10, 0);



add_action('add_meta_boxes', 'kadr_add_custom_box');
function kadr_add_custom_box()
{
  add_meta_box('kadr_sectionid', 'Данные о вакансии', 'kadr_meta_box_callback', 'vacancies');
}
// HTML код блока
function kadr_meta_box_callback($post, $meta)
{
  $screens = $meta['args'];

  // Используем nonce для верификации
  wp_nonce_field(plugin_basename(__FILE__), 'kadr_noncename');

  // значение поля
  $organization = get_post_meta($post->ID, 'organization', 1);
  $region = get_post_meta($post->ID, 'region', 1);
  $salary = get_post_meta($post->ID, 'salary', 1);
  $experience = get_post_meta($post->ID, 'experience', 1);
  $aducation = get_post_meta($post->ID, 'aducation', 1);
  $employment_type = get_post_meta($post->ID, 'employment_type');
  $schedule = get_post_meta($post->ID, 'schedule');
  $metro_position = get_post_meta($post->ID, 'metro_position', 1); ?>
    <div class="metabox-item">
      <label for="salary">Название организации</label>
      <input type="text" id="organization" name="organization" value="
        <?php if ($organization == '')
          echo 'Не указано';
        else
          echo $organization; ?>" size="50" /></br>
    </div>
    <div class="metabox-item">
      <label for="region">Регион</label>
      <select name="region" id="region">
        <option value="Минск и Минская область" <?php if ('Минск и Минская область' == $region)
          echo "selected";
        if ($region == '')
          echo "selected"; ?>>Минск и Минская область</option>
        <option value="Гродно и Гродненская область" <?php if ('Гродно и Гродненская область' == $region)
          echo "selected"; ?>>Гродно и Гродненская область</option>
        <option value="Брест и Брестская область" <?php if ('Брест и Брестская область' == $region)
          echo "selected"; ?>>
          Брест и Брестская область</option>
        <option value="Витебск и Витебская область" <?php if ('Витебск и Витебская область' == $region)
          echo "selected"; ?>>
          Витебск и Витебская область</option>
        <option value="Гомель и Гомельская область" <?php if ('Гомель и Гомельская область' == $region)
          echo "selected"; ?>>
          Гомель и Гомельская область</option>
        <option value="Могилев и Могилевская область" <?php if ('Могилев и Могилевская область' == $region)
          echo "selected"; ?>>Могилев и Могилевская область</option>
      </select></br>
    </div>
    <div class="metabox-item">
      <label for="salary">Уровень дохода(бел.руб.)</label>
      <input type="text" id="salary" name="salary" value="
    <?php if ($salary == '')
      echo 'По результатам собеседования';
    else
      echo $salary; ?>" size="50" /></br>
    </div>
    <div class="metabox-item">
      <label for="experience">Опыт работы</label>
      <select name="experience" id="experience">
        <option value="Не имеет значения" <?php if ('Не имеет значения' == $experience)
          echo "selected";
        if ($experience == '')
          echo "selected"; ?>>Не имеет значения</option>
        <option value="Нет опыта" <?php if ('Нет опыта' == $experience)
          echo "selected"; ?>>Нет опыта</option>
        <option value="От 1 года до 3 лет" <?php if ('От 1 года до 3 лет' == $experience)
          echo "selected"; ?>>От 1 года до 3
          лет</option>
        <option value="От 3 до 6 лет" <?php if ('От 3 до 6 лет' == $experience)
          echo "selected"; ?>>От 3 до 6 лет
        </option>
        <option value="Более 6 лет" <?php if ('Более 6 лет' == $experience)
          echo "selected"; ?>>Более 6 лет</option>
      </select></br>
    </div>
    <div class="metabox-item">
      <label for="aducation">Образование</label>
      <select name="aducation" id="aducation">
        <option value="Не имеет значения" <?php if ('Не имеет значения' == $aducation)
          echo "selected";
        if ($aducation == '')
          echo "selected"; ?>>Не имеет значения</option>
        <option value="Среднее и ниже" <?php if ('Среднее и ниже' == $aducation)
          echo "selected"; ?>>Среднее и ниже</option>
        <option value="Среднее специальное и ниже" <?php if ('Среднее специальное и ниже' == $aducation)
          echo "selected"; ?>>Среднее специальное и ниже</option>
        <option value="Профессионально-техническое и ниже" <?php if ('Профессионально-техническое и ниже' == $aducation)
          echo "selected"; ?>>Профессионально-техническое и ниже</option>
        <option value="Незаконченное высшее и ниже" <?php if ('Незаконченное высшее и ниже' == $aducation)
          echo "selected"; ?>>Незаконченное высшее и ниже</option>
        <option value="Высшее и ниже" <?php if ('Высшее и ниже' == $aducation)
          echo "selected"; ?>>Высшее и ниже</option>
        <option value="Кандидат наук и ниже" <?php if ('Кандидат наук и ниже' == $aducation)
          echo "selected"; ?>>Кандидат
          наук и ниже</option>
      </select></br>
    </div>
    <div class="metabox-item">
      <label for="employment_type">Тип занятости</label>
      <input class="employment_type-checkbox checkbox filter-option" id="employment_type-1" type="checkbox"
        name="employment_type[]" value="Полная занятость" <?php foreach ($employment_type as $value) {
          foreach ($value as $item) {
            if ($item == 'Полная занятость')
              echo "checked";
          }
          ;
        }
        ;
        if ($employment_type == '')
          echo "selected"; ?>><label for="employment_type-1">Полная занятость</label>
      <input class="employment_type-checkbox checkbox filter-option" id="employment_type-2" type="checkbox"
        name="employment_type[]" value="Частичная занятость" <?php foreach ($employment_type as $value) {
          foreach ($value as $item) {
            if ($item == 'Частичная занятость')
              echo "checked";
          }
          ;
        }
        ; ?>><label for="employment_type-2">Частичная
        занятость</label>
      <input class="employment_type-checkbox checkbox filter-option" id="employment_type-3" type="checkbox"
        name="employment_type[]" value="Проектная работа/разовое задание" <?php foreach ($employment_type as $value) {
          foreach ($value as $item) {
            if ($item == 'Проектная работа/разовое задание')
              echo "checked";
          }
          ;
        }
        ; ?>><label
        for="employment_type-3">Проектная работа/разовое задание</label> <input
        class="employment_type-checkbox checkbox filter-option" id="employment_type-4" type="checkbox"
        name="employment_type[]" value="Волонтерство" <?php foreach ($employment_type as $value) {
          foreach ($value as $item) {
            if ($item == 'Волонтерство')
              echo "checked";
          }
          ;
        }
        ; ?>><label for="employment_type-4">Волонтерство</label>
      <input class="employment_type-checkbox checkbox filter-option" id="employment_type-5" type="checkbox"
        name="employment_type[]" value="Стажировка" <?php foreach ($employment_type as $value) {
          foreach ($value as $item) {
            if ($item == 'Стажировка')
              echo "checked";
          }
          ;
        }
        ; ?>><label for="employment_type-5">Стажировка</label></br>
    </div>
    <div class="metabox-item">
      <label for="schedule">График работы</label>
      <input class="schedule-checkbox checkbox filter-option" id="schedule-1" type="checkbox" name="schedule[]"
        value="Полный день" <?php foreach ($schedule as $value) {
          foreach ($value as $item) {
            if ($item == 'Полный день')
              echo "checked";
          }
          ;
        }
        ;
        if ($schedule == '')
          echo "selected"; ?>><label for="schedule-1">Полный день</label>
      <input class="schedule-checkbox checkbox filter-option" id="schedule-2" type="checkbox" name="schedule[]"
        value="Сменный график" <?php foreach ($schedule as $value) {
          foreach ($value as $item) {
            if ($item == 'Сменный график')
              echo "checked";
          }
          ;
        }
        ; ?>><label for="schedule-2">Сменный график</label>
      <input class="schedule-checkbox checkbox filter-option" id="schedule-3" type="checkbox" name="schedule[]"
        value="Гибкий график" <?php foreach ($schedule as $value) {
          foreach ($value as $item) {
            if ($item == 'Гибкий график')
              echo "checked";
          }
          ;
        }
        ; ?>><label for="schedule-3">Гибкий график</label>
      <input class="schedule-checkbox checkbox filter-option" id="schedule-4" type="checkbox" name="schedule[]"
        value="Удаленная работа" <?php foreach ($schedule as $value) {
          foreach ($value as $item) {
            if ($item == 'Удаленная работа')
              echo "checked";
          }
          ;
        }
        ; ?>><label for="schedule-4">Удаленная работа</label>
      <input class="schedule-checkbox checkbox filter-option" id="schedule-5" type="checkbox" name="schedule[]"
        value="Вахтовый метод" <?php foreach ($schedule as $value) {
          foreach ($value as $item) {
            if ($item == 'Вахтовый метод')
              echo "checked";
          }
          ;
        }
        ; ?>><label for=" schedule-5">Вахтовый метод</label></br>
    </div>

    <div class="metabox-item">
      <label for="metro_position">Близость метро</label>
      <select name="metro_position" id="metro_position">
        <option value="Не имеет значения" <?php if ('Не имеет значения' == $metro_position)
          echo "selected";
        if ($metro_position == '')
          echo "selected"; ?>>Не имеет значения</option>
        <option value="Возле станции" <?php if ('Возле станции' == $metro_position)
          echo "selected"; ?>>Возле станции
        </option>
      </select></br>
    </div>
    <?php
}

## Сохраняем данные, когда пост сохраняется
add_action('save_post', 'kadr_save_postdata');
function kadr_save_postdata($post_id)
{
  // Убедимся что поле установлено.
  if (!isset($_POST['region']))
    return $post_id;
  if (!isset($_POST['salary']))
    return $post_id;
  if (!isset($_POST['experience']))
    return $post_id;
  if (!isset($_POST['aducation']))
    return $post_id;
  if (!isset($_POST['employment_type']))
    return $post_id;
  if (!isset($_POST['schedule']))
    return $post_id;
  if (!isset($_POST['metro_position']))
    return $post_id;
  if (!isset($_POST['organization']))
    return $post_id;
  // проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
  if (!wp_verify_nonce($_POST['kadr_noncename'], plugin_basename(__FILE__)))
    return $post_id;

  // если это автосохранение ничего не делаем
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return $post_id;

  // проверяем права юзера
  if (!current_user_can('edit_post', $post_id))
    return $post_id;

  // Все ОК. Теперь, нужно найти и сохранить данные
  // Очищаем значение поля input.
  $organization = sanitize_text_field($_POST['organization']);
  $region = sanitize_text_field($_POST['region']);
  $salary = sanitize_text_field($_POST['salary']);
  $experience = sanitize_text_field($_POST['experience']);
  $aducation = sanitize_text_field($_POST['aducation']);
  $employment_type = $_POST['employment_type'];
  $schedule = $_POST['schedule'];
  $metro_position = sanitize_text_field($_POST['metro_position']);
  // Обновляем данные в базе данных.
  update_post_meta($post_id, 'organization', $organization);
  update_post_meta($post_id, 'region', $region);
  update_post_meta($post_id, 'salary', $salary);
  update_post_meta($post_id, 'experience', $experience);
  update_post_meta($post_id, 'aducation', $aducation);
  update_post_meta($post_id, 'employment_type', $employment_type);
  update_post_meta($post_id, 'schedule', $schedule);
  update_post_meta($post_id, 'metro_position', $metro_position);
}





add_action('wp_ajax_vacancies_filter', 'vacancies_filter_function');
add_action('wp_ajax_nopriv_vacancies_filter', 'vacancies_filter_function');

function vacancies_filter_function()
{
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    'post_type' => 'vacancies',
    'posts_per_page' => '6',
    'paged' => 1,

  );

  if (isset($_POST['region'])) {
    $args['meta_query'][] = array(
      'key' => 'region',
      'value' => $_POST['region'],
      'compare' => 'IN'
    );
  }
  if (isset($_POST['sort_by_salary'])) {
    $args['meta_query'][] = array(
      'key' => 'salary',
      'compare' => 'EXISTS',
      'type' => 'NUMERIC'
    );

    $args['orderby'] = array(
      'salary' => $_POST['sort_by_salary']
    );
  }
  if (isset($_POST['sort_by_date'])) {
    $args['orderby'] = array(
      'date' => $_POST['sort_by_date']
    );
    if (isset($_POST['sort_by_salary'])) {
      $args['meta_query'][][] = array(
        'key' => 'salary',
        'compare' => 'EXISTS',
        'type' => 'NUMERIC'
      );
      $args['orderby'] = array(
        'salary' => $_POST['sort_by_salary'],
        'date' => $_POST['sort_by_date']
      );
    }
    ;
  }
  if (isset($_POST['employment_type'])) {
    for ($i = 0; $i <= 4; $i++) {
      if ($_POST['employment_type'][$i] == '')
        $_POST['employment_type'][$i] = 'none';
    }
    ;
    $args['meta_query'][][] = array(
      'relation' => 'OR',
      array(
        'key' => 'employment_type',
        'value' => $_POST['employment_type'][0],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'employment_type',
        'value' => $_POST['employment_type'][1],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'employment_type',
        'value' => $_POST['employment_type'][2],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'employment_type',
        'value' => $_POST['employment_type'][3],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'employment_type',
        'value' => $_POST['employment_type'][4],
        'compare' => 'LIKE'
      ),
    );
  }
  ;
  if (isset($_POST['schedule'])) {
    for ($i = 0; $i <= 4; $i++) {
      if ($_POST['schedule'][$i] == '')
        $_POST['schedule'][$i] = 'none';
    }
    ;
    $args['meta_query'][][] = array(
      'relation' => 'OR',
      array(
        'key' => 'schedule',
        'value' => $_POST['schedule'][0],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'schedule',
        'value' => $_POST['schedule'][1],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'schedule',
        'value' => $_POST['schedule'][2],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'schedule',
        'value' => $_POST['schedule'][3],
        'compare' => 'LIKE'
      ),
      array(
        'key' => 'schedule',
        'value' => $_POST['schedule'][4],
        'compare' => 'LIKE'
      ),
    );
  }
  if (isset($_POST['aducation'])) {
    if (($_POST['aducation'][count($_POST['aducation']) - 1]) == 'Не имеет значения') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'aducation',
          'value' => $_POST['aducation'][count($_POST['aducation']) - 1],
          'compare' => 'LIKE'
        ),
      );
    }
    if ($_POST['aducation'][count($_POST['aducation']) - 1] == 'Среднее и ниже') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'aducation',
          'value' => $_POST['aducation'][count($_POST['aducation']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),

      );
    }
    if ($_POST['aducation'][count($_POST['aducation']) - 1] == 'Среднее специальное и ниже') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'aducation',
          'value' => $_POST['aducation'][count($_POST['aducation']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),

      );
    }
    if ($_POST['aducation'][count($_POST['aducation']) - 1] == 'Профессионально-техническое и ниже') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'aducation',
          'value' => $_POST['aducation'][count($_POST['aducation']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее специальное и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),

      );
    }
    if ($_POST['aducation'][count($_POST['aducation']) - 1] == 'Незаконченное высшее и ниже') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'aducation',
          'value' => $_POST['aducation'][count($_POST['aducation']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Профессионально-техническое и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее специальное и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),
      );
    }
    if ($_POST['aducation'][count($_POST['aducation']) - 1] == 'Высшее и ниже') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'aducation',
          'value' => $_POST['aducation'][count($_POST['aducation']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Незаконченное высшее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Профессионально-техническое и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее специальное и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),
      );
    }
    if ($_POST['aducation'][count($_POST['aducation']) - 1] == 'Кандидат наук и ниже') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'aducation',
          'value' => $_POST['aducation'][count($_POST['aducation']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Высшее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Незаконченное высшее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Профессионально-техническое и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее специальное и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Среднее и ниже',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'aducation',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),
      );
    }
  }



  if (isset($_POST['salary-min']) || isset($_POST['salary-max'])) {
    $args['meta_query'][][] = array(
      'relation' => 'OR',
      array(
        'key' => 'salary',
        'value' => array($_POST['salary-min'], $_POST['salary-max']),
        'compare' => 'BETWEEN',
        'type' => 'NUMERIC'
      ),
      array(
        'key' => 'salary',
        'value' => 'По результатам собеседования',
        'compare' => 'LIKE',
        'type' => 'CHAR'
      ),

    );
  }
  if (isset($_POST['experience'])) {
    if (($_POST['experience'][count($_POST['experience']) - 1]) == 'Не имеет значения') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'experience',
          'value' => $_POST['experience'][count($_POST['experience']) - 1],
          'compare' => 'LIKE'
        ),
      );
    }
    if ($_POST['experience'][count($_POST['experience']) - 1] == 'Нет опыта') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'experience',
          'value' => $_POST['experience'][count($_POST['experience']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),

      );
    }
    if ($_POST['experience'][count($_POST['experience']) - 1] == 'От 1 года до 3 лет') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'experience',
          'value' => $_POST['experience'][count($_POST['experience']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'Нет опыта',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),

      );
    }
    if ($_POST['experience'][count($_POST['experience']) - 1] == 'От 3 до 6 лет') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'experience',
          'value' => $_POST['experience'][count($_POST['experience']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'От 1 года до 3 лет',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'Нет опыта',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),

      );
    }
    if ($_POST['experience'][count($_POST['experience']) - 1] == 'Более 6 лет') {
      $args['meta_query'][][] = array(
        'relation' => 'OR',
        array(
          'key' => 'experience',
          'value' => $_POST['experience'][count($_POST['experience']) - 1],
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'От 3 до 6 лет',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'От 1 года до 3 лет',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'Нет опыта',
          'compare' => 'LIKE'
        ),
        array(
          'key' => 'experience',
          'value' => 'Не имеет значения',
          'compare' => 'LIKE'
        ),
      );
    }
  }
  if (isset($_POST['metro_position'])) {
    $args['meta_query'][] = array(
      'key' => 'metro_position',
      'value' => $_POST['metro_position'],
      'compare' => 'IN'
    );
  }
  if (isset($_POST['vacancy_title'])) {
    $args['s'] = $_POST['vacancy_title'];
  }
  if (isset($_POST['page-number'])) {
    $args['paged'] = $_POST['page-number'];
  }

  $wp_query = new WP_Query($args);

  if ($wp_query->have_posts()) {
    while ($wp_query->have_posts()):
      $wp_query->the_post(); ?>
        <!-- <script>
                jQuery(document).ready(function($) {
                    $("#check-out-our-offers .page-numbers").on("click", function (e) {
                        var page_number = $(this).text();
                        e.preventDefault();
                        var id = $(this).attr('href'),
                            top = $(id).offset().top;
                        $('body,html').animate({
                            scrollTop: top
                        }, 100);
                        var vacancies_filter = $('#vacancies_filter');
                        var data = vacancies_filter.serialize();
                        data = data + "&page-number=" + page_number;
                        $.ajax({
                            url: ajaxurl, // обработчик
                            data: data, // данные
                            type: 'POST', // тип запроса
                            success: function(data) {
                                $('.vacancies__response').empty();
                                $('.vacancies__response').append(data);
                            }
                        });


                    });
                });
            </script> -->
        <div class="vacancy__item">
          <a class="item__title" href="<?php the_permalink() ?>">
            <h3>
              <?php the_title() ?>
            </h3>
          </a>
          <p class="salary">
            <?php if (get_post_meta($wp_query->the_post - get_the_ID(), 'salary', true) == 'По результатам собеседования')
              echo 'По результатам собеседования';
            else
              echo 'от ' . get_post_meta($wp_query->the_post - get_the_ID(), 'salary', true) . ' BYN' ?>
            </p>
            <p class="item__text">
            <?php echo wp_trim_words(get_the_excerpt(), 31, '...'); ?>
          </p>
          <div class="item__wrap">
            <p class="created_at">Размещено:
              <?php if (get_the_date() == wp_date(get_option('date_format')))
                echo 'cегодня';
              else {
                if (get_the_date() == wp_date(get_option('date_format'), strtotime('-1 day')))
                  echo 'вчера';
                else {
                  if (get_the_date() == wp_date(get_option('date_format'), strtotime('-2 day')))
                    echo 'позавчера';
                  else
                    echo get_the_date();
                }
              } ?>
            </p>
            <p class="region"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_764_16155)">
                  <path
                    d="M5.27309 0.5C3.25721 0.5 1.61719 2.1695 1.61719 4.22159C1.61719 5.36944 2.19774 6.76267 3.34276 8.36256C4.18069 9.53342 5.00639 10.3685 5.04114 10.4035C5.10501 10.4678 5.18903 10.5 5.27315 10.5C5.35483 10.5 5.43657 10.4696 5.49993 10.4085C5.53475 10.375 6.36255 9.57377 7.20206 8.41908C8.348 6.84288 8.92904 5.43065 8.92904 4.22157C8.929 2.1695 7.28894 0.5 5.27309 0.5ZM5.27309 5.82825C4.28754 5.82825 3.48577 5.02645 3.48577 4.04093C3.48577 3.0554 4.28756 2.2536 5.27309 2.2536C6.25862 2.2536 7.06042 3.0554 7.06042 4.04093C7.06042 5.02645 6.2586 5.82825 5.27309 5.82825Z"
                    fill="#9D9A97" />
                </g>
                <defs>
                  <clipPath id="clip0_764_16155">
                    <rect width="10" height="10" fill="white" transform="translate(0.273438 0.5)" />
                  </clipPath>
                </defs>
              </svg>
              <?= get_post_meta($wp_query->the_post - get_the_ID(), 'region', true) ?>
            </p>
          </div>
          <a class="read-more" href="<?php the_permalink() ?>">Узнать подробнее <img
              src="<?= get_template_directory_uri(); ?>/image/contact_us.svg" alt=""></a>
        </div>

        <?php
    endwhile; ?>
      <div class="page_nav">
        <?php
        echo paginate_links(
          array(
            'total' => $wp_query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'end_size' => 1,
            'prev_text' => '',
            'next_text' => '',
            'class' => 'paginate',
          )
        );
  } else {
    echo 'Извините, по данносу запросу вакансий не найдено.';
  } ?>
    </div>

    <?php wp_reset_postdata();

    wp_die();
}

/*
 * "Хлебные крошки" для WordPress
 * автор: Starmedia
 * версия: 2019.03.03
 * лицензия: MIT
 */
function dimox_breadcrumbs()
{
  $text['home'] = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<div class="container">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = '<span class="separator">/</span>'; // разделитель между "крошками"
  $before = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"

  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $show_last_sep = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link = '<span class="link">';
  $link .= '<a class="breadcrumbs__link" href="%1$s"><span>%2$s</span></a>';
  $link .= '</span>';
  $parent_id = ($post) ? $post->post_parent : '';
  $home_link = sprintf($link, $home_url, $text['home'], 1);

  if (is_home() || is_front_page()) {

    if ($show_on_home)
      echo $wrap_before . $home_link . $wrap_after;

  } else {

    $position = 0;

    echo $wrap_before;

    if ($show_home_link) {
      $position += 1;
      echo $home_link;
    }

    if (is_category()) {
      $parents = get_ancestors(get_query_var('cat'), 'category');
      foreach (array_reverse($parents) as $cat) {
        $position += 1;
        if ($position > 1)
          echo $sep;
        echo sprintf($link, get_category_link($cat), get_cat_name($cat), $position);
      }
      if (get_query_var('paged')) {
        $position += 1;
        $cat = get_query_var('cat');
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat), $position);
        echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) {
          if ($position >= 1)
            echo $sep;
          echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
        } elseif ($show_last_sep)
          echo $sep;
      }

    } elseif (is_search()) {
      if (get_query_var('paged')) {
        $position += 1;
        if ($show_home_link)
          echo $sep;
        echo sprintf($link, $home_url . '?s=' . get_search_query(), sprintf($text['search'], get_search_query()), $position);
        echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) {
          if ($position >= 1)
            echo $sep;
          echo $before . sprintf($text['search'], get_search_query()) . $after;
        } elseif ($show_last_sep)
          echo $sep;
      }

    } elseif (is_year()) {
      if ($show_home_link && $show_current)
        echo $sep;
      if ($show_current)
        echo $before . get_the_time('Y') . $after;
      elseif ($show_home_link && $show_last_sep)
        echo $sep;

    } elseif (is_month()) {
      if ($show_home_link)
        echo $sep;
      $position += 1;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'), $position);
      if ($show_current)
        echo $sep . $before . get_the_time('F') . $after;
      elseif ($show_last_sep)
        echo $sep;

    } elseif (is_day()) {
      if ($show_home_link)
        echo $sep;
      $position += 1;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'), $position) . $sep;
      $position += 1;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'), $position);
      if ($show_current)
        echo $sep . $before . get_the_time('d') . $after;
      elseif ($show_last_sep)
        echo $sep;

    } elseif (is_single() && !is_attachment()) {
      if (get_post_type() != 'post') {
        $position += 1;
        $post_type = get_post_type_object(get_post_type());
        if ($position > 1)
          echo $sep;
        echo sprintf($link, get_post_type_archive_link($post_type->name), $post_type->labels->name, $position);
        if ($show_current)
          echo $sep . $before . get_the_title() . $after;
        elseif ($show_last_sep)
          echo $sep;
      } else {
        if ($show_home_link && $show_current)
          echo $sep;
        if ($show_current)
          echo $before . get_the_title() . $after;
        elseif ($show_home_link && $show_last_sep)
          echo $sep;
        if (get_query_var('cpage')) {
          $position += 1;
          echo $sep . sprintf($link, get_permalink(), get_the_title(), $position);
          echo $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current)
            echo $sep . $before . get_the_title() . $after;
          elseif ($show_last_sep)
            echo $sep;
        }
      }

    } elseif (is_post_type_archive()) {
      $post_type = get_post_type_object(get_post_type());
      if (get_query_var('paged')) {
        $position += 1;
        if ($position > 1)
          echo $sep;
        echo sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label, $position);
        echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current)
          echo $sep;
        if ($show_current)
          echo $before . $post_type->label . $after;
        elseif ($show_home_link && $show_last_sep)
          echo $sep;
      }

    } elseif (is_attachment()) {
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID);
      $catID = $cat[0]->cat_ID;
      $parents = get_ancestors($catID, 'category');
      $parents = array_reverse($parents);
      $parents[] = $catID;
      foreach ($parents as $cat) {
        $position += 1;
        if ($position > 1)
          echo $sep;
        echo sprintf($link, get_category_link($cat), get_cat_name($cat), $position);
      }
      $position += 1;
      echo $sep . sprintf($link, get_permalink($parent), $parent->post_title, $position);
      if ($show_current)
        echo $sep . $before . get_the_title() . $after;
      elseif ($show_last_sep)
        echo $sep;

    } elseif (is_page() && !$parent_id) {
      if ($show_home_link && $show_current)
        echo $sep;
      if ($show_current)
        echo $before . get_the_title() . $after;
      elseif ($show_home_link && $show_last_sep)
        echo $sep;

    } elseif (is_page() && $parent_id) {
      $parents = get_post_ancestors(get_the_ID());
      foreach (array_reverse($parents) as $pageID) {
        $position += 1;
        if ($position > 1)
          echo $sep;
        echo sprintf($link, get_page_link($pageID), get_the_title($pageID), $position);
      }
      if ($show_current)
        echo $sep . $before . get_the_title() . $after;
      elseif ($show_last_sep)
        echo $sep;

    } elseif (is_tag()) {
      if (get_query_var('paged')) {
        $position += 1;
        $tagID = get_query_var('tag_id');
        echo $sep . sprintf($link, get_tag_link($tagID), single_tag_title('', false), $position);
        echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current)
          echo $sep;
        if ($show_current)
          echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
        elseif ($show_home_link && $show_last_sep)
          echo $sep;
      }

    } elseif (is_author()) {
      $author = get_userdata(get_query_var('author'));
      if (get_query_var('paged')) {
        $position += 1;
        echo $sep . sprintf($link, get_author_posts_url($author->ID), sprintf($text['author'], $author->display_name), $position);
        echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current)
          echo $sep;
        if ($show_current)
          echo $before . sprintf($text['author'], $author->display_name) . $after;
        elseif ($show_home_link && $show_last_sep)
          echo $sep;
      }

    } elseif (is_404()) {
      if ($show_home_link && $show_current)
        echo $sep;
      if ($show_current)
        echo $before . $text['404'] . $after;
      elseif ($show_last_sep)
        echo $sep;

    } elseif (has_post_format() && !is_singular()) {
      if ($show_home_link && $show_current)
        echo $sep;
      echo get_post_format_string(get_post_format());
    }

    echo $wrap_after;

  }
} // end of dimox_breadcrumbs()

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
  /*
   Вид базового шаблона:
   <nav class="navigation %1$s" role="navigation">
     <h2 class="screen-reader-text">%2$s</h2>
     <div class="nav-links">%3$s</div>
   </nav>
   */

  return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}

// выводим пагинацию
the_posts_pagination(
  array(
    'end_size' => 2,
  )
);

function custom_microdata()
{
  if (is_single()) { // Проверяем, является ли текущая страница статьей

    $post_id = get_the_ID(); // Получаем ID текущей статьи
    $post_title = get_the_title($post_id); // Получаем заголовок статьи
    $post_image = get_the_post_thumbnail_url($post_id); // Получаем URL изображения статьи
    // Форматируем даты публикации и модификации в требуемом формате
    $post_date_published = get_the_date('Y-m-d\TH:i:sP', $post_id);
    $post_date_modified = get_the_modified_date('Y-m-d\TH:i:sP', $post_id);

    ob_start(); // Начинаем буферизацию вывода
    ?>
      <script type="application/ld+json">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@context": "https://schema.org",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@type": "NewsArticle",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "headline": "<?php the_title(); ?>",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "image": "<?php echo get_the_post_thumbnail_url(); ?>",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "datePublished": "<?php the_date(); ?>",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "dateModified": "<?php the_modified_date(); ?>",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "author": {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "@type": "Organization",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "name": "Кадр",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "url": "https://hrbel.by/o-kompanii/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </script>
      <?php
      $microdata_script = ob_get_clean(); // Получаем содержимое буфера и очищаем его
  
      echo $microdata_script; // Выводим микроразметку
  }
}

function microdata_article()
{

  $post_id = get_the_ID(); // Получаем ID текущей статьи
  $post_title = get_the_title($post_id);

  if (!is_front_page()) { // Проверяем, что это не главная страница

    ob_start(); // Начинаем буферизацию вывода
    ?>
      <script type="application/ld+json">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "@context": "https://schema.org",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "@type": "BreadcrumbList",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "itemListElement": [{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "position": 1,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "name": "Кадровое агенство",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "item": "https://hrbel.by/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "position": 2,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "name": "Инфоцентр",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "item": "https://hrbel.by/infocentr/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "position": 3,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "name": "<?php echo esc_attr($post_title); ?>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }]
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </script>
      <?php
      $microdata_script = ob_get_clean(); // Получаем содержимое буфера и очищаем его
  
      echo $microdata_script; // Выводим микроразметку
  }
}

function microdata_vacancy()
{

  $post_id = get_the_ID(); // Получаем ID текущей статьи
  $post_title = get_the_title($post_id);

  if (!is_front_page()) { // Проверяем, что это не главная страница

    ob_start(); // Начинаем буферизацию вывода
    ?>
      <script type="application/ld+json">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "@context": "https://schema.org",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "@type": "BreadcrumbList",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "itemListElement": [{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "position": 1,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "name": "Кадровое агенство",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "item": "https://hrbel.by/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "position": 2,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "name": "Вакансии",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "item": "https://hrbel.by/vakansii/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "position": 3,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          "name": "<?php echo esc_attr($post_title); ?>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }]
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </script>
      <?php
      $microdata_script = ob_get_clean(); // Получаем содержимое буфера и очищаем его
  
      echo $microdata_script; // Выводим микроразметку
  }
}


function microdata_pages()
{
  $post_id = get_the_ID(); // Получаем ID текущей статьи
  $parent_post = get_post_parent($post_id);

  if ($_SERVER['REQUEST_URI'] === '/infocentr/') {
    ?>
      <script type="application/ld+json">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@context": "https://schema.org",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@type": "BreadcrumbList",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "itemListElement": [{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "position": 1,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "name": "Главная",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "item": "https://hrbel.by/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "position": 2,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "name": "Инфоцентр"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }]
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </script>
      <?php
  }

  if (!is_front_page() && !is_single() && $_SERVER['REQUEST_URI'] !== '/infocentr/') { // Проверяем, что это не главная страница и не статья
    if (!$parent_post && $_SERVER['REQUEST_URI'] !== '/infocentr/') {
      ob_start(); // Начинаем буферизацию вывода
      ?>
        <script type="application/ld+json">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@context": "https://schema.org",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@type": "BreadcrumbList",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "itemListElement": [{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "position": 1,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "name": "Главная",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "item": "https://hrbel.by/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "position": 2,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    "name": "<?php the_title(); ?>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }]
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </script>
        <?php
        $microdata_script = ob_get_clean(); // Получаем содержимое буфера и очищаем его
    } else {
      ob_start(); // Начинаем буферизацию вывода
      ?>
        <script type="application/ld+json">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            "@context": "https://schema.org",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            "@type": "BreadcrumbList",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            "itemListElement": [{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "position": 1,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "name": "Главная",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "item": "https://hrbel.by/"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "position": 2,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "name": "<?php echo get_the_title($parent_post); ?>",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "item": "<?php the_permalink($parent_post) ?>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            },
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "@type": "ListItem",
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "position": 3,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "name": "<?php the_title(); ?>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }]
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </script>
        <?php
        $microdata_script = ob_get_clean(); // Получаем содержимое буфера и очищаем его
    }

    echo $microdata_script; // Выводим микроразметку
  }
}

add_action("wp_footer", "microdata_pages");
