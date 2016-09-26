<?php
  /* Template Name: Registry */

  get_header();
?>


<div class="registry-banner banner-all">
  <svg viewBox="0 0 512 512.021" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#feather2"></use>
  </svg>
  <h1>Registry</h1>
  <h1 class="down">   &#xfe40; </h1>
</div>
<section class="content-area">
  <?php
    while ( have_posts() ) : the_post();

      the_content();


    endwhile; // End of the loop.
    ?>

</section>

<div class="registry-options-container max-width-1400">
  <div class="flex-grid registry-options">
    <div class="col registry-options-item">
      <svg viewBox="0 0 512 512.021" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#raft"></use>
      </svg>
      <p>
        Donate to our fund to buy a raft.
      </p>
      <div class="payment-buttons flex-grid">
        <a href="http://paypal.me/sandmraft/25" class="col">$25</a>
        <a href="http://paypal.me/sandmraft/50" class="col">$50</a>
        <a href="http://paypal.me/sandmraft/75" class="col">$75</a>
        <a href="http://paypal.me/sandmraft/100" class="col">$100</a>
      </div>
    </div>
    <div class="col registry-options-item">
      <svg viewBox="0 0 512 512.021" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#grass"></use>
      </svg>
      <p>
        Donate to reseeding our 10 acre weed field with native vegetation.
      </p>
      <div class="payment-buttons flex-grid">
        <a href="http://paypal.me/smkraushaar/25" class="col">$25</a>
        <a href="http://paypal.me/smkraushaar/50" class="col">$50</a>
        <a href="http://paypal.me/smkraushaar/75" class="col">$75</a>
        <a href="http://paypal.me/smkraushaar/100" class="col">$100</a>
      </div>
    </div>
    <div class="col registry-options-item">
      <svg viewBox="0 0 512 512.021" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#tree"></use>
      </svg>
      <p>
        Buy us a drought tolerant tree!
      </p>
      <div class="payment-buttons flex-grid tree">
        <a href="http://cliffrosegardens.com/searchable-plant-directory/" clas="col">Tree Water Guide</a>
      </div>
    </div>

  </div>

</div>
<section class="content-area center thanks">
  <h1>Thanks!</h1>
</section>


<?php get_footer(); ?>
