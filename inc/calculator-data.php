<?php
/**
 * Configuration for the VA cost calculator.
 * Rates are illustrative USD/hour ranges billed to the client, plus rough
 * fully-loaded in-house salary equivalents used for the savings comparison.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function credobpo_get_calculator_config() {
	$categories = array(
		'general' => array(
			'label'          => __( 'General Admin VA', 'credobpo' ),
			'rate_entry'     => 6,
			'rate_mid'       => 7.5,
			'rate_expert'    => 9,
			'inhouse_salary' => 45000,
		),
		'support' => array(
			'label'          => __( 'Customer Support VA', 'credobpo' ),
			'rate_entry'     => 7,
			'rate_mid'       => 8.5,
			'rate_expert'    => 10,
			'inhouse_salary' => 48000,
		),
		'marketing' => array(
			'label'          => __( 'Marketing / Social Media VA', 'credobpo' ),
			'rate_entry'     => 8,
			'rate_mid'       => 10,
			'rate_expert'    => 12,
			'inhouse_salary' => 55000,
		),
		'bookkeeping' => array(
			'label'          => __( 'Bookkeeping / Accounting VA', 'credobpo' ),
			'rate_entry'     => 9,
			'rate_mid'       => 11.5,
			'rate_expert'    => 14,
			'inhouse_salary' => 52000,
		),
		'executive' => array(
			'label'          => __( 'Executive Assistant', 'credobpo' ),
			'rate_entry'     => 9,
			'rate_mid'       => 11,
			'rate_expert'    => 13,
			'inhouse_salary' => 54000,
		),
		'tech' => array(
			'label'          => __( 'Web / Design / Dev VA', 'credobpo' ),
			'rate_entry'     => 10,
			'rate_mid'       => 14,
			'rate_expert'    => 18,
			'inhouse_salary' => 75000,
		),
	);

	/**
	 * Allow site owners to override rates without editing theme files.
	 */
	$categories = apply_filters( 'credobpo_calculator_categories', $categories );

	return array(
		'categories'        => $categories,
		'weeksPerMonth'     => 4.33,
		'partTimeHours'     => 20,
		'fullTimeHours'     => 40,
		'inhouseOverhead'   => 1.3, // benefits, taxes, office, equipment
		'currencySymbol'    => '$',
	);
}
