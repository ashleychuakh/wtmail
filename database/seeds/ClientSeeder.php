<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class ClientSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            $clients = [
                  [
                        'username' => 'radiancecommunications',
                        'password' => bcrypt('TIQ/vyxDl6rU-$NZ'),
                        'company' => 'Radiance Communications Pte Ltd',
                        'token' => '',
                        'email' => 'enquiries@radiancecomms.com',
                        'emailname' => 'Radiance Communications',
                        'emailsubject' => 'Radiance Lead Enquiry',
                        'mailproviderid' => '1',
                        'status' => '0',
                  ]
            ];

            DB::table('clients')->insert($clients);
	}

}
