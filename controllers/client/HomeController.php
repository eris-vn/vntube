<?php

require_once 'constants/card.php';
require_once 'model/user.php';
require_once 'constants/user.php';

class HomeController
{
    function homepage()
    {
        return view('client.home', 'default');
    }
}
