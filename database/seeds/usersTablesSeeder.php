<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('users')->insert(
            [
                [
                    'name'       => 'julien',
                    'email'    => 'julien@tonys.fr',
                    'password'        => Hash::make('tony'),
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],

            ]
        );
    }

}
