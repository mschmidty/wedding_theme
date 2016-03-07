<?php 
  /* Template Name: Accommodations */

  get_header();
?>
<div class="banner-accomidations banner-all brown">
  <svg viewBox="0 12.328 401.502 401.342" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#dog1"></use>
  </svg>
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
      
        <?php 
          $image = get_field('hotel_picture');
          $size = ('large-thumb-img');
          $picture = $image['sizes'][$size];
         ?>
         <?php if (!empty($image) ): ?>
          <img src="<?php echo $picture; ?>" alt="<?php echo $picture['alt']; ?>" />
        <?php endif ?>
        <section>
          <h3><?php the_field('hotel_name'); ?></h3>
          <p><?php the_field('landing_page_blurb'); ?></p>
           <div class="button-parent-center "><a href="<?php echo get_permalink();?>" class="button">Details</a></div>
        </section>
      </div>
    </div>
       <?php endwhile; ?>
        <?php endif; ?>
  </div>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
</div>
<?php get_footer(); ?>