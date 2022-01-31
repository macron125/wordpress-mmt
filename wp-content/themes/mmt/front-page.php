<?php 
get_header();

if( is_front_page() ) {

  echo '<main>';

  // Get banner
  get_template_part( 'template-parts/modules/module', 'banner' );

  // Get headline
  get_template_part( 
    'template-parts/modules/module', 'headline', 
    [
      'headline' => function_exists('PLL') ? pll__('Featured News') : 'Featured News', 
      'width' => 'long'
    ]
  );

  echo '<section class="module module-long mmt-news-card-module cols-three">';

  // Get featured posts

  mmt_latest_post_cat();

  echo '</section>';

  echo '</main>';
}
get_footer();