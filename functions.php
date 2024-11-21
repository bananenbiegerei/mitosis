<?php

// Disable Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable Gutenberg editor for widgets
add_filter('use_widgets_block_editor', '__return_false');

// Polyfills (provides a few functions not yet in PHP7)
require_once get_template_directory() . '/functions/polyfills.php';

// Load localization functions
// Usage: `__('my example text', BB_TEXT_DOMAIN)`
// String translations can be edited with [Poedit](https://poedit.net)
require_once get_template_directory() . '/functions/localization.php';

// Special features of theme
require_once get_template_directory() . '/functions/features.php';

// Load styles & scripts
require_once get_template_directory() . '/functions/enqueue-scripts.php';

// Define menu locations and menu getter
require_once get_template_directory() . '/functions/menu.php';

// Icon dispenser
require_once get_template_directory() . '/functions/icons.php';

// Custom posts and taxonomies
require_once get_template_directory() . '/functions/custom-posts.php';
//require_once get_template_directory() . '/functions/custom-taxonomies.php';

// Excerpts
require_once get_template_directory() . '/functions/excerpts.php';

// Search
// require_once get_template_directory() . '/functions/search.php';
