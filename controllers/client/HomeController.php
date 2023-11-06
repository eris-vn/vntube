<?php

require_once 'constants/card.php';
require_once 'model/order.php';

class HomeController
{
    function homepage()
    {
        $test = (new Order())->whereIn('status', [1, 2])->getArray();
        return view('client.home', compact('test'), 'default');
    }
}
