<?php
/**
 * Enqueue jQuery 
 * Currently not required as everything is written in Vanilla JS
 */
// wp_enqueue_script('jquery');

/**
 * Add dynamic title support
 */
add_theme_support('title-tag');

/**
 * Add logo support
 */
add_theme_support( 'custom-logo', [] );

/**
 * Enqueue Dashicons
 */

function mmt_enqueue_dashicons() {
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'mmt_enqueue_dashicons');

/**
 * Register styles
 */
function mmt_register_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('mmt-style', get_stylesheet_uri(), [], $version, 'all');
}
add_action('wp_enqueue_scripts', 'mmt_register_styles');

/**
 * Register scripts
 */
function mmt_register_scripts() {
  $version = '1.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.3';
  wp_enqueue_script('mmt-script', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'mmt_register_scripts');

/**
 * Register navigation manus
 */
function mmt_register_menu() {
  register_nav_menus(
    [
      'mainmenu'      =>  __('Main Menu'),
      'footermenu'    =>  __('Footeer Menu'),
    ]
  );
}
add_action('after_setup_theme', 'mmt_register_menu');

function mmt_nav_add_li_classes($classes, $item, $args) {
  if(isset($args->li_class)) {
    $classes[] = $args->li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'mmt_nav_add_li_classes', 1, 3);