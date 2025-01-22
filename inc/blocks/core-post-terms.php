<?php
/**
 * Enqueue frontend and editor styles
 *
 * @package bittnerkrull25
 * @since 1.3.0
 */

// Strip all HTML (including <a>) from tag links.
add_filter( 'term_links-post_tag', function( $links ) {
    return array_map( 'strip_tags', $links );
});
