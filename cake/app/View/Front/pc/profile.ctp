<link rel="stylesheet" href="/assets/css/profile.css" />

<div class="page page_girls">

	<section class="page page_prof">

		<div class="page_ttl">
			<h2>プロフィール<span>PROFILE</span></h2>
		</div>

		<ol class="flex bread">
			<li>
				<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
			</li>
			<li>
				<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
			</li>
			<li>
				<?php echo $printArray['profile']['Girl']['name']; ?>
			</li>
		</ol>

		<div class="page_wrap flex">
			<div class="blk01">
				<?php if (!empty($printArray['profile']['Image']['image'][1][1]['file'])) { ?>
					<div class="photo panel-prof">
						<div class="mainpic">
							<ul>
								<?php if (!empty($printArray['profile']['Ranking'][0]['priority'])) { ?><li><img src="/assets/img/common/girl_icon_rank<?php echo $printArray['profile']['Ranking'][0]['category']; ?>_<?php echo $printArray['profile']['Ranking'][0]['priority']; ?>.png" alt="" /></li><?php } ?>
								<?php if (!empty($printArray['profile']['Girl']['newface'])) { ?><li><img src="/assets/img/profile/common/girl_icon_new.png" alt="" /></li><?php } ?>
								<?php if (!empty($printArray['profile']['Girl']['amateur'])) { ?><li><img src="/assets/img/profile/common/girl_icon_si.png" alt="" /></li><?php } ?>
								<?php if (!empty($printArray['profile']['Girl']['twitter_id'])) { ?>
									<li>
										<a href="<?php echo $printArray['profile']['Girl']['twitter_id']; ?>" target="_blank">
											<img src="/assets/img/profile/common/girl_icon_tw.png" alt="" />
										</a>
									</li>
								<?php } ?>
							</ul>
							<div><img src="/userImgShop/Image/<?php echo $printArray['profile']['Image']['image'][1][1]['imgId']; ?>/<?php echo $printArray['profile']['Image']['image'][1][1]['imgId']; ?>.jpg?<?php echo date('YmdHis'); ?>" class="mainimage changeimage" alt=""></div>
						</div>
						<div class="subpic changeimage flex">
							<?php foreach ($printArray['profile']['Image']['image'][1] as $key => $value) { ?>
								<div><img src="/userImgShop/Image/<?php echo $value['imgId']; ?>/<?php echo $value['imgId']; ?>.jpg?<?php echo date('YmdHis'); ?>" width="123" alt=""></div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<div>
					<ul class="flex tug">
						<?php if (!empty($printArray['profile']['Girl']['label_1'])) { ?><li><?php echo $printArray['profile']['Girl']['label_1']; ?></li><?php } ?>
						<?php if (!empty($printArray['profile']['Girl']['label_2'])) { ?><li><?php echo $printArray['profile']['Girl']['label_2']; ?></li><?php } ?>
						<?php if (!empty($printArray['profile']['Girl']['label_3'])) { ?><li><?php echo $printArray['profile']['Girl']['label_3']; ?></li><?php } ?>
						<?php if (!empty($printArray['profile']['Girl']['label_4'])) { ?><li><?php echo $printArray['profile']['Girl']['label_4']; ?></li><?php } ?>
					</ul>
				</div>
				<div class="flex btn1">
					<div class="special flex">
						<p>特別指名料</p>
						<p><?php echo $printArray['profile']['Girl']['nominate_fare'] ?>円</p>
					</div>
					<div class="btn_mm"><a href="/mailmagazine/<?php echo $printArray['profile']['Girl']['id'] ?>">出勤メルマガに登録</a></div>
				</div>
				<div class="flex btn1">
					<div class="status status_0<?php if (!empty($printArray['profile']['ScheduleStatus']['time'])) {
																				echo '2';
																			} else {
																				echo '1';
																			} ?>">
						<span><?php echo $printArray['profile']['ScheduleStatus']['status']; ?></span>
						<?php if (!empty($printArray['profile']['ScheduleStatus']['time'])) { ?><span><?php echo $printArray['profile']['ScheduleStatus']['time']; ?></span><?php } ?>
					</div>
					<?php if (!empty($printArray['profile']['QuestionPrint']['Question'])) { ?>
						<div class="hq"><a href="#modal">エッチな質問をみる</a></div>
					<?php } ?>
				</div>

				<?php if (!empty($printArray['profile']['Girl']['comment'])) { ?>
					<div class="txt_blk_01 bd_outer">
						<div class="bd_wrap">
							<p>
								<?php echo nl2br($printArray['profile']['Girl']['comment']); ?>
							</p>
						</div>
					</div>
				<?php } ?>

				<?php if (!empty($printArray['profile']['Schedule'])) { ?>
					<div class="txt_blk_02 bd_outer">
						<h3>出勤予定</h3>
						<div class="bd_wrap">
							<div class="sc_wrap">
								<ul>
									<?php foreach ($printArray['profile']['Schedule'] as $key => $value) { ?>
										<li>
											<div><?php echo $value['workDatePrint']; ?></div>
											<div><?php echo $value['schedulePrint']; ?></div>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				<?php } ?>

				<?php if (!empty($printArray['profile']['Girl']['premiere_course'])) { ?>
					<div class="txt_blk_03 bd_outer">
						<div class="bd_wrap">
							<h3>プレミアコース</h3>
							<div class="flex">
								<div class="course_inner_01">
									<p class="flex"><?php echo nl2br($printArray['profile']['Girl']['premiere_course']); ?></p>
								</div>
								<p class="course_inner_02">
									<?php echo nl2br($printArray['profile']['Girl']['premiere_comment']); ?>
								</p>
							</div>
						</div>
					</div>
				<?php } ?>

				<div class="btn_reserve" hidden>
					<a href="">この子をWEB予約する</a>
				</div>

				<?php if (!empty($printArray['Option'])) { ?>
					<div class="option">
						<ul class="flex">
							<?php foreach ($printArray['Option'] as $key => $value) { ?>
								<li>
									<h3><?php echo $value['Option']['name']; ?></h3>
									<?php if (!empty($value['Image'][0]['imgId'])) { ?>
										<div class="pic"><img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg" alt=""></div>
									<?php } ?>
									<div class="txt"><?php echo $value['Option']['fare']; ?>円</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>

				<div class="review-list">
					<div id="review-list"></div>
				</div>

				<div class="prof_review">
					<ul class="tab flex">
						<li class="active tab1">口コミ</li>
						<li class="tab2">口コミを投稿</li>
					</ul>
					<div class="prof_review_list tabitem1">
						<?php if (!empty($this->params->pass[1])) { ?><span style="color:red;">口コミ投稿ありがとうございました。反映まで暫くお待ち願います。</span><?php } ?>
						<?php if (!empty($printArray['profile']['Review'])) { ?>
							<ul class="review-list">
								<?php foreach ($printArray['profile']['Review'] as $key => $value) { ?>
									<li>
										<h4><?php echo $value['name'] ?>さん</h4>
										<div class="review-rate">満足度：
											<span class="review-star">
												<?php for ($i = 0; $i < $value['point']; $i++) { ?>
													<img src="/assets/img/common/review_star.png" alt="<?php echo $i; ?>">
												<?php } ?>
											</span>
										</div>
										<p class="review-text"><?php echo nl2br($value['comment']); ?></p>
									</li>
								<?php } ?>
							</ul>
						<?php } ?>
						<?php if (!empty($Paging)) { ?>
							<div class="pager">
								<ol class="review-page-nav">
									<?php echo $Paging; ?>
								</ol>
							</div>
						<?php } ?>
					</div>


					<div class="prof_review_post tabitem2">
						<div id="review-post" class="review-inner">
							<?php echo $this->Form->create('Review'); ?>
							<ul class="form-factor">
								<li>
									<label for="title">■お名前<span>※全角16文字以内</span></label>
									<?php echo $this->Form->input('name', array('label' => false, 'type' => 'text', 'placeholder' => '', 'required' => true)); ?>
								</li>
								<li>
									<label for="point">■満足度</label>
									<?php echo $this->Form->input('point', array('label' => false, 'type' => 'number', 'size' => '40', 'class' => 'point', 'id' => 'point', 'max' => '5', 'min' => '1', 'required' => true)); ?>
								</li>
								<li>
									<label for="generation">■あなたの年代<span>※年代は公開されません</span></label>
									<?php echo $this->Form->select('generation', $generationArray, array('label' => false, 'empty' => false, 'type' => 'select', 'required' => false)); ?>
								</li>
								<li>
									<label for="comment">■コメント</label>
									<?php echo $this->Form->input('comment', array('label' => false, 'type' => 'textarea', 'cols' => '70-control', 'rows' => '10', 'required' => true)); ?>
									<span>※誹謗中傷、わいせつな内容等、不適切な内容の場合は削除させて頂く場合がございます。</span>
								</li>
								<li>
									<button type="submit" name="submit" id="submit">投稿する</button>
									<?php echo $this->Form->hidden('girl_id', array('value' => $printArray['profile']['Girl']['id'])); ?>
									<?php echo $this->Form->hidden('dateTime', array('value' => date("Y-m-d H:i:s"))); ?>
									<?php echo $this->Form->hidden('reviewWrite', array('value' => 1)); ?>
								</li>
							</ul>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>
			</div>


			<div class="blk02 story">
				<div class="icon">
					<div class="flex icon_col">
						<?php if (!empty($printArray['profile']['Image']['image'][1][1]['file'])) { ?>
							<div class="pic_story">
								<img src="/userImgShop/Image/<?php echo $printArray['profile']['Image']['image'][1][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>" width="240" alt="" />
							</div>
						<?php } ?>
						<div>
							<p class="story_name"><?php echo $printArray['profile']['Girl']['name'] ?>（<?php echo $printArray['profile']['Girl']['age'] ?>）</p>
							<p class="story_size">T<?php echo $printArray['profile']['Girl']['height']; ?> B<?php echo $printArray['profile']['Girl']['size_b']; ?>(<?php echo $cupArray[$printArray['profile']['Girl']['size_c']]; ?>) W<?php echo $printArray['profile']['Girl']['size_w']; ?> H<?php echo $printArray['profile']['Girl']['size_h']; ?></p>
						</div>
					</div>
				</div>
				<?php if (!empty($printArray['profile']['Linebots'])) { ?>
					<div class="story_wrap">
						<?php foreach ($printArray['profile']['Linebots'] as $key => $value) { ?>
							<?php
							$dateTimeArray = explode(" ", $value['dateTime']);
							$dateTimeDayArray = explode("-", $dateTimeArray[0]);
							$dateTimeTimeArray = explode(":", $dateTimeArray[1]);
							?>
							<div class="story_col">
								<div class="date"><?php echo $dateTimeDayArray[0]; ?>年<?php echo $dateTimeDayArray[1]; ?>月<?php echo $dateTimeDayArray[2]; ?>日 <?php echo $dateTimeTimeArray[0]; ?>:<?php echo $dateTimeTimeArray[1]; ?></div>
								<div class="content">
									<?php echo $value['Linebots']['tag']; ?>
									<p><?php echo nl2br($value['text']); ?></p>
								</div>
							</div>
						<?php } ?>
						<div class="btn_more_story"><a href="/story/<?php echo $printArray['profile']['Girl']['id']; ?>">もっと見る</a></div>
					</div>
				<?php } ?>

				<?php if (!empty($printArray['profile']['Girl']['twitter_id'])) { ?>
					<a class="twitter-timeline" data-height="1285" data-theme="light" href="<?php echo $printArray['profile']['Girl']['twitter_id']; ?>">Tweets by speed_mihiro</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<?php } ?>

			</div>
		</div>


		<div class="remodal hq_content" data-remodal-id="modal">
			<dl>
				<?php foreach ($printArray['profile']['QuestionPrint']['Question'] as $key => $value) { ?>
					<dt><span>Q<?php echo $key; ?>.</span><?php echo $value['question']; ?></dt>
					<dd>A.<?php echo nl2br($value['answer']); ?></dd>
				<?php } ?>
			</dl>
			<button data-remodal-action="close" class="remodal-close"></button>
			<div data-remodal-action="close" class="closebtn">閉じる</div>
		</div>

		<?php if (!empty($printArray['Girl'])) { ?>
			<div class="girls_outer">

				<div class="page_ttl">
					<h2>女の子一覧<span>PROFILE</span></h2>
				</div>

				<div class="girls_wrap">

					<div class="girl_wrap_5col">

						<div class="wrap flex">

							<?php foreach ($printArray['Girl'] as $key => $value) { ?>
								<div class="col">
									<a href="/profile/<?php echo $value['Girl']['id'] ?>">
										<div class="inner">
											<p class="status status_0<?php if (!empty($value['ScheduleStatus']['time'])) {
																									echo '2';
																								} else {
																									echo '1';
																								} ?>">
												<span><?php echo $value['ScheduleStatus']['status']; ?></span>
												<?php if (!empty($value['ScheduleStatus']['time'])) { ?><span><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
											</p>
											<?php if (!empty($value['Image']['image'][0][1]['file'])) { ?>
												<div class="pic">
													<img src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/<?php echo $value['Image']['image'][0][1]['imgId']; ?>.jpg?<?php echo date('YmdHis'); ?>" width="100%">
												</div>
											<?php } ?>
											<div class="name"><?php echo $value['Girl']['name'] ?>（<?php echo $value['Girl']['age'] ?>）</div>
											<div class="size">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></div>
											<ul class="tug flex">
												<?php if (!empty($value['Girl']['label_1'])) { ?><li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
												<?php if (!empty($value['Girl']['label_2'])) { ?><li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
												<?php if (!empty($value['Girl']['label_3'])) { ?><li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
												<?php if (!empty($value['Girl']['label_4'])) { ?><li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
											</ul>
											<div class="special flex">
												<p>特別指名料</p>
												<p><?php echo $value['Girl']['nominate_fare'] ?></p>
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

						</div>

					</div>

				</div>
			<?php } ?>


			</div>
	</section>