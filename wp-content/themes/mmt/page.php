<?php

get_header();

echo '<main>';

$contact_page = get_page_by_path('book-a-visit');
$contact_page_EN = $contact_page->ID;

if(function_exists('PLL')) {
  $contact_page_RU = pll_get_post_translations( $contact_page_EN )['ru'];
  if(is_page($contact_page_EN) || is_page($contact_page_RU)) {
    get_template_part( 'template-parts/modules/module', 'banner' );
    get_template_part( 'template-parts/modules/module', 'contact_form' );
  } else {
    if( $post->post_parent != $contact_page_EN && $post->post_parent != $contact_page_RU ) {
      get_template_part( 'template-parts/modules/module', 'banner' );
    }
    get_template_part( 'template-parts/modules/module', 'blog' );
  }
} else {
  if( !is_page( $contact_page_EN ) ) {
    get_template_part( 'template-parts/modules/module', 'banner' );
    get_template_part( 'template-parts/modules/module', 'blog' );
  } elseif (is_page( $contact_page_EN ) ) {
    get_template_part( 'template-parts/modules/module', 'banner' );
    get_template_part( 'template-parts/modules/module', 'contact_form' );
  }
}

echo '</main>';

get_footer();