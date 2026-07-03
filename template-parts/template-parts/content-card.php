<?php
/**
 * Post card used in blog listings (home.php, archive.php, search.php)
 * and on the home page "From the Blog" section.
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<a href="<?php the_permalink(); ?>" class="post-card__thumb">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'credobpo-card' ); ?>
		<?php else : ?>
			<img src="<?php echo esc_url( CREDOBPO_URI . '/assets/images/placeholder-post.svg' ); ?>" alt="" loading="lazy">
		<?php endif; ?>
	</a>
	<div class="post-card__body">
		<div class="post-card__meta">
			<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
				echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a> &middot; ';
			}
			echo esc_html( get_the_date() );
			?>
		</div>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
	</div>
</article>
