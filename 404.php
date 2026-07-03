<?php
/**
 * 404 template.
 */
get_header();
credobpo_page_header( __( '404', 'credobpo' ), __( 'Page Not Found', 'credobpo' ), __( 'The page you\'re looking for doesn\'t exist or may have moved.', 'credobpo' ) );
?>

<section class="section">
	<div class="container" style="max-width:560px;text-align:center;">
		<?php get_search_form(); ?>
		<p style="margin-top:24px;">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline-dark"><?php esc_html_e( 'Back to Home', 'credobpo' ); ?></a>
		</p>
	</div>
</section>

<?php get_footer(); ?>
