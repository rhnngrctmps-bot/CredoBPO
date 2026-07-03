<?php
/**
 * Template Name: About Us
 */
get_header();
credobpo_page_header(
	__( 'About Us', 'credobpo' ),
	__( 'We Help Businesses Grow Without Growing Overhead', 'credobpo' ),
	__( 'Credo BPO connects growing companies with vetted virtual assistants and BPO teams across admin, support, marketing, finance, and tech.', 'credobpo' )
);
?>

<section class="section">
	<div class="container">
		<div class="about-split">
			<div>
				<span class="eyebrow"><?php esc_html_e( 'Our Story', 'credobpo' ); ?></span>
				<h2><?php esc_html_e( 'Built by Founders Who Outsourced Too', 'credobpo' ); ?></h2>
				<p><?php esc_html_e( 'We started Credo BPO after years of piecing together remote hires ourselves — chasing referrals, vetting resumes, and hoping for the best. We built the process we wished existed: a fast, transparent way to hire trained virtual assistants without the guesswork.', 'credobpo' ); ?></p>
				<p><?php esc_html_e( 'Today we support hundreds of businesses with dedicated VAs and small BPO teams, backed by a recruitment and quality process refined over thousands of placements.', 'credobpo' ); ?></p>
				<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-outline-dark"><?php esc_html_e( 'Talk to Our Team', 'credobpo' ); ?></a>
			</div>
			<div class="about-split__media">
				<img src="<?php echo esc_url( CREDOBPO_URI . '/assets/images/hero-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'The Credo BPO team collaborating remotely', 'credobpo' ); ?>">
			</div>
		</div>
	</div>
</section>

<section class="section section--tint">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Our Values', 'credobpo' ); ?></span>
			<h2><?php esc_html_e( 'What Guides How We Work', 'credobpo' ); ?></h2>
		</div>
		<div class="about-values">
			<div class="value-card">
				<div class="icon"><?php echo credobpo_icon( 'shield' ); ?></div>
				<h3><?php esc_html_e( 'Trust First', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'Every VA is background-checked, skills-tested, and reference-verified before we recommend them.', 'credobpo' ); ?></p>
			</div>
			<div class="value-card">
				<div class="icon"><?php echo credobpo_icon( 'clock' ); ?></div>
				<h3><?php esc_html_e( 'Fast, Not Rushed', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'A shortlist in 48 hours, without cutting corners on vetting quality.', 'credobpo' ); ?></p>
			</div>
			<div class="value-card">
				<div class="icon"><?php echo credobpo_icon( 'globe' ); ?></div>
				<h3><?php esc_html_e( 'Built for Scale', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'Start with one VA and grow into a full remote team as your business grows.', 'credobpo' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Leadership', 'credobpo' ); ?></span>
			<h2><?php esc_html_e( 'Meet the Team', 'credobpo' ); ?></h2>
		</div>
		<div class="team-grid">
			<?php
			$team = array(
				array( 'name' => 'Alex Rivera', 'role' => __( 'Co-Founder & CEO', 'credobpo' ), 'initial' => 'A' ),
				array( 'name' => 'Priya Nair', 'role' => __( 'Co-Founder & COO', 'credobpo' ), 'initial' => 'P' ),
				array( 'name' => 'Daniel Cruz', 'role' => __( 'Head of Talent', 'credobpo' ), 'initial' => 'D' ),
				array( 'name' => 'Maria Santos', 'role' => __( 'Head of Client Success', 'credobpo' ), 'initial' => 'M' ),
			);
			foreach ( $team as $member ) :
				?>
				<div class="team-card">
					<div class="avatar"><?php echo esc_html( $member['initial'] ); ?></div>
					<strong><?php echo esc_html( $member['name'] ); ?></strong>
					<span><?php echo esc_html( $member['role'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--tint">
	<div class="container">
		<div class="cta-band">
			<h2><?php esc_html_e( 'Curious what it would cost to hire a VA?', 'credobpo' ); ?></h2>
			<p><?php esc_html_e( 'Try our free calculator for a quick, no-obligation estimate.', 'credobpo' ); ?></p>
			<button type="button" class="btn btn-primary js-open-calculator">
				<?php echo credobpo_icon( 'calculator' ); ?>
				<?php esc_html_e( 'Calculate Your Savings', 'credobpo' ); ?>
			</button>
		</div>
	</div>
</section>

<?php get_footer(); ?>
