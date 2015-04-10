<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

    class  CategoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('Categories')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('Categories')->insert(
            [
                [
                    'title'=>'php',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'=>'javascript',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'title'=>'java',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],

            ]
        );
    }

}
