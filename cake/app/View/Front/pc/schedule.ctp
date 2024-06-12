<link rel="stylesheet" href="/assets/css/schedule.css" />

<section class="page page_schedule">

	<div class="page_ttl">
		<h2>出勤情報<span>ATTENDANCE</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
		</li>
		<li>
			<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
		</li>
		<li>
			出勤情報
		</li>
	</ol>

	<div class="page_wrap">

		<div class="girls_wrap">

			<div class="flex sort_radio">
				<p>絞り込み：</p>
				<form action="/schedule/" method="post">
				<div class="radio flex">
					<div>
						<input type="radio" id="02-C" name="Schedule" value="all"<?php if($printChk == 'all') echo ' checked="checked"'; ?> >
						<label for="02-C" class="radio02">全件表示</label>
					</div>
					<div>
						<input type="radio" id="02-A" name="Schedule" value="Newface"<?php if($printChk == 'Newface') echo ' checked="checked"'; ?> >
						<label for="02-A" class="radio02">新人だけを表示</label>
					</div>
					<div>
						<input type="radio" id="02-B" name="Schedule" value="Amateur"<?php if($printChk == 'Amateur') echo ' checked="checked"'; ?> >
						<label for="02-B" class="radio02">新人で素人未経験だけを表示</label>
					</div>
					<div class="btn_submit">
						<?php if(!empty($day)){ ?><input type="hidden" name="day" value="<?php echo $day; ?>"><?php } ?>
                        <input type="submit" value="検索">
					</div>
				</div>
				</form>
			</div>

			<div class="girl_wrap_5col">
				<ul class="flex week">
                <!-- 1週間の切り替えタブを表示させる処理-->
				<?php foreach($workDateFrontPrintArray AS $key => $value){ ?>
					<li><a href="/schedule/<?php echo $workDateArray[$key]; ?>/<?php echo $printChk; ?>"<?php if($day == $workDateArray[$key]) echo ' class="current"'; ?>><?php echo $value; ?></a></li>
				<?php } ?>
				</ul>

                <?php if(!empty($printArray)){ ?>
				<div class="wrap flex">

                    <!-- 出勤日のステータスを持っている女の子を表示させる処理-->
                    <?php foreach($printArray AS $key => $value){ ?>
					<div class="col">
						<a href="/profile/<?php echo $value['Girl']['id'] ?>">
							<div class="inner">
                                <p class="status status_02">
                                    <span><?php echo $value['ScheduleStatus']['status']; ?></span>
                                	<?php if(!empty($value['ScheduleStatus']['time'])){ ?><span><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
                                </p>
                                <?php if(!empty($value['Image']['imgId'])){ ?>
                                    <div class="pic">
                                        <img src="/userImgShop/Image/<?php echo $value['Image']['imgId']; ?>/<?php echo $value['Image']['imgId']; ?>.jpg" width="100%">
                                    </div>
                                <?php } ?>
								<div class="name"><?php echo $value['Girl']['name'] ?>（<?php echo $value['Girl']['age'] ?>）</div>
								<div class="size">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></div>
								<ul class="tug flex">
									<?php if(!empty($value['Girl']['label_1'])){ ?><li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
									<?php if(!empty($value['Girl']['label_2'])){ ?><li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
									<?php if(!empty($value['Girl']['label_3'])){ ?><li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
									<?php if(!empty($value['Girl']['label_4'])){ ?><li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
								</ul>
								<div class="special flex">
									<p>特別指名料</p>
									<p><?php echo $value['Girl']['nominate_fare'] ?>円</p>
								</div>
							</div>
						</a>
						<ul class="girl_icon_list">
							<?php if(!empty($value['Ranking'][0]['priority'])){ ?><li><img src="/assets/img/common/girl_icon_rank<?php echo $value['Ranking'][0]['category']; ?>_<?php echo $value['Ranking'][0]['priority']; ?>.png" alt="" /></li><?php } ?>
							<?php if(!empty($value['Girl']['newface'])){ ?><li><img src="/assets/img/common/girl_icon_new.png" alt="" /></li><?php } ?>
							<?php if(!empty($value['Girl']['amateur'])){ ?><li><img src="/assets/img/common/girl_icon_si.png" alt="" /></li><?php } ?>
							<?php if(!empty($value['Girl']['twitter_id'])){ ?>
							<li>
								<a href="<?php echo $value['Girl']['twitter_id']; ?>" target="_blank">
									<img src="/assets/img/common/girl_icon_tw.png" alt="" />
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
                    <?php } ?>
				</div>
				<?php } ?>
				
			</div>
		</div>

			<?php if(!empty($Paging)){ ?>
			<div class="pager">
				<ol class="review-page-nav">
			    <?php echo $Paging; ?>
				</ol>
			</div>
            <?php } ?>

	</div>

</section>
