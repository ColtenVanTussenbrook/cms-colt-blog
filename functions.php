<?php

// remove gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

function react_router_rewrite () {
    add_rewrite_rule('^colt-react-wp/(.+)?', 'index.php?pagename=about', 'top');
}

add_action('init', 'react_router_rewrite');

function register_post_type_portfolio () {
    $labels = array(
        'name' => 'Portfolio Items',
        'singular_name' => 'Portfolio Item',
        'menu_name' => 'Portfolio Items',
        'add_new' => 'Add New Portfolio Item',
        'edit_item' => 'Edit Portfolio Item',
        'new_item' => 'New Portfolio Item',
        'view_item' => 'View Portfolio Item',
        'search_items' => 'Search Portfolio Items',
       );

    $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
        'title',
        'editor',
        'excerpt',
        'custom-fields',
        'thumbnail',
        'page-attributes'
    ),
    'taxonomies' => array('category'),
    'rewrite' => array( 'slug' => 'portfolio-items' ),
    );

    register_post_type( 'portfolio-items', $args );
}

add_action( 'init', 'register_post_type_portfolio' );

?>
