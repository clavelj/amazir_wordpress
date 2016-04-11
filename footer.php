<?php global $redux_starter;?>
</div>
</div>
<div class="post col-md-12 footercontent  col-sm-12" style="">
<footer id="footer" class="row">
	<div class="col-md-2  col-sm-2  hidden-xs"></div>
	<div class="col-md-8  col-sm-8 col-xs-12">
		<div class="header-center col-md-3  col-sm-3 footersmall">
					<?php
					wp_nav_menu ( array (
							'menu' => 'secondary_navigation',
							'container' => 'div',
							'container_class' => 'menu-header menu-footer text-left footerpadding' 
							
					) );
					?>
					</div>
		<div class="col-md-3  col-sm-3 text-footer footersmall footerpadding">
<?php echo $redux_starter ['text-footer1'];?>

 </div>
		<div class="col-md-3 col-sm-3 text-footer footersmall">
	<img class="img-responsive imgfooter center-block footerpaddingimg"
				src="
			<?php echo get_template_directory_uri(); ?>/images/usda.png"
				alt="Logo Ecocert" />
</div>
		<div class="col-md-3  col-sm-3 footersmall">
			<img class="img-responsive imgfooter center-block footerpaddingimg"
				src="
			<?php echo get_template_directory_uri(); ?>/images/ecocert.png"
				alt="Logo Ecocert" />
		</div>
	</div>
	<div class="col-md-2  col-sm-2 hidden-xs"></div>
</footer>
</div>
<?php wp_footer(); ?>
</div>
<!-- Fin .container -->
</body>
</html>
