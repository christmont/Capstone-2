<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdversesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('advprtytype',50);
            $table->string('advprtyfname',50);
            $table->string('advprtymname',50);
            $table->string('advprtylname',50);
            $table->string('advprtyaddress',150);
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
        Schema::dropIfExists('adverses');
    }
}
