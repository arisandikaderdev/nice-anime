<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class AnimesSeed extends Seeder
{
    public function run()
    {

        $faker = \Faker\Factory::create();
        //data

        for ($x = 1; $x < 20; $x++) {
            $data = [
                'title' => $faker->name('male'),
                'description' => $faker->text(200),
                'rating' => '7.4',
                'img' => $faker->imageUrl(640, 480, 'animals', true)
            ];

            $this->db->table('animes')->insert($data);
        }
    }
}
