<?php

// Register Custom Post Type
function produit_type() {

	$labels = array(
			'name'                  => _x( 'Produits', 'Post Type General Name', 'argan' ),
			'singular_name'         => _x( 'Produit', 'Post Type Singular Name', 'argan' ),
			'menu_name'             => __( 'Produits', 'argan' ),
			'name_admin_bar'        => __( 'Produit', 'argan' ),
			'archives'              => __( 'All Produits Archives', 'argan' ),
			'parent_item_colon'     => __( 'Parent Produit:', 'argan' ),
			'all_items'             => __( 'All Produits', 'argan' ),
			'add_new_item'          => __( 'Add New Produit', 'argan' ),
			'add_new'               => __( 'Add New', 'argan' ),
			'new_item'              => __( 'New Item', 'argan' ),
			'edit_item'             => __( 'Edit Produit', 'argan' ),
			'update_item'           => __( 'Update Produit', 'argan' ),
			'view_item'             => __( 'View Produit', 'argan' ),
			'search_items'          => __( 'Search Produit', 'argan' ),
			'not_found'             => __( 'Not Produit found', 'argan' ),
			'not_found_in_trash'    => __( 'Not Produit found in Trash', 'argan' ),
			'featured_image'        => __( 'Featured Image', 'argan' ),
			'set_featured_image'    => __( 'Set featured image', 'argan' ),
			'remove_featured_image' => __( 'Remove featured image', 'argan' ),
			'use_featured_image'    => __( 'Use as featured image', 'argan' ),
			'insert_into_item'      => __( 'Insert into item', 'argan' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'argan' ),
			'items_list'            => __( 'Items list', 'argan' ),
			'items_list_navigation' => __( 'Items list navigation', 'argan' ),
			'filter_items_list'     => __( 'Filter items list', 'argan' ),
	);
	$args = array(
			'label'                 => __( 'Produit', 'argan' ),
			'description'           => __( 'Ajout d\'un produit', 'argan' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'menu_icon'             => 'dashicons-cart',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
	);
	register_post_type( 'produit', $args );

}
add_action( 'init', 'produit_type', 0 );

// Register Custom Post Type
function bienetre_type() {

	$labels = array(
			'name'                  => _x( 'Bien-etre', 'Post Type General Name', 'argan' ),
			'singular_name'         => _x( 'Bien-etre', 'Post Type Singular Name', 'argan' ),
			'menu_name'             => __( 'Bien-etre', 'argan' ),
			'name_admin_bar'        => __( 'Bien-etre', 'argan' ),
			'archives'              => __( 'All Bien-etre Archives', 'argan' ),
			'parent_item_colon'     => __( 'Parent Bien-etre:', 'argan' ),
			'all_items'             => __( 'All Bien-etre', 'argan' ),
			'add_new_item'          => __( 'Add New Bien-etre', 'argan' ),
			'add_new'               => __( 'Add New', 'argan' ),
			'new_item'              => __( 'New Item', 'argan' ),
			'edit_item'             => __( 'Edit Bien-etre', 'argan' ),
			'update_item'           => __( 'Update Bien-etre', 'argan' ),
			'view_item'             => __( 'View Bien-etre', 'argan' ),
			'search_items'          => __( 'Search Bien-etre', 'argan' ),
			'not_found'             => __( 'Not Bien-etre found', 'argan' ),
			'not_found_in_trash'    => __( 'Not Bien-etre found in Trash', 'argan' ),
			'featured_image'        => __( 'Featured Image', 'argan' ),
			'set_featured_image'    => __( 'Set featured image', 'argan' ),
			'remove_featured_image' => __( 'Remove featured image', 'argan' ),
			'use_featured_image'    => __( 'Use as featured image', 'argan' ),
			'insert_into_item'      => __( 'Insert into item', 'argan' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'argan' ),
			'items_list'            => __( 'Items list', 'argan' ),
			'items_list_navigation' => __( 'Items list navigation', 'argan' ),
			'filter_items_list'     => __( 'Filter items list', 'argan' ),
	);
	$args = array(
			'label'                 => __( 'Bien-etre', 'argan' ),
			'description'           => __( 'Bien-etre', 'argan' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'menu_icon'             => 'dashicons-star-filled',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
	);
	register_post_type( 'bienetre', $args );

}
add_action( 'init', 'bienetre_type', 0 );
















