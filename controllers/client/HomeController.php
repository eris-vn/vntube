<?php

require_once 'constants/card.php';
require_once 'model/user.php';
require_once 'constants/user.php';

class HomeController
{
    function homepage()
    {
        $list = (new User)->where('name', '=', 'a')->getArray();
        return view('client.home', 'default');
    }
}
