<?php

// Define this to limit which blocks will be loaded
//define('WMDE_ALLOWED_BB_BLOCKS', ['image', 'card']);

define('WMDE_ALLOWED_WP_BLOCKS', ['core/column', 'core/columns', 'core/html']);

require_once get_template_directory() . '/bb-blocks/init.php';
