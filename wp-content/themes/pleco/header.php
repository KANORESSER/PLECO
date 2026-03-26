<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/logo/ロゴ-グラデーション.png">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- header -->
<header class="site-header">
  <div class="header-inner">
    <a class="brand" href="<?php echo home_url('/'); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo/PLECO-rogo.png" alt="株式会社PLECO" class="brand-logo">
      <div class="brand-name-wrapper">
        <div class="brand-name">株式会社PLECO</div>
        <div class="brand-sub">民泊運営をトータルサポート</div>
      </div>
    </a>

    <nav class="nav a-hover">
      <a href="/about">会社紹介</a>
      <a href="/startup-support">民泊開業支援</a>
      <a href="/management">民泊運営代行</a>
      <a href="/price">料金プラン</a>
      <a href="<?php echo home_url('/#works'); ?>">実績</a>
      <a href="/news">お知らせ</a>
    </nav>

    <div class="header-cta">
      <a class="btn btn-ghost" href="/price">料金プラン</a>
      <a class="btn" href="/contact">お問い合わせ</a>
    </div>

    <button class="hamburger" id="hamburger" aria-label="メニュー">
      <span></span><span></span><span></span>
    </button>
  </div>

  <!-- sp menu -->
  <div class="sp-menu a-hover" id="spMenu">
    <a href="/about">会社紹介</a>
    <a href="/startup-support">民泊開業支援</a>
    <a href="/management">民泊運営代行</a>
    <a href="/price">料金プラン</a>
    <a href="<?php echo home_url('/#works'); ?>">実績</a>
    <a href="/news">お知らせ</a>
  </div>
</header>