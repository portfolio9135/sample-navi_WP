<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/_css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /><!-- swiper__スライダー実装 -->
  <script src="https://kit.fontawesome.com/89f8518d26.js" crossorigin="anonymous"></script><!-- Font Awesome__アイコンの使用 -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__inner">
      <div class="hmMenuIcon">
        <span></span>
        <span></span>
        <span></span>
      </div><!-- /.hmMenuIcon -->
      <div class="header__logo">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>">サンプルなび@</a></h1>
      </div><!-- /.header__logo -->

      <?php
      //PC用のメニューIDを取得する
      $menu_name = 'pc_menu';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      //PC用のメニューIDを使って'pc_menu'の内容を全て取得する
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <div class="header__navPc">
        <ul class="header__navPc__list">
          <?php foreach ($menu_items as $item) : ?>
            <li><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
          <?php endforeach; ?>
        </ul><!-- /.header__navPc__list -->
      </div><!-- /.header__navPc   PCメニュー用 -->

      <?php
      //ハンバーガーメニュー用のメニューIDを取得する
      $menu_name = 'hamburger_menu';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      //ハンバーガーメニュー用のIDを使って'hamburger_menu'の内容を全て取得する
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <div class="header__nav hmNav">
        <ul class="header__nav__list">
          <?php foreach ($menu_items as $item) : ?>
            <li><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
          <?php endforeach; ?>
        </ul><!-- /.header__nav__list -->
      </div><!-- /.header__nav   .hmNav ハンバーガーメニュー用 -->
    </div><!-- /.header__inner -->
  </header><!-- /.header -->