<?php if (!empty($printArray['Linebots'])) { ?>
    <section class="top-short shop">
        <h2 class="top-short-title">ショート動画</h2>
        <ul class="top-short-list">
            <?php foreach ($printArray['Linebots'] as $key => $value) { ?>
                <li class="top-short-link">
                    <?php if (!empty($value['Girl']['Image']['image'][0][1]['file'])) { ?>
                    <div class="top-short-link">
                        <div class="girl-image-wrap">
                            <video id="video-thumbnail-<?php echo $key; ?>" class="video-thumbnail" preload="metadata"
                                   playsinline muted>
                                <source src="https://dl.dropboxusercontent.com/s/d6odybnhp8o28i3/2d6e7c85-7359-4c1c-9119-f55aa1ddf577.mp4"
                                        type="video/mp4">
                            </video>
                        </div>
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
                        <div class="short-close">閉じる</div>
                        <div class="slide-wrap">
                            <figure class="movie-wrap">
                                <video id="modal-video-<?php echo $key; ?>" class="modal-video" preload="metadata"
                                       playsinline muted>
                                    <source src="https://dl.dropboxusercontent.com/s/d6odybnhp8o28i3/2d6e7c85-7359-4c1c-9119-f55aa1ddf577.mp4"
                                            type="video/mp4">
                                </video>
                            </figure>

                            <a href="/profile/<?php echo $value['Girl']['Girl']['id']; ?>">
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
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <style>
        /* スタイルの追加 */
        .video-thumbnail, .modal-video {
            width: 100%;
            height: auto;
            display: block;
        }

        /* スマホ向けのスタイル */
        @media (max-width: 768px) {
            .top-short-title {
                font-size: 1.5em;
            }

            .top-short-meta {
                display: flex;
                align-items: center;
            }

            .top-short-icon {
                flex: 0 0 auto;
            }

            .top-short-desc {
                flex: 1 1 auto;
                padding-left: 10px;
            }

            .top-short-name {
                font-size: 1.2em;
            }

            .sizes {
                font-size: 0.9em;
            }

            .short-close {
                font-size: 1.2em;
            }

            .swiper-slide {
                padding: 10px;
            }
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modalWindow = document.getElementById('modalShort');
            const shortLinks = document.getElementsByClassName('top-short-link');
            const closeButtons = document.getElementsByClassName('short-close');
            let shortSwiper;

            function initializeSwiper() {
                shortSwiper = new Swiper('.short-swiper', {
                    direction: 'vertical',
                    resistance: true,
                    resistanceRatio: 0.85,
                    threshold: 10,
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: false,
                    autoplay: {
                        delay: 10000,
                        stopOnLastSlide: true,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    on: {
                        slideChange: function () {
                            playActiveSlideVideo();
                        },
                    },
                });
            }

            function playActiveSlideVideo() {
                let activeSlide = document.querySelector('.swiper-slide-active');
                let video = activeSlide.querySelector('video');
                if (video) {
                    video.play();
                }
            }

            function showModal(index) {
                modalWindow.classList.add('active');
                if (!shortSwiper) {
                    initializeSwiper();
                }
                shortSwiper.slideTo(index, 0);
                playActiveSlideVideo();
            }

            for (let i = 0; i < shortLinks.length; i++) {
                shortLinks[i].addEventListener('click', (event) => {
                    event.preventDefault();
                    showModal(i);
                    document.addEventListener('touchmove', handleTouchmove, {passive: false});
                });
            }

            for (let i = 0; i < closeButtons.length; i++) {
                closeButtons[i].addEventListener('click', () => {
                    modalClose();
                    document.removeEventListener('touchmove', handleTouchmove, {passive: false});
                });
            }

            function modalClose() {
                modalWindow.classList.remove('active');
                shortSwiper.autoplay.stop();
                let activeVideo = document.querySelector('.swiper-slide-active video');
                if (activeVideo) {
                    activeVideo.pause();
                    activeVideo.currentTime = 0;
                }
            }

            function handleTouchmove(e) {
                e.preventDefault();
            }
        });
    </script>
<?php } ?>
