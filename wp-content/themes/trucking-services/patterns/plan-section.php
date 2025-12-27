<?php
/**
 * Title: Plan Section
 * Slug: trucking-services/plan-section
 * Categories: trucking-services
 * Keywords: plan-section
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"name":"Plan Section"},"className":"plan-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"50px","top":"50px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"gradient":"section-background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group plan-section has-section-background-gradient-background has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/plan-bg.jpg","id":144,"dimRatio":90,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":700,"sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;min-height:700px"><img class="wp-block-cover__image-background wp-image-144 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/plan-bg.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"blog-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group blog-head-box wow zoomIn" style="margin-bottom:40px"><!-- wp:heading {"textAlign":"center","className":"blog-sec-title","style":{"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-text-align-center blog-sec-title has-primary-color has-text-color has-link-color has-poppins-font-family" style="font-size:18px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Blog', 'trucking-services' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"blog-sec-desc","style":{"typography":{"fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"base","fontFamily":"poppins"} -->
<p class="has-text-align-center blog-sec-desc has-base-color has-text-color has-link-color has-poppins-font-family" style="margin-top:12px;font-size:22px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__( 'Latest News & Insights', 'trucking-services' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":14,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query wow fadeInLeft"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:columns {"className":"plan-image","style":{"border":{"radius":"20px"}}} -->
<div class="wp-block-columns plan-image" style="border-radius:20px"><!-- wp:column {"className":"plan-img-col"} -->
<div class="wp-block-column plan-img-col"><!-- wp:group {"className":"blog-card-img-box","style":{"color":{"background":"#e4e4e4"},"dimensions":{"minHeight":"200px"},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-card-img-box has-background" style="border-radius:20px;background-color:#e4e4e4;min-height:200px"><!-- wp:post-featured-image {"isLink":true,"height":"200px","align":"center","className":"blog-card-img","style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"bottom","className":"plan-content","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"base"} -->
<div class="wp-block-columns are-vertically-aligned-bottom plan-content has-base-background-color has-background" style="border-radius:20px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","textAlign":"center","className":"blog-card-category","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"poppins"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"className":"blog-card-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"1.5"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"primary","textColor":"base","fontFamily":"poppins"} /-->

<!-- wp:post-excerpt {"textAlign":"center","moreText":"\u003cimg class=\u0022wp-image-6\u0022 style=\u0022width: 16px;\u0022 src=<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-arrow.png alt=\u0022\u0022\u003e","excerptLength":15,"className":"blog-card-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"12px"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"secondary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->