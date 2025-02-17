<!-- 固定ページ-会社概要 -->
<?php
/*
  Template Name: 会社概要
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_header(); ?>

  <main>
    <h1 class="ttl"><?php the_title(); ?></h1>
    <div class="wrap">
      <div class="inner">
        <?php the_content(); ?>
      </div>
    </div>
  </main>

  <?php wp_footer(); ?>
</body>

</html>