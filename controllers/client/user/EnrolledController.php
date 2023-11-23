<?php

require_once 'model/course.php';
require_once 'model/enrollment.php';
require_once 'model/lesson.php';


class EnrolledController
{
    function show()
    {
        $user = user();
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $history_payment = (new Enrollment)->where('user_id', '=', $user['id'])->paginate(8, $current_page);
        return view('client.user.enrolled', compact('history_payment'), 'user');
    }
}
