<?php

namespace Slab\WordPress;

/**
 * Initialize Slab WordPress
 *
 * @param Slab\Core\Application
 * @return void
 **/
function slab_wordpress_init($slab) {

	$slab->autoloader->registerNamespace('Slab\WordPress', SLAB_WORDPRESS_DIR . 'src');

}
