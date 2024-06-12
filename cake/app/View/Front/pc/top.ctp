<link rel="stylesheet" href="/assets/css/top.css" />

<!--ポイントカードバナーここから-->
<link rel="stylesheet" href="/assets/css/pointcard.css" />
<div class="pointcard">
    <div class="pointcard__inner">
        <a class="close"><div class="clbtn close"><span></span></div></a>
        <div class="pointcard__img">
            <a href="https://speed-speed.com/news/" target="_blank">
                <img src="/assets/img/common/pointcard_bnr.gif" alt="ポイントカードバナー" />
            </a>
        </div>
    </div>
</div>
<!--ここまで -->

<article class="shop_top">
	<ol class="flex bread">
		<li><a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span></li>
		<li><?php echo SHOP_NAME; ?></li>
	</ol>

	<p class="seo_disc">
		日本橋の風俗 大阪ホテルヘルス(ホテヘル)グループ スピード日本橋店<br />
		日本橋で風俗をお探しなら風俗未経験・素人・体験入店から人気の風俗嬢まで、在籍数・可愛さ・料金全てにおいてお客様に満足いただけること間違いなし!!
	</p>

	<div class="flex">
		<div class="blk01">

			<?php if (!empty($printArray['Linebots'])) { ?>
				<section class="story">
					<h2 class="block_ttl">最新のストーリーズ / Stories</h2>
					<div class="story_wrap">
						<?php foreach ($printArray['Linebots'] as $key => $value) { ?>
							<div class="story_col">
								<div class="flex icon_col">
									<?php if (!empty($value['Girl']['Image']['image'][0][1]['file'])) { ?>
										<div class="pic_story">
											<a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>">
												<img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w240.jpg">
											</a>
										</div>
									<?php } ?>
									<div>
										<p class="status status_0<?php if (!empty($value['Girl']['ScheduleStatus']['time'])) {
																								echo '2';
																							} else {
																								echo '1';
																							} ?>">
											<span><?php echo $value['Girl']['ScheduleStatus']['status']; ?></span>
											<?php if (!empty($value['Girl']['ScheduleStatus']['time'])) { ?><span><?php echo $value['Girl']['ScheduleStatus']['time']; ?></span><?php } ?>
										</p>
										<p><a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>"><?php echo $value['Girl']['Girl']['name']; ?></a></p>
									</div>
								</div>
								<div class="content">
									<?php echo $value['Linebots']['file']['tag']; ?>
									<p><?php echo nl2br($value['Linebots']['text']); ?></p>
								</div>
							</div>
						<?php } ?>

						<div class="top_more_btn_sub"><a href="/story/">もっとみる</a></div>
					</div>
				</section>
			<?php } ?>

		</div>

		<div class="blk02">

			<?php if (!empty($printArray['Slider'])) { ?>
				<section class="slider">
					<div class="swiper-container sl top_swiper">
						<div class="swiper-wrapper">
							<?php foreach ($printArray['Slider'] as $key => $value) { ?>
								<?php if (!empty($value['Image'][0]['file'])) { ?>
									<div class="swiper-slide"><?php if (!empty($value['Slider']['url'])) echo '<a href="' . $value['Slider']['url'] . '" target="_blank">'; ?><img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/w660.jpg"><?php if (!empty($value['Slider']['url'])) echo '</a>'; ?></div>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</section>
			<?php } ?>

			<section class="news news_tab">
				<div class="flex tab">
					<h2 class="tab1 active">最新情報/Topics</h2>
					<h2 class="tab2">面接情報/Interview/Topics</h2>
				</div>

				<div class="news_wrap">

					<?php if (!empty($printArray['News'])) { ?>
						<div class="tabitem1">
							<?php foreach ($printArray['News'] as $key => $value) { ?>
								<div class="news_col">
									<h3><a href="<?php echo SITE_URL ?>" title="大阪の風俗スピード 日本橋店">日本橋店</a></h3>
									<?php if (!empty($value['News']['title'])) { ?><?php echo $value['News']['title']; ?><br /><?php } ?>
								<?php echo nl2br($value['News']['comment']); ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>


					<?php if (!empty($printArray['Interview'])) { ?>
						<div class="tabitem2">
							<?php foreach ($printArray['Interview'] as $key => $value) { ?>
								<div class="news_col">
									<h3><a href="<?php echo SITE_URL ?>" title="大阪の風俗スピード 日本橋店">日本橋店</a></h3>
									<?php if (!empty($value['Interview']['title'])) { ?><?php echo $value['Interview']['title']; ?><br /><?php } ?>
								<?php echo nl2br($value['Interview']['comment']); ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>

				</div>
			</section>

		</div>
	</div>


	<section class="rt_nf">
		<div class="flex tab">
			<h2 class="tab1 active">リアルタイム情報/Real time</h2>
			<h2 class="tab2">新人情報/New face</h2>
		</div>

		<div class="rt_wrap">
			<div class="tabitem1">
				<div class="flex sort_radio">
					<p>絞り込み：</p>
					<form action="/realtime/" method="post">
						<div class="radio flex">
							<div>
								<input type="radio" id="02-C" name="RealTime" value="all" checked="checked" />
								<label for="02-C" class="radio02">全件表示</label>
							</div>
							<div>
								<input type="radio" id="02-A" name="RealTime" value="Newface" />
								<label for="02-A" class="radio02">新人だけを表示</label>
							</div>
							<div>
								<input type="radio" id="02-B" name="RealTime" value="Amateur" />
								<label for="02-B" class="radio02">新人で素人未経験だけを表示</label>
							</div>
							<div class="btn_submit">
								<input type="submit" value="検索">
							</div>
						</div>
					</form>
				</div>

				<div class="girl_wrap_5col">

					<?php if (!empty($printArray['RealTime'])) { ?>
						<div class="wrap flex">

							<?php foreach ($realTimeTitleArray as $key2 => $value2) { ?>
								<?php if ($key2 != 0 and $key2 != 99) { ?>
									<?php if (!empty($printArray['RealTime'][$key2])) { ?>
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
												<ul class="girl_icon_list">
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
									<?php } ?>
								<?php } ?>
							<?php } ?>

						</div>
					<?php } ?>

				</div>

				<div class="top_more_btn"><a href="/realtime/">もっとみる</a></div>
			</div>

			<div class="tabitem2 nf nf_2col">
				<div class="flex sort_radio">
					<p>絞り込み：</p>
					<form action="/newface/" method="post">
						<div class="radio flex">
							<div>
								<input type="radio" id="03-C" name="Newface" value="all" checked="checked" />
								<label for="03-C" class="radio02">全件表示</label>
							</div>
							<!--  div>
							<input type="radio" id="03-A" name="Newface" value="Today" />
							<label for="03-A" class="radio02">本日出勤予定の女の子を表示</label>
						</div -->
							<div>
								<input type="radio" id="03-B" name="Newface" value="Amateur" />
								<label for="03-B" class="radio02">新人で素人未経験だけを表示</label>
							</div>
							<div class="btn_submit">
								<input type="submit" value="検索">
							</div>
						</div>
					</form>
				</div>

				<?php if (!empty($printArray['GirlNewfaceAmateur'])) { ?>
					<div class="flex outer">
						<?php foreach ($printArray['GirlNewfaceAmateur'] as $key => $value) { ?>
							<div class="nf_col">
								<div class="flex">
									<div class="blk01">
										<?php if (!empty($value['Image']['image'][0][1]['file'])) { ?>
											<div class="pic_nf">
												<a href="/profile/<?php echo $value['Girl']['id']; ?>">
													<img src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/w240.jpg" width="240" alt="">
												</a>
											</div>
										<?php } ?>
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
									<div class="blk02">
										<?php if (!empty($value['Girl']['started_at'])) { ?><div class="date"><?php $started_at = new DateTime($value['Girl']['started_at']);
																																													echo $started_at->format('m月d日'); ?>入店</div><?php } ?> <dl class="flex">
											<dt><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</dt>
											<dd>T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></dd>
										</dl>
										<?php if (!empty($value['Girl']['comment'])) { ?>
											<div class="cut_nf_txt"><?php echo $value['Girl']['comment']; ?></div>
										<?php } ?>
										<div class="more">
											<a href="/profile/<?php echo $value['Girl']['id']; ?>">続きを読む</a>
										</div>
										<div class="status_wrap">
											<p class="status status_0<?php if (!empty($value['ScheduleStatus']['time'])) {
																									echo '2';
																								} else {
																									echo '1';
																								} ?>">
												<span><?php echo $value['ScheduleStatus']['status']; ?></span>
												<?php if (!empty($value['ScheduleStatus']['time'])) { ?><span><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				<?php } ?>

				<div class="top_more_btn"><a href="/newface/">もっとみる</a></div>
			</div>

		</div>
	</section>

	<?php if (!empty($printArray['Ranking'])) { ?>
		<section class="rank">
			<div class="rank_outer">
				<div class="rank_tab">
					<ul class="flex">
						<li class="tab1 active">総合ランキング/ranking10</li>
						<?php if (!empty($printArray['Ranking'][1][0]['Ranking']['title'])) { ?><li class="tab2"><?php echo $printArray['Ranking'][1][0]['Ranking']['title']; ?></li><?php } ?>
						<?php if (!empty($printArray['Ranking'][2][0]['Ranking']['title'])) { ?><li class="tab3"><?php echo $printArray['Ranking'][2][0]['Ranking']['title']; ?></li><?php } ?>
					</ul>
				</div>

				<div class="rank_wrap">
					<?php foreach ($rankingArray as $key2 => $value2) { ?>
						<?php if (!empty($printArray['Ranking'][$key2])) { ?>
							<?php
							$count = $key2 + 1;
							if ($key2 == 0) {
								$title = '総合ランキング';
							} else {
								$title = $printArray['Ranking'][$key2][0]['Ranking']['title'];
							}
							?>
							<div class="tabitem<?php echo $count; ?>" id="tabs<?php echo $count; ?>">

								<?php foreach ($printArray['Ranking'][$key2] as $key => $value) { ?>
									<div class="rank_col panel<?php echo $count; ?>" id="panel<?php echo $count; ?>-<?php echo $value['Ranking']['priority']; ?>">
										<div class="flex">
											<div class="blk01">
												<h3>
													<span><?php echo $title; ?></span>
													<span>RANKING</span>
													<span><?php echo $value['Ranking']['priority']; ?></span>
													<span>位</span>
												</h3>
												<ul class="flex">
													<li><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</li>
													<li>T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></li>
												</ul>
												<div class="status status_0<?php if (!empty($value['ScheduleStatus']['time'])) {
																											echo '2';
																										} else {
																											echo '1';
																										} ?>"><span><?php echo $value['ScheduleStatus']['status']; ?></span>
													<?php if (!empty($value['ScheduleStatus']['time'])) { ?>
														<span>
															<?php echo $value['ScheduleStatus']['time']; ?>
														</span>
													<?php } ?>
												</div>
												<div class="Reserv"><a href="#">この子をWEB予約する</a></div>
												<?php if (!empty($value['Schedule'])) { ?>
													<h4>出勤予定</h4>
													<div class="sc_wrap">
														<ul>
															<?php foreach ($value['Schedule'] as $key3 => $value3) { ?>
																<li>
																	<div><?php echo $value3['workDatePrint']; ?></div>
																	<div><?php echo $value3['schedulePrint']; ?></div>
																</li>
															<?php } ?>
														</ul>
													</div>
												<?php } ?>
												<div class="prof">
													<a href="/profile/<?php echo $value['Girl']['id']; ?>">プロフィールページを見る</a>
												</div>
											</div>

											<div class="blk02">
												<div class="pic">
													<?php if (!empty($value['Image'][1]['Image']['imgId'])) { ?>
														<div class="mainpic">
															<div><img src="/userImgShop/Image/<?php echo $value['Image'][1]['Image']['imgId']; ?>/w351.jpg" width="351" class="mainimage changeimage" alt="" /></div>
														</div>
													<?php } ?>
													<ul class="girl_icon_list">
														<?php if (!empty($value['Ranking']['priority'])) { ?><li><img src="/assets/img/common/girl_icon_rank<?php echo $value['Ranking']['category']; ?>_<?php echo $value['Ranking']['priority']; ?>.png" alt="" /></li><?php } ?>
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
											</div>

											<?php if (!empty($value['Image'][1]['Image']['imgId'])) { ?>
												<div class="blk03 fox_scroll">
													<div class="subpic changeimage flex">
														<?php foreach ($value['Image'] as $key4 => $value4) { ?>
															<?php if ($key4 > 1) { ?>
																<div><img src="/userImgShop/Image/<?php echo $value4['Image']['imgId']; ?>/<?php echo $value4['Image']['imgId']; ?>.jpg" width="160" alt="" /></div>
															<?php } ?>
														<?php } ?>
													</div>
												</div>
											<?php } ?>

										</div>
									</div>
								<?php } ?>

								<div class="rank_list swiper-container rank_swiper_<?php echo $count; ?>">
									<div class="swiper-wrapper">
										<?php foreach ($printArray['Ranking'][$key2] as $key => $value) { ?>
											<div class="swiper-slide">
												<div class="flex">
													<h3><?php echo $value['Ranking']['priority']; ?><span>位</span></h3>
													<p><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</p>
												</div>
												<?php if (!empty($value['Image'][1]['Image']['imgId'])) { ?>
													<div class="pic">
														<a href="#panel<?php echo $count; ?>-<?php echo $value['Ranking']['priority']; ?>">
															<img src="/userImgShop/Image/<?php echo $value['Image'][1]['Image']['imgId']; ?>/w203.jpg" width="203" />
														</a>
													</div>
												<?php } ?>
												<p class="size">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></p>
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>

							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php } ?>

</article>