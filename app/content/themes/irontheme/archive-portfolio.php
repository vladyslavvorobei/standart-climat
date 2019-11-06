<?php get_header(); ?>

  <section class="cases">
    <div class="container">
      <div class="title title--no-number">
        <h2> Роботы <strong> Выполненые роботы </strong>
        </h2>
      </div>
    </div>
    <?php $terms = get_terms( array(
      'taxonomy' => 'portfolio_cat',
      'order' => 'DESC'
    ) );

    if ($terms):
      foreach ($terms as $term): ?>
      <div class="cases__block" style="background-image: url('<?php the_field( 'bg', $term ); ?>')">
        <div class="container">
          <h3><?php echo $term->name; ?></h3>

          <?php $cases = get_any_post( 'portfolio', -1, 'portfolio_cat', $term->term_id );
          if ($cases->have_posts()): ?>
          <div class="cases__grid">
            <?php while ($cases->have_posts()): $cases->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="cases__item">
              <?php the_post_thumbnail( 'medium' ); ?>
              <h4><?php the_title(); ?></h4>
            </a>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach;
    endif; ?>
  </section>

<?php get_footer();