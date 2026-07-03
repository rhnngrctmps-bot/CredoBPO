<?php
/**
 * Template Name: Contact Us
 */
get_header();
credobpo_page_header(
	__( 'Contact Us', 'credobpo' ),
	__( 'Let\'s Find Your Perfect VA', 'credobpo' ),
	__( 'Tell us a bit about what you need and a member of our team will follow up within one business day.', 'credobpo' )
);

$status = isset( $_GET['contact'] ) ? sanitize_text_field( wp_unslash( $_GET['contact'] ) ) : '';
?>

<section class="section">
	<div class="container">
		<div class="contact-layout">
			<div class="contact-info-card">
				<h3><?php esc_html_e( 'Get in Touch', 'credobpo' ); ?></h3>
				<div class="contact-info-item">
					<span class="icon"><?php echo credobpo_icon( 'support' ); ?></span>
					<div>
						<strong><?php esc_html_e( 'Email', 'credobpo' ); ?></strong>
						<a href="mailto:hello@credobpo.com">hello@credobpo.com</a>
					</div>
				</div>
				<div class="contact-info-item">
					<span class="icon"><?php echo credobpo_icon( 'clock' ); ?></span>
					<div>
						<strong><?php esc_html_e( 'Phone', 'credobpo' ); ?></strong>
						<a href="tel:+18005551234">+1 (800) 555-1234</a>
					</div>
				</div>
				<div class="contact-info-item">
					<span class="icon"><?php echo credobpo_icon( 'globe' ); ?></span>
					<div>
						<strong><?php esc_html_e( 'Office Hours', 'credobpo' ); ?></strong>
						<span><?php esc_html_e( 'Mon–Fri, 9am–6pm EST', 'credobpo' ); ?></span>
					</div>
				</div>
				<div class="contact-info-item">
					<span class="icon"><?php echo credobpo_icon( 'calculator' ); ?></span>
					<div>
						<strong><?php esc_html_e( 'Not ready to talk yet?', 'credobpo' ); ?></strong>
						<button type="button" class="js-open-calculator" style="background:none;border:none;padding:0;color:var(--color-accent);font-weight:600;cursor:pointer;">
							<?php esc_html_e( 'Try the VA cost calculator', 'credobpo' ); ?>
						</button>
					</div>
				</div>
			</div>

			<div class="contact-form-card">
				<?php if ( 'success' === $status ) : ?>
					<div class="form-notice success"><?php esc_html_e( 'Thanks — your message has been sent. We\'ll be in touch within one business day.', 'credobpo' ); ?></div>
				<?php elseif ( 'error' === $status ) : ?>
					<div class="form-notice error"><?php esc_html_e( 'Something went wrong sending your message. Please check your details and try again.', 'credobpo' ); ?></div>
				<?php endif; ?>

				<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<input type="hidden" name="action" value="credobpo_contact_form">
					<?php wp_nonce_field( 'credobpo_contact_form', 'credobpo_contact_nonce' ); ?>
					<input type="text" name="credobpo_website" class="honeypot-field" tabindex="-1" autocomplete="off">

					<div class="form-row">
						<div class="form-group">
							<label for="contact_name"><?php esc_html_e( 'Full Name', 'credobpo' ); ?></label>
							<input type="text" id="contact_name" name="contact_name" required>
						</div>
						<div class="form-group">
							<label for="contact_email"><?php esc_html_e( 'Email Address', 'credobpo' ); ?></label>
							<input type="email" id="contact_email" name="contact_email" required>
						</div>
					</div>

					<div class="form-group">
						<label for="contact_phone"><?php esc_html_e( 'Phone (optional)', 'credobpo' ); ?></label>
						<input type="tel" id="contact_phone" name="contact_phone">
					</div>

					<div class="form-group">
						<label for="contact_message"><?php esc_html_e( 'What do you need help with?', 'credobpo' ); ?></label>
						<textarea id="contact_message" name="contact_message" rows="5" required></textarea>
					</div>

					<button type="submit" class="btn btn-primary btn-block"><?php esc_html_e( 'Send Message', 'credobpo' ); ?></button>
				</form>
			</div>
		</div>

		<div class="map-embed">
			<iframe src="https://maps.google.com/maps?q=remote%20team&t=&z=11&ie=UTF8&iwloc=&output=embed" title="<?php esc_attr_e( 'Map', 'credobpo' ); ?>" loading="lazy"></iframe>
		</div>
	</div>
</section>

<?php get_footer(); ?>
