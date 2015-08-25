<?php

use Illuminate\Database\Seeder;
use \User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();

		// Users Data
		User::create(array(
				'username' => 'mohsin',
				'email' => 'mohsin@cassini.gosign.de',
				'password' => 'khansin',
				'salt' => 'asdfasdf'
			));
	}
}