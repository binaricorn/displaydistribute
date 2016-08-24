<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Initialize all the things.
 */
require 'inc/class-storefront.php';
require 'inc/jetpack/class-storefront-jetpack.php';
require 'inc/customizer/class-storefront-customizer.php';

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( is_woocommerce_activated() ) {
	require 'inc/woocommerce/class-storefront-woocommerce.php';
	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	require 'inc/admin/class-storefront-admin.php';
}

//dispable google fonts open sans
function mytheme_dequeue_fonts(){
wp_dequeue_style( 'storefront-fonts' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );

// Remove Open Sans that WP adds from frontend

if (!function_exists('remove_wp_open_sans')) :
function remove_wp_open_sans() {
wp_deregister_style( 'open-sans' );
wp_register_style( 'open-sans', false );
}
add_action('wp_enqueue_scripts', 'remove_wp_open_sans');
// Uncomment below to remove from admin
// add_action('admin_enqueue_scripts', 'remove_wp_open_sans');
endif;

// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 100;' ), 20 );
/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woothemes/theme-customisations
 */
