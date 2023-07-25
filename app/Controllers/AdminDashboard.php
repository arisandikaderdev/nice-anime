<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class AdminDashboard extends BaseController
{
    public function index()
    {
        if (!auth()->user()->inGroup('superadmin', 'admin')) {
            return redirect()->route('userDashboard');
        }

        $animeModel = model('animeModel');
        // dd(Time::parse("2023-07-21 01:17:10")->toLocalizedString("MMM/d/yyyy"));
        // dd($animeModel->getAllAnime());
        // die;

        $data = [
            'title' => 'dashboard',
            'animes' => $animeModel->getAllAnime()
        ];

        return view('templates/header', $data)
            . view('pages/dashboard')
            . view('templates/footer');
    }
}
