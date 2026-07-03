<?php
/**
 * Blog index template (used when the "Blog" page is set as the posts page).
 */
get_header();
credobpo_page_header(
	__( 'Blog', 'credobpo' ),
	__( 'Outsourcing Tips & Resources', 'credobpo' ),
	__( 'Practical advice on hiring, managing, and growing with virtual assistants.', 'credobpo' )
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
					<p><?php esc_html_e( 'No posts found yet — check back soon.', 'credobpo' ); ?></p>
				<?php endif; ?>
			</div>
			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>
