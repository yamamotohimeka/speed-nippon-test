<section class="stories">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">ストーリーズ</li>
    </ol>
    <h2 class="section-title">ストーリーズ</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <?php if (!empty($printArray['Linebots'])) { ?>
        <?php foreach ($printArray['Linebots'] as $key => $value) { ?>
            <article class="stories-content">
                <?php if (!empty($value['Girl']['Image']['image'][0][1]['file'])) { ?>
                    <div class="stories-icon">
                        <a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>">
                            <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w240.jpg"
                                 class="stories-iconimage">
                        </a>
                    </div>
                <?php } ?>
                <header class="stories-head">
                    <div class="stories-status">
                        <span class="stories-status-attendance"><?php echo $value['Girl']['ScheduleStatus']['status']; ?></span>
                        <?php if (!empty($value['Girl']['ScheduleStatus']['time'])) { ?>
                            <time class="stories-status-hour"><?php echo $value['Girl']['ScheduleStatus']['time']; ?></time><?php } ?>
                    </div>
                    <h3 class="stories-name"><?php echo $value['Girl']['Girl']['name']; ?></h3>
                </header>
                <?php echo $value['Linebots']['file']['tag']; ?>
                <?php
                $dateTimeArray = explode(" ", $value['Linebots']['dateTime']);
                $dateTimeDayArray = explode("-", $dateTimeArray[0]);
                $dateTimeTimeArray = explode(":", $dateTimeArray[1]);
                ?>
                <time class="stories-timestamp"><?php echo $dateTimeDayArray[0]; ?>年<?php echo $dateTimeDayArray[1]; ?>
                    月<?php echo $dateTimeDayArray[2]; ?>日 <?php echo $dateTimeTimeArray[0]; ?>
                    :<?php echo $dateTimeTimeArray[1]; ?></time>
                <div class="stories-text"><?php echo nl2br($value['Linebots']['text']); ?></div>
            </article>
        <?php } ?>
    <?php } ?>

    <?php if (!empty($Paging)) { ?>
        <div class="pager">
            <ol class="review-page-nav">
                <?php echo $Paging; ?>
            </ol>
        </div>
    <?php } ?>

</section>
