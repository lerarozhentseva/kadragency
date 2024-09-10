<?php
/*
Template Name: Вопрос/ответ
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
  <div class="q-a-title page-header">
    <div class="container">
      <div class="q-a-title__item page-header__item item-1">
        <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs'))
          dimox_breadcrumbs(); ?></div>
        <h1>Вопрос/ответ</h1>
        <p>Здесь мы собрали интересные, нестандартные вопросы, с которыми приходилось сталкиваться на практике. Они
          приходили к нам по каналам обратной связи, их задавали в ходе телефонной консультации нашим специалистам.</p>
        <p>Конечно, проблемы были успешно решены. Уверены, что этот опыт может пригодиться другим, поэтому публикуем те,
          что на наш взгляд будет полезно держать в уме.</p>
        <button class="btn btn-position-aware popmake-29" href="#">Консультация<span
            class="position-aware"></span></button>
      </div>
      <div class="q-a-title__item page-header__item item-2">
        <img src="<?= get_template_directory_uri(); ?>/image/q&a.svg" alt="Подставка для ноутбука">
        <a class="btn btn-position-aware dark smooth-transition" href="#q-a"><img
            src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
            class="position-aware quad"></span></a>
      </div>
    </div>
  </div>
  <div id="q-a" class="q-a">
    <div class="container">
      <div class="q-a__title">
        <h2>Вопросы и ответы</h2>
      </div>
      <div class="underline-block"></div>
      <div class="q-a__item item-1">
        <div class="item__image">
          <span>01</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-1.svg" alt="Стул в пустой комнате">
        </div>
        <div class="item__text">
          <h5>Если в расширяющуюся компанию требуется много специалистов и сразу, что делать?</h5>
          <ul>
            <li>
              <p>Лучший выход взять рекрутера временно на прокат, то есть, на аутсорсинг. Он будет работать по договору
                и за разумную плату закроет вакансии в короткий срок.</p>
            </li>
          </ul>
          <p>Персональный рекрутер изучит ситуацию предприятия, сможет оперативно реагировать, если требования изменятся
            в процессе. Он избавит Вас от потока предложений соискателей и назойливых предложений кадровых агентств, Вы
            сэкономите время, силы и деньги.</p>
        </div>
      </div>
      <div class="q-a__item item-2">
        <div class="item__image">
          <span>02</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-2.svg" alt="Подоконник с цветами">
        </div>
        <div class="item__text">
          <h5>Где найти вакансии от прямых работодателей?</h5>
          <ul>
            <li>
              <p>Советуем разместить резюме на специализированных сайтах, самые крупные из которых rabota, praca. Вам
                предложат заполнить анкету-резюме по унифицированной форме. Она будет размещена в открытом доступе. Там
                же можно просматривать и откликаться на понравившееся вакансии.</p>
            </li>
          </ul>
          <p>Также Вы можете обратиться к нам в кадровое агентство. Мы сотрудничаем с работодателями напрямую, и часто
            это происходит оперативнее, чем на портале. Резюме соискателей принимаем бесплатно, проконсультируем перед
            собеседованием и можем дать Вам рекомендации для нанимателя.</p>
        </div>
      </div>
      <div class="q-a__item item-3">
        <div class="item__image">
          <span>03</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-3.svg"
            alt="Фрагмент фотографии из раздела Вопрос-Ответ">
        </div>
        <div class="item__text">
          <h5>Куда лучше трудоустроиться выпускнику без опыта работы?</h5>
          <ul>
            <li>
              <p> Отсутствие опыта, это не повод отчаиваться и комплексовать. Вы молоды, а значит, готовы учиться. Ваше
                главное конкурентное преимущество – это энергия, энтузиазм и неординарное мышление, которые с годами
                пропадают.</p>
            </li>
          </ul>
          <p>Есть определенная категория работодателей, которые набирают именно молодежь на вновь открывающиеся
            направления. И если Вы готовы к стажировке и <a class="text-link"
              href="<?= get_site_url(); ?>/kadrovyj-konsalting/korporativnoe-obuchenie/">обучению</a>, мы обязательно
            найдем подходящий вариант для Вас.</p>
        </div>
      </div>
      <div class="q-a__item item-4">
        <div class="item__image">
          <span>04</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-4.svg" alt="Ноутбук вид сверу">
        </div>
        <div class="item__text">
          <h5>Насколько правомерно использование услуг аутсорсинга? Как правильно оформить такие отношения?</h5>
          <ul>
            <li>
              <p>Это интересная, востребованная и выгодная возможность пришла на рынок недавно и законодательно пока не
                отработана. Понятие аутсорсинг юридически нигде не прописано. Однако на него нет и прямого запрета.
                Поэтому при оказании данной услуги мы используем форму гражданско-правовых договорных отношений.</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="q-a__item item-5">
        <div class="item__image">
          <span>05</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-5.svg"
            alt="Фрагмент фотографии из раздела Вопрос-Ответ">
        </div>
        <div class="item__text">
          <h5>SOS! Помогите! Увольняется очень ценный сотрудник – что делать?</h5>
          <ul>
            <li>
              <p>Да, это серьезно. В данном случае возможны два пути. Нужно постараться его у держать. А для этого
                необходимо составить разговор и выяснить причину ухода. Часто удается найти компромиссное решение и
                предложить в качестве компенсации повышение зарплаты или должности, изменение круга обязанностей, другие
                бонусы. Мы поможем спланировать беседу и правильно выстроить стратегию разговора.</p>
            </li>
          </ul>
          <p>Но может быть и такое, что Вами попросту манипулируют, пытаясь выторговать для себя преференции, или же
            человек принял серьезное решение, так что сохранить ценного работника не удастся. Что ж, тогда мы будем
            искать ему замену в кратчайшие сроки, так как знаем немало путей и источников для <a class="text-link"
              href="<?= get_site_url(); ?>/poisk-i-podbor-personala/">заполнения вакансий</a>.</p>
        </div>
      </div>
      <div class="q-a__item item-6">
        <div class="item__image">
          <span>06</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-6.svg" alt="Фотография офиса маленькая">
        </div>
        <div class="item__text">
          <h5>Через три дня ожидается проверка трудинспекции. Переживаем, все ли у нас в порядке. Вы можете нам помочь
            или уже поздно?</h5>
          <ul>
            <li>
              <p>Конечно, три дня для аудита – небольшой срок, но мы успеем проверить наличие основных позиций кадрового
                делопроизводства, так как знаем, на что в первую очередь смотрят проверяющие инспекторы. Даже сможем
                восполнить пробелы, если таковые обнаружатся.</p>
            </li>
          </ul>
          <p>Более детальная проработка потребует большего времени. Уведомление о плановой проверке поступает в
            организацию за 14 дней до ее начала. Этот срок как раз предназначен для подготовки. В следующий раз не
            затягивайте.</p>
          <p>В Вашем случае можем предложить сопровождение нашим консультантом на период проверки и для устранения
            нарушений, если такие будут выявлены.</p>
        </div>
      </div>
      <div class="q-a__item item-7">
        <div class="item__image">
          <span>07</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-7.svg" alt="Офисная техника вид сверху">
        </div>
        <div class="item__text">
          <h5>Мы поставлены перед необходимостью упразднить подразделение компании, что повлечет за собой сокращение
            штата. Как это сделать с минимальными финансовыми потерями, без лишних скандалов и по возможности без обид?
          </h5>
          <ul>
            <li>
              <p>Да, мы можем взять часть этих неприятных забот на себя. Данная услуга называется <a class="text-link"
                  href="<?= get_site_url(); ?>/kadrovyj-konsalting/autplejsment-personala/">аутплейсмент</a> и
                подразумевает комплекс мер по трудоустройству увольняемых сотрудников. Он включает предувольнительные
                консультации, организацию самого процесса увольнения, последующее трудоустройство.</p>
            </li>
          </ul>
          <p>Спасибо за заботу о персонале! Тем самым Вы сохраняете положительный <a class="text-link"
              href="<?= get_site_url(); ?>/hr-brending/">имидж</a> предприятия. В нашей практике есть опыт
            бесконфликтного щадящего увольнения. Кстати, спустя несколько лет предприятие, с которым мы работали, вышло
            на новые позиции, а прежние работники вернулись на свои места. Счастливый конец бывает не только в сказке.
          </p>
        </div>
      </div>
      <div class="q-a__item item-8">
        <div class="item__image">
          <span>08</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-8.svg" alt="Маленькое изображение офиса">
        </div>
        <div class="item__text">
          <h5>Хотим избавиться от сотрудника, но не знаем, как это сделать. Человек работает на ключевой позиции, его
            уход может плохо отразиться на состоянии дел компании. Опасаемся за разглашение сведений, составляющих
            коммерческую тайну.</h5>
          <ul>
            <li>
              <p>Ваш случай сложный, но не безнадежный. Существуют приемы так называемого закрытого увольнения. Работник
                получит такое предложение по работе, от которого он не сможет отказаться. В итоге он уволится сам, не
                подозревая, что обстоятельства сложились так не случайно.</p>
            </li>
          </ul>
          <p>Равноценную замену ему мы тоже сможем подобрать. Подробности обговорим при встрече, так как они носят
            конфиденциальный характер.</p>
        </div>
      </div>
      <div class="q-a__item item-9">
        <div class="item__image">
          <span>09</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-9.svg" alt="Фруктовое дерево">
        </div>
        <div class="item__text">
          <h5>Открываем подразделение в Беларуси. Чтобы определится с кадрами, нам нужны данные по региону: уровень
            безработицы, средние зарплаты в отрасли, состояние рынка кадровых ресурсов и так далее. Вы можете
            предоставить нам такие цифры?</h5>
          <ul>
            <li>
              <p>Да, конечно. Мы ведем регулярный сбор информации и делаем собственный анализ тенденций рынка труда.
                Готовы предоставить обзор динамики заработных плат по регионам, потребность в кадрах и предложение
                рабочей силы в разрезе отраслей. Уверены, что информация будет полезной. Желаем Вам успеха и скорейшего
                открытия!</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="q-a__item item-10">
        <div class="item__image">
          <span>10</span>
          <img src="<?= get_template_directory_uri(); ?>/image/q-a/q-a-10.svg" alt="Элемент фотографии">
        </div>
        <div class="item__text">
          <h5>Сколько стоят услуги рекрутинга?</h5>
          <ul>
            <li>
              <p>Самый распространенный подход, принятый во всем мире – процент от зарплаты найденного работника. При <a
                  class="text-link"
                  href="<?= get_site_url(); ?>/poisk-i-podbor-personala/podbor-linejnyh-specialistov/">подборе линейного
                  персонала</a> (рабочих профессий) доля гонорара HR-агентства составляет 10-20% от зарплаты каждого
                нанятого работника.</p>
            </li>
          </ul>
          <p>Если речь идет о ТОП-менеджменте, узких специалистах, вознаграждение рассчитывается, как процент платы от
            двух месяцев работы до года и может быть очень высоким. Все зависит от сложности поиска и требований к
            соискателям.</p>
          <p>Если Вы не нашли рекомендаций по своей ситуации или можете предложить собственное интересное решение,
            пишите – будем рады продолжить диалог.</p>
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