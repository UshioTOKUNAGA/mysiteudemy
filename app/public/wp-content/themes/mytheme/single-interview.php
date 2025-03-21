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
    <div class="wrap">
      <h1 class="ttl"><?php the_title(); ?></h1>
      <div class="mv">
        <img src="<?php the_field('prof-img'); ?>" >
      </div>
      <p class="txts"><?php the_field('interview-cont'); ?></p>
    </div>
  </main>

  <?php wp_footer(); ?>

  <?php get_footer(); ?>
</body>
</html>