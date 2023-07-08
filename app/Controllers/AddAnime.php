<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AddAnime extends BaseController
{
    public function index()
    {

        helper(['form', 'cookie']);

        if (!$this->request->is('post')) {
            return view("templates/header", ["title" => 'Add New Anime'])
                . view("pages/addanime")
                . view("templates/footer");
        }

        $post = $this->request->getPost();
        $img = $this->request->getFile('img');

        $rules = [
            'title' => 'required',
            'deskripsi' => 'required',
            'rating' => 'required',
            'img' => [
                'uploaded[img]',
                'is_image[img]',
            ]
        ];

        if (!$this->validate($rules)) {
            return view("templates/header", ["title" => 'Add New Anime'])
                . view("pages/addanime")
                . view("templates/footer");
        }
    }
}
