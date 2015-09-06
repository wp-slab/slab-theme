<?php
/*
Plugin Name: Slab &mdash; Theme
Plugin URI: http://www.wp-slab.com/components/theme
Description: The Slab Theme component. Helpers and utilities for common theme tasks.
Version: 1.0.0
Author: Slab
Author URI: http://www.wp-slab.com
Created: 2015-09-05
Updated: 2015-09-05
Repo URI: github.com/wp-slab/slab-theme
Requires: slab-core
*/


// Define
define('SLAB_THEME_INIT', true);
define('SLAB_THEME_DIR', plugin_dir_path(__FILE__));
define('SLAB_THEME_URL', plugin_dir_url(__FILE__));


// Includes
include SLAB_THEME_DIR . 'functions.php';


// Hooks
add_action('slab_init', 'Slab\Theme\slab_theme_init');
