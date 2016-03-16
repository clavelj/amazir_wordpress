<?php
/**
 * Template pour un le contenu d'un produit
 */
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-12">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="panel panel-default">
			<div class="panel-heading">
						<?php the_title( "<h3 class='panel-title'>", "</h3>" );?> 
			</div>
			<div class="panel-body">
						<?php
				
				if (has_post_thumbnail ()) { // pour afficher image a la une
					the_post_thumbnail ( 'thumbnail', array (
							'class' => 'img-responsive' 
					) );
				}
				;
				the_content ();
				the_taxonomies ();
				?>
				</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
			<?php
			get_template_part ( 'template-parts/content', 'none' );
			?>
		<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>