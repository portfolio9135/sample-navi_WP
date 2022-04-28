<?php get_header(); ?>

<section class="topMv">
  <div class="topMv__description">
    <div class="topMv__description__inner">
      <div class="topMv__description__info">
        <h2>サンプルなびを使って<br>プログラミング学習をしよう</h2>
        <p>気になる学習動画やブログの発信者をみつけたり、あなたにぴったりの学習コンテンツを見つけよう。</p>
      </div><!-- /.topMv__description__info -->

      <div class="topMv__description__img">
        <?php if (is_active_sidebar('top-mv')) : ?>
          <?php dynamic_sidebar('top-mv'); ?>
        <?php endif; ?>
      </div><!-- /.topMv__description__img -->
    </div><!-- /.topMv__description__inner -->
  </div><!-- /.topMv__description -->
</section><!-- /.topMv -->

<section class="mainContents">
  <section class="mainContents__ttlTxtBlock">
    <h2 class="mainContents__ttlTxtBlock--ttl">HTML&CSS一覧</h2><!-- /.mainContents__ttlTxtBlock--ttl -->
    <p class="mainContents__ttlTxtBlock--txt">HTML&CSSを学習しよう</p>
    <!-- /.mainContents__ttlTxtBlock--txt -->
  </section><!-- /.mainContents__ttlTxtBlock -->

  <?php
  $args = array(
    'post_type' => 'studyhtmlcss', //カスタム投稿タイプ名
    'posts_per_page' => 3 //取得する投稿の件数
  );
  $my_query = new WP_Query($args);
  ?>

  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <!-- サブループスタート -->
    <?php get_template_part('inc/parts-archive-main-contents') ?>

    <?php
    $get_post_type_name = esc_html(get_post_type_object(get_post_type())->name);
    $archive_post_type_url = get_post_type_archive_link($get_post_type_name);
    ?>
    <!-- 現在の投稿タイプを取得し、その投稿タイプの一覧のURLを取得 -->
  <?php endwhile; ?>
  <!-- サブループ終わり -->
  <?php wp_reset_postdata(); ?>
  <!-- メインループに戻す -->

  <section class="mainContents__btn">
    <button><a href="<?php echo $archive_post_type_url ?>">一覧を見る</a></button>
  </section><!-- /.mainContents__btn -->



  <section class="mainContents__ttlTxtBlock">
    <h2 class="mainContents__ttlTxtBlock--ttl">JavaScript一覧</h2><!-- /.mainContents__ttlTxtBlock--ttl -->
    <p class="mainContents__ttlTxtBlock--txt">JavaScriptを学習しよう</p>
    <!-- /.mainContents__ttlTxtBlock--txt -->
  </section><!-- /.mainContents__ttlTxtBlock -->

  <?php
  $args = array(
    'post_type' => 'studyjavascript', //カスタム投稿タイプ名
    'posts_per_page' => 3 //取得する投稿の件数
  );
  $my_query = new WP_Query($args);
  ?>

  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <!-- サブループスタート -->
    <?php get_template_part('inc/parts-archive-main-contents') ?>

    <?php
    $get_post_type_name = esc_html(get_post_type_object(get_post_type())->name);
    $archive_post_type_url = get_post_type_archive_link($get_post_type_name);
    ?>
    <!-- 現在の投稿タイプを取得し、その投稿タイプの一覧のURLを取得 -->
  <?php endwhile; ?>
  <!-- サブループ終わり -->
  <?php wp_reset_postdata(); ?>
  <!-- メインループに戻す -->

  <section class="mainContents__btn">
    <button><a href="<?php echo $archive_post_type_url ?>">一覧を見る</a></button>
  </section><!-- /.mainContents__btn -->



  <section class="mainContents__ttlTxtBlock">
    <h2 class="mainContents__ttlTxtBlock--ttl">発信者一覧</h2><!-- /.mainContents__ttlTxtBlock--ttl -->
    <p class="mainContents__ttlTxtBlock--txt">お気に入りの発信者を見つけよう</p>
    <!-- /.mainContents__ttlTxtBlock--txt -->
  </section><!-- /.mainContents__ttlTxtBlock -->

  <?php
  $args = array(
    'post_type' => 'author', //カスタム投稿タイプ名
    'posts_per_page' => 3 //取得する投稿の件数
  );
  $my_query = new WP_Query($args);
  ?>

  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <!-- サブループスタート -->
    <?php get_template_part('inc/parts-archive-main-contents') ?>

    <?php
    $get_post_type_name = esc_html(get_post_type_object(get_post_type())->name);
    $archive_post_type_url = get_post_type_archive_link($get_post_type_name);
    ?>
    <!-- 現在の投稿タイプを取得し、その投稿タイプの一覧のURLを取得 -->
  <?php endwhile; ?>
  <!-- サブループ終わり -->
  <?php wp_reset_postdata(); ?>
  <!-- メインループに戻す -->

  <section class="mainContents__btn">
    <button><a href="<?php echo $archive_post_type_url ?>">一覧を見る</a></button>
  </section><!-- /.mainContents__btn -->
</section><!-- /.mainContents -->

<?php get_footer(); ?>