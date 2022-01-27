<?php

get_header();

if ( is_home() ) {

  get_template_part( 'template-parts/modules/module', 'banner' );

  if( have_posts() ) {

    while( have_posts() ) {
      the_post();
      the_title();
      the_excerpt();
    }
  }  
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