<!-- 投稿の個別ページ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>

  <?php wp_head(); ?>
</head>
<body>
  <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post(); ?>

      <?php
        $img = get_eyecatch_with_default();
      ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_time('Y年m月d日'); ?></p>

      <!-- 投稿の中身の表示 -->
      <div style="background-image: url(<?php echo $img[0]; ?>)">
        <?php the_post_thumbnail(array(32,32), array('alt'=>'アイキャッチ画像')); ?>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  
  <?php endif; ?>

  <?php get_footer(); ?>
</body>
</html> 