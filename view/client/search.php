

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">

            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="/">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Courses</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Courses</h1>
                                <!-- <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 50 Courses
                                </a> -->
                            </div>

                            <p class="description">Courses that help beginner designers become true unicorns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40 mt_sm--20">
                <div class="container">
                    <div class="row g-5 align-items-center">

                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item switch-layout-container">
                                    <ul class="course-switch-layout">
                                        <li class="course-switch-item"><button class="rbt-grid-view active" title="Grid Layout"><i class="feather-grid"></i> <span class="text">Grid</span></button></li>
                                        <li class="course-switch-item"><button class="rbt-list-view" title="List Layout"><i class="feather-list"></i> <span class="text">List</span></button></li>
                                    </ul>
                                </div>
                                <div class="rbt-short-item">
                                    <span class="course-index">Showing 1-9 of 19 results</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <form method="post" action="#" class="rbt-search-style me-0" id="form_search">
                                        <input type="text"  id="keyword" placeholder="Search Your Course..">
                                        <button type="submit" name="btn" class="rbt-search-btn rbt-round-btn">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                    
                                    
                                </div>

                                <div class="rbt-short-item">
                                    <div class="view-more-btn text-start text-sm-end">
                                        <button class="discover-filter-button discover-filter-activation rbt-btn btn-white btn-md radius-round">Filter<i class="feather-filter"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Start Filter Toggle  -->
                    <div class="default-exp-wrapper default-exp-expand">
                        <div class="filter-inner" style="justify-content: flex-start;">
                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Sắp xếp theo giá</span>
                                    <select id="sort_by">
                                        <option value="asc">Từ thấp đến cao</option>
                                        <option value="desc">Từ cao đến thấp</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Sắp xếp theo giảng viên</span>
                                    <select id="sb_author" data-live-search="true" title="Select Author" multiple="" data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                    <?php foreach ($search_course['data'] as $course) : ?>
                                        <?php $authour = (new User)->where('id', '=', $course['user_id'])->first() ?>
                                    <option value="<?= $authour['id'] ?>" data-subtext=""><?= $authour['name'] ?></option>
                                        
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Sắp xếp theo ưu đãi</span>
                                    <select id="sb_offer">
                                        <option value="0">Miễn Phí</option>
                                        <option value="1">Trả phí</option>
                                    </select>
                                </div>
                            </div>
<!-- 
                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Sắp xếp theo doanh mục</span>
                                    <select id="sb_category" data-live-search="true">
                                        <?php foreach ($search_course['data'] as $course) : ?>
                                        <option><?= $course['slug'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div> -->

                            <!-- <div class="filter-select-option">
                                <div class="filter-select">
                                    <span class="select-label d-block">Price Range</span>

                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range"></div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount">
                                                    </div>
                                                    <div class="price--filter">
                                                        <a class="rbt-btn btn-gradient btn-sm" href="#">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div> -->
                        </div>
                    </div>
                    
                    <!-- End Filter Toggle  -->
                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>


    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="inner">
            <div class="container">
                <div class="rbt-course-grid-column" id="search_body">
                <div class="row g-5">
                    <!-- Start Single Card  -->
                    <?php foreach ($search_course['data'] as $course) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="/course/details/<?= $course['id'] ?>">
                                <img src="<?= $course['thumbnails'] ?>" alt="Card image">
                                <!-- <div class="rbt-badge-3 bg-white">
                                <span>-40%</span>
                                <span>Off</span>
                            </div> -->
                            </a>
                        </div>
                        <div class="rbt-card-body">

                            <h4 class="rbt-card-title"><a href="/course/details/<?= $course['id'] ?>"><?= $course['name'] ?></a>
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
                                <a class="rbt-btn-link" href="/course/details/<?= $course['id'] ?>">Xem thêm<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                    <?php endforeach; ?>
                <!-- </div> -->
                <div class="row">
                    <div class="col-lg-12 mt--60">
                        <nav>
                            <ul class="rbt-pagination">
                                <?= (new Model)->renderHtml($search_course) ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
            $("#form_search").on("submit", function(event) {
        event.preventDefault();
                $.ajax({
                method: "POST",
                url: "/api/search",
                data: {
                    keyword: $('#keyword').val(),
                    sort_by: $('#sort_by').val(),
                    sb_author: $('#sb_author').val(),
                    sb_offer: $('#sb_offer').val(),
                    sb_category: $('#sb_category').val(),
                }, 
            })
            .done(function(data) {
                if (data.status == 200) {
                    html = "";
                    data.data.forEach((e) =>{
                        html+= `
                        <div class="course-grid-3">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="${e.thumbnails}" alt="Card image">
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

                                <h4 class="rbt-card-title"><a href="course/details/${e.id}">${e.name}</a>
                                </h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>${e.lesson} Lessons</li>
                                    <li><i class="feather-users"></i>${e.enrollment} Students</li>
                                </ul>

                                <p class="rbt-card-text">${e.short_description}</p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="public/assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                    bởi <a href="#">${e.user}</a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        ${price(e.price)}
                                        ${discounted_price(e.discounted_price)}
                                    </div>
                                    <a class="rbt-btn-link" href="course/details/${e.id}">Xem thêm<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        `;
                    });

                    $('#search_body').html(html);
                } else {
                    Swal.fire({
                        title: "THẤT BẠI",
                        text: data.msg,
                        icon: "error"
                    });
                }
            });
        });
        
        function price(price) {
            if (price == 0) {
                return '<span class="current-price">Miễn phí</span>';
            }
            else{
                return `<span class="current-price">${parseInt(price).toLocaleString()}đ</span>`;
            }
        }
        function discounted_price(discounted_price) {
            if (discounted_price == 0) {
                return '';
            }
            else{
                return `<span class="off-price">${parseInt(discounted_price).toLocaleString()}đ</span>`;
            }
        }
    </script>