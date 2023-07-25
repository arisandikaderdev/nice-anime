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


        $profile_pic = $this->request->getFile('profile_pic');

        // move file


        $user = new User(
            [
                'username' => $post['username'],
                'email' => $post['email'],
                'password' => $post['password'],
                'slug' => url_title($post['username'], '-'),
                'profile_pic' => base_url() . "user/{$post['username']}/profile.jpg"
            ]
        );

        $rules = [
            "username" => [
                'rules' => [
                    'required',
                    'max_length[30]',
                    'min_length[3]',
                    'is_unique[users.username]',
                ],
                'errors' => [
                    'is_unique' => 'username is exist'
                ]
            ],
            "email" => [
                'rules' => [
                    'required',
                    'max_length[254]',
                    'valid_email',
                    'is_unique[auth_identities.secret]'
                ],
                'errors' => [
                    'valid_email' => 'email not valid',
                    'is_unique' => 'email is use in another accound use other'
                ]
            ],
            "password" => [
                "rules" => 'required|strong_password',
                'errors' => [
                    'strong_password' => 'use strong password combine from, uppecase, lowercase and symbol'
                ]
            ],

            "passconf" => ['rules' => "required|matches[password]", 'errors' => [
                'matches' => 'passsword no match'
            ]],

            "profile_pic" => [
                'is_image[profile_pic]',
                'uploaded[profile_pic]',
                'max_size[profile_pic,2048]',
                'mime_in[profile_pic,image/png,image/jpeg,image/jpg]'
            ],


        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->getErrors());

            return redirect()->back()->withInput();
        }

        if ($users->save($user)) {
            $profile_pic->move("user/{$post['username']}", 'profile.jpg');
            echo 'succes';
        }

        $user = $users->findById($users->getInsertID());

        $user->addGroup('admin');

        $user->addPermission('admin.access', 'admin.settings', 'users.manage-admins');

        // $users->addToDefaultGroup($user);
        // $user->addPermission('users.create', 'users.edit');
    }
}
