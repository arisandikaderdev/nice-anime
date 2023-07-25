<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MenageUser extends BaseController
{
    public function index()
    {

        $users = auth()->getProvider()->getAllUser();

        // dd($users);

        $data = [
            'title' => 'Dashboard | Menage User',
            'users' => $users
        ];
        return view("templates/header", $data) .
            view('pages/menageuser')
            . view('templates/footer');
    }
}
