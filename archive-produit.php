<?php global $redux_starter;?>
<?php

?>
<?php get_header(); ?>
<div class="row">


	<div class="col-md-2"></div>
	<div class="col-md-8">
	
		<section>
		<div class="titre">
		<?php echo $redux_starter ['text-produit1'];?>
	</div>
	  <hr class="petitebordure">
		<div class="description-haut">
<?php echo $redux_starter ['text-produit2'];?>
</div>
		<hr>
		</section>
	<?php if ( have_posts() ) : ?>
		<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<article class="col-md-4 col-sm-6 unproduitarchive">
			<?php
			get_template_part ( 'template-parts/argan/content', 'produit' );
			?>
			</article>
		<?php endwhile; ?>
		</div>
	<?php else : ?>
		<?php
		get_template_part ( 'template-parts/content', 'none' );
		?>
	<?php endif; ?>
	</div>

	<div class="col-md-2"></div>
</div>
<?php get_footer();?>