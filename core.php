<?php

require_once 'model/user.php';

$config = [
    'LOCALHOST' => 'localhost',
    'USERNAME' => 'root',
    'PASSWORD' => '',
    'DATABASE' => 'lazada',
    'PORT' => 3307
];

function api($data)
{
    echo json_encode($data);
    return;
}

function view($path, $data = [], $layout = "")
{
    $path = str_replace('.', '/', $path);
    extract($data);

    // xử lý view
    if (!file_exists("view/$path.php")) {
        return 'Không tìm thấy view';
    }

    // xử lý layout
    $layout_path = "view/layouts/$layout.php";

    if (file_exists($layout_path)) {
        require $layout_path;
    } else {
        require "view/$path.php";
    }
}

function user()
{
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        if ($user_id) {
            $user = (new User)->where('id', '=', $user_id)->first();

            if ($user) {
                return $user;
            }
        }
    }

    return null;
}

function redirect($url)
{
    header("Location: $url");
}


function uploadImages($images)
{
    if (!isset($images)) {
        return array("status" => -100, "msg" => "Không có ảnh nào.");
    }

    $imgCount = count($images["name"]);
    $imgResults = [];

    for ($i = 0; $i < $imgCount; $i++) {
        $image = $images['tmp_name'][$i];
        $targetFile = "uploads/img/" . basename($images['name'][$i]);

        if (move_uploaded_file($image, $targetFile)) {
            $imgResults[] = '/' . $targetFile;
        }
    }


    return $imgResults;
}

function alertSuccess($msg)
{
    return '<div class="alert alert-success bg-success text-white border-0" role="alert">
        ' . $msg . '
        </div>';
}

function alertError($msg)
{
    return '<div class="alert alert-danger  bg-danger  text-white border-0" role="alert">
        ' . $msg . '
        </div>';
}

function toSlug($string)
{
    $search = array(
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
    );
    $replace = array(
        'a',
        'e',
        'i',
        'o',
        'u',
        'y',
        'd',
        'A',
        'E',
        'I',
        'O',
        'U',
        'Y',
        'D',
        '-',
    );
    $string = preg_replace($search, $replace, $string);
    $string = preg_replace('/(-)+/', '-', $string);
    $string = strtolower($string);
    return $string;
}
