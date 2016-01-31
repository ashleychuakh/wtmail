<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class MailProviderSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            $mailproviders = [
                  [
                        'name' => 'MailGun',
                        'driver' => 'mailgun',
                        'host' => 'smtp.mailgun.org',
                        'port' => '587',
                        'encryption' => 'tls',
                        'username' => 'postmaster@mailgun.webtailors.sg',
                        'password' => '0a438aa65f99d3a42495d5d839b37e95',
                        'sendmail' => '/usr/sbin/sendmail -bs',
                        'pretend' => 'false',
                        'fromemail' => 'noreply@webtailors.sg',
                        'fromname' => 'WebTailors No Reply',
                        'status' => '0',
                  ]
            ];

            DB::table('mailproviders')->insert($mailproviders);
	}

}
