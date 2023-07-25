<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\ModelAnimeEp;

class MenageEpisode extends BaseController
{
    public function index()
    {

        $animeModel = model('AnimeModel');
        $episodeModel = model('EpisodeModel');
        $modelAnimeEp = new ModelAnimeEp($animeModel->getAllAnime(), $episodeModel);

        // dd($modelAnimeEp->getAllLatest());

        $data = [
            'title' => "dashboard | menage episode",
            'episodes' => $modelAnimeEp->getAllLatest()

        ];
        return view('templates/header', $data)
            . view('pages/menageepisode')
            . view("templates/footer");
    }
}
