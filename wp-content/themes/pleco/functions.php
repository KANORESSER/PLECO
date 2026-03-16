<?php

function pleco_setup() {
  // アイキャッチ画像
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'pleco_setup');

function pleco_enqueue() {

  /* CSS */
  wp_enqueue_style(
    'pleco-style',
    get_stylesheet_uri()
  );

  $styles = [
    'variables',
    'base',
    // 'overlay',
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
    wp_enqueue_style(
      "pleco-" . $style,
      get_template_directory_uri() . "/css/{$style}.css",
      [],
      filemtime(get_template_directory() . "/css/{$style}.css")
    );
  }

  // 下層ページ
  if (is_page('startup-support')) {
    wp_enqueue_style(
      'startup-support-page',
      get_template_directory_uri() . '/css/startup-support-page.css'
    );
  }

  if (is_page('management')) {
    wp_enqueue_style(
      'management-page',
      get_template_directory_uri() . '/css/management-page.css'
    );
  }

  if (is_page('price')) {
    wp_enqueue_style(
      'price-page',
      get_template_directory_uri() . '/css/price-page.css'
    );
  }

  if (is_page('contact')) {
    wp_enqueue_style(
      'contact-page',
      get_template_directory_uri() . '/css/contact-page.css'
    );
  }

  if (is_home() || is_archive() || is_category()) {
    wp_enqueue_style(
      'archive',
      get_template_directory_uri() . '/css/archive.css',
      array(),
      null
    );
  }

  if (is_single()) {
    wp_enqueue_style(
      'single',
      get_template_directory_uri() . '/css/single.css'
    );
  }
  
  /* JS */
  wp_enqueue_script(
    'pleco-script',
    get_template_directory_uri() . '/js/script.js',
    array(),
    null,
    true
  );
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