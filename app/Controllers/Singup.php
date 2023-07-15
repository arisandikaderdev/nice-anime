<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Shield\Entities\User;

class Singup extends BaseController
{
    public function index()
    {
        helper('form', 'cookie');

        if (!$this->request->is('post')) {
            return view('templates/header', ['title' => 'singup'])
                . view('pages/singup')
                . view('templates/footer');
        }

        // auth libary

        $users = auth()->getProvider();

        $post = $this->request->getPost();


        $img = $this->request->getFile('profile');

        $user = new User(
            [
                'username' => $post['username'],
                'email' => $post['email'],
                'password' => $post['password'],
                'status' => 'user'
            ]
        );

        if ($users->save($user)) {
            echo 'succes';
        }

        $user = $users->findById($users->getInsertID());

        // $users->addToDefaultGroup($user);
        $user->addGroup('admin');

        $user->addPermission('admin.access', 'admin.settings', 'users.manage-admins');

        // $user->addPermission('users.create', 'users.edit');
    }
}
