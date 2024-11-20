<?php
add_action('init', function () {
    $blocks_dir = get_template_directory() . '/blocks/';

    foreach (glob($blocks_dir . '*/block.json') as $block_json) {
        register_block_type_from_metadata(dirname($block_json));
    }
});
