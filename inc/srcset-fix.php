<?php
/**
 * Fix srcset and sizes attributes on cover block images.
 *
 * @package bittnerkrull25
 * @since 1.8.1
 * @link https://github.com/WordPress/gutenberg/issues/61220
 */



function bittnerkrull25_prevent_responsive_images_on_cover_block( $original_response, $image, $context, $attachment_id ){
	$processor = new WP_HTML_Tag_Processor($image);
	if( $processor->next_tag('img') && $processor->has_class( 'wp-block-cover__image-background' )){
		return false;
	}
	return $original_response;
}
add_filter( 'wp_img_tag_add_srcset_and_sizes_attr', 'bittnerkrull25_prevent_responsive_images_on_cover_block', 10, 4 );
