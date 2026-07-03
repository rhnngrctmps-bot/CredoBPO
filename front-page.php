<?php
/**
 * The home page template.
 */
get_header();
get_template_part( 'template-parts/hero' );
?>

<section class="trust-bar">
	<div class="container">
		<p class="trust-bar__label"><?php esc_html_e( 'Trusted by teams at growing companies worldwide', 'credobpo' ); ?></p>
		<div class="trust-bar__logos">
			<span>Northwind</span>
			<span>Bluepeak</span>
			<span>Vantra</span>
			<span>Craftly</span>
			<span>Marlow &amp; Co.</span>
		</div>
	</div>
</section>

<section class="section" id="services">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'What We Offer', 'credobpo' ); ?></span>
			<h2><?php esc_html_e( 'Virtual Assistants for Every Part of Your Business', 'credobpo' ); ?></h2>
			<p><?php esc_html_e( 'From admin support to specialist skills, we match you with a dedicated VA trained for your workflow.', 'credobpo' ); ?></p>
		</div>
		<div class="grid-3">
			<?php foreach ( array_slice( credobpo_get_services(), 0, 6 ) as $service ) : ?>
				<div class="service-card">
					<div class="icon"><?php echo credobpo_icon( $service['icon'] ); ?></div>
					<h3><?php echo esc_html( $service['title'] ); ?></h3>
					<p><?php echo esc_html( $service['excerpt'] ); ?></p>
					<a class="card-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">
						<?php esc_html_e( 'Learn more', 'credobpo' ); ?> &rarr;
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--tint">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'How It Works', 'credobpo' ); ?></span>
			<h2><?php esc_html_e( 'Up and Running in Four Simple Steps', 'credobpo' ); ?></h2>
		</div>
		<div class="process-steps">
			<div class="process-step">
				<h3><?php esc_html_e( 'Tell us what you need', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'Share the tasks and skills you\'re looking to outsource.', 'credobpo' ); ?></p>
			</div>
			<div class="process-step">
				<h3><?php esc_html_e( 'We shortlist candidates', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'Get matched with pre-vetted VAs within 48 hours.', 'credobpo' ); ?></p>
			</div>
			<div class="process-step">
				<h3><?php esc_html_e( 'Interview & choose', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'Meet your shortlist and pick the best fit for your team.', 'credobpo' ); ?></p>
			</div>
			<div class="process-step">
				<h3><?php esc_html_e( 'Onboard & grow', 'credobpo' ); ?></h3>
				<p><?php esc_html_e( 'We handle onboarding and ongoing support as you scale.', 'credobpo' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="stats-band">
			<div class="stat">
				<strong>500+</strong>
				<span><?php esc_html_e( 'Businesses served', 'credobpo' ); ?></span>
			</div>
			<div class="stat">
				<strong>1,200+</strong>
				<span><?php esc_html_e( 'VAs placed', 'credobpo' ); ?></span>
			</div>
			<div class="stat">
				<strong>70%</strong>
				<span><?php esc_html_e( 'Average cost savings', 'credobpo' ); ?></span>
			</div>
			<div class="stat">
				<strong>4.9/5</strong>
				<span><?php esc_html_e( 'Client satisfaction', 'credobpo' ); ?></span>
			</div>
		</div>
	</div>
</section>

<section class="section section--tint">
	<div class="container">
		<div class="calc-promo">
			<div>
				<h2><?php esc_html_e( 'Not sure what a VA will cost you?', 'credobpo' ); ?></h2>
				<p><?php esc_html_e( 'Use our free calculator to estimate your monthly cost and see how much you could save versus hiring in-house.', 'credobpo' ); ?></p>
			</div>
			<button type="button" class="btn btn-primary js-open-calculator">
				<?php echo credobpo_icon( 'calculator' ); ?>
				<?php esc_html_e( 'Open Calculator', 'credobpo' ); ?>
			</button>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Testimonials', 'credobpo' ); ?></span>
			<h2><?php esc_html_e( 'Loved by Founders and Operations Teams', 'credobpo' ); ?></h2>
		</div>
		<div class="grid-testimonials">
			<div class="testimonial-card">
				<div class="stars">★★★★★</div>
				<p class="quote"><?php esc_html_e( '“Our VA has taken over half our inbox and scheduling. I finally have my mornings back.”', 'credobpo' ); ?></p>
				<div class="author">
					<span class="avatar">J</span>
					<div>
						<strong><?php esc_html_e( 'Jenna R.', 'credobpo' ); ?></strong>
						<span><?php esc_html_e( 'Founder, Craftly', 'credobpo' ); ?></span>
					</div>
				</div>
			</div>
			<div class="testimonial-card">
				<div class="stars">★★★★★</div>
				<p class="quote"><?php esc_html_e( '“The calculator gave us a realistic number before we even spoke to sales — no surprises later.”', 'credobpo' ); ?></p>
				<div class="author">
					<span class="avatar">M</span>
					<div>
						<strong><?php esc_html_e( 'Marcus T.', 'credobpo' ); ?></strong>
						<span><?php esc_html_e( 'Ops Lead, Northwind', 'credobpo' ); ?></span>
					</div>
				</div>
			</div>
			<div class="testimonial-card">
				<div class="stars">★★★★★</div>
				<p class="quote"><?php esc_html_e( '“Onboarding our bookkeeping VA took two days. She now closes our books every month, on time.”', 'credobpo' ); ?></p>
				<div class="author">
					<span class="avatar">S</span>
					<div>
						<strong><?php esc_html_e( 'Sara L.', 'credobpo' ); ?></strong>
						<span><?php esc_html_e( 'CEO, Vantra', 'credobpo' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$recent_posts = new WP_Query( array(
	'posts_per_page'      => 3,
	'ignore_sticky_posts' => true,
) );
if ( $recent_posts->have_posts() ) :
	?>
	<section class="section section--tint">
		<div class="container">
			<div class="section-head">
				<span class="eyebrow"><?php esc_html_e( 'From the Blog', 'credobpo' ); ?></span>
				<h2><?php esc_html_e( 'Outsourcing Tips & Resources', 'credobpo' ); ?></h2>
			</div>
			<div class="grid-blog">
				<?php
				while ( $recent_posts->have_posts() ) :
					$recent_posts->the_post();
					get_template_part( 'template-parts/content-card' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<div class="section-foot">
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-outline-dark"><?php esc_html_e( 'Visit the Blog', 'credobpo' ); ?></a>
			</div>
		</div>
	</section>
	<?php
endif;
?>

<section class="section">
	<div class="container">
		<div class="cta-band">
			<h2><?php esc_html_e( 'Ready to build your remote team?', 'credobpo' ); ?></h2>
			<p><?php esc_html_e( 'Tell us what you need and we\'ll match you with a shortlist of vetted VAs within 48 hours.', 'credobpo' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Get a Free Quote', 'credobpo' ); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
