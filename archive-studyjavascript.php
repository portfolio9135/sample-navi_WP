<?php get_header(); ?>
<?php
$get_post_type_name = esc_html(get_post_type_object(get_post_type())->name);

$archive_post_type_url = get_post_type_archive_link( $get_post_type_name );
?>

<section class="breadCrumb">
  <div class="breadCrumb__inner">
    <div class="breadCrumb__list">
      <span class="breadCrumb__list--txt"> <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></span><!-- /.breadCrumb__list--txt -->
      <span>＞</span>
      <span class="breadCrumb__list--txt"> <a href="<?php echo $archive_post_type_url; ?>"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></a></span>
      <!-- /.breadCrumb__list--txt -->
    </div><!-- /.breadCrumb__list -->
  </div><!-- /.breadCrumb__inner -->
</section><!-- /.breadCrumb -->

<section class="mainContents">
  <section class="mainContents__ttlTxtBlock">
    <h2 class="mainContents__ttlTxtBlock--ttl"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h2><!-- /.mainContents__ttlTxtBlock--ttl -->
    <p class="mainContents__ttlTxtBlock--txt"><?php echo esc_html(get_post_type_object(get_post_type())->description); ?></p>
    <!-- /.mainContents__ttlTxtBlock--txt -->
  </section><!-- /.mainContents__ttlTxtBlock -->

  <?php while (have_posts()) : the_post(); ?>
    <!-- 投稿一覧のループスタート -->

    <?php
    $multiple_tags = get_field('author_tag');
    ?>

    <?php get_template_part('inc/parts-archive-main-contents') ?>

  <?php endwhile; ?>
  <!-- 投稿一覧のループ終わり -->
</section><!-- /.mainContents -->
<section class="pager">
  <ul class="pager__list">
    <?php the_posts_pagination(
      array(
        'mid_size'      => 5, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => false,
        'type'          => 'list', // 戻り値の指定 (plain/list)
      )
    ); ?>
  </ul><!-- /.pager__list -->
</section><!-- /.pager -->

<?php get_footer(); ?>