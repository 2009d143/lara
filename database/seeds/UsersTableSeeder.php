<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
	        array(
	        	array(
			       'name' => 'Vignesh kumar',
			       'email' => 'vigneshkumaratnovalnet@gmail.com',
			       'email_verified_at' =>'2020-11-12 10:30:33',
			       'password' =>'123456',
			       'remember_token' =>'Yes',
			       'created_at' =>'2020-11-11 08:20:22',
			       'updated_at' =>'2020-11-13 18:20:22'
			   	),
	        	array(
			       'name' => 'Selva kumaran',
			       'email' => 'selva@gmail.com',
			       'email_verified_at' =>'2020-11-12 10:30:33',
			       'password' =>'selva',
			       'remember_token' =>'Yes',
			       'created_at' =>'2020-11-11 08:20:22',
			       'updated_at' =>'2020-11-13 18:20:22'
			   	),
		   	)
        );
    }
}
