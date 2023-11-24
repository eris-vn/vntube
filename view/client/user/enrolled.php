<div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">

        <div class="section-title">
            <h4 class="rbt-title-style-3">Khoá học đã đăng ký</h4>
        </div>

        <div class="row g-5">

            <?php if ($enrolled['data']) : ?>
                <?php foreach ($enrolled['data'] as $history) : ?>
                    <?php $course = (new Course)->where('id', '=', $history['course_id'])->first(); ?>
                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="/course/<?= $course['slug'] ?>/lesson">
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
                                <h4 class="rbt-card-title"><a href="/course/<?= $course['slug'] ?>/lesson"><?= $course['name'] ?></a>
                                </h4>
                                <ul class="rbt-meta">
                                    <?php $total_lesson = (new Lesson)->where('course_id', '=', $course['id'])->count(); ?>
                                    <li><i class="feather-book"></i><?= $total_lesson ?> bài học </li>
                                    <li><i class="feather-users"></i><?= (new Enrollment)->where('course_id', '=', $course['id'])->count() ?> học viên</li>
                                </ul>

                                <div class="rbt-progress-style-1 mb--20 mt--10">
                                    <div class="single-progress">
                                        <h6 class="rbt-title-style-2 mb--10">Tiến độ</h6>
                                        <div class="progress">
                                            <?php
                                            $leart = (new UserLesson)->where('course_id', '=', $course['id'])->where('user_id', '=', $user['id'])->where('completed', '=', 1)->count();

                                            $percent = floor(($leart / $total_lesson) * 100);
                                            ?>
                                            <div class="progress-bar wow fadeInLeft bar-color-success" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: <?= $percent ?>%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                            <span class="rbt-title-style-2 progress-number"><?= $percent ?>%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <?php
                                    $lesson_id_redirect = 0;

                                    if ($percent == 100) {
                                        $first_lesson = (new Lesson)->where('course_id', '=', $course['id'])->first();
                                        if ($first_lesson) {
                                            $lesson_id_redirect = $first_lesson['id'];
                                        }
                                    } else {
                                        $have_learn = (new UserLesson)->where('course_id', '=', $course['id'])->where('user_id', '=', $user['id'])->where('completed', '=', 1)->select(['lesson_id'])->getArray();
                                        if (count($have_learn)) {
                                            $lesson_not_finish = (new Lesson)->where('course_id', '=', $course['id'])->whereNotIn('id', array_column($have_learn, 'lesson_id'))->first();

                                            if ($lesson_not_finish) {
                                                $lesson_id_redirect = $lesson_not_finish['id'];
                                            }
                                        } else {
                                            $first_lesson = (new Lesson)->where('course_id', '=', $course['id'])->first();
                                            if ($first_lesson) {
                                                $lesson_id_redirect = $first_lesson['id'];
                                            }
                                        }
                                    }

                                    ?>
                                    <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center" href="/course/<?= $course['slug'] ?>/lesson?id=<?= $lesson_id_redirect ?>">HỌC KHOÁ HỌC</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->

                <?php endforeach; ?>
                <?= (new Model)->renderHtml($enrolled) ?>
            <?php else : ?>
                <div>Chưa có khoá học nào.</div>
            <?php endif; ?>

        </div>

    </div>
</div>