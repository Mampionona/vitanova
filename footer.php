<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info text-center">			
			<a href="#"><?php _e('Mentions légales', 'vitanova'); ?></a>

			<div class="copyright">&copy; <?php printf(__('Copyright %d. Tout droits réservés.', 'vitanova'), date('Y')); ?></div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
