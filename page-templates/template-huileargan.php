
<?php
/* Template Name: L'huile d'argan */
?> 
    <?php get_header(); ?>
<div class="main page col-md-12"> 
	<div class="col-md-2"></div>
	<section class="col-md-8">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="post" >
            
		  <div class="titre">
                    <?php the_title(); ?>
                </div> 
                 <hr class="petitebordure">
               
               
               <div class="col-md-5 animated fadeInRight" style="float:right">
    	   	<?php the_post_thumbnail ( 'full',array (
					'class' => 'img-responsive imghuileargan ' ,
    	   			'style' => 'float:right'
				) );?>
    	   </div>
               
               <div class="texthuileargan  animated fadeInLeft">
                <?php the_content( ); ?></div>
    	  
    	  
    	  
    	   </div> 
    	   
        <?php endwhile; ?> 
        <?php endif; ?> </section>
        
        <div class="col-md-2">
	<?php if ( is_dynamic_sidebar() ) { ?>
		<div class="visible-md visible-lg">
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>
	
</div>

</div>
    
<div id="" class="col-md-12">
            <?php get_footer(); ?>
        </div>

