<?php
/*
Plugin Name: Slab &mdash; WordPress
Plugin URI: http://www.wp-slab.com/components/wordpress
Description: The Slab WordPress component. Helpers and utilities for common WordPress tasks.
Version: 1.0.0
Author: Slab
Author URI: http://www.wp-slab.com
Created: 2015-09-05
Updated: 2015-09-05
Repo URI: github.com/wp-slab/slab-wordpress
Requires: slab-core
*/


// Define
define('SLAB_WORDPRESS_INIT', true);
define('SLAB_WORDPRESS_DIR', plugin_dir_path(__FILE__));
define('SLAB_WORDPRESS_URL', plugin_dir_url(__FILE__));


// Includes
include SLAB_WORDPRESS_DIR . 'functions.php';


// Hooks
add_action('slab_init', 'Slab\WordPress\slab_wordpress_init');
