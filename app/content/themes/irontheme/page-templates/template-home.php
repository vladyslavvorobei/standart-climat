<?php
/**
 * Template Name: Главная
 */
get_header(); ?>

<?php if (have_rows( 'hero-slider' )): ?>
  <section class="first-screen">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php while (have_rows( 'hero-slider' )): the_row(); ?>
        <div class="swiper-slide" style="background-image: url('<?php the_sub_field( 'bg' ); ?>')">
          <div class="container">
            <h2 data-aos="fade-down"><?php the_sub_field( 'title_1' ); ?></h2>
            <h3 data-aos="fade-right"><?php the_sub_field( 'title_2' ); ?></h3>

            <?php $link = get_sub_field( 'link' );
            if ($link): ?>
              <a href="<?php echo esc_url( $link )?>" data-aos="fade-left"> Узнать подробнее </a>
            <?php endif; ?>
            <div data-aos="fade-up"> 
              <?php the_sub_field( 'text' ); ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
<?php endif; ?>

  <section class="objects" style="background-image: url('<?php echo THEME_URL; ?>/img/index-page-objects-bg.jpg')">
    <div class="container">
      <div class="title">
        <p data-aos="fade-right" data-aos-offset="600"> 01 </p>
        <h2 data-aos="fade-left" data-aos-offset="500"> объекты <strong data-aos="fade-up" data-aos-offset="600"> Типы объектов </strong>
        </h2>
      </div>
      <div class="objects__grid">
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-1.svg" alt="">
          <p> Гостиницы, <br> отели, хостелы </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-2.svg" alt="">
          <p> Офисные, торговые <br> и административные помещения </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-3.svg" alt="">
          <p> Производственные помещения </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-4.svg" alt="">
          <p> Складские и логистические центры </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-5.svg" alt="">
          <p> Кафе и рестораны </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-6.svg" alt="">
          <p> Спортивные <br> объекты </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-7.svg" alt="">
          <p> Медицинские <br> учреждения </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-8.svg" alt="">
          <p> Бассейны </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-9.svg" alt="">
          <p> Частные объекты </p>
        </div>
        <div class="objects__elem" data-aos="fade-up" data-aos-offset="400">
          <img src="<?php echo THEME_URL; ?>/img/01-img-10.svg" alt="">
          <p> Объекты специального назначения </p>
        </div>
      </div>
    </div>
  </section>
  <section class="client" style="background-image: url('<?php echo THEME_URL; ?>/img/index-page-client-bg.jpg')">
    <div class="container">
      <div class="title">
        <p data-aos="fade-right" data-aos-offset="600"> 02 </p>
        <h2 data-aos="fade-left" data-aos-offset="500"> клиенты <strong data-aos="fade-up" data-aos-offset="600"> Нам доверяют </strong>
        </h2>
      </div>
      <ul class="client__list">
        <li>
        </li>
        <li>
        </li>
        <li>
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-1.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-2.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-3.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-4.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-5.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-6.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-7.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-8.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-9.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-10.jpg" alt="">
        </li>
        <li>
          <img src="<?php echo THEME_URL; ? data-aos="fade-up" data-aos-offset="400">/img/02-logo-11.jpg" alt="">
        </li>
      </ul>
    </div>
  </section>

<?php if (have_rows( 'dev' )): ?>
  <section class="manufacturers" style="background-image: url('<?php echo THEME_URL; ?>/img/index-page-manuf-bg.jpg')">
    <div class="container">
      <div class="title">
        <p data-aos="fade-right" data-aos-offset="600"> 03 </p>
        <h2 data-aos="fade-left" data-aos-offset="500"> производители <strong data-aos="fade-up" data-aos-offset="600"> Работаем только с надежными производителями </strong>
        </h2>
      </div>
      <div class="manufacturers__slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php while (have_rows( 'dev' )): the_row(); ?>
            <div class="swiper-slide">
              <div class="manufacturers__slide" data-aos="fade-up">
                <?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'medium' ); ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer();
