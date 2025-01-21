<?php

/**
 * Setup
 *
 * @package bittnerkrull25
 * @since 1.3.0
 */

 /**
  * Remove hyperlinks from tag taxonomy terms.
  */

  add_filter( 'term_links-post_tag', function( $links ) {
    return array_map( 'strip_tags', $links );
});
