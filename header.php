<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package materialwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700|Mali:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'materialwp' ); ?></a>

	<div class="jumbotron">
				  <div class="container text-center">
					<div class=" col-xs-3">
					  <img class="img-responsive imgJumbotron" src="http://dobrypasterz1.monikaburek.it/wp-content/uploads/2019/08/dobry-pasterz.jpg" alt="Jezus Dobry Pasterz">
					</div>
					<div class="titleJumbotron col-xs-7">
						<h1>Dobry Pasterz</h1>  
						<h2>Wspólnota Odnowy w Duchu Świętym</h2>
						<h3>Diecezjalne Sanktuarium Miłosierdzia Bożego<br/>
							przy Parafii pw. Miłosierdzia Bożego i św. Siostry Faustyny Kowalskiej<br/>
							w Toruniu</h3>	
					</div>
					<div class="col-xs-2 divImgSpirit">
					  <img class="img-responsive img-circle imgHolySpirit" src="http://dobrypasterz1.monikaburek.it/wp-content/uploads/2019/08/holy-spirit.png" alt="Duch Święty">
					</div>
				  </div>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-inverse" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    		</div>

    			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
				 <?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => false,
		                'menu_class'        => 'nav navbar-nav navbar-left',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
	        	?>

        		</div> <!-- .navbar-collapse -->
        	</div><!-- /.container -->
		</nav><!-- .navbar .navbar-default -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
