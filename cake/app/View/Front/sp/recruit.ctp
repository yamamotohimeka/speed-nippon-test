<section class="jobinterview">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">面接情報</li>
    </ol>
    <h2 class="section-title">面接情報</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <?php if (!empty($printArray['Interview'])) { ?>
        <div class="jobinterview-inner">
            <?php foreach ($printArray['Interview'] as $key => $value) { ?>
                <article class="jobinterview-info">
                    <?php if (!empty($value['Interview']['title'])) { ?>
                        <h3 class="jobinterview-title"><?php echo $value['Interview']['title']; ?></h3>
                    <?php } ?>
                    <div class="jobinterview-text">
                        <p><?php echo $value['Interview']['comment']; ?></p>
                    </div>
                </article>
            <?php } ?>
        </div>
    <?php } ?>

</section>