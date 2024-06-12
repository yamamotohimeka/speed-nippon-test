<section class="profile">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current"><?php echo $printArray['profile']['Girl']['name']; ?></li>
    </ol>
    <h2 class="section-title">女の子プロフィール</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <div class="profile-border">
        <div class="profile-inner">
            <header class="profile-header">
                <?php if (!empty($printArray['profile']['Image']['image'][1][1]['file'])) { ?>
                    <figure class="profile-header-icon">
                        <img src="/userImgShop/Image/<?php echo $printArray['profile']['Image']['image'][1][1]['imgId']; ?>/<?php echo $printArray['profile']['Image']['image'][1][1]['imgId']; ?>.jpg?<?php echo date('YmdHis'); ?>"
                             class="profile-header-image" alt="">
                    </figure>
                <?php } ?>

                <div class="profile-header-meta">
                    <h2 class="name"><?php echo $printArray['profile']['Girl']['name']; ?>&nbsp;<span
                                class="age">(<?php echo $printArray['profile']['Girl']['age']; ?>)</span></h2>
                    <p class="sizes">T<?php echo $printArray['profile']['Girl']['height']; ?>
                        B<?php echo $printArray['profile']['Girl']['size_b']; ?>
                        (<?php echo $cupArray[$printArray['profile']['Girl']['size_c']]; ?>)
                        W<?php echo $printArray['profile']['Girl']['size_w']; ?>
                        H<?php echo $printArray['profile']['Girl']['size_h']; ?></p>
                </div>
            </header>

            <ul class="profile-header-features">
                <?php if (!empty($printArray['profile']['Girl']['label_1'])) { ?>
                    <li class="item"><?php echo $printArray['profile']['Girl']['label_1']; ?></li><?php } ?>
                <?php if (!empty($printArray['profile']['Girl']['label_2'])) { ?>
                    <li class="item"><?php echo $printArray['profile']['Girl']['label_2']; ?></li><?php } ?>
                <?php if (!empty($printArray['profile']['Girl']['label_3'])) { ?>
                    <li class="item"><?php echo $printArray['profile']['Girl']['label_3']; ?></li><?php } ?>
                <?php if (!empty($printArray['profile']['Girl']['label_4'])) { ?>
                    <li class="item"><?php echo $printArray['profile']['Girl']['label_4']; ?></li><?php } ?>
            </ul>
            <!-- </header> -->

            <div class="swiper-container profile-image">
                <div class="swiper-wrapper">
                    <?php foreach ($printArray['profile']['Image']['image'][1] as $key => $value) { ?>
                        <img src="/userImgShop/Image/<?php echo $value['imgId']; ?>/<?php echo $value['imgId']; ?>.jpg?<?php echo date('YmdHis'); ?>"
                             class="swiper-slide">
                    <?php } ?>
                </div>
                <ul class="icons">
                    <?php if (!empty($printArray['profile']['Ranking'][0]['priority'])) { ?>
                        <li><img
                                src="/assets/sp/img/common/stats-icon-rank<?php echo $printArray['profile']['Ranking'][0]['category']; ?>_<?php echo $printArray['profile']['Ranking'][0]['priority']; ?>.png"
                                alt=""/></li><?php } ?>
                    <?php if (!empty($printArray['profile']['Girl']['newface'])) { ?>
                        <li><img src="/assets/sp/img/common/stats-icon-newface.png" alt=""/></li><?php } ?>
                    <?php if (!empty($printArray['profile']['Girl']['amateur'])) { ?>
                        <li><img src="/assets/sp/img/common/stats-icon-beginner.png" alt=""/></li><?php } ?>
                    <?php if (!empty($printArray['profile']['Girl']['twitter_id'])) { ?>
                        <li><a href="<?php echo $printArray['profile']['Girl']['twitter_id']; ?>" target="_blank"><img
                                    src="/assets/sp/img/common/stats-icon-twitter.png" alt=""/></a></li><?php } ?>
                </ul>
            </div>
            <div class="swiper-dots"></div>

            <script>
                let detail_slide = new Swiper('.profile-image', {
                    pagination: {
                        el: '.swiper-dots',
                        clickable: true,
                    }
                });
            </script>

            <div class="profile-bottom">
                <div class="profile-bottom-nominate">
                    <span class="label">特別指名料</span>
                    <span class="value"><?php echo $printArray['profile']['Girl']['nominate_fare'] ?>円</span>
                </div>
                <div class="profile-bottom-state">
                    <span class="status"><?php echo $printArray['profile']['ScheduleStatus']['status']; ?></span>
                    <?php if (!empty($printArray['profile']['ScheduleStatus']['time'])) { ?><span
                            class="attending-time"><?php echo $printArray['profile']['ScheduleStatus']['time']; ?></span><?php } ?>
                </div>
                <a href="/mailmagazine/<?php echo $printArray['profile']['Girl']['id'] ?>"
                   class="profile-bottom-mailmagazine">出勤メルマガに登録する</a>
                <?php if (!empty($printArray['profile']['QuestionPrint']['Question'])) { ?>
                    <button class="profile-bottom-questions profile-bottom-toggle">エッチな質問を見る</button>
                <?php } ?>
                <div class="profile-bottom-questions-modal">
                    <dl class="profile-bottom-questions-list">
                        <?php foreach ($printArray['profile']['QuestionPrint']['Question'] as $key => $value) { ?>
                            <dt class="profile-bottom-questions-q">Q<?php echo $key; ?>
                                .</span><?php echo $value['question']; ?></dt>
                            <dd class="profile-bottom-questions-a">A.<?php echo nl2br($value['answer']); ?></dd>
                        <?php } ?>
                    </dl>
                    <button class="profile-bottom-questions-close profile-bottom-toggle">閉じる</button>
                </div>
            </div>

            <?php if (!empty($printArray['profile']['Girl']['premiere_course'])) { ?>
                <div class="profile-prices">
                    <div class="inner">
                        <div class="course_inner_01">
                            <p class="flex"><?php echo nl2br($printArray['profile']['Girl']['premiere_course']); ?></p>
                        </div>
                        <p class="profile-prices-text"><?php echo nl2br($printArray['profile']['Girl']['premiere_comment']); ?></p>
                    </div>
                </div>
            <?php } ?>

            <?php if (!empty($printArray['profile']['Girl']['comment'])) { ?>
                <div class="profile-message">
                    <h3 class="title">メッセージ</h3>
                    <p class="text"><?php echo nl2br($printArray['profile']['Girl']['comment']); ?></p>
                </div>
            <?php } ?>

            <?php if (!empty($printArray['profile']['Schedule'])) { ?>
                <div class="profile-attendance">
                    <h3 class="title">出勤予定</h3>
                    <ul class="attendance-list">
                        <?php foreach ($printArray['profile']['Schedule'] as $key => $value) { ?>
                            <li class="item">
                                <time class="date"><?php echo $value['workDatePrint']; ?></time>
                                <time class="hour"><?php echo $value['schedulePrint']; ?></time>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <?php if (!empty($printArray['Option'])) { ?>
                <div class="profile-options">
                    <h3 class="title">可能オプション</h3>
                    <ul class="option-list">
                        <?php foreach ($printArray['Option'] as $key => $value) { ?>
                            <li class="item">
                                <div class="opt-box"><?php echo $value['Option']['name']; ?></div>
                                <?php if (!empty($value['Image'][0]['file']) and $value['Image'][0]['model'] == 0) { ?>
                                    <div class="opt-box">
                                        <img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg"
                                             alt="<?php echo $value['Option']['name']; ?>" class="options-image">
                                    </div>
                                <?php } ?>
                                <div class="opt-box"><?php echo $value['Option']['fare']; ?>yen</div>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

        </div>

    </div>

    <?php if (!empty($printArray['profile']['Linebots'])) { ?>
        <section class="profile-stories" id="personal-story">
            <h3 class="title">ストーリーズ</h3>
            <?php foreach ($printArray['profile']['Linebots'] as $key => $value) { ?>
                <?php
                $dateTimeArray = explode(" ", $value['dateTime']);
                $dateTimeDayArray = explode("-", $dateTimeArray[0]);
                $dateTimeTimeArray = explode(":", $dateTimeArray[1]);
                ?>
                <article class="story">
                    <time class="story-date"><?php echo $dateTimeDayArray[0]; ?>年<?php echo $dateTimeDayArray[1]; ?>
                        月<?php echo $dateTimeDayArray[2]; ?>日 <?php echo $dateTimeTimeArray[0]; ?>
                        :<?php echo $dateTimeTimeArray[1]; ?></time>
                    <div class="story-image-wrap"><?php echo $value['Linebots']['tag']; ?></div>
                    <div class="story-text">
                        <!-- h4 class="story-name">おとめ</h4 -->
                        <?php echo nl2br($value['text']); ?>
                    </div>
                </article>
            <?php } ?>
            <a href="/story/<?php echo $printArray['profile']['Girl']['id']; ?>"
               class="stories-more button-more">もっと見る</a>
        </section>
    <?php } ?>

    <?php if (!empty($printArray['profile']['Girl']['twitter_id'])) { ?>
        <section class="profile-twitter">
            <h3 class="title">Twitter</h3>
            <div class="inner">
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <a class="twitter-timeline" data-chrome=”noheader nofooter” height="600px" data-chrome=”noheader”
                   data-lang="ja" width="100%" href="<?php echo $printArray['profile']['Girl']['twitter_id']; ?>"></a>
            </div>
        </section>
    <?php } ?>

    <section class="profile-review" id="review-list">
        <h3 class="title">お客様からの口コミ</h3>

        <div class="profile-review-inner">

            <div class="profile-review-switch swiper-container">
                <div class="swiper-wrapper">
                    <button class="profile-review-switch-item swiper-slide">
                        口コミ(<?php echo count($printArray['profile']['Review']); ?>)
                    </button>
                    <button class="profile-review-switch-item swiper-slide">口コミを投稿する</button>
                </div>
            </div>

            <div class="profile-review-content swiper-container">
                <div class="swiper-wrapper swiper-adjust">
                    <div class="swiper-slide slide-adjust">
                        <?php if (!empty($this->params->pass[1])) { ?>
                            <div>口コミ投稿ありがとうございました。反映まで暫くお待ち願います。</div><?php } ?>
                        <?php if (!empty($printArray['profile']['Review'])) { ?>
                            <ul class="profile-review-body">
                                <?php foreach ($printArray['profile']['Review'] as $key => $value) { ?>
                                    <li class="profile-review-item">
                                        <h4 class="profile-review-name"><?php echo $value['name'] ?>さん</h4>
                                        <p class="profile-review-rate">満足度
                                            <?php for ($i = 0; $i < $value['point']; $i++) { ?>
                                                <span class="star">★</span>
                                            <?php } ?>
                                        </p>
                                        <p class="profile-review-text"><?php echo nl2br($value['comment']); ?></p>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        <?php if (!empty($Paging)) { ?>
                            <div class="pagination">
                                <ol class="review-page-nav">
                                    <?php echo $Paging; ?>
                                </ol>
                            </div>
                        <?php } ?>
                    </div>

                    <?php echo $this->Form->create('Review', array('class' => 'profile-review-post swiper-slide')); ?>
                    <dl class="profile-review-form">
                        <dt class="label"><label for="rp-name">お名前</label></dt>
                        <dd class="input-area"><?php echo $this->Form->input('name', array('label' => false, 'id' => 'rp-name', 'type' => 'text', 'placeholder' => '', 'required' => true)); ?></dd>
                        <dt class="label"><label for="rp-age">あなたの年代<span>※年代は公開されません</label></dt>
                        <dd class="input-area">
                            <?php echo $this->Form->select('generation', $generationArray, array('label' => false, 'empty' => false, 'type' => 'select', 'id' => 'rp-age', 'required' => false)); ?>
                        </dd>
                        <dt class="label"><label for="rp-rate">満足度</label></dt>
                        <dd class="input-area">
                            <select name="Review[point]" id="rp-rate">
                                <option value="" selected disable>選択して下さい</option>
                                <option value="5">5 ★★★★★</option>
                                <option value="4">4 ★★★★</option>
                                <option value="3">3 ★★★</option>
                                <option value="2">2 ★★</option>
                                <option value="1">1 ★</option>
                            </select>
                        </dd>
                        <dt class="label"><label for="rp-message">口コミ内容</label></dt>
                        <dd class="input-area"><?php echo $this->Form->input('comment', array('label' => false, 'type' => 'textarea', 'id' => 'rp-message', 'required' => true)); ?></dd>
                    </dl>
                    <button class="profile-review-send">投稿する</button>
                    <?php echo $this->Form->hidden('girl_id', array('value' => $printArray['profile']['Girl']['id'])); ?>
                    <?php echo $this->Form->hidden('dateTime', array('value' => date("Y-m-d H:i:s"))); ?>
                    <?php echo $this->Form->hidden('reviewWrite', array('value' => 1)); ?>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>

        </div>
    </section>

    <div class="backto-list">
        <a class="button" href="/girls/">女の子一覧に戻る</a>
    </div>
</section>

<script>
    const review_tab = new Swiper('.profile-review-switch', {
        slidesPerView: 2,
    });
    const review_content = new Swiper('.profile-review-content', {
        thumbs: {
            swiper: review_tab,
        },
        autoHeight: true,
        effect: 'fade',
    });

    const questions_button = document.querySelectorAll('.profile-bottom-toggle');
    const questions_modal = document.querySelector('.profile-bottom-questions-modal');

    for (let i = 0; i < questions_button.length; i++) {
        questions_button[i].addEventListener('click', () => {
            questions_modal.classList.toggle('open');
        });
    }
</script>