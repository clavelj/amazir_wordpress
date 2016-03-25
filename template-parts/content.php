
<hr>


<?php
if (has_post_thumbnail ()) { // pour afficher image a la une
	?>
<div class="col-md-3 col-sm-3">
	<?php
	
	the_post_thumbnail ( 'full', array (
			'class' => 'img-responsive imagearticle' 
	) );
	?></div>
<?php
}
?>


<div class="col-md-9">

	<div class="titrearticle">
		<a href="<?php the_permalink() ?>" rel="bookmark">
			<?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?>
		</a>
	</div>
    
    <?php the_content("<br><br><div class='readmore col-md-8'>Lire la suite</div>" ); ?>
    <div class="date">
    	Publié le <?php the_date(); ?>
    </div>
</div>

