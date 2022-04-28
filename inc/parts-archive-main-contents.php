<section class="mainContents__card">
  <section class="mainContents__card__img">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
  </section><!-- /.mainContents__card__img -->
  <section class="mainContents__card__info">
    <h3 class="mainContents__card__info__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!-- /.mainContents__card__info__ttl -->
    <p class="mainContents__card__info__author"><?php the_field('contents_name'); ?></p><!-- /.mainContents__card__info__author -->
    <ul class="mainContents__card__info__tag">
      <?php foreach ($multiple_tags as $tag) : ?>
        <li><?php echo $tag ?></li>
      <?php endforeach; ?>
    </ul><!-- /.mainContents__card__info__tag -->
    <ul class="mainContents__card__info__list">
      <li>
        <p>発信方法</p>
        <p><?php the_field('contents_transmission_method'); ?></p>
      </li>
      <li>
        <p>更新日</p>
        <p><?php the_field('contents_update_date'); ?></p>
      </li>
      <li>
        <p>料金</p>
        <p><?php the_field('contents_price'); ?></p>
      </li>
    </ul><!-- /.mainContents__card__info__list -->
    <p class="mainContents__card__info__excerpt">
      ここは抜粋テキストが入ります。ここは抜粋テキストが入ります。ここは抜粋テキストが入ります。ここは抜粋テキストが入ります。
    </p><!-- /.mainContents__card__info__excerpt -->
  </section><!-- /.mainContents__card__info -->
</section><!-- /.mainContents__card -->