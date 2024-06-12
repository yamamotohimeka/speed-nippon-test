<section class="events">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">イベント情報</li>
    </ol>
    <h2 class="section-title">イベント情報</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <?php if (!empty($printArray['Event'])) { ?>
        <div class="events-inner">

            <?php foreach ($printArray['Event'] as $key => $value) { ?>
                <article class="events-post">
                    <div class="events-text">
                        <?php if (!empty($value['Image'][0]['file'])) { ?>
                            <img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg?<?php echo date('YmdHis'); ?>"
                                 class="events-banner">
                        <?php } ?>
                        <p><?php echo $value['Event']['comment']; ?></p>
                    </div>
                </article>
            <?php } ?>

        </div>
    <?php } ?>
</section>