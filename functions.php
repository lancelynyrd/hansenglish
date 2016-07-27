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


abc()->registerRoute(
    [
        'how-study',
        'class-detail-1','class-detail-2','class-detail-3','class-detail-4','class-detail-5','class-detail-6',
        'use-skype',
        'free-class',
        'fee',
    ]
);
