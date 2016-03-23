<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if (file_exists ( get_template_directory () . '/cmb2/init.php' )) {
	require_once get_template_directory () . '/cmb2/init.php';
} elseif (file_exists ( get_template_directory () . '/CMB2/init.php' )) {
	require_once get_template_directory () . '/CMB2/init.php';
}

//
//METABOXE DE LA PAGE ACCUEIL :
//
add_action( 'cmb2_admin_init', 'accueil_metabox' );
function accueil_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_accueil_titre_';

	$cmb_accueil = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'TITRE', 'cmb2' ),
			'object_types'  => array( 'page' )
	) );



$cmb_accueil ->add_field( array(
	'name' => 'Sur-titre',
    'desc' => 'Texte au dessus du titre de la page',
    'type' => 'text_medium',
	'id'   => $prefix . 'titre',
	) );




};



//
//METABOXE DU PRODUIT :
//

add_action( 'cmb2_admin_init', 'produit_register_video_metabox' );
function produit_register_video_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_produit_video_';

	$cmb_produit = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Produit Informations', 'cmb2' ),
			'object_types'  => array( 'produit', )
	) );
	
	
	
	$cmb_produit->add_field( array(
			'name'    => 'Text Small',
			'desc'    => 'Petite description du listing produit',
			'default' => 'Produit de notre boutique',
			'id'      => $prefix . 'text',
			'type'    => 'text_medium'
	) );
	$cmb_produit->add_field( array(
			'name' => __( 'Image', 'cmb2' ),
			'desc' => __( 'Ajouter une image ou un URL', 'cmb2' ),
			'id'   => $prefix . 'image',
			'type' => 'text',
	) );
	
	
	$cmb_produit->add_field( array(
			'name' => __( 'Image', 'cmb2' ),
			'desc' => __( 'Ajouter une image ou un URL', 'cmb2' ),
			'id'   => $prefix . 'image',
			'type' => 'file',
	) );
	
	
	
	$cmb_produit->add_field( array(
			'name' => __( 'Website URL', 'cmb2' ),
			'desc' => __( 'Lien vers le produit sur le e-commerce', 'cmb2' ),
			'id'   => $prefix . 'url',
			'type' => 'text_url',
			// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
			// 'repeatable' => true,
	) );
	
	$cmb_produit->add_field( array(
			'name' => __( 'Video', 'cmb2' ),
			'desc' => __( 'Entrer une URL Youtube.', 'cmb2' ),
			'id'   => $prefix . 'embed',
			'type' => 'oembed',
	) );

}
