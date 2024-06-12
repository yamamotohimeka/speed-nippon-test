    <section class="enquetes">
      <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/"><?php echo SHOP_NAME; ?></a></li>
        <span>›</span>
        <li class="bread-current">アンケート</li>
      </ol>
      <h2 class="section-title">アンケート</h2>
      <div class="enquetes-wrapper">
        <div class="enquetes-inner">
          <h3 class="enquetes-phase">入力内容の確認</h3>
          <form action="/enquetes_complete/" class="enquetes-form" method="post" accept-charset="utf-8">
            <dl class="enquetes-form-confirm">
              <dt>お名前</dt>
              <dd><?php echo $Enquetes['name']; ?></dd>
              <dt>会員番号</dt>
              <dd><?php if(!empty($Enquetes['number'])) echo $Enquetes['number']; ?></dd>
              <dt>女の子の名前</dt>
              <dd><?php if(!empty($Enquetes['girl_name'])) echo $Enquetes['girl_name']; ?></dd>
              <dt>ご意見・ご感想</dt>
              <dd><?php echo $Enquetes['comment']; ?></dd>
            </dl>
            <div class="enquetes-form-submit">
              <p>上記の内容でよろしければ</p>
              <button type="submti" class="enquetes-form-submit-button">送信する</button>
            </div>
				<?php foreach($Enquetes AS $key => $value){ ?>
                    <input type="hidden" name="Enquetes[<?php echo $key; ?>]" value="<?php echo $value; ?>">
				<?php } ?>
			<?php echo $this->Form->end(); ?>
        </div>
      </div>
    </section>