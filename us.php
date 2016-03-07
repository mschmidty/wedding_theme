<?php 
  /* Template Name: Schmidt and Kraushaar*/

  get_header();
?>
<div class="party-banner banner-all">
  <h1>Kraushaar & Schmidt</h1>
  <p>Become the Schmashaars</p>
  <h1 class="down">   &#xfe40; </h1>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
  <?php the_content(); ?>
</article>
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>