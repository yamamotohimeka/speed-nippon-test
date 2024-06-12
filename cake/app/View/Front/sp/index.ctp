<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="<?php if (!empty($description)) echo $description; ?>" />
  <title><?php if (!empty($title)) echo $title; ?></title>
  <link rel="stylesheet" href="../assets/sp/css/style.css?v1218">
  <script src="/assets/sp/js/swiper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <link rel="icon" href="/assets/img/common/favicon.ico" />
    <!-- ogp -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if (!empty($title)) echo $title; ?>" />
    <meta property="og:description" content="<?php echo SHOP_AREA_NAME; ?>で風俗をお探しなら在籍女の子数、女の子の可愛さ、料金全てにおいてお客様に満足いただけること間違いなしの当店へ是非一度ご来店下さい。" />
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/img/common/ogp-kyoubashi.jpg">
    <meta property="og:image:alt" content="ホテヘルグループ<?php echo SITE_NAME; ?>">
    <meta property="og:url" content="<?php echo SITE_URL; ?>" />
    <meta property="og:site_name" content="ホテヘルグループ<?php echo SITE_NAME; ?>" />
</head>

<!-- head内の部分 -->

<body>
  <div class="container">
    <div class="nippon-bg">
      <section class="shop-entrance">
        <p class="shop-entrance__desc">
          素人娘秘密のアルバイト<span>スピード日本橋店</span>
        </p>
        <div class="nippon-toptext" style="top:34%;">
          <h1 class="nippon-toptext__heading">
            <img src="/assets/sp/img/shop-entrance/nippon-text-sp.png" alt="">
          </h1>

          <ruby class="shop-entrance__small">
            <span>It is the most famous shop in Osaka with the most cute girls!</span>
            <span>Please spend a special service and healing time.</span>
          </ruby>
          <div class="shop-entrance__btn"><a href="/top/">
              <img src="/assets/sp/img/shop-entrance/entry-btn-sp.png" alt="">
            </a></div>
        </div>
          <p class="shop-entrance__exit">
              18歳未満の方のご入場はご遠慮頂いております。<a href="https://www.yahoo.co.jp/">EXIT</a></p>


      </section>

      <section class="entrance-banner">
        <div class="entrance-banner__box">
          <div><a href="http://speed-recruit.net/" target="_blank" rel="noopener"><img src="/assets/sp/img/shop-entrance/speed-recruit.png" alt=""></a></div>
          <div><a href="http://mens.speed-recruit.net/" target="_blank" rel="noopener"><img src="/assets/sp/img/shop-entrance/men-recruit.png" alt=""></a></div>
        </div>
        <div class="entrance-banner__form">
          <!-- ↓スマホ版にもエントランスページに相互リンクを表示をして頂きたいです -->

          <!-- ↓.entrance-banner__descを追加しました -->

          <div class="flex entrance-banner__wrap">
            <dl class="detailed">
              <dt>サイト名</dt>
              <dd>SPEED</dd>
              <dt>URL</dt>
              <dd>https://nippon.speed-speed.com.38-195.execute.jp</dd>
              <dt>紹介文</dt>
              <dd>関西最大級ホテルヘルスグループ<br />女の子在籍数、サービス、価格すべてに自信アリ！<br />絶対に満足していただけます。</dd>
            </dl>
            <div>
              <p class="entrance-banner__text">当店では相互リンクを大募集しております。<br />必要な場合は以下のバナー画像・紹介文をご利用下さい。<br />下記相互リンク申し込みフォームよりご連絡ください。<br />貴ホームぺージから当店ホームページへのリンクを確認次第、当店ホームページから貴ホームページへリンクさせていただきます。</p>
              <!-- pc版同様、bannerがあれば表示して頂きたいです -->
              <?php if (!empty($printArray['Banner'])) { ?>
              <dl class="banner">
                <?php foreach ($printArray['Banner'] as $key => $value) { ?>
                  <?php if (!empty($value['Image'][0]['file']) and $value['Image'][0]['model'] == 0) { ?>
                    <dt><?php echo $value['Banner']['name']; ?></dt>
                    <dd><img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg" alt="<?php echo $value['Banner']['comment']; ?>"></dd>
                  <?php } ?>
                <?php } ?>
              </dl>
              <?php } ?>
            </div>
          </div>

          <div class="flex entrance-banner__wrap">
            <h2><span class="entrance-banner__text">相互リンクお申し込みフォーム</span></h2>
            <p class="tx_right"><span>*</span>入力必須</p>
            <form action="/link/" id="LinkLinkForm" method="post" accept-charset="utf-8">
              <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
              <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                  <tr>
                    <th>
                      <label for="LinkName">貴サイト名<span>*</span></label>
                    </th>
                    <td>
                      <div class="input text"><input name="data[Link][name]" maxlength="40" id="LinkName" required="required" type="text" /></div>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <label for="LinkUrl">貴サイトURL<span>*</span></label>
                    </th>
                    <td>
                      <div class="input text"><input name="data[Link][url]" maxlength="40" id="LinkUrl" required="required" type="text" /></div>
                    </td>
                  </tr>
                  <tr>
                    <th><label for="LinkBannerUrl">バナー画像URL</label></th>
                    <td>
                      <div class="input text"><input name="data[Link][banner_url]" id="LinkBannerUrl" type="text" /></div>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <label for="LinkChargeName">担当者様お名前<span>*</span></label>
                    </th>
                    <td>
                      <div class="input text"><input name="data[Link][charge_name]" id="LinkChargeName" required="required" type="text" /></div>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <label for="LinkMailaddress">担当者様メールアドレス<span>*</span></label>
                    </th>
                    <td>
                      <div class="input text"><input name="data[Link][mailaddress]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="LinkMailaddress" required="required" type="text" /></div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="submit">
                <input type="submit" value="送信する" />
              </div>
            </form>
          </div>
        </div>

        <div class="links-box content">
    <?php foreach($linkCategoryArray AS $key2 => $value2){ ?>
    <?php if(!empty($printArray['Link'][$key2])){ ?>
      <h2><span><?php echo $value2; ?></span></h2>
      <ul>
        <?php foreach($printArray['Link'][$key2] AS $key => $value){ ?>
        <li>
          <a target="_blank" href="<?php echo $value['Link']['url']; ?>">
            <?php if(!empty($value['Image'][0]['file']) AND $value['Image'][0]['model'] == 0){ ?>
                <img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg"  alt="<?php echo $value['Link']['comment']; ?>">
            <?php } ?>
          </a>
        </li>
        <?php } ?>
      </ul>
    <?php } ?>
    <?php } ?>
            <div class="vanilla">
               　<div><p style="text-align: center; padding-bottom: 3px;margin: 0;">

                        <a rel="nofollow" href="https://kansai.qzin.jp/speed/?v=official" target="_blank"><img src="https://ad.qzin.jp/img/vanilla468-60.gif" width="468" border="0" alt="スピード 日本橋店で稼ぐならバニラ求人"></a></p>

                </div>
                     <div><p style="text-align: center; padding-bottom: 3px;margin: 0;">

                        <a rel="nofollow" href="https://kansai.qzin.jp/speedgroup/?v=official" target="_blank"><img src="https://ad.qzin.jp/img/vanilla468-60.gif" width="468" border="0" alt="スピードグループで稼ぐならバニラ求人"></a></p>

                </div>
            </div>

            <div style="display: flex; flex-direction: column; margin-bottom: 10px; gap: 6px; order: 2;">
                <div style="display: flex; align-items: center;">
                    <div>
                        <a style="display: block;" href="https://www.cityheaven.net/" target="_blank" rel="noopener"><img
                                    style="display: block;" loading="lazy" src="https://img.cityheaven.net/img/mutual_link/heaven_logo.jpg"
                                    alt="ヘブンネット" width="236" height="68" border="0"></a>
                    </div>
                    <div>
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <a style="display: block;" href="https://www.cityheaven.net/osaka/shop-list/biz6/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.cityheaven.net/img/mutual_link/01osaka.jpg" alt="大阪デリヘル" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.cityheaven.net/osaka/A2701/A270101/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.cityheaven.net/img/mutual_link/02umeda.jpg" alt="梅田風俗" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.cityheaven.net/osaka/A2701/A270103/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.cityheaven.net/img/mutual_link/03juso.jpg" alt="十三風俗" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.cityheaven.net/osaka/A2701/A270102/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.cityheaven.net/img/mutual_link/04kyobashi.jpg" alt="京橋風俗" width="58" height="34"
                                                   border="0"></a>
                        </div>
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <a style="display: block;" href="https://www.cityheaven.net/osaka/A2702/A270202/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.cityheaven.net/img/mutual_link/05nihonbashi.jpg" alt="日本橋風俗" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.cityheaven.net/hyogo/shop-list/biz6/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.cityheaven.net/img/mutual_link/06hyogo.jpg" alt="兵庫デリヘル" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.cityheaven.net/kyoto/shop-list/biz6/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.cityheaven.net/img/mutual_link/07kyoto.jpg" alt="京都デリヘル" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.cityheaven.net/shiga/" target="_blank" rel="noopener"><img
                                        style="display: block;" loading="lazy" src="https://img.cityheaven.net/img/mutual_link/08shiga.jpg"
                                        alt="滋賀風俗" width="58" height="34" border="0"></a>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: center;">
                    <div>
                        <a style="display: block;" href="https://www.girlsheaven-job.net/" target="_blank" rel="noopener"><img
                                    style="display: block;" loading="lazy" src="https://img.girlsheaven-job.net/img/fppc/girls.jpg" alt="ガールズヘブン"
                                    width="236" height="68" border="0"></a>
                    </div>
                    <div>
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <a style="display: block;" href="https://www.girlsheaven-job.net/osaka/ma-49/sa-465/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.girlsheaven-job.net/img/fppc/01umeda.jpg" alt="梅田風俗求人" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.girlsheaven-job.net/osaka/ma-49/sa-469/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.girlsheaven-job.net/img/fppc/02nanba.jpg" alt="難波風俗求人" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.girlsheaven-job.net/osaka/ma-49/sa-468/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.girlsheaven-job.net/img/fppc/03kyobashi.jpg" alt="京橋風俗求人" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.girlsheaven-job.net/osaka/ma-49/sa-470/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.girlsheaven-job.net/img/fppc/04nihonbashi.jpg" alt="日本橋風俗求人" width="58" height="34"
                                                   border="0"></a>
                        </div>
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <a style="display: block;" href="https://www.girlsheaven-job.net/osaka/" target="_blank" rel="noopener"><img
                                        style="display: block;" loading="lazy" src="https://img.girlsheaven-job.net/img/fppc/05osaka.jpg"
                                        alt="大阪風俗求人" width="58" height="34" border="0"></a>
                            <a style="display: block;" href="https://www.girlsheaven-job.net/kyoto/shop-list/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.girlsheaven-job.net/img/fppc/06kyoto.jpg" alt="京都風俗求人" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.girlsheaven-job.net/shiga/shop-list/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.girlsheaven-job.net/img/fppc/07shiga.jpg" alt="滋賀風俗求人" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://www.girlsheaven-job.net/hyogo/shop-list/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.girlsheaven-job.net/img/fppc/08hyogo.jpg" alt="兵庫風俗求人" width="58" height="34"
                                                   border="0"></a>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: center;">
                    <div>
                        <a style="display: block;" href="https://mensheaven.jp/" target="_blank" rel="noopener"><img
                                    style="display: block;" loading="lazy" src="https://img.mensheaven.jp/img/fppc/bnr/job.jpg" alt="ジョブヘブン"
                                    width="236" height="68" border="0"></a>
                    </div>
                    <div>
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <a style="display: block;" href="https://mensheaven.jp/8/osaka/ma-49/sa-465/shop-list/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.mensheaven.jp/img/fppc/bnr/01umeda.jpg" alt="梅田男性高収入" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://mensheaven.jp/8/osaka/ma-49/sa-466/shop-list/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.mensheaven.jp/img/fppc/bnr/02juso.jpg" alt="十三男性高収入" width="58" height="34" border="0"></a>
                            <a style="display: block;" href="https://mensheaven.jp/8/osaka/ma-49/sa-469/shop-list/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.mensheaven.jp/img/fppc/bnr/03nanba.jpg" alt="難波男性高収入" width="58" height="34"
                                                   border="0"></a>
                            <a style="display: block;" href="https://mensheaven.jp/8/osaka/ma-49/sa-470/shop-list/" target="_blank"
                               rel="noopener"><img style="display: block;" loading="lazy"
                                                   src="https://img.mensheaven.jp/img/fppc/bnr/04nihonbashi.jpg" alt="日本橋男性高収入" width="58" height="34"
                                                   border="0"></a>
                        </div>
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <a style="display: block;" href="https://mensheaven.jp/8/osaka/shop-list/" target="_blank" rel="noopener"><img
                                        style="display: block;" loading="lazy" src="https://img.mensheaven.jp/img/fppc/bnr/05osaka.jpg"
                                        alt="大阪男性高収入" width="58" height="34" border="0"></a>
                            <a style="display: block;" href="https://mensheaven.jp/8/kyoto/shop-list/" target="_blank" rel="noopener"><img
                                        style="display: block;" loading="lazy" src="https://img.mensheaven.jp/img/fppc/bnr/06kyoto.jpg"
                                        alt="京都男性高収入" width="58" height="34" border="0"></a>
                            <a style="display: block;" href="https://mensheaven.jp/8/shiga/shop-list/" target="_blank" rel="noopener"><img
                                        style="display: block;" loading="lazy" src="https://img.mensheaven.jp/img/fppc/bnr/07shiga.jpg"
                                        alt="滋賀男性高収入" width="58" height="34" border="0"></a>
                            <a style="display: block;" href="https://mensheaven.jp/8/hyogo/shop-list/" target="_blank" rel="noopener"><img
                                        style="display: block;" loading="lazy" src="https://img.mensheaven.jp/img/fppc/bnr/08hyogo.jpg"
                                        alt="兵庫男性高収入" width="58" height="34" border="0"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      </section>
    </div>
  </div>
</body>

<footer class="entrance-footer">
  <p><small>© 2004-2021 大阪 日本橋 風俗 ホテルヘルス (ホテヘル) SPEED</small></p>
</footer>

</html>
