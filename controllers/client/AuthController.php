<?php

class AuthController
{
    function loginpage()
    {
        return view('client.auth.login', 'default');
    }
}
