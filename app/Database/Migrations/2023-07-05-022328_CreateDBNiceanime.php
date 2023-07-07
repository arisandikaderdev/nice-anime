<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDBNiceanime extends Migration
{
    public function up()
    {
        //create database
        $this->forge->createDatabase('niceanime', true);
    }

    public function down()
    {
        //drop databases
        $this->forge->dropDatabase('nicenime');
    }
}
