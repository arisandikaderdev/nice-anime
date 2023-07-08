<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'int',
                'constraint' => '200',
                'unsigned' => true,
                'null' => false,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => '200',
                'null' => false
            ],

            'password' => [
                'type' => 'text',
                'null' => false
            ],

            'email' => [
                'type' => 'varchar',
                'constraint' => '200',
                'null' => false
            ],

            'profile_pic' => [
                'type' => 'text',
            ],

            'created_at' => [
                'type' => "datetime",
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id_user');

        $this->forge->createTable('user', true, ["ENGINE" => 'innoDb']);
    }

    public function down()
    {
        //drop database
        $this->forge->dropTable('user', true);
    }
}
