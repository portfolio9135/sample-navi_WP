<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <section class="breadCrumb">
      <div class="breadCrumb__inner">
        <div class="breadCrumb__list">
          <span class="breadCrumb__list--txt"> <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></span><!-- /.breadCrumb__list--txt -->
          <span>＞</span>
          <span class="breadCrumb__list--txt"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
          <!-- /.breadCrumb__list--txt -->
        </div><!-- /.breadCrumb__list -->
      </div><!-- /.breadCrumb__inner -->
    </section><!-- /.breadCrumb -->

    <section class="contact">
      <div class="contact__inner">
        <?php echo do_shortcode('[contact-form-7 id="638" title="お問い合わせ"]'); ?>
        <!-- ↑コンタクトフォーム7のフォーム内容をここに反映↑ -->
      </div><!-- /.contact__inner -->
    </section><!-- /.contact -->

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>