<?php
/**
 * Fallback template.
 */
get_header();
?>

<section class="section">
	<div class="container">
		<div class="blog-layout">
			<div class="blog-main">
				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content-card' );
					endwhile;
					credobpo_pagination();
					?>
				<?php else : ?>
					<p><?php esc_html_e( 'Nothing found.', 'credobpo' ); ?></p>
				<?php endif; ?>
			</div>
			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>
