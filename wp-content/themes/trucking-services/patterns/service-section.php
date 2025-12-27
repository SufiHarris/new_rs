<?php
/**
 * Title: Service Section
 * Slug: trucking-services/service-section
 * Categories: trucking-services
 * Keywords: service-section
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"name":"Service Section"},"className":"service-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"},"margin":{"top":"var:preset|spacing|20","bottom":"0px"}}},"backgroundColor":"quaternary","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group service-section has-quaternary-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group service-head-box wow zoomIn" style="margin-bottom:40px"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"primary","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-poppins-font-family" style="font-size:18px;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html__( 'Our Services', 'trucking-services' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"right":"0","left":"0","top":"10px","bottom":"10px"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:10px;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:22px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Services We’re Offering', 'trucking-services' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"service-boxes","style":{"spacing":{"blockGap":{"top":"30px","left":"var:preset|spacing|50"},"margin":{"top":"30px"}}}} -->
<div class="wp-block-columns service-boxes" style="margin-top:30px"><!-- wp:column {"className":"service-card wow zoomIn"} -->
<div class="wp-block-column service-card wow zoomIn"><!-- wp:columns {"className":"service-img"} -->
<div class="wp-block-columns service-img"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":19,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-1.png" alt="" class="wp-image-19" style="border-radius:10px;width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"service-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-content"><!-- wp:group {"className":"service-icon","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"70px","justifyContent":"left"}} -->
<div class="wp-block-group service-icon has-primary-background-color has-background" style="border-radius:100px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":80,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"category-card-img is-style-default"} -->
<figure class="wp-block-image aligncenter size-full category-card-img is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-icon1.png" alt="" class="wp-image-80" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":5,"className":"service-card-title","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<h5 class="wp-block-heading has-text-align-left service-card-title has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:24px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__( 'Full Truckload Shipping', 'trucking-services' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-card-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="service-card-desc has-secondary-color has-text-color has-link-color has-poppins-font-family" style="font-size:17px;font-style:normal;font-weight:400"><?php echo esc_html__( 'End-to-end transport for large shipments with guaranteed delivery windows.', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"service-card-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-card-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"base","style":{"typography":{"fontSize":"15px","lineHeight":"1"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"100px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-secondary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-radius:100px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-size:15px;line-height:1"><img class="wp-image-25" style="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-arrow.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card wow zoomIn"} -->
<div class="wp-block-column service-card wow zoomIn"><!-- wp:columns {"className":"service-img"} -->
<div class="wp-block-columns service-img"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":19,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-2.png" alt="" class="wp-image-19" style="border-radius:10px;width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"service-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-content"><!-- wp:group {"className":"service-icon","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"70px","justifyContent":"left"}} -->
<div class="wp-block-group service-icon has-primary-background-color has-background" style="border-radius:100px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":81,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"category-card-img is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full category-card-img is-style-default" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-icon2.png" alt="" class="wp-image-81" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":5,"className":"service-card-title","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<h5 class="wp-block-heading has-text-align-left service-card-title has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:24px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__( 'Less Truckload Freight', 'trucking-services' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-card-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="service-card-desc has-secondary-color has-text-color has-link-color has-poppins-font-family" style="font-size:17px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Cost-effective shared transport for smaller loads. Cost-effective shared', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"service-card-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-card-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"base","style":{"typography":{"fontSize":"15px","lineHeight":"1"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"100px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-secondary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-radius:100px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-size:15px;line-height:1"><img class="wp-image-25" style="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-arrow.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"service-card wow zoomIn"} -->
<div class="wp-block-column service-card wow zoomIn"><!-- wp:columns {"className":"service-img"} -->
<div class="wp-block-columns service-img"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":19,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-3.png" alt="" class="wp-image-19" style="border-radius:10px;width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"service-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-content"><!-- wp:group {"className":"service-icon","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"70px","justifyContent":"left"}} -->
<div class="wp-block-group service-icon has-primary-background-color has-background" style="border-radius:100px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"id":87,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"category-card-img is-style-default"} -->
<figure class="wp-block-image aligncenter size-full category-card-img is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-icon3.png" alt="" class="wp-image-87" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":5,"className":"service-card-title","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<h5 class="wp-block-heading has-text-align-left service-card-title has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:24px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__( 'Refrigerated Transport', 'trucking-services' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-card-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="service-card-desc has-secondary-color has-text-color has-link-color has-poppins-font-family" style="font-size:17px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Temperature-controlled trucks for perishable goods.', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"service-card-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-card-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"base","style":{"typography":{"fontSize":"15px","lineHeight":"1"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"100px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-secondary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-radius:100px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-size:15px;line-height:1"><img class="wp-image-25" style="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-arrow.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->