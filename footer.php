<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Km
 */

?>

	</div><!-- #content -->

  <?php if ( !is_front_page() ) : ?>
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
  </nav><!-- #site-navigation -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
    <div class="footer-widgets">
      <?php dynamic_sidebar( 'footer-widget-area' ); ?>
    </div>
  <?php endif; ?>
  
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p>Copyright &copy;<?php echo date("Y"); ?> Kris Moran</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
