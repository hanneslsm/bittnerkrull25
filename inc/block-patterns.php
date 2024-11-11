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


function register_custom_block_patterns() {
    // Define the directory path for the patterns
    $patterns_dir = get_stylesheet_directory() . '/patterns/';

    // Check if the directory exists
    if ( ! file_exists( $patterns_dir ) ) {
        return;
    }

    // Get all PHP files in the patterns directory
    $pattern_files = glob( $patterns_dir . '*.php' );

    // Exclude specific files
    $excluded_files = array( 'header.php', 'footer.php', 'index.php' );

    $pattern_files = array_filter( $pattern_files, function( $file ) use ( $excluded_files ) {
        return ! in_array( basename( $file ), $excluded_files );
    } );

    // Array to collect all categories
    $all_categories = array();

    // First, collect all categories from pattern files
    foreach ( $pattern_files as $file ) {
        // Extract metadata from the file header
        $file_data = get_file_data( $file, array(
            'Title'      => 'Title',
            'Slug'       => 'Slug',
            'Categories' => 'Categories',
        ) );

        if ( ! empty( $file_data['Categories'] ) ) {
            $categories = array_map( 'trim', explode( ',', $file_data['Categories'] ) );
            $categories = array_map( 'sanitize_title', $categories );
            $all_categories = array_merge( $all_categories, $categories );
        }
    }

    // Remove duplicate categories
    $all_categories = array_unique( $all_categories );

    // Register categories before patterns
    foreach ( $all_categories as $category ) {
        register_block_pattern_category(
            $category,
            array(
                'label' => __( ucfirst( $category ), 'bittnerkrull25' ),
            )
        );
    }

    // Now register the block patterns
    foreach ( $pattern_files as $file ) {
        // Extract metadata from the file header
        $file_data = get_file_data( $file, array(
            'Title'      => 'Title',
            'Slug'       => 'Slug',
            'Categories' => 'Categories',
        ) );

        $title = sanitize_text_field( $file_data['Title'] );
        $slug  = sanitize_title( $file_data['Slug'] );
        $categories = array();

        if ( ! empty( $file_data['Categories'] ) ) {
            $categories = array_map( 'trim', explode( ',', $file_data['Categories'] ) );
            $categories = array_map( 'sanitize_title', $categories );
        }

        // Start output buffering to capture the content
        ob_start();
        include $file;
        $pattern_content = ob_get_clean();

        $pattern_content = trim( $pattern_content );

        // Ensure slug has a namespace
        if ( ! empty( $slug ) && ! empty( $pattern_content ) ) {
            $slug_with_namespace = 'bittnerkrull25/' . $slug;

            register_block_pattern(
                $slug_with_namespace,
                array(
                    'title'      => __( $title, 'bittnerkrull25' ),
                    'categories' => $categories,
                    'content'    => $pattern_content,
                )
            );
        }
    }
}
add_action( 'init', 'register_custom_block_patterns' );
