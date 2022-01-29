<?php

get_header();

echo '<main class="mmt-blog">';

get_template_part( 'template-parts/modules/module', 'banner' );

get_template_part( 'template-parts/modules/module', 'headline', ['headline' => 'News - ' . single_cat_title('', false), 'width' => 'short']);

echo '<section class="module mmt-news-card-module mmt-news-list cols-one">';

if( have_posts() ) {

  while( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/modules/module', 'card');
  }
}  

echo '</section>';

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

echo '</main>';

get_footer();