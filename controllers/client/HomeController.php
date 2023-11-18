<?php

require_once 'constants/card.php';
require_once 'model/user.php';
require_once 'constants/user.php';
require_once 'model/course.php';

class HomeController
{
    function homepage()
    {
        $courses = (new Course)->limit(3)->getArray();

        return view('client.home', compact('courses'), 'default');
    }
}
