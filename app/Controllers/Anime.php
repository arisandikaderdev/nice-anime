<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Anime extends BaseController
{
    public function index()
    {
        return view("templates/header", ['title' => "Anime name here"])
            . view("pages/anime")
            . view("templates/footer");
    }
}
