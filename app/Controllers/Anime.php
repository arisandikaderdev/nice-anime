<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Anime extends BaseController
{
    public function index($slug)
    {
        $animeModel = model("AnimeModel");

        $data = [
            'title' => "Anime name here",
            'anime' => $animeModel->where('slug', $slug)->first()
        ];
        return view("templates/header", $data)
            . view("pages/anime")
            . view("templates/footer");
    }
}
