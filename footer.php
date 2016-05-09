<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <nav class="footer-nav" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'Menu 1' ) ); ?>
    </nav><!-- #site-navigation -->
    <div class= "footer-design">
      <svg viewBox="0 0 2800 350" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#feathers"></use>
      </svg>
    </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wedding2' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wedding2' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wedding2' ), 'wedding2', '<a href="http://schmidtyworks.com" rel="designer">Michael Schmidt</a>' ); ?>
		</div><!-- .site-info -->
    <div class="ball">
      <ul>
        <li>
          <svg viewBox="0 0 400 817" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <use xlink:href="#ball"></use>
          </svg>
        </li>
         <li>
          <svg viewBox="0 0 400 817" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <use xlink:href="#ball"></use>
          </svg>
        </li>
        <li>
          <svg viewBox="0 0 400 817" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <use xlink:href="#ball"></use>
          </svg>
        </li>
      </ul>
      
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
