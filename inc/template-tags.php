<?php
/**
 * Small reusable template helpers.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Simple page header used on inner page templates.
 */
function credobpo_page_header( $eyebrow, $title, $subtitle = '' ) {
	?>
	<section class="page-header">
		<div class="container">
			<?php if ( $eyebrow ) : ?>
				<span class="eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<?php endif; ?>
			<h1><?php echo esc_html( $title ); ?></h1>
			<?php if ( $subtitle ) : ?>
				<p class="page-header__subtitle"><?php echo esc_html( $subtitle ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<?php
}

/**
 * Inline SVG icon sprite lookup used for service cards / feature lists.
 */
function credobpo_icon( $name ) {
	$icons = array(
		'admin'       => '<path d="M4 19h16M6 19V9l6-4 6 4v10M10 19v-5h4v5" />',
		'support'     => '<path d="M12 3a7 7 0 0 0-7 7v3a2 2 0 0 0 2 2h1v-6H6a6 6 0 0 1 12 0h-2v6h1a2 2 0 0 0 2-2v-3a7 7 0 0 0-7-7z" /><path d="M6 15v2a4 4 0 0 0 4 4h1" />',
		'marketing'   => '<path d="M4 11v2a1 1 0 0 0 1 1h2l4 4V6L7 10H5a1 1 0 0 0-1 1z" /><path d="M15 9a3 3 0 0 1 0 6" /><path d="M18 6a7 7 0 0 1 0 12" />',
		'bookkeeping' => '<rect x="5" y="4" width="14" height="16" rx="1.5" /><path d="M9 8h6M9 12h6M9 16h4" />',
		'executive'   => '<circle cx="12" cy="8" r="3.5" /><path d="M5 20a7 7 0 0 1 14 0" />',
		'tech'        => '<rect x="4" y="5" width="16" height="11" rx="1.5" /><path d="M2 20h20M9 20l1-4h4l1 4" />',
		'clock'       => '<circle cx="12" cy="12" r="8.5" /><path d="M12 7v5l3.5 2" />',
		'shield'      => '<path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6z" /><path d="M9 12l2 2 4-4" />',
		'globe'       => '<circle cx="12" cy="12" r="8.5" /><path d="M3.5 12h17M12 3.5c2.5 2.3 3.8 5.3 3.8 8.5s-1.3 6.2-3.8 8.5c-2.5-2.3-3.8-5.3-3.8-8.5S9.5 5.8 12 3.5z" />',
		'calculator'  => '<rect x="5" y="3" width="14" height="18" rx="1.5" /><path d="M8 7h8M8 11h.01M12 11h.01M16 11h.01M8 15h.01M12 15h.01M16 15h.01" />',
	);

	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}

	return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}

/**
 * Fallback menu shown when no "primary" menu has been assigned in the Customizer.
 */
function credobpo_default_menu() {
	echo '<ul class="primary-menu">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'credobpo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/about-us/' ) ) . '">' . esc_html__( 'About Us', 'credobpo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">' . esc_html__( 'Services', 'credobpo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/blog/' ) ) . '">' . esc_html__( 'Blog', 'credobpo' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact-us/' ) ) . '">' . esc_html__( 'Contact Us', 'credobpo' ) . '</a></li>';
	echo '</ul>';
}

/**
 * Pagination wrapper.
 */
function credobpo_pagination() {
	the_posts_pagination( array(
		'mid_size'  => 1,
		'prev_text' => __( '&larr; Previous', 'credobpo' ),
		'next_text' => __( 'Next &rarr;', 'credobpo' ),
	) );
}
