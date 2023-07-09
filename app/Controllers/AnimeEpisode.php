<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AnimeEpisode extends BaseController
{
    public function index()
    {

        return view("templates/header", ['title' => "Anime name here"])
            . view("pages/animeEpisode")
            . view("templates/footer");
    }
}
