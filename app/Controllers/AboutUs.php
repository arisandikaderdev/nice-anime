<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutUs extends BaseController
{
    public function index()
    {
        return view('templates/header', ['title' => 'Niceanime | about us'])
            . view('pages/about')
            . view('templates/footer');
    }
}
