<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- /jQuery -->
  <!-- slick CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
  <!-- /slick CSS -->
  

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_header(); ?>

  <main>
    <ul class="mv-area">
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/mv1.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/mv2.jpg" alt=""></li>
    </ul>

    <section class="notice">
      <h1 class="ttl">お知らせ</h1>
      <div class="notice__lists">
        <?php $args = array(
          'post_type' => 'news',
          'posts_per_page' => 5
        ); ?> <!-- post（投稿）のセット -->
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
      <button class="notice__btn" onclick="location.href='<?php echo site_url('/news') ?>'" type="button">お知らせ一覧</button>
    </section>
  </main>

  <?php wp_footer(); ?>

  <script>
    $(".hamburger").click(function() {
      $(".menu").toggleClass("is-active");
      $(".hamburger").toggleClass("is-active");
    });
  </script>

  <?php get_footer(); ?>
</body>
</html>