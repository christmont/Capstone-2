<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',80);
            $table->string('type',50);
            $table->string('controlno',15);
            $table->dateTime('start');
            $table->dateTime('end');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->integer('employee_id')->unsigned()->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('client_id')->unsigned()->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
