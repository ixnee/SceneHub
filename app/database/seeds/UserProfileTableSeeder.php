<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				UserProfileTableSeeder.php
 * Description:			Table seeder for users table and profiles table, using the Faker Factory seed library
 */
 
class UserProfileTableSeeder extends Seeder {
 
  public function run()
  {
  	$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 100; $i++)

		{
		  $users = User::create(array(
		    'username' => ucfirst(strtolower($faker->unique()->userName(3, 20))),
		    'email' => $faker->safeEmail,
		    'password' => Hash::make($faker->password),
		    'date_registered' => $faker->dateTimeThisYear($max = 'now')
		  ));
		  
			$profiles = Profile::create(array(
				'user_id' => $users->id,
				'role_id' => $faker->numberBetween($min = 1, $max = 7),
				'first' => $faker->firstName($gender = null|'male'|'female'),
				'last' => $faker->lastName,
				'phone' => $faker->numberBetween($min = 1000000000, $max = 9999999999),
				'bio' => $faker->text($maxNbChars = 200),
				'birthdate' => $faker->dateTimeBetween($startDate = '-40 years', $endDate = 'now'),
				'city_id' => $faker->numberBetween($min = 1, $max = 7)
			));

		}
  }
 
}