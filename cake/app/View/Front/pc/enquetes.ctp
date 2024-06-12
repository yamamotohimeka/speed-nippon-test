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

	<div class="enq_wrap">
		<p class="enq_txt">
			当店ではサービス向上のため、お客様の声をたくさんお聞かせいただきたいと思っております。<br>ＳＰＥＥＤをご利用して良かったと感じた点、悪かった点、改善を希望する点、ご希望、ご要望など真摯に受け止めて参りますので<br>お時間がございましたらぜひ下記アンケートにご記入の上「送信」ボタンをクリックしてください。
		</p>
		<div class="flex">
		    <form action="/enquetes_confirm/" id="Enquetes" method="post" accept-charset="utf-8">
				<dl>
					<div class="flex">
						<dt><label for="card-num">お名前(カナ可)</label></dt>
						<dd><?php echo $this->Form->input('name',array('label' => false, 'type' => 'text', 'placeholder' => '', 'required' => true)); ?></dd>
					</div>
					<div class="flex">
						<dt><label for="card-num">会員番号（任意）</label></dt>
						<dd><?php echo $this->Form->input('number',array('label' => false, 'type' => 'text', 'placeholder' => '', 'required' => false)); ?></dd>
					</div>
					<div class="flex">
						<dt><label for="card-num">女の子名（任意）</label></dt>
						<dd><?php echo $this->Form->input('girl_name',array('label' => false, 'type' => 'text', 'placeholder' => '', 'required' => false)); ?></dd>
					</div>
					<div class="flex">
						<dt><label for="card-num">ご意見・ご感想</label></dt>
						<dd><?php echo $this->Form->input('comment',array('label' => false, 'type' => 'textarea', 'required' => true)); ?></dd>
					</div>
				</dl>
				<p class="submit"><span>上記の内容でよろしければ</span><span><input type="submit" value="確認画面へ"></span></p>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>

</section>
