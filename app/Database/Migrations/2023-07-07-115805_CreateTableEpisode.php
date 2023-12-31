<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableEpisode extends Migration
{
    public function up()
    {
        //create filed

        $this->forge->addField(
            [
                "id_episode" => [
                    'type' => 'INT',
                    'constraintt' => '200',
                    'unsigned' => true,
                    'null' => false,
                    "auto_increment" => true

                ],
                "episode" => [
                    'type' => 'INT',
                    'constraint' => '100',
                    'null' => false,
                ],

                'slug' => [
                    'type' => "VARCHAR",
                    'constraint' => '300'
                ],

                'link_1080' => [
                    'type' => "VARCHAR",
                    'constraint' => '200'
                ],
                'link_720' => [
                    'type' => "VARCHAR",
                    'constraint' => '200'
                ],
                'link_480' => [
                    'type' => "VARCHAR",
                    'constraint' => '200'
                ],
                'link_360' => [
                    'type' => "VARCHAR",
                    'constraint' => '200'
                ],

                'id_anime' => [
                    'type' => 'INT',
                    'constraint' => '200',
                    'unsigned' => true,
                ],


                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true
                ]
            ],
        );

        // primary key
        $this->forge->addPrimaryKey('id_episode');

        // foreign key
        $this->forge->addForeignKey('id_anime', 'animes', 'id_anime');

        // table

        $this->forge->createTable('episode', true, ['ENGINE' => 'innoDB']);
    }

    public function down()
    {
        //drop table
        $this->forge->dropTable("episode");
    }
}
