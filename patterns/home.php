<?php
/**
 * Title: home
 * Slug: bittnerkrull25/home
 * Inserter: no
 */
?>
<!-- wp:group {"className":"","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:template-part {"slug":"header-transparent","area":"uncategorized"} /-->

<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":540,"minHeightUnit":"px","contentPosition":"bottom center","isDark":false,"className":"is-style-bittnerkrull-hero","style":{"border":{"bottom":{"color":"var:preset|color|brand-7","width":"6px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"-90px"}},"color":{"duotone":"var:preset|duotone|duotone-brand"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-bittnerkrull-hero" style="border-bottom-color:var(--wp--preset--color--brand-7);border-bottom-width:6px;margin-top:-90px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide"><?php esc_html_e('News', 'bittnerkrull25');?></h1>
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

<!-- wp:group {"className":"is-style-section-base-2","layout":{"type":"constrained"}} -->
<div id="newsletter" class="wp-block-group is-style-section-base-2"><!-- wp:spacer {"height":"48px","style":{"layout":[]}} -->
<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('B+K News, direkt ins Postfach', 'bittnerkrull25');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('Erhalten Sie exklusive Einblicke in neue Produkte, spannende Success Stories und Neuigkeiten rund um Bittner+Krull per E-Mail.', 'bittnerkrull25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":null,"columnCount":1}} -->
<div class="wp-block-group alignwide"><!-- wp:cover {"url":"https://stdlsm.com/bittnerkrull//wp-content/uploads/2024/10/luca-bravo-YoelVcKWmws-unsplash-scaled.jpg","hasParallax":true,"isUserOverlayColor":true,"minHeight":319,"minHeightUnit":"px","customGradient":"linear-gradient(90deg,rgb(0,79,113) 31%,rgba(0,79,112,0) 100%)","contentPosition":"center left","style":{"color":{"duotone":"var:preset|duotone|duotone-brand"},"border":{"radius":"16px","bottom":{"color":"#82FFFF","width":"6px"}},"spacing":{"blockGap":"var:preset|spacing|10","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}},"heading":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-cover has-parallax has-custom-content-position is-position-center-left has-base-color has-text-color has-link-color" style="border-radius:16px;border-bottom-color:#82FFFF;border-bottom-width:6px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:319px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgb(0,79,113) 31%,rgba(0,79,112,0) 100%)"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(https://stdlsm.com/bittnerkrull//wp-content/uploads/2024/10/luca-bravo-YoelVcKWmws-unsplash-scaled.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:html -->
<form class="layout_form cr_form cr_font" action="https://seu2.cleverreach.com/f/136214-335065/wcs/" method="post" target="_blank">
<div class="cr_body cr_page cr_font formbox">
<div class="non_sortable">
</div>
<div class="editable_content">
<div id="7508929" rel="email" class="cr_ipe_item ui-sortable musthave" >
<label for="text7508929" class="itemname">E-Mail*</label> <input id="text7508929" name="email" value="" type="text"  />
</div><div id="7511846" rel="checkbox" class="cr_ipe_item ui-sortable musthave" >
<label class="itemname">Einwilligung*</label>
<div >

<input id="Ich akzeptiere die Datenschutzerklärung7511846" class="cr_ipe_checkbox" name="1250437[]" value="Ich akzeptiere die Datenschutzerklärung" type="checkbox"  />Ich akzeptiere die Datenschutzerklärung&nbsp;

</div>
<br  />
</div><div id="7508936" rel="button" class="cr_ipe_item ui-sortable submit_container" >
<button type="submit" class="cr_button">B+K News abonnieren</button>
</div>
</div>
<noscript><a href="http://www.cleverreach.de">www.CleverReach.de</a></noscript>
</div>


</form>
<!-- /wp:html --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"48px","style":{"layout":[]}} -->
<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:block {"ref":925} /-->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group -->
