<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
  <?php
    if( is_front_page() ) {
      wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css');
    }
  ?>

</head>

<body>
  <?php $args = array('post_type' => 'post'); ?> <!-- post（投稿）のセット -->
  <?php $query = new WP_Query($args) ?> <!-- クエリの作成 -->

  <main>
    <div class="notice">
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
    </div>
  </main>

  <?php get_footer(); ?>
</body>
</html>