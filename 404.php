<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found text-center mt-5 mb-5">
				<div class="container">
					<div class="row">
						<div class="col">
							<header class="page-header">
								<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e('Apparemment, rien n\'a été trouvé à cette adresse.', 'vitanova'); ?></p>
								<?php // get_search_form(); ?>
							</div><!-- .page-content -->
						</div>
					</div>
				</div>
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
