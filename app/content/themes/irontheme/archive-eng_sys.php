<?php get_header(); ?>

  <section class="engin-sys">
    <div class="container">
      <div class="title title--no-number">
        <h2 data-aos="fade-right" data-aos-offset="600"> информация <strong data-aos="fade-up" data-aos-offset="600"> Инженерные системы </strong></h2>
      </div>
      <div class="engin-sys__description"> Компания "Стандарт Климат" выполняет полный цикл работ начиная с <strong>проекта</strong> и заканчивая сервисным обслуживанием. </div>

      <?php
      $sys = get_any_post( 'eng_sys', -1 );
      if ($sys->have_posts()): ?>
        <div class="engin-sys__grid">
          <?php $i = 0; while ($sys->have_posts()): $sys->the_post(); ?>
            <a href="<?php the_permalink(); ?>" data-aos="fade-up" data-aos-duration="650" data-aos-delay="<?php echo $i++ * 100; ?>">
              <?php the_post_thumbnail('medium'); ?>
              <h3><?php the_title(); ?></h3>
            </a>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php get_footer();
