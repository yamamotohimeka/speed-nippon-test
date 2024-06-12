<link rel="stylesheet" href="/assets/css/recruit.css" />

<section class="page page_recruit">

	<div class="page_ttl">
		<h2>面接情報<span>RECRUIT</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="<?php echo GROUP_URL; ?>">グループトップ</a><span>›</span>
		</li>
		<li>
			<a href="/"><?php echo SHOP_NAME; ?></a><span>›</span>
		</li>
		<li>
			面接情報
		</li>
	</ol>

	<div class="page_wrap">

<?php if(!empty($printArray['Interview'])){ ?>
<?php foreach($printArray['Interview'] AS $key => $value){ ?>
		<div class="recruit_wrap">

			<div class="recruit_col">

				<div class="article">
                <?php if(!empty($value['Interview']['title'])){ ?>
                    <h3><?php echo $value['Interview']['title']; ?></h3>
				<?php } ?>
                <?php echo $value['Interview']['comment']; ?>
				</div>

			</div>

		</div>
<?php } ?>
<?php } ?>
    </div>
</section>
