<section class="mailmagazine">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/"><?php echo SHOP_NAME; ?></a></li>
        <span>›</span>
        <li class="bread-current">メールマガジン</li>
    </ol>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <div class="mailmagazine-block">
        <h3 class="mailmagazine-block-title">メルマガ会員募集中</h3>
        <p class="process">
            登録は簡単！下のボタンを押して、空メールを送信するだけです！<br>
            携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（<?php echo SITE_DOMAIN; ?>の設定）をお願い致します。<br>
            メールが受信されない場合があります。
        </p>
        <a href="mailto:<?php echo ACMAILER_REG; ?>" class="button-more">メールマガジンに登録する</a>

        <p class="process">
            登録しているメルマガを解除する際も、下のボタンを押してメールを送信するだけです。<br>
            またのご利用をお待ちしております。
        </p>
        <a href="mailto:<?php echo ACMAILER_DEL; ?>" class="button-more">メールマガジンを解除する</a>
    </div>

    <div class="mailmagazine-block">
        <h3 class="mailmagazine-block-title">出勤メルマガ</h3>
        <p class="process">
            お気に入りのあの子の出勤をガッチリおさえる！<br>
            あらかじめ指定した女の子が出勤すると、あなたの元にメールを配信！<br>
            お店で出勤を確認する手間が省けます！<br>お気に入りの女の子がいれば、何人でも登録OK！<br>
            携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（<?php echo SITE_DOMAIN; ?>の設定）をお願いします。<br>
            メールが受信されない場合があります。
        </p>
        <form action="/mailmagazine_confirm/" id="ScheduleMailMailmagazineConfirmForm" class="mailmagazine-form"
              method="post" accept-charset="utf-8">
            <dl class="form-layout">
                <dt class="label">
                    <label for="mm-girl">女の子</label>
                </dt>
                <dd class="input-area">
                    <?php if (empty($id)) $id = ''; ?>
                    <?php echo $this->Form->select('ScheduleMail.girl_id', $girlListArray, array('default' => $id, 'id' => 'mm-girl', 'label' => false, 'empty' => '選択して下さい。', 'type' => 'select', 'required' => 'required')); ?>
                </dd>
                <dt class="label">
                    <label for="mm-mail">メールアドレス</label>
                </dt>
                <dd class="input-area">
                    <?php echo $this->Form->input('ScheduleMail.email_address', array('label' => false, 'id' => 'mm-mail', 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$', 'div' => false, 'type' => 'email', 'class' => 'input_mail', 'placeholder' => '半角数字のみ', 'required' => 'required')); ?>
                </dd>
                <dt class="label"><label for="">送信を希望しない時間帯</label></dt>
                <dd class="input-area deny-hour">
                    <?php foreach ($notTimeArray as $key => $value) { ?>
                        <label for="mm-<?php echo $value['range']; ?>" class="label-for-mark checkbox"><input
                                    type="checkbox" name="data[ScheduleMail][not_time][<?php echo $key; ?>]" value="1"
                                    id="mm-<?php echo $value['range']; ?>"><?php echo $value['text']; ?></label>　
                    <?php } ?>
                </dd>
                <dt class="label"><label for="">送信を希望しない曜日</label></dt>
                <dd class="input-area deny-day">
                    <?php foreach ($weekArray as $key => $value) { ?>
                        <label for="mm-<?php echo $key; ?>" class="label-for-mark checkbox"><input type="checkbox"
                                                                                                   name="data[ScheduleMail][not_week][<?php echo $key; ?>]"
                                                                                                   value="1"
                                                                                                   id="mm-<?php echo $key; ?>"><?php echo $value; ?>
                            曜</label>　
                    <?php } ?>
                </dd>
            </dl>
            <button type="submit" class="button-more">出勤メルマガ登録を確認する</button>
            <?php echo $this->Form->end(); ?>
    </div>

    <div class="mailmagazine-block">
        <h3 class="mailmagazine-block-title">出勤メルマガの解除</h3>
        <p class="process">登録中のメールアドレスを入力して下さい。</p>
        <form action="/mailmagazine_status/" id="ScheduleMailMailmagazineConfirmForm" class="mailmagazine-form"
              method="post" accept-charset="utf-8">
            <dl class="form-layout">
                <dt class="label">
                    <label for="release-mail">メールアドレス</label>
                </dt>
                <dd class="input-area">
                    <?php echo $this->Form->input('ScheduleMail.email_address', array('label' => false, 'id' => 'release-mail', 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$', 'div' => false, 'type' => 'email', 'class' => 'input_mail', 'placeholder' => '半角数字のみ', 'required' => 'required')); ?>
                </dd>
            </dl>
            <button type="submit" class="button-more">解除メールを送信する</button>
            <?php echo $this->Form->end(); ?>
    </div>
</section>