<?php
/**
 * Generic page template.
 */
get_header();
while ( have_posts() ) :
	the_post();
	credobpo_page_header( '', get_the_title(), '' );
	?>
	<section class="section">
		<div class="container" style="max-width:820px;">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	<?php
endwhile;
get_footer();
