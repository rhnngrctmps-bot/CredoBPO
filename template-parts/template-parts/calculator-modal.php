<?php
/**
 * VA Cost Calculator modal.
 * Included once in footer.php so it can be triggered from any page via
 * elements with the "js-open-calculator" class.
 */
$calc = credobpo_get_calculator_config();
?>
<div class="calc-modal-overlay" id="va-calculator-overlay">
	<div class="calc-modal" role="dialog" aria-modal="true" aria-labelledby="calc-modal-title">
		<button type="button" class="calc-modal__close" id="calc-modal-close" aria-label="<?php esc_attr_e( 'Close calculator', 'credobpo' ); ?>">&times;</button>

		<div class="calc-modal__header">
			<span class="eyebrow"><?php esc_html_e( 'Free Tool', 'credobpo' ); ?></span>
			<h2 id="calc-modal-title"><?php esc_html_e( 'Virtual Assistant Cost Calculator', 'credobpo' ); ?></h2>
			<p><?php esc_html_e( 'Estimate your monthly and annual cost, and see how much you could save versus an in-house hire.', 'credobpo' ); ?></p>
		</div>

		<div class="calc-modal__body">
			<form class="calc-form" id="va-calculator-form">
				<div class="form-group">
					<label for="calc-category"><?php esc_html_e( 'What do you need help with?', 'credobpo' ); ?></label>
					<select id="calc-category" name="category">
						<?php foreach ( $calc['categories'] as $key => $cat ) : ?>
							<option value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $cat['label'] ); ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label><?php esc_html_e( 'Experience level', 'credobpo' ); ?></label>
					<div class="segmented" data-field="experience">
						<input type="radio" name="experience" id="exp-entry" value="entry" checked>
						<label for="exp-entry"><?php esc_html_e( 'Entry', 'credobpo' ); ?></label>
						<input type="radio" name="experience" id="exp-mid" value="mid">
						<label for="exp-mid"><?php esc_html_e( 'Intermediate', 'credobpo' ); ?></label>
						<input type="radio" name="experience" id="exp-expert" value="expert">
						<label for="exp-expert"><?php esc_html_e( 'Expert', 'credobpo' ); ?></label>
					</div>
				</div>

				<div class="form-group">
					<label><?php esc_html_e( 'Engagement type', 'credobpo' ); ?></label>
					<div class="segmented" data-field="engagement">
						<input type="radio" name="engagement" id="eng-part" value="part" checked>
						<label for="eng-part"><?php esc_html_e( 'Part-time (20h/wk)', 'credobpo' ); ?></label>
						<input type="radio" name="engagement" id="eng-full" value="full">
						<label for="eng-full"><?php esc_html_e( 'Full-time (40h/wk)', 'credobpo' ); ?></label>
					</div>
				</div>

				<div class="form-group">
					<label for="calc-vas"><?php esc_html_e( 'Number of virtual assistants', 'credobpo' ); ?></label>
					<div class="stepper">
						<button type="button" id="calc-vas-minus" aria-label="<?php esc_attr_e( 'Decrease', 'credobpo' ); ?>">&minus;</button>
						<output id="calc-vas-count">1</output>
						<button type="button" id="calc-vas-plus" aria-label="<?php esc_attr_e( 'Increase', 'credobpo' ); ?>">+</button>
						<input type="hidden" id="calc-vas" name="vas" value="1">
					</div>
				</div>
			</form>

			<div class="calc-results">
				<h3><?php esc_html_e( 'Your Estimate', 'credobpo' ); ?></h3>

				<div class="calc-result-hero">
					<span><?php esc_html_e( 'Estimated monthly cost', 'credobpo' ); ?></span>
					<strong id="calc-monthly-cost">$0</strong>
				</div>

				<div class="calc-result-line">
					<span><?php esc_html_e( 'Estimated annual cost', 'credobpo' ); ?></span>
					<strong id="calc-annual-cost">$0</strong>
				</div>
				<div class="calc-result-line">
					<span><?php esc_html_e( 'Typical in-house annual cost', 'credobpo' ); ?></span>
					<strong id="calc-inhouse-cost">$0</strong>
				</div>

				<p class="calc-savings">
					<?php esc_html_e( 'Estimated annual savings:', 'credobpo' ); ?>
					<strong id="calc-savings-amount">$0</strong>
					(<span id="calc-savings-percent">0%</span>)
				</p>

				<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary btn-block">
					<?php esc_html_e( 'Get This Quote', 'credobpo' ); ?>
				</a>
				<p class="calc-disclaimer">
					<?php esc_html_e( 'Estimates only, based on typical rates. Actual pricing depends on skills, location, and scope of work.', 'credobpo' ); ?>
				</p>
			</div>
		</div>
	</div>
</div>
