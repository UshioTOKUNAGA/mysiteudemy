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
        <?php $args = array('post_type' => 'news'); ?> <!-- post（投稿）のセット -->
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

  <?php wp_footer(); ?>

  <?php get_footer(); ?>
</body>
</html>