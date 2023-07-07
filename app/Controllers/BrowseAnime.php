<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BrowseAnime extends BaseController
{
    public function index()
    {
        return view('templates/header', ['title' => 'nicenime browse anime'])
            . view('pages/browse')
            . view('templates/footer');
    }
}
