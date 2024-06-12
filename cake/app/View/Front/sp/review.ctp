<section class="reviews">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">口コミ</li>
    </ol>
    <h2 class="section-title">口コミ</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <?php if (!empty($printArray['Girl'])) { ?>
        <?php foreach ($printArray['Girl'] as $key => $value) { ?>
            <article class="reviews-post">
                <div class="reviews-inner">
                    <h3 class="reviews-title">
                        <span class="name"><?php echo $value['Girl']['name'] ?>(<?php echo $value['Girl']['age'] ?>)</span>
                        <a href="/profile/<?php echo $value['Girl']['id']; ?>" class="link">この女の子の詳細を見る»</a>
                    </h3>
                    <time class="reviews-attendance">
                        <span class="status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                        <?php if (!empty($value['ScheduleStatus']['time'])) { ?><span
                                class="time"><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
                    </time>
                    <?php if (!empty($value['Image']['image'][0][1]['file'])) { ?>
                        <img src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/<?php echo $value['Image']['image'][0][1]['imgId']; ?>.jpg"
                             class="reviews-image">
                    <?php } ?>
                    <div class="reviews-wrapper">
                        <h4 class="reviews-label">口コミ一覧（<?php echo $value[0]['num']; ?>件）</h4>
                        <ul class="reviews-list">
                            <?php foreach ($value['Review'] as $key2 => $value2) { ?>
                                <li class="reviews-body">
                                    <h5 class="reviews-reviewer">><?php echo $value2['name'] ?>さん</h5>
                                    <span class="reviews-rate">満足度<?php for ($i = 0; $i < $value2['point']; $i++) { ?>★<?php } ?></span>
                                    <p class="reviews-text"><?php echo nl2br($value2['comment']); ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </article>
        <?php } ?>
    <?php } ?>

    <?php if (!empty($Paging)) { ?>
        <div class="pagination">
            <ol class="review-page-nav">
                <?php echo $Paging; ?>
            </ol>
        </div>
    <?php } ?>

</section>
