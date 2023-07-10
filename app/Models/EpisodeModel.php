<?php

namespace App\Models;

use CodeIgniter\Model;

class EpisodeModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'episode';
    protected $primaryKey       = 'id_episode';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'episode', 'link_1080', 'link_720', 'link_480', 'link_360', 'id_anime'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
