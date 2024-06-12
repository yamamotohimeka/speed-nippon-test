<link rel="stylesheet" href="/assets/css/girls.css" />

<div class="page page_girls">

	<section>
		<div class="page_ttl">
			<h2>女の子一覧<span>GIRLS</span></h2>
		</div>

		<ol class="flex bread">
			<li>
				<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
			</li>
			<li>
				<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
			</li>
			<li>
				女の子一覧
			</li>
		</ol>

		<div class="girls_wrap page_wrap">

			<div class="select_wrap">
				<?php echo $this->Form->create('Search'); ?>
				<div class="flex sort_radio">
					<!-- <p>絞り込み：</p> -->
					<?php if(!empty($search['radio'])) $printChk = $search['radio']; ?>
					<?php if(empty($search['radio']) AND empty($printChk)) $printChk = 'all'; ?>
					<div class="radio flex">
						<div>
							<input type="radio" id="radio-all" name="data[Search][radio]" value="all" <?php if ($printChk == 'all') echo ' checked="checked"'; ?> />
							<label for="radio-all" class="radio02">全件表示</label>
						</div>
						<div>
							<input type="radio" id="radio-new" name="data[Search][radio]" value="Newface" <?php if ($printChk == 'Newface') echo ' checked="checked"'; ?> />
							<label for="radio-new" class="radio02">新人だけを表示</label>
						</div>
						<div>
							<input type="radio" id="radio-new2" name="data[Search][radio]" value="Amateur" <?php if ($printChk == 'Amateur') echo ' checked="checked"'; ?> />
							<label for="radio-new2" class="radio02">新人で素人未経験だけを表示</label>
						</div>
					</div>
				</div>
				<div class="select_wrap02 flex">
					<div class="blk01">
						<ul class="flex">
							<li class="flex">
								<div class="name">名前</div>
								<div class="txtbox txtbox_name"><?php echo $this->Form->input('name', array('default' => $search['name'], 'type' => 'text', 'label' => false)); ?></div>
							</li>
							<li class="flex">
								<div class="name">年齢</div>
								<div class="txtbox"><?php echo $this->Form->input('age', array('default' => $search['age'], 'type' => 'text', 'label' => false)); ?></div>
								<div class="selectbox">
									<select name="data[Search][age-select]">
										<option selected disable>-</option>
										<option value="gt" <?php if (!empty($search['age-select']) and $search['age-select'] == 'gt') echo ' selected'; ?>>以上</option>
										<option value="lt" <?php if (!empty($search['age-select']) and $search['age-select'] == 'lt') echo ' selected'; ?>>以下</option>
									</select>
								</div>
							</li>
							<li class="flex">
								<div class="name">身長</div>
								<div class="txtbox"><?php echo $this->Form->input('height', array('default' => $search['height'], 'type' => 'text', 'label' => false)); ?></div>
								<div class="selectbox">
									<select name="data[Search][height-select]">
										<option selected disable>-</option>
										<option value="gt" <?php if (!empty($search['height-select']) and $search['height-select'] == 'gt') echo ' selected'; ?>>以上</option>
										<option value="lt" <?php if (!empty($search['height-select']) and $search['height-select'] == 'lt') echo ' selected'; ?>>以下</option>
									</select>
								</div>
							</li>
							<li class="flex">
								<div class="name">バストカップ</div>
								<div class="txtbox"><?php echo $this->Form->select('size_c', $cupArray, array('default' => $search['size_c'], 'label' => false, 'empty' => false, 'type' => 'select')); ?></div>
								<div class="selectbox">
									<select name="data[Search][size_c-select]">
										<option selected disable>-</option>
										<option value="gt" <?php if (!empty($search['size_c-select']) and $search['size_c-select'] == 'gt') echo ' selected'; ?>>以上</option>
										<option value="lt" <?php if (!empty($search['size_c-select']) and $search['size_c-select'] == 'lt') echo ' selected'; ?>>以下</option>
									</select>
								</div>
							</li>
						</ul>
					</div>
					<div class="blk02">
						<div class="btn_submit"><input type="submit" value="検索"></div>
					</div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>

			<div class="girl_wrap_5col">


				<?php if (!empty($printArray['Girl'])) { ?>
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
												<img src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/<?php echo $value['Image']['image'][0][1]['imgId']; ?>.jpg" width="100%">
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

					</div>
				<?php } ?>


			</div>


			<?php if (!empty($Paging)) { ?>
				<div class="pager">
					<ol class="review-page-nav">
						<?php echo $Paging; ?>
					</ol>
				</div>
			<?php } ?>

		</div>

	</section>
</div>