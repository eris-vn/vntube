<div class="rbt-banner-area rbt-banner-1 variation-2 height-750" style="padding-top: 0px;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8">
                <div class="content">
                    <div class="inner">
                        <div class="rbt-new-badge rbt-new-badge-one">
                            <span class="rbt-new-badge-icon">🏆</span> Tự hào dẫn đầu nền tảng học trực tiếp
                        </div>
                        <h1 class="title">The Largest <span class="color-primary">Online Learning</span> Platform
                            for Drive Your Career.</h1>
                        <p class="description">This template includes all the necessary pages of the onlineLorem.
                            And you can be build a <strong>education template easily</strong>.
                        </p>
                        <div class="slider-btn">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View Course</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="content">
                    <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active swiper-cards swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" style="cursor: grab;" id="swiper-wrapper-56ee7dfb2adda776" aria-live="polite">
                            <!-- Start Single Card  -->

                            <?php foreach ($courses as $course) : ?>

                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 390px; z-index: 3; transform: translate3d(0px, 0px, 0px) rotateZ(0deg) scale(1);" role="group" aria-label="1 / 3">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="<?= $course['thumbnails'] ?>" alt="Card image">
                                                <!-- <div class="rbt-badge-3 bg-white">
                                                    <span>-40%</span>
                                                    <span>Off</span>
                                                </div> -->
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>
                                            <h4 class="rbt-card-title"><a href="course-details.html"><?= $course['name'] ?></a>
                                            </h4>
                                            <p class="rbt-card-text">It is a long established fact that a reader
                                                will be distracted.</p>
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="rating-count"> (15 Reviews)</span>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$70</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide-shadow" style="opacity: 0;"></div>
                                </div>
                                <!-- End Single Card  -->

                            <?php endforeach; ?>

                        </div>
                        <div class="rbt-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="rbt-counterup-area bg-color-extra2 rbt-section-gapBottom default-callto-action-overlap">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-primary-opacity">Why Choose Us</span>
                    <h2 class="title">Creating A Community Of <br> Life Long Learners.</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 hanger-line">
            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="/public/assets/images/icons/counter-01.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="500">00</span>
                            </h3>
                            <span class="subtitle">Learners &amp; counting</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="/public/assets/images/icons/counter-02.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="800">00</span>
                            </h3>
                            <span class="subtitle">Courses &amp; Video</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="/public/assets/images/icons/counter-03.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                            </h3>
                            <span class="subtitle">Certified Students</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="/public/assets/images/icons/counter-04.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="100">00</span>
                            </h3>
                            <span class="subtitle">Registered Enrolls</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->
        </div>
    </div>
</div>
<div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--10">
                        <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                        <h2 class="title">People like histudy education. <br> No joking - here’s the proof!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-animation-wrapper no-overlay mt--50">
        <div class="scroll-animation scroll-right-left">

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/facebook.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-01.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Martha Maldonado, <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/google.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-02.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Michael D., <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/yelp.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-03.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Valerie J., <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/facebook.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-04.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Hannah R., <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->
            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/bing.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-05.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Pearl B. Hill, <span>Marketing</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/facebook.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-01.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mandy F. Wood, <span>SR Designer</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/hubs.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-07.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mildred W. Diaz, <span>Executive</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/bing.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-08.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Christopher, <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-odd">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/yelp.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-06.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Fatima, <span>Child</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->
        </div>
    </div>

    <div class="scroll-animation-wrapper no-overlay mt--30">
        <div class="scroll-animation scroll-left-right">

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/facebook.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-01.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Martha Maldonado, <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/google.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-02.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Michael D., <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/yelp.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-03.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Valerie J., <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/bing.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-04.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Hannah R., <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->
            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/hubs.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-05.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Pearl B. Hill, <span>Marketing</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/yelp.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-01.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mandy F. Wood, <span>SR Designer</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/bing.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-07.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mildred W. Diaz, <span>Executive</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/facebook.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-08.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Christopher, <span>CEO</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="single-column-20 bg-theme-gradient-even">
                <div class="rbt-testimonial-box style-2">
                    <div class="inner">
                        <div class="icons">
                            <img src="/public/assets/images/icons/yelp.png" alt="Clint Images">
                        </div>
                        <div class="description">
                            <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/public/assets/images/testimonial/client-06.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Fatima, <span>Child</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->
        </div>
    </div>
</div>
<div class="rbt-team-area bg-color-white rbt-section-gap">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-primary-opacity">Our Teacher</span>
                    <h2 class="title">Whose Inspirations You</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">

            <div class="col-lg-7">
                <!-- Start Tab Content  -->
                <div class="rbt-team-tab-content tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="team-tab1" role="tabpanel" aria-labelledby="team-tab1-tab">
                        <div class="inner">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-01.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                            <div class="rbt-team-details">
                                <div class="author-info">
                                    <h4 class="title">Mames Mary</h4>
                                    <span class="designation theme-gradient">English Teacher</span>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                                <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                <ul class="social-icon social-default mt--20 justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="rbt-information-list mt--25">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="team-tab2" role="tabpanel" aria-labelledby="team-tab2-tab">
                        <div class="inner">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-02.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                            <div class="rbt-team-details">
                                <div class="author-info">
                                    <h4 class="title">Robert Song</h4>
                                    <span class="designation theme-gradient">Math Teacher</span>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                                <p>Education The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                <ul class="social-icon social-default mt--20 justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="rbt-information-list mt--25">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="team-tab3" role="tabpanel" aria-labelledby="team-tab3-tab">
                        <div class="inner">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-03.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                            <div class="rbt-team-details">
                                <div class="author-info">
                                    <h4 class="title">William Susan</h4>
                                    <span class="designation theme-gradient">React Teacher</span>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                                <p>React The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                <ul class="social-icon social-default mt--20 justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="rbt-information-list mt--25">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="team-tab4" role="tabpanel" aria-labelledby="team-tab4-tab">
                        <div class="inner">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-04.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                            <div class="rbt-team-details">
                                <div class="author-info">
                                    <h4 class="title">Soseph Sara</h4>
                                    <span class="designation theme-gradient">Web Teacher</span>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                                <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                <ul class="social-icon social-default mt--20 justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="rbt-information-list mt--25">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="team-tab5" role="tabpanel" aria-labelledby="team-tab5-tab">
                        <div class="inner">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-05.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                            <div class="rbt-team-details">
                                <div class="author-info">
                                    <h4 class="title">Thomas Dal</h4>
                                    <span class="designation theme-gradient">Graphic Teacher</span>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                                <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                <ul class="social-icon social-default mt--20 justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="rbt-information-list mt--25">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="team-tab6" role="tabpanel" aria-labelledby="team-tab6-tab">
                        <div class="inner">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-06.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                            <div class="rbt-team-details">
                                <div class="author-info">
                                    <h4 class="title">Christopher Lisa</h4>
                                    <span class="designation theme-gradient">English Teacher</span>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                                <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                <ul class="social-icon social-default mt--20 justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="rbt-information-list mt--25">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="top-circle-shape"></div>
                </div>
                <!-- End Tab Content  -->
            </div>

            <div class="col-lg-5">
                <!-- Start Tab Nav  -->
                <ul class="rbt-team-tab-thumb nav nav-tabs" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="team-tab1-tab" data-bs-toggle="tab" data-bs-target="#team-tab1" role="tab" aria-controls="team-tab1" aria-selected="true">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-01.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="team-tab2-tab" data-bs-toggle="tab" data-bs-target="#team-tab2" role="tab" aria-controls="team-tab2" aria-selected="false">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-02.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="team-tab3-tab" data-bs-toggle="tab" data-bs-target="#team-tab3" role="tab" aria-controls="team-tab3" aria-selected="false">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-03.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a id="team-tab4-tab" data-bs-toggle="tab" data-bs-target="#team-tab4" role="tab" aria-controls="team-tab4" aria-selected="false">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-04.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="team-tab5-tab" data-bs-toggle="tab" data-bs-target="#team-tab5" role="tab" aria-controls="team-tab5" aria-selected="false">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-05.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="team-tab6-tab" data-bs-toggle="tab" data-bs-target="#team-tab6" role="tab" aria-controls="team-tab6" aria-selected="false">
                            <div class="rbt-team-thumbnail">
                                <div class="thumb">
                                    <img src="/public/assets/images/team/team-06.jpg" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
                <!-- End Tab Content  -->
            </div>
        </div>
    </div>
</div>
<div class="rbt-course-area bg-color-white rbt-section-gap">
    <div class="container">
        <div class="row mb--55 g-5 align-items-end">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title text-start">
                    <span class="subtitle bg-pink-opacity">Top Popular Course</span>
                    <h2 class="title">Most Popular <span class="color-primary">Courses</span></h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="load-more-btn text-start text-md-end">
                    <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="course.html">
                        <span data-text="View All Course">View All Course</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Start Card Area -->
        <div class="row g-5">
            <!-- Start Single Course  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="/public/assets/images/course/classic-lms-01.jpg" alt="Card image">
                            <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div>
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count"> (15 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>

                        <h4 class="rbt-card-title"><a href="course-details.html">React Front To Back</a>
                        </h4>

                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>12 Lessons</li>
                            <li><i class="feather-users"></i>50 Students</li>
                        </ul>

                        <p class="rbt-card-text">It is a long established fact that a reader will be
                            distracted.</p>
                        <div class="rbt-author-meta mb--10">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="/public/assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                By <a href="profile.html">Angela</a> In <a href="#">Development</a>
                            </div>
                        </div>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">$60</span>
                                <span class="off-price">$120</span>
                            </div>
                            <a class="rbt-btn-link" href="course-details.html">Learn
                                More<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->

            <!-- Start Single Course  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="/public/assets/images/course/classic-lms-02.jpg" alt="Card image">
                            <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div>
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count"> (15 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner Advanced</a>
                        </h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>12 Lessons</li>
                            <li><i class="feather-users"></i>50 Students</li>
                        </ul>

                        <p class="rbt-card-text">It is a long established fact that a reader will be
                            distracted.</p>
                        <div class="rbt-author-meta mb--10">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="/public/assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                By <a href="profile.html">Angela</a> In <a href="#">Development</a>
                            </div>
                        </div>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">$60</span>
                                <span class="off-price">$120</span>
                            </div>
                            <a class="rbt-btn-link left-icon" href="course-details.html"><i class="feather-shopping-cart"></i> Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->

            <!-- Start Single Course  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="/public/assets/images/course/classic-lms-03.jpg" alt="Card image">
                            <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div>
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count"> (5 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to Mastery</a>
                        </h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>8 Lessons</li>
                            <li><i class="feather-users"></i>30 Students</li>
                        </ul>
                        <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by
                            the readable.</p>

                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="/public/assets/images/client/avatar-03.png" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                By <a href="profile.html">Slaughter</a> In <a href="#">Languages</a>
                            </div>
                        </div>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">$80</span>
                                <span class="off-price">$100</span>
                            </div>
                            <a class="rbt-btn-link" href="course-details.html">Learn
                                More<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="/public/assets/images/course/classic-lms-04.jpg" alt="Card image">
                            <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div>
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count"> (15 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>

                        <h4 class="rbt-card-title"><a href="course-details.html">Web Front To Back</a>
                        </h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>20 Lessons</li>
                            <li><i class="feather-users"></i>40 Students</li>
                        </ul>
                        <p class="rbt-card-text">Web Js long fact that a reader will be distracted by
                            the readable.</p>
                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="/public/assets/images/client/avater-01.png" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                By <a href="profile.html">Patrick</a> In <a href="#">Languages</a>
                            </div>
                        </div>

                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">$60</span>
                                <span class="off-price">$120</span>
                            </div>
                            <a class="rbt-btn-link" href="course-details.html">Learn
                                More<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="/public/assets/images/course/classic-lms-05.jpg" alt="Card image">
                            <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div>
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count"> (15 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="course-details.html">SQL Beginner Advanced</a>
                        </h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>12 Lessons</li>
                            <li><i class="feather-users"></i>50 Students</li>
                        </ul>
                        <p class="rbt-card-text">It is a long established fact that a reader will be
                            distracted
                            by the readable.</p>
                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="/public/assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                By <a href="profile.html">Angela</a> In <a href="#">Development</a>
                            </div>
                        </div>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">$60</span>
                                <span class="off-price">$120</span>
                            </div>
                            <a class="rbt-btn-link left-icon" href="course-details.html"><i class="feather-shopping-cart"></i> Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="/public/assets/images/course/classic-lms-06.jpg" alt="Card image">
                            <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div>
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count"> (5 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="course-details.html">JS Zero to Mastery</a>
                        </h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>8 Lessons</li>
                            <li><i class="feather-users"></i>30 Students</li>
                        </ul>
                        <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by
                            the readable.</p>

                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="/public/assets/images/client/avatar-03.png" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                By <a href="profile.html">Slaughter</a> In <a href="#">Languages</a>
                            </div>
                        </div>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">$80</span>
                                <span class="off-price">$100</span>
                            </div>
                            <a class="rbt-btn-link" href="course-details.html">Learn
                                More<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->
        </div>
        <!-- End Card Area -->
    </div>
</div>