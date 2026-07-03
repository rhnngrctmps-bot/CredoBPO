<?php
/**
 * Static service definitions used on the Services page template.
 * Edit this list to add, remove, or reword services.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function credobpo_get_services() {
	$services = array(
		array(
			'icon'    => 'admin',
			'title'   => __( 'General Virtual Assistants', 'credobpo' ),
			'excerpt' => __( 'Inbox and calendar management, data entry, research, and day-to-day admin support.', 'credobpo' ),
		),
		array(
			'icon'    => 'support',
			'title'   => __( 'Customer Support', 'credobpo' ),
			'excerpt' => __( 'Email, chat, and phone support VAs who keep your customers happy around the clock.', 'credobpo' ),
		),
		array(
			'icon'    => 'marketing',
			'title'   => __( 'Marketing & Social Media', 'credobpo' ),
			'excerpt' => __( 'Content scheduling, community management, and campaign support for growing brands.', 'credobpo' ),
		),
		array(
			'icon'    => 'bookkeeping',
			'title'   => __( 'Bookkeeping & Accounting', 'credobpo' ),
			'excerpt' => __( 'Invoicing, reconciliation, and reporting handled by detail-oriented finance VAs.', 'credobpo' ),
		),
		array(
			'icon'    => 'executive',
			'title'   => __( 'Executive Assistants', 'credobpo' ),
			'excerpt' => __( 'Dedicated right-hand support for founders and executives who need time back.', 'credobpo' ),
		),
		array(
			'icon'    => 'tech',
			'title'   => __( 'Web, Design & Dev Support', 'credobpo' ),
			'excerpt' => __( 'Website updates, graphic design, and light development from vetted technical VAs.', 'credobpo' ),
		),
	);

	return apply_filters( 'credobpo_services_list', $services );
}
