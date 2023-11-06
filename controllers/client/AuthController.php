<?php

class AuthController
{
    function view_login()
    {
        return view('client.auth.login');
    }
    function view_register()
    {
        return view('client.auth.register');
    }
}
