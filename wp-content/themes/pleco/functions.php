<?php

function pleco_setup() {
  // アイキャッチ画像
  add_theme_support('post-thumbnails');
  // title
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'pleco_setup');

add_filter('pre_get_document_title', function($title) {
  if (is_front_page()) {
    return get_bloginfo('name');
  }
  return get_the_title() . ' | ' . get_bloginfo('name');
});

function pleco_enqueue() {

  /* CSS */
  wp_enqueue_style(
    'pleco-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  $styles = [
    'variables',
    'base',
    'overlay',
    'header',
    'hero',
    'about',
    'works',
    'contact',
    'footer',
    'responsive',
    'service-overview',
    'startup-support',
    'management',
    'price',
    'news'
  ];

  foreach ($styles as $style) {
    $path = get_template_directory() . "/css/{$style}.css";

    if (file_exists($path)) {
      wp_enqueue_style(
        "pleco-" . $style,
        get_template_directory_uri() . "/css/{$style}.css",
        [],
        filemtime($path)
      );
    }
  }

  // 下層ページ
  // about
  if (is_page('about')) {
    $path = get_template_directory() . '/css/page-about.css';
    if (file_exists($path)) {
      wp_enqueue_style(
        'page-about',
        get_template_directory_uri() . '/css/page-about.css',
        [],
        filemtime($path)
      );
    }
  }
  // price
  if (is_page('price')) {
    $path = get_template_directory() . '/css/page-price.css';

    if (file_exists($path)) {
      wp_enqueue_style(
        'page-price',
        get_template_directory_uri() . '/css/page-price.css',
        [],
        filemtime($path)
      );
    }
  }
  // management
  if (is_page('management')) {
    $path = get_template_directory() . '/css/page-management.css';
    if (file_exists($path)) {
      wp_enqueue_style(
        'page-management',
        get_template_directory_uri() . '/css/page-management.css',
        [],
        filemtime($path)
      );
    }
  }
  // startup-support
  if (is_page('startup-support')) {
    $path = get_template_directory() . '/css/page-startup-support.css';
    if (file_exists($path)) {
      wp_enqueue_style(
        'page-startup-support',
        get_template_directory_uri() . '/css/page-startup-support.css',
        [],
        filemtime($path)
      );
    }
  }
  // contact
  if (is_page('contact')) {
    $path = get_template_directory() . '/css/page-contact.css';
    if (file_exists($path)) {
      wp_enqueue_style(
        'page-contact',
        get_template_directory_uri() . '/css/page-contact.css',
        [],
        filemtime($path)
      );
    }
  }
  // privacy
  if (is_page('privacy-policy')) {
    $path = get_template_directory() . '/css/page-privacy-policy.css';
    if (file_exists($path)) {
      wp_enqueue_style(
        'page-privacy-policy',
        get_template_directory_uri() . '/css/page-privacy-policy.css',
        [],
        filemtime($path)
      );
    }
  }


// archive
if (is_home() || is_page('news') || is_category()) {

  $path = get_template_directory() . '/css/home.css';

  if (file_exists($path)) {
    wp_enqueue_style(
      'home',
      get_template_directory_uri() . '/css/home.css',
      [],
      filemtime($path)
    );
  }
}

  // single
  if (is_single()) {

    $path = get_template_directory() . '/css/single.css';

    if (file_exists($path)) {
      wp_enqueue_style(
        'single',
        get_template_directory_uri() . '/css/single.css',
        [],
        filemtime($path)
      );
    }
  }

  /* JS */
  $js_path = get_template_directory() . '/js/script.js';
  if (file_exists($js_path)) {
    wp_enqueue_script(
      'pleco-script',
      get_template_directory_uri() . '/js/script.js',
      [],
      filemtime($js_path),
      true
    );
  }
}

add_action('wp_enqueue_scripts', 'pleco_enqueue');


// h2・h3対応 目次自動生成
function add_table_of_contents($content) {

    if (is_single() && in_the_loop() && is_main_query()) {

        preg_match_all('/<h([23]).*?>(.*?)<\/h[23]>/i', $content, $matches, PREG_SET_ORDER);

        if (!empty($matches)) {

            $toc = '<div class="toc">';
            $toc .= '<p class="toc__title">目次</p>';
            $toc .= '<ul class="toc__list">';

            $current_h2 = false;
            $index = 0;
            $h2_count = 1;

            foreach ($matches as $match) {

                $tag = $match[1]; // 2 or 3
                $text = strip_tags($match[2]);
                $id = 'toc-' . $index;

                // 見出しにID + 番号追加
                if ($tag == 2) {
                    $heading = '<h2 id="'.$id.'"><span class="heading-num">'.$h2_count.'</span> '.$match[2].'</h2>';
                } else {
                    $heading = '<h3 id="'.$id.'">'.$match[2].'</h3>';
                }
                $content = preg_replace(
                    '/'.preg_quote($match[0], '/').'/',
                    $heading,
                    $content,
                    1
                );
                if ($tag == 2) {
                    if ($current_h2) {
                        $toc .= '</ul></li>';
                    }

                    $text = preg_replace('/^\d+\.\s*/', '', $text);

                    $toc .= '<li class="toc__item toc__item--h2">';
                    $toc .= '<a href="#'.$id.'">';
                    $toc .= '<span class="toc__num">'.$h2_count.'</span>';
                    $toc .= '<span class="toc__text">'.$text.'</span>';
                    $toc .= '</a>';
                    $toc .= '<ul class="toc__sublist">';

                    $current_h2 = $h2_count;

                    $h3_count = 1;

                    $h2_count++;

                } elseif ($tag == 3 && $current_h2) {

                    $toc .= '<li class="toc__item toc__item--h3">';
                    $toc .= '<a href="#'.$id.'">';
                    $toc .= '<span class="toc__subnum">'.$current_h2.'.'.$h3_count.'</span>';
                    $toc .= '<span class="toc__subtext">'.$text.'</span>';
                    $toc .= '</a>';
                    $toc .= '</li>';

                    $h3_count++;
                }

                $index++;
            }

            if ($current_h2) {
                $toc .= '</ul></li>';
            }

            $toc .= '</ul></div>';

            $content = preg_replace('/<h2/', $toc . '<h2', $content, 1);
        }
    }

    return $content;
}
add_filter('the_content', 'add_table_of_contents');
// サイドバー用 目次取得関数
function get_sidebar_toc() {

    global $post;

    if (!$post || !is_single()) return;

    $content = $post->post_content;

    preg_match_all('/<h([23]).*?>(.*?)<\/h[23]>/i', $content, $matches, PREG_SET_ORDER);

    if (empty($matches)) return;

    $toc = '<div class="toc toc--sidebar">';
    $toc .= '<p class="toc__title">目次</p>';
    $toc .= '<ul class="toc__list">';

    $current_h2 = false;
    $index = 0;

    foreach ($matches as $match) {

        $tag = $match[1];
        $text = strip_tags($match[2]);
        $id = 'toc-' . $index;

        if ($tag == 2) {

            if ($current_h2) {
                $toc .= '</ul></li>';
            }

            $toc .= '<li class="toc__item toc__item--h2">';
            $toc .= '<a href="#'.$id.'">'.$text.'</a>';
            $toc .= '<ul class="toc__sublist">';

            $current_h2 = true;

        } elseif ($tag == 3 && $current_h2) {

            $toc .= '<li class="toc__item toc__item--h3">';
            $toc .= '<a href="#'.$id.'">'.$text.'</a>';
            $toc .= '</li>';
        }

        $index++;
    }

    if ($current_h2) {
        $toc .= '</ul></li>';
    }

    $toc .= '</ul></div>';

    echo $toc;
}