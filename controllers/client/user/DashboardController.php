<?php

class DashboardController
{
    function show_page()
    {
        return view('client.user.dashboard', 'user');
    }
}
