<?php global $redux_starter;?>
<?php

?>
<?php get_header(); ?>
<div class="row">


	<div class="col-md-2"></div>
	<div class="col-md-8">



		<div class="titre">
		<?php echo $redux_starter ['text-produit1'];?>
	</div>
	  <hr class="petitebordure">
		<div class="description-haut">
<?php echo $redux_starter ['text-produit2'];?>
</div>
		<hr>
	<?php if ( have_posts() ) : ?>
		<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-xs-6 col-md-4">
			<?php
			get_template_part ( 'template-parts/argan/content', 'produit' );
			?>
			</div>
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