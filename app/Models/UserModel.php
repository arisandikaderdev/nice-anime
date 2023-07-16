<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Shield\Models\UserModel as UM;

class UserModel extends UM
{
    // protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $allowedFields  = [
        'username',
        'slug',
        'profile_pic',
        'status',
        'status_message',
        'active',
        'last_active',
        'deleted_at',
    ];

    protected bool $fetchIdentities = false;

    public function finduser($id)
    {
        return $this->find($id);
    }
}
