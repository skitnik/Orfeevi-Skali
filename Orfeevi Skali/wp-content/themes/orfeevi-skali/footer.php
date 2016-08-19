<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orfeevi_Skali
 */

?>

<?php wp_footer(); ?>
	

	<footer id="main-footer">

	<?php 
		if(is_active_sidebar('footer-about')){
			dynamic_sidebar('footer-about');
		}

		if(is_active_sidebar('footer-contact')){
			dynamic_sidebar('footer-contact');
		}

		if(is_active_sidebar('footer-social')){
			dynamic_sidebar('footer-social');
		}
	?>
 
		<div id="madeBy">
			<hr>
			<h6> © 2016 Desing by Ivan Dimov</h6>
		</div>
	</footer>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-ui.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/responsive-nav.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.flexslider-min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/lightbox.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/custom.js"></script>
</body>
</html>
