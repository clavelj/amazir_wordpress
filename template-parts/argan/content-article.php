<div class="col-md-12 articlesingleentier">


	<div class="titre4">
		
			<?php the_title( ); ?>
			
			<hr class="petitebordure">
	</div>
    
    <?php if ( get_post_meta( get_the_ID(), '_article_image_image', true ) ) : ?>
    <img class="imagesinglearticle" src="<?php echo get_post_meta( get_the_ID(), '_article_image_image', true ) ?>">
    <?php endif; ?>
    
    <div class="text-justifier">
    <?php the_content( ); ?></div>
    <div class="date">
    	Publié le <?php the_date(); ?>
    </div>
</div>

