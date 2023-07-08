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

        $AnimeDb = model('AnimeModel');

        $post = $this->request->getPost();
        $img = $this->request->getFile('img');

        $rules = [
            'title' => 'required',
            'deskripsi' => 'required',
            'rating' => 'required',
        ];

        if (!$this->validate($rules)) {
            return view("templates/header", ["title" => 'Add New Anime'])
                . view("pages/addanime")
                . view("templates/footer");
        }



        $data = [
            'title' => $post['title'],
            'description' => $post['deskripsi'],
            'rating' => $post['rating'],
            'slug' => url_title($post['title'], '-')
        ];

        if ($AnimeDb->save($data)) {
            session()->setFlashdata('message', 'succesfull add anime');
            return redirect()->back();
        }
    }
}
