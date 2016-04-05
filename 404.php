<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

<div class="row">
	<div class="col-md-12">


		<div class="col-md-2"></div>
		<article class="col-md-8 ">
		<br>
		<div class="center-block text-center">
		<div class="titre">
                   ERREUR 404
                </div> 
                 <hr class="petitebordure">
		
		<p>Désolé, mais la page que vous recherchez ne peut être trouvée ou n’existe plus.</p><br>
		<a class="boutonboutique" href="<?php echo esc_url( home_url( '/' ) ); ?>"
					title="<?php 
					echo esc_attr ( get_bloginfo ( 'name', 'display' ) );
					?>" rel="home"> 
					Retour à la page d'accueil.
		</a><br><br>
		</div>
		</article>
		<div class="col-md-2"></div>


		<div class="col-md-3"></div>
	</div>
</div>
<?php get_footer();?>




