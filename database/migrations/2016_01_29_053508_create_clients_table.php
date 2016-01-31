<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table)
        {
            $table->increments("id");
            $table->string("username");
            $table->string("password");
            $table->string("company");
            $table->string("token", 500)->index();
            $table->string("email");
            $table->string("emailname");
            $table->string("emailsubject");
            $table->integer("mailproviderid")->unsigned()->nullable();
            $table->foreign("mailproviderid")->references("id")->on("mailproviders")->onDelete("SET NULL");
            $table->string("status");
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
