<!DOCTYPE html>
<html lang="ja">
<head>
  <title>TOP</title>
  <?php get_header(); ?>

  
</head>

<body>
  
  <?php $args = array('post_type' => 'post'); ?> <!-- post（投稿）のセット -->
  <?php $query = new WP_Query($args) ?> <!-- クエリの作成 -->

  <?php if($query->have_posts()): ?>
    <?php while($query->have_posts()): $query->the_post(); ?>
      
      <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <p><?php the_time(get_option('date_format')); ?></p>
      </a>
      <?php the_author(); ?>
      <hr>
    <? endwhile; ?>
  <?php else: ?>
    <p>投稿がありません</p>
  <?php endif; ?>
  

  <?php get_footer(); ?>
</body>
</html>