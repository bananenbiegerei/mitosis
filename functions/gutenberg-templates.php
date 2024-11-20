<?php
function myplugin_register_template() {
    // Get the ID of the front page
    $front_page_id = get_option('page_on_front');

    // Check if we are editing the front page
    if ( isset($_GET['post']) && $_GET['post'] == $front_page_id ) {
        $post_type_object = get_post_type_object( 'page' );
        $post_type_object->template = array(
            array( 'core/paragraph', array(
                'placeholder' => 'Add Description...',
            ) ),
        );
        $post_type_object->template_lock = 'all';
    }
}
add_action( 'init', 'myplugin_register_template' );