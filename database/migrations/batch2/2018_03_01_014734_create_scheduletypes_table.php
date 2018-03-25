<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduletypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduletypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->unique();
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->integer('schedule_id')->unsigned()->nullable();
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
        Schema::dropIfExists('scheduletypes');
    }
}
