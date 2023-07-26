<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\FileUpload;

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

        $slug = url_title($post['title'], '-');
        $fileUpload = new FileUpload;



        $data = [
            'title' => $post['title'],
            'description' => $post['deskripsi'],
            'rating' => $post['rating'],
            'slug' => $slug,
            'img' => base_url() . "anime/$slug/banner.jpg"
        ];

        if ($AnimeDb->save($data)) {

            session()->setFlashdata('message', 'succesfull add anime 🎉');

            $fileUpload->animeImg($img, $slug);
            return redirect()->back();
        }
    }
}
