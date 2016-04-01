<div class="col-md-12">


	<div class="titre4">
		
			<?php the_title( ); ?>
			
			<hr class="petitebordure">
	</div>
    
    
    <img class="imagesinglearticle" src="<?php echo get_post_meta( get_the_ID(), '_article_image_image', true ) ?>">
    
    
    <?php the_content( ); ?>
    <div class="date">
    	Publié le <?php the_date(); ?>
    </div>
</div>

