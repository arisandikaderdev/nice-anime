<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AddEpisode extends BaseController
{
    public function index()
    {
        return view("templates/header", ["title" => 'Add New Anime episode'])
            . view("pages/addepisode")
            . view("templates/footer");
    }
}
