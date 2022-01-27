<?php

get_header();

if ( is_home() ) {

  get_template_part( 'template-parts/modules/module', 'banner' );


  echo '<section class="module mmt-news-card-module mmt-news-list cols-one">';

  echo '<h2>News Releases</h2>';

  if( have_posts() ) {

    while( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/modules/module', 'card');
    }
  }  
  
  echo '</section>';

}


the_posts_pagination(
  [
    'screen_reader_text' => 'Events navigation',
    'prev_text'         => 'Previous page',
    'next_text'         => 'Next page',
    // 'before_page_number' => esc_html__("Page", "") . ' ',
    'mid_size'           => 0,
    'end_size'           => 1,
  ]
);

get_footer();