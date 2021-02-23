# Wordpress Function Plugins
Wordpress "Must Use" plugins template

## Introduction

While Wordpress is known for very large community and a lot of available plugins, somethimes is better to avoid using plugins and use customized Wordpress functions. There are many useful WP functions out there, but sadly many website suggest editing your themes `functions.php` file which is certanly a bad practise.

Creating Wordpress "functions" plugin is much better aproach, but it can cause many errors, so if you don't feel comfortable experimenting with Wordpress I reccomend you to go for some easier solutions.

Wordpress "Must-Use" plugins are a special plugins which are loaded before any other plugins on your website. Therefore, they can not use some features that regular plugins can, but they are useful for creating custom functions, and they are update-proof.

For more information on this, you can read related Wordpress [support article](https://wordpress.org/support/article/must-use-plugins/)

## Installation
This repository contain three files, which are used for customising different areas of your website. Easiest way to install it is by navigating to your `wp-content` directory and clone the repository:

```
git clone https://sitemapxml/mu-plugins.git
```

After that `mu-plugins` directory will be created and, if this your first time you are configuring `mu-plugins` next thing to do is to specify plugin directory location in your `wp-config.php`

This can be done the following way:

```
// Must Use Plugins folder path and url
// If you have moved wp-config.php above webroot than you should specify path from
// the wp-config.php location as the starting point.
// Otherwise, delete "/rename-this" slug ftom URL address

define( 'WPMU_PLUGIN_DIR', dirname(__FILE__) . '/rename-this/wp-content/mu-plugins' );
define( 'WPMU_PLUGIN_URL', 'https://example.com/wp-content/mu-plugins' );
```

This code should be added before last definition:

```
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}


/*
  Here it goes
*/
require_once ABSPATH . 'wp-settings.php';
```

> To mention once again, this can completely break your website if you don't know what you are doing. Every change you want to add should be tested first and then added to production. Take backup of your website before doing this.