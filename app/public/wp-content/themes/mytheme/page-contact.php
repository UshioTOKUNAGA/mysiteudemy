<!-- 固定ページ-お問い合わせ -->
<?php
  /*
  Template Name: お問い合わせ
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_header(); ?>

  <main>
    <div class="wrap">
      <div class="inner">
        <h1 class="ttl"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    </div>
  </main>


  <?php get_footer(); ?>

  <?php wp_footer(); ?>
</body>
</html>