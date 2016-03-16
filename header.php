<?php
/**
 * The template for displaying the header
 */
global $redux_starter;
$layout = $redux_starter ["opt-layout"];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="<?php echo $layout; ?> ">
		<header id="header" class="row" >
			<div id="logo" class="col-md-12">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
					title="<?php
					
					echo esc_attr ( get_bloginfo ( 'name', 'display' ) );
					?>" rel="home"> 
					
					<img
					src="
					<?php echo $redux_starter ['opt-media']['url'];?>"
					alt="Logo" class="img-responsive center-block" />
				</a>
			</div>			
				<?php get_template_part('template-parts/menu'); ?>
			</header>