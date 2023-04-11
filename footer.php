<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eclatant
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span class="sep"><?php bloginfo('name'); ?> – <?php echo date("Y"); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
