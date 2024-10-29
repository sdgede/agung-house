<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'nav_selected' => '1'
        ];

        return view('content/index', $data);
    }

    public function room_detail()
    {
        $data = [
            'nav_selected' => '2'
        ];

        return view('content/room_detail', $data);
    }
}
