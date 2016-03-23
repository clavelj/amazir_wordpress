<?php
require_once locate_template ( '/lib/vendors/wp_bootstrap_navwalker.php' );
?>
<div class="col-md-12">

	<div class="col-md-2"></div>
	<div class="margin-footer col-md-8">
	<nav class="navbar" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar-menu">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>			
							<?php
							wp_nav_menu ( array (
									'menu' => 'primary_navigation',
									'theme_location' => 'primary_navigation',
									'depth' => 2,
									'container' => 'div',
									'container_class' => 'collapse navbar-collapse',
									'container_id' => 'bs-example-navbar-collapse-1',
									'menu_class' => 'menu-header  nav ',
									'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
									'walker' => new wp_bootstrap_navwalker () 
							) );
							?>
						</div>
	</nav></div>
	
	<div class="col-md-2"></div>
</div>
