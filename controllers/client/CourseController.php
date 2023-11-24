<?php

require_once 'model/course.php';
require_once 'model/lesson.php';
require_once 'model/chapter.php';
require_once 'model/enrollment.php';

class CourseController
{
    function view_details()
    {
        $course = (new Course)->where('slug', '=', $_GET['course_slug'])->first();

        if (!$course) {
            return redirect('/404');
        }

        $related_course_by_instructor = (new Course)->where('user_id', '=', $course['user_id'])->whereNotIn('id', [$course['id']])->limit(2)->get();

        return view('client.course.details', compact('course', 'related_course_by_instructor'), 'default');
    }
}
