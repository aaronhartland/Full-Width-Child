<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Full Width Child Theme' );
define( 'CHILD_THEME_URL', 'http://www.aaronhartland.com/themes/full-width-child' );

/** Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'add_viewport_meta_tag' );
function add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** Create additional color style options */
add_theme_support( 'genesis-style-selector', array( 'theme-green' => 'Green', 'theme-orange' => 'Orange', 'theme-red' => 'Red', 'theme-teal' => 'Teal' ) );

/** Add support for custom background */
// add_custom_background();

/** Add support for custom header */
// add_theme_support( 'genesis-custom-header', array( 'width' => 960, 'height' => 100 ) );

/** Add support for 3-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 3 );

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

/** Reposition the primary navigation */
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );