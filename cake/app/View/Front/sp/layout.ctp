<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="<?php if (!empty($description)) echo $description; ?>" />
  <title><?php if (!empty($title)) echo $title; ?></title>
  <link rel="stylesheet" href="/assets/sp/css/style.css?v1218">
  <script src="/assets/sp/js/swiper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/common/speed-icon.png">
    <link rel="icon" href="/assets/img/common/favicon.ico" />
    <!-- ogp -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if (!empty($title)) echo $title; ?>" />
    <meta property="og:description" content="日本橋で風俗をお探しなら在籍女の子数、女の子の可愛さ、料金全てにおいてお客様に満足いただけること間違いなしの当店へ是非一度ご来店下さい。" />
    <meta property="og:image" content="https://nippon.speed-speed.com.38-195.execute.jp/assets/img/common/ogp-nippon.jpg">
    <meta property="og:image:alt" content="ホテヘルグループSPEED日本橋店">
    <meta property="og:url" content="https://nippon.speed-speed.com.38-195.execute.jp/" />
    <meta property="og:site_name" content="ホテヘルグループSPEED日本橋店" />
  <!-- ////////////////アナリティクス//////////////// -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NBPFNWK17B"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-NBPFNWK17B');
  </script>
  <!-- ////////////////アナリティクス//////////////// -->
</head>

<body>
  <div class="container">

    <?php echo $this->element('../Front/sp/header'); ?>

    <?php echo $content_for_layout; ?>

    <?php echo $this->element('../Front/sp/footer'); ?>

  </div>
</body>

</html>
