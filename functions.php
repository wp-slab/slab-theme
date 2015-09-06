<?php

namespace Slab\Theme;

/**
 * Initialize Slab Theme
 *
 * @param Slab\Core\Application
 * @return void
 **/
function slab_theme_init($slab) {

	$slab->autoloader->registerNamespace('Slab\Theme', SLAB_THEME_DIR . 'src');

}
