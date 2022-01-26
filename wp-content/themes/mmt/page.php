<?php

get_header();

echo '<main>';

get_template_part( 'template-parts/modules/module', 'banner' );

if( !is_page( 'book-a-visit' ) ) {
  get_template_part( 'template-parts/modules/module', 'blog' );
} elseif (is_page( 'book-a-visit' ) ) {
  get_template_part( 'template-parts/modules/module', 'contact_form' );
}

echo '</main>';

get_footer();