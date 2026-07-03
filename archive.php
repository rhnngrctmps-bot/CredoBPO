<?php
/**
 * Archive template (categories, tags, dates, authors).
 */
get_header();
credobpo_page_header( __( 'Archive', 'credobpo' ), get_the_archive_title(), '' );
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
					<p><?php esc_html_e( 'No posts found in this archive.', 'credobpo' ); ?></p>
				<?php endif; ?>
			</div>
			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>
