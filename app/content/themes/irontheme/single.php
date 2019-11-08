<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mytheme
 */

get_header();
$post_type = get_post_type( get_the_ID() );

switch ($post_type) {
  case 'services': $title = 'УСЛУГИ';
    break;
  case 'eng_sys': $title = 'ИНФОРМАЦИЯ';
    break;
  default: $title = 'статьи';
}
?>
    <?php
    while ( have_posts() ) :
      the_post(); ?>

      <section class="articles-inner">
        <div class="container">
          <div class="title title--no-number">
            <h2 data-aos="fade-right" data-aos-offset="600"> <?php echo $title; ?> <strong data-aos="fade-up" data-aos-offset="600"> <?php the_title(); ?> </strong>
            </h2>
          </div>
          <div class="articles-inner__content">
            <?php the_content(); ?>
          </div>
        </div>
      </section>

    <?php endwhile; // End of the loop. ?>
<?php
get_footer();
