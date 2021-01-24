<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

 /* Generador de paletas de color */

add_filter( 'generate_default_color_palettes', 'tu_custom_color_palettes' );
function tu_custom_color_palettes( $palettes ) {
	$palettes = array(
		'#000000',
		'#FFFFFF',
		'#F1C40F',
		'#E74C3C',
		'#1ABC9C',
		'#1e72bd',
		'#8E44AD',
		'#00CC77',
	);
	
	return $palettes;
}