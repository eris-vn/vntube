<?php

require_once 'model/course.php';
require_once 'model/lesson.php';
require_once 'model/chapter.php';
require_once 'model/enrollment.php';

class CourseController
{
    function view_details()
    {
        $course = (new Course)->where('id', '=', $_GET['course_id'])->first();

        if (!$course) {
            return redirect('/404');
        }

        return view('client.course.details', compact('course'), 'default');
    }
}
