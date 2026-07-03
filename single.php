<?php
/**
 * Single blog post template.
 */
get_header();
?>

<section class="section">
	<div class="container">
		<div class="blog-layout">
			<div class="blog-main">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="single-post-header">
							<?php
							$categories = get_the_category();
							if ( ! empty( $categories ) ) {
								echo '<span class="eyebrow">' . esc_html( $categories[0]->name ) . '</span>';
							}
							?>
							<h1><?php the_title(); ?></h1>
							<div class="single-post-header__meta">
								<?php
								printf(
									/* translators: 1: publish date, 2: author name */
									esc_html__( 'Published %1$s by %2$s', 'credobpo' ),
									esc_html( get_the_date() ),
									esc_html( get_the_author() )
								);
								?>
							</div>
						</header>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="single-post-thumb">
								<?php the_post_thumbnail( 'large' ); ?>
							</div>
						<?php endif; ?>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

						<?php
						$tags = get_the_tags();
						if ( $tags ) {
							echo '<div class="post-tags">';
							foreach ( $tags as $tag ) {
								echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">#' . esc_html( $tag->name ) . '</a>';
							}
							echo '</div>';
						}
						?>
					</article>

					<?php if ( comments_open() || get_comments_number() ) : ?>
						<?php comments_template(); ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>
