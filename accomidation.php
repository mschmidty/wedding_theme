<?php 
  /* Template Name: Accommodations */

  get_header();
?>
<div class="banner-accommidations banner-all brown">
  <svg viewBox="0 0 295.556 253.197" xmlns="http://www.w3.org/2000/svg" version="1.1">
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

        <div class="section-accomidation">
          <a href="<?php echo get_permalink(); ?>">
            <div class="card-image">
              <div class="card-image-title">
                
              </div>
              <?php 
                $image = get_field('hotel_picture');
                $size = ('thumb-img');
                $picture = $image['sizes'][$size];
               ?>
               <?php if (!empty($image) ): ?>
                <img src="<?php echo $picture; ?>" alt="<?php echo $picture['alt']; ?>" />
              <?php endif ?>
              
            </div>
          </a>
          <h3><?php the_field("hotel_name") ?></h3>
          <p>
            <?php the_field('landing_page_blurb'); ?>
          </p>
          <a href="<?php echo get_permalink(); ?>">Find Details Here</a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div></div><!-- hotel-outer-->
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
</div><!-- accommidation-outer-->

<?php get_footer(); ?>