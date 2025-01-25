<?php
/**
 * Title: Testimonials 02
 * Slug: bittnerkrull25/testimonials-02
 * Categories: bittnerkrull25/custom
 */
?>
<!-- wp:group {"metadata":{"categories":["Testimonials"],"patternName":"bittnerkrull25/testimonials-2","name":"Testimonials 2"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"var:preset|spacing|40","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"128px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt="" style="aspect-ratio:1;object-fit:cover;width:128px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */
echo sprintf( esc_html__( '%1$s“Sit itaque minima aut architecto nesciunt aut vero nobis? Nam autem corporis est ullam natus et doloremque consequatur ut consequatur delectus.%2$s', 'bittnerkrull25' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
echo sprintf( esc_html__( '%1$sLorenz Ipsum%2$s', 'bittnerkrull25' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('CEO', 'bittnerkrull25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
