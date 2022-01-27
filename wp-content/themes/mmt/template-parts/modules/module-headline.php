<?php 

$class = ''; 

if( $args[ 'width' ] ) {
  if ( $args[ 'width' ] == 'short' ) {
    $class .= "module-short";
  } elseif ( $args [ 'width' ] == 'long' ) {
    $class .= "module-long";
  }
}

?>
<section class="module <?php echo $class !== "" ? $class : "" ?> module-headline">
  <h2><?php echo $args['headline']; ?></h2>
</section>