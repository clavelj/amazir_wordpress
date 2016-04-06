<?php
if (! function_exists ( 'starter_scripts' )) :
	function starter_scripts() {
		wp_enqueue_script ( 'bootstrap-script', get_template_directory_uri () . '/bootstrap/dist/js/bootstrap.min.js', array (
				'jquery' 
		) );
		wp_enqueue_script ( 'hover-script', get_template_directory_uri () . '/js/script.js', array (
		'jquery'
				) );
		wp_enqueue_style ( 'bootstrap-style', get_template_directory_uri () . '/bootstrap/dist/css/bootstrap.css' );
		wp_enqueue_style ( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
		wp_enqueue_style ( 'starter-style', get_template_directory_uri () . '/css/header.css' );
		wp_enqueue_style ( 'starter-style-produit', get_template_directory_uri () . '/css/produit.css' );
		wp_enqueue_style ( 'starter-style-contenu', get_template_directory_uri () . '/style.css' );
		wp_enqueue_style ( 'animation-style', get_template_directory_uri () . '/css/animate.css' );
	}



endif;
add_action ( 'wp_enqueue_scripts', 'starter_scripts' );



