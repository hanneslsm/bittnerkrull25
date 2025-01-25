<?php
/**
 * Title: single-case_studies
 * Slug: single-case_studies
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-transparent","area":"uncategorized"} /-->

<!-- wp:group {"className":"","style":{"spacing":{"margin":{"top":"-90px","bottom":"0"},"blockGap":"0","padding":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:-90px;margin-bottom:0;padding-top:0px"><!-- wp:group {"style":{"dimensions":{"minHeight":"430px"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/CaseStudy-blue.png","id":3432,"source":"file","title":"CaseStudy-blue"},"backgroundSize":"cover","backgroundAttachment":"scroll"},"border":{"bottom":{"color":"var:preset|color|brand-7","width":"6px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--brand-7);border-bottom-width:6px;min-height:430px"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"82.5rem","wideSize":""}} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"bottom":"-6px"}},"border":{"radius":{"topLeft":"8px","topRight":"8px"}}},"backgroundColor":"base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-content {"align":"wide","className":"","layout":{"type":"default"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"tagName":"aside","className":"top-50","style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<aside class="wp-block-group top-50"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image /-->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */
echo sprintf( esc_html__( '%1$sEingesetzte Produkte von B+K%2$s', 'bittnerkrull25' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-post-terms-products","fontSize":"medium"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the start of a 'strong' HTML element, 3. is the end of a 'strong' HTML element, 4. is the end of a 'strong' HTML element */
echo sprintf( esc_html__( '%1$s%2$sInteressieren Sie sich für eines unserer Produkte?%3$s%4$s', 'bittnerkrull25' ), '<strong>', '<strong>', '</strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'a' HTML element, 3. is the end of a 'a' HTML element */
echo sprintf( esc_html__( 'Rufen Sie uns einfach an unter:%1$s %2$s+49 89 458 59 50%3$s', 'bittnerkrull25' ), '<br>', '<a href="' . esc_url( 'tel:+49894585950' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'a' HTML element, 3. is the end of a 'a' HTML element */
echo sprintf( esc_html__( 'Oder schreiben Sie uns: %1$s%2$sinfo@bittner-krull.de%3$s.', 'bittnerkrull25' ), '<br>', '<a href="' . esc_url( 'mailto:info@bittner-krull.de' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></aside>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group -->
