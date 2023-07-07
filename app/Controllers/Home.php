<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/header', ['title' => 'NiceAnime bast anime site'])
            . view('pages/homepage')
            . view('templates/footer');
    }
}
