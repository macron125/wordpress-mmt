<?php
/**
 * Enqueue jQuery 
 * Currently not required as everything is written in Vanilla JS
 */
// wp_enqueue_script('jquery');

/**
 * Add dynamic title support
 * Add logo support
 * Add thumbnail supoprt
 */
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo', [] );

/**
 * Enqueue Dashicons
 */

function mmt_enqueue_dashicons() {
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'mmt_enqueue_dashicons');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
} 
// add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

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
  $version = '1.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.5';
  wp_enqueue_script('mmt-script', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'mmt_register_scripts');

/**
 * Custom Post Types
 */

require get_template_directory() . "/core/custom-post-types.php";

/**
 * Disable Gutenberg
 */
// add_filter('use_block_editor_for_post', '__return_false', 10);

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

function mmt_excerpt_length( $legnth ) {
  return 20;
}
add_filter( 'excerpt_length', 'mmt_excerpt_length', 999 );

// Function for calling latest post from each category 

function mmt_latest_post_cat() {
  $mmt_news = new WP_Query;
  $mmt_news_cats = get_categories();

  foreach( $mmt_news_cats as $news_cat ) {

    $args = [
      'cat' => $news_cat->term_id,
      'posts_per_page' => 1,
      'no_found_rows' => true,
      'ignore_sticky_posts' => true,
    ];

    $mmt_news->query($args);

    if( $mmt_news->have_posts() ) {
      while( $mmt_news->have_posts() ) {

        $mmt_news->the_post();

        $card_args = [
          'cat_name' => $news_cat->name,
          'cat_permalink' => get_category_link($args['cat']),
          'post_title' => get_the_title(),
          'post_permalink' => get_permalink(),
          'post_excerpt' => get_the_excerpt(),
        ];

        get_template_part( 'template-parts/modules/module', 'card', $card_args );
      }
    } 
  }
}

// Add Contact Info callout section to admin appearance customize interface
function mmt_contact_info_callout($wp_customize) {
  $wp_customize->add_section('mmt-contact-info-section', array(
    'title' => "Contact Info"
  ));

  // Phone
  $wp_customize->add_setting('mmt-contact-info-phone');
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'mmt-contact-info-phone-control', array(
    'label' => 'Phone',
    'section' => 'mmt-contact-info-section',
    'settings' => 'mmt-contact-info-phone',
  )));

  // Email
  $wp_customize->add_setting('mmt-contact-info-email');
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'mmt-contact-info-email-control', array(
    'label' => 'Email',
    'section' => 'mmt-contact-info-section',
    'settings' => 'mmt-contact-info-email',
  )));

  // Address
  $wp_customize->add_setting('mmt-contact-info-address');
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'mmt-contact-info-address-control', array(
    'label' => 'Address',
    'section' => 'mmt-contact-info-section',
    'settings' => 'mmt-contact-info-address',
  )));
}
add_action('customize_register', 'mmt_contact_info_callout');

function mmt_patient_stories_callout($wp_customize) {
  $wp_customize->add_section('mmt-patient-stories-archive-section', array(
    'title' => 'Patient Stories Archive',
  ));
  $wp_customize->add_setting('mmt-patient-stories-banner', [ 'type' => 'theme_mod', ] );
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mmt-patient-stories-banner-control', array(
    'label' => 'Banner',
    'section' => 'mmt-patient-stories-archive-section',
    'settings' => 'mmt-patient-stories-banner',
  )));
}
add_action('customize_register', 'mmt_patient_stories_callout');

// Register Polylang Strings 
function register_polylang_strings() {
  if(function_exists("PLL")) {
    $args = [
      'Headlines' => [
        'title-news_releases' => 'News Releases',
        'title-news_featured' => 'Featured News',
        'title-patient_stories' => 'Patient Stories',
      ],
      'Contact Form' => [
        'contact_form-firstname' => 'First Name',
        'contact_form-lastname' => 'Last Name',
        'contact_form-phone' => 'Phone',
        'contact_form-email' => 'Email',
        'contact_form-message' => 'Message',
        'contact_form-submit' => 'Submit',
        'contact_form-required' => 'Required',
      ]
    ];
  
    foreach($args as $group => $arr) {
      foreach($arr as $name => $string) {
        pll_register_string($name, $string, $group);
      }
    }
  }
}

register_polylang_strings();