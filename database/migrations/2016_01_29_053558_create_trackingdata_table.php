
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackingdata', function(Blueprint $table)
        {
            $table->increments("id");
            $table->string("clienttoken")->references("token")->on("clients")->onDelete("SET NULL");
            $table->string("ipv4");
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
        Schema::drop('logging');
    }
}
