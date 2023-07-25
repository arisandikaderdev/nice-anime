<?php

namespace App\Libraries;

use CodeIgniter\I18n\Time;

class ModelAnimeEp
{
    protected $animeModel;
    protected $episodeModel;

    public function __construct($animeModel, $episodeModel)
    {
        $this->animeModel = $animeModel;
        $this->episodeModel = $episodeModel;
    }

    public function getAllLatest(?int $limit = null)
    {
        if ($limit) {
            return $this->episodeModel->join('animes', 'animes.id_anime = episode.id_anime')
                ->limit($limit)
                ->orderBy('episode.created_at', 'DESC')
                ->findAll();
        }
        $result =  $this->episodeModel->join('animes', 'animes.id_anime = episode.id_anime')
            ->orderBy('episode.created_at', 'DESC')
            ->findAll();

        return $this->formatedDate($result);
    }

    public function getAll(?int $limit = null)
    {

        if ($limit) {
            return $this->episodeModel->join('animes', 'animes.id_anime = episode.id_anime')
                ->limit($limit)
                ->findAll();
        }
        return $this->episodeModel->join('animes', 'animes.id_anime = episode.id_anime')
            ->findAll();
    }

    protected function formatedDate($array)
    {
        $format = function ($item) {
            $item['created_at'] = Time::parse("2023-07-21 01:17:10")->toLocalizedString("eeee, LL yyyy");
            return $item;
        };

        return array_map($format, $array);
    }
}
