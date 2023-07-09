<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $animeDb = model("animeModel");

        $data = [
            'title' => 'NiceAnime bast anime site',
            'animes' => $animeDb->findAll()
        ];
        return view('templates/header', $data)
            . view('pages/homepage')
            . view('templates/footer');
    }
}
