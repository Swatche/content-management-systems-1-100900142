<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php 
	//	USE THE SLUG FOR is_page('x)
	// if (is_front_page() || is_page('about-cooperative-first-person-shooter')){
	if (is_front_page() || is_page_template('templates/page-about.php')){
		$post_args = array(
			'post_type'      => 'post',
			'posts_per_page' => 3,
			'orderby'        => 'date',
			'order'          => 'DESC',
			'post_status'    => 'publish',
		);
		
		$post_query = new WP_Query($post_args);
		
		?>
		<div class="footer-query-container">
			<?php
			if( $post_query->have_posts() ){
				while($post_query->have_posts()){ //checking against multiple
					?>
					<?php
					?>
					<div class="footer-query">
					<?php
						$post_query->the_post(); //getting the ONE
						?>
						<div class="thumbnail-container">
							<?php
							the_post_thumbnail();
							?>
						</div>
						<?php
						?>
						<h3 class="footer-title"><?php the_title();?></h3>
						<?php
						?>
						<p><?php the_excerpt();?></p>
						<?php
						?>
						<?php
						?>
						<a href="<?php the_permalink(); ?>" class="link">Read more</a>
						<?php
						?>
					</div>
					<?php
				}
				wp_reset_postdata(); //resets query back to default query
			}
		}
	?>
	</div>
	<?php
	?>

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

			<div class="powered-by">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
				);
				?>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
