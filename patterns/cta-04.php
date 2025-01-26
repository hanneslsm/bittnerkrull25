<?php
/**
 * Title: CTA 04
 * Slug: bittnerkrull25/cta-04
 * Categories: bittnerkrull25/custom25/custom
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","className":"is-style-section-base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-section-base-2" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:image {"lightbox":{"enabled":false},"width":"64px","height":"64px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt="" style="border-radius:999px;object-fit:cover;width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
echo sprintf( esc_html__( '%1$sAut consequatur explicabo.%2$s', 'bittnerkrull25' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Ex natus nulla a reprehenderit vero. Ut tempore internos est fuga voluptatum eum odio vero et doloribus magnam.', 'bittnerkrull25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Schedule a call', 'bittnerkrull25');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
