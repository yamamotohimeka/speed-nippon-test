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

      <div class="content-box">
        <div class="mailmagazine-block">
        <h3 class="mailmagazine-block-title">出勤メルマガ</h3>
        <p class="mailmagazine-form-complete">変更内容をご確認下さい。</p>

			<form action="/mailmagazine_status_comp/" id="ScheduleMailMailmagazineConfirmForm" method="post" accept-charset="utf-8">
				<table class="gail_magazine content">
					<tbody>
						<tr>
							<th>メールアドレス</th>
							<td>
							    <?php echo $ScheduleMailData[0]['ScheduleMail']['email_address']; ?>
                            </td>
						</tr>
					</tbody>
				</table>
			<?php foreach($ScheduleMailData AS $key => $value){ ?>
            <table class="gail_magazine content">
              <tbody>
                <tr>
                    <th>女の子</th>
                            <td class="size2">
                            <div class="status-girl mailmagazine-form-confirm" style="margin:0px;border:0px;font-size: 90%;">
                            <?php if(!empty($value['Girl']['Image']['image'][0][1]['file']) AND $value['Girl']['Image']['image'][0][1]['model'] == 0){ ?>
                                <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w150.jpg?<?php echo date('YmdHis'); ?>" class="girl-icon">
                            <?php } ?>
                            <br><?php echo $value['Girl']['Girl']['name']; ?>(<?php echo $value['Girl']['Girl']['age']; ?>)<br>
                            <?php if(!empty($value['ScheduleMail']['del_chk'])){ ?>
                                <br /><span style="color:red;">メルマガを解除する</span>
                                <input type="hidden" name="ScheduleMail[<?php echo $key; ?>][del_chk]" value="1">
                            <?php }else{ ?>
                                <input type="hidden" name="ScheduleMail[<?php echo $key; ?>][del_chk]" value="0">
                            <?php } ?>
                            </div>
							</td>
                </tr>
                <tr>
								<th>送信を希望しない時間帯</th>
								<td class="size2">
                                <?php foreach($notTimeArray AS $key1 => $value1){ ?>
                                    <?php if(!empty($value['ScheduleMail']['not_time'][$key1])) echo '・' . $value1['text'] . '<br />'; ?>
                                <?php } ?>
								</td>
                </tr>
                <tr>
								<th>送信を希望しない曜日</th>
								<td class="size2">
                                <?php foreach($weekArray AS $key2 => $value2){ ?>
                                    <?php if(!empty($value['ScheduleMail']['not_week'][$key2])) echo '・' . $value2 . '<br />'; ?>
                                <?php } ?>
								</td>
                </tr>
                <tr>
              </tbody>
            </table>
				<input type="hidden" name="ScheduleMail[<?php echo $key; ?>][id]" value="<?php echo $value['ScheduleMail']['id']; ?>">
				<input type="hidden" name="ScheduleMail[<?php echo $key; ?>][girl_id]" value="<?php echo $value['ScheduleMail']['girl_id']; ?>">
                <input type="hidden" name="ScheduleMail[<?php echo $key; ?>][email_address]" value="<?php echo $value['ScheduleMail']['email_address']; ?>">
				<?php foreach($value['ScheduleMail']['not_time'] AS $key3 => $value3){ ?>
                    <input type="hidden" name="ScheduleMail[<?php echo $key; ?>][not_time][<?php echo $key3; ?>]" value="<?php echo $value3; ?>">
				<?php } ?>
				<?php foreach($value['ScheduleMail']['not_week'] AS $key4 => $value4){ ?>
                    <input type="hidden" name="ScheduleMail[<?php echo $key; ?>][not_week][<?php echo $key4; ?>]" value="<?php echo $value4; ?>">
				<?php } ?>
            <?php } ?>
          <button type="submit" class="button-more">送信</button>
        <?php echo $this->Form->end(); ?>
      </div>
    </section>