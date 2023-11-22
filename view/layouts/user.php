<?php
$user = user();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online School - Online Courses &amp; Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/public/assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="/public/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/public/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/sal.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/feather.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="/public/assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- jQuery JS -->
    <script src="/public/assets/js/vendor/jquery.js"></script>
</head>

<body class="rbt-header-sticky">

    <?php require "header.php" ?>

    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image bg_image--22 height-350"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="/public/assets/images/team/avatar.jpg" alt="Instructor">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title"><?= user()['name'] ?></h5>
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
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
                                <div class="tutor-btn">
                                    <a class="rbt-btn btn-md hover-icon-reverse" href="/user/course/create">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Tạo khoá học</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                <div class="inner">
                                    <div class="content-item-content">

                                        <div class="rbt-default-sidebar-wrapper">
                                            <div class="section-title mb--20">
                                                <h6 class="rbt-title-style-2">Chào mừng, <?= $user['name'] ?> </h6>
                                            </div>
                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="/user/dashboard" class="<?= $_SERVER['REQUEST_URI'] == "/user/dashboard" ? 'active' : '' ?>"><i class="feather-home"></i><span>Thống Kê</span></a></li>
                                                    <li><a href="instructor-profile.html"><i class="feather-user"></i><span>My Profile</span></a></li>
                                                    <li><a href="instructor-enrolled-courses.html"><i class="feather-book-open"></i><span>Enrolled Courses</span></a></li>
                                                    <li><a href="instructor-wishlist.html"><i class="feather-bookmark"></i><span>Wishlist</span></a></li>
                                                    <li><a href="instructor-reviews.html"><i class="feather-star"></i><span>Reviews</span></a></li>
                                                    <li><a href="instructor-my-quiz-attempts.html"><i class="feather-help-circle"></i><span>My Quiz Attempts</span></a></li>
                                                    <li><a href="instructor-order-history.html"><i class="feather-shopping-bag"></i><span>Order History</span></a></li>
                                                </ul>
                                            </nav>

                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">Instructor</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="/user/my-course" class="<?= $_SERVER['REQUEST_URI'] == "/user/my-course" ? 'active' : '' ?>"><i class="feather-monitor"></i><span>Khoá học của tôi</span></a></li>
                                                    <li><a href="instructor-announcements.html"><i class="feather-volume-2"></i><span>Announcements</span></a></li>
                                                    <li><a href="instructor-quiz-attempts.html"><i class="feather-message-square"></i><span>Quiz Attempts</span></a></li>
                                                    <li><a href="instructor-assignments.html"><i class="feather-list"></i><span>Assignments</span></a></li>
                                                </ul>
                                            </nav>

                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">User</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="instructor-settings.html"><i class="feather-settings"></i><span>Settings</span></a></li>
                                                    <li><a href="index.html"><i class="feather-log-out"></i><span>Logout</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-9">
                            <?php require "view/$path.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    <?php require "footer.php" ?>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="/public/assets/js/vendor/modernizr.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/public/assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="/public/assets/js/vendor/sal.js"></script>
    <script src="/public/assets/js/vendor/swiper.js"></script>
    <script src="/public/assets/js/vendor/magnify.min.js"></script>
    <script src="/public/assets/js/vendor/jquery-appear.js"></script>
    <script src="/public/assets/js/vendor/odometer.js"></script>
    <script src="/public/assets/js/vendor/backtotop.js"></script>
    <script src="/public/assets/js/vendor/isotop.js"></script>
    <script src="/public/assets/js/vendor/imageloaded.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="/public/assets/js/vendor/wow.js"></script>
    <script src="/public/assets/js/vendor/waypoint.min.js"></script>
    <script src="/public/assets/js/vendor/easypie.js"></script>
    <script src="/public/assets/js/vendor/text-type.js"></script>
    <script src="/public/assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="/public/assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="/public/assets/js/vendor/jquery-ui.js"></script>
    <script src="/public/assets/js/vendor/magnify-popup.min.js"></script>
    <script src="/public/assets/js/vendor/paralax-scroll.js"></script>
    <script src="/public/assets/js/vendor/paralax.min.js"></script>
    <script src="/public/assets/js/vendor/countdown.js"></script>
    <script src="/public/assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="/public/assets/js/main.js"></script>


</body>

</html>