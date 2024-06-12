<link rel="stylesheet" href="/assets/css/event.css" />

<section class="page page_event">

  <div class="page_ttl">
    <h2>イベント情報<span>EVENT</span></h2>
  </div>

  <ol class="flex bread">
    <li>
      <a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
    </li>
    <li>
      <a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
    </li>
    <li>
      イベント情報
    </li>
  </ol>

<?php if(!empty($printArray['Event'])){ ?>
  <div class="event_wrap page_wrap">

      <!-- イベントのステータスを持っている数だけ表示させる処理-->
      <?php foreach($printArray['Event'] AS $key => $value){ ?>
      <div class="event_col">
        <div class="tag_wrap">
        </div>
        <div class="article">
            <?php if(!empty($value['Image'][0]['file'])){ ?>
                <img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg?<?php echo date('YmdHis'); ?>" width="100%">
            <?php } ?>
            <?php if(!empty($value['Event']['title'])) echo $value['Event']['title'] . '<br />'; ?>
            <?php echo $value['Event']['comment']; ?>
        </div>
      </div>
      <?php } ?>

  </div>
  <?php } ?>

</section>
