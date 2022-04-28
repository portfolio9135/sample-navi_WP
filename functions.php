<?php
add_action('init', function () {
  //アイキャッチ画像のサポート
  add_theme_support('post-thumbnails');

  //タイトルタグを自動生成
  add_theme_support('title-tag');

  //メニューをサポート
  register_nav_menus(array(
    'hamburger_menu' => 'ハンバーガーメニュー',
    'pc_menu' => 'PCメニュー',
    'footer_menu' => 'フッターメニュー',
  ));
});


//カスタム投稿タイプの追加【HTML&CSS一覧】
add_action('init', function () {
  register_post_type(
    'studyhtmlcss',
    array(
      'label' => 'HTML&CSS一覧@',
      'description' => 'HTML&CSSを学習しよう@',
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-youtube',

      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions'
      ),
      'has_archive' => true,
    )
  );
});

//カスタム投稿タイプの追加【JavaScript一覧】
add_action('init', function () {
  register_post_type(
    'studyjavascript',
    array(
      'label' => 'JavaScript一覧@',
      'description' => 'JavaScriptを学習しよう@',
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-youtube',

      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions'
      ),
      'has_archive' => true,
    )
  );
});

//カスタム投稿タイプの追加【発信者一覧】
add_action('init', function () {
  register_post_type(
    'author',
    array(
      'label' => '発信者一覧@',
      'description' => 'お気に入りの発信者を見つけよう@',
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-buddicons-buddypress-logo',

      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions'
      ),
      'has_archive' => true,
    )
  );
});

//ウィジェットの追加【メインビジュアル部分】
function theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'TOPメインビュジュアル',
    'id' => 'top-mv',
    'description' => 'トップページのメインビュジュアル部分にコンテンツを表示します',
  ));

  //ウィジェットの追加【フッター部分】
  register_sidebar(array(
    'name' => 'フッターコンテンツ',
    'id' => 'footer',
    'description' => 'フッター部分にコンテンツを表示します',
  ));
}
add_action('widgets_init', 'theme_widgets_init');