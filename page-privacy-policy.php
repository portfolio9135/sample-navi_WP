<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>




  只今、プライバシーポリシーページ作成中！






  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>