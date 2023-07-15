<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {

        helper('form', 'cookie');

        if (auth()->loggedIn()) {
            return redirect()->route('userDashboard');
        }

        if (!$this->request->is('post')) {
            return view('templates/header', ['title' => 'login'])
                . view('pages/login')
                . view('templates/footer');
        }


        $post = $this->request->getPost();

        $credentials = [
            'email' => $post['email'],
            'password' => $post['password']
        ];

        $loginAttempt = auth()->attempt($credentials);

        if (!$loginAttempt->isOK()) {
            echo "we dont find your acound";
        }

        return redirect()->route('dashboard');
    }
}
