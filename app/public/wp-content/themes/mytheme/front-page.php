<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>

  <?php wp_head(); ?>
</head>
<body>
  
  <?php $args = array('post_type' => 'post'); ?> <!-- post（投稿）のセット -->
  <?php $query = new WP_Query($args) ?> <!-- クエリの作成 -->
  <?php if ($query->have_posts()): ?> <!-- 投稿があるか -->
    <?php $query->the_post(); ?>
    <?php the_title(); ?>
    <?php wp_reset_postdata(); ?> <!-- グローバルな$postオブジェクトをリセット -->
  <?php else: ?>
    <p>記事が見つかりませんでした</p>
  <?php endif; ?>
  

  <?php wp_footer(); ?>
</body>
</html>