<?php

/**
 * Patterns Setup
 *
 * @package bittnerkrull25
 * @since 0.1
 */


/**
 * Remove core patterns.
 * @link https://developer.wordpress.org/themes/patterns/registering-patterns/#removing-core-patterns
 */
add_action('after_setup_theme', 'bittnerkrull25_remove_core_patterns');

function bittnerkrull25_remove_core_patterns()
{
    remove_theme_support('core-block-patterns');
}

/**
 * Disable remote patterns
 * @link https://developer.wordpress.org/themes/patterns/registering-patterns/#disabling-remote-patterns
 */
add_filter('should_load_remote_block_patterns', '__return_false');


/**
 * Register custom pattern categories
 * @link https://developer.wordpress.org/themes/patterns/registering-patterns/#registering-a-pattern-category
 */

 add_action( 'init', 'bittnerkrull25_register_pattern_categories' );

 function bittnerkrull25_register_pattern_categories() {
	 register_block_pattern_category( 'bittnerkrull25/custom', array(
		 'label'       => __( 'BittnerKrull', 'bittnerkrull25' ),
		 'description' => __( 'Custom patterns for Bittner Krull.', 'bittnerkrull25' )
	 ) );
 }
