<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class tagPostTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tag_post')->delete();
        DB::table('tag_post')->insert(
            [
                [
                    'tag_id'  => '1',
                    'post_id'=>'1',

                ],
                [
                    'tag_id' => '2',
                    'post_id'=>'1',

                ],

            ]
        );
    }

}
