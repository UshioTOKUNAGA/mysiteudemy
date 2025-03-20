<!-- 固定ページ- 採用TOP -->
<?php
/*
  Template Name: 採用TOP
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
  <link rel="stylesheet" href="./css/global.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_header(); ?>

  <main>
    <div class="wrap">
      <div class="inner">
        <div class="mvArea">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mv.png" alt="MV画像" width="941px" height="523px">
        </div>
        <h1 class="ttl">インタビュー</h1>
        <div class="interview">
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/prof.png" alt="">
            <p class="txt">開発グループ フロントエンド開発チーム</p>
            <p class="name">田中 太郎  (Taro Tanaka)</p>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/prof.png" alt="">
            <p class="txt">開発グループ フロントエンド開発チーム</p>
            <p class="name">田中 太郎  (Taro Tanaka)</p>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/prof.png" alt="">
            <p class="txt">開発グループ フロントエンド開発チーム</p>
            <p class="name">田中 太郎  (Taro Tanaka)</p>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/prof.png" alt="">
            <p class="txt">開発グループ フロントエンド開発チーム</p>
            <p class="name">田中 太郎  (Taro Tanaka)</p>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/prof.png" alt="">
            <p class="txt">開発グループ フロントエンド開発チーム</p>
            <p class="name">田中 太郎  (Taro Tanaka)</p>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/prof.png" alt="">
            <p class="txt">開発グループ フロントエンド開発チーム</p>
            <p class="name">田中 太郎  (Taro Tanaka)</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php wp_footer(); ?>
</body>

</html>