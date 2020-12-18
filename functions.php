<?php

// remove gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

function react_router_rewrite () {
    add_rewrite_rule('^colt-react-wp/(.+)?', 'index.php?pagename=about', 'top');
}

add_action('init', 'react_router_rewrite');

?>
