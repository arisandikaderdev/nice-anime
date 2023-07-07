<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('templates/header', ['title' => 'login'])
            . view('pages/login')
            . view('templates/footer');
    }
}
