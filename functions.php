<?php


/**
 * Load library
 */


/**
 *
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'module.header', td() . '/css/module.header.css' );
});

add_action('after_setup_theme', function () {
    show_admin_bar(false);
});


