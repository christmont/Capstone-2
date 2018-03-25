<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequeststatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requeststats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->unique();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->integer('service_id')->unsigned()->nullable();
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
        Schema::dropIfExists('requeststats');
    }
}
