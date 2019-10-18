<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <title>sample</title>
  <meta name="description" content="">

  <meta property="og:title" content="sample">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://example.com/img/ogp.png">
  <meta property="og:site_name" content="sample">
  <meta property="og:description" content="">
  <meta name="twitter:card" content="summary_large_image">

  <link rel="icon" href="./img/icon-home.png">
  <?php wp_head(); ?>
</head>

<body>

  <!-- header -->
  <header id="header">
    <div class="inner">

      <h1 class="header-logo"><a href="/">sample</a></h1><!-- /header-logo -->
      <div class="header-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /header-sub -->

      <!-- drawer -->
      <div class="drawer">
        <div class="drawer-icon">
          <span class="drawer-open"><i class="fas fa-bars"></i></span><!-- /drawer-open -->
          <span class="drawer-close"><i class="fas fa-times"></i></span><!-- drawer-close -->
        </div><!-- /drawer-icon -->

        <!-- drawer-content -->
        <div class="drawer-content">
          <nav class="drawer-nav">
            <ul class="drawer-list">
              <li class="m_icon1 menu-item"><a href="http://test.local/%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9/">アクセス</a></li>
              <li class="m_icon2 menu-item"><a href="#">メニュー2</a></li>
              <li class="m_icon3 menu-item"><a href="#">メニュー3</a></li>
              <li class="m_icon4 menu-item"><a href="#">メニュー4</a></li>
              <li class="m_icon5 menu-item"><a href="#">メニュー5</a></li>
            </ul>
          </nav>
        </div><!-- /drawer-content -->
      </div><!-- /drawer -->

    </div><!-- /inner -->
  </header><!-- /header -->

  <!-- header-nav -->
  <nav class="header-nav">
    <div class="inner">
      <ul class="header-list">
        <li class="m_icon1 menu-item"><a href="http://test.local/%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9/">アクセス</a></li>
        <li class="m_icon2 menu-item"><a href="#">メニュー2</a></li>
        <li class="m_icon3 menu-item"><a href="#">メニュー3</a></li>
        <li class="m_icon4 menu-item"><a href="#">メニュー4</a></li>
        <li class="m_icon5 menu-item"><a href="#">メニュー5</a></li>
      </ul>
    </div><!-- /inner -->
  </nav><!-- header-nav -->