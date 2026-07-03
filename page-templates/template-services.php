<?php
/**
 * Template Name: Services
 */
get_header();
credobpo_page_header(
	__( 'Services', 'credobpo' ),
	__( 'Virtual Assistant Services for Every Team', 'credobpo' ),
	__( 'Whatever you need to offload, there\'s a vetted VA trained to handle it — starting part-time and scaling as you grow.', 'credobpo' )
);
?>

<section class="section">
	<div class="container">
		<div class="grid-3">
			<?php foreach ( credobpo_get_services() as $service ) : ?>
				<div class="service-card">
					<div class="icon"><?php echo credobpo_icon( $service['icon'] ); ?></div>
					<h3><?php echo esc_html( $service['title'] ); ?></h3>
					<p><?php echo esc_html( $service['excerpt'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="pricing-note">
			<div class="icon"><?php echo credobpo_icon( 'calculator' ); ?></div>
			<div>
				<strong><?php esc_html_e( 'Wondering what these services cost?', 'credobpo' ); ?></strong>
				<p style="margin:4px 0 0;color:var(--color-gray-700);">
					<?php esc_html_e( 'Use our free VA cost calculator to get an instant estimate based on role, experience, and hours per week.', 'credobpo' ); ?>
				</p>
			</div>
			<button type="button" class="btn btn-primary js-open-calculator" style="margin-left:auto;flex-shrink:0;">
				<?php esc_html_e( 'Open Calculator', 'credobpo' ); ?>
			</button>
		</div>
	</div>
</section>

<section class="section section--tint">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Engagement Options', 'credobpo' ); ?></span>
			<h2><?php esc_html_e( 'Flexible Ways to Work With Us', 'credobpo' ); ?></h2>
		</div>
		<div class="grid-3">
			<div class="service-card">
				<div class="icon"><?php echo credobpo_icon( 'clock' ); ?></div>
				<h3><?php esc_html_e( 'Part-Time VA', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( '20 hours a week, ideal for testing a role or supporting a specific workflow.', 'credobpo' ); ?></p>
			</div>
			<div class="service-card">
				<div class="icon"><?php echo credobpo_icon( 'shield' ); ?></div>
				<h3><?php esc_html_e( 'Full-Time VA', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( '40 hours a week, dedicated to your business as if they were in-house.', 'credobpo' ); ?></p>
			</div>
			<div class="service-card">
				<div class="icon"><?php echo credobpo_icon( 'globe' ); ?></div>
				<h3><?php esc_html_e( 'Managed Teams', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'Multiple VAs across functions, coordinated by a dedicated account manager.', 'credobpo' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="cta-band">
			<h2><?php esc_html_e( 'Not sure which service fits your business?', 'credobpo' ); ?></h2>
			<p><?php esc_html_e( 'Tell us what you\'re trying to offload and we\'ll recommend the right role and engagement type.', 'credobpo' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Talk to Our Team', 'credobpo' ); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
