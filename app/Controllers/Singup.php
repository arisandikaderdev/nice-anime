<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Singup extends BaseController
{
    public function index()
    {
        return view('templates/header', ['title' => 'singup'])
            . view('pages/singup')
            . view('templates/footer');
    }
}
