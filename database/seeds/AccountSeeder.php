<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class AccountSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            $accounts = [
                  [
                        'username' => 'johndoe',
					    'password' => bcrypt('password'), 
						'email' => 'johndoe@example.sg',
				        'firstname' => 'john',
				        'usertype' => 'admin', 
				        'status' => '0',
				        'remember_token' => str_random(10)
                  ]
            ];

            DB::table('accounts')->insert($accounts);
	}

}