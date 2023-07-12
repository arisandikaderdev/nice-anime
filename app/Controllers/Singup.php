<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Singup extends BaseController
{
    public function index()
    {
        helper('form', 'cookie');

        if (!$this->request->is('post')) {
            return view('templates/header', ['title' => 'singup'])
                . view('pages/singup')
                . view('templates/footer');
        }

        $post = $this->request->getPost();
        $img = $this->request->getFile('profile');
    }
}
