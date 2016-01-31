<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailprovidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailproviders', function(Blueprint $table)
        {
            $table->increments("id");
            $table->string("name");
            $table->string("driver");
            $table->string("host");
            $table->string("port");
            $table->string("encryption");
            $table->string("username");
            $table->string("password");
            $table->string("sendmail");
            $table->string("pretend");
            $table->string("fromemail");
            $table->string("fromname");
            $table->string("status");
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
        Schema::drop('providers');
    }
}
