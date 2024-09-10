<?php


$current_page_id = get_the_ID();
$current_page = get_post($current_page_id);
$parent_page_id = wp_get_post_parent_id($current_page_id);


$parent_page = null;
if ($parent_page_id) {
  $parent_page = get_post($parent_page_id);
}

$menu_name = 'Верхнее меню';
$menu_items = wp_get_nav_menu_items($menu_name);

$page_order = array();

foreach ($menu_items as $key => $menu_item) {
  if ($menu_item->object == 'page') {
    $page_id = $menu_item->object_id;
    $page_order[$page_id] = $key;
  }
}

$page_ids = array();

if ($parent_page) {
  $page_ids[] = $parent_page_id;
  $child_pages = get_pages(array('child_of' => $parent_page_id));
  foreach ($child_pages as $child_page) {
    $page_ids[] = $child_page->ID;
  }
} else {
  $page_ids[] = $current_page_id;
  $child_pages = get_pages(array('child_of' => $current_page_id));
  foreach ($child_pages as $child_page) {
    $page_ids[] = $child_page->ID;
  }
}

usort($page_ids, function ($a, $b) use ($page_order) {
  return $page_order[$a] - $page_order[$b];
});

$current_page_index = array_search($current_page_id, $page_ids);

if ($current_page_index !== false) {
  $before_current_page = array_slice($page_ids, 0, $current_page_index);
  $after_current_page = array_slice($page_ids, $current_page_index);
  $page_ids = array_merge($after_current_page, $before_current_page);
}

$page_ids = array_diff($page_ids, array($current_page_id));

$count_pages = 6;
if ($parent_page_id == 336) {
  $count_pages = 3;
}

$page_ids_sliced = array_slice($page_ids, 0, $count_pages);
?>



<div class="services custom-block">
  <div class="container">
    <div class="block__title services__title">
      <p class='h2'>Похожие услуги</p>
      <div class="underline-block block"></div>
    </div>
    <div class="services__items">
      <?php for ($i = 0; $i < count($page_ids_sliced); $i++): ?>
        <div class="services__item">
          <p>
            <?php echo get_the_title($page_ids_sliced[$i]); ?>
          </p>
          <a href="<?php echo get_permalink($page_ids_sliced[$i]); ?>">Перейти</a>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</div>