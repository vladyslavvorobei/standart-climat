<?php
/**
 * Template Name: Статьи
 */
get_header(); ?>

<section class="engin-sys">
  <div class="container">
    <div class="title title--no-number">
      <h2> статьи <strong> Полезная информация о проектировании и монтаже климатических систем </strong></h2>
    </div>
    <div class="engin-sys__description"> Компания "Стандарт Климат" выполняет полный цикл работ начиная с проекта и заканчивая сервисным обслуживанием. </div>

    <?php $posts = get_any_post( 'post', -1 );

    if ($posts->have_posts()): ?>
    <div class="engin-sys__grid">
      <?php while ($posts->have_posts()): $posts->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('medium'); ?>
          <h3><?php the_title(); ?></h3>
        </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();
