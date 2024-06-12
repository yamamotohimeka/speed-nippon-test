<section class="access">
    <ol class="bread">
        <li><a href="<?php echo GROUP_URL; ?>">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">トップ</a></li>
        <span>›</span>
        <li class="bread-current">アクセス</li>
    </ol>
    <h2 class="section-title">アクセス</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>

    <div class="access-description">
        <dl class="inner">
            <dt class="transportation">◆車でお越しの方</dt>
            <dd class="location">堺筋・千日前通日本橋1丁目交差点付近よりお電話下さい。</dd>
            <dt class="transportation">◆電車でお越しの方</dt>
            <dd class="location">地下鉄：千日前線・堺筋線日本橋駅下車6番出口よりお電話下さい。</dd>
        </dl>
    </div>
    <div class="access-map">
        <a href="https://goo.gl/maps/kJW2zZdhwuqSbdcaA" target="_blank" rel="noopener"><img
                    src="/assets/sp/img/access/nippon/access-map.png" alt="マップ画像" class="access-map-image"></a>
    </div>
    <div class="access-address" style=" padding: 0 20rem; margin: -24rem 0 24rem 0;">〒542-0073
        大阪府大阪市中央区日本橋1丁目8-16　JCSビル2F
    </div>
    <div class="access-guide">
        <h3 class="access-guide-title">各線日本橋駅6番出口より</h3>
        <div class="access-guide-video">
            <iframe src="https://www.youtube.com/embed/tXp2fh7-E5M" frameborder="0" allowfullscreen></iframe>
        </div>
        <h3 class="access-guide-title">道頓堀方面から</h3>
        <div class="access-guide-video">
            <iframe src="https://www.youtube.com/embed/8AneXzXuaQo" frameborder="0" allowfullscreen></iframe>
        </div>
        <h3 class="access-guide-title">各線日本橋駅6番出口より</h3>
        <div class="access-guide-slider swiper-container">
            <div class="swiper-wrapper">
                <img src="/assets/sp/img/access/nippon/guide1-1.jpg" alt="日本橋6番出口から1" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide1-2.jpg" alt="日本橋6番出口から2" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide1-3.jpg" alt="日本橋6番出口から3" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide1-4.jpg" alt="日本橋6番出口から4" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide1-5.jpg" alt="日本橋6番出口から5" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide1-6.jpg" alt="日本橋6番出口から6" class="swiper-slide">
            </div>
            <div class="swiper-dots"></div>
        </div>
        <h3 class="access-guide-title">道頓堀方面から</h3>
        <div class="access-guide-slider swiper-container">
            <div class="swiper-wrapper">
                <img src="/assets/sp/img/access/nippon/guide2-1.jpg" alt="道頓堀方面から1" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide2-2.jpg" alt="道頓堀方面から2" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide2-3.jpg" alt="道頓堀方面から3" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide2-4.jpg" alt="道頓堀方面から4" class="swiper-slide">
                <img src="/assets/sp/img/access/nippon/guide2-5.jpg" alt="道頓堀方面から5" class="swiper-slide">
            </div>
            <div class="swiper-dots"></div>
        </div>
    </div>
</section>

<script>
    const routeguide = new Swiper('.access-guide-slider', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-dots',
            clickable: true,
        }
    });
</script>