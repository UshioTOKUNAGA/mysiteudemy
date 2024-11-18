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
    <h1><?php the_title(); ?></h1>
    <p><?php the_time('Y年m月d日'); ?></p>

    <!-- 投稿の中身の表示 -->
    <div>
      <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
  
  <?php endif; ?>

  <?php get_footer(); ?>
</body>
</html> 