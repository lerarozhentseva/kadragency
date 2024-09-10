<!-- При добавлении в шаблон данного блока обернуть его в <section class="find"> </section> В ФАЙЛЕ ШАБЛОНА!!! -->
<!-- Если надо добавить отступы, тегу section задаем класс pt-150 или pb-150 -->
<!-- Если надо Убрать блок на адаптиве 1089, тегу section задаем класс find-adaptive -->
<div class="container-new">
  <div class="find-wrapper flex">
    <div class="find-image">
      <img src="<?= get_template_directory_uri(); ?>/image/team/mariya-arhipenko.jpg" alt="" class="img-cover">
    </div>
    <div class="find-info">
      <p class="find-info__title title-new h2">
        <?php if (get_the_ID() != 3527): ?>
          Доверьте поиск и подбор персонала профессионалам из Кадра
        <?php else: ?>
          Актуальные исследования заработных плат 2024
        <?php endif; ?>
      </p>
      <button class="find__button btn-position-aware btn-new popmake-2712 pum-trigger">
        <?php if (get_the_ID() != 3527): ?>
          Найти сотрудника
        <?php else: ?>
          Заказать
        <?php endif; ?>
        <span class="position-aware"></span>
      </button>
    </div>
    <svg class="find-elem" width="247" height="155" viewBox="0 0 247 155" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <circle cx="25.5" cy="25.5" r="24.5" transform="matrix(-1 0 0 1 51 0)" stroke="#D25F15" stroke-width="2" />
      <circle cx="117" cy="117" r="116" transform="matrix(-1 0 0 1 247 37)" stroke="#D25F15" stroke-width="2" />
    </svg>
  </div>
</div>