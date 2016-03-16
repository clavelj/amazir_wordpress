<?php
/**
 * Template pour un le contenu d'un produit
 */
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-12">

		<div class="col-md-2"></div>
		<div class="col-md-8">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
						<?php the_title( "<h3 class='panel-title'>", "</h3>" );?> 
			<div class="col-md-12">
						<?php
				
				if (has_post_thumbnail ()) { // pour afficher image a la une
					the_post_thumbnail ( 'thumbnail', array (
							'class' => 'img-responsive col-md-3' 
					) );
				}
				;
				?>
				<div class="col-md-9">
					<div class="col-md-12"><?php
				the_content ();
				?>
				</div>
					<div class="col-md-6">
						<?php the_taxonomies (); // recuperer la contenance du produit
						?>
					</div>
					
					<div class="col-md-6">
						<?php if ( get_post_meta( get_the_ID(), '_produit_video_url', true ) ) : ?>
						
						<a href ="<?php echo get_post_meta( get_the_ID(), '_produit_video_url', true ) ?>" >
						
						Notre boutique
						
						</a>
						<?php endif; ?>
					</div>
					
				</div>
			</div>
				
			<?php endwhile; ?>
		<?php else : ?>
			<?php
			get_template_part ( 'template-parts/content', 'none' );
			?>
		<?php endif; ?></div>
		<div class="col-md-2"></div>
	</div>
	<div class="col-md-3">
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>