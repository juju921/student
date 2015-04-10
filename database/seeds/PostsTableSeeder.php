<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('posts')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('posts')->insert(
            [
                [
                    'title'       => 'Patrick Allaert vous propose un atelier pour créer votre propre extension PHP',
                    'category_id'    => '1',
                    'content' =>'Le mercredi 13 mai, deux ateliers sont planifiés.',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Dynamisez vos sites web avec JavaScript !',
                    'category_id'    => '2',
                    'content' =>'Qui a jamais entendu parler du JavaScript ?',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Patrick Allaert vous propose un atelier pour créer votre propre extension PHP',
                    'category_id'    => '3',
                    'content' =>'Le mercredi 13 mai, deux ateliers sont planifiés.',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'       => 'Ocaml',
                    'category_id'    => NULL,
                    'content' =>'Le mercredi 13 mai, deux ateliers sont planifiés.',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
            ]
        );
    }

}
