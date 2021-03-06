<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function(Blueprint $table)
        {
            $table->increments("id");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("email")->unique();
            $table->string("firstname");
            $table->string("usertype");
            $table->string("status");
            $table->string("remember_token")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');
    }
}
