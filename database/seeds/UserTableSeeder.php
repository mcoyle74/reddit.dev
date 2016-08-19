<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$seeds = [
			['name' => 'Michael', 'email' => 'michael@qmail.com', 'password' => 'Michael42'],
			['name' => 'John', 'email' => 'john@jmail.com', 'password' => 'John42'],
			['name' => 'Joshua', 'email' => 'joshua@jmail.com', 'password' => 'Joshua42'],
			['name' => 'Jane', 'email' => 'jane@jmail.com', 'password' => 'Jane42'],
			['name' => 'Jeremy', 'email' => 'jeremy@jmail.com', 'password' => 'Jeremy42'],
			['name' => 'Jennifer', 'email' => 'jennifer@jmail.com', 'password' => 'Jennifer42'],
			['name' => 'James', 'email' => 'james@jmail.com', 'password' => 'James42'],
			['name' => 'Justin', 'email' => 'justin@jmail.com', 'password' => 'Justin42'],
			['name' => 'Jason', 'email' => 'jason@jmail.com', 'password' => 'Jason42'],
			['name' => 'Julia', 'email' => 'julia@jmail.com', 'password' => 'Julia42'],
			['name' => 'Jenna', 'email' => 'jenna@jmail.com', 'password' => 'Jenna42'],
			['name' => 'Jorge', 'email' => 'jorge@jmail.com', 'password' => 'Jorge42'],
		];

		foreach ($seeds as $seed) {
			$user = new App\User();
			$user->name = $seed['name'];
			$user->email = $seed['email'];
			$user->password = Hash::make($seed['password']);
			$user->save();
		}
	}
}
