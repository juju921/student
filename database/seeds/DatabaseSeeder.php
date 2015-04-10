<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
        $this->call('StudentTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('tagPostTableSeeder');

	}

}
