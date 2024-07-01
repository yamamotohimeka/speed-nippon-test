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
                            <div class="top-short-meta">
                                <div class="top-short-icon">
                                    <img src="/userImgShop/Image/<?php echo $value['Girl']['Image']['image'][0][1]['imgId']; ?>/w151.jpg"
                                         class="top-short-iconimage">
                                </div>
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
                        </header>
                        <div class="short-close">閉じる</div>
                        <figure class="movie-wrap">
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
        const modalWindow = document.getElementById('modalShort'),
            shortLinks = document.getElementsByClassName('top-short-link'),
            closeButtons = document.getElementsByClassName('short-close'),
            soundButtons = document.getElementsByClassName('short-sound');

        const shortSwiper = new Swiper('.short-swiper', {
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

        shortSwiper.autoplay.stop();

        let currentMovieVideo = $(".swiper-slide-active video");
        let storyMovieVideo = $(".swiper-slide video");

        for (let i = 0; i < shortLinks.length; i++) {
            shortLinks[i].addEventListener('click', (event) => {
                event.preventDefault(); // デフォルトのリンク動作を防止
                console.log('Link clicked:', i);
                modalWindow.classList.add('active');
                currentMovieVideo.prop('muted', false);
                shortSwiper.update();
                shortSwiper.slideTo(i, 0);
                shortSwiper.autoplay.start();
                document.addEventListener('touchmove', handleTouchmove, {passive: false});
            });
        }

        $(".movie-wrap video").parent('figure').addClass('add-sound');
        $('.add-sound').before('<div class="short-sound">サウンド</div>');
        for (let i = 0; i < soundButtons.length; i++) {
            soundButtons[i].addEventListener('click', () => {
                let video = $("video").get(i);
                toggleMute(video);
                shortSwiper.on("slideNextTransitionStart", () => resetVideo(video));
                shortSwiper.on("slidePrevTransitionStart", () => resetVideo(video));
                $(closeButtons).on("click", () => resetVideo(video));
                window.addEventListener('touchmove', () => {
                    if (shortSwiper.isEnd && shortSwiper.touches.diff < -96) {
                        resetVideo(video);
                    }
                });
            });
        }

        shortSwiper.on('slideChange', () => {
            window.addEventListener('touchmove', () => {
                if (shortSwiper.isEnd && shortSwiper.touches.diff < -96) {
                    modalClose();
                    document.removeEventListener('touchmove', handleTouchmove, {passive: false});
                }
            });
        });

        for (let i = 0; i < closeButtons.length; i++) {
            closeButtons[i].addEventListener('click', () => {
                modalClose(i);
                document.removeEventListener('touchmove', handleTouchmove, {passive: false});
            });
        }

        function modalClose(index) {
            modalWindow.classList.remove('active');
            shortSwiper.autoplay.stop();
        }

        function handleTouchmove(e) {
            e.preventDefault();
        }

        function toggleMute(video) {
            if (video.muted) {
                video.muted = false;
                $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-on.png) no-repeat center/72rem auto');
            } else {
                video.muted = true;
                $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
            }
        }

        function resetVideo(video) {
            if (!video.muted) {
                video.muted = true;
                $('.short-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
            }
            video.currentTime = 0;
        }
    </script>


<?php } ?>