<div class="rbt-banner-area rbt-banner-1 variation-2 height-750" style="padding-top: 0px;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8">
                <div class="content">
                    <div class="inner">
                        <div class="rbt-new-badge rbt-new-badge-one">
                            <span class="rbt-new-badge-icon">🏆</span> Tự hào dẫn đầu nền tảng học trực tiếp
                        </div>
                        <h1 class="title">Nền tảng <br><span class="color-primary">Học lập trình</span> Online <br> <span class="header-caption">
                                <span class="cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible theme-gradient">Lớn nhất hiện nay.</b>
                                        <b class="is-hidden theme-gradient">Cập nhật thường xuyên.</b>
                                        <b class="is-hidden theme-gradient">Hỗ trợ tận tình.</b>
                                    </span>
                                </span>
                            </span></h1>
                        <p class="description">Khám phá thế giới lập trình với nền tảng học trực tuyến của chúng tôi. Học từ chuyên gia, áp dụng kiến thức vào dự án thực tế. <br><strong>Đăng ký ngay</strong> để bắt đầu hành trình học lập trình của bạn!
                        </p>
                        <div class="slider-btn">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="/search">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">XEM KHOÁ HỌC</span>
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
                                            <a href="/course/<?= $course['slug'] ?>/details">
                                                <img src="<?= $course['thumbnails'] ?>" alt="Card image">
                                                <!-- <div class="rbt-badge-3 bg-white">
                                                    <span>-40%</span>
                                                    <span>Off</span>
                                                </div> -->
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i><?= (new Lesson)->where('course_id', '=', $course['id'])->count() ?> bài học </li>
                                                <li><i class="feather-users"></i><?= (new Enrollment)->where('course_id', '=', $course['id'])->count() ?> học viên</li>
                                            </ul>
                                            <h4 class="rbt-card-title"><a href="/course/<?= $course['slug'] ?>/details"><?= $course['name'] ?></a>
                                            </h4>
                                            <p class="rbt-card-text"><?= $course['short_description'] ?></p>
                                            <!-- <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="rating-count"> (15 Reviews)</span>
                                            </div> -->
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <?php if ($course['price'] == 0) : ?>
                                                        <span class="current-price">Miễn phí</span>
                                                    <?php else : ?>
                                                        <span class="current-price"><?= number_format($course['price']) ?>đ</span>
                                                    <?php endif; ?>
                                                    <?php if ($course['discounted_price']) : ?>
                                                        <span class="off-price"><?= number_format($course['discounted_price']) ?>đ</span>
                                                    <?php endif; ?>
                                                </div>
                                                <a class="rbt-btn-link" href="/course/<?= $course['slug'] ?>/details">Xem chi tiết<i class="feather-arrow-right"></i></a>
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
                    <span class="subtitle bg-primary-opacity">Tại sao nên chọn chúng tôi?</span>
                    <h2 class="title">Tạo nên một cộng đồng <br> học hỏi lâu dài.</h2>
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
                            <h3 class="counter"><span class="odometer" data-count="<?= $count_instructor ?>">00</span>
                            </h3>
                            <span class="subtitle">Giảng viên</span>
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
                            <h3 class="counter"><span class="odometer" data-count="<?= $count_course ?>">00</span>
                            </h3>
                            <span class="subtitle">Khoá học</span>
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
                            <h3 class="counter"><span class="odometer" data-count="<?= $count_lesson ?>">00</span>
                            </h3>
                            <span class="subtitle">Bài giảng</span>
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
                            <h3 class="counter"><span class="odometer" data-count="<?= $count_enrolled ?>">00</span>
                            </h3>
                            <span class="subtitle">Học viên</span>
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
                        <span class="subtitle bg-primary-opacity">ĐÁNH GIÁ NGƯỜI NỔI TIẾNG</span>
                        <h2 class="title">Những doanh nghiệp lớn <br> nói gì về chúng tôi?</h2>
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
                            <p class="subtitle-3">Khóa học rất thực tế và cập nhật với công nghệ mới. Nhân viên của chúng tôi đã trải qua đào tạo hiệu quả và nhanh chóng áp dụng kiến thức vào dự án.</p>
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
                            <p class="subtitle-3">Nền tảng học lập trình này không chỉ cung cấp kiến thức sâu rộng mà còn tạo ra môi trường học tập tích cực, khuyến khích sự sáng tạo.</p>
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
                            <p class="subtitle-3">Khóa học linh hoạt và phù hợp với mọi trình độ, từ người mới học đến chuyên gia. Chúng tôi đã thấy sự tăng cường kỹ năng lập trình và sự tự tin của nhân viên.</p>
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
                            <p class="subtitle-3">Bài giảng chất lượng và giáo viên nhiệt tình. Chúng tôi đánh giá cao việc hỗ trợ sau khóa học và cơ hội thực hành trên các dự án thực tế.</p>
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
                            <p class="subtitle-3">Khóa học không chỉ giúp nhân viên nâng cao kỹ năng lập trình mà còn giúp họ hiểu rõ hơn về các xu hướng công nghệ, giúp doanh nghiệp chúng tôi luôn đứng đầu trong ngành.</p>
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
                    <h2 class="title">Các <span class="color-primary">Khoá Học</span> Nổi Bật</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="load-more-btn text-start text-md-end">
                    <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="/search">
                        <span data-text="Xem tất cả">Xem tất cả</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Start Card Area -->
        <div class="row g-5">

            <?php foreach ($popular_course as $course) : ?>
                <!-- Start Single Course  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="/course/<?= $course['slug'] ?>/details">
                                <img src="<?= $course['thumbnails'] ?>" alt="Card image">
                                <!-- <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div> -->
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <!-- <div class="rbt-card-top">
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
                        </div> -->

                            <h4 class="rbt-card-title"><a href="/course/<?= $course['slug'] ?>/details"><?= $course['name'] ?></a>
                            </h4>

                            <ul class="rbt-meta">
                                <li><i class="feather-book"></i><?= (new Lesson)->where('course_id', '=', $course['id'])->count() ?> bài học </li>
                                <li><i class="feather-users"></i><?= (new Enrollment)->where('course_id', '=', $course['id'])->count() ?> học viên</li>
                            </ul>

                            <p class="rbt-card-text"><?= $course['short_description'] ?></p>
                            <div class="rbt-author-meta mb--10">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src="/public/assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    bởi <a href="#"><?= (new User)->where('id', '=', $course['user_id'])->first()['name'] ?></a>
                                </div>
                            </div>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price">
                                    <?php if ($course['price'] == 0) : ?>
                                        <span class="current-price">Miễn phí</span>
                                    <?php else : ?>
                                        <span class="current-price"><?= number_format($course['price']) ?>đ</span>
                                    <?php endif; ?>
                                    <?php if ($course['discounted_price']) : ?>
                                        <span class="off-price"><?= number_format($course['discounted_price']) ?>đ</span>
                                    <?php endif; ?>
                                </div>
                                <a class="rbt-btn-link" href="/course/<?= $course['slug'] ?>/details">Xem thêm<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            <?php endforeach; ?>
        </div>
        <!-- End Card Area -->
    </div>
</div>