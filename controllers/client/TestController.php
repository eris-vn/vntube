<?php

require_once 'constants/video.php';

class TestController
{
    function page()
    {
        $a = [1, 2, 3];
        $status = (new VideoCodes)::DRAFT;
        return view('client.home', compact('a', 'status'));
    }
}
