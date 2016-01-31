<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function(Blueprint $table)
        {
            $table->increments("id");
            $table->string("name");
            $table->string("email");
            $table->string("company");
            $table->string("phone");
            $table->string("message", 5000);
            $table->integer('clientid')->unsigned()->nullable();
            $table->foreign("clientid")->references("id")->on("clients")->onDelete("SET NULL");
            $table->string("status");
            $table->timestamps();
        });;;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leads');
    }
}
