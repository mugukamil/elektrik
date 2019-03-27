<?php get_header(); ?>

<div class="main-content">
  <?php get_sidebar(); ?>

  <main class="site-content">
    <h1 class="site-content__heading"><?php the_title(); ?></h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; ?>

    <?php endif; ?>


<?php get_footer(); ?>

