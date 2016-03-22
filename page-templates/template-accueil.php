<?php
/* Template Name: Accueil */
?> 
<?php get_header(); ?>

<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="main page"> <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?> 
   <div class="post col-md-12 sectionaccueil">
			<div class="col-md-7">
				<div class="titre">
         			<?php the_title(); ?>
     			</div>
				<div class="description-haut">
    				<?php the_content( ); ?>
    			</div>
			</div>
			
			<div class="col-md-5">
				<?php the_post_thumbnail ( 'full',array (
					'class' => 'img-responsive' 
				) );?>
			</div>

		</div> 
<?php endwhile; ?> 
<?php endif; ?> 
</div>

			<hr>
<?php
$recentPosts = new WP_Query ();
$recentPosts->query ( 'showposts=2' );
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	<div class="col-md-12 unarticle">

		

		<?php
	if (has_post_thumbnail ()) { // pour afficher image a la une
		?>
			<div class="col-md-3">
				<?php
		
		the_post_thumbnail ( 'thumbnail', array (
				'class' => 'img-responsive' 
		) );
		?>
			</div>
		<?php
	}
	?>
		<div class="col-md-9">
			<div class="titrearticle">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?></a>
			</div>
			<br>
    		<?php the_content("<br><br><div class='readmore col-md-8'>Lire la suite</div>" ); ?>
    		<div class="date">Publié le <?php the_date(); ?></div>
		</div>
	</div>
<?php endwhile; ?>
</div>

<div class="col-md-2"></div>
<?php get_sidebar(); ?>
<div class="post col-md-12" id="footer-accueil" style=""><?php get_footer(); ?></div>
