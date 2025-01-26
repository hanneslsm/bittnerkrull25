<?php
/**
 * Title: CTA 07
 * Slug: bittnerkrull25/cta-07
 * Categories: bittnerkrull25/custom25/custom
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png","isUserOverlayColor":true,"minHeight":150,"minHeightUnit":"px","customGradient":"linear-gradient(90deg,rgb(255,255,255) 0%,rgba(255,255,255,0.31) 51%,rgb(255,255,255) 100%)","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"textColor":"contrast-3"} -->
<div class="wp-block-cover alignwide has-contrast-3-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:150px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgb(255,255,255) 0%,rgba(255,255,255,0.31) 51%,rgb(255,255,255) 100%)"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
echo sprintf( esc_html__( '%1$sAut consequatur explicabo.%2$s', 'bittnerkrull25' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Ex natus nulla a reprehenderit vero. Ut tempore internos est fuga voluptatum eum odio vero et doloribus magnam.', 'bittnerkrull25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Schedule a call', 'bittnerkrull25');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
