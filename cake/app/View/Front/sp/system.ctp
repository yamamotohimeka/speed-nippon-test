<section class="system">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">システム料金</li>
    </ol>
    <h2 class="section-title">システム料金</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <div class="system-wrapper">
        <div class="system-inner">

            <nav class="system-tab swiper-container ">
                <div class="swiper-wrapper">
                    <button class="swiper-slide">システム</button>
                    <button class="swiper-slide">オプション</button>
                    <button class="swiper-slide">コスプレ</button>
                </div>
            </nav>

            <div class="system-content swiper-container">
                <div class="swiper-wrapper">

                    <section class="system-fee swiper-slide">
                        <h3 hidden>料金</h3>
                        <dl class="system-fee-other">
                            <div class="flex">
                                <dt>WEB会員（マイページ）
                                    <span>
                                    <p>無料登録は<a href="https://mypage.speed-speed.com/" target="_blank">コチラ</a>から</p>
                                </span>
                                </dt>
                                <dd>無料</dd>
                            </div>
                            <div class="flex">
                                <dt>会員カード発行料</dt>
                                <dd>1.000yen</dd>
                            </div>
                            <div class="flex">
                                <dt>再発行料</dt>
                                <dd>1.000yen</dd>
                            </div>
                            <div class="flex">
                                <dt>パネル指名料</dt>
                                <dd>1,000yen</dd>
                            </div>
                            <div class="flex">
                                <dt>再来店本指名料<br>
                                    <span>※パネル指名料込み</span></dt>
                                <dd>2,000yen</dd>
                            </div>
                            <div class="flex">
                                <dt>本指名料</dt>
                                <dd>2,000yen</dd>
                            </div>
                            <div class="flex">
                                <dt>HP指名料</dt>
                                <dd>2,000yen</dd>
                            </div>
                            <div class="flex">
                                <dt>延長10min</dt>
                                <dd>3,000yen</dd>
                            </div>
                        </dl>


                        <div class="system-fee-credit">
                            <img src="/assets/sp/img/system/common/creditcards.png" alt="クレジットカードアイコン"
                                 class="system-fee-credit-icon">
                            <span>各種カードOK</span>
                        </div>

                        <div class="system-fee-basic">
                            <div class="system-fee-basic-group usually-price">
                                <table>
                                    <thead>
                                    <tr>
                                        <th colspan="2"><h3>通常料金/Usually Price</h3></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">ホテル代込み</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>40min</td>
                                        <td>13,000yen</td>
                                    </tr>
                                    <tr>
                                        <td>50min</td>
                                        <td>14,500yen</td>
                                    </tr>
                                    <tr>
                                        <td>60min</td>
                                        <td>16,000yen</td>
                                    </tr>
                                    <tr>
                                        <td>70min</td>
                                        <td>17,500yen</td>
                                    </tr>
                                    <tr>
                                        <td>75min</td>
                                        <td>18,000yen</td>
                                    </tr>
                                    <tr>
                                        <td>80min</td>
                                        <td>20,000yen</td>
                                    </tr>
                                    <tr>
                                        <td>90min</td>
                                        <td>22,000yen</td>
                                    </tr>
                                    <tr>
                                        <td>100min</td>
                                        <td>26,000yen</td>
                                    </tr>
                                    <tr>
                                        <td>120min</td>
                                        <td>31,000yen</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--               </div>-->
                            <!--                </div>-->

                    </section>

                    <?php if (!empty($printArray['Option'])) { ?>
                        <section class="system-options swiper-slide">
                            <h3 hidden>オプション</h3>
                            <ul class="options">
                                <?php foreach ($printArray['Option'] as $key => $value) { ?>
                                    <li class="options-item">
                                        <h4 class="options-name"><?php echo $value['Option']['name']; ?></h4>
                                        <?php if (!empty($value['Image'][0]['file']) and $value['Image'][0]['model'] == 0) { ?>
                                            <img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg"
                                                 alt="<?php echo $value['Option']['name']; ?>" class="options-image">
                                        <?php } ?>
                                        <p class="options-price"><?php echo $value['Option']['fare']; ?>yen</p>
                                    </li>
                                <?php } ?>
                            </ul>
                        </section>
                    <?php } ?>

                    <?php if (!empty($printArray['Cosplay'])) { ?>
                        <section class="system-cosplay swiper-slide">
                            <h3 hidden>コスプレ</h3>
                            <ul class="cosplay">
                                <?php foreach ($printArray['Cosplay'] as $key => $value) { ?>
                                    <?php if (!empty($value['Image'][0]['file']) and $value['Image'][0]['model'] == 0) { ?>
                                        <li class="cosplay-item"><a
                                                    href="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg"><img
                                                        src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/w304.jpg"
                                                        alt="<?php echo $value['Cosplay']['name']; ?>"
                                                        class="cosplay-image"></a></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </section>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>


<script>
    let system_tab = new Swiper('.system-tab', {
        slidesPerView: 3,
        watchSlidesProgress: true,
    });
    let system_content = new Swiper('.system-content', {
        thumbs: {
            swiper: system_tab,
        },
        slidesPerView: 1,
        autoHeight: true,
        watchSlidesVisibility: true,
    })
</script>