
<?php
/* Template Name: Valeur et entreprise */
?> 
    <?php get_header(); ?>
<div class="main page col-md-12"> 
 <div class="post col-md-2"></div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="post col-md-8 contenuentreprise">
		
		<section>
               <div class="titre">
                    <?php the_title(); ?>
               </div> 
               <hr class="petitebordure">
               <div class="animated fadeIn text-justifier">
                <?php the_content( ); ?></div>
                
                
                <?php the_post_thumbnail ( 'full',array (
					'class' => 'img-responsive' ,
                	'style'=>'width:100%; margin-top:20px;'
				) );?>
				</section>
				
                <section  class="animated fadeIn delay05" > 
                <?php if (get_post_meta( get_the_ID(), '_accueil_titre_titre', true )) :?>
				<div class="titre"> 
					<?php echo get_post_meta( get_the_ID(), '_accueil_titre_titre', true ) ?>
                </div>
                <hr class="petitebordure">
               <div class="text-justifier" <?php echo wpautop( get_post_meta( get_the_ID(), '_accueil_titre_text', true )) ?></div>
                <?php endif;?>
           </section>
    	   </div> 
        <?php endwhile; ?> 
        <?php endif; ?> 
        
        
<div class="col-md-2">
	<?php if ( is_dynamic_sidebar() ) { ?>
		<div class="visible-md visible-lg">
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>
</div>         




    </div>
    
    
    
    
  
    
<div id="footer-accueil" class="col-md-12">
            <?php get_footer(); ?>
        </div>



