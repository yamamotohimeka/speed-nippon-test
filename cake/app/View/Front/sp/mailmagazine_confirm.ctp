    <section class="mailmagazine">
      <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/"><?php echo SHOP_NAME; ?></a></li>
        <span>›</span>
        <li class="left-space"><a href="/mailmagazine/">メールマガジン</a></li>
        <span>›</span>
        <li class="bread-current">出勤メルマガ</li>
      </ol>
      <h2 class="section-title">メールマガジン</h2>
      <div class="mailmagazine-block">
        <h3 class="mailmagazine-block-title">出勤メルマガ</h3>

        <form action="/mailmagazine_comp/" id="ScheduleMailMailmagazineConfirmForm" class="mailmagazine-form" method="post" accept-charset="utf-8">
          <dl class="mailmagazine-form-confirm">
            <dt>女の子</dt>
            <dd>
                            <?php if(!empty($girlData['Image']['image'][0][1]['file']) AND $girlData['Image']['image'][0][1]['model'] == 0){ ?>
                                <img src="/userImgShop/Image/<?php echo $girlData['Image']['image'][0][1]['imgId']; ?>/w150.jpg?<?php echo date('YmdHis'); ?>" class="girl-icon">
                            <?php } ?>
                            <?php echo $girlData['Girl']['name']; ?>(<?php echo $girlData['Girl']['age']; ?>)
            </dd>
            <dt>メールアドレス</dt>
            <dd><?php echo $ScheduleMailData['ScheduleMail']['email_address']; ?></dd>
            <dt>送信を希望しない時間帯</dt>
            <dd>
                                <?php foreach($notTimeArray AS $key => $value){ ?>
                                    <?php if(!empty($ScheduleMailData['ScheduleMail']['not_time'][$key])) echo '・' . $value['text'] . '<br />'; ?>
                                <?php } ?>
            </dd>
            <dt>送信を希望しない曜日</dt>
            <dd>
                                <?php foreach($weekArray AS $key => $value){ ?>
                                    <?php if(!empty($ScheduleMailData['ScheduleMail']['not_week'][$key])) echo '・' . $value . '<br />'; ?>
                                <?php } ?>
            </dd>
          </dl>
          <button type="submit" class="button-more">出勤メルマガに登録する</button>
				<input type="hidden" name="ScheduleMail[girl_id]" value="<?php echo $ScheduleMailData['ScheduleMail']['girl_id']; ?>">
                <input type="hidden" name="ScheduleMail[email_address]" value="<?php echo $ScheduleMailData['ScheduleMail']['email_address']; ?>">
				<?php foreach($ScheduleMailData['ScheduleMail']['not_time'] AS $key => $value){ ?>
                    <input type="hidden" name="ScheduleMail[not_time][<?php echo $key; ?>]" value="<?php echo $value; ?>">
				<?php } ?>
				<?php foreach($ScheduleMailData['ScheduleMail']['not_week'] AS $key => $value){ ?>
                    <input type="hidden" name="ScheduleMail[not_week][<?php echo $key; ?>]" value="<?php echo $value; ?>">
				<?php } ?>
        <?php echo $this->Form->end(); ?>
      </div>
    </section>
