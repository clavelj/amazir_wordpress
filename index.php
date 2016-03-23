<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>

<div class="row">
	<div class="col-md-12">
	
	
	    
<?php if ( is_category ('bienetre')) { ?>
    <div class="col-md-2">
    </div>
		<div class="col-md-8">
			<div class="titre">
				<?php  echo $redux_starter ['text-bienetre1'];?>
			</div>
			<div class="description-haut">
				<?php  echo $redux_starter ['text-bienetre2'];?>
			</div>
		</div>
		<div class="col-md-2">
		</div>
<?php } ?>



		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8">
					<?php
				get_template_part ( 'template-parts/content', get_post_format () );
				?>
				</div>
			<div class="col-md-2"></div>
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




