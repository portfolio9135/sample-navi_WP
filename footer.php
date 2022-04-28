<footer class="footer">

  <div class="footer__inner">
    <div class="footer__img">
      <ul class="footer__img__list">
        <?php if (is_active_sidebar('footer')) : ?>
          <?php dynamic_sidebar('footer'); ?>
        <?php endif; ?>
      </ul><!-- /.footer__img__list -->
    </div><!-- /.footer__img -->

    <?php
    //フッター用のメニューIDを取得する
    $menu_name = 'footer_menu';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    //フッター用のメニューIDを使って'footer_menu'の内容を全て取得する
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <div class="footer__info">
      <ul class="footer__info__list">
        <?php foreach ($menu_items as $item) : ?>
          <li><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
        <?php endforeach; ?>
      </ul><!-- /.footer__info__list -->
      <small class="footer__info__copyright">
        &copy; サンプルなび 2022
      </small><!-- /.footer__info__copyright -->
    </div><!-- /.footer__info -->
  </div><!-- /.footer__inner -->
</footer><!-- /.footer -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script><!-- jQuery本体_CDN読み込み -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script><!-- Swiper_CDN読み込み -->

<script>
  //【スライダー】
  const swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4
  });

  const swiper2 = new Swiper(".mySwiper2", {
    thumbs: {
      swiper: swiper
    },
    loop: true,
    speed: 500,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  //【ハンバーガーメニューアイコンをクリック後、左からからメニューが出てくる】
  $(function() {

    $(".hmMenuIcon").click(function() {
      $(this).toggleClass("clickOpen");
      $(".hmNav").toggleClass("pullTheDrawer");
    });

    //【ハンバーガーメニューが出ている時は、背景のスクロール停止】
    $(".hmMenuIcon").click(function() {
      if ($(".hmNav").hasClass("pullTheDrawer")) {
        $("html").addClass("moveScroll");
      } else {
        $("html").removeClass("moveScroll");
      }
    });

    //【ヘッダー上からスライドダウン_スクロールイベント】
    let
      $win = $(window),
      $header = $('header'),
      $headerHeight = $(".header").outerHeight();

    $win.on('load scroll', function() {
      if ($(this).scrollTop() > $headerHeight && $header.hasClass("is-fixed") == false) {
        $header.addClass("is-fixed");
        $header.css({
          "top": -$headerHeight
        });
        $header.animate({
          "top": 0
        }, 600);
      } else if ($(this).scrollTop() < 1 && $header.hasClass("is-fixed") == true) {
        $header.removeClass("is-fixed");
      }
    });


    //【お問い合わせフォームの入力部分クリック後に枠線を表示させる】
    const $cfi = document.getElementsByClassName('contact__form__item');

    for (let i = 0; i < $cfi.length; i++) {
      $cfi[i].addEventListener('click', function() {

        //①一旦すべての$cfiのis-activeクラスを削除する
        for (let j = 0; j < $cfi.length; j++) {
          $cfi[j].classList.remove('is-active');
        }

        //②$cfiにis-activeクラスを追加する
        $cfi[i].classList.add('is-active');
      })
    }


  });
</script>

<?php wp_footer(); ?>
</body>

</html>