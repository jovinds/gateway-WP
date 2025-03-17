<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="description"
    content="API Gatewayはフィリピンをリードする大手デベロッパーであるDMCI Homesより正式に営業認可を得ている日本正規総代理店です。フィリピンの不動産はAPI Gatewayにお任せください。下見から購入まで一貫サポート。">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Title -->
  <title>
  <?php
    if(is_home()) {
      echo 'API Gateway株式会社｜フィリピン新築コンドミニアム｜DMCI Homes日本正規総代理店';
    } elseif(is_page('about')) {
      echo '会社概要｜API Gateway株式会社｜フィリピン新築コンドミニアム｜DMCI Homes日本正規総代理店';
    } elseif(is_page('service')) {
      echo 'サービス｜API Gateway株式会社｜フィリピン新築コンドミニアム｜DMCI Homes日本正規総代理店';
    } elseif (is_page('partner')) {
      echo 'パートナー募集｜API Gateway株式会社｜フィリピン新築コンドミニアム｜DMCI Homes日本正規総代理店';
    }
  ?>
</title>
  <!-- Favicon -->
  <head>
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <!-- Web Manifest -->
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
    <!-- Safari Mask Icon -->
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <?php wp_head(); ?>
</head>
  <style>
    .post-point ul li:before {
    position: absolute;
    content: "";
    background-image: url('/wp-content/themes/mytheme/img/icn-point.png');
    background-size: cover;
    background-position: center;
    width: 32px;
    height: 32px;
    top: -3px;
    left: 0;
  }

  .post-next li .post-next__img.en {
  background: url('/wp-content/themes/mytheme/img/img-english/bg-english.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.post-next li .post-next__img.ph {
  background: url('/wp-content/themes/mytheme/img/img-account/bg-account.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.post-next li .post-next__img.cl {
  background: url('/wp-content/themes/mytheme/img/bg-coumn.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
</style>

  <meta name="msapplication-TileColor" content="#d01919">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body>

  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="cssload-container">
      <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
    </div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Navbar Area -->
    <div class="palatin-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <nav class="classy-navbar justify-content-between" id="palatinNav">
            <a href="index.html" class="nav-brand topLogo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-big.png" alt="API Gateway株式会社"></a>
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <div class="classy-menu">
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <div class="classynav">
                <ul>
                <li><a href="<?php echo home_url(); ?>">Home<br><span>ホーム</span></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>">About Us<br><span>会社概要</span></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('service')); ?>">Service<br><span>サービス</span></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('partner')); ?>">Partner<br><span>パートナー募集</span></a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact<br><span>お問い合わせ</span></a></li>
                <li class="classynav-login"><a href="<?php echo get_permalink(get_page_by_path('login')); ?>">Login<br><span>マイページログイン</span></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->