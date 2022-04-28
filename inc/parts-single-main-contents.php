<?php
$multiple_tags = get_field('tag');

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
      <span>＞</span>
      <span class="breadCrumb__list--txt"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><!-- /.breadCrumb__list--txt -->
    </div><!-- /.breadCrumb__list -->
  </div><!-- /.breadCrumb__inner -->
</section><!-- /.breadCrumb -->

<section class="singleContents">
  <section class="singleContents__ttl">
    <h2><?php the_title(); ?></h2>
  </section><!-- /.singleContents__ttl -->

  <section class="singleContents__tag">
    <ul class="singleContents__tag__list">
      <?php foreach ($multiple_tags as $tag) : ?>
        <li><?php echo $tag ?></li>
      <?php endforeach; ?>
    </ul><!-- /.singleContents__tag__list -->
  </section><!-- /.singleContents__tag -->

  <section class="singleContents__main">
    <section class="singleContents__main__img">
      <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
          <!-- Slides -->
          <img class="swiper-slide" src="<?php the_field('contents_img_img01'); ?>">
          <img class="swiper-slide" src="<?php the_field('contents_img_img02'); ?>">
          <img class="swiper-slide" src="<?php the_field('contents_img_img03'); ?>">
          <img class="swiper-slide" src="<?php the_field('contents_img_img04'); ?>">
        </div>

        <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
      </div>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="imgFrame swiper-slide"><img src="<?php the_field('contents_img_img01'); ?>" alt=""></div><!-- /.imgFrame -->
          <div class="imgFrame swiper-slide"><img src="<?php the_field('contents_img_img02'); ?>" alt=""></div><!-- /.imgFrame -->
          <div class="imgFrame swiper-slide"><img src="<?php the_field('contents_img_img03'); ?>" alt=""></div><!-- /.imgFrame -->
          <div class="imgFrame swiper-slide"><img src="<?php the_field('contents_img_img04'); ?>" alt=""></div><!-- /.imgFrame -->
        </div>
      </div>
    </section><!-- /.singleContents__main__img -->

    <section class="singleContents__main__info">
      <ul class="singleContents__main__info__list">
        <li>
          <div class="singleContents__main__info__list__label">発信者名</div>
          <!-- /.singleContents__main__info__list__label -->
          <div class="singleContents__main__info__list__value"><?php the_field('contents_name'); ?></div>
          <!-- /.singleContents__main__info__list__value -->
        </li>
        <li>
          <div class="singleContents__main__info__list__label">発信方法</div>
          <!-- /.singleContents__main__info__list__label -->
          <div class="singleContents__main__info__list__value"><?php the_field('contents_transmission_method'); ?></div>
          <!-- /.singleContents__main__info__list__value -->
        </li>
        <li>
          <div class="singleContents__main__info__list__label">初投稿日</div>
          <!-- /.singleContents__main__info__list__label -->
          <div class="singleContents__main__info__list__value"><?php the_field('contents_first_posted_date'); ?></div>
          <!-- /.singleContents__main__info__list__value -->
        </li>
        <li>
          <div class="singleContents__main__info__list__label">更新日</div>
          <!-- /.singleContents__main__info__list__label -->
          <div class="singleContents__main__info__list__value"><?php the_field('contents_update_date'); ?></div>
          <!-- /.singleContents__main__info__list__value -->
        </li>
        <li>
          <div class="singleContents__main__info__list__label">情報料金</div>
          <!-- /.singleContents__main__info__list__label -->
          <div class="singleContents__main__info__list__value"><?php the_field('contents_price'); ?></div>
          <!-- /.singleContents__main__info__list__value -->
        </li>
      </ul><!-- /.singleContents__main__info__list -->

      <section class="singleContents__main__info__btn">
        <button><a href="<?php $a = the_field('contents_page_url'); ?>" target="_blank" rel=”noopener noreferrer”><?php the_title(); ?>のページへ</a></button>
      </section><!-- /.singleContents__main__info__btn -->
    </section><!-- /.singleContents__main__info -->
  </section><!-- /.singleContents__main -->

  <section class="singleContents__ttl">
    <h2>発信者情報</h2>
  </section><!-- /.singleContents__ttl -->

  <section class="singleContents__table">
    <table>
      <tbody>
        <tr>
          <td>発信者名</td>
          <td><?php the_field('contents_name'); ?></td>
        </tr>
        <tr>
          <td>発信方法</td>
          <td><?php the_field('contents_transmission_method'); ?></td>
        </tr>
        <tr>
          <td>初投稿日</td>
          <td><?php the_field('contents_first_posted_date'); ?></td>
        </tr>
        <tr>
          <td>更新日</td>
          <td><?php the_field('contents_update_date'); ?></td>
        </tr>
        <tr>
          <td>情報料金</td>
          <td><?php the_field('contents_price'); ?></td>
        </tr>
      </tbody>
    </table>
  </section><!-- /.singleContents__table -->