<?php
add_action( 'wp_enqueue_scripts', 'ai_script' );
function ai_script() {

	//  Enqueue for plugin
	//  wp_register_script( 'ajax-script', plugins_url( 'ajax.js', __FILE__ ), array(), _S_VERSION, true );
	//  wp_enqueue_script( 'ajax-script' );

	//  Enqueue for theme
	wp_enqueue_script( 'ajax-script', get_template_directory_uri() . 'ajax.js', array(), _S_VERSION, true );

	wp_localize_script(
		'ajax-script',
		'param',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'ajax-nonce' ),
		)
	);
}

