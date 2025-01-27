<?php
/**
 * Title: home
 * Slug: bittnerkrull25/home
 * Inserter: no
 */
?>
<!-- wp:group {"className":"","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:template-part {"slug":"header-transparent","area":"uncategorized"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shutterstock_384927415.jpg","dimRatio":0,"isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"dvh","contentPosition":"bottom center","className":"is-style-bittnerkrull-hero","style":{"border":{"bottom":{"color":"var:preset|color|brand-7","width":"6px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"-90px"}},"color":{"duotone":"var:preset|duotone|duotone-brand"},"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-bittnerkrull-hero" style="border-bottom-color:var(--wp--preset--color--brand-7);border-bottom-width:6px;margin-top:-90px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);min-height:50dvh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shutterstock_384927415.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h1 class="wp-block-heading alignwide has-base-color has-text-color has-link-color"><?php esc_html_e('News', 'bittnerkrull25');?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"is-style-section-base","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"8px","width":"1px","color":"#EAEBED"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group is-style-section-base has-border-color" style="border-color:#EAEBED;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"100%","height":"100%","style":{"border":{"radius":"8px"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"rowSpan":1,"columnSpan":2}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Mehr lesen","excerptLength":26} /--></div>
<!-- /wp:group --></div>
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