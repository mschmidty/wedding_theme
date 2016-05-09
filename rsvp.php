<?php 
  /* Template Name: RSVP */

  get_header();
?>
<div class="rsvp-banner banner-all">
  <div>
    <svg viewBox="0 0 295.556 253.197" xmlns="http://www.w3.org/2000/svg" version="1.1">
      <use xlink:href="#rooster"></use>
    </svg> 
  </div>
  <h1 class="rsvp-header-large">Répondez s'il vous plaît</h1>
  <h4 class="rsvp-header-large">(R.S.V.P)</h4>
  <h1 class="rsvp-header-small">RSVP</h1>
  <h4 class="rsvp-header-small">Thanks for Repondez s'il vous plaiting!</h4>

  <h1 class="down">   &#xfe40; </h1> 
</div>

<div class="rsvp-section">
  <h2>Please Fill out the Form Below</h2>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <div class="rsvp-form">
      <?php the_content(); ?>
    </div>
  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>