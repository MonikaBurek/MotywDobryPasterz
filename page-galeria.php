<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package materialwp
 */
/*
Template Name: Galeria
*/

get_header(); ?>

<div class="container section-padding">
	<div class="row">

	<div id="primary" class="col-xs-12">
		<main id="main" class="site-main" role="main">
			
			<div class="card entry-container">
				<h1 class="postTitle"><?php the_title(); ?></h1>
	 
	  			<div class="view-gallery">
				<?php
	                        $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' ORDER BY $wpdb->posts.post_date DESC", 'OBJECT');    ?>
	                        <?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
	 
	                        <div class="child-thumb col-sm-12 col-md-6 col-lg-4 text-center">
	                         	<a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
	                           	 <?php echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); ?><br />
	                           	 <span class="title_gallery"><?php echo $pageChild->post_title; ?></span>
	                         	</a>
	                         	
	                        </div>
				<?php endforeach; endif;
				?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
