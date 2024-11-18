<?php
function read_css(){
  if( is_front_page() ) {
    wp_enqueue_style( 'front-page-style', get_template_directory_uri() . '/css/front-page.css');
  }
}
add_action('wp_enqueue_scripts', 'read_css');

add_action('init', function(){
  add_theme_support('post-thumbnails');
});
