<link rel="stylesheet" href="/assets/css/mailmagazine.css" />

<section class="page page_mm">
	<div class="page_ttl">
		<h2>メールマガジン<span>MAIL MAGAZINE</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
		</li>
		<li>
			<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
		</li>
		<li>
			<a href="/mailmagazine/">メールマガジン</a><span>›</span>
		</li>
		<li>
			出勤メルマガ
		</li>
	</ol>

	<div class="mm_wrap section_check">
		<div class="mm_col">
			<h3><span>出勤メルマガ</span></h3>
			<p>登録内容をご確認下さい。</p>
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
							<td>
                            <?php if(!empty($value['Girl']['Image']['image'][0][1]['file']) AND $value['Girl']['Image']['image'][0][1]['model'] == 0){ ?>
                                <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>">
                            <?php } ?>
                            <?php echo $value['Girl']['Girl']['name']; ?>(<?php echo $value['Girl']['Girl']['age']; ?>)
                            <?php if(!empty($value['ScheduleMail']['del_chk'])){ ?>
                                <br /><span style="color:red;">メルマガを解除する</span>
                                <input type="hidden" name="ScheduleMail[<?php echo $key; ?>][del_chk]" value="1">
                            <?php }else{ ?>
                                <input type="hidden" name="ScheduleMail[<?php echo $key; ?>][del_chk]" value="0">
                            <?php } ?>
							</td>
						</tr>
							<tr>
								<th>送信を希望しない時間帯</th>
								<td>
                                <?php foreach($notTimeArray AS $key1 => $value1){ ?>
                                    <?php if(!empty($value['ScheduleMail']['not_time'][$key1])) echo '・' . $value1['text'] . '<br />'; ?>
                                <?php } ?>
								</td>
							</tr>
							<tr>
								<th>送信を希望しない曜日</th>
								<td>
                                <?php foreach($weekArray AS $key2 => $value2){ ?>
                                    <?php if(!empty($value['ScheduleMail']['not_week'][$key2])) echo '・' . $value2 . '<br />'; ?>
                                <?php } ?>
								</td>
							</tr>
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
				<div class="submit">
					<input type="submit" value=" 送信">
				</div>
			<?php echo $this->Form->end(); ?>
		</div>

	</div>

</section>
