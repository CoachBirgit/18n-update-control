<?php
/**
 * Plugin Name: i18n Update Control
 * Plugin URI: https://github.com/CoachBirgit/18n-update-control
 * Description: Disable automatic translation updates for Core, Plugins and Themes. No options, only activating
 * Version: 1.1
 * Author: CoachBirgit
 * Author URI: http://www.coachbirgit.de
 * License: GPLv2 or later
 */
 /*  Copyright 2015   

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function i18n_update_control_filter( $update, $update_offer ) {

	//$disabled_types = array( 'core' );
	//$disabled_types = array( 'core', 'theme' );
	$disabled_types = array( 'core', 'theme', 'plugin' );

	if ( in_array( $update_offer->type, $disabled_types ) ) {
		return FALSE;
	}

	return $update;
}

add_filter( 'async_update_translation', 'i18n_update_control_filter', 10, 2 );
add_filter( 'auto_update_translation', 'i18n_update_control_filter', 10, 2 );
?>
