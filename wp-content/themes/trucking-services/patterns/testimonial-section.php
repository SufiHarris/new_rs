<?php
/**
 * Title: Testimonial Section
 * Slug: trucking-services/testimonial-section
 * Categories: trucking-services
 * Keywords: testimonial-section
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"name":"Testimonial Section"},"className":"testimonial-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"50px","top":"50px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"gradient":"section-background","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group testimonial-section has-section-background-gradient-background has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:group {"className":"test-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group test-head-box wow zoomIn" style="margin-bottom:40px"><!-- wp:heading {"textAlign":"center","className":"test-sec-title","style":{"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-text-align-center test-sec-title has-primary-color has-text-color has-link-color has-poppins-font-family" style="font-size:18px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'TESTIMONIALS', 'trucking-services' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"test-sec-desc","style":{"typography":{"fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="has-text-align-center test-sec-desc has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:12px;font-size:22px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__( 'What Our Clients Are Saying', 'trucking-services' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":" testimonial-col wow zoomIn","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-col wow zoomIn" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"owl-carousel"} -->
<div class="wp-block-columns owl-carousel"><!-- wp:column {"className":"testimonial-box","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column testimonial-box"><!-- wp:group {"className":"test-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group test-row"><!-- wp:group {"className":"test-img","style":{"border":{"width":"1px","color":"#1A83EA","radius":"100px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group test-img has-border-color" style="border-color:#1A83EA;border-width:1px;border-radius:100px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"id":214,"width":"75px","height":"75px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial1.png" alt="" class="wp-image-214" style="border-radius:100px;object-fit:cover;width:75px;height:75px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"test-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}},"border":{"radius":"20px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group test-content has-base-background-color has-background" style="border-radius:20px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"test-para","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="test-para has-secondary-color has-text-color has-link-color has-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.8"><?php echo esc_html__( 'Molestie odio inceptos adipiscing dui dictum. Sodales aptent hac tristique integer nullam in vestibulum. Hac feugiat placerat laoreet fames pharetra pede imperdiet sodales in.', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"test-author"} -->
<div class="wp-block-columns test-author"><!-- wp:column {"width":"70%","className":"test-author-info"} -->
<div class="wp-block-column test-author-info" style="flex-basis:70%"><!-- wp:paragraph {"className":"author-name","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"poppins"} -->
<p class="author-name has-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:600"><?php echo esc_html__( 'David Harper', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"author-post","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="author-post has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Supply Chain Manager', 'trucking-services' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%","className":"test-icon","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom test-icon" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:html -->
<i class="fa-solid fa-quote-right"></i>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"testimonial-box","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column testimonial-box"><!-- wp:group {"className":"test-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group test-row"><!-- wp:group {"className":"test-img","style":{"border":{"width":"1px","color":"#1A83EA","radius":"100px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group test-img has-border-color" style="border-color:#1A83EA;border-width:1px;border-radius:100px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"id":214,"width":"75px","height":"75px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial2.png" alt="" class="wp-image-214" style="border-radius:100px;object-fit:cover;width:75px;height:75px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"test-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}},"border":{"radius":"20px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group test-content has-base-background-color has-background" style="border-radius:20px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"test-para","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="test-para has-secondary-color has-text-color has-link-color has-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.8"><?php echo esc_html__( 'Molestie odio inceptos adipiscing dui dictum. Sodales aptent hac tristique integer nullam in vestibulum. Hac feugiat placerat laoreet fames pharetra pede imperdiet sodales in.', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"test-author"} -->
<div class="wp-block-columns test-author"><!-- wp:column {"width":"70%","className":"test-author-info"} -->
<div class="wp-block-column test-author-info" style="flex-basis:70%"><!-- wp:paragraph {"className":"author-name","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"poppins"} -->
<p class="author-name has-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Angela Curtis', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"author-post","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="author-post has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Operations Lead', 'trucking-services' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%","className":"test-icon","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom test-icon" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:html -->
<i class="fa-solid fa-quote-right"></i>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"testimonial-box","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column testimonial-box"><!-- wp:group {"className":"test-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group test-row"><!-- wp:group {"className":"test-img","style":{"border":{"width":"1px","color":"#1A83EA","radius":"100px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group test-img has-border-color" style="border-color:#1A83EA;border-width:1px;border-radius:100px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"id":214,"width":"75px","height":"75px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial3.png" alt="" class="wp-image-214" style="border-radius:100px;object-fit:cover;width:75px;height:75px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"test-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}},"border":{"radius":"20px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group test-content has-base-background-color has-background" style="border-radius:20px;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"test-para","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="test-para has-secondary-color has-text-color has-link-color has-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.8"><?php echo esc_html__( 'Molestie odio inceptos adipiscing dui dictum. Sodales aptent hac tristique integer nullam in vestibulum. Hac feugiat placerat laoreet fames pharetra pede imperdiet sodales in.', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"test-author"} -->
<div class="wp-block-columns test-author"><!-- wp:column {"width":"70%","className":"test-author-info"} -->
<div class="wp-block-column test-author-info" style="flex-basis:70%"><!-- wp:paragraph {"className":"author-name","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"poppins"} -->
<p class="author-name has-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Kristan Watson', 'trucking-services' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"author-post","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"secondary","fontFamily":"poppins"} -->
<p class="author-post has-secondary-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Business Manager', 'trucking-services' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%","className":"test-icon","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom test-icon" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:html -->
<i class="fa-solid fa-quote-right"></i>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->