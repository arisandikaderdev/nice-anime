<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserDashboard extends BaseController
{
    public function index()
    {
        return view('templates/header', ['title' => 'userDashboard'])
            . view('pages/userDashboard')
            . view("templates/footer");
    }
}
