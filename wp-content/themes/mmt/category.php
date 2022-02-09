<?php

get_header();

echo '<main class="mmt-blog">';

if( have_posts() ) {

  get_template_part( 'template-parts/modules/module', 'banner' );

  get_template_part( 
    'template-parts/modules/module', 
    'headline', 
    [
      'headline' => function_exists('PLL') ? pll__('News Releases') . ' - ' . single_cat_title('', false) : single_cat_title('', false) , 
      'width' => 'short'
    ]
  );

  while( have_posts() ) {

    echo '<section class="module mmt-news-card-module mmt-news-list cols-one">';

    the_post();
    get_template_part( 'template-parts/modules/module', 'card');

    echo '</section>';
  }

  the_posts_pagination(
    [
      'screen_reader_text' => 'News navigation',
      'prev_text'         => 'Previous page',
      'next_text'         => 'Next page',
      // 'before_page_number' => esc_html__("Page", "") . ' ',
      'mid_size'           => 0,
      'end_size'           => 1,
    ]
  );
}  

get_template_part( 
  'template-parts/modules/module', 
  'headline', 
  [
    'headline' => function_exists('PLL') ? pll__('Featured News') : "Featured News", 
    'width' => 'short'
  ]
);

echo '<section class="module module-short mmt-news-card-module mmt-news-featured cols-two">';

mmt_latest_post_cat();

echo '</section>';

echo '</main>';

get_footer();