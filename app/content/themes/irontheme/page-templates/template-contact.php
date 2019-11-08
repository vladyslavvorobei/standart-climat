<?php
/**
 * Template Name: Контакты
 */
get_header(); ?>

  <section class="contacts" style="background-image: url('<?php echo THEME_URL; ?>/img/contacts-bg.jpg')">
    <div class="container">
      <div class="title title--no-number">
        <h2 data-aos="fade-right" data-aos-offset="600"> контакты <strong data-aos="fade-up" data-aos-offset="600"> Обратная связь </strong>
        </h2>
      </div>
      <form class="contacts__form form">
        <div class="contacts__label">
          <div class="contacts__label-wrapper">
            <input type="text" placeholder="ФИО*" name="name" required>
          </div>
          <div class="contacts__label-wrapper">
            <input type="tel" placeholder="Телефон*" name="phone" required>
          </div>
        </div>
        <div class="contacts__label">
          <div class="contacts__label-wrapper">
            <input type="text" placeholder="Организация" name="organization">
          </div>
          <div class="contacts__label-wrapper">
            <input type="email" placeholder="E-mail*" name="email" required>
          </div>
        </div>
        <div class="contacts__label">
          <textarea name="message" rows="4" placeholder="Ваше сообщение"></textarea>
        </div>
        <div class="contacts__label">
          <div class="contacts__agree">
            <input type="checkbox" id="agree" name="agree" required>
            <label for="agree" class="contacts__agree-label">Согласен с <a href="#" class="rules_open">политикой конфиденциальности</a></label>
          </div>
          <span> * Поля, обязательные для заполнения </span>
        </div>
        <button class="btn btn--form">
          <span> Отправить </span>
        </button>
      </form>
    </div>
  </section>

  <section class="address" style="background-image: url('<?php echo THEME_URL; ?>/img/address-bg.jpg')">
    <div class="container">
      <div class="title title--no-number">
        <h2 data-aos="fade-right" data-aos-offset="600"> адрес <strong data-aos="fade-up" data-aos-offset="600"> ООО "Стандарт Климат " </strong>
        </h2>
      </div>
      <div class="address__grid">
        <?php $address = get_field( 'address', 'option' );
        $phone = get_field( 'phone', 'option' );
        $schedule = get_field( 'schedule', 'option' );
        if ($address): ?>
        <div class="address__block" data-aos="fade-up">
          <img src="<?php echo THEME_URL; ?>/img/address-icon-1.png" alt="">
          <h3> Адрес: </h3>
          <p><?php echo $address; ?></p>
        </div>
        <?php endif; ?>
        <?php if ($phone): ?>
          <div class="address__block" data-aos="fade-up">
            <img src="<?php echo THEME_URL; ?>/img/address-icon-2.png" alt="">
            <h3> Телефоны: </h3>
            <p>
              <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>"><?php echo $phone; ?></a>
            </p>
          </div>
        <?php endif; ?>
        <?php if ($schedule): ?>
          <div class="address__block" data-aos="fade-up">
            <img src="<?php echo THEME_URL; ?>/img/address-icon-3.png" alt="">
            <h3> Часы работы: </h3>
            <?php echo $schedule; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="requisites">
    <div class="container">
      <div class="title title--no-number">
        <h2 data-aos="fade-right" data-aos-offset="600"> реквизиты <strong data-aos="fade-up" data-aos-offset="600"> Наши реквизиты </strong>
        </h2>
      </div>
      <div class="requisites__inner-wrapper">
        <div class="requisites__block">
         <?php the_content(); ?>
        </div>
        <div class="requisites__logo">
          <a href="#">
            <img src="<?php echo THEME_URL; ?>/img/logo.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
  <div id="map">
  </div>
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=198b4f0c-3bac-4781-9c61-51a96525dd8a" type="text/javascript"></script>
  <script>
    ymaps.ready(init);

    function init()
    {
      var myMap = new ymaps.Map("map",
        {
          center: [55.852541, 37.494719],
          zoom: 16
        });
      var myIcon = new ymaps.GeoObjectCollection(
        {},
        {
          iconLayout: 'default#image',
          iconImageHref: '<?php echo THEME_URL; ?>/img/myIcon.png',
          iconImageSize: [46, 63],
          iconImageOffset: [-23, -63]
        });
      myPlacemark = new ymaps.Placemark(
        [55.852541, 37.494719],
        {
          hintContent: "Флотская улица, 5к2"
        });
      myIcon.add(myPlacemark);
      myMap.geoObjects.add(myIcon);
    }

  </script>

<?php get_footer();
