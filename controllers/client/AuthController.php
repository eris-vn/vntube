<?php

class AuthController
{
    function loginpage()
    {
        return view('client.auth.login', 'default');
    }
    function on_login()
    {
        validate_api($_POST, [
            'email' =>  ['required', 'email'],
            'password' => ['required']
        ]);

        $user = (new User)->where('email', '=', $_POST['email'])->where('password', '=', md5($_POST['password']))->first();

        $_SESSION['user_id'] = $user['id'];
        return api(['status' => 200, 'msg' => 'Đăng nhập thành công.']);
    }
    function on_regist()
    {
        validate_api($_POST, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            're_password' => ['required']
        ]);

        $user = (new User)->where('email', '=', $_POST['email'])->first();

        if ($user) {
            return api(['status' => -101, 'msg' => 'Email đã tồn tại trong hệ thống.']);
        }

        if ($_POST['password'] != $_POST['re_password']) {
            return api(['status' => -102, 'msg' => 'Xác nhận mật khẩu không đúng.']);
        }

        (new User)->insert(['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => md5($_POST['password'])]);
        return api(['status' => 200, 'msg' => 'Đăng ký tài khoản thành công.']);
    }
    function on_logout()
    {
        $user = user();

        if ($user) {
            $_SESSION['user_id'] = null;
        }

        return redirect('/');
    }
}
