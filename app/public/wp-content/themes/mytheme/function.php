<?php
add_action( 'wp_enqueue_scripts', function(){
  if( is_front_page() ) {
    wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css');
  }
} );
