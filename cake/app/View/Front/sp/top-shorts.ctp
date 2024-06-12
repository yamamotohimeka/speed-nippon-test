<?php if (!empty($printArray['Linebots'])) { ?>
    <section class="top-short shop">
        <h2 class="top-short-title">ショート動画</h2>
        <ul class="top-short-list">
            <?php foreach ($printArray['Linebots'] as $key => $value) { ?>
                <li class="top-short-link">

                    <?php if (!empty($value['Girl']['Image']['image'][0][1]['file'])) { ?>
                    <div class="girl-image-wrap">
                        <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w240.jpg?<?php echo date('YmdHis'); ?>"
                             class="girl-image" alt="">
                    </div>
                    <a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>">
                        <div class="top-short-meta">
                            <div class="top-short-icon">
                                <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w151.jpg"
                                     class="top-short-iconimage">
                            </div>
                            <?php } ?>
                            <div class="top-short-desc">
                    <span class="top-short-name">
                        <?php echo $value['Girl']['Girl']['name']; ?>
                        <span class="age">(<?php echo $value['Girl']['Girl']['age']; ?>)</span>
                    </span>
                                <span class="sizes">
                                T<?php echo $value['Girl']['Girl']['height']; ?> B<?php echo $value['Girl']['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['Girl']['size_w']; ?> H<?php echo $value['Girl']['Girl']['size_h']; ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </section>

    <div class="top-short-modal" id="modalShort">
        <div class="swiper-container short-swiper">
            <div class="swiper-wrapper">

                <?php foreach ($printArray['Linebots'] as $key => $value) { ?>
                    <div class="swiper-slide">
                        <header class="top-short-info">
                            <?php if (!empty($value['Girl']['Image']['image'][0][1]['file'])) { ?>
                                <div class="icon"><a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>"><img
                                                src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w151.jpg"></a>
                                </div>
                            <?php } ?>
                            <h3 class="name"><a
                                        href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>"><?php echo $value['Girl']['Girl']['name']; ?></a>
                            </h3>
                            <div class="top-short-attendance">
                                <span class="top-short-attendance-status"><?php echo $value['Girl']['ScheduleStatus']['status']; ?></span>
                                <?php if (!empty($value['Girl']['ScheduleStatus']['time'])) { ?>
                                    <time class="top-short-attendance-time"><?php echo $value['Girl']['ScheduleStatus']['time']; ?></time><?php } ?>
                            </div>
                            <a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>#personal-story"
                               class="short-text">
                                <?php echo $value['Linebots']['text']; ?>
                            </a>
                        </header>
                        <div class="short-close">閉じる</div>
                        <figure class="image-wrap">
                            <?php echo str_replace('controls', '', $value['Linebots']['file']['tag']); ?>
                        </figure>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        // TOPPAGE short MODAL WINDOW
        const modal = document.getElementById('modalShort'),
            links = document.getElementsByClassName('top-short-link'),
            close = document.getElementsByClassName('short-close');
        sound = document.getElementsByClassName('short-sound');

        let short = new Swiper('.short-swiper', {
            direction: 'vertical',
            resistance: true,
            resistanceRatio: 0,
            autoplay: {
                delay: 10000,
                stopOnLastSlide: true,
                disableOnInteraction: false,
            },
            loop: false,
        });

        short.autoplay.stop();

        var currentMovie = $(".swiper-slide-active video");
        var storyMovie = $(".swiper-slide video");

        for (let i = 0; i < links.length; i++) {
            links[i].addEventListener('click', () => {
                modal.classList.add('active');
                currentMovie.prop('muted', false);
                short.update();
                short.slideTo(i, 0);
                short.autoplay.start();
                document.addEventListener('touchmove', handleTouchmove, {
                    passive: false
                });
            });
        }

        $(".image-wrap video").parent('figure').addClass('add-sound');
        $('.add-sound').before('<div class="short-sound">サウンド</div>');
        for (let i = 0; i < sound.length; i++) {
            sound[i].addEventListener('click', () => {
                var video = $("video").get(i);
                if (video.muted) {
                    video.muted = false;
                    $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-on.png) no-repeat center/72rem auto');
                } else {
                    video.muted = true;
                    $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                }
                short.on("slideNextTransitionStart", () => {
                    if (video.muted) {
                    } else {
                        video.muted = true;
                        $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                    }
                    video.currentTime = 0;
                });
                short.on("slidePrevTransitionStart", () => {
                    if (video.muted) {
                    } else {
                        video.muted = true;
                        $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                    }
                    video.currentTime = 0;
                });
                $(close).on("click", function () {
                    if (video.muted) {
                    } else {
                        video.muted = true;
                        $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                    }
                    video = 0;
                });
                window.addEventListener('touchmove', () => {
                    if (short.isEnd && short.touches.diff < -96) {
                        if (video.muted) {
                        } else {
                            video.muted = true;
                            $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                        }
                        video = 0;
                    }
                });
            });
        }

        short.on('slideChange', () => {
            window.addEventListener('touchmove', () => {
                if (short.isEnd && short.touches.diff < -96) {
                    modalClose();
                    document.removeEventListener('touchmove', handleTouchmove, {
                        passive: false
                    });
                }
            });
        });

        for (let i = 0; i < close.length; i++) {
            close[i].addEventListener('click', () => {
                modalClose(i);
                document.removeEventListener('touchmove', handleTouchmove, {
                    passive: false
                });
            });
        }

        function modalClose(index) {
            modal.classList.remove('active');
            short.autoplay.stop();
        }

        function handleTouchmove(e) {
            e.preventDefault();
        }
    </script>
<?php } ?>