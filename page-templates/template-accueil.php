<?php
/* Template Name: Accueil */
?> 
<?php get_header(); ?>

<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="main page"> <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?> 
   <section class="post col-md-12 col-sm-12 sectionaccueil">
			<div class="col-md-7 col-sm-7">
			<div class="titre1"><?php echo get_post_meta( get_the_ID(), '_accueil_titre_titre', true ) ?></div>
			
				<div class="titre2">
         			<?php the_title(); ?>
     			</div>
				<div class="description-haut2">
    				<?php the_content( ); ?>
    			</div>
			</div>
			
			<div class="col-md-5 col-sm-5">
				<?php the_post_thumbnail ( 'full',array (
					'class' => 'img-responsive imagearticle' 
				) );?>
			</div>

		</section> 
<?php endwhile; ?> 
<?php endif; ?> 
</div>

			<hr>
<?php
$recentPosts = new WP_Query ();
$recentPosts->query ( 'showposts=2' );
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	<article class="col-md-12 unarticle">

		

		<?php
	if (has_post_thumbnail ()) { // pour afficher image a la une
		?>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<?php
		
		the_post_thumbnail ( 'full', array (
				'class' => 'img-responsive imagearticle' 
		) );
		?>
			</div>
		<?php
	}
	?>
		<div class="col-md-9 ">
			<div class="titrearticle">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?></a>
			</div>
			<br>
    		<?php the_content("<br><br><div class='readmore col-md-8'>Lire la suite</div>" ); ?>
    		<div class="date">Publié le <?php the_date(); ?></div>
		</div>
	</article>
<?php endwhile; ?>
</div>

<div class="col-md-2">
	<?php if ( is_dynamic_sidebar() ) { ?>
		<div class="visible-md visible-lg">
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>
</div>

<div class="post col-md-12" id="footer-accueil" style=""><?php get_footer(); ?></div>
