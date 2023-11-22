<?php

class CartController
{
    function add()
    {
        validate_api($_POST, [
            'id' => ['required:tham số'],
        ]);

        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        if (count($cart)) {
            $check = array_search($_POST['id'], $cart);
            if ($check !== false) {
                return api(['status' => -100, 'msg' => 'Khoá học đã tồn tại trong giỏ hàng.']);
            }
        }

        $cart[] = $_POST['id'];
        $_SESSION['cart'] = $cart;

        return api(['status' => 200, 'msg' => 'Thêm khoá học vào giỏ thành công.', 'data' => $cart]);
    }
    function delete()
    {
        validate_api($_POST, [
            'id' => ['required:tham số'],
        ]);

        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        $check = array_search($_POST['id'], $cart);

        if ($check !== false) {
            unset($cart[$check]);
            $_SESSION['cart'] = array_values($cart);
            return api(['status' => 200, 'msg' => 'Xoá khoá học khỏi giỏ thành công.', 'cart' => $cart]);
        }

        return api(['status' => -200, 'msg' => 'Khoá học không tồn tại trong giỏ hàng.']);
    }
}
