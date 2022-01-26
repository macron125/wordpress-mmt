<?php 

get_header();

if( have_posts() ) {
  while ( have_posts() ) {
    the_post();
  
    get_template_part( 'template-parts/content/content/content', 'single' );
  
    // Comments are currently not available
    if ( comments_open() || get_comments_number() ) {
  
      comments_template();
  
    }
  }
}

get_footer();