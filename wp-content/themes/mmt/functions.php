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
  $version = '1.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.3';
  wp_enqueue_script('mmt-script', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'mmt_register_scripts');

/**
 * Disable Gutenberg
 */
add_filter('use_block_editor_for_post', '__return_false', 10);

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


// Register Polylang Strings 
function register_polylang_strings() {
  $args = [
    'Headlines' => [
      'title-news_releases' => 'News Releases',
      'title-news_featured' => 'Featured News',
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

register_polylang_strings();

// pll_register_string( 'title-news_releases', 'News Releases', 'Headlines' );
// pll_register_string( 'title-news_featured', 'Featured News', 'Headlines' );


// pll_register_string( 'contact_form-firstname', 'First Name', 'Contact Form' );
// pll_register_string( 'contact_form-lastname', 'Last Name', 'Contact Form' );
// pll_register_string( 'contact_form-phone', 'Phone', 'Contact Form' );
// pll_register_string( 'contact_form-email', 'Email', 'Contact Form' );
// pll_register_string( 'contact_form-message', 'Message', 'Contact Form' );
// pll_register_string( 'contact_form-submit', 'Submit', 'Contact Form' );
// pll_register_string( 'contact_form-required', 'Required', 'Contact Form' );


// // Add Banner callout section to admin appearance customize interface
// function mmt_banner_callout($wp_customize) {
//   $wp_customize->add_section('mmt-banner-callout-section', array(
//     'title' => "Banner Customization"
//   ));

//   // Headline
//   $wp_customize->add_setting('mmt-banner-callout-headline', array(
//     'default' => 'Default Headline',
//   ));
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'mmt-banner-callout-headline-control', array( 
//     'label' => 'Headline',
//     'section' => 'mmt-banner-callout-section',
//     'settings' => 'mmt-banner-callout-headline',
//    ) ) );
  
//   // Subheadline
//   $wp_customize->add_setting('mmt-banner-callout-subheadline', array(
//     'default' => 'Default Subheadline',
//   ));
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'mmt-banner-callout-subheadline-control', array( 
//     'label' => 'Subheadline',
//     'section' => 'mmt-banner-callout-section',
//     'settings' => 'mmt-banner-callout-subheadline',
//     'type'  => 'textarea',
//    ) ) );

//   // CTA
//   $wp_customize->add_setting('mmt-banner-callout-cta', array(
//     'default' => 'Default CTA',
//   ));
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'mmt-banner-callout-cta-control', array( 
//     'label' => 'CTA',
//     'section' => 'mmt-banner-callout-section',
//     'settings' => 'mmt-banner-callout-cta',

//    ) ) );

//   // CTA URL
//   $wp_customize->add_setting('mmt-banner-callout-cta-url');
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'mmt-banner-callout-cta-url-control', array( 
//     'label' => 'CTA Link',
//     'section' => 'mmt-banner-callout-section',
//     'settings' => 'mmt-banner-callout-cta-url',
//     'type' => 'dropdown-pages',
//    ) ) );

//   // Poster
//   $wp_customize->add_setting('mmt-banner-callout-poster');
//   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mmt-banner-callout-poster-control', array( 
//     'label' => 'Poster',
//     'section' => 'mmt-banner-callout-section',
//     'settings' => 'mmt-banner-callout-poster',
//    ) ) );

//   // Video
//   $wp_customize->add_setting('mmt-banner-callout-vid');
//   $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'mmt-banner-callout-vid-control', array( 
//     'label' => 'Video',
//     'section' => 'mmt-banner-callout-section',
//     'settings' => 'mmt-banner-callout-vid',
//    ) ) );
// }
// add_action('customize_register', 'mmt_banner_callout');

// remove_theme_mod('mmt_banner_callout');