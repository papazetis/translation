<?php
/**
 * translation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package translation
 */

if ( ! function_exists( 'translation_setup' ) ) :

	function translation_setup() {

		load_theme_textdomain( 'translation', get_template_directory() . '/languages' );

	}
endif;
add_action( 'after_setup_theme', 'translation_setup' );


/**
 * Enqueue scripts and styles.
 */
function translation_scripts() {
	wp_enqueue_style( 'translation-style', get_stylesheet_uri() );

	wp_register_script( 'translation-script', get_template_directory_uri() .'/js/translation.js', array( 'jquery', 'wp-i18n' ), '0.0.1' );

	wp_set_script_translations( 'translation-script', 'translation', get_template_directory() . '/languages' );

	wp_enqueue_script( 'translation-script' );
}
add_action( 'wp_enqueue_scripts', 'translation_scripts' );

