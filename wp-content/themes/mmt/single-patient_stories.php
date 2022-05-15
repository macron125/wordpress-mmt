<?php 

get_header();

if( have_posts() ) {
  while ( have_posts() ) {
    the_post();

    get_template_part( 'template-parts/modules/module', 'patient-stories-banner' );
  
    get_template_part( 'template-parts/modules/module', 'patient-stories-post' );
  }
}

get_footer();