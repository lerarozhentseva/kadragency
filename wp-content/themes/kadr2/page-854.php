<?php
/*
Template Name: Предоставление временного персонала
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
        <h1>Пре&shy;до&shy;став&shy;ле&shy;ние вре&shy;мен&shy;ных ра&shy;бот&shy;ни&shy;ков</h1>
        <p>В условиях переменчивого рынка стабильность не всегда приносит удачу. Успеха добивается тот, кто умеет быстро
          перестраиваться, обеспечил себе место для маневра. Аренда персонала отлично вписывается в эту схему.</p>
        <p>Временного работника легко нанять с посреднической помощью кадрового агентства «КАДР». Мы имеем большой опыт
          работы в сфере труда и занятости. Возьмем на себя кадровое, организационное, бухгалтерское и юридическое
          сопровождение. А Вам предоставим свободу действий и независимость.</p>
        <button class="btn btn-position-aware popmake-29" href="#">КОНСУЛЬТАЦИЯ<span
            class="position-aware"></span></button>
      </div>
      <div class="page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/vrem-pers.png" alt="Собеседование в офисе">
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
  <div id="block-1" class="custom-block block-2">
    <div class="container">
      <div class="title-part-mobile__item">
        <p>В условиях переменчивого рынка стабильность не всегда приносит удачу. Успеха добивается тот, кто умеет быстро
          перестраиваться, обеспечил себе место для маневра. Аренда персонала отлично вписывается в эту схему.</p>
        <p>Временный персонал легко нанять с посреднической помощью кадрового агентства «КАДР». Мы имеем большой опыт
          работы в сфере труда и занятости. Возьмем на себя кадровое, организационное, бухгалтерское и юридическое
          сопровождение. А Вам предоставим свободу действий и независимость.</p>
      </div>
      <div class="block__title">
        <h2>В каких случаях выгодно и где применить</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p class="half-width">Есть ситуации, когда услуги временного персонала особенно хороши. Такой вид привлечения
          персонала — находка для небольших компаний, когда увеличение штата повлечет изменение ставки налогообложения и
          усложнение налоговой отчетности.</p>
        <p class="half-width">Вот распространенные примеры, когда <strong>временный персонал</strong> закроет проблему
          лучше и быстрее всего:</p>
        <ol>
          <li>
            <p>Строительство объектов, когда на каком-то из этапов возникает необходимость в увеличении штата рабочих или требуются
                специалисты определенного направления.</p>
          </li>
          <li>
            <p>В складской логистике при поступлении крупной партии товара, увеличении отгрузок и пр., когда требуются
              грузчики, карщики, штабелировщики, стропальщики.</p>
          </li>
          <li>
            <p>На предприятиях общественного питания, например, для обслуживания разовых мероприятий.</p>
          </li>
          <li>
            <p>В магазинах розничной торговли, когда становится востребованной курьерская доставка, фасовка и
              комплектация заказов. Также могут потребоваться мерчендайзеры, маркетологи, промоутеры.</p>
          </li>
          <li>
            <p>В рекламной и выставочной деятельности для проведения выездных мероприятий, фестивалей, промо-акций и пр.
            </p>
          </li>
          <li>
            <p>В сельском хозяйстве на период посевной и уборочной страды.</p>
          </li>
          <li>
            <p>В случае реструктуризации предприятия, антикризисного управления, пуско-наладочных работ и т.д.</p>
          </li>
          <li>
            <p>Клининг также остается востребованной услугой, где необходимо временное предоставление персонала.</p>
          </li>
          <li>
            <p>В сфере ЖКХ при проведении сезонных работ услуги временного персонала будут востребованы и рациональны.
            </p>
          </li>
        </ol>
        <p>Представьте, что предприятие взяло крупный заказ, который важен для продвижения бизнеса, нужно выполнить его
          качественно и в сжатые сроки. Если нет твердой уверенности, что штат предприятия и квалификация работников
          полностью закроют этот проект, тогда компания «КАДР» оперативно решит вопрос с обеспечением дополнительными
          кадрами.</p>
        <p>Или же головной объект находится в Минске, а фронт работ нужно развернуть на периферии. Большую часть рабочих
          кадров можно быстро организовать по месту дислокации работ. Штатный режим предприятия при этом не пострадает.
          Но временно можно «арендовать» и одного конкретного сотрудника – на период отсутствия основного работника. С
          такими ситуациями также сталкивался каждый руководитель.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-1 dark">
    <div class="container">
      <div class="block__title">
        <h2>Услуги временного персонала – в режиме максимальной эффективности</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p>Временный персонал обойдется для бизнеса компании дешевле, чем штатный сотрудник, даже если для этого
          привлекать лучших специалистов. Персонал, принятый на время для конкретного исполнения работ, сокращает
          расходы в сфере кадров до 30%.</p>
        <p>Организация предоставит <strong>временный персонал</strong> без дополнительных нагрузок, освободит нанимателя
          от необходимости трудоустройства и построения трудовых взаимоотношений, социальных обязательств и налоговых
          выплат. Да и обременительную процедуру увольнения проходить не потребуется.</p>
        <p>Актуально предоставление временного персонала из категории иностранной рабочей силы, поскольку освобождает
          руководителя от необходимости оформления дополнительного пакета разрешений на привлечение к работе иностранцев
          и ряда материальных обязательств перед государством.</p>
      </div>
    </div>
  </div>
  <div class="custom-block block-1">
    <div class="container">
      <div class="block__title">
        <h2>Подбор временного персонала «под ключ»</h2>
        <div class="underline-block"></div>
      </div>
      <div class="block__item">
        <p>После того, как Вы оставите заявку, представитель компании «КАДР» свяжется с Вами по телефону и договорится о
          встрече. На месте мы решим, каковы будут пожелания к привлечению людей в соответствии со спецификой задачи.
          Составим юридический договор на услуги по аренде временного персонала, в котором учтем детали. За временными
          работниками закрепляется менеджер, который будет контролировать качество работы. Для удобства нанимателя
          ведется отчет работы временного персонала в форме табеля.</p>
        <p>В договоре конкретно прописываем виды работ, сроки оказания услуг, стоимость и санкции, которые будут
          применяться за невыполнение условий договора. Компания «КАДР» сознательно идет на это, так как заведомо
          уверена в качестве своей работы. Звоните в удобное время, оставляйте онлайн-заявку на предоставление временных
          работников в любой сфере деятельности и получайте работоспособную бригаду профессионалов и прибыль, не
          затрачивая времени и сил на подбор. <strong>Временный персонал</strong> позволит сократить издержки, экономить
          и действовать, это будет новый этап на пути оптимизации производства и развития бизнеса.</p>
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