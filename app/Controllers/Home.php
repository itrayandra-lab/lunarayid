<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home', [
            'title' => 'Beranda'
        ]);
    }

    public function gradientSample(): string
    {
        return view('pages/gradient_sample', [
            'title' => 'Sample Gradient - Lunaray Beauty Factory'
        ]);
    }
}
