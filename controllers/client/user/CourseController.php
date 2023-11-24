<?php

require_once 'model/course.php';
require_once 'model/chapter.php';
require_once 'model/lesson.php';
require_once 'model/enrollment.php';


class CourseController
{
    function show_page()
    {
        $user = user();
        $courses = (new Course)->where('user_id', '=', $user['id'])->paginate(2);
        return view('client.user.my-course', compact('courses'), 'user');
    }
    function show_create()
    {
        return view('client.user.course.create',  'default');
    }
    function create()
    {
        $user = user();
        validate_api($_POST, [
            'name' => ['required'],
            'slug' => ['required'],
            'short-description' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'video_preview' => ['required:video giới thiệu'],
            'minutes' => ['required:phút'],
        ]);

        // xử lý ảnh bìa
        $image = '';
        if (!array_key_exists('thumbnails', $_FILES)) {
            return api(['status' => -100, 'msg' => 'Không bỏ trống ảnh bìa']);
        } else {
            $temp_name = $_FILES['thumbnails']['tmp_name'];
            $file_name = $_FILES['thumbnails']['name'];
            $image = "uploads/img/" . $file_name;

            move_uploaded_file($temp_name, $image);
        }

        $check = (new Course)->where('slug', '=', $_POST['slug'])->first();
        if ($check) {
            return api(['status' => -101, 'msg' => 'Đường dẫn đã tồn tại, vui lòng nhập đường dẫn khác.']);
        }

        $discounted_price = isset($_POST['discounted_price']) && $_POST['discounted_price'] != "" ? $_POST['discounted_price'] : 0;

        (new Course)->insert(['user_id' => $user['id'], 'name' => $_POST['name'], 'slug' => $_POST['slug'], 'description' => $_POST['description'], 'short_description' => $_POST['short-description'], 'price' => $_POST['price'], 'discounted_price' => $discounted_price, 'thumbnails' => '/' . $image, 'video_preview' => $_POST['video_preview'], 'minutes' => $_POST['minutes']]);
        $course = (new Course)->where('user_id', '=', $user['id'])->orderBy('id', 'desc')->first();
        return api(['status' => 200, 'data' => ['id' => $course['id']], 'msg' => 'Tạo khoá học thành công']);
    }
    function show_edit()
    {
        $user = user();
        $course_id = isset($_GET['course_id']) ? intval($_GET['course_id']) : null;
        $course = (new Course)->where('id', '=', $course_id)->where('user_id', '=', $user['id'])->first();

        if (!$course) {
            return redirect('/user/my-course');
        }

        return view('client.user.course.edit', compact('course'),  'default');
    }
    function edit()
    {
        $user = user();
        validate_api($_POST, [
            'id' => ['requid:tham số'],
            'name' => ['required'],
            'slug' => ['required'],
            'short-description' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'video_preview' => ['required:video giới thiệu'],
            'minutes' => ['required:phút'],
        ]);

        // xử lý ảnh bìa
        $image = '';
        if (!array_key_exists('thumbnails', $_FILES)) {
            return api(['status' => -100, 'msg' => 'Không bỏ trống ảnh bìa']);
        } else {
            $temp_name = $_FILES['thumbnails']['tmp_name'];
            $file_name = $_FILES['thumbnails']['name'];
            $image = "uploads/img/" . $file_name;

            move_uploaded_file($temp_name, $image);
        }

        $course = (new Course)->where('id', '=', $_POST['id'])->where('user_id', '=', $user['id'])->first();
        if (!$course) {
            return api(['status' => -101, 'msg' => 'Không tìm thấy khoá học']);
        }

        if ($course['slug'] != $_POST['slug']) {
            $check = (new Course)->where('slug', '=', $_POST['slug'])->first();
            if ($check) {
                return api(['status' => -101, 'msg' => 'Đường dẫn đã tồn tại, vui lòng nhập đường dẫn khác.']);
            }
        }

        $discounted_price = isset($_POST['discounted_price']) && $_POST['discounted_price'] != "" ? $_POST['discounted_price'] : 0;

        (new Course)->where('id', '=', $_POST['id'])->update(['user_id' => $user['id'], 'name' => $_POST['name'], 'slug' => $_POST['slug'], 'description' => $_POST['description'], 'short_description' => $_POST['short-description'], 'price' => $_POST['price'], 'discounted_price' => $discounted_price, 'thumbnails' => '/' . $image, 'video_preview' => $_POST['video_preview'], 'minutes' => $_POST['minutes']]);
        $course = (new Course)->where('user_id', '=', $user['id'])->first();
        return api(['status' => 200, 'data' => ['id' => $course['id']], 'msg' => 'Chỉnh khoá học thành công']);
    }
    function show_build_lesson()
    {
        $user = user();
        $course_id = isset($_GET['course_id']) ? intval($_GET['course_id']) : null;
        $course = (new Course)->where('id', '=', $course_id)->where('user_id', '=', $user['id'])->first();

        if (!$course) {
            return redirect('/user/my-course');
        }

        $chapters = (new Chapter)->where('course_id', '=', $course_id)->getArray();

        return view('client.user.course.build-lesson', compact('course_id', 'course', 'chapters'), 'default');
    }
}
