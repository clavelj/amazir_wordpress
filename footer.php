<?php global $redux_starter;?>
<footer id="footer" class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="header-center col-md-3">
					<?php
					wp_nav_menu ( array (
							'menu' => 'secondary_navigation',
							'container' => 'div',
							'container_class' => 'menu-header text-left' 
							
					) );
					?>
					</div>
		<div class="col-md-3 text-footer">
<?php echo $redux_starter ['text-footer1'];?>

 </div>
		<div class="col-md-3 text-footer">
	<img class="img-responsive"
				src="
			<?php echo get_template_directory_uri(); ?>/images/usda.png"
				alt="Logo Ecocert" />
</div>
		<div class="col-md-3">
			<img class="img-responsive"
				src="
			<?php echo get_template_directory_uri(); ?>/images/ecocert.png"
				alt="Logo Ecocert" />
		</div>
	</div>
	<div class="col-md-2"></div>
</footer>
<?php wp_footer(); ?>
</div>
<!-- Fin .container -->
</body>
</html>
