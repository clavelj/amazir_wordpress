
<?php
/* Template Name: Accueil */
?> 
<?php get_header(); ?>

<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="main page"> <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?> 
   <div class="post col-md-12">
			<h1 class="post-title">
         <?php the_title(); ?>
     </h1> 
     <?php the_content( ); ?>
 </div> 
<?php endwhile; ?> 
<?php endif; ?> 
</div>



<?php
$recentPosts = new WP_Query ();
$recentPosts->query ( 'showposts=2' );
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<div class="post col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			</div>
			<div class="panel-body">
            <?php the_content( ); ?>
        </div>
		</div>
	</div>
<?php endwhile; ?>


</div>


<div class="col-md-2"></div>

<?php get_sidebar(); ?>
<div class="post col-md-12" id="footer-accueil" style=""><?php get_footer(); ?></div>