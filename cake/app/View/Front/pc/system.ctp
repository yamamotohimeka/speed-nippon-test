<link rel="stylesheet" href="/assets/css/system.css" />

<div class="page page_system">

	<section class="system_wrap">

		<div class="page_ttl">
			<h2>システム料金<span>SYSTEM</span></h2>
		</div>

		<ol class="flex bread">
			<li>
				<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
			</li>
			<li>
				<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
			</li>
			<li>
				システム料金
			</li>
		</ol>

		<div class="system_col">
            <div class="wrap_01">
                <h3>システム料金</h3>
                <div class="flex">
                <div class="blk01">
                    <dl>
                        <div class="flex">
                            <dt>WEB会員（マイページ）
                                <span>
                                    <p>無料登録は<a href="https://mypage.speed-speed.com/" target="_blank">コチラ</a>から</p>
                                </span>
                            </dt>
                            <dd>無料</dd>
                        </div>
                        <div class="flex">
                            <dt>会員カード発行料</dt>
                            <dd>1.000yen</dd>
                        </div>
                        <div class="flex">
                            <dt>再発行料</dt>
                            <dd>1.000yen</dd>
                        </div>
                        <div class="flex">
                            <dt>パネル指名料</dt>
                            <dd>1,000yen</dd>
                        </div>
                        <div class="flex">
                            <dt>再来店本指名料<br>
                                <span>※パネル指名料込み</span></dt>
                            <dd>2,000yen</dd>
                        </div>
                        <div class="flex">
                            <dt>本指名料</dt>
                            <dd>2,000yen</dd>
                        </div>
                        <div class="flex">
                            <dt>HP指名料</dt>
                            <dd>2,000yen</dd>
                        </div>
                        <div class="flex">
                            <dt>延長10min</dt>
                            <dd>3,000yen</dd>
                        </div>
                    </dl>
                    <div class="card"><img src="/assets/img/system/common/card.png" alt=""></div>
                </div>
				<div class="blk02">


					<?php if (!empty($printArray['Cosplay'])) { ?>
						<div class="swiper-container swiper_system">
							<div class="swiper-wrapper">
								<?php foreach ($printArray['Cosplay'] as $key => $value) { ?>
									<?php if (!empty($value['Image'][0]['file']) and $value['Image'][0]['model'] == 0) { ?>
										<div class="swiper-slide"><img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg" alt="<?php echo $value['Cosplay']['name']; ?>"></div>
									<?php } ?>
								<?php } ?>
							</div>
							<!-- <div class="swiper-pagination"></div> -->
							<div class="system-btn-flex">
								<!-- 前ページボタン -->
								<div class="swiper-system-prev">
									<img src="/assets/img/system/common/arrow-left.png" alt="" class="system-prev">
								</div>
                                <dl class="flex">
                                    <dt>コスプレ</dt>
                                    <dd>ALL 1,000yen</dd>
                                </dl>
								<!-- 次ページボタン -->
								<div class="swiper-system-next">
									<img src="/assets/img/system/common/arrow-right.png" alt="" class="system-next">
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>

		</div>
        </div>
		<div class="system_col">
			<div class="flex-column wrap_02">
				<div class="blk01">

					<div class="price_02">
                        <table>
                            <thead>
                            <tr>
                                <th colspan="2"><h3>通常料金/Usually Price</h3></th>
                            </tr>
                            <tr>
                                <th colspan="2">ホテル代込み</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>40min</td>
                                <td>13,000yen</td>
                            </tr>
                            <tr>
                                <td>50min</td>
                                <td>14,500yen</td>
                            </tr>
                            <tr>
                                <td>60min</td>
                                <td>16,000yen</td>
                            </tr>
                            <tr>
                                <td>70min</td>
                                <td>17,500yen</td>
                            </tr>
                            <tr>
                                <td>75min</td>
                                <td>18,000yen</td>
                            </tr>
                            <tr>
                                <td>80min</td>
                                <td>20,000yen</td>
                            </tr>
                            <tr>
                                <td>90min</td>
                                <td>22,000yen</td>
                            </tr>
                            <tr>
                                <td>100min</td>
                                <td>26,000yen</td>
                            </tr>
                            <tr>
                                <td>120min</td>
                                <td>31,000yen</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

					</div>

				<?php if (!empty($printArray['Option'])) { ?>
					<div class="blk02">
						<ul class="flex">
							<?php foreach ($printArray['Option'] as $key => $value) { ?>
								<li>
									<h3><?php echo $value['Option']['name']; ?></h3>
									<?php if (!empty($value['Image'][0]['file']) and $value['Image'][0]['model'] == 0) { ?>
										<div class="pic"><img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg" alt=""></div>
									<?php } ?>
									<div class="txt"><?php echo $value['Option']['fare']; ?>yen</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>

			</div>
		</div>


	</section>
</div>