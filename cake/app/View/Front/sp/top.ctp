<!--ポイントカードバナーここから-->
<link rel="stylesheet" href="/assets/css/pointcard.css"/>
<script type="text/javascript" src="/assets/js/jquery.js"/></script>
<div class="pointcard">
    <div class="pointcard__inner">
        <a class="close">
            <div class="clbtn close"><span></span></div>
        </a>
        <div class="pointcard__img">
            <a href="https://speed-speed.com/news/" target="_blank">
                <img src="/assets/img/common/pointcard_bnr.gif" alt="ポイントカードバナー"/>
            </a>
        </div>
    </div>
</div>
<!--ここまで -->


<ol class="bread">
    <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
    <span>›</span>
    <li class="bread-current">トップ</li>
</ol>

<?php if (!empty($printArray['Linebots'])) { ?>
    <?php echo $this->element('../Front/sp/top-stories'); ?>
<?php } ?>

<?php if (!empty($printArray['Slider'])) { ?>
    <section class="top-slider swiper-container">

        <div class="swiper-wrapper">
            <?php foreach ($printArray['Slider'] as $key => $value) { ?>
                <?php if (!empty($value['Image'][0]['file'])) { ?>
                    <figure class="swiper-slide">
                        <?php if (!empty($value['Slider']['url'])) echo '<a href="' . $value['Slider']['url'] . '" target="_blank">'; ?>
                        <img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/w660.jpg?<?php echo date('YmdHis'); ?>">
                        <?php if (!empty($value['Slider']['url'])) echo '</a>'; ?>
                    </figure>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="swiper-dots"></div>
        <script>
            const topslider = new Swiper('.top-slider', {
                autoplay: {
                    delay: 10000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-dots',
                    clickable: true,
                },
                createPagination: true,
                centeredSlides: true,
                speed: 400,
                spaceBetween: 0,
                loop: true,
                autoHeight: false,
                breakpoints: {
                    1200: {
                        slidesPerView: 1.8,
                        spaceBetween: 20,
                    }
                }
            });
        </script>

    </section>
<?php } ?>

<?php if (!empty($printArray['News'])) { ?>
    <section class="top-news">
        <h2 class="section-title">最新情報</h2>
        <div class="news-container"
             style="height: calc(100vh - 85px); max-height: calc(100vh - 85px); overflow: hidden; transition: max-height 5s;">
            <?php foreach ($printArray['News'] as $key => $value) { ?>
                <div class="news-inner">
                    <article class="news-article" style="font-size: 16px;">
                        <?php if (!empty($value['News']['title'])) { ?><?php echo $value['News']['title']; ?>
                            <br/><?php } ?>
                        <?php echo nl2br($value['News']['comment']); ?>
                    </article>
                </div>
            <?php } ?>
        </div>
        <label id="newsMore" class="button-more news-label" for="news-check">続きを読む</label>
    </section>
<?php } ?>

<script>
    $('#newsMore').click(function () {
        $('.news-container').css({'height': 'auto', "max-height": "10000px"});
        $('#newsMore').fadeOut();
    });
</script>


<section class="integrate-menu">
    <div class="integrate-menu-tab swiper-container">
        <div class="swiper-wrapper">
            <span class="swiper-slide menu-tab-item">本日の出勤</span>
            <span class="swiper-slide menu-tab-item">待ち時間</span>
            <span class="swiper-slide menu-tab-item">新人情報</span>
            <span class="swiper-slide menu-tab-item">ランキング</span>
        </div>
    </div>

    <div class="swiper-container integrate-menu-body">
        <div class="swiper-wrapper">

            <div class="swiper-slide top-attendance-list">
                <h2 hidden>本日の出勤</h2>

                <div class="filter">
                    <h3 class="title">絞り込み</h3>
                    <form action="/schedule/" method="post">
                        <div class="filter-list">
                            <label class="item"><input type="radio" name="Schedule" value="all" id="radio-all"
                                                       checked="checked">全件表示</label>
                            <label class="item"><input type="radio" name="Schedule" value="Newface" id="radio-new">新人だけを表示</label>
                            <label class="item"><input type="radio" name="Schedule" value="Amateur" id="radio-new2">新人で未経験だけを表示</label>
                            <a class="btn_submit">
                                <input type="submit" value="検索">
                            </a>
                        </div>
                    </form>
                </div>

                <?php if (!empty($printArray['GirlToday'])) { ?>
                    <ul class="girl-list today-list">

                        <?php foreach ($printArray['GirlToday'] as $key => $value) { ?>
                            <li class="girl<?php if ($value['ScheduleStatus']['status'] == '只今出勤中') echo ' attending'; ?>">
                                <div class="girl-state state-attendance">
                                    <span class="status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                                    <?php if (!empty($value['ScheduleStatus']['time'])) { ?>
                                        <time class="attending-time"><?php echo $value['ScheduleStatus']['time']; ?></time><?php } ?>
                                </div>
                                <?php if (!empty($value['Image']['image'][0][1]['file'])) { ?>
                                    <div class="girl-image-wrap"><img
                                                src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>"
                                                class="girl-image" alt=""></div>
                                <?php } ?>
                                <div class="girl-meta">
                                    <h3 class="name"><?php echo $value['Girl']['name']; ?></h3>
                                    <span class="age"><?php echo $value['Girl']['age']; ?>歳</span>
                                    <span class="sizes">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></span>
                                    <ul class="icons">
                                        <?php if (!empty($value['Ranking'][0]['priority'])) { ?>
                                            <li><img
                                                    src="/assets/sp/img/common/stats-icon-rank<?php echo $value['Ranking'][0]['category']; ?>_<?php echo $value['Ranking'][0]['priority']; ?>.png"
                                                    alt=""/></li><?php } ?>
                                        <?php if (!empty($value['Girl']['newface'])) { ?>
                                            <li><img src="/assets/sp/img/common/stats-icon-newface.png" alt=""/>
                                            </li><?php } ?>
                                        <?php if (!empty($value['Girl']['amateur'])) { ?>
                                            <li><img src="/assets/sp/img/common/stats-icon-beginner.png" alt=""/>
                                            </li><?php } ?>
                                        <?php if (!empty($value['Girl']['twitter_id'])) { ?>
                                            <li><a href="<?php echo $value['Girl']['twitter_id']; ?>"
                                                   target="_blank"><img
                                                        src="/assets/sp/img/common/stats-icon-twitter.png" alt="ツイッター"></a>
                                            </li><?php } ?>
                                    </ul>
                                    <ul class="features">
                                        <?php if (!empty($value['Girl']['label_1'])) { ?>
                                            <li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
                                        <?php if (!empty($value['Girl']['label_2'])) { ?>
                                            <li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
                                        <?php if (!empty($value['Girl']['label_3'])) { ?>
                                            <li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
                                        <?php if (!empty($value['Girl']['label_4'])) { ?>
                                            <li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
                                    </ul>
                                    <div class="nominate-fee">
                                        特別指名料<span class="value"><?php echo $value['Girl']['nominate_fare']; ?>円</span>
                                    </div>
                                </div>
                                <a href="/profile/<?php echo $value['Girl']['id']; ?>" class="link">詳細を見る</a>
                            </li>
                        <?php } ?>

                    </ul>
                <?php } ?>

                <a href="/schedule/" class="button-more">もっと見る</a>
            </div>

            <div class="swiper-slide top-realtime-list">
                <h2 hidden>待ち時間</h2>
                <div class="filter">
                    <h3 class="title">絞り込み</h3>
                    <form action="/realtime/" method="post">
                        <div class="filter-list">
                            <label class="item"><input type="radio" name="RealTime" value="all" id="radio-all"
                                                       checked="checked">全件表示</label>
                            <label class="item"><input type="radio" name="RealTime" value="Newface" id="radio-new">新人だけを表示</label>
                            <label class="item"><input type="radio" name="RealTime" value="Amateur" id="radio-new2">新人で未経験だけを表示</label>
                            <div class="btn_submit">
                                <input type="submit" value="検索">
                            </div>
                        </div>
                    </form>
                </div>

                <?php if (!empty($printArray['RealTime'])) { ?>
                    <ul class="girl-list">

                        <?php foreach ($realTimeTitleArray as $key2 => $value2) { ?>
                            <?php if ($key2 != 0 and $key2 != 99) { ?>
                                <?php if (!empty($printArray['RealTime'][$key2])) { ?>
                                    <?php foreach ($printArray['RealTime'][$key2] as $key => $value) { ?>
                                        <li class="girl<?php if ($value['Girl']['real_state'] != 1 and $value['Girl']['real_state'] < 10) echo ' attending'; ?>">
                                            <div class="girl-state state-realtime">
                                                <?php
                                                if ($value['Girl']['real_state'] == 99 and !empty($value['Girl']['realTimePrint'])) {
                                                    $status = $value['Girl']['realTimePrint'] . '待ち';
                                                } else {
                                                    $status = $value2;
                                                }
                                                ?>
                                                <div class="status status_01"><span><?php echo $status; ?></span></div>
                                                <time class="attending-time"><?php echo $value['SchedulePrint']['Schedule'][WORK_DATE]['schedulePrint']; ?></time>
                                            </div>
                                            <?php if (!empty($value['Image']['image'][0][1]['file'])) { ?>
                                                <div class="girl-image-wrap"><img
                                                            src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>"
                                                            class="girl-image" alt=""></div>
                                            <?php } ?>
                                            <div class="girl-meta">
                                                <h3 class="name"><?php echo $value['Girl']['name']; ?></h3>
                                                <span class="age"><?php echo $value['Girl']['age']; ?>歳</span>
                                                <span class="sizes">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></span>
                                                <ul class="icons">
                                                    <?php if (!empty($value['Ranking'][0]['priority'])) { ?>
                                                        <li><img
                                                                src="/assets/sp/img/common/stats-icon-rank<?php echo $value['Ranking'][0]['category']; ?>_<?php echo $value['Ranking'][0]['priority']; ?>.png"
                                                                alt=""/></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['newface'])) { ?>
                                                        <li><img src="/assets/sp/img/common/stats-icon-newface.png"
                                                                 alt=""/></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['amateur'])) { ?>
                                                        <li><img src="/assets/sp/img/common/stats-icon-beginner.png"
                                                                 alt=""/></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['twitter_id'])) { ?>
                                                        <li><a href="<?php echo $value['Girl']['twitter_id']; ?>"
                                                               target="_blank"><img
                                                                    src="/assets/sp/img/common/stats-icon-twitter.png"
                                                                    alt="ツイッター"></a></li><?php } ?>
                                                </ul>
                                                <ul class="features">
                                                    <?php if (!empty($value['Girl']['label_1'])) { ?>
                                                        <li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['label_2'])) { ?>
                                                        <li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['label_3'])) { ?>
                                                        <li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['label_4'])) { ?>
                                                        <li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
                                                </ul>
                                                <div class="nominate-fee">
                                                    特別指名料<span
                                                            class="value"><?php echo $value['Girl']['nominate_fare']; ?>円</span>
                                                </div>
                                            </div>
                                            <a href="/profile/<?php echo $value['Girl']['id']; ?>"
                                               class="link">詳細を見る</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>

                    </ul>
                <?php } ?>
                <a href="/realtime/" class="button-more">もっと見る</a>
            </div>

            <div class="swiper-slide top-newface-list">
                <h2 hidden>新人情報</h2>

                <div class="filter">
                    <h3 class="title">絞り込み</h3>
                    <form action="/newface/" method="post">
                        <div class="filter-list">
                            <label class="item"><input type="radio" name="Newface" value="all" id="radio-all"
                                                       checked="checked">全件表示</label>
                            <label class="item"><input type="radio" name="Newface" value="Amateur" id="radio-new2">新人で未経験だけを表示</label>
                            <div class="btn_submit">
                                <input type="submit" value="検索">
                            </div>
                        </div>
                    </form>
                </div>

                </ul>
                <?php if (!empty($printArray['GirlNewfaceAmateur'])) { ?>
                    <ul class="girl-list">

                        <?php foreach ($printArray['GirlNewfaceAmateur'] as $key => $value) { ?>
                            <li class="girl<?php if ($value['ScheduleStatus']['status'] == '只今出勤中') echo ' attending'; ?>">
                                <div class="girl-state state-newface">
                                    <span class="status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                                    <?php if (!empty($value['ScheduleStatus']['time'])) { ?>
                                        <time class="attending-time"><?php echo $value['ScheduleStatus']['time']; ?></time><?php } ?>
                                </div>
                                <?php if (!empty($value['Image']['image'][0][1]['file'])) { ?>
                                    <div class="girl-image-wrap"><img
                                                src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>"
                                                class="girl-image" alt=""></div>
                                <?php } ?>
                                <div class="girl-meta">
                                    <?php if (!empty($value['Girl']['started_at'])) { ?>
                                        <div class="entry-date"><?php $started_at = new DateTime($value['Girl']['started_at']);
                                        echo $started_at->format('m月d日'); ?>入店</div><?php } ?>
                                    <h3 class="name"><?php echo $value['Girl']['name']; ?></h3>
                                    <span class="age"><?php echo $value['Girl']['age']; ?>歳</span>
                                    <span class="sizes">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></span>
                                    <ul class="icons">
                                        <?php if (!empty($value['Ranking'][0]['priority'])) { ?>
                                            <li><img
                                                    src="/assets/sp/img/common/stats-icon-rank<?php echo $value['Ranking'][0]['category']; ?>_<?php echo $value['Ranking'][0]['priority']; ?>.png"
                                                    alt=""/></li><?php } ?>
                                        <?php if (!empty($value['Girl']['newface'])) { ?>
                                            <li><img src="/assets/sp/img/common/stats-icon-newface.png" alt=""/>
                                            </li><?php } ?>
                                        <?php if (!empty($value['Girl']['amateur'])) { ?>
                                            <li><img src="/assets/sp/img/common/stats-icon-beginner.png" alt=""/>
                                            </li><?php } ?>
                                        <?php if (!empty($value['Girl']['twitter_id'])) { ?>
                                            <li><a href="<?php echo $value['Girl']['twitter_id']; ?>"
                                                   target="_blank"><img
                                                        src="/assets/sp/img/common/stats-icon-twitter.png" alt="ツイッター"></a>
                                            </li><?php } ?>
                                    </ul>
                                    <ul class="features">
                                        <?php if (!empty($value['Girl']['label_1'])) { ?>
                                            <li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
                                        <?php if (!empty($value['Girl']['label_2'])) { ?>
                                            <li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
                                        <?php if (!empty($value['Girl']['label_3'])) { ?>
                                            <li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
                                        <?php if (!empty($value['Girl']['label_4'])) { ?>
                                            <li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
                                    </ul>
                                    <div class="nominate-fee">
                                        特別指名料<span class="value"><?php echo $value['Girl']['nominate_fare']; ?>円</span>
                                    </div>
                                </div>
                                <a href="/profile/<?php echo $value['Girl']['id']; ?>" class="link">詳細を見る</a>
                            </li>
                        <?php } ?>

                    </ul>
                <?php } ?>

                <a href="/newface/" class="button-more">もっと見る</a>
            </div>

            <div class="swiper-slide top-ranking-list">
                <h2 hidden>ランキング</h2>

                <div class="ranking-switch">
                    <input type="radio" name="ranking-switch" id="ranking-1" hidden checked><label for="ranking-1"
                                                                                                   class="ranking-switch-button tab1">総合</label>
                    <?php if (!empty($printArray['Ranking'][1][0]['Ranking']['title'])) { ?><input type="radio"
                                                                                                   name="ranking-switch"
                                                                                                   id="ranking-2"
                                                                                                   hidden><label
                            for="ranking-2"
                            class="ranking-switch-button tab2"><?php echo $printArray['Ranking'][1][0]['Ranking']['title']; ?></label><?php } ?>
                    <?php if (!empty($printArray['Ranking'][2][0]['Ranking']['title'])) { ?><input type="radio"
                                                                                                   name="ranking-switch"
                                                                                                   id="ranking-3"
                                                                                                   hidden><label
                            for="ranking-3"
                            class="ranking-switch-button tab3"><?php echo $printArray['Ranking'][2][0]['Ranking']['title']; ?></label><?php } ?>

                    <div class="top-ranking-list-wrap">

                        <?php foreach ($rankingArray as $key2 => $value2) { ?>
                            <?php if (!empty($printArray['Ranking'][$key2])) { ?>
                                <?php
                                $count = $key2 + 1;
                                if ($key2 == 0) {
                                    $title = '総合ランキング';
                                } else {
                                    $title = $printArray['Ranking'][$key2][0]['Ranking']['title'];
                                }
                                ?>
                                <ul class="girl-list tabitem<?php echo $count; ?>">

                                    <?php foreach ($printArray['Ranking'][$key2] as $key => $value) { ?>
                                        <li class="girl<?php if ($value['ScheduleStatus']['status'] == '只今出勤中') echo ' attending'; ?>">
                                            <div class="girl-ranking-header">
                                                <img src="/assets/sp/img/common/stats-icon-rank<?php echo $value['Ranking']['category']; ?>_<?php echo $value['Ranking']['priority']; ?>.png"
                                                     alt="ランキング<?php echo $value['Ranking']['priority']; ?>位"
                                                     class="girl-ranking-icon">
                                                <p class="girl-ranking-text">
                                                    <img src="/assets/sp/img/common/ranking-text.png" alt=""
                                                         class="girl-ranking-text-image"><br>
                                                    <?php echo $title; ?>
                                                </p>
                                            </div>
                                            <div class="girl-state state-ranking0<?php echo $value['Ranking']['priority']; ?>">
                                                <span class="status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                                                <?php if (!empty($value['ScheduleStatus']['time'])) { ?>
                                                    <time class="attending-time"><?php echo $value['ScheduleStatus']['time']; ?></time><?php } ?>
                                            </div>
                                            <?php if (!empty($value['Image'][1]['Image']['imgId'])) { ?>
                                                <div class="girl-image-wrap"><img
                                                            src="/userImgShop/Image/<?php echo $value['Image'][1]['Image']['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>"
                                                            class="girl-image" alt=""></div>
                                            <?php } ?>
                                            <div class="girl-meta">
                                                <h3 class="name"><?php echo $value['Girl']['name']; ?></h3>
                                                <span class="age"><?php echo $value['Girl']['age']; ?>歳</span>
                                                <span class="sizes">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></span>
                                                <ul class="icons">
                                                    <?php if (!empty($value['Ranking']['priority'])) { ?>
                                                        <li><img
                                                                src="/assets/sp/img/common/stats-icon-rank<?php echo $value['Ranking']['category']; ?>_<?php echo $value['Ranking']['priority']; ?>.png"
                                                                alt=""/></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['newface'])) { ?>
                                                        <li><img src="/assets/sp/img/common/stats-icon-newface.png"
                                                                 alt=""/></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['amateur'])) { ?>
                                                        <li><img src="/assets/sp/img/common/stats-icon-beginner.png"
                                                                 alt=""/></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['twitter_id'])) { ?>
                                                        <li><a href="<?php echo $value['Girl']['twitter_id']; ?>"
                                                               target="_blank"><img
                                                                    src="/assets/sp/img/common/stats-icon-twitter.png"
                                                                    alt="ツイッター"></a></li><?php } ?>
                                                </ul>
                                                <ul class="features">
                                                    <?php if (!empty($value['Girl']['label_1'])) { ?>
                                                        <li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['label_2'])) { ?>
                                                        <li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['label_3'])) { ?>
                                                        <li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
                                                    <?php if (!empty($value['Girl']['label_4'])) { ?>
                                                        <li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
                                                </ul>
                                                <div class="nominate-fee">
                                                    特別指名料<span
                                                            class="value"><?php echo $value['Girl']['nominate_fare']; ?>円</span>
                                                </div>
                                            </div>
                                            <a href="/profile/<?php echo $value['Girl']['id']; ?>"
                                               class="link">詳細を見る</a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            <?php } ?>
                        <?php } ?>


                    </div>
                    <a href="/ranking/" class="button-more">もっと見る</a>
                </div>
            </div>

        </div>
    </div>


    <script>
        let integrate_menu = new Swiper('.integrate-menu-tab', {
            slidesPerView: 2.4,
            spaceBetween: 20,
            speed: 400,
            centeredSlides: true,
            centeredSlidesBounds: true,
            watchSlidesProgress: true,
            breakpoints: {
                1200: {
                    allowSlideNext: false,
                    allowTouchMove: false,
                }
            }
        });

        let integrate = new Swiper('.integrate-menu-body', {
            thumbs: {
                swiper: integrate_menu,
            },
            speed: 400,
            spaceBetween: 0,
            watchSlidesVisibility: true,
            autoHeight: true,
        });

        integrate.on('slideChange', () => {
            let nav_top = document.querySelector('.integrate-menu').getBoundingClientRect().top + pageYOffset;
            let st_height = document.querySelector('.top-stories-list').getBoundingClientRect().height;
            window.scrollTo({
                top: nav_top - st_height,
                behavior: "smooth",
            });
        });
    </script>
    <script>
        //ランキング種類タブ切り替え
        let ranktab1 = $(".ranking-switch .tab1");
        let ranktab2 = $(".ranking-switch .tab2");
        let ranktab3 = $(".ranking-switch .tab3");
        let ranktabitem1 = $(".ranking-switch .tabitem1");
        let ranktabitem2 = $(".ranking-switch .tabitem2");
        let ranktabitem3 = $(".ranking-switch .tabitem3");

        var positionauto = {
            position: "relative",
            top: "auto",
        };

        var position9999 = {
            position: "absolute",
            top: "-9999px",
        };
        // リロード時に大きいサイズで表示されるのを防止
        $(".rank_list").css("opacity", "1");

        $(".ranking-switch .tab1").on("click", function () {
            ranktabitem2.css(position9999);
            ranktabitem3.css(position9999);
            ranktabitem1.css(positionauto);
            ranktab2.removeClass("active");
            ranktab3.removeClass("active");
            ranktab1.addClass("active");
            integrate.update();
        });
        $(".ranking-switch .tab2").on("click", function () {
            ranktabitem1.css(position9999);
            ranktabitem3.css(position9999);
            ranktabitem2.css(positionauto);
            ranktab1.removeClass("active");
            ranktab3.removeClass("active");
            ranktab2.addClass("active");
            integrate.update();
        });
        $(".ranking-switch .tab3").on("click", function () {
            ranktabitem1.css(position9999);
            ranktabitem2.css(position9999);
            ranktabitem3.css(positionauto);
            ranktab1.removeClass("active");
            ranktab2.removeClass("active");
            ranktab3.addClass("active");
            integrate.update();
        });
    </script>
    <!--      <div id="banner" class="top-banner">-->
    <!--        <div id="banner-btn" class="top-banner-btn">-->
    <!--          <span></span>-->
    <!--        </div>-->
    <!--        <a href="https://mrs-sakura.com/" target="_blank" rel="noopener noreferrer" ontouchstart="gtag('event', 'banner', {'event_category': 'banner','event_label': 'campaign-banner1'});">-->
    <!--          <img src="/assets/sp/img/common/footer-banner.png" alt="">-->
    <!--        </a>-->
    <!--      </div>-->

    <script>
        $('#banner-btn').click(function () {
            $('#banner').fadeOut();
        });
    </script>
</section>