<?php

namespace App\Models;

use CodeIgniter\Model;

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
        'title', 'description', 'raing', 'img', 'slug'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
}
