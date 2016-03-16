
<?php
/* Template Name: L'huile d'argan */
?> 
    <?php get_header(); ?>
<div class="main page col-md-12"> 
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="post col-md-7" style="margin-top: 20px;">
		<h1 class="post-title">
                    <?php the_title(); ?>
                </h1> 
                <?php the_content( ); ?>
    	   </div> 
        <?php endwhile; ?> 
        <?php endif; ?> 
    </div>
<?php get_sidebar(); ?>
<div id="footer-huileargan" class="col-md-12">
            <?php get_footer(); ?>
        </div>

