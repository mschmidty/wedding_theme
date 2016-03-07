<?php 
  /* Template Name: Wedding Party */

  get_header();
?>
<div class="party-banner banner-all">
  <svg viewBox="0 0 512 512.021" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#weather-sun"></use>
  </svg>
  <svg viewBox="0 0 1025 800" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#clouds-inv"></use>
  </svg>
  <svg viewBox="0 0 1025 800" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#clouds-inv"></use>
  </svg>
  <svg viewBox="0 0 1025 800" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#clouds-inv"></use>
  </svg>
  <h1>The Wedding Party</h1>
  <h1 class="down">   &#xfe40; </h1>
  
  <svg viewBox="0 0 400.244 496.399" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#wedding_couple"></use>
  </svg>
</div>

<div class="party-outer">
  <h2>Groomsmen</h2>
  <div class="groomsmen party-inner">
    <?php 

      // args
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $args = array(
        'post_type'   => 'wedding party',
        'posts_per_page' => 10,
        'paged' => $paged, 
        'cat' => '4'
      );


      // query

      $the_query = new WP_Query( $args );

      ?>
      <?php if( $the_query->have_posts() ): ?>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <div class="party-part">
            <div class="circle">
              <?php 
                $image = get_field('picture');
                $size = ('thumb-center-medium');
                $picture = $image['sizes'][$size];
               ?>
               <?php if (!empty($image) ): ?>
                <img src="<?php echo $picture; ?>" alt="<?php echo $picture['alt']; ?>" />
              <?php endif ?>

            </div>
            <h4><?php the_field('name'); ?></h4>
            <h5><?php  the_field('live'); ?></h5>
            <p><?php the_field('short_bio'); ?></p>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>

<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
    
  </div>
  <h2>bridesmaids</h2>
  <div class="brown">
    <div class="bridesmaids party-inner">
      <?php 

        // args
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
          'post_type'   => 'wedding party',
          'posts_per_page' => 10,
          'paged' => $paged, 
          'cat' => '3'
        );


        // query

        $the_query = new WP_Query( $args );

        ?>
        <?php if( $the_query->have_posts() ): ?>
          <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="party-part">
              <div class="circle">
                <?php 
                  $image = get_field('picture');
                  $size = ('thumb-center-medium');
                  $picture = $image['sizes'][$size];
                 ?>
                 <?php if (!empty($image) ): ?>
                  <img src="<?php echo $picture; ?>" alt="<?php echo $picture['alt']; ?>" />
                <?php endif ?>

              </div>
              <h4><?php the_field('name'); ?></h4>
              <h5><?php  the_field('live'); ?></h5>
              <p><?php the_field('short_bio'); ?></p>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

  <?php wp_reset_query(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>