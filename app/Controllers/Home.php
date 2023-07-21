<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $animeModel = model("animeModel");
        $episodeModel = model('episodemodel');

        $episode = $episodeModel
            ->join('animes', 'animes.id_anime = episode.id_anime')
            ->orderBy('episode.created_at', 'DESC')
            ->findAll();


        $data = [
            'title' => 'NiceAnime bast anime site',
            'animes' => $animeModel->findAll(),
            'episodes' => $episode,
            'slides' => $animeModel->limit(10)
                ->orderBy('created_at', 'DESC')
                ->findAll()
        ];

        // dd($animeModel->limit(10)->findAll());
        return view('templates/header', $data)
            . view('pages/homepage')
            . view('templates/footer');
    }
}
