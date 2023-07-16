<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Shield\Entities\User;
use PHPUnit\Framework\MockObject\DuplicateMethodException;

class UserDashboard extends BaseController
{
    public function index()
    {

        $user = auth()->user();


        $data = [
            'title' => "userDashboard",
            'user' => $user->toRawArray()
        ];

        return view('templates/header', $data)
            . view('pages/userDashboard')
            . view("templates/footer");
    }
}
