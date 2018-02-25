<?php

function arise_child_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'arise_child_enqueue_styles', 110 );
add_post_type_support( 'page', 'excerpt' );

?>