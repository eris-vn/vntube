<main class="rbt-main-wrapper">

    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-8">
                    <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                        <div class="accordion" id="tutionaccordionExamplea1">

                            <div class="accordion-item card">

                                <input class="d-none" id="course_id" value="<?= $course_id ?>" type="text">

                                <h2 class="accordion-header card-header" id="accThree">
                                    <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseThree" aria-expanded="false" aria-controls="accCollapseThree">
                                        Xây dựng khoá học
                                    </button>
                                </h2>
                                <div id="accCollapseThree" class="accordion-collapse collapse show" aria-labelledby="accThree" data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <button class="rbt-btn btn-md btn-gradient hover-icon-reverse mb--20 mr--10" type="button" data-bs-toggle="modal" data-bs-target="#create_chapter">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Thêm mục</span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                            </span>
                                        </button>
                                        <button class="rbt-btn btn-md btn-gradient hover-icon-reverse mb--20" type="button" data-bs-toggle="modal" data-bs-target="#create_lesson">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Thêm bài học</span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                            </span>
                                        </button>

                                        <div class="rbt-accordion-style rbt-accordion-02 for-right-content accordion">

                                            <?php if ($chapters) : ?>
                                                <div class="accordion" id="accordionExampleb2">

                                                    <?php foreach ($chapters as $chapter) : ?>

                                                        <?php
                                                        require_once 'model/lesson.php';
                                                        $lessions = (new Lesson)->where('chapter_id', '=', $chapter['id'])->getArray();
                                                        ?>

                                                        <div class="accordion-item card">
                                                            <h2 class="accordion-header card-header" id="headingTwo1">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#<?= toSlug($chapter['name']) ?>" aria-controls="collapseTwo1">
                                                                    <?= $chapter['name'] ?> <span class="rbt-badge-5 ml--10"><?= count($lessions) ?> bài học</span>
                                                                </button>
                                                            </h2>
                                                            <div id="<?= toSlug($chapter['name']) ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo1">
                                                                <div class="accordion-body card-body">
                                                                    <ul class="rbt-course-main-content liststyle">

                                                                        <?php if ($lessions) : ?>



                                                                            <?php foreach ($lessions as $lession) : ?>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="course-content-left">
                                                                                            <i class="feather-play-circle"></i> <span class="text"><?= $lession['name'] ?></span>
                                                                                        </div>
                                                                                        <div class="course-content-right">
                                                                                            <span class="min-lable"><?= timeConvert($lession['time']) ?></span>
                                                                                            <span class="rbt-check" onclick="on_show_lesson(<?= $lession['id'] ?>)"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                            <span class="rbt-check" onclick="on_delete_lesson(<?= $lession['id'] ?>)"><i class="fa-solid fa-trash-can"></i></span>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>

                                                                            <?php endforeach; ?>


                                                                        <?php else : ?>

                                                                            <li>
                                                                                <div>
                                                                                    <div class="course-content-left">
                                                                                        <i class="feather-file-text"></i> <span class="text">Chưa có bài học nào</span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                        <?php endif ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <div>Chưa có mục nào.</div>
                                        <?php endif; ?>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="mt--10 row g-5">
                            <div class="col-lg-12">
                                <div class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                    <span class="icon-reverse-wrapper" onclick="on_create()">
                                        <span class="btn-text">LƯU KHOÁ HỌC</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                        <div class="inner">
                            <div class="section-title mb--30">
                                <h4 class="title">Mẹo đăng khoá học</h4>
                            </div>
                            <div class="rbt-course-upload-tips">
                                <ul class="rbt-list-style-1">
                                    <li><i class="feather-check"></i> Ảnh bìa kháo học nên ở kích thước 700x430.</li>
                                    <li><i class="feather-check"></i> Thêm video giới thiệu để thu hút khách hàng.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start chapter modal Area  -->
    <div class="rbt-default-modal modal fade" id="create_chapter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Thêm mục</h5>
                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Tên mục</label>
                                    <input id="create_chapter_name" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button class="rbt-btn btn-md btn-gradient hover-icon-reverse mr--10" onclick="on_create_chapter()">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Thêm mục</span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                        </span>
                    </button>
                    <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-default-modal modal fade" id="edit_chapter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Thêm mục</h5>
                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Tên mục</label>
                                    <input id="create_chapter_name" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button class="rbt-btn btn-md btn-gradient hover-icon-reverse mr--10" onclick="on_create_chapter()">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Thêm mục</span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                        </span>
                    </button>
                    <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End chapter Modal Area  -->

    <!-- Start Modal Area  -->
    <div class="rbt-default-modal modal fade" id="create_lesson" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Thêm bài học</h5>

                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Tên bài học</label>
                                    <input id="lesson_name" type="text" placeholder="Điền bài học">
                                </div>

                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Thời gian</label>
                                    <input id="lesson_time" type="number" placeholder="Thời gian video ( phút )">
                                    <small class="d-block mt_dec--5">Ví dụ: 1 tiếng 20 phút sẽ nhập 80</small>
                                </div>

                                <div class="course-field mb--30">
                                    <label for="lesson_description">Mô tả bài học</label>
                                    <!-- Place the first <script> tag in your HTML's <head> -->
                                    <script src="https://cdn.tiny.cloud/1/zie5rxa4n7x4228dguy35hjc0niw6txfpql0bo7mtinw5bp1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

                                    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
                                    <textarea id="lesson_description" rows="10"></textarea>
                                </div>

                                <div class="course-field mb--30">
                                    <label for="videoUrl">Chọn mục</label>
                                    <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                        <select class="w-100" id="lesson_chapter">
                                            <option value="" disabled="" selected="" style="display: none">Chọn mục cho khoá học</option>
                                            <?php if ($chapters) : ?>
                                                <?php foreach ($chapters as $chapter) : ?>
                                                    <option value="<?= $chapter['id'] ?>"><?= $chapter['name'] ?></option>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <option value="" disabled>Chưa có mục nào</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="course-field mb--20">
                                    <label for="videoUrl">Điền link youtube video</label>
                                    <input id="lesson_video" type="text" placeholder="Điền link youtube video ở đây.">
                                    <small class="d-block mt_dec--5">Ví dụ: <a target="_blank" href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button class="rbt-btn btn-md btn-gradient hover-icon-reverse mr--10" onclick="on_create_lesson()">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Thêm bài học</span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                        </span>
                    </button>
                    <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Huỷ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-default-modal modal fade" id="edit_lesson" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Chỉnh bài học</h5>

                                <input id="edit_lesson_id" type="text" class="d-none">

                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Tên bài học</label>
                                    <input id="edit_lesson_name" type="text" placeholder="Điền bài học">
                                </div>

                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Thời gian</label>
                                    <input id="edit_lesson_time" type="number" placeholder="Thời gian video ( phút )">
                                    <small class="d-block mt_dec--5">Ví dụ: 1 tiếng 20 phút sẽ nhập 80</small>
                                </div>

                                <div class="course-field mb--30">
                                    <label for="edit_lesson_description">Mô tả bài học</label>
                                    <!-- Place the first <script> tag in your HTML's <head> -->
                                    <script src="https://cdn.tiny.cloud/1/zie5rxa4n7x4228dguy35hjc0niw6txfpql0bo7mtinw5bp1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

                                    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
                                    <script>
                                        // tinymce.init({
                                        //     selector: '#edit_lesson_description',
                                        //     plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                                        //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                        //     tinycomments_mode: 'embedded',
                                        //     tinycomments_author: 'Author name',
                                        //     mergetags_list: [{
                                        //             value: 'First.Name',
                                        //             title: 'First Name'
                                        //         },
                                        //         {
                                        //             value: 'Email',
                                        //             title: 'Email'
                                        //         },
                                        //     ],
                                        //     ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                                        // });
                                    </script>
                                    <textarea id="edit_lesson_description" rows="10"></textarea>
                                </div>

                                <div class="course-field mb--30">
                                    <label for="videoUrl">Chọn mục</label>
                                    <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                        <select class="w-100" id="edit_lesson_chapter">
                                            <option value="" disabled="" selected="" style="display: none">Chọn mục cho khoá học</option>
                                            <?php if ($chapters) : ?>
                                                <?php foreach ($chapters as $chapter) : ?>
                                                    <option value="<?= $chapter['id'] ?>"><?= $chapter['name'] ?></option>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <option value="" disabled>Chưa có mục nào</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="course-field mb--20">
                                    <label for="videoUrl">Điền link youtube video</label>
                                    <input id="edit_lesson_video" type="text" placeholder="Điền link youtube video ở đây.">
                                    <small class="d-block mt_dec--5">Ví dụ: <a target="_blank" href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button class="rbt-btn btn-md btn-gradient hover-icon-reverse mr--10" onclick="on_edit_lesson()">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Lưu</span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                        </span>
                    </button>
                    <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Huỷ</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Area  -->

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <div class="footer-style-2 ptb--60 bg-color-white">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="inner text-center">

                        <div class="logo">
                            <a href="index.html">
                                <img src="/public/assets/images/logo/logo.png" alt="Logo images">
                            </a>
                        </div>
                        <!-- Social icone Area -->
                        <ul class="social-icon social-default">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <!-- End -->
                        <div class="text mt--20">
                            <p>© 2023 <a target="_blank" href="https://themeforest.net/user/rbt-themes/portfolio">Rainbow-Themes</a>. All
                                Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });

    $(function() {
        setTimeout(() => {
            $('#accCollapseThree').addClass('show');
        }, 100);
    });

    function on_create_chapter() {

        $.ajax({
                method: "POST",
                url: "/api/user/chapter/create",
                data: {
                    course_id: $('#course_id').val(),
                    name: $('#create_chapter_name').val()
                },
            })
            .done(function(data) {
                if (data.status == 200) {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                    }).showToast();
                    window.location.reload();
                } else {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #F64C18, #EE9539)",
                        },
                    }).showToast();
                }
            });
    }

    function on_edit_chapter(id) {
        $.ajax({
                method: "POST",
                url: "/api/user/chapter/edit",
                data: {
                    id: id,
                    name: $('#edit_chapter_name').val()
                },
            })
            .done(function(data) {
                if (data.status == 200) {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                    }).showToast();
                    window.location.reload();
                } else {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #F64C18, #EE9539)",
                        },
                    }).showToast();
                }
            });
    }

    function on_create_lesson() {
        $.ajax({
                method: "POST",
                url: "/api/user/lesson/create",
                data: {
                    course_id: $('#course_id').val(),
                    name: $('#lesson_name').val(),
                    time: $('#lesson_time').val(),
                    description: tinymce.get("lesson_description").getContent(),
                    chapter: $('#lesson_chapter :selected').val(),
                    video: $('#lesson_video').val()
                },
            })
            .done(function(data) {
                if (data.status == 200) {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                    }).showToast();
                    window.location.reload();
                } else {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #F64C18, #EE9539)",
                        },
                    }).showToast();
                }
            });
    }

    function on_show_lesson(id) {
        $.ajax({
                method: "POST",
                url: "/api/user/lesson/info",
                data: {
                    id
                },
            })
            .done(function(data) {
                if (data.status == 200) {
                    $('#edit_lesson_id').val(data.data.id);
                    $("#edit_lesson_name").val(data.data.name);
                    $("#edit_lesson_time").val(data.data.time);
                    tinymce.get("edit_lesson_description").setContent(data.data.description);
                    $("#edit_lesson_chapter").selectpicker('val', data.data.chapter_id);
                    $("#edit_lesson_video").val(data.data.video_url);
                    $('#edit_lesson').modal('show');
                } else {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #F64C18, #EE9539)",
                        },
                    }).showToast();
                }
            });
    }

    function on_edit_lesson(id) {
        $.ajax({
                method: "POST",
                url: "/api/user/lesson/edit",
                data: {
                    id: $('#edit_lesson_id').val(),
                    course_id: $('#edit_course_id').val(),
                    name: $('#edit_lesson_name').val(),
                    time: $('#edit_lesson_time').val(),
                    description: tinymce.get("edit_lesson_description").getContent(),
                    chapter: $('#edit_lesson_chapter :selected').val(),
                    video: $('#edit_lesson_video').val()
                },
            })
            .done(function(data) {
                if (data.status == 200) {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                    }).showToast();
                    window.location.reload();
                } else {
                    Toastify({
                        text: data.msg,
                        duration: 3000,
                        style: {
                            background: "linear-gradient(to right, #F64C18, #EE9539)",
                        },
                    }).showToast();
                }
            });
    }

    function on_delete_lesson(id) {
        Swal.fire({
            title: "THÔNG BÁO",
            text: "Bạn có chắc muốn xoá khoá học này!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "VÂNG",
            confirmCancelText: "THÔI"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                        method: "POST",
                        url: "/api/user/lesson/delete",
                        data: {
                            id
                        },
                    })
                    .done(function(data) {
                        if (data.status == 200) {
                            Swal.fire({
                                title: "THÀNH CÔNG",
                                text: data.msg,
                                icon: "success"
                            }).then((result) => {
                                window.location.reload();
                            });
                        } else {
                            Toastify({
                                text: data.msg,
                                duration: 3000,
                                style: {
                                    background: "linear-gradient(to right, #F64C18, #EE9539)",
                                },
                            }).showToast();
                        }
                    });
            }
        });
    }
</script>

<style>
    .tox-tinymce {
        margin-bottom: 15px;
    }

    .rbt-accordion-style.for-right-content .rbt-course-main-content .course-content-right span.rbt-check i {
        font-size: 13px;
        width: 20px;
        height: 20px;
        background: var(--color-primary);
        border-radius: 100%;
        color: var(--color-white);
        display: inline-block;
        text-align: center;
        line-height: 20px;
        border-radius: 5px;
    }
</style>