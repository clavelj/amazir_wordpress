<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */
if (! class_exists ( 'Redux' )) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "redux_starter";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

$theme = wp_get_theme (); // For use with some settings. Not necessary.

$args = array (
		'opt_name' => $opt_name,
		'use_cdn' => TRUE,
		'page_slug' => '_options',
		'page_title' => 'Amazir Theme Options',
		'update_notice' => TRUE,
		'intro_text' => '<p>Introduction Text</p>',
		'footer_text' => '<p>Footer Text</p>',
		'admin_bar' => TRUE,
		'menu_type' => 'menu',
		'menu_title' => 'Theme Options',
		'allow_sub_menu' => TRUE,
		'page_parent_post_type' => 'your_post_type',
		'customizer' => TRUE,
		'default_mark' => '*',
		'hints' => array (
				'icon_position' => 'right',
				'icon_size' => 'normal',
				'tip_style' => array (
						'color' => 'light' 
				),
				'tip_position' => array (
						'my' => 'top left',
						'at' => 'bottom right' 
				),
				'tip_effect' => array (
						'show' => array (
								'duration' => '500',
								'event' => 'mouseover' 
						),
						'hide' => array (
								'duration' => '500',
								'event' => 'mouseleave unfocus' 
						) 
				) 
		),
		'output' => TRUE,
		'output_tag' => TRUE,
		'settings_api' => TRUE,
		'cdn_check_time' => '1440',
		'compiler' => TRUE,
		'page_permissions' => 'manage_options',
		'save_defaults' => TRUE,
		'show_import_export' => TRUE,
		'transient_time' => '3600',
		'network_sites' => TRUE,
		'display_version' => '1.0',
		'display_name' => 'Amazir Theme Options',
		'dev_mode' => false 
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args ['share_icons'] [] = array (
		'url' => 'https://github.com/ReduxFramework/ReduxFramework',
		'title' => 'Visit us on GitHub',
		'icon' => 'el el-github' 
);
// 'img' => '', // You can use icon OR img. IMG needs to be a full URL.

$args ['share_icons'] [] = array (
		'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
		'title' => 'Like us on Facebook',
		'icon' => 'el el-facebook' 
);
$args ['share_icons'] [] = array (
		'url' => 'http://twitter.com/reduxframework',
		'title' => 'Follow us on Twitter',
		'icon' => 'el el-twitter' 
);
$args ['share_icons'] [] = array (
		'url' => 'http://www.linkedin.com/company/redux-framework',
		'title' => 'Find us on LinkedIn',
		'icon' => 'el el-linkedin' 
);

Redux::setArgs ( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array (
		array (
				'id' => 'redux-help-tab-1',
				'title' => __ ( 'Theme Information 1', 'admin_folder' ),
				'content' => __ ( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' ) 
		),
		array (
				'id' => 'redux-help-tab-2',
				'title' => __ ( 'Theme Information 2', 'admin_folder' ),
				'content' => __ ( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' ) 
		) 
);
Redux::setHelpTab ( $opt_name, $tabs );

// Set the help sidebar
$content = __ ( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
Redux::setHelpSidebar ( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> START SECTIONS
 *
 */
Redux::setSection ( $opt_name, array (
		'title' => __ ( 'General', 'starter' ),
		'id' => 'general',
		'icon' => 'el el-adjust-alt',
		'fields' => array (
				array (
						'id' => 'opt-layout',
						'type' => 'image_select',
						'title' => __ ( 'Site Layout', 'starter' ),
						'options' => array (
								'container-fluid' => array (
										'alt' => 'full-width',
										'img' => ReduxFramework::$_url . 'assets/img/1col.png' 
								),
								'container' => array (
										'alt' => 'fixed-width',
										'img' => ReduxFramework::$_url . 'assets/img/3cm.png' 
								) 
						),
						'default' => 'container' 
				) 
		) 
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Texte footer', 'starter' ),
		'desc' => __ ( 'For full documentation on this field, visit: ', 'starter' ),
		'id' => 'opt-text-footer',
		'subsection' => false,
		'fields' => array (
				array (
						'id' => 'text-footer1',
						'type' => 'textarea',
						'title' => __ ( 'Text Field', 'starter' ),
						'subtitle' => __ ( 'Texte du footer 1', 'starter' ),
						'desc' => __ ( 'Premier paragraphe du footer', 'starter' ),
						'default' => 'Orientis vero limes in longum protentus et rectum conterminans gentibus, dextra pelagi fragoribus patens, quam plagam Nicator Seleucus occupatam auxit magnum in modum, cum post Alexandri Macedonis obitum successorio iure teneret regn.
LIEN vers articles recents ?' 
				)
		) 
) );



Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Image', 'starter' ),
		'id' => 'media_logo_select',
		'icon' => 'el el-picture',
		'subsection' => false,
		'fields' => array (
				array (
						'id' => 'opt-media',
						'type' => 'media',
						'url' => true,
						'height'=> '90',
						'title' => __ ( 'Logo', 'starter' ),
						'desc' => __ ( 'Ajouter le logo', 'starter' ),
						'subtitle' => __ ( 'Ajouter un logo via une URL ou un média', 'starter' ),
						'default' => array (
								'url' => 'http://localhost/~Jeanne/wordpress-test/wp-content/uploads/2016/03/logo_final.png'
						)
				)
		)

) );


/* Page bien etre */

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Texte bien etre', 'starter' ),
		'desc' => __ ( 'For full documentation on this field, visit: ', 'starter' ),
		'id' => 'opt-text-bienetre',
		'subsection' => false,
		'fields' => array (
				array (
						'id' => 'text-bienetre1',
						'type' => 'text',
						'title' => __ ( 'Titre', 'starter' ),
						'subtitle' => __ ( 'Titre de la page bien etre', 'starter' ),
						'desc' => __ ( 'Titre de la page bien etre', 'starter' ),
						'default' => 'Bien-etre'
				),
				array (
						'id' => 'text-bienetre2',
						'type' => 'textarea',
						'title' => __ ( 'Text Field', 'starter' ),
						'subtitle' => __ ( 'Texte en haut du bien etre', 'starter' ),
						'desc' => __ ( 'Petit paragraphe en haut de la page bien etre', 'starter' ),
						'default' => 'Bonjour inaiu iuoh e qzye bb uebu bu u gub uguye byu by ebyeg y uyef yyuuy gygytgbygy'
				),
				
		)
) );


/* Page produit */

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Texte Produit', 'starter' ),
		'desc' => __ ( 'For full documentation on this field, visit: ', 'starter' ),
		'id' => 'opt-text-produit',
		'subsection' => false,
		'fields' => array (
				array (
						'id' => 'text-produit1',
						'type' => 'text',
						'title' => __ ( 'Titre', 'starter' ),
						'subtitle' => __ ( 'Titre de la page produit', 'starter' ),
						'desc' => __ ( 'Titre de la page produit', 'starter' ),
						'default' => 'Title' 
				),
				array (
						'id' => 'text-produit2',
						'type' => 'textarea',
						'title' => __ ( 'Description', 'starter' ),
						'subtitle' => __ ( 'Texte de la page produit', 'starter' ),
						'desc' => __ ( 'Description de la page produit', 'starter' ),
						'default' => 'Quare talis ed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an. Ae est, qualis res publica post mortem meam futura, quam qualis hodie sit.' 
				) ,
				array (
						'id' => 'text-produit3',
						'type' => 'text',
						'title' => __ ( 'Lien', 'starter' ),
						'subtitle' => __ ( 'Lien vers la boutique', 'starter' ),
						'desc' => __ ( 'Phrase du lien vers la boutique dans la page interne', 'starter' ),
						'default' => 'Notre boutique'
				),
		) 
) );




/*
 * <--- END SECTIONS
 */

add_filter ( 'redux/options/' . $opt_name . '/compiler', 'musique_compiler_action', 10, 3 );
if (! function_exists ( 'musique_compiler_action' )) {
	function musique_compiler_action($options, $css, $changed_values) {
		global $wp_filesystem;
		
		$filename = get_template_directory () . '/css/redux_starter.css';
		// echo $filename;
		if (empty ( $wp_filesystem )) {
			require_once (ABSPATH . '/wp-admin/includes/file.php');
			WP_Filesystem ();
		}
		
		if ($wp_filesystem) {
			$wp_filesystem->put_contents ( $filename, $css, FS_CHMOD_FILE );
		}
	}
}

    