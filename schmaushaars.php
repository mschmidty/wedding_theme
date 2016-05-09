<?php 
  /* Template Name: Schmaushaars */

  get_header();
?>
<div class="schmaushaar-outer">
  
  <div class="banner-all brown">
    <div class="">
      <h1>Schmidt & Kraushaar</h1>
      <p class="center">Become the Schmaushaars (just kidding we are both keeping our last names).</p>
    </div>
    <h1 class="down">   &#xfe40; </h1>
  </div>
  <section class="content-area">
    <?php
      while ( have_posts() ) : the_post();

        the_content();


      endwhile; // End of the loop.
      ?>

  </section>
</div>

<?php get_footer(); ?>