<?php
/**
 * Functions and definitions for Genbrugsplanter theme.
 *
 * @package Genbrugsplanter
 */

/**
 * Theme setup function.
 */
function genbrugsplanter_theme_setup() {
    // Add support for dynamic document titles
    add_theme_support( 'title-tag' );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add support for custom menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'genbrugsplanter' ),
    ) );

    // Add support for HTML5 markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'genbrugsplanter_theme_setup' );

/**
 * Enqueue theme styles and scripts.
 */
function genbrugsplanter_enqueue_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style( 'genbrugsplanter-style', get_stylesheet_uri(), array(), '1.0' );

    // Enqueue a custom JavaScript file (optional)
    wp_enqueue_script( 'genbrugsplanter-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'genbrugsplanter_enqueue_scripts' );
