
<hr>
<div class="col-md-12">
		<?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?></div>

<?php
if (has_post_thumbnail ()) { // pour afficher image a la une
	?>
<div class="col-md-3">
	<?php
	
	the_post_thumbnail ( 'thumbnail', array (
			'class' => 'img-responsive' 
	) );
	?></div>
<?php
}
?>


<div class="col-md-9">
<br>
    	<?php the_content("Lire la suite" ); ?></div>

