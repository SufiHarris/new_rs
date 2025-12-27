<?php
/**
 * Title: Footer
 * Slug: trucking-services/footer
 * Categories: footer,trucking-services
 * Keywords: footer
 * Block Types: core/template-part/footer
 */
$trucking_services_pluginsList = get_option( 'active_plugins' );
$trucking_services_plugin = 'contact-form-7/wp-contact-form-7.php';
$trucking_services_results = in_array( $trucking_services_plugin , $trucking_services_pluginsList);
if ( $trucking_services_results )  {
?>

<!-- wp:group {"className":"footer-form","layout":{"type":"constrained"}} -->
<div class="wp-block-group footer-form"><!-- wp:shortcode /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"footer-outer","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group footer-outer" style="margin-top:40px"><!-- wp:group {"align":"full","className":"footer-section","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group alignfull footer-section has-secondary-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;padding-right:0px;padding-left:0px"><!-- wp:columns {"className":"footer-boxes","style":{"spacing":{"padding":{"top":"40px","bottom":"25px"},"blockGap":{"top":"30px"}}}} -->
<div class="wp-block-columns footer-boxes" style="padding-top:40px;padding-bottom:25px"><!-- wp:column {"className":"footer-box1 wow bounceInUp","style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column footer-box1 wow bounceInUp" style="padding-right:var(--wp--preset--spacing--50)"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"30px"}},"textColor":"base"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:14px"><em><?php echo esc_html__( 'RoadFleet Logistics provides safe, efficient, and affordable trucking and freight solutions. We’re committed to keeping your goods moving — safely and on time.', 'trucking-services' ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-phone","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="footer-phone has-base-color has-text-color has-link-color" style="font-size:14px"><a href="tel:1234567890"><i class="fa-solid fa-phone"></i><?php echo esc_html__( '+1234567890', 'trucking-services' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-mail","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="footer-mail has-base-color has-text-color has-link-color" style="font-size:14px"><a href="mailto:trucking@example.com"><i class="fa-regular fa-envelope"></i><?php echo esc_html__( 'trucking@example.com', 'trucking-services' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-location","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="footer-location has-base-color has-text-color has-link-color" style="font-size:14px"><a href="#"><i class="fa-solid fa-location-dot"></i><?php echo esc_html__( '300 Lane, Los Angeles, CA 90028, USA', 'trucking-services' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-box2 wow bounceInUp"} -->
<div class="wp-block-column footer-box2 wow bounceInUp"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontFamily":"heading"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-heading-font-family" style="font-size:26px;font-style:normal;font-weight:500;text-transform:capitalize"><em><?php echo esc_html__( 'Explore', 'trucking-services' ); ?></em></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"base","overlayMenu":"never","icon":"menu","overlayBackgroundColor":"secondary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"blockGap":"12px"},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"capitalize","fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} --><!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-box3 wow bounceInUp"} -->
<div class="wp-block-column footer-box3 wow bounceInUp"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontFamily":"heading"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-heading-font-family" style="font-size:26px;font-style:normal;font-weight:500;text-transform:capitalize"><em><?php echo esc_html__( 'Our Services', 'trucking-services' ); ?></em></h4>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"fontSize":"14px"}}} -->
<ul style="font-size:14px" class="wp-block-list"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Full Truckload  Shipping', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Less Than Truckload  Freight', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Refrigerated Transport', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Express Cargo Delivery', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Cross-Border Logistics', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Warehouse & Distribution', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-box4 wow bounceInUp"} -->
<div class="wp-block-column footer-box4 wow bounceInUp"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontFamily":"heading"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-heading-font-family" style="font-size:26px;font-style:normal;font-weight:500;text-transform:capitalize"><em><?php echo esc_html__( 'social media', 'trucking-services' ); ?></em></h4>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"showLabels":true,"className":"is-style-logos-only footer-social-box","layout":{"type":"flex","orientation":"vertical"}} -->
<ul class="wp-block-social-links has-visible-labels has-icon-color is-style-logos-only footer-social-box"><!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.x.com","service":"x"} /-->

<!-- wp:social-link {"url":"www.pinterest.com","service":"pinterest"} /-->

<!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","className":"footer-copyright","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"30px","bottom":"30px"}},"border":{"top":{"color":"var:preset|color|base","width":"1px"}}},"textColor":"base"} -->
<p class="has-text-align-center footer-copyright has-base-color has-text-color has-link-color" style="border-top-color:var(--wp--preset--color--base);border-top-width:1px;padding-top:30px;padding-bottom:30px"><?php echo esc_html__( 'Trucking Services Theme By Classic Templates', 'trucking-services' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"scroll-top-btn","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button scroll-top-btn"><a class="wp-block-button__link wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><i class="fa-solid fa-angles-up"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<?php } else { ?>

<!-- wp:group {"className":"footer-form","layout":{"type":"constrained"}} -->
<div class="wp-block-group footer-form"><!-- wp:html -->
<div class="signup-wrapper">
  <form class="signup-form">
    <input type="text" placeholder="Name" class="input-field" />
    <input type="email" placeholder="Email" class="input-field" />
    <button type="submit" class="signup-btn"><?php echo esc_html__( 'Sign Up', 'trucking-services' ); ?></button>
  </form>
</div>

<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"footer-outer","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group footer-outer" style="margin-top:40px"><!-- wp:group {"align":"full","className":"footer-section","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group alignfull footer-section has-secondary-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;padding-right:0px;padding-left:0px"><!-- wp:columns {"className":"footer-boxes","style":{"spacing":{"padding":{"top":"40px","bottom":"25px"},"blockGap":{"top":"30px"}}}} -->
<div class="wp-block-columns footer-boxes" style="padding-top:40px;padding-bottom:25px"><!-- wp:column {"className":"footer-box1 wow bounceInUp","style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column footer-box1 wow bounceInUp" style="padding-right:var(--wp--preset--spacing--50)"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"30px"}},"textColor":"base"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:14px"><em><?php echo esc_html__( 'RoadFleet Logistics provides safe, efficient, and affordable trucking and freight solutions. We’re committed to keeping your goods moving — safely and on time.', 'trucking-services' ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-phone","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="footer-phone has-base-color has-text-color has-link-color" style="font-size:14px"><a href="tel:1234567890"><i class="fa-solid fa-phone"></i><?php echo esc_html__( '+1234567890', 'trucking-services' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-mail","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="footer-mail has-base-color has-text-color has-link-color" style="font-size:14px"><a href="mailto:trucking@example.com"><i class="fa-regular fa-envelope"></i><?php echo esc_html__( 'trucking@example.com', 'trucking-services' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-location","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="footer-location has-base-color has-text-color has-link-color" style="font-size:14px"><a href="#"><i class="fa-solid fa-location-dot"></i><?php echo esc_html__( '300 Lane, Los Angeles, CA 90028, USA', 'trucking-services' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-box2 wow bounceInUp"} -->
<div class="wp-block-column footer-box2 wow bounceInUp"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontFamily":"heading"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-heading-font-family" style="font-size:26px;font-style:normal;font-weight:500;text-transform:capitalize"><em><?php echo esc_html__( 'Explore', 'trucking-services' ); ?></em></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"base","overlayMenu":"never","icon":"menu","overlayBackgroundColor":"secondary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"blockGap":"12px"},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"capitalize","fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} --><!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Fleet","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-box3 wow bounceInUp"} -->
<div class="wp-block-column footer-box3 wow bounceInUp"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontFamily":"heading"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-heading-font-family" style="font-size:26px;font-style:normal;font-weight:500;text-transform:capitalize"><em><?php echo esc_html__( 'Our Services', 'trucking-services' ); ?></em></h4>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"fontSize":"14px"}}} -->
<ul style="font-size:14px" class="wp-block-list"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Full Truckload  Shipping', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Less Than Truckload  Freight', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Refrigerated Transport', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Express Cargo Delivery', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Cross-Border Logistics', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"10px"}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<li class="has-base-color has-text-color has-link-color" style="margin-bottom:10px;text-transform:capitalize"><a href="#"><em><?php echo esc_html__( 'Warehouse & Distribution', 'trucking-services' ); ?></em></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-box4 wow bounceInUp"} -->
<div class="wp-block-column footer-box4 wow bounceInUp"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontFamily":"heading"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-heading-font-family" style="font-size:26px;font-style:normal;font-weight:500;text-transform:capitalize"><em><?php echo esc_html__( 'social media', 'trucking-services' ); ?></em></h4>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"showLabels":true,"className":"is-style-logos-only footer-social-box","layout":{"type":"flex","orientation":"vertical"}} -->
<ul class="wp-block-social-links has-visible-labels has-icon-color is-style-logos-only footer-social-box"><!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.x.com","service":"x"} /-->

<!-- wp:social-link {"url":"www.pinterest.com","service":"pinterest"} /-->

<!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","className":"footer-copyright","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"30px","bottom":"30px"}},"border":{"top":{"color":"var:preset|color|base","width":"1px"}}},"textColor":"base"} -->
<p class="has-text-align-center footer-copyright has-base-2-color has-text-color has-link-color" style="border-top-color:var(--wp--preset--color--base-2);border-top-width:1px;padding-top:30px;padding-bottom:30px;color:#fff"><a rel="noreferrer noopener" href="https://www.theclassictemplates.com/products/trucking-services" target="_blank"><?php echo esc_html__( 'Trucking Services Theme', 'trucking-services' ); ?></a><?php echo esc_html__( ' By Classic Templates', 'trucking-services' ); ?></p>

<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"scroll-top-btn","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button scroll-top-btn"><a class="wp-block-button__link wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><i class="fa-solid fa-angles-up"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<?php } ?>