<?php
/*
 * @package Trucking Services
 */


 function trucking_services_admin_enqueue_scripts() {
    wp_enqueue_style( 'trucking-services-admin-style', esc_url( get_template_directory_uri() ).'/assets/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'trucking_services_admin_enqueue_scripts' );

function trucking_services_theme_info_menu_link() {

    $trucking_services_theme = wp_get_theme();
    add_theme_page(
        /* translators: 1: Theme name. */
        sprintf( esc_html__( 'Welcome to %1$s', 'trucking-services' ), $trucking_services_theme->get( 'Name' )),
        esc_html__( 'Theme Info', 'trucking-services' ),
        'edit_theme_options',
        'trucking-services',
        'trucking_services_theme_info_page'
    );
}
add_action( 'admin_menu', 'trucking_services_theme_info_menu_link' );

function trucking_services_theme_info_page() {

    $trucking_services_theme = wp_get_theme();
    ?>
<div class="wrap theme-info-wrap">
    <h1><?php printf( esc_html__( 'Welcome to %1$s', 'trucking-services' ), esc_html($trucking_services_theme->get( 'Name' ))); ?>
    </h1>
    <p class="theme-description">
    <?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'trucking-services' ); ?>
    </p>
    <div class="columns-wrapper clearfix theme-demo">
        <div class="column column-quarter clearfix start-box"></div>
        <div class="column column-first clearfix">
            <div class="important-link">
                <div class="main-box columns-wrapper clearfix">

                    <div class="themelink column column-half column-border clearfix">
                        <p><strong><?php esc_html_e( 'Free Theme Documentation', 'trucking-services' ); ?></strong></p>
                        <p><?php esc_html_e( 'Need more details? Please check our complete and detailed documentation for full theme setup.', 'trucking-services' ); ?></p>
                        <a href="<?php echo esc_url( TRUCKING_SERVICES_THEME_DOCUMENTATION ); ?>" target="_blank">
                        <?php esc_html_e( 'Documentation', 'trucking-services' ); ?>
                        </a>
                    </div>

                    <div class="themelink column column-half column-padding clearfix">
                        <p><strong><?php esc_html_e( 'Need Help?', 'trucking-services' ); ?></strong></p>
                        <p><?php esc_html_e( 'Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'trucking-services' ); ?></p>
                        <a href="<?php echo esc_url( TRUCKING_SERVICES_SUPPORT ); ?>" target="_blank">
                        <?php esc_html_e( 'Contact Us', 'trucking-services' ); ?>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="main-box columns-wrapper clearfix">

                    <div class="themelink column column-half column-border clearfix">
                        <p><strong><?php esc_html_e( 'Pro version of our theme', 'trucking-services' ); ?></strong></p>
                        <p><?php esc_html_e( 'Are you excited for our theme? Then we will proceed for pro version of theme.', 'trucking-services' ); ?></p>
                        <a class="get-premium" href="<?php echo esc_url( TRUCKING_SERVICES_PREMIUM_PAGE ); ?>" target="_blank">
                        <?php esc_html_e( 'Get Premium', 'trucking-services' ); ?>
                        </a>
                    </div>

                    <div class="themelink column column-half column-padding clearfix">
                        <p><strong><?php esc_html_e( 'Leave us a review', 'trucking-services' ); ?></strong></p>
                        <p><?php esc_html_e( 'Are you enjoying our theme? We would love to hear your feedback.', 'trucking-services' ); ?></p>
                        <a href="<?php echo esc_url( TRUCKING_SERVICES_REVIEW ); ?>" target="_blank">
                        <?php esc_html_e( 'Rate This Theme', 'trucking-services' ); ?>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="column column-quarter clearfix start-box"> 
            <div class="bundle-info">
                <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/bundle.png'); ?>" alt="<?php echo esc_attr( 'screenshot', 'trucking-services'); ?>" class="bundle-image"/>
                <div class="bundle-content themelink">
                    <h3><?php esc_html_e( 'WordPress Theme Bundle', 'trucking-services' ); ?></h3>
                    <small><b><?php esc_html_e( 'Get access to a collection of 100+ stunning WordPress themes for just $99 — featuring designs for every business niche!', 'trucking-services' ); ?></small></b>
                    <a class="get-premium" href="<?php echo esc_url( TRUCKING_SERVICES_BUNDLE_PAGE ); ?>" target="_blank">
                    <?php esc_html_e( 'Get Bundle at 20% OFF', 'trucking-services' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="getting-started">
        <div class="section">
            <h3><?php 
            /* translators: %s: Theme name. */
            printf( esc_html__( 'Getting started with %s', 'trucking-services' ),
            esc_html($trucking_services_theme->get( 'Name' ))); ?></h3>
            <div class="columns-wrapper clearfix">
                <div class="column column-half clearfix">
                    <div class="section themelink">
                        <div class="">
                            <a class="" href="<?php echo esc_url( TRUCKING_SERVICES_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Get Premium', 'trucking-services' ); ?></a>
                            <a href="<?php echo esc_url( TRUCKING_SERVICES_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'View Demo', 'trucking-services' ); ?></a>
                            <a class="get-premium" href="<?php echo esc_url( TRUCKING_SERVICES_BUNDLE_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Bundle of 100+ Themes at $99', 'trucking-services' ); ?></a>
                        </div>
                        <div class="theme-description-1"><?php echo esc_html($trucking_services_theme->get( 'Description' )); ?></div>
                    </div>
                </div>
                <div class="column column-half clearfix">
                    <img src="<?php echo esc_url( $trucking_services_theme->get_screenshot() ); ?>" alt="<?php echo esc_attr( 'screenshot', 'trucking-services'); ?>"/>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="theme-author">
      <p><?php
        /* translators: 1: Theme name, 2: Author name, 3: Call to action text. */
        printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'trucking-services' ),
            esc_html($trucking_services_theme->get( 'Name' )),
            '<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'trucking-services' ) . '">classictemplate</a>',
            '<a target="_blank" href="' . esc_url(TRUCKING_SERVICES_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'trucking-services' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'trucking-services' ) . '</a>'
        );
        ?></p>
    </div>
</div>
<?php
}
?>