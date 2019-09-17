<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package materialwp
 */
?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

        <!-- pasek widgetow -->
        <div class="footer-wigets">
        	<div class="container">
        		<div class="row">
        			<?php get_sidebar('footer');?>
        		</div>
        	</div>
        </div>

       <!-- prawa autorskie -->
        <div class="footer-bottom-row">
        	<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-info">
							Copyright 2019  &copy Wspólnota Dobry Pasterz
						</div><!-- .site-info -->
						<div class="site-realizacja">
							Projekt i realizacja: <a href="http://monikaburek.it" target="_blank">monikaburek.it</a>
						</div>
					</div> <!-- col-lg-12 -->
				</div><!-- .row -->
			</div><!-- .containr -->
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
