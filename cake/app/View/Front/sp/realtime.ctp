<section class="realtime">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">待ち時間情報</li>
    </ol>
    <h2 class="section-title">待ち時間情報</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <div class="attend-indicator">点滅している女の子は本日出勤しております。</div>
    <div class="filter">
        <h3 class="title">絞り込み</h3>
        <form action="/realtime/" method="post">
            <div class="filter-list">
                <label class="item"><input type="radio" name="RealTime"
                                           value="all"<?php if ($printChk == 'all') echo ' checked="checked"'; ?>
                                           id="radio-all" checked="checked">全件表示</label>
                <label class="item"><input type="radio" name="RealTime"
                                           value="Newface"<?php if ($printChk == 'Newface') echo ' checked="checked"'; ?>
                                           id="radio-new">新人だけを表示</label>
                <label class="item"><input type="radio" name="RealTime"
                                           value="Amateur"<?php if ($printChk == 'Amateur') echo ' checked="checked"'; ?>
                                           id="radio-new2">新人で未経験だけを表示</label>
                <div class="btn_submit">
                    <input type="submit" value="検索">
                </div>
            </div>
        </form>
    </div>

    <?php foreach ($realTimeTitleArray as $key2 => $value2) { ?>
        <?php if ($key2 != 0 and $key2 != 99) { ?>
            <h3 class="realtime-toggle group<?php echo $realTimeSpCssSetArray[$key2]; ?><?php if (empty($printArray['RealTime'][$key2])) echo ' hide'; ?>"><?php echo $value2; ?>
                <span class="realtime-count"><?php echo count($printArray['RealTime'][$key2]); ?>人</span></h3>
            <?php if (!empty($printArray['RealTime'][$key2])) { ?>
                <ul class="girl-list">
                    <?php foreach ($printArray['RealTime'][$key2] as $key => $value) { ?>
                        <li class="girl<?php if ($value['Girl']['real_state'] != 0 and $value['Girl']['real_state'] != 1 and $value['Girl']['real_state'] < 10) echo ' attending'; ?> new">
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
                                            src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/w240.jpg"
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
                                        <li><a href="<?php echo $value['Girl']['twitter_id']; ?>" target="_blank"><img
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
                                <div class="nominate-fee">特別指名料<span
                                            class="value"><?php echo $value['Girl']['nominate_fare']; ?>円</span></div>
                            </div>
                            <a href="/profile/<?php echo $value['Girl']['id']; ?>" class="link">詳細を見る</a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        <?php } ?>
    <?php } ?>

</section>

<script>
    const rt_toggle = document.getElementsByClassName('realtime-toggle');
    for (let i = 0; i < rt_toggle.length; i++) {
        rt_toggle[i].addEventListener('click', () => {
            rt_toggle[i].classList.toggle('hide');
        });
    }
</script>