<?php

require_once 'model/course.php';
require_once 'model/invoice.php';
require_once 'constants/invoice.php';
require_once 'model/enrollment.php';

class CheckoutController
{
    function view()
    {
        return view('client.checkout', 'default');
    }
    function payment()
    {
        validate_api($_POST, [
            'payment_method' => ['required:phương thức thanh toán'],
            'accept_terms' => ['required:điều khoản sử dụng']
        ]);

        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        if (!count($cart)) {
            return api(['status' => -100, 'msg' => 'Không tìm thấy sản phẩm để thanh toán.']);
        }

        $user = user();
        $courses = (new Course)->whereIn('id', $cart)->getArray();
        $total_price = (new Course)->whereIn('id', $cart)->sum('price');

        if ($total_price == 0) {
            foreach ($courses as $course) {
                (new Invoice)->insert(['user_id' => $user['id'], 'name' => $course['name'], 'price' => $course['price'], 'status' => InvoiceCode::SUCCESS]);
                (new Enrollment)->insert(['user_id' => $user['id'], 'course_id' => $course['id'], 'instructor_id' => $course['user_id']]);
            }
            $_SESSION['cart'] = [];
            return api(['status' => 200, 'msg' => 'Thanh toán thành công']);
        } else {
            return api(['status' => -101, 'msg' => 'Tính năng chưa hỗ trợ :))']);
        }

        return api(['status' => 200, 'test' => $total_price]);
    }
}
