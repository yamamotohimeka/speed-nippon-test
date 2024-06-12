    <section class="mailmagazine">
      <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/"><?php echo SHOP_NAME; ?></a></li>
        <span>›</span>
        <li class="left-space"><a href="/mailmagazine/">メールマガジン</a></li>
        <span>›</span>
        <li class="bread-current">出勤メルマガ</li>
      </ol>
      <h2 class="section-title">メールマガジン</h2>

      <div class="content-box">
        <div class="mailmagazine-block">
          <h3 class="mailmagazine-block-title">出勤メルマガの確認・解除</h3>
          <p class="mailmagazine-form-complete">登録内容をご確認下さい。</p>

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
                    <td class="size2">
                    <div class="status-girl mailmagazine-form-confirm" style="margin:0px;border:0px;font-size: 90%;">
					<?php if(!empty($value['Girl']['Image']['image'][0][1]['file']) AND $value['Girl']['Image']['image'][0][1]['model'] == 0){ ?>
                        <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w150.jpg?<?php echo date('YmdHis'); ?>" class="girl-icon">
                    <?php } ?>
                    <br><?php echo $value['Girl']['Girl']['name']; ?>(<?php echo $value['Girl']['Girl']['age']; ?>)<br>
                    <label class="label-for-mark checkbox"><input type="checkbox" value="1" name="data[<?php echo $key; ?>][ScheduleMail][del_chk]">メルマガを解除する</label>
                    </div>
                    </td>
                </tr>
                <tr>
				    <th>送信を希望しない時間帯</th>
				    <td class="size2">
                    <?php foreach($notTimeArray AS $key1 => $value1){ ?>
                    <?php $set_not_time = 'not_time_' . $key1; ?>
                    <label for="mm-<?php echo $key; ?>-<?php echo $value1['range']; ?>" class="label-for-mark checkbox"><input type="checkbox" name="data[<?php echo $key; ?>][ScheduleMail][not_time][<?php echo $key1; ?>]" value="1" id="mm-<?php echo $key; ?>-<?php echo $value1['range']; ?>" <?php if($value['ScheduleMail'][$set_not_time] == 1) echo 'checked'; ?> ><?php echo $value1['text']; ?></label>　
                    <?php } ?>
                    </td>
                </tr>
                <tr>
				    <th>送信を希望しない曜日</th>
				    <td>
                    <?php foreach($weekArray AS $key2 => $value2){ ?>
                    <?php $set_not_week = 'not_week_' . $key2; ?>
                    <label for="mm-<?php echo $key; ?>-<?php echo $value2; ?>" class="label-for-mark checkbox"><input type="checkbox" name="data[<?php echo $key; ?>][ScheduleMail][not_week][<?php echo $key2; ?>]" value="1" id="mm-<?php echo $key; ?>-<?php echo $value2; ?>" <?php if($value['ScheduleMail'][$set_not_week] == 1) echo 'checked'; ?> ><?php echo $value2; ?>曜</label>　
                    <?php } ?>
                    </td>
                </tr>
                <tr>
              </tbody>
            </table>
            <input type="hidden" name="data[<?php echo $key; ?>][ScheduleMail][id]" value="<?php echo $value['ScheduleMail']['id']; ?>">
            <input type="hidden" name="data[<?php echo $key; ?>][ScheduleMail][email_address]" value="<?php echo $value['ScheduleMail']['email_address']; ?>">
            <input type="hidden" name="data[<?php echo $key; ?>][ScheduleMail][girl_id]" value="<?php echo $value['ScheduleMail']['girl_id']; ?>">
			<?php } ?>
            <button type="submit" class="button-more">送信</button>
          </form>
        </div>

      </div>

    </section>