<?php $s = get_search_query(); ?>



<form method="get" class="search-form" action="<?php echo esc_url(home_url('/search')); ?>">
  <button class="btn-search search" type="button">
    <img src="<?= get_template_directory_uri(); ?>/image/search-md.svg" alt="Открыть">
  </button>
  <button class="btn-search submit" type="submit" style="display: none">
    <img src="<?= get_template_directory_uri(); ?>/image/search-md.svg" alt="Поиск">
  </button>
  <input type="text" autocomplete="off" value="<?php echo esc_attr(get_query_var('s')); ?>"
    placeholder="Введите слово для поиска" name="s" class="search-form__input" />
  <button class="btn-search-close" type="button">
    <img src="<?= get_template_directory_uri(); ?>/image/close-search.svg" alt="Закрыть">
  </button>
  <ul class="ajax-search"></ul>
</form>