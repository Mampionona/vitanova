<?php
/**
 * Template Name: Landing Page
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );
			endwhile; // End of the loop.
			?>

		</main>
	</section>
<?php
get_footer();
