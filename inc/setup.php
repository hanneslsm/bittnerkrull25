<?php

/**
 * Setup
 *
 * @package bittnerkrull25
 * @since 0.1
 * @link https://developer.wordpress.org/themes/block-themes/block-theme-setup/
 */



if (!function_exists('bittnerkrull25_setup')) :
	function bittnerkrull25_setup()
	{
		// Make theme available for translation.
		load_theme_textdomain('bittnerkrull25', get_template_directory() . '/languages');

		// Enqueue editor styles.
		add_editor_style('assets/css/editor-style.css');
	}
endif; // bittnerkrull25_setup
add_action('after_setup_theme', 'bittnerkrull25_setup');
