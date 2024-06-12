<link rel="stylesheet" href="/assets/css/realtime.css" />

<div class="page page_realtime">

	<section class="rt">

		<div class="page_ttl">
			<h2>待ち時間情報<span>REAL TIME</span></h2>
		</div>

		<ol class="flex bread">
			<li>
				<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
			</li>
			<li>
				<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
			</li>
			<li>
				待ち時間情報
			</li>
		</ol>

		<div class="girls_wrap page_wrap">

			<div class="rt_wrap">
				<div class="flex sort_radio">
					<p>絞り込み：</p>
					<form action="/realtime/" method="post">
						<div class="radio flex">
							<div>
								<input type="radio" id="02-C" name="RealTime" value="all" <?php if ($printChk == 'all') echo ' checked="checked"'; ?> />
								<label for="02-C" class="radio02">全件表示</label>
							</div>
							<div>
								<input type="radio" id="02-A" name="RealTime" value="Newface" <?php if ($printChk == 'Newface') echo ' checked="checked"'; ?> />
								<label for="02-A" class="radio02">新人だけを表示</label>
							</div>
							<div>
								<input type="radio" id="02-B" name="RealTime" value="Amateur" <?php if ($printChk == 'Amateur') echo ' checked="checked"'; ?> />
								<label for="02-B" class="radio02">新人で素人未経験だけを表示</label>
							</div>
							<div class="btn_submit">
								<input type="submit" value="検索">
							</div>
						</div>
					</form>
				</div>

			</div>

            <!-- 女の子の各待ち時間ごとに表示させる処理-->
			<?php foreach ($realTimeTitleArray as $key2 => $value2) { ?>
				<?php if ($key2 != 0 and $key2 != 99) { ?>
					<div class="rt_time_ttl"><?php echo $value2; ?></div>

					<?php if (!empty($printArray['RealTime'][$key2])) { ?>
						<div class="girl_wrap_5col">
							<div class="wrap flex">

								<?php foreach ($printArray['RealTime'][$key2] as $key => $value) { ?>
									<div class="col">
										<a href="/profile/<?php echo $value['Girl']['id']; ?>">
											<div class="inner">
												<?php
												if ($value['Girl']['real_state'] == 99 and !empty($value['Girl']['realTimePrint'])) {
													$status = $value['Girl']['realTimePrint'] . '待ち';
												} else {
													$status = $value2;
												}
												?>
												<div class="status status_02"><span><?php echo $status; ?></span><span><?php echo $value['SchedulePrint']['Schedule'][WORK_DATE]['schedulePrint']; ?></span></div>
												<?php if (!empty($value['Image']['image'][0][1]['file'])) { ?>
													<div class="pic">
														<img src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/<?php echo $value['Image']['image'][0][1]['imgId']; ?>.jpg" width="100%">
													</div>
												<?php } ?>
												<div class="name"><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</div>
												<div class="size">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></div>
												<ul class="tug flex">
													<?php if (!empty($value['Girl']['label_1'])) { ?><li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
													<?php if (!empty($value['Girl']['label_2'])) { ?><li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
													<?php if (!empty($value['Girl']['label_3'])) { ?><li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
													<?php if (!empty($value['Girl']['label_4'])) { ?><li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
												</ul>
												<div class="special flex">
													<p>特別指名料</p>
													<p><?php echo $value['Girl']['nominate_fare'] ?>円</p>
												</div>
											</div>
										</a>
										<ul class="girl_icon_list realtime_top">
											<?php if (!empty($value['Ranking'][0]['priority'])) { ?><li><img src="/assets/img/common/girl_icon_rank<?php echo $value['Ranking'][0]['category']; ?>_<?php echo $value['Ranking'][0]['priority']; ?>.png" alt="" /></li><?php } ?>
											<?php if (!empty($value['Girl']['newface'])) { ?><li><img src="/assets/img/common/girl_icon_new.png" alt="" /></li><?php } ?>
											<?php if (!empty($value['Girl']['amateur'])) { ?><li><img src="/assets/img/common/girl_icon_si.png" alt="" /></li><?php } ?>
											<?php if (!empty($value['Girl']['twitter_id'])) { ?>
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
						</div>
					<?php } ?>

				<?php } ?>
			<?php } ?>

		</div>
	</section>
</div>