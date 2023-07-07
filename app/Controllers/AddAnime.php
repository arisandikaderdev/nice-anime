<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AddAnime extends BaseController
{
    public function index()
    {
        return view("templates/header", ["title" => 'Add New Anime'])
            . view("pages/addanime")
            . view("templates/footer");
    }
}
