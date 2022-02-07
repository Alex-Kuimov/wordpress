<?php
add_action( 'wp_ajax_nopriv_ajax_callback', 'ajax_callback' );
add_action( 'wp_ajax_ajax_callback', 'ajax_callback' );

function ajax_callback() {
	if ( isset( $_POST['nonce'] ) && wp_verify_nonce( $_POST['nonce'], 'ajax-nonce' ) ) {
		$result = 'some string';
		wp_send_json_success( $result );
	}

	wp_send_json_error();
}
