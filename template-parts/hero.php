<?php
/**
 * Home page hero section.
 */
?>
<section class="hero">
	<div class="container hero__inner">
		<div class="hero__content">
			<span class="hero__eyebrow">
				<?php echo credobpo_icon( 'shield' ); ?>
				<?php esc_html_e( 'Trusted by 500+ growing businesses', 'credobpo' ); ?>
			</span>
			<h1>
				<?php esc_html_e( 'Hire Expert Virtual Assistants and', 'credobpo' ); ?>
				<span class="highlight"><?php esc_html_e( 'Save Up to 70%', 'credobpo' ); ?></span>
				<?php esc_html_e( 'on Staffing Costs', 'credobpo' ); ?>
			</h1>
			<p class="hero__subtitle">
				<?php esc_html_e( 'Credo BPO connects you with vetted, full-time virtual assistants across admin, support, marketing, finance, and tech — so you can grow without growing overhead.', 'credobpo' ); ?>
			</p>
			<div class="hero__actions">
				<button type="button" class="btn btn-primary js-open-calculator">
					<?php echo credobpo_icon( 'calculator' ); ?>
					<?php esc_html_e( 'Calculate Your Savings', 'credobpo' ); ?>
				</button>
				<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-outline">
					<?php esc_html_e( 'Get a Free Quote', 'credobpo' ); ?>
				</a>
			</div>
			<div class="hero__stats">
				<div class="hero__stat">
					<strong>500+</strong>
					<span><?php esc_html_e( 'Businesses served', 'credobpo' ); ?></span>
				</div>
				<div class="hero__stat">
					<strong>70%</strong>
					<span><?php esc_html_e( 'Average cost savings', 'credobpo' ); ?></span>
				</div>
				<div class="hero__stat">
					<strong>4.9/5</strong>
					<span><?php esc_html_e( 'Average client rating', 'credobpo' ); ?></span>
				</div>
			</div>
		</div>

		<div class="hero__media">
			<div class="hero__media-frame">
				<img src="<?php echo esc_url( CREDOBPO_URI . '/assets/images/hero-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Virtual assistant working with a client', 'credobpo' ); ?>">
			</div>
			<span class="hero__floating-badge"><?php esc_html_e( '100% Vetted VAs', 'credobpo' ); ?></span>
			<div class="hero__floating-card">
				<span class="icon"><?php echo credobpo_icon( 'clock' ); ?></span>
				<div>
					<strong><?php esc_html_e( 'Save $30k+/yr', 'credobpo' ); ?></strong>
					<span><?php esc_html_e( 'vs. a full-time in-house hire', 'credobpo' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
