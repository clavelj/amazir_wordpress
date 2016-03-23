
<?php
/* Template Name: Valeur et entreprise */
?> 
    <?php get_header(); ?>
<div class="main page col-md-12"> 
 <div class="post col-md-2"></div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="post col-md-8 contenuentreprise">
		
               <div class="titre">
                    <?php the_title(); ?>
               </div> 
               <hr class="petitebordure">
                <?php the_content( ); ?>
                
                
                <?php the_post_thumbnail ( 'full',array (
					'class' => 'img-responsive' ,
                	'style'=>'width:100%'
				) );?>
                
                
				<div class="titre"> 
					<?php echo get_post_meta( get_the_ID(), '_accueil_titre_titre', true ) ?>
                </div>
                <hr class="petitebordure">
                <?php echo wpautop( get_post_meta( get_the_ID(), '_accueil_titre_text', true )) ?>
                
    	   </div> 
        <?php endwhile; ?> 
        <?php endif; ?> 
         <div class="post col-md-2"></div>
    </div>
    
    
    
    
    
    
    
    <?php /* if ( is_page ('valeurs')) { 
 echo "page valeur"; }
 if ( is_page('notre-entreprise')) {  
	echo "notre entrepirrrrrrese "; } */ ?>
    
    
<div id="footer-accueil" class="col-md-12">
            <?php get_footer(); ?>
        </div>



