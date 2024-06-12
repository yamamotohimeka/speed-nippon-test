<link rel="stylesheet" href="/assets/css/enquetes.css" />

<section class="page page_enq">
	<div class="page_ttl">
		<h2>アンケート<span>QUESTIONNAIRE</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
		</li>
		<li>
			<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
		</li>
		<li>
			アンケート
		</li>
	</ol>

	<div class="enq_wrap enq_padding">
		<div class="flex">
			<form class="enq_box" action="/enquetes_complete/" id="Enquete" method="post" accept-charset="utf-8">
				<dl>
					<div class="flex">
						<dt>名前</dt>
						<dd><?php echo $Enquetes['name']; ?></dd>
					</div>
					<div class="flex">
						<dt>会員番号</dt>
						<dd><?php if (!empty($Enquetes['number'])) echo $Enquetes['number']; ?></dd>
					</div>
					<div class="flex">
						<dt>女の子名</dt>
						<dd><?php if (!empty($Enquetes['girl_name'])) echo $Enquetes['girl_name']; ?></dd>
					</div>
					<div class="flex">
						<dt>ご意見・ご感想</dt>
						<dd><?php echo $Enquetes['comment']; ?></dd>
					</div>
				</dl>
				<p class="submit"><span>上記の内容でよろしければ</span><span><input type="submit" value="送信する"></span></p>
				<?php foreach ($Enquetes as $key => $value) { ?>
					<input type="hidden" name="Enquetes[<?php echo $key; ?>]" value="<?php echo $value; ?>">
				<?php } ?>
				<?php echo $this->Form->end(); ?>
		</div>
	</div>

</section>