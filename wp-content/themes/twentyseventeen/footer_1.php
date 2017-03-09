<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
                                 echo '<p class="ham">widgets!!!!</p>';
				get_template_part( 'template-parts/footer/footer', 'widgets' );
                                

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
                                                    echo '<p class="ham">HAHA</p>';
						?>
					</nav><!-- .social-navigation -->
				<?php endif;
                                    echo '<p class="ham">HAHA</p>'
				?>
			</div><!-- .wrap -->
                       <?php echo '<p class="ham">HAHA</p>'; ?>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
