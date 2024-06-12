<section class="girls">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">女の子一覧</li>
    </ol>
    <h2 class="section-title">女の子一覧</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <div class="attend-indicator">点滅している女の子は本日出勤しております。</div>

    <?php echo $this->Form->create('Girls', array('class' => 'girl-search', 'action' => '/#girllist')); ?>
    <p class="label">絞り込み</p>
    <?php if (!empty($search['radio'])) $printChk = $search['radio']; ?>
    <?php if (empty($search['radio']) and empty($printChk)) $printChk = 'all'; ?>
    <div class="filter">
        <div class="filter-list">
            <label class="item"><input type="radio" name="data[Search][radio]"
                                       value="all" <?php if ($printChk == 'all') echo ' checked="checked"'; ?>
                                       id="radio-all" checked="checked">全件表示</label>
            <label class="item"><input type="radio" name="data[Search][radio]"
                                       value="Newface" <?php if ($printChk == 'Newface') echo ' checked="checked"'; ?>
                                       id="radio-new">新人だけを表示</label>
            <label class="item"><input type="radio" name="data[Search][radio]"
                                       value="Amateur" <?php if ($printChk == 'Amateur') echo ' checked="checked"'; ?>
                                       id="radio-new2">新人で未経験だけを表示</label>
        </div>
    </div>
    <dl class="search-form">
        <dt class="label"><label for="sg-name">名前</label></dt>
        <dd class="input-area">
            <?php echo $this->Form->input('Search.name', array('default' => $search['name'], 'type' => 'text', 'id' => 'sg-name', 'label' => false)); ?>
        </dd>
        <dt class="label"><label for="sg-height">身長</label></dt>
        <dd class="input-area">
            <?php echo $this->Form->input('Search.height', array('default' => $search['height'], 'type' => 'text', 'id' => 'sg-age', 'label' => false)); ?>
            <select name="data[Search][height-select]" class="ltgt">
                <option selected disable>-</option>
                <option value="gt" <?php if (!empty($search['height-select']) and $search['height-select'] == 'gt') echo ' selected'; ?>>
                    以上
                </option>
                <option value="lt" <?php if (!empty($search['height-select']) and $search['height-select'] == 'lt') echo ' selected'; ?>>
                    以下
                </option>
            </select>
        </dd>
        <dt class="label"><label for="sg-age">年齢</label></dt>
        <dd class="input-area">
            <?php echo $this->Form->input('Search.age', array('default' => $search['age'], 'type' => 'text', 'id' => 'sg-height', 'label' => false)); ?>
            <select name="data[Search][age-select]" class="ltgt">
                <option selected disable>-</option>
                <option value="gt" <?php if (!empty($search['age-select']) and $search['age-select'] == 'gt') echo ' selected'; ?>>
                    以上
                </option>
                <option value="lt" <?php if (!empty($search['age-select']) and $search['age-select'] == 'lt') echo ' selected'; ?>>
                    以下
                </option>
            </select>
        </dd>
        <dt class="label"><label for="bustcup">バストカップ</label></dt>
        <dd class="input-area">
            <?php echo $this->Form->select('Search.size_c', $cupArray, array('default' => $search['size_c'], 'label' => false, 'empty' => false, 'id' => 'bustcup', 'class' => 'cupsize', 'type' => 'select')); ?>
            <select name="data[Search][size_c-select]" class="ltgt">
                <option selected disable>-</option>
                <option value="gt" <?php if (!empty($search['size_c-select']) and $search['size_c-select'] == 'gt') echo ' selected'; ?>>
                    以上
                </option>
                <option value="lt" <?php if (!empty($search['size_c-select']) and $search['size_c-select'] == 'lt') echo ' selected'; ?>>
                    以下
                </option>
            </select>
        </dd>
    </dl>
    <button type="submit" class="button-more">検索</button>
    <?php echo $this->Form->end(); ?>

    <?php if (!empty($printArray['Girl'])) { ?>
        <ul class="girl-list" id="girllist">

            <?php foreach ($printArray['Girl'] as $key => $value) { ?>
                <li class="girl<?php if ($value['ScheduleStatus']['status'] == '只今出勤中') echo ' attending'; ?>">
                    <div class="girl-state state-list">
                        <span class="status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                        <?php if (!empty($value['ScheduleStatus']['time'])) { ?>
                            <time class="attending-time"><?php echo $value['ScheduleStatus']['time']; ?></time><?php } ?>
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
                                <li><img src="/assets/sp/img/common/stats-icon-newface.png" alt=""/></li><?php } ?>
                            <?php if (!empty($value['Girl']['amateur'])) { ?>
                                <li><img src="/assets/sp/img/common/stats-icon-beginner.png" alt=""/></li><?php } ?>
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
                        <div class="nominate-fee">
                            特別指名料<span class="value"><?php echo $value['Girl']['nominate_fare']; ?>円</span>
                        </div>
                    </div>
                    <a href="/profile/<?php echo $value['Girl']['id']; ?>" class="link">詳細を見る</a>
                </li>
            <?php } ?>

        </ul>
    <?php } ?>

    <?php if (!empty($Paging)) { ?>
        <div class="pager">
            <ol class="review-page-nav">
                <?php echo $Paging; ?>
            </ol>
        </div>
    <?php } ?>

</section>