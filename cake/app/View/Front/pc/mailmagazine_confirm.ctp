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
			<form action="/mailmagazine_comp/" id="ScheduleMailMailmagazineConfirmForm" method="post" accept-charset="utf-8">
				<table cellspacing="0" cellpadding="0" border="0">
					<tbody>
						<tr>
							<th>女の子</th>
							<td>
                            <?php if(!empty($girlData['Image']['image'][0][1]['file']) AND $girlData['Image']['image'][0][1]['model'] == 0){ ?>
                                <img src="/userImgShop/Image/<?php echo $girlData['Image']['image'][0][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>">
                            <?php } ?>
                            <?php echo $girlData['Girl']['name']; ?>(<?php echo $girlData['Girl']['age']; ?>)
							</td>
						</tr>
							<tr>
								<th>メールアドレス</th>
								<td><?php echo $ScheduleMailData['ScheduleMail']['email_address']; ?></td>
							</tr>
							<tr>
								<th>送信を希望しない時間帯</th>
								<td>
                                <?php foreach($notTimeArray AS $key => $value){ ?>
                                    <?php if(!empty($ScheduleMailData['ScheduleMail']['not_time'][$key])) echo '・' . $value['text'] . '<br />'; ?>
                                <?php } ?>
								</td>
							</tr>
							<tr>
								<th>送信を希望しない曜日</th>
								<td>
                                <?php foreach($weekArray AS $key => $value){ ?>
                                    <?php if(!empty($ScheduleMailData['ScheduleMail']['not_week'][$key])) echo '・' . $value . '<br />'; ?>
                                <?php } ?>
								</td>
							</tr>
					</tbody>
				</table>
				<input type="hidden" name="ScheduleMail[girl_id]" value="<?php echo $ScheduleMailData['ScheduleMail']['girl_id']; ?>">
                <input type="hidden" name="ScheduleMail[email_address]" value="<?php echo $ScheduleMailData['ScheduleMail']['email_address']; ?>">
				<?php foreach($ScheduleMailData['ScheduleMail']['not_time'] AS $key => $value){ ?>
                    <input type="hidden" name="ScheduleMail[not_time][<?php echo $key; ?>]" value="<?php echo $value; ?>">
				<?php } ?>
				<?php foreach($ScheduleMailData['ScheduleMail']['not_week'] AS $key => $value){ ?>
                    <input type="hidden" name="ScheduleMail[not_week][<?php echo $key; ?>]" value="<?php echo $value; ?>">
				<?php } ?>
				<div class="submit">
					<input type="submit" value=" 送信">
				</div>
			<?php echo $this->Form->end(); ?>
		</div>

	</div>

</section>
