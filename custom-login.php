<?php

/**
 * @link              https://example.com/plugin-page/
 * @since             1.0.0
 * @package           CUSTOM_LOGIN
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
 * Text Domain:       custom_login
 */

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'UGLOGIN_VERSION', '1.0.0' );

// Custom Log In page
function wpb_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://example.com/wp-content/uploads/custom-logo.png);
          height:300px;
          width:300px;
          background-size: 300px 300px;
          background-repeat: no-repeat;
          padding-bottom: 0px;
        }

        body.login {
            background-image: url('https://example.com/wp-content/uploads/custom-background.jpg');
          background-size: 100%;
          background-attachment: fixed;
        }

        #loginform {
          background-color: #021001;
          border: 1px solid #21D721;
        }

        #loginform label {
          color:#21D721;
        }

#rememberme {
   color: #000;
}

#user_login {
background-color: #014302;
color: #21D721;
}
#user_pass {
background-color: #014302;
color: #21D721;
}
#wp-submit {
background-color: #014302;
border-color: #014302;
}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

// Custom logo link
function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );

// Custom logo url title
function wpb_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );

// Customize Toolbar logo
function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/custom-logo.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');
