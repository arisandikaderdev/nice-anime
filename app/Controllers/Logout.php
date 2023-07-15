<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
