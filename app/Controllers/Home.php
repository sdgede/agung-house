<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('content/index');
    }

    public function room_detail()
    {
        return view('content/room_detail');
    }
}
