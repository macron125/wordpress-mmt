<?php 
get_header();

if( is_front_page() ) {

  echo '<main>';

  // Get banner
  get_template_part( 'template-parts/modules/module', 'banner' );

  $mmt_news = new WP_Query;
  $mmt_news_cats = get_categories();

  echo '<section class="module mmt-news-card-module cols-two">';

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
  echo '</section>';

  echo '</main>';
}
get_footer();