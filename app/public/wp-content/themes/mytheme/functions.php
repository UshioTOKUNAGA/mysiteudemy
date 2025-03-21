<?php
function read_css()
{
  wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css');
  wp_enqueue_style('global-css', get_template_directory_uri() . '/css/global.css');
  
  if (is_front_page()) {
    wp_enqueue_style('front-page-css', get_template_directory_uri() . '/css/front-page.css');
  }
  if (is_page('company')) {
    wp_enqueue_style('company-css', get_template_directory_uri() . '/css/company.css');
  }
  if (is_page('contact')) {
    wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/contact.css');
  }
  if (is_page('recruit')) {
    wp_enqueue_style('recruit-css', get_template_directory_uri() . '/css/recruit.css');
  }
  if (is_singular('news')) {
    wp_enqueue_style('single-news-css', get_template_directory_uri() . '/css/single-news.css');
  }
  if (is_singular('interview')) {
    wp_enqueue_style('interview-news-css', get_template_directory_uri() . '/css/single-interview.css');
  }
}
add_action('wp_enqueue_scripts', 'read_css');

//投稿でアイキャッチ画像の設定を表示
add_action('init', function () {
  add_theme_support('post-thumbnails');
});

// アイキャッチ画像がなければ、標準画像を取得する
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/haikei.png');
  endif;

  return $img;
}

add_action('init', 'create_post_type');
add_theme_support('post-thumbnails'); //!!!thumbnail（アイキャッチ画像）の有効化
function create_post_type() {
  register_post_type(
    'news', //カスタム投稿タイプ名、スラッグ
    array(
      'label' => 'お知らせ', //カスタム投稿タイプ名の管理画面上の表示名
      'public' => true, //管理画面上に表示するか
      'has_archive' => true, //投稿した記事の一覧ページを作成する
      'menu_position' => 5, //管理画面メニューでの表示位置。'5':投稿の下。
      'show_in_rest' => true, //ブロックエディタで使用できるようにする
      'supports' => array(
          //サポートする機能をここに記述していく
          'title', //タイトル
          'editor', //エディタ
          'thumbnail', //!!!
          'revisions', //変更を保存
          'author', //作成者
          'excerpt', //抜粋
      ),
    )
  );
  register_post_type(
    'interview', //カスタム投稿タイプ名、スラッグ
    array(
      'label' => 'インタビュー', //カスタム投稿タイプ名の管理画面上の表示名
      'public' => true, //管理画面上に表示するか
      'has_archive' => true, //投稿した記事の一覧ページを作成する
      'menu_position' => 5, //管理画面メニューでの表示位置。'5':投稿の下。
      'show_in_rest' => true, //ブロックエディタで使用できるようにする
      'supports' => array(
          //サポートする機能をここに記述していく
          'title', //タイトル
          'editor', //エディタ
          'thumbnail', //!!!
          'revisions', //変更を保存
          'author', //作成者
          'excerpt', //抜粋
      ),
    )
  );

}

function enqueue_custom_slick_script() {
  // slick.jsとslickのCSSを読み込む
  wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
  wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
  
  // カスタムJSファイルの読み込み
  wp_enqueue_script('custom-slick-js', get_template_directory_uri() . '/js/custom-slick.js', array('jquery', 'slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_slick_script');
