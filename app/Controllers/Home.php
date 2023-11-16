<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('qrhome');
    }
    public function pagesd(): string
    {
        return view('pagesd');

    }public function page3d(): string
    {
        return view('page3d');
    }
    public function page3dsd(): string
    {
        return view('page3dsd');
    }
    public function pagecadcam(): string
    {
        return view('pagecadcam');
    }
    
}
