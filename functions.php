<?php

/**
 * @link              https://example.com/plugin-page/
 * @since             1.0.0
 * @package           CUSTOM_FUNCTIONS
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin name
 * Plugin URI:        https://example.com/plugin-page/
 * Description:       Plugin description
 * Version:           1.0.0
 * Author:            Author Name
 * Author URI:        https://example.com
 * License:           GPL-3.0+
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       custom_functions
 */

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CUSTOM_PLUGIN_VERSION', '1.0.0' );


// Delete meta name generator tag
// Delete version number
remove_action('wp_head', 'wp_generator');
function ug_remove_version() { return ''; }
add_filter('the_generator', 'ug_remove_version');


// Remove toolbar for non-admin users
/*
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
*/

// Disable XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );

// Disable X-Pingback string
add_filter( 'wp_headers', 'disable_x_pingback' );
function disable_x_pingback( $headers ) {
    unset( $headers['X-Pingback'] );

return $headers;
}

// Disable Generatepress footer signature
/*
function wplogout_footer_creds_text () {
$copyright = '<div class="creds"><p>Copyright © ' . date('Y') . ' · <a href="https://example.com/">Your Custom Text</a> · All rights reserved</p></div>';
return $copyright;
 }
add_filter( 'generate_copyright', 'wplogout_footer_creds_text' );
*/

// Remove W3TC html comment
/*
add_filter( 'w3tc_can_print_comment', function( $w3tc_setting ) { return false; }, 10, 1 );
*/

// Remove RankMath komentara
// add_filter( 'rank_math/frontend/remove_credit_notice', '__return_true' );

// Disable RSS feeds
function wpb_disable_feed() {
wp_die( __('No feed available, please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}
 
add_action('do_feed', 'wpb_disable_feed', 1);
add_action('do_feed_rdf', 'wpb_disable_feed', 1);
add_action('do_feed_rss', 'wpb_disable_feed', 1);
add_action('do_feed_rss2', 'wpb_disable_feed', 1);
add_action('do_feed_atom', 'wpb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);

// Remove RSS related links in website header
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
