<?php 

get_header();

if( have_posts() ) {
  while ( have_posts() ) {
    the_post();

    get_template_part( 'template-parts/modules/module', 'banner' );
  
    get_template_part( 'template-parts/modules/module', 'blog' );
  
    // Comments are currently not available
    // if ( comments_open() || get_comments_number() ) {
  
    //   comments_template();
  
    // }
  }
}

get_footer();