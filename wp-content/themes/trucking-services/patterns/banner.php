<?php
/**
 * Title: Banner
 * Slug: trucking-services/banner
 * Categories: trucking-services
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-bg.png","id":97,"dimRatio":0,"isUserOverlayColor":true,"minHeight":600,"sizeSlug":"large","className":"banner-section","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-cover banner-section" style="min-height:600px"><img class="wp-block-cover__image-background wp-image-97 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-bg.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-col"} -->
<div class="wp-block-columns banner-col"><!-- wp:column {"width":"35%","className":"banner-left wow fadeInLeft","style":{"border":{"radius":"20px","width":"0px","style":"none"}}} -->
<div class="wp-block-column banner-left wow fadeInLeft" style="border-style:none;border-width:0px;border-radius:20px;flex-basis:35%"><!-- wp:group {"className":"banner-content","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-content has-base-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"className":"banner-heading","style":{"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"body"} -->
<h2 class="wp-block-heading banner-heading has-secondary-color has-text-color has-link-color has-body-font-family" style="font-size:44px;font-style:normal;font-weight:600"><?php echo esc_html__( 'A Safe Journey Is a Better Delivery', 'trucking-services' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary","fontFamily":"body"} -->
<p class="banner-para has-secondary-color has-text-color has-link-color has-body-font-family" style="font-size:20px;font-style:normal;font-weight:400"><?php echo esc_html__( 'RoadFleet Logistics ensures secure, on-time, and efficient freight transportation across all major routes.', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","className":"banner-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"},"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"fontFamily":"poppins"} -->
<div class="wp-block-button banner-button"><a class="wp-block-button__link has-base-color has-text-color has-link-color has-poppins-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:10px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20);font-size:14px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Get a Quote', 'trucking-services' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%","className":"banner-right"} -->
<div class="wp-block-column banner-right" style="flex-basis:65%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->