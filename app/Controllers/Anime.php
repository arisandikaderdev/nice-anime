<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Anime extends BaseController
{
    public function index($slug)
    {
        $animeModel = model("AnimeModel");
        $episodeModel = model("EpisodeModel");

        $anime = $animeModel->where('slug', $slug)->first();
        $episode = $episodeModel->where('id_anime', $anime['id_anime'])->find();


        $data = [
            'title' => "Anime name here",
            'anime' => $anime,
            'episode' => $episode
        ];
        return view("templates/header", $data)
            . view("pages/anime")
            . view("templates/footer");
    }
}
