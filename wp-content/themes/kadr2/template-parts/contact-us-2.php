<div id="block-1" class="contact-us-2">
  <div class="container">
    <div class="contact-us-2__item item-1">
      <div class="contact-us__title">
        <p class='h2'>Оставьте заявку и мы вам перезвоним</p>
        <div class="underline-block block"></div>
      </div>
      <!--
                            <div class="contact-us__descr">
                                <p>Оставьте нам свою заявку, и мы свяжемся с Вами.</p>
                            </div> -->
      <div class="contact-us__text">
        <div class="text__item item-1">
          <div class="item__img">
            <img src="<?= get_template_directory_uri(); ?>/image/icons/direction.svg"
              alt="Графический элемент бумажный самолетик (телеграм)">

          </div>
          <div class="item__content">
            <p class="contact">E-mail</p>
            <a class="text-link" href="mailto:info@hrbel.by">info@hr.by</a>
          </div>
        </div>
        <div class="text__item item-2">
          <div class="item__img">
            <img src="<?= get_template_directory_uri(); ?>/image/icons/micro-sd-card.svg" alt="Иконка sd-карты">

          </div>
          <div class="item__content">
            <p class="contact">Телефон</p>
            <a href="tel:+375445572020" class="text-link">+375 (44) 777-29-35</a>
          </div>
        </div>
        <div class="text__item item-3">
          <div class="item__img">
            <img src="<?= get_template_directory_uri(); ?>/image/icons/clock.svg" alt="Иконка часов">

          </div>
          <div class="item__content">
            <p class="contact">Время работы: </p>
            <p class="contact">Пн.-Пт.: 09:00 - 20:00</p>
            <p class="contact">Сб.-Вс.: 10:00 - 18:00</p>
          </div>
        </div>
        <div class="text__item item-4">
          <div class="item__img">
            <img src="<?= get_template_directory_uri(); ?>/image/icons/home.svg" alt="Иконка дом">

          </div>
          <div class="item__content">
            <p class="contact">Адрес</p>
            <p class="contact"><a class="text-link" href="#" target="_blank">г.Минск, пр.Независимости, д.77</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-us-2__item item-2">
      <?php echo do_shortcode('[contact-form-7 id="27" title="Консультация"]'); ?>
    </div>

  </div>
</div>