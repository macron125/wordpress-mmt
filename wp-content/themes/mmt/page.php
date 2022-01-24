<?php

get_header();

echo '<main>';

get_template_part( 'template-parts/module-banner' );

if( !is_page( 'book-a-visit' ) ) {
  get_template_part( 'template-parts/module-blog' );
} elseif (is_page( 'book-a-visit' ) ) {
  get_template_part( 'template-parts/module-contact_form' );
}

echo '</main>';

get_footer();