<link rel="stylesheet" href="/assets/css/review.css" />
<section class="page page_review">

	<div class="page_ttl">
		<h2>口コミ<span>REVIEW</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
		</li>
		<li>
			<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
		</li>
		<li>
			口コミ
		</li>
	</ol>

	<div class="page_wrap">

		<div class="review_wrap">
			<div class="flex">

            <!-- 口コミのステータスの数だけ表示される-->
            <?php if(!empty($printArray['Girl'])){ ?>
            <?php foreach($printArray['Girl'] AS $key => $value){ ?>
				<div class="review_col">

					<div class="flex inner_01">
						<dl>
							<dt><?php echo $value['Girl']['name'] ?>（<?php echo $value['Girl']['age'] ?>）</dt>
							<dd>T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></dd>
						</dl>
						<div class="count">口コミ<span><?php echo $value[0]['num']; ?></span>件</div>
					</div>

					<div class="flex inner_02">
						<div class="blk01">
                            <?php if(!empty($value['Image']['image'][0][1]['file'])){ ?>
                                <div class="pic">
                                    <a href="/profile/<?php echo $value['Girl']['id']; ?>"><img src="/userImgShop/Image/<?php echo $value['Image']['image'][0][1]['imgId']; ?>/<?php echo $value['Image']['image'][0][1]['imgId']; ?>.jpg"></a>
                                </div>
                            <?php } ?>
                                <p class="status status_0<?php if(!empty($value['ScheduleStatus']['time'])){ echo '2'; }else{ echo '1'; } ?>">
                                <span><?php echo $value['ScheduleStatus']['status']; ?></span>
                                <?php if(!empty($value['ScheduleStatus']['time'])){ ?><span><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
							</p>
							<div class="btn_profile"><a href="/profile/<?php echo $value['Girl']['id']; ?>">女の子詳細を見る</a></div>
						</div>
						<div class="blk02 fox_scroll">

						<?php foreach($value['Review'] AS $key2 => $value2){ ?>
							<div class="review_col">
                                <h4><?php echo $value2['name'] ?>さん</h4>
                                <div class="review-rate">満足度：
                                <span class="review-star">
                                <?php for($i=0;$i<$value2['point'];$i++){ ?>
                                    <img src="/assets/img/common/review_star.png" alt="<?php echo $i; ?>">
                                <?php } ?>
                                </span></div>
                                <p class="review-text"><?php echo nl2br($value2['comment']); ?></p>
							</div>
                        <?php } ?>

						</div>
					</div>
				</div>
                <?php } ?>
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
