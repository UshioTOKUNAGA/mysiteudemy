<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css"> -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_header(); ?>

  <main>
    <section class="notice">
      <h2 class="notice__ttl">お知らせ</h2>
      <div class="notice__lists">
        <?php $args = array('post_type' => 'post'); ?> <!-- post（投稿）のセット -->
        <?php $query = new WP_Query($args) ?> <!-- クエリの作成 -->
        <?php if($query->have_posts()): ?>
          <?php while($query->have_posts()): $query->the_post(); ?>
            <a class="notice__lists__item" href="<?php the_permalink(); ?>">
              <p class="notice__lists__item__txt--date"><?php the_time('Y年m月d日'); ?></p>
              <p class="notice__lists__item__txt--ttl"><?php the_title(); ?></p>
            </a>
          <? endwhile; ?>
        <?php else: ?>
          <p>投稿がありません</p>
        <?php endif; ?>
      </div>
      <button class="notice__btn" onclick="location.href=''" type="button">お知らせ一覧</button>
    </section>
  </main>

  <footer>
    <div class="footer__inner1200">
      <div>
        <h1 class="footer__logo">会社ロゴ</h1>
        <p class="footer__adress">
          〒104-0061<br>
          東京都中央区銀座7-3-5<br>
          ヒューリック銀座7丁目ビル7・8階（受付8階）
        </p>
        <ul class="footer__snsLinks">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram_icon.svg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_icon.svg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/youtube_icon.svg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/x_icon.svg" alt=""></li>
        </ul>
      </div>
      <div>
        <nav>
          <ul class="footer__menu">
            <li class="footer__menu__item"><a href="">会社概要</a></li>
            <li class="footer__menu__item"><a href="">お知らせ</a></li>
            <li class="footer__menu__item"><a href="">採用情報</a></li>
            <li class="footer__menu__item"><a href="">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <p class="footer__copyRight">©2024 SampleCompany</p>

  </footer>

  <?php get_footer(); ?>
</body>
</html>