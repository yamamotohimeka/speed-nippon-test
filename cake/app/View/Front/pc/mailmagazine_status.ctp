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

	<div class="mm_wrap section_list">
		<div class="mm_col">
			<h3><span>メルマガ会員募集中</span></h3>
			<p>登録内容をご確認下さい。</p>
			<form action="/mailmagazine_status_confirm/" id="ScheduleMailMailmagazineConfirmForm" method="post" accept-charset="utf-8">
				<table class="gail_magazine content">
					<tbody>
						<tr>
							<th>メールアドレス</th>
							<td>
							    <?php echo $datasList[0]['ScheduleMail']['email_address']; ?>
                            </td>
						</tr>
					</tbody>
				</table>
                <?php foreach($datasList AS $key => $value){ ?>
				<table class="gail_magazine content">
					<tbody>
						<tr>
							<th>女の子</th>
							<td>
                            <?php if(!empty($value['Girl']['Image']['image'][0][1]['file']) AND $value['Girl']['Image']['image'][0][1]['model'] == 0){ ?>
                                <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>">
                            <?php } ?>
                            <?php echo $value['Girl']['Girl']['name']; ?>(<?php echo $value['Girl']['Girl']['age']; ?>)<br>
                            <span><input type="checkbox" value="1" name="data[<?php echo $key; ?>][ScheduleMail][del_chk]">メルマガを解除する</span>
							</td>
						</tr>
						<tr>
							<th>送信を希望しない時間帯</th>
							<td>
                                <?php foreach($notTimeArray AS $key1 => $value1){ ?>
                                    <?php $set_not_time = 'not_time_' . $key1; ?>
                                    <label for="mm-<?php echo $key; ?>-<?php echo $value1['range']; ?>"><input type="checkbox" name="data[<?php echo $key; ?>][ScheduleMail][not_time][<?php echo $key1; ?>]" value="1" id="mm-<?php echo $key; ?>-<?php echo $value1['range']; ?>" <?php if($value['ScheduleMail'][$set_not_time] == 1) echo 'checked'; ?> ><?php echo $value1['text']; ?></label>　
                                <?php } ?>
							</td>
						</tr>
						<tr>
							<th>送信を希望しない曜日</th>
							<td>
                                <?php foreach($weekArray AS $key2 => $value2){ ?>
                                    <?php $set_not_week = 'not_week_' . $key2; ?>
                                    <label for="mm-<?php echo $key; ?>-<?php echo $value2; ?>"><input type="checkbox" name="data[<?php echo $key; ?>][ScheduleMail][not_week][<?php echo $key2; ?>]" value="1" id="mm-<?php echo $key; ?>-<?php echo $value2; ?>" <?php if($value['ScheduleMail'][$set_not_week] == 1) echo 'checked'; ?> ><?php echo $value2; ?>曜</label>　
                                <?php } ?>
							</td>
						</tr>
					</tbody>
				</table>
                <input type="hidden" name="data[<?php echo $key; ?>][ScheduleMail][id]" value="<?php echo $value['ScheduleMail']['id']; ?>">
                <input type="hidden" name="data[<?php echo $key; ?>][ScheduleMail][email_address]" value="<?php echo $value['ScheduleMail']['email_address']; ?>">
                <input type="hidden" name="data[<?php echo $key; ?>][ScheduleMail][girl_id]" value="<?php echo $value['ScheduleMail']['girl_id']; ?>">
				<?php } ?>
				<div class="submit"><input type="submit" value="送信"></div>
			</form>
		</div>

	</div>

</section>

