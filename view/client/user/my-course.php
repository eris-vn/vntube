<div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">

        <div class="section-title">
            <h4 class="rbt-title-style-3">Khoá học của tôi
            </h4>
        </div>

        <div class="advance-tab-button mb--30">
            <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                <li role="presentation">
                    <a href="#" class="tab-button active" id="publish-tab-4" data-bs-toggle="tab" data-bs-target="#publish-4" role="tab" aria-controls="publish-4" aria-selected="true">
                        <span class="title">Công khai</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="publish-4" role="tabpanel" aria-labelledby="publish-tab-4">
                <div class="row g-5">
                    <?php if ($courses['data']) : ?>
                        <?php foreach ($courses['data'] as $course) : ?>

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="/course/<?= $course['slug'] ?>/details">
                                            <img src="<?= $course['thumbnails'] ?>" alt="Card image">
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
                                            <li><i class="feather-book"></i><?= (new Lesson)->where('course_id', '=', $course['id'])->count() ?> bài học</li>
                                            <li><i class="feather-users"></i><?= (new Enrollment)->where('course_id', '=', $course['id'])->count() ?> học viên</li>
                                        </ul>

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
                                            <a class="rbt-btn-link left-icon" href="/user/course/edit/<?= $course['id'] ?>"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->
                        <?php endforeach; ?>

                        <?= (new Model)->renderHtml($courses) ?>
                    <?php else : ?>
                        <div class="col-lg-12">
                            Không tìm thấy khoá học nào
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>

    </div>
</div>