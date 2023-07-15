<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index()
    {
        if (!auth()->user()->inGroup('superadmin', 'admin')) {
            return redirect()->route('userDashboard');
        }

        return view('templates/header', ['title' => 'dashboard'])
            . view('pages/dashboard')
            . view('templates/footer');
    }
}
