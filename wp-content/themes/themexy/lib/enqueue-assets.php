<?php


function themexy_assets() {
  wp_enqueue_style( 'themexy-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'themexy_assets' );

function themexy_admin_assets() {
wp_enqueue_style( 'themexy-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.1', 'all');
}
add_action( 'admin_enqueue_scripts', 'themexy_admin_assets' );