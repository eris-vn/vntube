<?php

require_once 'constants/card.php';
require_once 'model/user.php';
require_once 'constants/user.php';
require_once 'model/course.php';
require_once 'model/lesson.php';
require_once 'model/enrollment.php';

class HomeController
{
    function homepage()
    {
        $courses = (new Course)->limit(3)->getArray();
        $popular_course = (new Course)->limit(8)->getArray();

        return view('client.home', compact('courses', 'popular_course'), 'default');
    }
}
