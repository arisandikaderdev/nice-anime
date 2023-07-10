<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AnimeEpisode extends BaseController
{
    public function index($slug, $episode)
    {
        $episodeModel = model('episodemodel');

        $where = "animes.slug = '$slug' AND episode.episode = $episode";

        $episode = $episodeModel->join('animes', 'animes.id_anime = episode.id_anime')->where($where)->first();


        $data = [
            'title' => "Anime name here",
            'animes' => $episode
        ];
        return view("templates/header", $data)
            . view("pages/animeEpisode")
            . view("templates/footer");
    }
}
