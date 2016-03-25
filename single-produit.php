<?php
/**
 * Template pour un le contenu d'un produit
 */
?>

<?php global $redux_starter;?>


<?php get_header(); ?>
<div class="row" id="singleproduit">
	<div class="col-md-12">

		<div class="col-md-2"></div>
		<div class="col-md-8 unproduit">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-12">
				<div class="col-md-3 titresingleproduit">
			
						<?php the_title( );?> 
						</div>
				<div class="col-md-9"></div>
			</div>

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
					<div class="col-md-12 contenusingleproduit">
					<?php
				the_content ();
				?>
				</div>
					<div class="col-md-8 produitcontenance">
						<?php
				the_taxonomies (); // recuperer la contenance du produit
				?>
					</div>

					<div class="col-md-4">
						<?php if ( get_post_meta( get_the_ID(), '_produit_video_url', true ) ) : ?>
						
						<a class="boutonboutique"
							href="<?php echo get_post_meta( get_the_ID(), '_produit_video_url', true ) ?>">
						
						<?php echo $redux_starter ['text-produit3'];?>
						
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

	<div class="col-md-12">
		<div class="col-md-2"></div>
		<div class="col-md-8 produitvideo ">
			<?php if ( get_post_meta( get_the_ID(), '_produit_video_embed', true ) ) : ?>
				<?php
				
				$video = get_post_meta ( get_the_ID (), '_produit_video_embed', true );
				echo wp_oembed_get ( $video );
				?>			
			<?php endif; ?>
		</div>
		<div class="col-md-2"></div>
	</div>


	<div class="col-md-3">

	</div>
</div>
<?php get_footer();?>


