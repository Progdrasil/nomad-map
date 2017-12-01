<?php
/*
Plugin Name: Nomad Map
Plugin URI: https://github.com/Progdrasil/nomad-map
Version: 0.1.0
Author: Rene Leveille
Author URI: https://progdrasil.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
Text Domain: nomad-map
Description: An automatic interactive map that places a marker for each geolocated post.
*/

// HOOKS
add_action('init', 'nm_register_shortcodes');

// SHORTCODES
function nm_register_shortcodes() {
	add_shortcode('nomad-map', 'nm_display_map_shortcode');
}

function nm_display_map_shortcode( $args ) {
	return '<p> I AM THE AWESOME MAP </p>';
}


?>
