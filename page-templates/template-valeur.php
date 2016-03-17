
<?php
/* Template Name: Valeur et entreprise */
?> 
    <?php get_header(); ?>
<div class="main page col-md-12"> 
 <div class="post col-md-2"></div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="post col-md-8">
		
               <div class="titre">
                    <?php the_title(); ?>
               </div> 
                <?php the_content( ); ?>
    	   </div> 
        <?php endwhile; ?> 
        <?php endif; ?> 
         <div class="post col-md-2"></div>
    </div>
    
    
    
    
    
    
    
    <?php if ( is_page ('valeurs')) { ?>
<?php  echo "page valeur"?>
<?php } ?>
<?php if ( is_page('notre-entreprise')) { ?>
<?php echo "notre entrepirrrrrrese "?>
<?php } ?>
    
    
<?php get_sidebar(); ?>
<div id="footer-accueil" class="col-md-12">
            <?php get_footer(); ?>
        </div>



