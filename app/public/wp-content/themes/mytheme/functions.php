<?php
function read_css(){
  if( is_front_page() ) {
    wp_enqueue_style( 'front-page-style', get_template_directory_uri() . '/css/front-page.css');
  }
}
add_action('wp_enqueue_scripts', 'read_css');

//投稿でアイキャッチ画像の設定を表示
add_action('init', function(){
  add_theme_support('post-thumbnails');
});

// アイキャッチ画像がなければ、標準画像を取得する
function get_eyecatch_with_default(){
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/haikei.png');
  endif;

  return $img;
}
