<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAnimes extends Migration
{
    public function up()
    {
        //add slug field
        $this->forge->addColumn('animes', ['slug VARCHAR(200) NOT NULL']);
    }

    public function down()
    {
        //drop slug
        $this->forge->dropColumn('animes', 'slug');
    }
}
