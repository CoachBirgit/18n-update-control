=== i18n Update Control ===
Contributors: CoachBirgit, ocean96
Tags: auto updates, translation updates
Requires at least: 4.0
Tested up to: 4.1
Stable tag: trunk
License: GPLv2 or later

Disable automatic translation updates for Core, Plugins and Themes. No options, only activating

== Description ==
If you use a non standard translation for your installation, you struggle with translation updates everytime, you install a plugin, a theme or update you core. 

With this plugin you can choose, which updates you want or want to disable. 

Open i18n-update-control.php and comment out, what you need. 

Only Core:

	`$disabled_types = array( 'core' );`
	`//$disabled_types = array( 'core', 'theme' );`
	`//$disabled_types = array( 'core', 'theme', 'plugin' );`
	
Core and Themes:

	`//$disabled_types = array( 'core' );`
	`$disabled_types = array( 'core', 'theme' );`
	`//$disabled_types = array( 'core', 'theme', 'plugin' );`
	
Core, Themes and Plugins: 

	`//$disabled_types = array( 'core' );`
	`//$disabled_types = array( 'core', 'theme' );`
	`$disabled_types = array( 'core', 'theme', 'plugin' );`


== Installation ==
# Requirements
WordPress version 4.0 and later, see tested up to
PHP 5.4
Single or Multisite installation

# Installation
* Unpack the download-package
* Upload folder include the file to the /wp-content/plugins/ directory.
* Activate the plugin through the Plugins menu in WordPress
* or use the installer via backend of WordPress

== Changelog ==
*1.1*
initial release as plugin by CoachBirgit

*1.0*
initial release as DropIn by ocean96
