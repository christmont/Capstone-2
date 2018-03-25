<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientadversesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientadverses', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('client_id')->unsigned()->nullable();
            $table->foreign('adverse_id')->references('id')->on('adverses')->onDelete('cascade');
            $table->integer('adverse_id')->unsigned()->nullable();
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
        Schema::dropIfExists('clientadverses');
    }
}
