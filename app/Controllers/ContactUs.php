<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactUs extends BaseController
{
    public function index()
    {
        return view('templates/header', ['title' => 'NiceAnime | contact us'])
            . view('pages/contact')
            . view('templates/footer');
    }
}
