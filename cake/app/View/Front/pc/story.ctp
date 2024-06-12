<link rel="stylesheet" href="/assets/css/story.css" />

<section class="page page_story">

	<div class="page_ttl">
		<h2>最新のストーリーズ / Stories<span>STORIES</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
		</li>
		<li>
			<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
		</li>
		<li>
			ストーリーズ
		</li>
	</ol>

<!--  ストーリーを追加順に表示される処理-->
<?php if(!empty($printArray['Linebots'])){ ?>
<?php foreach($printArray['Linebots'] AS $key => $value){ ?>
	<div class="story story_wrap">

		<div class="story_col">
			<div class="flex icon_col">
			<?php if(!empty($value['Girl']['Image']['image'][0][1]['file'])){ ?>
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
				    <?php if(!empty($value['Girl']['ScheduleStatus']['time'])){ ?><span><?php echo $value['Girl']['ScheduleStatus']['time']; ?></span><?php } ?>
			    </p>
			    <p><a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>"><?php echo $value['Girl']['Girl']['name']; ?></a></p>
			</div>
			</div>
			<div class="content flex">
				<div class="pic">
					<?php echo $value['Linebots']['file']['tag']; ?>
					<p class="date">
                        <?php
                            $dateTimeArray = explode(" ", $value['Linebots']['dateTime']);
                            $dateTimeDayArray = explode("-", $dateTimeArray[0]);
                            $dateTimeTimeArray = explode(":", $dateTimeArray[1]);
                        ?>
				        <?php echo $dateTimeDayArray[0]; ?>年<?php echo $dateTimeDayArray[1]; ?>月<?php echo $dateTimeDayArray[2]; ?>日 <?php echo $dateTimeTimeArray[0]; ?>:<?php echo $dateTimeTimeArray[1]; ?>
                    </p>
				</div>
				<div><?php echo nl2br($value['Linebots']['text']); ?></div>
			</div>
		</div>
	</div>
<?php } ?>
<?php } ?>

			<?php if(!empty($Paging)){ ?>
			<div class="pager">
				<ol class="review-page-nav">
			    <?php echo $Paging; ?>
				</ol>
			</div>
            <?php } ?>

</section>
