<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AddEpisode extends BaseController
{
    public function index()
    {
        helper(['form', 'cookie']);

        $animeModel = model('AnimeModel');
        $data = [
            "title" => 'Add New Anime episode',
            'animes' => $animeModel->findAll()
        ];

        if (!$this->request->is('post')) {
            return view("templates/header", $data)
                . view("pages/addepisode")
                . view("templates/footer");
        }

        $episodeModel = model('EpisodeModel');
        $post = $this->request->getPost();

        $rules = [
            'id_anime' => 'required|integer',
            'episode' => 'required|integer',
            '1080' => 'required',
        ];

        if (!$this->validate($rules)) {
            return view("templates/header", $data)
                . view("pages/addepisode")
                . view("templates/footer");
        }



        $anime = $animeModel->find($post['id_anime']);


        $row = [
            'episode' => $post['episode'],
            'link_1080' => json_encode($post['1080']),
            'link_720' => json_encode($post['720']),
            'link_480' => json_encode($post['480']),
            'link_360' => json_encode($post['360']),
            'id_anime' => (int)$post['id_anime'],
        ];

        $episodeModel->simpleQuery('SET FOREIGN_KEY_CHECKS=0;');

        if ($episodeModel->save($row)) {
            return view("templates/header", $data)
                . view("pages/addepisode")
                . view("templates/footer");
        }
    }
}
