<?php 
  /* Template Name: Accommodations */

  get_header();
?>
<div class="banner-accommidations banner-all brown">
  <h2>Accommodations</h2>
  <h4>Welcome to Dolores</h4>
  <h1 class="down">   &#xfe40; </h1>
</div>
<div class="accommidation-outer">
<h2>Recommended Lodging</h2>
  <div class="hotel-outer">
  <?php 

        // args
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
          'post_type'   => 'hotel',
          'posts_per_page' => 10,
          'paged' => $paged
        );


        // query

        $the_query = new WP_Query( $args );

        ?>
        <?php if( $the_query->have_posts() ): ?>
          <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="section-accomidation orange">
    
      <div class="card-image">
      <h3>Sofia Retreat</h3>
        <?php 
          $image = get_field('hotel_picture');
          $size = ('large-thumb-img');
          $picture = $image['sizes'][$size];
         ?>
         <?php if (!empty($image) ): ?>
          <img src="<?php echo $picture; ?>" alt="<?php echo $picture['alt']; ?>" />
        <?php endif ?>
        <p><?php the_field('landing_page_blurb'); ?></p>
      </div>
    </div>
       <?php endwhile; ?>
        <?php endif; ?>
  </div>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
</div>
<?php get_footer(); ?>