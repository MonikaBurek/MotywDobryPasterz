<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialwp
 */

get_header(); ?>

<!-- sekcja O nas -->
<div class="about-us">
	<div class="container section-padding">
	    <?php
		$posts = get_posts(array(
		'include' => 28,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));
		
		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>

<!-- sekcja Poznaj nas bliżej -->
<div class="get-know-us-better">
	<div class="container section-padding">
	    <?php
		$posts = get_posts(array(
		'include' => 62,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));
		
		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>

<!-- sekcja Szkoła Miłosierdzia -->
<div class="school-of-mercy">
	<div class="container section-padding">
	    <?php
		$posts = get_posts(array(
		'include' => 79,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));
		
		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>

<?php get_footer(); ?>
