<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUsers extends Migration
{
    public function up()
    {
        $field = [
            'slug' => [
                'type' => 'text',
                'after' => 'username'
            ],
            'profile_pic' => [
                'type' => 'text',
                'after' => 'slug'
            ]
        ];

        $this->forge->addColumn('users', $field);
    }

    public function down()
    {
        $this->forge->dropColumn('users', ['slug', 'profile_pic']);
    }
}
