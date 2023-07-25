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

    public function getAllUser()
    {

        $userGroup =  $this->withIdentities()->findAll();



        foreach ($userGroup as $user) {
            $users[] = $user->toRawArray();
        }




        $result =  array_map([$this, 'getEmail'], $users);

        return $result;
    }

    private function getEmail($value)
    {
        $identitity = array_pop($value);
        $email = $identitity[0]->toRawArray()['secret'];
        $value['email'] = $email;
        return $value;
    }
}
