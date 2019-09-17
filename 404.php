<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package materialwp
 */

get_header(); ?>

<div class="container">
	<div class="row">

	<div id="primary" class="col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

			<div class="card">
				<div class="entry-container">
					<section class="error-404 not-found">
						<header>
							<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'materialwp' ); ?></h1>
						</header><!-- .page-header -->

					
						<div class="page-content">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'materialwp' ); ?></p>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->
				</div><!-- .entry-content -->
			</div><!-- .card -->

		</main><!-- #main -->
	</div><!-- #primary -->

	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
