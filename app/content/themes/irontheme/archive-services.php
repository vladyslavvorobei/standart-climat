<?php get_header(); ?>

  <section class="services" style="background-image: url('<?php echo THEME_URL; ?>/img/services-bg.jpg')">
    <div class="container">
      <div class="title title--no-number">
        <h2> Услуги <strong> Услуги по проектированию и монтажу </strong>
        </h2>
      </div>
      <div class="services__description">
        <p>
          <strong>Проектно-монтажная компания Стандарт Климат</strong> специализируется на создании климатических систем под ключ. То есть мы способны спроектировать систему, предоставить все необходимое оборудование, осуществить монтаж системы, проведем пуско-наладочные работы и осуществим гарантийное, сервисное обслуживания. Таким образом в лице нашей компании вы получите готовое решения по созданию климатических систем любой сложности. </p>
        <p> Среди основных направлений деятельности мы готовы предложить своим клиентам следующее: </p>
      </div>

      <?php $services = get_any_post( 'services', -1 );
      if ($services->have_posts()): ?>
        <div class="services__grid">
          <?php while ($services->have_posts()): $services->the_post();
            if ( ! has_term( '', 'services_cat') ): ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'large' ); ?>
                <h3> <?php the_title(); ?> </h3>
              </a>
            <?php endif;
          endwhile; wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php $terms = get_terms( array(
    'taxonomy' => 'services_cat',
    'order' => 'DESC'
  ) );

  if ($terms):
    $i = 1;
    foreach ($terms as $term): ?>
      <section class="type-services " style="background-image: url('<?php the_field( 'bg', $term ); ?>')">
        <div class="container">
          <div class="title">
            <p> <?php echo str_pad($i++, 2, '0', STR_PAD_LEFT); ?> </p>
            <h2> <?php echo $term->name; ?> <strong> <?php the_field( 'suptitle', $term ); ?> </strong>
            </h2>
          </div>
          <div class="type-services__block type-services__block--design">
            <?php $services_term = get_any_post( 'services', -1, 'services_cat', $term->term_id );
            if ($services_term->have_posts()): ?>
            <ul>
              <?php while ($services_term->have_posts()): $services_term->the_post(); ?>
                <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              <?php endwhile; wp_reset_postdata(); ?>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </section>
    <?php endforeach;
  endif; ?>

<?php get_footer();