<?php
/**
 * Search results template.
 */
get_header();
credobpo_page_header(
	__( 'Search Results', 'credobpo' ),
	sprintf( __( 'Results for: %s', 'credobpo' ), get_search_query( false ) ),
	''
);
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
					<p><?php esc_html_e( 'Nothing matched your search. Try different keywords.', 'credobpo' ); ?></p>
					<?php get_search_form(); ?>
				<?php endif; ?>
			</div>
			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>
