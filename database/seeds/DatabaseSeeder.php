<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected $toTruncate = ['accounts'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

    	foreach($this->toTruncate as $table){
    		DB::table($table)->truncate();
    	}

        $this->call('AccountsTableSeeder');

    }
}
