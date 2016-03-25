<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-12">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				
<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="col-md-12">
				<?php
				get_template_part ( 'template-parts/argan/content', 'article' );
				?></div>
		</div>
		<div class="col-md-2"></div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php
			get_template_part ( 'template-parts/content', 'none' );
			?>
		<?php endif; ?>
	</div>
	<div class="col-md-3">

	</div>
</div>
<?php get_footer();?>