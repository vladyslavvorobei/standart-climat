<?php get_header(); ?>

  <section class="ready-works">
    <div class="container">
      <div class="title title--no-number">
        <h2 data-aos="fade-right" data-aos-offset="600"> Работы <strong data-aos="fade-up" data-aos-offset="600"> Выполненные работы </strong>
        </h2>
      </div>
      <div class="ready-works__inner-wrapper">
        <?php $gallery = get_field( 'gallery' );
        if ($gallery): ?>
          <div class="ready-works__img-slider " data-aos="fade-right" data-aos-duration="600">
          <div class="img-slider">
            <div class="img-slider__main"></div>

            <ul class="img-slider__list">
              <?php if (get_the_post_thumbnail()): ?>
                <li>
                  <?php the_post_thumbnail('portfolio'); ?>
                </li>
              <?php endif; ?>

              <?php foreach ($gallery as $img): ?>
                <li>
                  <?php echo wp_get_attachment_image( $img, 'portfolio' ); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php endif; ?>

        <div class="ready-works__info" data-aos="fade-left" data-aos-duration="600">
          <h3> Объект: <?php the_title(); ?> </h3>

          <?php $address = get_field( 'address' );
          $area = get_field( 'area' );
          $solution = get_field( 'solution' );
          $deadlines = get_field( 'deadlines' );
          $price = get_field( 'price' );
          $file = get_field( 'file' );

          if ($address): ?>
            <p><strong> Адрес: </strong> <?php echo $address; ?> </p>
          <?php endif; ?>
          <?php if ($area): ?>
            <p><strong> Площадь помещения: </strong> <?php echo $area; ?>м2 </p>
          <?php endif; ?>
          <?php if ($solution): ?>
            <p><strong> Техническое решение: </strong> <?php echo $solution; ?></p>
          <?php endif; ?>
          <?php if ($deadlines): ?>
            <p><strong> Сроки выполнения: </strong> <?php echo $deadlines; ?> </p>
          <?php endif; ?>
          <?php if ($price): ?>
            <p><strong> Стоимость проекта: </strong> <?php echo number_format($price, 0, '', ' ') ; ?> руб. </p>
          <?php endif; ?>

          <?php if ($file): ?>
            <a href="<?php echo $file; ?>" target="_blank" download class="button button--ready-works">
              <span> Скачать проект </span>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();
