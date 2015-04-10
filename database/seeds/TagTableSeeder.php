<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tags')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('tags')->insert(
            [
                [
                    'name'       => 'php',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],

                [
                    'name'       => 'sql',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name'       => 'AngularJS',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
            ]
        );
    }

}
