<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'credobpo' ); ?></a>

<header id="masthead" class="site-header">
	<div class="container site-header__inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					Credo<span class="logo-accent">BPO</span>
				</a>
			<?php endif; ?>
		</div>

		<nav id="primary-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary', 'credobpo' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'primary-menu',
				'fallback_cb'    => 'credobpo_default_menu',
			) );
			?>
		</nav>

		<div class="header-actions">
			<button type="button" class="btn btn-calc-trigger js-open-calculator">
				<?php echo credobpo_icon( 'calculator' ); ?>
				<?php esc_html_e( 'VA Cost Calculator', 'credobpo' ); ?>
			</button>
			<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-outline-dark">
				<?php esc_html_e( 'Get Started', 'credobpo' ); ?>
			</a>
			<button type="button" class="menu-toggle" id="menu-toggle" aria-expanded="false" aria-controls="primary-navigation">
				<span></span><span></span><span></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'credobpo' ); ?></span>
			</button>
		</div>
	</div>
</header>

<main id="primary" class="site-main">
