<?php

/**
 * @link              https://example.com/plugin-page/
 * @since             1.0.0
 * @package           CUSTOM_HEAD
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
 * Text Domain:       custom_head
 */

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGINNAME_VERSION', '1.0.0' );

// Add viewport meta tag
add_action( 'wp_head', 'add_viewport_meta_tag' , '1' );

function add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">';
}

// Load Icons
// Change domain and path according to your website
function ug_head_icons() {
?>
<link rel="apple-touch-icon" sizes="180x180" href="https://example.com/wp-content/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://example.com/wp-content/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://example.com/wp-content/icons/favicon-16x16.png">
<link rel="manifest" href="https://example.com/wp-content/icons/site.webmanifest">
<link rel="mask-icon" href="https://example.com/wp-content/icons/safari-pinned-tab.svg" color="#231f20">
<link rel="shortcut icon" href="https://example.com/wp-content/icons/favicon.ico">
<meta name="apple-mobile-web-app-title" content="APPNAME">
<meta name="application-name" content="APPNAME">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-config" content="https://example.com/wp-content/icons/browserconfig.xml">
<meta name="theme-color" content="#000000">
<?php
}
add_action('wp_head', 'ug_head_icons');
add_action( 'admin_head', 'ug_head_icons' );

// Web analytics code
// It can be any kind of javascript analytic
function analytics_hook_javascript() {
?>
    <script type="text/javascript">
    	// Tracking code here
    </script>
<?php
}
add_action('wp_head', 'analytics_hook_javascript');
