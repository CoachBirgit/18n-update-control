# 18n-update-control
Disable automatic translation updates for Core, Plugins and Themes

For fine adjustment you can comment out, which parts you want to disable. 

Only Core:

	$disabled_types = array( 'core' );
	//$disabled_types = array( 'core', 'theme' );
	//$disabled_types = array( 'core', 'theme', 'plugin' );
	
Core and Themes:

	//$disabled_types = array( 'core' );
	$disabled_types = array( 'core', 'theme' );
	//$disabled_types = array( 'core', 'theme', 'plugin' );
	
Core, Themes and Plugins: 

	//$disabled_types = array( 'core' );
	//$disabled_types = array( 'core', 'theme' );
	$disabled_types = array( 'core', 'theme', 'plugin' );
