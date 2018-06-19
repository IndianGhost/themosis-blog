<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class Example extends BaseController
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        $user = [
            'name'      =>  'achraf bellaali',
            'status'    =>  'web developer',
            'nationality'   =>  'Morocco'
        ];
        return view('about', compact('user'));
    }

    public function contact()
    {
        $user = [
            'name'      =>  'achraf bellaali',
            'status'    =>  'web developer',
            'nationality'   =>  'Morocco'
        ];
        return view('contact', compact('user'));
    }
}
