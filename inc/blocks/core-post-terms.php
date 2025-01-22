<?php
/**
 * Enqueue frontend and editor styles
 *
 * @package bittnerkrull25
 * @since 1.3.0
 */


 /**
 * Registers a custom style for the Post Terms block.
 */
function bittnerkrull25_register_post_terms_styles() {
    register_block_style(
        'core/post-terms',
        array(
            'name'  => 'post-terms-events',
            'label' => __( 'Events', 'bittnerkrull25' ),
        )
    );

    register_block_style(
        'core/post-terms',
        array(
            'name'  => 'post-terms-products',
            'label' => __( 'Case Study Products', 'bittnerkrull25' ),
        )
    );
}
add_action( 'init', 'bittnerkrull25_register_post_terms_styles' );




/**
 * .is-style-post-terms-events
 * .is-style-post-terms-products
 * Replace links with spans and remove separators
 */

function bittnerkrull25_filter_post_terms_block_output( $block_content, $block ) {
    // Only modify the 'core/post-terms' block
    if ( isset( $block['blockName'] ) && 'core/post-terms' === $block['blockName'] ) {

        // Check if the block has the 'is-style-post-terms-events' or 'is-style-post-terms-products' class.
        if ( isset( $block['attrs']['className'] ) ) {
            $class_name = $block['attrs']['className'];

            // If the block has EITHER style...
            if ( false !== strpos( $class_name, 'is-style-post-terms-events' )
                 || false !== strpos( $class_name, 'is-style-post-terms-products' ) ) {

                // 1. Replace <a ...>Term</a> with <span>Term</span>
                $block_content = preg_replace(
                    '#<a[^>]*>([^<]+)</a>#',
                    '<span>$1</span>',
                    $block_content
                );

                // 2. Remove the default separator
                //    (e.g., <span class="wp-block-post-terms__separator">, </span>)
                $block_content = preg_replace(
                    '#<span class="wp-block-post-terms__separator">[^<]*</span>#',
                    '',
                    $block_content
                );
            }
        }
    }

    return $block_content;
}
add_filter( 'render_block', 'bittnerkrull25_filter_post_terms_block_output', 10, 2 );
