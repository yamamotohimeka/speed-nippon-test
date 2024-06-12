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
			メールマガジン
		</li>
	</ol>

	<div class="mm_wrap">
		<div class="mm_col">
			<h3><span>メルマガ会員募集中</span></h3>
			<p>登録は簡単！下のボタンを押して、空メールを配信するだけです！！<br>
				携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（<?php echo SITE_DOMAIN; ?>の設定）をお願いします。<br>
				メールが受信されない場合があります。</p>
			<div class="submit"><input type="submit" onclick="location.href='mailto:<?php echo ACMAILER_REG; ?>'" value=" メールマガジンに登録する"></div>
		</div>

		<div class="mm_col">
			<h3><span>メルマガの解除</span></h3>
			<p>登録しているメルマガを解除する際も、下のボタンを押してメールを送信するだけです。<br>
				またのご利用をお待ちしております。
			</p>
			<div class="submit"><input type="submit" onclick="location.href='mailto:<?php echo ACMAILER_DEL; ?>'" value=" メールマガジンを解除する"></div>
		</div>

		<div id="p1">
			<div class="mm_col">
				<h3><span>出勤メルマガ</span></h3>
				<p>お気に入りのあの子の出勤をガッチリおさえる！<br>
					あらかじめ指定した女の子が出勤すると、あなたの元にメールを配信！<br>
					お店で出勤を確認する手間が省けます！<br>
					お気に入りの女の子がいれば、何人でも登録OK！<br>
					携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（<?php echo SITE_DOMAIN; ?>の設定）をお願いします。<br>
					メールが受信されない場合があります。
				</p>
				<form action="/mailmagazine_confirm/" id="ScheduleMailMailmagazineConfirmForm" method="post" accept-charset="utf-8">
					<table class="gail_magazine content">
						<tbody>
							<tr>
								<th>女の子</th>
								<td class="size2">
									<?php if (empty($id)) $id = ''; ?>
									<?php echo $this->Form->select('ScheduleMail.girl_id', $girlListArray, array('default' => $id, 'label' => false, 'empty' => '選択して下さい。', 'type' => 'select', 'required' => 'required')); ?>
								</td>
							</tr>
							<tr>
								<th>メールアドレス</th>
								<td>
									<?php echo $this->Form->input('ScheduleMail.email_address', array('label' => false, 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$', 'div' => false, 'type' => 'email', 'class' => 'input_mail', 'placeholder' => '半角数字のみ', 'required' => 'required')); ?>
								</td>
							</tr>
							<tr>
								<th>送信を希望しない時間帯</th>
								<td>
									<?php foreach ($notTimeArray as $key => $value) { ?>
										<label for="mm-<?php echo $value['range']; ?>"><input type="checkbox" name="data[ScheduleMail][not_time][<?php echo $key; ?>]" value="1" id="mm-<?php echo $value['range']; ?>"><?php echo $value['text']; ?></label>　
									<?php } ?>
								</td>
							</tr>
							<tr>
								<th>送信を希望しない曜日</th>
								<td>
									<?php foreach ($weekArray as $key => $value) { ?>
										<label for="mm-<?php echo $key; ?>"><input type="checkbox" name="data[ScheduleMail][not_week][<?php echo $key; ?>]" value="1" id="mm-<?php echo $key; ?>"><?php echo $value; ?>曜</label>　
									<?php } ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="submit"><input type="submit" value="出勤メルマガに登録する"></div>
					<?php echo $this->Form->end(); ?>
			</div>
		</div>


		<div class="mm_col">
			<h3><span>出勤メルマガの確認・解除</span></h3>
			<p>登録中のメールアドレスを入力して下さい。</p>
			<form action="/mailmagazine_status/" id="ScheduleMailMailmagazineConfirmForm" method="post" accept-charset="utf-8">
				<table class="gail_magazine content">
					<tbody>
						<tr>
							<th>メールアドレス</th>
							<td>
								<?php echo $this->Form->input('ScheduleMail.email_address', array('label' => false, 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$', 'div' => false, 'type' => 'email', 'class' => 'input_mail', 'placeholder' => '半角数字のみ', 'required' => 'required')); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="submit"><input type="submit" value=" 確認・解除"></div>
				<?php echo $this->Form->end(); ?>
		</div>

	</div>

</section>