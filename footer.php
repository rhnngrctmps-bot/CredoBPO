	</main><!-- #primary -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-top">
				<div class="footer-brand">
					<div class="site-branding">
						<?php if ( has_custom_logo() ) : ?>
							<?php the_custom_logo(); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Credo<span class="logo-accent">BPO</span></a>
						<?php endif; ?>
					</div>
					<p><?php esc_html_e( 'Vetted virtual assistants and BPO teams that help growing businesses save on overhead without sacrificing quality.', 'credobpo' ); ?></p>
					<div class="footer-social">
						<a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M14 9h3V6h-3a3 3 0 0 0-3 3v2H8v3h3v6h3v-6h3l1-3h-4v-1.5A1.5 1.5 0 0 1 15.5 8H14z"/></svg></a>
						<a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="9" width="4" height="10"/><circle cx="6" cy="5" r="1.6"/><path d="M12 19v-6a3 3 0 0 1 6 0v6M12 19v-6"/></svg></a>
						<a href="#" aria-label="X"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M5 5l14 14M19 5L5 19"/></svg></a>
					</div>
				</div>

				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-col"><?php dynamic_sidebar( 'footer-1' ); ?></div>
				<?php else : ?>
					<div class="footer-col">
						<h4 class="widget-title"><?php esc_html_e( 'Company', 'credobpo' ); ?></h4>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About Us', 'credobpo' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'credobpo' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'credobpo' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'credobpo' ); ?></a></li>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="footer-col"><?php dynamic_sidebar( 'footer-2' ); ?></div>
				<?php else : ?>
					<div class="footer-col">
						<h4 class="widget-title"><?php esc_html_e( 'Services', 'credobpo' ); ?></h4>
						<ul>
							<?php foreach ( array_slice( credobpo_get_services(), 0, 5 ) as $service ) : ?>
								<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html( $service['title'] ); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="footer-col"><?php dynamic_sidebar( 'footer-3' ); ?></div>
				<?php else : ?>
					<div class="footer-col">
						<h4 class="widget-title"><?php esc_html_e( 'Get In Touch', 'credobpo' ); ?></h4>
						<ul>
							<li><a href="mailto:hello@credobpo.com">hello@credobpo.com</a></li>
							<li><a href="tel:+18005551234">+1 (800) 555-1234</a></li>
							<li><button type="button" class="js-open-calculator" style="background:none;border:none;padding:0;color:rgba(255,255,255,0.68);font-size:0.95rem;cursor:pointer;text-align:left;"><?php esc_html_e( 'Calculate VA Cost', 'credobpo' ); ?></button></li>
						</ul>
					</div>
				<?php endif; ?>
			</div>

			<div class="footer-bottom">
				<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'credobpo' ); ?></span>
				<nav class="footer-legal" aria-label="<?php esc_attr_e( 'Footer', 'credobpo' ); ?>">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'footer-legal',
						'fallback_cb'    => false,
						'items_wrap'     => '%3$s',
						'depth'          => 1,
					) );
					?>
				</nav>
			</div>
		</div>
	</footer>

	<?php get_template_part( 'template-parts/calculator-modal' ); ?>

<?php wp_footer(); ?>
</body>
</html>
