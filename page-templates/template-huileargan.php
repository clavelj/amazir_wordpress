
<?php
/* Template Name: L'huile d'argan */
?> 
    <?php get_header(); ?>
<div class="main page col-md-12"> 
	<div class="col-md-2"></div>
	<div class="col-md-8">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="post col-md-7" >
		  <div class="titre">
                    <?php the_title(); ?>
                </div> 
                 <hr class="petitebordure">
                <?php the_content( ); ?>
    	   </div> 
    	   <div class="col-md-5" >
    	   	<?php the_post_thumbnail ( 'full',array (
					'class' => 'img-responsive imghuileargan' 
				) );?>
    	   </div>
        <?php endwhile; ?> 
        <?php endif; ?> </div>
        
        <div class="col-md-2"></div>
</div>
    
<?php get_sidebar(); ?>
<div id="" class="col-md-12">
            <?php get_footer(); ?>
        </div>

