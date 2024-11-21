<?php
function register_custom_post_types() {
    // Register Lab post type
    $lab_labels = array(
        'name'                  => _x('Labs', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Lab', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Labs', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Lab', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Lab', 'textdomain'),
        'new_item'              => __('New Lab', 'textdomain'),
        'edit_item'             => __('Edit Lab', 'textdomain'),
        'view_item'             => __('View Lab', 'textdomain'),
        'all_items'             => __('All Labs', 'textdomain'),
        'search_items'          => __('Search Labs', 'textdomain'),
        'parent_item_colon'     => __('Parent Labs:', 'textdomain'),
        'not_found'             => __('No Labs found.', 'textdomain'),
        'not_found_in_trash'    => __('No Labs found in Trash.', 'textdomain'),
        'featured_image'        => _x('Lab Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Lab archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into Lab', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this Lab', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter Labs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Labs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Labs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $lab_args = array(
        'labels'             => $lab_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'lab'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('lab', $lab_args);

    // Register Reference post type
    $reference_labels = array(
        'name'                  => _x('References', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Reference', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('References', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Reference', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Reference', 'textdomain'),
        'new_item'              => __('New Reference', 'textdomain'),
        'edit_item'             => __('Edit Reference', 'textdomain'),
        'view_item'             => __('View Reference', 'textdomain'),
        'all_items'             => __('All References', 'textdomain'),
        'search_items'          => __('Search References', 'textdomain'),
        'parent_item_colon'     => __('Parent References:', 'textdomain'),
        'not_found'             => __('No References found.', 'textdomain'),
        'not_found_in_trash'    => __('No References found in Trash.', 'textdomain'),
        'featured_image'        => _x('Reference Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Reference archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into Reference', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this Reference', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter References list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('References list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('References list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $reference_args = array(
        'labels'             => $reference_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'reference'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('reference', $reference_args);
}

add_action('init', 'register_custom_post_types');
