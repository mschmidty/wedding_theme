<?php
  /* Template Name: Custom Home */

  get_header();
?>

<div class="home-outer">

  <div class="home-banner">
    <div class="sun"></div>
    <div class="moon"></div>
    <div>
      <h1>Kraushaar & Schmidt</h1>
      <h3>October 8, 2016</h3>
    </div>
    <h1 class="down">   &#xfe40; </h1>
    <svg viewBox="0 0 300.961 29.408" xmlns="http://www.w3.org/2000/svg" version="1.1">
      <use xlink:href="#sleeping_ute2"></use>
    </svg>
  </div>
  <div class="background-brown">
  <!--Home Page Loop-->
    <div class="home-section max-width-1400">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="text-snippet welcome-text-snippet">
          <h2><?php the_field('title'); ?></h2>
          <p><?php the_content(); ?></p>
      </div>
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>


    <?php rewind_posts(); ?>


    <div class="home-section max-width-1400">
    <!--Hotel Page Loop-->
      <?php $my_query = new WP_Query('page_id=9');
        while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID;?>

      <div class="clip-image">
         <?php

        $image = get_field('home_section_image');
        $sizeMedium = 'medium-thumb-img';
        $sizeSmall = 'large-thumb-img';
        $sizeXsmall = 'xsmall-img';
        $medium = $image['sizes'][$sizeMedium];
        $small = $image['sizes'][$sizeSmall];
        $xsmall = $image['sizes'][$sizeXsmall];

       ?>
       <?php if( !empty($image) ): ?>

        <img sizes="50vw"
        srcset="

            <?php echo $medium; ?> 700w,
            <?php echo $small; ?> 500w,
            <?php echo $xsmall; ?> 300w"

        alt="<?php echo $image['alt']; ?>">
      <?php endif ?>
        <svg viewBox="0 0 145.239 363.097" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <use xlink:href="#clip_triangle"></use>
        </svg>
      </div>
      <div class="text-snippet">
        <h2><?php echo the_field('home_section_title'); ?></h2>
        <p><?php the_field('home_section_blurb'); ?></p>
        <div class="button-parent-center">
          <a href="<?php echo get_permalink(); ?>" class="button">More Accommodations</a>
        </div>
      </div>
    <?php endwhile; ?> <!--End of accomidations loop-->
    </div>

    <?php rewind_posts(); ?>

    <div class="home-section max-width-1400">
    <!--Hotel Page Loop-->
      <?php $my_query = new WP_Query('page_id=28');
        while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID;?>

      <div class="clip-image">
         <?php

        $image = get_field('home_section_image');
        $sizeMedium = 'medium-thumb-img';
        $sizeSmall = 'large-thumb-img';
        $sizeXsmall = 'xsmall-img';
        $medium = $image['sizes'][$sizeMedium];
        $small = $image['sizes'][$sizeSmall];
        $xsmall = $image['sizes'][$sizeXsmall];

       ?>
       <?php if( !empty($image) ): ?>

        <img sizes="50vw"
        srcset="

            <?php echo $medium; ?> 700w,
            <?php echo $small; ?> 500w,
            <?php echo $xsmall; ?> 300w"

        alt="<?php echo $image['alt']; ?>">
      <?php endif ?>
        <svg viewBox="0 0 145.239 363.097" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <use xlink:href="#clip_triangle"></use>
        </svg>
      </div>
      <div class="text-snippet">
        <h2><?php echo the_field('home_section_title'); ?></h2>
        <p><?php the_field('home_section_blurb'); ?></p>
        <div class="button-parent-center">
          <a href="<?php echo get_permalink(); ?>" class="button">RSVP Here</a>
        </div>
      </div>
    <?php endwhile; ?> <!--End of accomidations loop-->
    </div>

    <?php rewind_posts(); ?>
  </div> <!--background-brown-->
  <div class="background-orange">

  </div>

</div>


<?php get_footer(); ?>
