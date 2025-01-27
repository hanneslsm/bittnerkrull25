<?php
/**
 * Title: archive-case_studies
 * Slug: bittnerkrull25/archive-case_studies
 * Inserter: no
 */
?>
<!-- wp:group {"className":"","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:template-part {"slug":"header-transparent","area":"uncategorized"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/DACH-Raum_neu-1-scaled.jpg","dimRatio":0,"isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"dvh","contentPosition":"bottom center","className":"is-style-bittnerkrull-hero","style":{"border":{"bottom":{"color":"var:preset|color|brand-7","width":"6px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"-90px"}},"color":{"duotone":"var:preset|duotone|duotone-brand"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-bittnerkrull-hero" style="border-bottom-color:var(--wp--preset--color--brand-7);border-bottom-width:6px;margin-top:-90px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);min-height:50dvh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/DACH-Raum_neu-1-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h1 class="wp-block-heading alignwide has-base-color has-text-color has-link-color"><?php esc_html_e('Case Studies', 'bittnerkrull25');?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"brand-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-6-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p><?php esc_html_e('Unsere Lösungen in den Bereichen Netzservice und Metering kommen im gesamten deutschsprachigen Raum zum Einsatz. Werfen Sie einen Blick auf unsere Referenzen und lassen Sie sich von ausgewählten Case Studies überzeugen.', 'bittnerkrull25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"case_studies","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"8px","width":"1px","color":"#EAEBED"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:#EAEBED;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Case Study lesen","excerptLength":26} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"","height":"","style":{"border":{"width":"1px","color":"#EAEBED","radius":"8px"},"shadow":"var:preset|shadow|large"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sKeine Blogbeiträge gefunden.%2$s', 'bittnerkrull25' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-base-2","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-base-2"><!-- wp:block {"ref":3937} /-->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:block {"ref":925} /-->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group -->