<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class AnimeModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'animes';
    protected $primaryKey       = 'id_anime';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title', 'description', 'rating', 'img', 'slug', 'created_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';

    public function getAllAnime()
    {
        $newFormated = function ($item) {
            $item['created_at'] = Time::parse("2023-07-21 01:17:10")->toLocalizedString("eeee, LL yyyy");
            return $item;
        };
        $resutl = array_map($newFormated, $this->findAll());
        return $resutl;
    }
}
