<?php
/**
 * Native contact form handler (no plugin dependency).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function credobpo_handle_contact_form() {
	if ( ! isset( $_POST['credobpo_contact_nonce'] ) || ! wp_verify_nonce( $_POST['credobpo_contact_nonce'], 'credobpo_contact_form' ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
		exit;
	}

	// Honeypot field must stay empty.
	if ( ! empty( $_POST['credobpo_website'] ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'success', wp_get_referer() ) );
		exit;
	}

	$name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '';
	$email   = isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '';
	$phone   = isset( $_POST['contact_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_phone'] ) ) : '';
	$message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '';

	if ( empty( $name ) || ! is_email( $email ) || empty( $message ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
		exit;
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf( __( 'New contact form submission from %s', 'credobpo' ), $name );
	$body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\n\nMessage:\n{$message}";
	$headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );

	$sent = wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'contact', $sent ? 'success' : 'error', wp_get_referer() ) );
	exit;
}
add_action( 'admin_post_credobpo_contact_form', 'credobpo_handle_contact_form' );
add_action( 'admin_post_nopriv_credobpo_contact_form', 'credobpo_handle_contact_form' );
