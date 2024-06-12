<section class="enquetes">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">アンケート</li>
    </ol>
    <h2 class="section-title">アンケート</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <div class="enquetes-wrapper">
        <div class="enquetes-inner">
            <p class="enquetes-introduction">
                当店ではサービス向上のため、お客様の声をたくさんお聞かせいただきたいと思っております。
                ＳＰＥＥＤをご利用して良かったと感じた点、悪かった点、改善を希望する点、ご希望、ご要望など真摯に受け止めて参りますので<br>
                お時間がございましたらぜひ下記アンケートにご記入の上「送信」ボタンをクリックしてください。
            </p>
            <form action="/enquetes_confirm/" class="enquetes-form" method="post" accept-charset="utf-8">
                <div class="enquetes-form-group">
                    <label for="eq-form-name">お名前（カナ可）</label>
                    <?php echo $this->Form->input('name', array('label' => false, 'id' => 'eq-form-name', 'type' => 'text', 'placeholder' => '', 'required' => true)); ?>
                </div>
                <div class="enquetes-form-group">
                    <label for="eq-form-num">会員番号（任意）</label>
                    <?php echo $this->Form->input('number', array('label' => false, 'id' => 'eq-form-num', 'type' => 'text', 'placeholder' => '', 'required' => false)); ?>
                </div>
                <div class="enquetes-form-group">
                    <label for="eq-form-girl">女の子の名前（任意）</label>
                    <?php echo $this->Form->input('girl_name', array('label' => false, 'id' => 'eq-form-girl', 'type' => 'text', 'placeholder' => '', 'required' => false)); ?>
                </div>
                <div class="enquetes-form-group">
                    <label for="eq-form-message">ご意見・ご感想</label>
                    <?php echo $this->Form->input('comment', array('label' => false, 'id' => 'eq-form-message', 'type' => 'textarea', 'required' => true)); ?>
                </div>
                <div class="enquetes-form-submit">
                    <p>上記の内容でよろしければ</p>
                    <button class="enquetes-form-submit-button">確認画面へ</button>
                </div>
                <?php echo $this->Form->end(); ?>
        </div>
    </div>
</section>