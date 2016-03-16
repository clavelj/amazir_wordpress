<?php




// Register Custom Taxonomy
function produit_contenance_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Produit Contenances', 'Taxonomy General Name', 'argan' ),
			'singular_name'              => _x( 'Produit Contenance', 'Taxonomy Singular Name', 'argan' ),
			'menu_name'                  => __( 'Produit Contenances', 'argan' ),
			'all_items'                  => __( 'All Produit Contenances', 'argan' ),
			'parent_item'                => __( 'Parent Produit Contenances', 'argan' ),
			'parent_item_colon'          => __( 'Parent Produit Contenances:', 'argan' ),
			'new_item_name'              => __( 'New Produit Contenance Name', 'argan' ),
			'add_new_item'               => __( 'Add New Produit Contenance', 'argan' ),
			'edit_item'                  => __( 'Edit Produit Contenance', 'argan' ),
			'update_item'                => __( 'Update Produit Contenance', 'argan' ),
			'view_item'                  => __( 'View Item', 'argan' ),
			'separate_items_with_commas' => __( 'Separate Produit Contenances with commas', 'argan' ),
			'add_or_remove_items'        => __( 'Add or remove Produit Contenances', 'argan' ),
			'choose_from_most_used'      => __( 'Choose from the most used Produit Contenance', 'argan' ),
			'popular_items'              => __( 'Popular Produit Contenances', 'argan' ),
			'search_items'               => __( 'Search Produit Contenances', 'argan' ),
			'not_found'                  => __( 'Not Produit Contenances Found', 'argan' ),
			'no_terms'                   => __( 'No items', 'argan' ),
			'items_list'                 => __( 'Items list', 'argan' ),
			'items_list_navigation'      => __( 'Items list navigation', 'argan' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'produit_contenance', array( 'produit' ), $args );

}
add_action( 'init', 'produit_contenance_taxonomy', 0 );