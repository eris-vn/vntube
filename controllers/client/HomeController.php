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
        $popular_course = (new Course)->limit(6)->getArray();
        $count_instructor = (new User)->where('role', '=', UserCode::INSTRUCTOR)->count();
        $count_course = (new Course)->count();
        $count_lesson = (new Lesson)->count();
        $count_enrolled = (new Enrollment)->count();

        return view('client.home', compact('courses', 'popular_course', 'count_instructor', 'count_course', 'count_lesson', 'count_enrolled'), 'default');
    }
}
