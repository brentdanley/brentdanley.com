<?php
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}

add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );
add_image_size( '150_thumb', 150, 150, true ); // 150 pixel square thumbnail
set_post_thumbnail_size( 150, 150, true );
?>
