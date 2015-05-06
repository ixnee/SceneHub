<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
  	$user = User::create(array(
	  'username' => 'ixnee',
	  'email' 	 => 'ixnee@email.com',
	  'password' => 'Pass1234'
		));

		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 100; $i++)
		{
		  $user = User::create(array(
		    'username' => $faker->userName,
		    'email' => $faker->safeEmail,
		    'password' => $faker->password,
		    'date_registered' => $faker->dateTimeThisYear($max = 'now')
		  ));
		}
  }
 
}