<?php
  /* Template Name: details */

  get_header();
?>
<div class="details-page">
  <div class="banner-all brown">
    <svg viewBox="0 0 295.556 253.197" xmlns="http://www.w3.org/2000/svg" version="1.1">
      <use xlink:href="#flowers"></use>
    </svg>
    <div>
      <h1>Details</h1>
      <p class="center">Find the answer to any question. </p>
    </div>
    <h1 class="down">   &#xfe40; </h1>
  </div>

  <section class="content-area">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <p><?php the_content(); ?></p>

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </section>
</div>

<?php get_footer(); ?>
