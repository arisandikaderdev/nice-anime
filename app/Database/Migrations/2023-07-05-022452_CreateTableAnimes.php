<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAnimes extends Migration
{
    public function up()
    {
        //field

        $this->forge->addField([
            'id_anime' => [
                'type' => 'int',
                'constraint' => '200',
                'unsigned' => true,
                'null' => false,
                'auto_increment' => true
            ],

            'title' => [
                'type' => 'varchar',
                'constraint' => '200',
                'null' => false,
            ],

            'description' => [
                'type' => 'text',
                'null' => false
            ],


            'rating' => [
                'type' => 'varchar',
                'constraint' => '2',
            ],
            'img' => [
                'type' => 'text',
            ],

            'slug' => [
                'type' => 'varchar',
                'constraint' => '200'
            ],

            'created_at' => [
                'type' => 'datetime',
                'null' => true
            ],

            'updated_at' => [
                'type' => 'datetime',
                'null' => true
            ],

            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addPrimaryKey('id_anime');


        $this->forge->createTable('animes', true, ["ENGINE" => 'innoDB']);
    }

    public function down()
    {
        //drop table
        $this->forge->dropTable('animes');
    }
}
