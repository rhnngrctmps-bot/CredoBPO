<?php
/**
 * Blog sidebar.
 */
if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	?>
	<div class="widget">
		<h3 class="widget-title"><?php esc_html_e( 'Categories', 'credobpo' ); ?></h3>
		<ul>
			<?php
			wp_list_categories( array(
				'title_li' => '',
				'show_count' => true,
			) );
			?>
		</ul>
	</div>
	<div class="widget">
		<h3 class="widget-title"><?php esc_html_e( 'Recent Posts', 'credobpo' ); ?></h3>
		<ul>
			<?php
			$recent = wp_get_recent_posts( array( 'numberposts' => 5, 'post_status' => 'publish' ) );
			foreach ( $recent as $recent_post ) {
				echo '<li><a href="' . esc_url( get_permalink( $recent_post['ID'] ) ) . '">' . esc_html( $recent_post['post_title'] ) . '</a></li>';
			}
			?>
		</ul>
	</div>
	<div class="widget">
		<h3 class="widget-title"><?php esc_html_e( 'Thinking About a VA?', 'credobpo' ); ?></h3>
		<p style="color:var(--color-gray-700);font-size:0.92rem;"><?php esc_html_e( 'See what it would cost with our free calculator.', 'credobpo' ); ?></p>
		<button type="button" class="btn btn-primary btn-block js-open-calculator"><?php esc_html_e( 'Calculate Cost', 'credobpo' ); ?></button>
	</div>
	<?php
} else {
	dynamic_sidebar( 'sidebar-blog' );
}
