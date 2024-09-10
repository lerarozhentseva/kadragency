<?php
/*
Template Name: IT-рекрутинг
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="page-header">
    <div class="container">
      <div class="page-header__item item-1">
        <div class="breadcrumbs">
          <?php if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs(); ?>
        </div>
        <h1>Под&shy;бор IT пер&shy;со&shy;на&shy;ла</h1>
        <p>IT рекрутинг в Беларуси занимает далеко не последнее место в перечне услуг, предоставляемых кадровыми
          агентствами на территории Республики. Кадровое агентство «КАДР» профессионально подбирает кадры для
          относительно молодой бизнес-ниши – области информационных технологий.</p>
        <p>Информационные технологии развиваются и изменяются с космической скоростью, а люди учатся в темпе
          образовательных стандартов. Возникающий дисбаланс приводит к дефициту кадров и отставанию сферы информационных
          технологий, специалисты которой востребованы в различных отраслях хозяйственной деятельности.</p>
        <p><strong>IT-рекрутинг</strong> отличается от обычного рекрутинга обязательным сочетанием компетенций в сферах
          IT и HR. Говоря простыми словами, подбор IT специалистов от кадрового агентства «КАДР» есть симбиоз кадрового
          делопроизводства с компьютерными технологиями.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/it-pers.png" alt="Собеседование в офисе">
        <?php if (get_field('cena')): ?>
          <div class="price_img">
            <span>цена</span>
            <p>
              <?php echo esc_html(get_field('cena')); ?>
            </p>
          </div>
        <?php endif; ?>
        <a class="btn btn-position-aware dark smooth-transition" href="#selection-personnel"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="block-1" class="custom-block block-3">
    <div class="container">
      <div class="title-part-mobile__item">
        <p>ИТ рекрутинг в Беларуси занимает далеко не последнее место в перечне услуг, предоставляемых кадровыми
          агентствами на территории Республики. Кадровое агентство «КАДР» профессионально подбирает кадры для
          относительно молодой бизнес-ниши – области информационных технологий.</p>
        <p>Информационные технологии развиваются и изменяются с космической скоростью, а люди учатся в темпе
          образовательных стандартов. Возникающий дисбаланс приводит к дефициту кадров и отставанию сферы информационных
          технологий, специалисты которой востребованы в различных отраслях хозяйственной деятельности.</p>
        <p><strong>IT-рекрутинг</strong> отличается от обычного рекрутинга обязательным сочетанием компетенций в сферах
          IT и HR. Говоря простыми словами, ИТ подбор кадрового агентства «КАДР» есть симбиоз кадрового делопроизводства
          с компьютерными технологиями.</p>
      </div>
      <div class="block__title">
        <h2>Компетенции IT-эйчара</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">HR-специалист, занимающийся <strong>подбором IT персонала</strong> для сферы информационных
          технологий, должен:</p>
        <ol>
          <li>
            <p>Разбираться в профессиональной терминологии «айтишников».</p>
          </li>
          <li>
            <p>Иметь представление о программировании.</p>
          </li>
          <li>
            <p>Владеть английским языком на уровне не ниже В2.</p>
          </li>
          <li>
            <p>Знать основы психологии, маркетинга и бизнеса.</p>
          </li>
          <li>
            <p>Грамотно писать и придерживаться деловой этики общения.</p>
          </li>
          <li>
            <p>Обладать опытом кадрового подбора.</p>
          </li>
          <li>
            <p>Уметь автоматизировать рабочий процесс.</p>
          </li>
        </ol>
        <p class="half-width">Общение на привычном профессиональном сленге располагает соискателя к эйчару, превращая
          кадровика в «своего парня». Автоматизированный подбор резюме с помощью онлайн-сервисов ускоряет работу. Знание
          делового английского открывает международные перспективы компании-наймодателю.</p>
        <p class="half-width">Личностные качества IT-рекрутера:</p>
        <ul class="marker-hard">
          <li>
            <p>объективность;</p>
          </li>
          <li>
            <p>коммуникабельность;</p>
          </li>
          <li>
            <p>стрессоустойчивость;</p>
          </li>
          <li>
            <p>креативность;</p>
          </li>
          <li>
            <p>экстравертность;</p>
          </li>
          <li>
            <p>нацеленность на результат.</p>
          </li>
        </ul>
        <p>ИТ-рекрутер – узкий специалист. Представитель кадрового агентства «КАДР» непременно добьется цели и в
          предустановленные сроки сыщет для клиента как уникальных, так и линейных исполнителей хоть на краю света!</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2 dark">
    <div class="container">
      <div class="block__title">
        <h2>Кого мы ищем?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Информационные технологии составляют «гнездо» профессий. Компании «заказывают» необходимые
          направления поиска ИТ персонала. В перечне наиболее востребованных вакансий:</p>
        <ul class="marker-arrow">
          <li>
            <p>системные администраторы;</p>
          </li>
          <li>
            <p>разработчики программного обеспечения (ПО);</p>
          </li>
          <li>
            <p>аналитики больших данных (Big Data);</p>
          </li>
          <li>
            <p>SEO-специалисты;</p>
          </li>
          <li>
            <p>QA-тестировщики;</p>
          </li>
          <li>
            <p>Frontend Developer`ы;</p>
          </li>
          <li>
            <p>DevOps-инженеры;</p>
          </li>
          <li>
            <p>и др.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="custom-block block-4">
    <div class="container">
      <div class="block__title">
        <h2>Junior, Middle или Senior?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Уровни программистов разнятся, в первую очередь, в соответствии со стажем работы в
          занимаемой позиции (от полугода до пяти лет). Следует также учитывать степень ответственности сотрудника,
          скиллы (компетенции) и предлагаемые задачи.</p>
        <ul class="marker-hard">
          <li>
            <p>Junior`у требуется наставник, предоставляется решение типовых задач и ожидается низкая степень
              ответственности.</p>
          </li>
          <li>
            <p>Middle обычно входит в «команду» разработчиков, ответственность несет коллективную, решает укрупненные
              задачи.</p>
          </li>
          <li>
            <p>Senior получает свободу действий, единолично отвечает за большой участок работы и руководит остальными
              программистами.</p>
          </li>
        </ul>
        <p>В зависимости от поставленных перед IT-рекрутером задач, ведется привлечение и отбор персонала в области ИТ.
        </p>
      </div>
    </div>
  </div>
  <div class="custom-block block-1 dark">
    <div class="container">
      <div class="block__title">
        <h2>Способы мотивации IT-специалистов</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p>Статистика безжалостно свидетельствует, что средний программист всегда имеет в виду три-четыре предложения.
          Рекрутеру приходится изворачиваться, чтобы привлечь подходящего специалиста к конкретному работодателю,
          особенно, когда речь идет о небольших предприятиях.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-2">
    <div class="container">
      <div class="block__title">
        <h2>Чем привлечь искомого сотрудника?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <ol class="list-bold">
          <li>
            <p>Достойной оплатой труда.</p>
            <p>Простой прием, требующий понимания среднего уровня зарплат различных категорий работников в области
              информационных технологий. Зарплатное предложение должно быть адекватно вакантной должности и квалификации
              кандидата и конкурентоспособно.</p>
          </li>
          <li>
            <p>Комфортными условиями работы.</p>
            <p>Просторный светлый офис и эргономичное рабочее место, оснащенное по последнему слову техники повышают
              привлекательность компании в целом. Если кандидат настаивает на удаленной работе, проще уступить, чем
              потерять необходимого специалиста.</p>
          </li>
          <li>
            <p>Гибкой стратегией руководства.</p>
            <p>Среди программистов нередки интроверты. Подобный сотрудник не участвует ни в корпоративах, ни в
              футбольных матчах за честь компании. В такой ситуации снисходительность начальства – весомый аргумент
              «за».</p>
          </li>
          <li>
            <p>Карьерным продвижением.</p>
            <p>Заманчивым будет предложение о работе, включающей обучение и повышение квалификации. Если Junior получит
              шанс в обозримом будущем стать Senior`ом, то гарантированно уцепится за подобную возможность.</p>
          </li>
          <li>
            <p>Профессиональным вызовом.</p>
            <p>Айтишники падки на интересные, но сложные в исполнении проекты. На этапе тестирования есть смысл
              предложить небольшую, но увлекательную задачу вместо утомительного анкетирования и намекнуть кандидату на
              вызовы, ожидающие в процессе будущей работы.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="custom-block block-3 dark">
    <div class="container">
      <div class="block__title">
        <h2>Где и как охотиться на IT-персонал?</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Источники для хантинга кандидатов разнообразны:</p>
        <ul class="marker-hard">
          <li>
            <p>открытые веб-ресурсы, посвященные поискам работы;</p>
          </li>
          <li>
            <p>социальные сети (специализированные профи-группы);</p>
          </li>
          <li>
            <p>форумы программистов и разработчиков;</p>
          </li>
          <li>
            <p>профессиональные сообщества;</p>
          </li>
          <li>
            <p>реферальные программы;</p>
          </li>
          <li>
            <p>высшие профильные учебные заведения;</p>
          </li>
          <li>
            <p>и др.</p>
          </li>
        </ul>
        <p class="half-width">Пошаговый план найма IT-персонала:</p>
        <ol class="list-bold">
          <li>
            <p>Подготовка.</p>
            <p>На предварительном этапе ведется работа с Заказчиком: согласуется заявка и обговариваются условия найма.
              Составляется и подписывается договор на оказание услуг.</p>
          </li>
          <li>
            <p>Поиск IT специалиста.</p>
            <p>Приступая к отбору, эйчар осуществляет мониторинг источников с учетом результатов этапа согласования.
              Формируется пакет отобранных резюме.</p>
          </li>
          <li>
            <p>Отсев.</p>
            <p>Собеседование с агентом и проверка сведений о претендентах. При необходимости – тестирование и запрос
              рекомендаций. Составляется итоговый список сотрудников.</p>
          </li>
          <li>
            <p>Предоставление персонала.</p>
            <p>Эйчар присутствует при встрече претендента с наймодателем. Возможен выбор нанимателем одного из
              нескольких кандидатов. Подписывается контракт и вакансия считается закрытой.</p>
          </li>
          <li>
            <p>Окончательный расчет.</p>
            <p>Условия расчета с агентством прописываются в договоре. По выходе сотрудника на работу и по окончании
              гарантии выплачивается гонорар кадровому агентству.</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="custom-block block-1">
    <div class="container">
      <div class="block__title">
        <h2>Оффер от компании «КАДР»</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p>Мы помогаем кандидату и нанимателю договориться о сотрудничестве, учитывая специфическую психологию
          «айтишников», привыкших работать самостоятельно и удаленно. Нам доверяют рекрутинг и хантинг, потому что мы
          законопослушны и ставим профессионализм во главу угла.</p>
        <p>Мы учитываем пожелания Заказчика и соблюдаем нормы бизнес-этики и трудового права. Совершив звонок или
          заполнив форму заявки, Вы непосредственно инициируете <strong>ИТ рекрутинг</strong> с кадровым агентством
          «КАДР»!</p>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/promotion'); ?>
  <?php get_template_part('template-parts/services'); ?>
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/news'); ?>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>