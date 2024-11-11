<?php
/**
 * Title: Headline A - Image + Kicker + Intro
 * Slug: bittnerkrull25/headline-a-image-kicker-intro
 * Categories: Headlines
 */
?>
<!-- wp:group {"metadata":{"name":"Heading"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"72px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-3E0847B1-8508-46B6-A63F-D9152E444F8D-1024x682.png" alt="" class="" style="border-radius:999px;aspect-ratio:1;object-fit:cover;width:72px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"metadata":{"name":"Kicker"},"className":"is-style-paragraph-kicker"} -->
<p class="is-style-paragraph-kicker"><?php esc_html_e('Kicker Text goes here', 'bittnerkrull25');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Medium heading with about six words.', 'bittnerkrull25');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"is-style-paragraph-intro"} -->
<p class="is-style-paragraph-intro"><?php esc_html_e('Ab consectetur cupiditate qui optio numquam At earum magnam cum molestiae quam qui ducimus ratione At nulla nemo. Aut alias vitae ut odit reprehenderit qui exercitationem repellendus aut illo suscipit et quia iste sit dolorem aspernatur.', 'bittnerkrull25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
