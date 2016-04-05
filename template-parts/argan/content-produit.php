<div id="content-produit" class="thumbnail">

	<a href="<?php the_permalink(); ?>">

	<span class="title"> 
		<?php the_title( '<h3>', '</h3>' ); ?>
	</span> 
	
	<span class="descr"> 
		<?php echo get_post_meta( get_the_ID(), '_produit_video_text', true ) ?>
	</span>
	
	<span class="more"> 
		En Savoir +
	</span>

	<span class="bg">
	</span>
			
	<?php if(has_post_thumbnail($post->ID)) : ?>
		<?php the_post_thumbnail('cover', array (
					'class' => 'col-xs-6 col-sm-6 center-block' )); ?>
	<?php else:?>
		<?php echo '<img src="' . get_template_directory_uri (). '/images/photo_no_available.png" />'; ?>
	<?php endif;?>
	
	</a>
</div>
