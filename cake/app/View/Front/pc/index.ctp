<!DOCTYPE html>
<html lang="ja">

<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php if (!empty($description)) echo $description; ?>" />
	<title><?php if (!empty($title)) echo $title; ?></title>
	<link rel="stylesheet" href="/assets/css/reset.css" />
	<link rel="stylesheet" href="/assets/css/jquery.bxslider.css" />
	<link rel="stylesheet" href="/assets/css/swiper.min.css" />
	<link rel="stylesheet" href="/assets/css/remodal.css" />
	<link rel="stylesheet" href="/assets/css/remodal-default-theme.css" />
	<link rel="stylesheet" href="/assets/css/base.css" />
	<link rel="stylesheet" href="/assets/css/link.css" />
    <link rel="stylesheet" href="/assets/css/nippon-entrance.css" />
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

<body class="top shop">

<div class="entrance-bg">
  <section class="shop-entrance">
    <p class="shop-entrance__desc">
      素人娘秘密のアルバイト<span>スピード日本橋店</span>
    </p>
    <h1 class="shop-entrance__heading">
      <img src="/assets/img/shop-entrance/nippon-text.png" alt="">
    </h1>
    <ruby class="shop-entrance__small">
      <span>It is the most famous shop in Osaka with the most cute girls!</span>
      <span>Please spend a special service and healing time.</span>
    </ruby>
    <div class="shop-entrance__btn"><a href="/top/">
        <figure>
          <img src="/assets/img/shop-entrance/entry-btn02.png" alt="">
        </figure>
      </a></div>
    <p class="shop-entrance__exit">18歳未満の方のご入場はご遠慮頂いております。<a href="https://www.yahoo.co.jp/">EXIT</a></p>


  </section>

  <section class="entrance-banner">

    <div class="entrance-banner__flex">
      <div><a href="http://speed-recruit.net/" target="_blank" rel="noopener"><img src="/assets/img/shop-entrance/entrance-banner01.png" alt=""></a></div>
      <div><a href="http://recruit.speed-eco.net/" target="_blank" rel="noopener"><img src="/assets/img/shop-entrance/entrance-banner02.png" alt=""></a></div>
    </div>

    <div class="entrance-banner__flex">
      <div><a href="http://mens.speed-recruit.net/" target="_blank" rel="noopener"><img src="/assets/img/shop-entrance/entrance-banner03.png" alt=""></a></div>
      <div><a href="http://esthetique-recruit.com/" target="_blank" rel="noopener"><img src="/assets/img/shop-entrance/entrance-banner04.png" alt=""></a></div>
    </div>

    <p class="entrance-banner__text">日本橋の風俗 大阪ホテルヘルス(ホテヘル)グループ スピード日本橋店<br>日本橋で風俗をお探しなら風俗未経験・素人・体験入店から人気の風俗嬢まで、在籍数・可愛さ・料金全てにおいてお客様に満足いただけること間違いなし!!</p>
    <div class="link_form content-box">

      <div class="entrance-banner__form">

        <!-- ↓相互リンク(link.ctp)と同様の表示をして頂きたいです -->

        <!-- ↓.entrance-banner__descを追加しました -->

        <div class="flex link_txt_wrap entrance-banner__desc">
          <dl class="detailed">
            <dt>サイト名</dt>
            <dd>SPEED</dd>
            <dt>URL</dt>
            <dd>https://nippon.speed-speed.com.38-195.execute.jp</dd>
            <dt>紹介文</dt>
            <dd>関西最大級ホテルヘルスグループ<br />女の子在籍数、サービス、価格すべてに自信アリ！<br />絶対に満足していただけます。</dd>
          </dl>
          <?php if (!empty($printArray['Banner'])) { ?>
            <div>
              <p class="link_txt">当店では相互リンクを大募集しております。<br />必要な場合は以下のバナー画像・紹介文をご利用下さい。<br />下記相互リンク申し込みフォームよりご連絡ください。<br />貴ホームぺージから当店ホームページへのリンクを確認次第、当店ホームページから貴ホームページへリンクさせていただきます。</p>
              <dl class="banner">
                <?php foreach ($printArray['Banner'] as $key => $value) { ?>
                  <?php if (!empty($value['Image'][0]['file']) and $value['Image'][0]['model'] == 0) { ?>
                    <dt><?php echo $value['Banner']['name']; ?></dt>
                    <dd><img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg" alt="<?php echo $value['Banner']['comment']; ?>"></dd>
                  <?php } ?>
                <?php } ?>
              </dl>
            </div>
          <?php } ?>
        </div>

        <h2><span class="sub-attend">相互リンクお申し込みフォーム</span></h2>
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

        <div style="display: flex; flex-direction: column; margin-left: 10px; margin-bottom: 10px; gap: 6px; order: 2;">
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
      <div class="fujoho_custom_banner" style="position: relative;width: 1010px;height: 430px;margin: 50px auto 0;">
          <a class="fujoho_header_area" target="_blank" href="https://fujoho.jp/index.php?p=shop_girl_blog_list&id=5432" style="height: 40px;line-height: 40px;padding: 0 7px;display: block;background-color: #ff63c8;text-decoration: none;text-align: left;" onmouseover="this.style.opacity=.6;" onmouseout="this.style.opacity=1;"><span class="fujoho_banner_title" style="font-size: 16px;font-weight: bold;color: #fff;text-shadow: 1px 1px 0 #ee4bb4;">ヒメ日記</span><span class="fujoho_btn_more" style="border-radius: 3px;font-size: 12px;color: #fff;height: 26px;line-height: 26px;display: inline-block;float: right;margin-top: 7px;padding: 0 6px;letter-spacing: -0.3px;background-color: #cf2d96;">もっと見る<span class="fujoho_btn_chevron_icon" style="margin-left: 2px;">&raquo;</span></span></a><div class="fujoho_iphone_scroll_size_box" style="height: 350px;margin: 0 auto;overflow: auto;-webkit-overflow-scrolling: touch;border-left: solid 1px #ff63c8;border-right: solid 1px #ff63c8;"><iframe class="fujoho_contents_box" frameborder="0" src="https://fujoho.jp/index.php?p=shop_girl_blog_list&id=5432&ct=color_diary_pink&iframe=ON2" style="width: 100%;height: 100%;display: block;"></iframe></div><div class="fujoho_footer_area" style="position: absolute;bottom: 0;width: 100%;padding: 10px 0;line-height: 19px;text-align: center;color: #fff;background-color: #ff63c8;text-shadow: 1px 1px 0px #cf2d96;text-decoration: none;"><div class="fujoho_centering_box"><a class="fujoho_area_works_name" target="_blank" href="https://fujoho.jp/index.php?p=shop_list&s=829&k=2" style="font-size: 12px;color: #fff;display: inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 100%;vertical-align: text-bottom;text-decoration: none;">日本橋（大阪）デリヘル</a><a class="fujoho_site_name"  target="_blank" href="https://fujoho.jp" style="font-size: 15px;font-weight: 700;color: #fff;margin-left: 3px;display: inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 100%;vertical-align: text-bottom;text-decoration: none;">口コミ風俗情報局</a></div></div></div>


  </section>
</div>

<footer class="entrance-footer">
  <p><small>© 2004-2021 大阪 日本橋 風俗 ホテルヘルス (ホテヘル) SPEED</small></p>
</footer>

</body>

</html>
